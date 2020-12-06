<?php

session_start(); 
include 'config.php';
require_once 'create_blog.php';
mysqli_select_db($conn,$database);

$id = $_GET['id']; 

$reg = "SELECT * FROM post where post_id = $id";

$result = mysqli_query($conn, $reg);

$row = mysqli_fetch_assoc($result);

$_SESSION['post_title'] = $row['post_title'];

$_SESSION['post_content'] = $row['post_content'];


exit(header("location: ../../user/edit-blog/edit-blog.php?post_id=$post_id"));

mysqli_close($conn);


?>