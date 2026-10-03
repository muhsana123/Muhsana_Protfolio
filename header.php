<!-- Header / Navbar -->
<header class="header">
    <div class="nav-container">
        
        <!-- Left: Logo Area -->
        <a href="index.php" class="navbar-logo">
            <img src="assets/images/logo.png" alt="Muhsana Logo" class="brand-img-logo">
        </a>
        <!-- Center: Navigation Menu -->
        <nav class="navbar">
            <ul class="nav-links">
                <li><a href="index.php" class="nav-link active">Home</a></li>
                <li><a href="about.php" class="nav-link">About</a></li>
                <li><a href="project.php" class="nav-link">Projects</a></li>
                <li><a href="contact.php" class="nav-link">Contact</a></li>
            </ul>
        </nav>

        <!-- Right: WhatsApp Hire Me Button -->
        <div class="nav-btn">
            <a href="https://wa.me/923222920740?text=Hi%20Ameer,%20I%20want%20to%20hire%20you%20for%20a%20project!" 
               target="_blank" 
               class="btn-gold">
                <i class="fa-brands fa-whatsapp"></i> Hire Me
            </a>
        </div>

        <!-- Mobile Menu Toggle -->
        <div class="hamburger">
            <i class="fa-solid fa-bars"></i>
        </div>
<!-- DIRECT INLINE EVENT LISTENER FIX -->
<script>
(function() {
    window.addEventListener('load', function() {
        // Automatically find hamburger/toggle element regardless of class name
        const toggleBtn = document.querySelector('.hamburger') || 
                          document.querySelector('.menu-toggle') || 
                          document.querySelector('.navbar-toggler');
                          
        const navMenu = document.querySelector('.navbar') || 
                         document.querySelector('.nav-menu') || 
                         document.querySelector('.nav-links');

        if (toggleBtn && navMenu) {
            // Force cursor and interaction
            toggleBtn.style.cursor = 'pointer';
            toggleBtn.style.pointerEvents = 'auto';

            toggleBtn.onclick = function(e) {
                e.preventDefault();
                e.stopPropagation();

                // Toggle Menu Visibility
                if (navMenu.style.display === 'block' || navMenu.classList.contains('active')) {
                    navMenu.style.display = 'none';
                    navMenu.classList.remove('active');
                } else {
                    navMenu.style.display = 'block';
                    navMenu.classList.add('active');
                    navMenu.style.setProperty('display', 'block', 'important');
                }
            };

            // Icon click redirect to button
            const icon = toggleBtn.querySelector('i');
            if (icon) {
                icon.style.pointerEvents = 'none';
            }
        }
    });
})();
</script>
    </div>
</header>
