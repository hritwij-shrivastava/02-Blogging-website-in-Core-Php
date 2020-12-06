<?php
session_start(); 
include 'config.php';

require_once 'update_bio.php';
$conn = mysqli_connect($servername, $username, $password, $database);

mysqli_select_db($conn,$database);

$bioh1   = $_POST['bio'];
$bioh2   = $_POST['bio2'];
$mobile  = $_POST['upmobno'];
$id      = $_SESSION['id'];

if($bioh1==""){
    $bioh1 = $_SESSION['bioh1'];
}
if($bioh2==""){
    $bioh2 = $_SESSION['bioh2'];
}
if($mobile==""){
    $mobile = $_SESSION['mobile'];
}



$updatebio = "UPDATE details SET  bioh1 ='$bioh1'  WHERE id = $id";
$updatebio2 = "UPDATE details SET  bioh2 = '$bioh2' WHERE id = $id";
$updatebio3 = "UPDATE details SET  mobile = '$mobile' WHERE id = $id";
mysqli_query($conn, $updatebio);
mysqli_query($conn, $updatebio2);
mysqli_query($conn, $updatebio3);

$_SESSION['bioh1']  =  $bioh1;
$_SESSION['bioh2']  =  $bioh2;
$_SESSION['mobile'] =  $mobile;
exit(header("location: ../../user/profile/profile.php"));
?>