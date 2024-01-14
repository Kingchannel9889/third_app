<!-- header.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website - Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        nav {
            background-color: #444;
            padding: 0.5em;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 1em;
            margin: 0 10px;
            font-weight: bold;
        }

        nav a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>King Travel Agency</h1>
    </header>

    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('services') }}">Services</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>
</body>
</html>
