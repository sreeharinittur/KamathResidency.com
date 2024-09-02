<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Room</title>
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            color: #3e2723;
        }

        .container {
            max-width: 700px;
            margin: 50px auto;
            padding: 30px;
            background-color: #efebe9;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h3 {
            text-align: center;
            color: #5d4037;
        }

        .input-field label {
            color: #6d4c41;
        }

        .input-field input[type="text"], 
        .input-field input[type="number"], 
        .input-field select {
            border: 1px solid #a1887f;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            color: #3e2723;
        }

        .input-field input[type="file"] {
            padding: 10px;
            color: #3e2723;
        }

        .btn {
            background-color: #8d6e63;
            color: #fff;
            border-radius: 5px;
            padding: 3px 20px;
            margin-top: 20px;
            margin-bottom:20px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #5d4037;
        }

        .progress {
            background-color: #d7ccc8;
            margin-bottom: 20px;
        }

        .alert-danger {
            background-color: #e57373;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .padding{
            padding-bottom:20px;
            padding-top:20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Add Room</h3>

        @if ($errors->any())
            <div class="alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="progress">
            <div class="determinate" style="width: 0%"></div>
        </div>

        <form id="roomForm" action="{{ url('add_room') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-field">
                <label for="title">Room Title</label>
                <input type="text" id="title" name="title" required>
                <span class="helper-text" data-error="Title is required"></span>
            </div>

            <div class="input-field">
                <label for="description">Description</label>
                <input type="text" id="description" name="description" required>
                <span class="helper-text" data-error="Description is required"></span>
            </div>

            <div class="input-field">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" required min="0" step="0.01">
                <span class="helper-text" data-error="Price is required"></span>
            </div>

            <div class="input-field">
                <select id="wifi" name="wifi" required>
                    <option value="" disabled selected>Select Wifi</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
                <label for="wifi">Wifi</label>
            </div>

            <div class="input-field">
                <select id="type" name="type" required>
                    <option value="" disabled selected>Select Type</option>
                    <option value="regular">Regular</option>
                    <option value="premium">Premium</option>
                    <option value="deluxe">Deluxe</option>
                </select>
                <label for="type">Room Type</label>
            </div>

            <div class="input-field">
                <div class="file-field input-field">
                    <div class="btn">
                        <span class="padding">Upload Images</span>
                        <input type="file" name="images[]" multiple accept="image/*" required>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Upload one or more images">
                    </div>
                </div>
            </div>

            <button id="submitBtn" type="submit" class="btn" disabled>Create Room</button>
        </form>
    </div>

    <!-- Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            M.FormSelect.init(elems);

            var form = document.getElementById('roomForm');
            var submitBtn = document.getElementById('submitBtn');

            form.addEventListener('input', function() {
                var isValid = form.checkValidity();
                submitBtn.disabled = !isValid;
            });

            var progressBar = document.querySelector('.progress .determinate');
            form.addEventListener('submit', function() {
                var progress = 0;
                var interval = setInterval(function() {
                    progress += 5;
                    progressBar.style.width = progress + '%';
                    if (progress >= 100) {
                        clearInterval(interval);
                    }
                }, 100);
            });
        });
    </script>
</body>
</html>
