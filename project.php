<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ameer Ali | Projects & Certificates</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

   <?php include 'header.php'; ?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1 class="page-title">My <span class="gold-text">Projects & Certificates</span></h1>
        <p class="page-subtitle">A showcase of my web development work and professional certifications.</p>
    </div>
</section>

<!-- Projects & Certificates Section -->
<section class="projects-section">
    <div class="projects-container">

        <!-- 2 Main Category Filter Tabs -->
        <div class="filter-tabs">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="projects">Projects</button>
            <button class="filter-btn" data-filter="certificates">Certificates</button>
        </div>

        <!-- Grid Items -->
        <div class="projects-grid">

            <!-- 1. HTML & CSS Project -->
            <div class="project-card" data-category="projects">
                <div class="card-img">
                    <img src="assets/images/project_1.jpg" alt="HTML CSS Landing Page">
                    <div class="card-overlay">
                        <a href="https://muhsana123.github.io/Restaurant/" target="_blank" class="github-btn">
                            <i class="fa-brands fa-github"></i> View GitHub
                        </a>
                    </div>
                </div>
                <div class="card-content">
                    <span class="card-tag">HTML / CSS3 / JS / PHP</span>
                    <h3 class="card-title">Complete Restaurant Website</h3>
                    <p class="card-desc">Fully responsive restaurant website with dynamic menu filters and an online table reservation system.</p>
                </div>
            </div>

            <!-- 2. JavaScript Project -->
            <div class="project-card" data-category="projects">
                <div class="card-img">
                    <img src="assets/images/project_2.jpg" alt="JavaScript Web App">
                    <div class="card-overlay">
                        <a href="https://muhsana123.github.io/Contact-Form/" target="_blank" class="github-btn">
                            <i class="fa-brands fa-github"></i> View GitHub
                        </a>
                    </div>
                </div>
                <div class="card-content">
                    <span class="card-tag">HTML / CSS / JS / PHP</span>
                    <h3 class="card-title">Dynamic Contact Form System</h3>
                    <p class="card-desc">Dynamic web app with local storage integration for real-time state management. Secure PHP contact form with frontend validation and MySQL database integration.</p>
                </div>
            </div>

            <!-- 3. PHP & MySQL Project -->
            <div class="project-card" data-category="projects">
                <div class="card-img">
                    <img src="assets/images/projects/project3.jpg" alt="PHP E-Commerce Web App">
                    <div class="card-overlay">
                        <a href="https://github.com/muhsana123/php-ecommerce-system" target="_blank" class="github-btn">
                            <i class="fa-brands fa-github"></i> View GitHub
                        </a>
                    </div>
                </div>
                <div class="card-content">
                    <span class="card-tag">PHP / MySQL</span>
                    <h3 class="card-title">E-Commerce & Auth System</h3>
                    <p class="card-desc">Full-stack web application with user registration, dynamic cart, and database CRUD operations.</p>
                </div>
            </div>

            <!-- 4. Certificate Item 1 -->
            <div class="project-card cert-card" data-category="certificates">
                <div class="card-img">
                    <img src="assets/images/certificate.png" alt="Web Development Certification">
                    <div class="card-overlay">
                        <a href="assets/images/certificate.png" target="_blank" class="github-btn">
                            <i class="fa-solid fa-expand"></i> View Certificate
                        </a>
                    </div>
                </div>
                <div class="card-content">
                    <span class="card-tag gold-text">Achievement</span>
                    <h3 class="card-title">Full-Stack Web Development</h3>
                    <p class="card-desc">Certified in modern web standard practices including HTML, CSS, JS & PHP.</p>
                </div>
            </div>

            <!-- 5. Certificate Item 2 -->
            <div class="project-card cert-card" data-category="certificates">
                <div class="card-img">
                    <img src="assets/images/certificates/cert2.jpg" alt="PHP & Database Certificate">
                    <div class="card-overlay">
                        <a href="assets/images/certificates/cert2.jpg" target="_blank" class="github-btn">
                            <i class="fa-solid fa-expand"></i> View Certificate
                        </a>
                    </div>
                </div>
                <div class="card-content">
                    <span class="card-tag gold-text">Achievement</span>
                    <h3 class="card-title">PHP & Database Specialization</h3>
                    <p class="card-desc">Backend certification focusing on secure MySQL queries and session management.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Lightweight Filter JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const projectCards = document.querySelectorAll('.project-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filterValue = btn.getAttribute('data-filter');

                projectCards.forEach(card => {
                    if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                        card.classList.remove('hide');
                    } else {
                        card.classList.add('hide');
                    }
                });
            });
        });
    });
</script>

<?php include 'footer.php'; ?>