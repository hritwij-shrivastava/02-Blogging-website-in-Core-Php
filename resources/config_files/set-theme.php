<?php
    session_start();
    include 'config.php';
    require_once 'set-theme.php';
    mysqli_select_db($conn,$database);

    $id = $_SESSION['id'];
    $theme_id = $_GET['theme'];

    $updatetheme = "UPDATE details SET  backgroundtheme ='$theme_id'  WHERE id = $id";

    mysqli_query($conn, $updatetheme);

    exit(header("location: ../../user/home/home.php"));
?>