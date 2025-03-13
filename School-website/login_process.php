<?php
session_start();
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role = $_POST['role'];
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    // Determine which table to query based on role
    if($role == 'student') {
        $table = 'students';
    } elseif($role == 'admin') {
        $table = 'admins';
    } else {
        die("Invalid role.");
    }
    
    // Prepared statement for secure query
    $stmt = $conn->prepare("SELECT id, username, password FROM $table WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        // Verify password (assumes passwords are hashed with password_hash)
        if (password_verify($password, $row['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $role;
            
            // Redirect based on role
            if($role == 'admin') {
                header("Location: admin_dashboard.php");
            } else {
                header("Location: student_dashboard.php");
            }
            exit;
        } else {
            $error = "Invalid credentials.";
        }
    } else {
        $error = "Invalid credentials.";
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Error</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="error-message">
        <p><?php echo isset($error) ? $error : 'Unknown error'; ?></p>
        <a href="login.php">Back to Login</a>
    </div>
</body>
</html>
