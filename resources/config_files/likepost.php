<?php

session_start(); 
include 'config.php';
require_once 'likepost.php';
mysqli_select_db($conn,$database);

$post_id = $_POST['post_id'] ;
$u_id = $_SESSION['id'];

$l = "SELECT * FROM post WHERE post_id = '$post_id'";
$result = mysqli_query($conn, $l);
$row = mysqli_fetch_assoc($result);
$like = $row['like_count'];

$a = "SELECT * FROM likes WHERE u_id = '$u_id' && post_id = '$post_id'";
$n = mysqli_query($conn, $a);
$like_exist = mysqli_num_rows($n);

if($like_exist != 1){
    $like ++; 
    $likepost = "INSERT INTO likes(u_id , post_id) VALUES ('$u_id' , '$post_id')";
    mysqli_query($conn, $likepost);
    $done = 1;
}
if($like_exist == 1){
    $like --; 
    $delete = "DELETE FROM `likes` WHERE u_id = '$u_id' && post_id = '$post_id'";
    mysqli_query($conn, $delete);
    $done = 0;
}
      


$updatelike = "UPDATE post SET  like_count ='$like'  WHERE post_id = $post_id";
mysqli_query($conn, $updatelike);

mysqli_close($conn);

echo $done.",".$like;

?>