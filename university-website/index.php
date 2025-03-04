<?php
// config.php (Future use for database connection)
session_start();
// Future server-side features can be added here
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php'; ?>
</head>
<body>
    <!-- Mobile View -->
    <div class="mobile-view">
        <nav class="mobile-nav">
            <div class="burger-menu">☰</div>
            <ul class="mobile-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#admissions">Admissions</a></li>
                <li><a href="#careers">Careers</a></li>
                <li><a href="#portals">Portals</a></li>
            </ul>
            <img src="assets/logo.png" alt="COMSATS Logo" class="mobile-logo">
        </nav>
        
        <div class="mobile-content">
            <h1>COMSATS University Islamabad<br>Attock Campus</h1>
            <div class="news-panel">
                <h2>Latest News</h2>
                <div class="news-item">
                    <h3>New Computer Lab Inaugurated</h3>
                    <p>University launches state-of-the-art computing facility...</p>
                </div>
                <!-- More news items -->
            </div>
        </div>
    </div>

    <!-- Desktop View -->
    <div class="desktop-view">
        <nav class="desktop-nav">
            <div class="nav-left">
                <a href="#home">Home</a>
                <a href="#admissions">Admissions</a>
                <a href="#careers">Careers</a>
                <a href="#portals">Portals</a>
            </div>
            <img src="assets/logo.png" alt="COMSATS Logo" class="desktop-logo">
        </nav>

        <div class="banner">
            <h1>Welcome to COMSATS University Islamabad, Attock Campus</h1>
        </div>

        <div class="desktop-content">
            <div class="left-sidebar">
                <h2>Director's Message</h2>
                <p>"Our commitment to excellence in education..."</p>
                <!-- More messages -->
            </div>

            <div class="main-content">
                <section class="news-section">
                    <h2>Campus News</h2>
                    <!-- News content -->
                </section>
                <section class="features">
                    <h2>Campus Features</h2>
                    <!-- Features content -->
                </section>
            </div>

            <div class="right-sidebar">
                <h3>Connect With Us</h3>
                <div class="social-links">
                    <a href="#facebook">Facebook</a>
                    <a href="#instagram">Instagram</a>
                    <a href="#linkedin">LinkedIn</a>
                    <a href="#twitter">Twitter/X</a>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>