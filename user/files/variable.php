<?php

session_start();
include '../../resources/config_files/config.php';
require_once 'variable.php';

mysqli_select_db($conn,$database);

$_SESSION['post_id']=$_GET['id'];
$post_id = $_SESSION['post_id'];
$s = "SELECT * FROM post WHERE post_id = '$post_id'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    $row = mysqli_fetch_assoc($result);
    $u_id = $row['u_id'];
    $post_title = $row['post_title'];
    $post_content = $row['post_content'];
    $status = $row['status'];
}


$b = "SELECT * FROM details WHERE id = '$u_id'";
$result2 = mysqli_query($conn, $b);
$row2 = mysqli_fetch_assoc($result2);
$back_img = $row2['backgroundtheme'];




mysqli_close($conn);

?>
