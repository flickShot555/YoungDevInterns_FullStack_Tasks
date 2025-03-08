<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to your Comsats portal</title>
    <link rel="stylesheet" href="login_styles.css">
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

    <div class="main">
        <div class="login-container">
            <div class="form-section" id="formSection">
                <!--form id="studentForm">
                    <h2 style="align-self:center">Student Login</h2>
                    <input type="text" placeholder="Student ID" required>
                    <input type="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </!--form>
                <form-- id="adminForm" class="hidden">
                    <h2>Admin Login</h2>
                    <input type="text" placeholder="Admin Username" required>
                    <input type="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form-->
                <div class="studentlogin" id="studentlogin">
                    
                    <div class="forms">
                        <h2>Student Login</h2>
                        <form style="display: flex;flex-direction: column; align-items: center;justify-content: center;" 
                                action="studentlogin.php" method="POST">
                        <input style="width:100%" type="text" placeholder="email" name="email" required>
                        <input style="width:100%" type="password" placeholder="Password" name="password" required>
                        <button type="submit">Login</button>
                        </form>
                    </div>
                    <div class="toggle-section" id="toggleSection">
                        <button id="toggleButton">Admin Login</button>
                    </div>
                </div>
                <div class="adminlogin" id="adminlogin">
                    
                    <div class="forms">
                        <h2>Admin Login</h2>
                        <form style="display: flex;flex-direction: column; align-items: center;justify-content: center;"
                            action="adminlogin.php" method="POST">
                        <input style="width:100%" type="text" placeholder="email" id="email" required>
                        <input style="width:100%" type="password" placeholder="Password" id="password" required>
                        <button type="submit">Login</button>
                        </form>
                    </div>
                    <div class="toggle-section" id="toggleSection">
                        <button id="toggleButton">Student Login</button>
                    </div>
                </div>
            </div>

            <!--div class="toggle-section" id="toggleSection">
                <button id="toggleButton">Admin Login</button>
            </!--div-->
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>Comsats University Islamabad, Attock Campus | Established 1980 | &copy; 2024 All Rights Reserved</p>
    </footer>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toggleButtons = document.querySelectorAll('.toggle-section button');
            const studentLogin = document.getElementById('studentlogin');
            const adminLogin = document.getElementById('adminlogin');
            
            // Set initial state
            adminLogin.style.display = "none"; // Hide admin form initially

            toggleButtons.forEach(button => {
                button.addEventListener("click", function () {
                    if (studentLogin.style.display === "none") {
                        studentLogin.style.display = "flex";
                        adminLogin.style.display = "none";
                    } else {
                        studentLogin.style.display = "none";
                        adminLogin.style.display = "flex";
                    }
                });
            });
        });
    </script>
</body>
</html>
