<!-- resources/views/payment_success.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Payment Successful!</h3>
            </div>
            <div class="card-body">
                <p>Your payment has been processed successfully and your booking is confirmed.</p>
                <p>We have sent a confirmation message to your phone number.</p>
                <a href="{{ url('/') }}" class="btn btn-primary">Go to Home</a>
            </div>
        </div>
    </div>
</body>
</html>
