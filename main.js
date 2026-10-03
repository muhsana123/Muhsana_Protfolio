<script>
document.addEventListener('DOMContentLoaded', function () {
    // Select hamburger icon and navbar
    const hamburger = document.querySelector('.hamburger');
    const navbar = document.querySelector('.navbar');

    if (hamburger && navbar) {
        hamburger.addEventListener('click', function (e) {
            e.stopPropagation();
            navbar.classList.toggle('active');

            // Icon class swap (bars to xmark)
            const icon = hamburger.querySelector('i');
            if (icon) {
                if (navbar.classList.contains('active')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-xmark');
                } else {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars');
                }
            }
        });

        // Close menu on outside click
        document.addEventListener('click', function (e) {
            if (!navbar.contains(e.target) && !hamburger.contains(e.target)) {
                navbar.classList.remove('active');
                const icon = hamburger.querySelector('i');
                if (icon) {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars');
                }
            }
        });
    }
});
</script>