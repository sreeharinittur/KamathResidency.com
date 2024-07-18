<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bookings</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">KAMATH RESIDENCY</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{ route('mybookings') }}">My Bookings</a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h1 class="center-align">My Bookings</h1>
        <div class="row">
            @foreach($userBookings as $booking)
            @if($booking->status == 'confirmed')
            <div class="col s12 m6" id="booking-{{ $booking->id }}">
                <div class="card">
                    <div class="card-content">
                        
                            <span class="card-title">Booking ID: {{ $booking->id }}</span>
                            <p>Room Name: {{ $booking->room->room_title }}</p>
                            <p>Start Date: {{ $booking->start_date }}</p>
                            <p>End Date: {{ $booking->end_date }}</p>
                            <button class="btn red cancel-booking" data-booking-id="{{ $booking->id }}">Cancel</button>
                        
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        <div class="row">
            <h5>Cancellation Policy</h5>
            <p>1. Guests can cancel their booking for free up to 48 hours before the check-in date.</p>
            <p>2. If a guest cancels within 48 hours of the check-in date, they will be charged for the day's night's stay.</p>
            <p>3. If the guest does not show up without prior cancellation, they will be charged for the entire stay.</p>
            <p>4. Refunds for cancellations will be processed within 7-10 business days.</p>
        </div>
    </div>
    
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.cancel-booking').on('click', function() {
                var bookingId = $(this).data('booking-id');

                $.ajax({
                    url: '{{ route('cancel.booking') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        booking_id: bookingId
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#booking-' + bookingId).remove();
                            alert(response.message);
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(xhr) {
                        alert('An error occurred while cancelling the booking.');
                    }
                });
            });
        });
    </script>
</body>
</html>
