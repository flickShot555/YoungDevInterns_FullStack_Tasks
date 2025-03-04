<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comsats University Islamabad, Attock Campus</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-right">
            <img src="comsats logo.png" alt="Comsats Logo" class="logo">
        </div>
        <div class="nav-left">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Admissions</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Portals</a></li>
            </ul>
        </div>
        
    </nav>
    
    <!-- Banner -->
    <header class="banner">
        <h1>Welcome to Comsats University Islamabad, Attock Campus</h1>
    </header>

    <div class="container">
        <div class="left-panel">
            <h4>Message from Director</h4>
            <p>Welcome to our prestigious institution...</p>
        </div>
        
        <div class="center-panel">
            <div class="news-panel">
                <h4>Latest News</h4>
                <?php
                    // Fetching news from database (Example code)
                    echo "<p>News will be dynamically loaded here.</p>";
                ?>
            </div>
            <div class="features">
                <h4>Campus Features</h4>
                <p>State-of-the-art labs, library, and research centers.</p>
            </div>
            <div class="prospectus">
                <h4>Download Prospectus</h4>
                <a href="prospectus.pdf" class="btn">Download</a>
            </div>
        </div>
        
        <div class="right-panel">
            <h4>Follow Us</h4>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="footer">
        <p>Comsats University Islamabad, Attock Campus | Established 1980 | &copy; 2024 All Rights Reserved</p>
    </footer>
</body>
</html>
