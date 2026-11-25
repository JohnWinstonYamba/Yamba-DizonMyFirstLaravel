<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hannah's Bakery</title>
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
        .cta-button {
            display: inline-block;
            background-color: #d2691e;
            color: white;
            padding: 12px 28px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        }

        .cta-button:hover {
            background-color: #a0522d;
        }
    </style>
</head>
<body style="background: url('data:image/svg+xml;base64,{{ base64_encode(file_get_contents(resource_path('images/banner.svg'))) }}') center/cover fixed;">
    <a href="{{ route('index') }}">Home</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('contact') }}">Contact</a>
    <a href="{{ route('products') }}">Products</a>
    
    <h1>Welcome to Hannah's Bakery</h1>
    <p>Founded by: Kris Dizon and John Yamba</p>

    <hr>

    <h2>"Baked fresh, made with love."</h2>
    <a href="{{ route('products') }}" class="cta-button">Shop Now</a>
</body>
</html>