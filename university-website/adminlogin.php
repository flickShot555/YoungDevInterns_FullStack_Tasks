<?php
session_start();

include 'dbconfigs.php';

$var_email  = $_POST['email'];
$var_password = $_POST['password'];

$sql = "SELECT * FROM admincredentials WHERE email=\"$var_email\" AND password=\"$var_password\"";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "Login Successful";
    $_SESSION['email'] = '1';
    //$_SESSION['password'] = $var_password;

    header('location:adminportal.php');
} else {
    echo "Login Failed";
    header('location:login.php');

}