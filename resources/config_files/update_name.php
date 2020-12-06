<?php
session_start(); 
include 'config.php';

require_once 'update_name.php';
$conn = mysqli_connect($servername, $username, $password, $database);

mysqli_select_db($conn,$database);

$name   = $_POST['fname'];
$id      = $_SESSION['id'];

$updatename = "UPDATE details SET name='$name' WHERE id = $id";
mysqli_query($conn, $updatename);

$_SESSION['userName'] = $name;

$countSpace=substr_count($name," ");

if($countSpace>0)
{

$spacePosition=strpos($name," ");
$first_name=substr($name,0,$spacePosition);
$_SESSION['firstName'] = $first_name;
$_SESSION['lastName']  = substr($name,$spacePosition);

}
else
{
$_SESSION['firstName']=$name;
$_SESSION['lastName']=$last_name;
}

exit(header("location: ../../user/profile/profile.php"));
?>