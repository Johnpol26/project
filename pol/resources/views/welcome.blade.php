@extends('layout.app')

@section('title', 'Home')

@section('content')

    <script>
        function scrollProjects(direction) {
            const container = document.getElementById('projectContainer');
            const scrollAmount = container.clientWidth * 0.9; // Scroll by 90% of the container width
            container.scrollBy({
                left: direction * scrollAmount,
                behavior: 'smooth'
            });
        }

        // Wait for DOM to be ready before attaching image click listeners
        document.addEventListener('DOMContentLoaded', function () {
            // Open modal when an image is clicked
            document.querySelectorAll('.project-image').forEach(img => {
                img.addEventListener('click', function () {
                    document.getElementById('imageModal').style.display = "block";
                    document.getElementById('modalImage').src = this.src;
                });
            });
        });

        // Optional: close modal when clicking outside the image
        window.onclick = function(event) {
            const modal = document.getElementById('imageModal');
            if (event.target == modal) {
                modal.style.display = "none";
            }
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
            <img src="{{ asset('images/profile.jpg') }}" alt="John Pol Montalvo">
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
            <button class="nav-btn left" onclick="scrollProjects(-1)">&#10094;</button>

            <div class="project-container" id="projectContainer">
                <div class="project-box">
                    <img src="{{ asset('images/brand.jpg') }}" alt="Project 1" class="project-image">
                    <h3 class="project-title">Inventory Management System</h3>
                    <p class="project-description">In this section, you can add a brand along with its type and code. You can also edit existing entries to update the brand details or delete them if needed.</p>
                </div>

                <div class="project-box">
                    <img src="{{ asset('images/category.jpg') }}" alt="Project 2" class="project-image">
                    <h3 class="project-title">Inventory Management System</h3>
                    <p class="project-description">In this section, you can add a category along with its type and code. You can also edit existing categories or delete them as needed.</p>
                </div>

                <div class="project-box">
                    <img src="{{ asset('images/product.jpg') }}" alt="Project 3" class="project-image">
                    <h3 class="project-title">Inventory Management System</h3>
                    <p class="project-description">In this section, you can add a product along with its type and code. You can also edit existing products or delete them as needed.</p>
                </div>

                <div class="project-box">
                    <img src="{{ asset('images/select-product.jpg') }}" alt="Project 4" class="project-image">
                    <h3 class="project-title">Inventory Management System</h3>
                    <p class="project-description">In this section, you can select a brand and category, then add a product along with its code, quantity, and price. You can also edit or delete existing products as needed.</p>
                </div>

                <div class="project-box">
                    <img src="{{ asset('images/account.jpg') }}" alt="Project 4" class="project-image">
                    <h3 class="project-title">Inventory Management System</h3>
                    <p class="project-description">In this section, you can view your account details, edit your information, and change your password.</p>
                </div>

                <div class="project-box">
                    <img src="{{ asset('images/audit.jpg') }}" alt="Project 4" class="project-image">
                    <h3 class="project-title">Inventory Management System</h3>
                    <p class="project-description">In this section, you can view user activity and see what actions they have performed.</p>
                </div>

                <div class="project-box">
                    <img src="{{ asset('images/generatePDF.jpg') }}" alt="Project 4" class="project-image">
                    <h3 class="project-title">Inventory Management System</h3>
                    <p class="project-description">In this section, you can generate a PDF file, and the same functionality is also available in other modules."</p>
                </div>
            </div>

            <button class="nav-btn right" onclick="scrollProjects(1)"> &#10095;</button>
        </div>
    </div>

        <!-- Image Modal -->
    <div id="imageModal" class="modal">
        <img class="modal-content" id="modalImage">
    </div>

    <!-- My Contact Section -->
    <div id="contact" class="my-projects-section">
        <h2 class="section-heading">MY CONTACT</h2>
        <div class="center-container">
            <div class="contact-wrapper">
                <form class="contact-form">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required placeholder="Your Name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required placeholder="Your Email">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required placeholder="Subject">
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" class="btn-submit">Send Message</button>
                </form>
            </div>
        </div>
                <!-- Contact Buttons with Icons and Border -->
        <div class="contact-buttons-with-border">
            <a href="tel:+1234567890" class="contact-icon call">
                <i class="fas fa-phone"></i> <span>Call</span>
            </a>
            <a href="https://www.facebook.com/yourpage" target="_blank" class="contact-icon facebook">
                <i class="fab fa-facebook-f"></i> <span>Facebook</span>
            </a>
            <a href="https://www.instagram.com/yourprofile" target="_blank" class="contact-icon instagram">
                <i class="fab fa-instagram"></i> <span>Instagram</span>
            </a>
        </div>

    </div>

@endsection
