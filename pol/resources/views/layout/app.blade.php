<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <title>@yield('title', 'Welcome')</title>
</head>
<body>

    <div class="background-cubes">
        <div class="cube" style="left: 5%; animation-delay: 0s;"></div>
        <div class="cube" style="left: 20%; animation-delay: 4s;"></div>
        <div class="cube" style="left: 35%; animation-delay: 8s;"></div>
        <div class="cube" style="left: 50%; animation-delay: 2s;"></div>
        <div class="cube" style="left: 65%; animation-delay: 6s;"></div>
        <div class="cube" style="left: 80%; animation-delay: 10s;"></div>
        <div class="cube" style="left: 95%; animation-delay: 1s;"></div>
    </div>

    @include('partials.navbar')

    @yield('content')
</body>
</html>
