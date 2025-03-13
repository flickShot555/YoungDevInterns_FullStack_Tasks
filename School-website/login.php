<?php
session_start();
if(isset($_SESSION['user_id'])) {
    // Redirect logged-in users to their respective dashboards
    if($_SESSION['role'] == 'admin') {
        header('Location: admin_dashboard.php');
    } else {
        header('Location: student_dashboard.php');
    }
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Multi-Login School System</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="login-container">
        <div class="toggle-forms">
            <button id="toggleStudent" class="toggle active">Student Login</button>
            <button id="toggleAdmin" class="toggle">Admin Login</button>
        </div>
        <div id="studentForm" class="form-box">
            <h2>Student Login</h2>
            <form action="login_process.php" method="post">
                <input type="hidden" name="role" value="student">
                <input type="text" name="username" placeholder="Student ID" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
        <div id="adminForm" class="form-box hidden">
            <h2>Admin Login</h2>
            <form action="login_process.php" method="post">
                <input type="hidden" name="role" value="admin">
                <input type="text" name="username" placeholder="Admin Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
