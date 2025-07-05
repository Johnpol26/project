@extends('layout.app')

@section('title', 'Home')

@section('content')

    <script>
        let currentIndex = 0;

        function scrollProjects(direction) {
            const container = document.getElementById("projectContainer");
            const boxWidth = container.querySelector('.project-box').offsetWidth;
            const totalProjects = container.children.length;
            const maxIndex = Math.ceil(totalProjects / 3) - 1;

            currentIndex += direction;

            if (currentIndex < 0) currentIndex = 0;
            if (currentIndex > maxIndex) currentIndex = maxIndex;

            container.style.transform = `translateX(-${currentIndex * 100}%)`;
        }
    </script>

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

    <div class="btn-wrapper" style="display: flex; align-items: center; gap: 10px;">
        <a href="#myprojects" style="text-decoration: none;">
            <button class="btn-proj">
                <i class="fas fa-folder-open"></i> My Project
            </button>
        </a>

        <span class="tech-icon">
            <i class="fab fa-html5" id="html"></i> Html
            <i class="fab fa-js" id="javascript"></i> JavaScript
            <i class="fab fa-css3-alt" id="css"></i> CSS
            <i class="fab fa-php" id="php"></i> PHP
        </span>
    </div>

        <!-- My Projects Section -->
    <div id="myprojects" class="my-projects-section">
        <h2 class="section-heading">MY PROJECTS</h2>
        <div class="project-wrapper">
            <button class="nav-btn left" onclick="scrollProjects(-1)">
                &#10094;
            </button>

            <div class="project-container" id="projectContainer">
                <div class="project-box">
                    <img src="{{ asset('images/brand.jpg') }}" alt="Project 1" class="project-image">
                    <h3 class="project-title">Inventory Management System</h3>
                    <p class="project-description">A short description of what this project does or what it's about.</p>
                </div>

                <div class="project-box">
                    <img src="{{ asset('images/category.jpg') }}" alt="Project 2" class="project-image">
                    <h3 class="project-title">Inventory Management System</h3>
                    <p class="project-description">A short description of what this project does or what it's about.</p>
                </div>

                <div class="project-box">
                    <img src="{{ asset('images/product.jpg') }}" alt="Project 3" class="project-image">
                    <h3 class="project-title">Inventory Management System</h3>
                    <p class="project-description">A short description of what this project does or what it's about.</p>
                </div>

                <div class="project-box">
                    <img src="{{ asset('images/select-product.jpg') }}" alt="Project 4" class="project-image">
                    <h3 class="project-title">Inventory Management System</h3>
                    <p class="project-description">A short description of what this project does or what it's about.</p>
                </div>

                <div class="project-box">
                    <img src="{{ asset('images/account.jpg') }}" alt="Project 4" class="project-image">
                    <h3 class="project-title">Inventory Management System</h3>
                    <p class="project-description">A short description of what this project does or what it's about.</p>
                </div>

                <div class="project-box">
                    <img src="{{ asset('images/audit.jpg') }}" alt="Project 4" class="project-image">
                    <h3 class="project-title">Inventory Management System</h3>
                    <p class="project-description">A short description of what this project does or what it's about.</p>
                </div>

                <div class="project-box">
                    <img src="{{ asset('images/generatePDF.jpg') }}" alt="Project 4" class="project-image">
                    <h3 class="project-title">Inventory Management System</h3>
                    <p class="project-description">A short description of what this project does or what it's about.</p>
                </div>
            </div>

            <button class="nav-btn right" onclick="scrollProjects(1)">
                &#10095;
            </button>
        </div>
    </div>

@endsection
