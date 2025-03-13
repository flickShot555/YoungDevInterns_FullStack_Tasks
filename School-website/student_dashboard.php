<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'student') {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
        <nav>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <section class="dashboard-content">
        <h2>Your Details</h2>
        <p>Here you can view your profile information and attendance records.</p>
        <!-- Additional student-specific information can be queried using $_SESSION['user_id'] -->
    </section>
</body>
</html>
