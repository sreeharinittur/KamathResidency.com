<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Hotel Vegetarian Menu</title>
    <style>
        body {
            margin: 0;
            font-family: 'Lora', serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }
        .menu-container {
            width: 90%;
            max-width: 1200px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .menu-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            width: 300px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s;
            animation: fadeIn 1s ease-out;
            border: 2px solid #4CAF50; /* Indian green theme color */
            position: relative;
            text-align: center;
        }
        .menu-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);
            background-color: #e8f5e9; /* Light green background on hover */
        }
        .menu-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: opacity 0.3s;
        }
        .menu-card img:hover {
            opacity: 0.8;
        }
        .menu-card-content {
            padding: 20px;
        }
        .menu-card-content h3 {
            margin: 0;
            font-size: 24px;
            color: #388E3C; /* Dark green for headings */
            font-weight: bold;
            transition: color 0.3s;
        }
        .menu-card-content p {
            margin: 10px 0 0;
            color: #4E342E; /* Dark brown color for text */
            font-size: 16px;
        }
        .price-tag {
            font-size: 18px;
            color: #FF5722; /* Price color */
            font-weight: bold;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="menu-container">
        <div class="menu-card">
            <img src="https://images.unsplash.com/photo-1581635424692-4d4b9e84f5d4" alt="Idli">
            <div class="menu-card-content">
                <h3>Idli</h3>
                <p>Soft steamed rice cakes served with sambar and chutney.</p>
                <div class="price-tag">₹60</div>
            </div>
        </div>
        <div class="menu-card">
            <img src="https://images.unsplash.com/photo-1562941555-8b686d3c4e3e" alt="Dosa">
            <div class="menu-card-content">
                <h3>Dosa</h3>
                <p>Crispy thin crepe made from fermented rice and lentil batter.</p>
                <div class="price-tag">₹80</div>
            </div>
        </div>
        <div class="menu-card">
            <img src="https://images.unsplash.com/photo-1598042120402-575b1b0dd0ba" alt="Vada">
            <div class="menu-card-content">
                <h3>Vada</h3>
                <p>Spicy and crispy lentil fritters, perfect as a snack.</p>
                <div class="price-tag">₹70</div>
            </div>
        </div>
        <div class="menu-card">
            <img src="https://images.unsplash.com/photo-1587388040397-f6aa0676721b" alt="Chapati">
            <div class="menu-card-content">
                <h3>Chapati</h3>
                <p>Soft whole wheat flatbread, a staple in Indian cuisine.</p>
                <div class="price-tag">₹40</div>
            </div>
        </div>
        <div class="menu-card">
            <img src="https://images.unsplash.com/photo-1606096578295-5fa928bffb5e" alt="Poori">
            <div class="menu-card-content">
                <h3>Poori</h3>
                <p>Puffy deep-fried bread served with spicy curries.</p>
                <div class="price-tag">₹90</div>
            </div>
        </div>
        <div class="menu-card">
            <img src="https://images.unsplash.com/photo-1598895932584-6c1e6e6e8c6a" alt="Roti">
            <div class="menu-card-content">
                <h3>Roti</h3>
                <p>Traditional Indian flatbread cooked on a tandoor.</p>
                <div class="price-tag">₹50</div>
            </div>
        </div>
    </div>
</body>
</html>
