<?php
$servername = "localhost";
$database = 'user_info';
$username = 'hritwij';
$password = 'HRit123@';


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
?>