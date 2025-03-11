<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comsats University Islamabad, Attock Campus</title>
    <link rel="stylesheet" href="index_styles.css">
    <!--link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"-->
    <script src="https://kit.fontawesome.com/6e98f21a5d.js" crossorigin="anonymous"></script>
    <!--script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></!--script-->
    <script>
        function toggleMenu() {
            var menu = document.getElementById("nav-menu");
            if (menu.style.display === "flex") {
                menu.style.display = "none";
            } else {
                menu.style.display = "flex";
            }
        }
    </script>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-right">
            <img src="comsats logo.png" alt="Comsats Logo" class="logo">
        </div>
        <div class="burger-menu" onclick="toggleMenu()">&#9776;</div>
        <div class="nav-left" id="nav-menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Admissions</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="login.php">Portals</a></li>
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
            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="footer">
        <p>Comsats University Islamabad, Attock Campus | Established 1980 | &copy; 2024 All Rights Reserved</p>
    </footer>
</body>
</html>
