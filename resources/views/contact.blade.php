<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
    
    <h1>Contacts</h1>

    <h2>Hannah Bakery Contact Information</h2>
    <p>Business Address: Brgy 6, Buenavista</p>
    <p>Contact Number: 0985 622 9870</p>
    <p>Email: HannahBakery@gmail.com</p>

    
</body>
</html>
