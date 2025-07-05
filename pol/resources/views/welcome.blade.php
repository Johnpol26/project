@extends('layout.app')

@section('title', 'Home')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

    <div class="intro">
        <div class="intro-text">
            <h1 class="hi">Hi,</h1><br>
            <h1 class="myname"> My name is John Pol Montalvo</h1><br>
            <h1 class="webdev">Web Developer</h1>
            <p class="intro-description">
                A web developer who builds clean, responsive websites with purpose.
            </p>
        </div>
        <div class="intro-image">
            <img src="{{ asset('css/pol.jpg') }}" alt="John Pol Montalvo">
        </div>
    </div>

    <div class="btn-wrapper">
        <button class="btn-proj">
            <i class="fas fa-folder-open"></i> My Project
        </button>
    </div>

    <!-- My Projects Section -->
    <div id="myprojects" class="my-projects-section">
        <h2 class="section-heading">MY PROJECTS</h2>

        <div class="project-container">
            <div class="project-box">
                <img src="{{ asset('css/sample-project.jpg') }}" alt="Project 1" class="project-image">
                <h3 class="project-title">Project Title</h3>
                <p class="project-description">A short description of what this project does or what it's about.</p>
            </div>

            <div class="project-box">
                <img src="{{ asset('css/sample-project.jpg') }}" alt="Project 2" class="project-image">
                <h3 class="project-title">Project Title</h3>
                <p class="project-description">A short description of what this project does or what it's about.</p>
            </div>

            <div class="project-box">
                <img src="{{ asset('css/sample-project.jpg') }}" alt="Project 3" class="project-image">
                <h3 class="project-title">Project Title</h3>
                <p class="project-description">A short description of what this project does or what it's about.</p>
            </div>
        </div>
    </div>
@endsection
