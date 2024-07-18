<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
</head>
<body>
    <p>Dear {{ $bookingData['name'] }},</p>
    <p>Your booking for Room ID: {{ $bookingData['room_id'] }} has been confirmed. Your stay is from {{ $bookingData['startDate'] }} to {{ $bookingData['endDate'] }}.</p>
    <p>Thank you for choosing our service.</p>
    <p>Best Regards,<br>Your Company Name</p>
</body>
</html>
