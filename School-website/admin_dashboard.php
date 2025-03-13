<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Admin Dashboard - <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
        <nav>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <section class="dashboard-content">
        <h2>Manage Students</h2>
        <p>Here you can add, edit, or delete student records.</p>
        <h2>Announcements</h2>
        <p>Post and manage school announcements.</p>
        <h2>Attendance</h2>
        <p>View attendance reports for students.</p>
    </section>
</body>
</html>
