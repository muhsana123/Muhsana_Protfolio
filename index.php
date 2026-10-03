<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ameer Ali | Freelance Web Developer</title>
    
    <!-- Google Fonts -->
     
     <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-container">
        
        <!-- Left Side: Content -->
        <div class="hero-content">
            <div class="badge-gold">
                <i class="fa-solid fa-code"></i> Available For Freelance Projects
            </div>
            
            <h1 class="hero-title">
                Hi, I'm <span class="gold-text">Muhsana Ameer Ali</span><br>
                Full-Stack Web Developer
            </h1>
            
            <p class="hero-description">
             I specialize in crafting modern, clean, and fully responsive websites using HTML, CSS, JavaScript, and PHP. My passion lies in transforming client requirements into high-performance web solutions that combine intuitive UI/UX with robust backend logic. Dedicated to clean code and pixel-perfect execution, I deliver seamless digital experiences tailored to scale your business.
            </p>

            <!-- Buttons -->
            <div class="hero-buttons">
                <a href="https://wa.me/923000000000?text=Hi%20Ameer,%20I%20want%20to%20hire%20you!" target="_blank" class="btn-gold btn-large">
                    <i class="fa-brands fa-whatsapp"></i> Hire Me Now
                </a>
                <a href="project.php" class="btn-outline">
                    View My Projects <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <!-- Tech Stack Pills -->
            <div class="skills-mini">
                <span class="skill-tag"><i class="fa-brands fa-html5"></i> HTML</span>
                <span class="skill-tag"><i class="fa-brands fa-css3-alt"></i> CSS</span>
                <span class="skill-tag"><i class="fa-brands fa-js"></i> JavaScript</span>
                <span class="skill-tag"><i class="fa-brands fa-php"></i> PHP</span>
            </div>
        </div>

        <!-- Right Side: Image with Animated Frame -->
        <div class="hero-image-wrapper">
            <div class="image-frame">
                <!-- Apna Profile Image 'assets/images/profile/profile.jpg' path par rakhein -->
                <img src="assets/images/profile.jpg" alt="Ameer Ali" class="hero-img">
            </div>
            
            <!-- Floating Glow Cards -->
            <div class="floating-card experience-card">
                <i class="fa-solid fa-briefcase gold-icon"></i>
                <div>
                    <h4>100% Satisfaction</h4>
                    <p>Clean & Functional Code</p>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>

<script src="assets/js/main.js"></script>