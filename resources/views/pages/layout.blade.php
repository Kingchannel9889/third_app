<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pages Name - @yield('title')</title>
</head>
<body>
    @include('pages/header')
    @section('content')
        
    @show
    @include('pages/footer')
</body>
</html>
