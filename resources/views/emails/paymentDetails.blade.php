<!DOCTYPE html>
<html>
<head>
    <title>Payment and Booking Details</title>
</head>
<body>
    <h1>Payment Confirmation</h1>
    <p>Dear {{ $details['name'] }},</p>
    <p>Your payment was successful! Here are your booking details:</p>
    <ul>
        <li>Room ID: {{ $details['room_id'] }}</li>
        <li>Start Date: {{ $details['start_date'] }}</li>
        <li>End Date: {{ $details['end_date'] }}</li>
        <li>Amount: ${{ $details['amount'] }}</li>
    </ul>
    <p>Thank you for your booking!</p>
</body>
</html>
