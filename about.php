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

<!-- About Page Header -->
<section class="page-header">
    <div class="container">
        <h1 class="page-title">About <span class="gold-text">Me</span></h1>
        <p class="page-subtitle">Get to know my journey, skills, and passion for web development.</p>
    </div>
</section>

<!-- About Main Section -->
<section class="about-section">
    <div class="about-container">
        
        <!-- Left Side: Merged Image Gallery Collage -->
        <div class="about-gallery">
            <div class="collage-grid">
                <div class="collage-item item-main">
                    <img src="assets/images/m.png" alt="Ameer Ali Coding">
                </div>
                <div class="collage-item item-sub1">
                    <img src="assets/images/b.jpg" alt="Ameer Workspace">
                </div>
                <div class="collage-item item-sub2">
                    <img src="assets/images/c.png" alt="Ameer Ali Profile">
                </div>
                <div class="collage-badge">
                    <span class="badge-num">100%</span>
                    <span class="badge-text">Client Focus</span>
                </div>
            </div>
        </div>

        <!-- Right Side: Detailed Text Content -->
        <div class="about-content">
            <h2 class="section-title">
                Crafting Modern & High-Performance <span class="gold-text">Websites</span>
            </h2>
            
            <p class="about-text">
            <strong> Muhsana Ameer Ali</strong>.Driven by a passion for modern web technologies, I am a Full-Stack Web Developer with hands-on training from Aptech and currently pursuing a BS in Computer Science at Mohammad Ali Jinnah University. I specialize in building visually striking, highly interactive web applications using HTML, CSS, JavaScript, PHP, and Bootstrap.
            </p>

            <p class="about-text">
                My core focus centers on precision, performance, and clean architecture. I transform complex ideas into fully responsive designs enriched with smooth, engaging animations—ensuring every website delivers an intuitive, fast, and seamless experience across all screen sizes.
            </p>

            <!-- Key Info Grid -->
            <div class="info-grid">
                <div class="info-item">
                    <span class="info-label">Name:</span>
                    <span class="info-value">Muhsana Ameer Ali</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Role:</span>
                    <span class="info-value">Freelance Developer</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Tech Stack:</span>
                    <span class="info-value">HTML, CSS, JS, PHP, MySQL</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Availability:</span>
                    <span class="info-value gold-text">Open for Projects</span>
                </div>
            </div>

            <!-- Skills Progress Bars -->
            <div class="skills-wrapper">
                <h3 class="skills-heading">Technical Proficiency</h3>
                
                <div class="skill-bar-item">
                    <div class="skill-info">
                        <span>HTML & CSS / Modern Layouts</span>
                        <span>95%</span>
                    </div>
                    <div class="progress-line"><span style="width: 95%;"></span></div>
                </div>

                <div class="skill-bar-item">
                    <div class="skill-info">
                        <span>JavaScript (DOM & Interactive UI)</span>
                        <span>85%</span>
                    </div>
                    <div class="progress-line"><span style="width: 85%;"></span></div>
                </div>

                <div class="skill-bar-item">
                    <div class="skill-info">
                        <span>PHP & Backend Development</span>
                        <span>80%</span>
                    </div>
                    <div class="progress-line"><span style="width: 80%;"></span></div>
                </div>

                <div class="skill-bar-item">
                    <div class="skill-info">
                        <span>Database Management (SQL/MySQL)</span>
                        <span>80%</span>
                    </div>
                    <div class="progress-line"><span style="width: 80%;"></span></div>
                </div>
            </div>

            <!-- Action Button -->
            <div class="about-btn-group">
                <a href="project.php" class="btn-gold">
                    <i class="fa-solid fa-laptop-code"></i> Explore My Work
                </a>
                <a href="contact.php" class="btn-outline">Get In Touch</a>
            </div>
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>
</body>
</html>