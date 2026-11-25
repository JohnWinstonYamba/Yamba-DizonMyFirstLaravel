<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hannah's Bakery - About</title>
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml;base64,{{ base64_encode(file_get_contents(resource_path('images/logo.svg'))) }}">
<style>
     body {
            font-family: Arial, sans-serif;
            background-color: #eaf2f8;
            color: #333;
        
            padding: 30px;
        }

        h1 {
            color: #2563a6;
            margin-bottom: 30px;
        }

        h2 {
            color: #34495e;
            margin-top: 25px;
        }

        p {
            background-color: white;
            padding: 12px;
            margin: 10px 0;
            max-width: 400px;
            border-radius: 8px;
        }
</style>
</head>
<body style="background: url('data:image/svg+xml;base64,{{ base64_encode(file_get_contents(resource_path('images/banner.svg'))) }}') center/cover fixed;">
    <a href="{{ route('index') }}">Home</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('contact') }}">Contact</a>
    <a href="{{ route('products') }}">Products</a>

    <h1>About Hannah's Bakery</h1>
    <h2>Company information and history.</h2>
    <p>Hannah's Bakery started in 2018 in a small home kitchen. Hannah loved baking bread and cakes for her family and friends. They enjoyed her treats so much that neighbors began asking to buy them.</p>
    <h2>Vision</h2>
    <p>To be the most loved neighborhood bakery, known for fresh and delicious treats that bring people together.</p>
    <h2>Mission</h2>
    <p>To bake fresh bread, cakes, and pastries every day using quality ingredients, and to serve every customer with warmth and care.</p>
    <h2>Business Goals</h2>
    <ul>
    <li>Serve fresh baked goods every day.</li>
    <li>Use quality ingredients in all our products.</li>
    <li>Build a loyal base of happy, returning customers.</li>
    <li>Offer new flavors and products every season.</li>
    <li>Open a second branch within five years.</li>
    </ul>
    
</body>
</html>