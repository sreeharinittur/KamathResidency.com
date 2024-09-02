<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Kamath Residency</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5e9e2;
            color: #3e3e3e;
            overflow-x: hidden;
        }

        header {
            background-color: #5a3e2d;
            color: #fff;
            padding: 20px 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: background-color 0.3s ease;
        }

        header nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header h1 {
            font-size: 2.5rem;
            margin: 0;
            transition: transform 0.3s ease;
        }

        header ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
        }

        header ul li {
            margin-left: 20px;
        }

        header ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1.1rem;
            position: relative;
            transition: color 0.3s, transform 0.3s;
        }

        header ul li a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 100%;
            height: 3px;
            background: #f5e9e2;
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.3s ease;
        }

        header ul li a:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        header ul li a:hover {
            color: #f5e9e2;
            transform: translateY(-2px);
        }

        section {
            padding: 60px 20px;
            text-align: center;
        }

        section h2 {
            font-size: 3rem;
            color: #5a3e2d;
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
            opacity: 0;
            animation: fadeInUp 1s forwards;
        }

        section h2::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: -10px;
            width: 60px;
            height: 5px;
            background: #f5e9e2;
            border-radius: 2px;
            transform: translateX(-50%);
        }

        section p {
            font-size: 1.2rem;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto;
            opacity: 0;
            animation: fadeInUp 1.5s 0.5s forwards;
        }

        .cards {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
            flex-wrap: wrap;
            opacity: 0;
            animation: fadeInUp 2s 1s forwards;
        }

        .card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 300px;
            transform: translateY(0);
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            cursor: pointer;
            margin-bottom: 20px;
            perspective: 1000px;
        }

        .card:hover {
            transform: translateY(-15px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        .card img {
            width: 100%;
            height: auto;
            display: block;
            transition: opacity 0.3s ease;
        }

        .card-content {
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .card:hover .card-content {
            opacity: 1;
        }

        .card-content h3 {
            margin: 0;
            font-size: 1.6rem;
            color: #5a3e2d;
            transition: transform 0.3s ease;
        }

        .card-content p {
            font-size: 1.1rem;
            color: #3e3e3e;
        }

        footer {
            background-color: #5a3e2d;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.2);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <h1>Kamath Residency</h1>
            <ul>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <section id="about">
        <h2>About Us</h2>
        <p>Welcome to Kamath Residency in Thirthahalli. We take pride in providing exceptional food and accommodation services. Our mission is to ensure that every guest enjoys a comfortable and memorable stay.</p>
        <div class="cards">
            <div class="card">
                
                <div class="card-content">
                    <h3>Delicious Food</h3>
                    <p>Experience a variety of mouth-watering dishes prepared with fresh ingredients and utmost care.</p>
                </div>
            </div>
            <div class="card">
                
                <div class="card-content">
                    <h3>Comfortable Accommodation</h3>
                    <p>Enjoy a relaxing stay in our well-appointed rooms designed for your comfort and convenience.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Kamath Residency. All rights reserved.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Additional JavaScript can be added here if needed
        });
    </script>
</body>
</html>
