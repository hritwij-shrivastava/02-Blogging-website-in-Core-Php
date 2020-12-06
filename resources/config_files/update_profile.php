<?php

session_start();

include 'config.php';
require_once 'update_profile.php';

mysqli_select_db($conn,$database);

$croped_image = $_POST['image'];
$oldfile = $_SESSION['PROF'];
$firstname = $_SESSION['firstName'];
$id = $_SESSION['id'];

list($type, $croped_image) = explode(';', $croped_image);
list(, $croped_image)      = explode(',', $croped_image);

$croped_image = base64_decode($croped_image);

$new_name = $firstname . rand(0,99). ".jpg";

$folder="../../resources/userimage/".$new_name;

$update = "UPDATE details SET profilesource='$folder' WHERE id = $id";

file_put_contents($folder, $croped_image);
mysqli_query($conn, $update);

if($oldfile!="../../resources/images/profile.png"){
    unlink($oldfile);
}

$_SESSION['PROF']=$folder;

exit(header("location: ../../user/profile/profile.php"));

?>