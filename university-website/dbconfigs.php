<?php

$username='root';
$password='';
$server='localhost';
$db='youngdev';

$con = mysqli_connect($server,$username,$password,$db);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";
?>