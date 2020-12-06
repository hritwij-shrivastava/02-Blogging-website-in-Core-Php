<?php 
    session_start();
    include 'config.php';

    require_once 'delete.php';
   
    $conn = mysqli_connect($servername, $username, $password, $database);
    mysqli_select_db($conn,$database);

    $post_id = $_POST['post_id'];


    $reg = "DELETE FROM `post` WHERE `post`.`post_id` = '$post_id'";


    mysqli_query($conn, $reg);
       
mysqli_close($conn);
?>