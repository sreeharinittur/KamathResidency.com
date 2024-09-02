<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnalyticsController extends Controller
{
    public function fetchBookingsData(Request $request)
    {
        $year = $request->query('year');
        $month = $request->query('month');

        if (!$year || !$month) {
            return response()->json(['error' => 'Year and month are required'], 400);
        }

        try {
            $bookings = DB::table('bookings')
                ->select(DB::raw('room_id, COUNT(*) as count'))
                ->whereYear('start_date', $year)
                ->whereMonth('start_date', $month)
                ->groupBy('room_id')
                ->get();

            $roomIds = $bookings->pluck('room_id');
            $bookingCounts = $bookings->pluck('count');

            return response()->json([
                'roomIds' => $roomIds,
                'bookingCounts' => $bookingCounts
            ]);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Error fetching data'], 500);
        }
    }
}
