<?php
$_SESSION;
session_start();

include 'dbconfigs.php';

$email  = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM students WHERE email='$email' AND password='$password'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "Login Successful";
    header('location:studentportal.php');
} else {
    echo "Login Failed";
}

?>
