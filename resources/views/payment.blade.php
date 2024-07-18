<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .StripeElement {
            box-sizing: border-box;
            height: 40px;
            padding: 10px 12px;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Payment</h2>
        @if(session('message'))
            <div class="alert alert-info">{{ session('message') }}</div>
        @endif
        <form id="payment-form" method="post" action="{{ route('process.payment') }}">
            @csrf
            @if($bookingData)
                <input type="hidden" name="room_id" value="{{ $bookingData['room_id'] }}">
                <input type="hidden" name="name" value="{{ $bookingData['name'] }}">
                <input type="hidden" name="email" value="{{ $bookingData['email'] }}">
                <input type="hidden" name="phone" value="{{ $bookingData['phone'] }}">
                <input type="hidden" name="startDate" value="{{ $bookingData['startDate'] }}">
                <input type="hidden" name="endDate" value="{{ $bookingData['endDate'] }}">
                <input type="hidden" name="amount" value="{{ $bookingData['amount'] }}">
            @endif
            <input type="hidden" name="payment_intent_id" id="payment-intent-id">

            <div class="form-group">
                <label for="card-element" class="mb-2">Credit or Debit Card</label>
                <div id="card-element" class="StripeElement StripeElement--empty"></div>
                <div id="card-errors" role="alert" class="text-danger mt-2"></div>
            </div>

            <button id="pay-btn" class="btn btn-primary mt-4" type="button" onclick="createPaymentIntent()">Pay @if($bookingData) ${{ $bookingData['amount'] }} @endif</button>
        </form>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('{{ env('STRIPE_PK') }}');
        var elements = stripe.elements();
        var card = elements.create('card', {
            style: {
                base: {
                    color: '#32325d',
                    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                        color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            }
        });
        card.mount('#card-element');

        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        function createPaymentIntent() {
            fetch('{{ route('create.payment.intent') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    amount: @if($bookingData) {{ $bookingData['amount'] * 100 }} @else 0 @endif,
                    currency: 'usd'
                })
            })
            .then(response => response.json())
            .then(data => {
                stripe.confirmCardPayment(data.client_secret, {
                    payment_method: {
                        card: card,
                        billing_details: {
                            name: @if($bookingData) '{{ $bookingData['name'] }}' @else '' @endif,
                            email: @if($bookingData) '{{ $bookingData['email'] }}' @else '' @endif
                        }
                    }
                }).then(function(result) {
                    if (result.error) {
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                    } else {
                        if (result.paymentIntent.status === 'succeeded') {
                            document.getElementById('payment-intent-id').value = result.paymentIntent.id;
                            document.getElementById('payment-form').submit();
                        }
                    }
                });
            });
        }
    </script>
</body>
</html>
