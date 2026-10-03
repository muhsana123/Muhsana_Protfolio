<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhsana | Freelance Web Developer</title>
    
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


   <?php 
// 1. Errors ko dikhane ke liye Top settings
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 2. Database & Header Includes
include 'config/dp.php';
include 'header.php'; 

$statusMsg = "";
$statusType = ""; 

// 3. Form Submission Handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = trim(htmlspecialchars($_POST['name'] ?? ''));
    $email   = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone   = trim(htmlspecialchars($_POST['phone'] ?? ''));
    $subject = trim(htmlspecialchars($_POST['subject'] ?? ''));
    $message = trim(htmlspecialchars($_POST['message'] ?? ''));

    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            
            // Safe Connection Check
            if (isset($conn) && $conn !== null) {
                try {
                    $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
                    $inserted = $stmt->execute([$name, $email, $phone, $subject, $message]);
if ($inserted) {
    // Success message ko khali kar diya taake screen par koi text show na ho
    $statusMsg = "";
    $statusType = "success";
} else {
    $statusMsg = "Database Error: Paigham save nahi ho saka.";
    $statusType = "danger";
}
} catch (Exception $e) {
    $statusMsg = "SQL Error: " . $e->getMessage();
    $statusType = "danger";
}
} else {
    $statusMsg = "Database Connection error! config/db.php check karein.";
    $statusType = "danger";
}

} else {
    $statusMsg = "Barahe karam sahi Email address darj karein.";
    $statusType = "danger";
}
} else {
    $statusMsg = "Tamam zaroori fields ko pur karein.";
    $statusType = "danger";
}
}
?>

<!-- Page Header Section -->
<section class="page-header">
    <div class="container">
        <h1 class="page-title">Get In <span class="gold-text">Touch</span></h1>
        <p class="page-subtitle">Have a project in mind or want to hire me? Send a message directly.</p>
    </div>
</section>

<!-- Contact Form Section -->
<section class="contact-section">
    <div class="contact-container">

        <!-- Left Column: Contact Cards -->
        <div class="contact-info">
            <h2 class="section-title">Let's Talk About <br><span class="gold-text">Your Project</span></h2>
            <p class="contact-desc">
                I am actively available for freelance web development projects, custom designs, and technical consultancies. Whether you are looking to build a brand-new responsive website from scratch, upgrade an existing platform, or simply have a quick technical query—feel free to reach out. Let’s collaborate to turn your ideas into a powerful digital reality!
            </p>

            <div class="info-card">
                <i class="fa-solid fa-envelope gold-icon"></i>
                <div>
                    <h4>Email</h4>
                    <p><a href="mailto:ameer@example.com">muhsanaameerali3@gmail.com</a></p>
                </div>
            </div>

            <div class="info-card">
                <i class="fa-brands fa-whatsapp gold-icon"></i>
                <div>
                    <h4>WhatsApp</h4>
                    <p><a href="https://wa.me/923000000000" target="_blank">+92 322 2920740</a></p>
                </div>
            </div>

            <div class="info-card">
                <i class="fa-solid fa-location-dot gold-icon"></i>
                <div>
                    <h4>Location</h4>
                    <p>Pakistan (Available Globally)</p>
                </div>
            </div>
        </div>

        <!-- Right Column: Form -->
        <div class="contact-form-wrapper">
            
            <?php if (!empty($statusMsg)): ?>
                <div class="alert alert-<?php echo $statusType; ?>" style="padding: 15px; margin-bottom: 20px; border-radius: 5px; color: #fff; background-color: <?php echo ($statusType === 'success') ? '#28a745' : '#dc3545'; ?>;">
                    <?php echo $statusMsg; ?>
                </div>
            <?php endif; ?>

            <form action="" method="POST" class="contact-form">
                <div class="form-group-row">
                    <div class="form-group">
                        <label>Your Name *</label>
                        <input type="text" name="name" required placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <label>Your Email *</label>
                        <input type="email" name="email" required placeholder="name@example.com">
                    </div>
                </div>

                <div class="form-group-row">
                    <div class="form-group">
                        <label>Phone / WhatsApp Number</label>
                        <input type="text" name="phone" placeholder="+92 300 0000000">
                    </div>
                    <div class="form-group">
                        <label>Subject *</label>
                        <input type="text" name="subject" required placeholder="Project Inquiry / Hiring">
                    </div>
                </div>

                <div class="form-group">
                    <label>Your Message *</label>
                    <textarea name="message" rows="5" required placeholder="Describe your project requirements..."></textarea>
                </div>

                <button type="submit" class="btn-gold btn-full">
                    <i class="fa-solid fa-paper-plane"></i> Send Message
                </button>
            </form>

        </div>

    </div>
</section>

<?php 
if (file_exists('footer.php')) {
    include 'footer.php'; 
}
?>
</body>
</html>