<?php
    $a = "SELECT * FROM likes WHERE u_id = '$u_id' && post_id = '$post_id'";

    $n = mysqli_query($conn, $a);
    
    $like_exist = mysqli_num_rows($n);
    
    if($like_exist != 1){
        echo "hideh";
    }
?>