<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sportal_styles.css">
    <script src="https://kit.fontawesome.com/6e98f21a5d.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php
    include("dbconfigs.php");
    //add sessions here
    session_start();
    if($_SESSION['email']!='1')
    {
        //echo "Welcome to Student portal";
        header('location: login.php');
    }
    ?>

    <nav class="navbar">
        <div class="nav-right">
            <img src="comsats logo.png" alt="Comsats Logo" class="logo">
        </div>
        <button class="logout-btn" onclick="location.href='logout.php'">Logout</button>
        
    </nav>

    <!-- Banner -->
    <header class="banner">
        <h1>Welcome to Student portal 'Comsats University Islamabad, Attock Campus'</h1>
    </header>

    <div class="container">
        <div class="left-panel">
            <h4>Subjects</h4>
                <?php
                    // Fetching Subjects from database (Example code)
                    $subjects = array("Data Structures", "Algorithms", "Database Systems", "Operating Systems", "Computer Networks");
                    foreach($subjects as $subject) {
                        echo "<p>$subject</p>";
                    }
                ?>
        </div>
        
        <div class="center-panel">
            <div class="news-panel">
                <h4>Message from Director</h4>
                <p>Welcome to our prestigious institution...</p>
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