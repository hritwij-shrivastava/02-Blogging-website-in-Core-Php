<?php 
    session_start();
    include 'config.php';

    require_once 'publish.php';
   
    $conn = mysqli_connect($servername, $username, $password, $database);
    mysqli_select_db($conn,$database);

    $post_id = $_SESSION['post_id'];
    $title = $_POST['title'];
    $div = $_POST['div'];
    $status = $_POST['status'];

    if($title==''){
        $title='(Untitled)';
    }

    $reg = "UPDATE `post` SET `post_title` = '$title', `post_content` = '$div', `status` = '$status' WHERE `post`.`post_id` = '$post_id'";


    mysqli_query($conn, $reg);

    // echo '<script> console.log("'.mysqli_error($conn).'") ;</script>';
    echo '<script> console.log("postid=") ;</script>';
    echo '<script> console.log("'.$post_id.'") ;</script>';
       
mysqli_close($conn);
?>