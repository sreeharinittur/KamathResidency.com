<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Kamath Residency</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Roboto', sans-serif;
        }
        .gallery {
            padding: 60px 0;
        }
        .gallery h2 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 3em;
            color: #343a40;
            font-weight: bold;
        }
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            transition: transform 0.3s ease;
        }
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        .gallery-item .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.5em;
            text-align: center;
            padding: 20px;
            border-radius: 15px;
        }
        .gallery-item:hover .overlay {
            opacity: 1;
        }
        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        @media (max-width: 576px) {
            .gallery-item .overlay {
                font-size: 1.2em;
            }
        }
    </style>
</head>
<body>

<div class="container gallery">
    <h2>Our Gallery</h2>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 gallery-item">
            <img src="images/kr1.jpg" alt="Hotel Room 1">
            
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 gallery-item">
            <img src="images/kr2.jpg" alt="Hotel Lobby">
            
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 gallery-item">
            <img src="images/kr3.jpg" alt="Hotel Pool">
            
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 gallery-item">
            <img src="images/r2.jpg" alt="Hotel Restaurant">
            
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 gallery-item">
            <img src="images/r3.jpg" alt="Hotel Spa">
            
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 gallery-item">
            <img src="images/reception.jpg" alt="Hotel Gym">
            
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
