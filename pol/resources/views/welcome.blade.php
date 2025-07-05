@extends('layout.app')

@section('title', 'Home')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

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
