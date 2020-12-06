<?php
session_start(); 
include 'config.php';
require_once 'crop.php';

mysqli_select_db($conn,$database);



$croped_image = $_POST['image'];

list($type, $croped_image) = explode(';', $croped_image);
list(, $croped_image)      = explode(',', $croped_image);

$croped_image = base64_decode($croped_image);

$fname=$_SESSION['firstName'];
$image_name = $fname.'.jpg';


file_put_contents('../resources/userimage/'.$image_name, $croped_image);

$folder="../resources/userimage/".$image_name;

$id = $_SESSION['id'];

$update = "UPDATE details SET profilesource='$folder' WHERE id = $id";

mysqli_query($conn, $update);
$_SESSION['PROF']=$folder;

?>