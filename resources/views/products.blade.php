<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

        h3 {
            color: #34495e;
            margin-top: 20px;
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

    <h3>Classic Pandesal</h3>
    <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(resource_path('images/pandesal.jpg'))) }}" alt="Classic Pandesal" width="100">
    <p>Soft, warm bread rolls baked fresh every morning.</p>
    <p>Price: ₱5 each</p>

    <h3>Chocolate Cake</h3>
    <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(resource_path('images/chocolatecake.jpg'))) }}" alt="Chocolate Cake" width="100">
    <p>Moist chocolate cake with creamy chocolate frosting.</p>
    <p>Price: ₱450</p>

    <h3>Ensaymada</h3>
    <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(resource_path('images/Ensaymada.jpg'))) }}" alt="Ensaymada" width="100">
    <p>Sweet, fluffy bread topped with butter, sugar, and cheese.</p>
    <p>Price: ₱35 each</p>
</body>
</html>