<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use App\Services\TwilioService;
use Session;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    protected $twilioService;

    public function __construct(TwilioService $twilioService)
    {
        $this->twilioService = $twilioService;
    }

    public function room_details($id)
    {
        $room = Room::find($id);
        return view('room_details', compact('room'));
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function contactus()
    {
        return view('contactus');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function show_payment_page(Request $request)
    {
        $bookingData = [
            'room_id' => $request->room_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'startDate' => $request->startDate,
            'endDate' => $request->endDate,
            'amount' => $request->amount
        ];
        Session::put('bookingData', $bookingData);
        
        return view('payment', compact('bookingData'));
    }

    public function create_payment_intent(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SK'));

        $paymentIntent = PaymentIntent::create([
            'amount' => $request->amount * 100, // Amount in cents
            'currency' => 'usd',
        ]);

        return response()->json(['client_secret' => $paymentIntent->client_secret]);
    }

    

    public function process_payment(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SK'));
    
        $bookingData = Session::get('bookingData');
    
        Log::info('Booking Data: ', $bookingData);
    
        if (!$bookingData) {
            return response()->json(['error' => 'Booking data not found in session']);
        }
    
        try {
            $paymentIntent = PaymentIntent::retrieve($request->payment_intent_id);
    
            if ($paymentIntent->status === 'succeeded') {
                $booking = Booking::create([
                    'room_id' => $bookingData['room_id'],
                    'name' => $bookingData['name'],
                    'email' => $bookingData['email'],
                    'phone' => $bookingData['phone'],
                    'payment_status' => 'done',
                    'status' => 'confirmed',
                    'start_date' => $bookingData['startDate'],
                    'end_date' => $bookingData['endDate'],
                    'amount' => $bookingData['amount']
                ]);
    
                $message = 'Dear ' . $bookingData['name'] . ', your booking for Room ID: ' . $bookingData['room_id'] . ' has been confirmed. Your stay is from ' . $bookingData['startDate'] . ' to ' . $bookingData['endDate'] . '. Thank you for choosing our service.';
    
                $smsSent = $this->twilioService->sendSMS('+91' . $bookingData['phone'], $message);
    
                if ($smsSent) {
                    Log::info('SMS sent successfully to ' . $bookingData['phone']);
                } else {
                    Log::error('Failed to send SMS to ' . $bookingData['phone']);
                }
    
                // Clear session data after SMS has been sent
                Session::forget('bookingData');
    
                return response()->json(['success' => true, 'message' => 'Payment succeeded and booking confirmed. Confirmation SMS sent.']);
            } else {
                return response()->json(['error' => 'Payment failed']);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
public function cancelBooking(Request $request)
{
    $bookingId = $request->input('booking_id');
    $booking = Booking::find($bookingId);

    if (!$booking || $booking->status === 'cancelled') {
        return response()->json(['error' => 'Booking not found or already cancelled']);
    }

    $currentDate = new \DateTime();
    $checkInDate = new \DateTime($booking->start_date);

    // Check if the booking date is in the past
    if ($checkInDate < $currentDate) {
        return response()->json(['message' => 'Cannot cancel booking. The check-in date has already passed.'], 400);
    }
    else{

    // Calculate refund amount based on your cancellation policy
    $refundAmount = $this->calculateRefundAmount($booking);

    // Update booking status and refund_amount
    $booking->status = 'cancelled';
    $booking->refund_amount = $refundAmount;
    $booking->save();

    // Send cancellation notification via SMS using Vonage
    $this->sendBookingCancellationSMS($booking);


    return response()->json(['success' => true, 'message' => 'Booking cancelled successfully and refund processed']);
    
}}

private function calculateRefundAmount($booking)
{
    $checkInDate = new \DateTime($booking->start_date);
        $now = new \DateTime();

        $interval = $now->diff($checkInDate);
        $hoursDifference = $interval->h + ($interval->days * 24);

        $refundAmount = 0;

        if ($hoursDifference >= 48) {
            // Free cancellation
            $refundAmount = $booking->amount;
        } elseif ($hoursDifference < 48) {
            // Charge for one night's stay
            $refundAmount = $booking->amount - ($booking->amount / ($interval->days + 1));
        } else {
            // No refund for no-show
            $refundAmount = 0;
        }

        return $refundAmount;
}

// Method to send cancellation SMS via Vonage
public function sendBookingCancellationSMS($booking)
{
    
    $phoneNumber = $booking->phone;
    $message = "Dear {$booking->name}, your booking (ID: {$booking->id}) has been cancelled. Refund Amount: {$booking->refund_amount}";

    // Use TwilioService to send the SMS
    $smsSent = $this->twilioService->sendSMS('+91' . $phoneNumber, $message);

    if ($smsSent) {
        Log::info("SMS sent successfully to {$phoneNumber}");
    } else {
        Log::error("Failed to send SMS to {$phoneNumber}");
    }
}

public function menu()
{
    return view('menu');
}
}