<?php

session_start(); 
include 'config.php';
require_once 'create_blog.php';
mysqli_select_db($conn,$database);

$check = "SELECT * FROM post";

$result = mysqli_query($conn, $check);
$id=0;
while($row = mysqli_fetch_array($result)){
    $id=$row['post_id']; 
}
$post_id = $id + 1;
$u_id = $_SESSION['id'];

$reg = "INSERT INTO post(post_id, u_id, post_title, post_content, status, like_count ,theme,user_ip,post_view) VALUES ('$post_id', '$u_id', '(Untitled)', '', 0, 0,0,'',0)";

mysqli_query($conn, $reg);

exit(header("location: ../../user/edit-blog/edit-blog.php?id=$post_id"));

mysqli_close($conn);


?>