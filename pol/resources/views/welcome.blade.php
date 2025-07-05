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

        <!-- Add this somewhere below your intro section -->
    <div id="myprojects" class="my-projects-section">
        <h2>My Projects</h2>
        <p>Here are some of my awesome web projects!</p>
        <!-- Add your project cards or items here -->
    </div>


        <div style="height: 1500px;"></div> <!-- This forces vertical overflow for demo -->




@endsection
