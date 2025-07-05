@extends('layout.app')

@section('title', 'Home')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

    <div class="background-cubes">
        <div class="cube" style="left: 5%; animation-delay: 0s;"></div>
        <div class="cube" style="left: 20%; animation-delay: 4s;"></div>
        <div class="cube" style="left: 35%; animation-delay: 8s;"></div>
        <div class="cube" style="left: 50%; animation-delay: 2s;"></div>
        <div class="cube" style="left: 65%; animation-delay: 6s;"></div>
        <div class="cube" style="left: 80%; animation-delay: 10s;"></div>
        <div class="cube" style="left: 95%; animation-delay: 1s;"></div>
    </div>

    <div class="intro">
        <div class="intro-text">
            <h1 class="hi">Hi,</h1><br>
            <h1 class="myname"> My name is John Pol Montalvo</h1><br><br>
            <h1 class="webdev">Web Developer</h1>
            <p class="intro-description">
                A web developer who builds clean, responsive websites with purpose.
            </p>
        </div>
        <div class="intro-image">
            <img src="{{ asset('css/pol.jpg') }}" alt="John Pol Montalvo">
        </div>
    </div>
@endsection
