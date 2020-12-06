<?php
    include 'config.php';
    require_once 'set-post_view.php';
    mysqli_select_db($conn,$database);

    $id = $_GET['id'];

    $updateview = "UPDATE post SET  post_view =(`post_view` +1)  WHERE post_id = $id";

    mysqli_query($conn, $updateview);

?>