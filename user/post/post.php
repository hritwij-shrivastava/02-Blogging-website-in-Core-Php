<?php

session_start();
include '../../resources/config_files/config.php';
require_once 'post.php';
mysqli_select_db($conn,$database);

$u_id = $_SESSION['id'];

$all_post = "SELECT * FROM post WHERE u_id = '$u_id' ORDER BY post_id DESC";

$result = mysqli_query($conn, $all_post);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sphoot-For Those Who Want To Grow</title>
    <link rel="stylesheet" href="post.css">
    <?php require '../files/css.php' ?>
</head>

<body>


    <?php require '../files/header.php' ?>
    <?php require '../files/sidebar.php' ?>

    <div id="content">
    <div class="backgroundarea">
        <div class="mainarea-post">
            <?php              
            while($row = mysqli_fetch_array($result)){
                $post_id = $row['post_id'];
                $post_title = $row['post_title'];
                $status = $row['status'];
                $post_like = $row['like_count'];
                $post_view = $row['post_view'];
                $post_date = $row['post_date'];
            ?>
                <div class="fullarea">
                <button class="publish">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cursor-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
                    </svg>
                </button>
                <button class="trash" >
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                    </svg>
                </button>
                <button class="preview">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg>
                </button>
                <div class="lower" >
                    <span class="view">
                        <span style="position: relative;top: 2px;"><?php echo($post_view)?></span>
                        <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg>
                    </span>
                    <span class="like">
                        <?php echo($post_like)?>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-suit-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"/>
                        </svg>
                    </span>
                    <span class="comment">
                        0
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 0a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"/>
                        </svg>
                    </span>
                </div>
                <a href="../edit-blog/edit-blog.php?id=<?php echo($post_id)?>" id="<?php echo($post_id)?>" style="text-decoration: none;">
                    <div class="area" >
                        <div class="blog-image">
                            <svg width="4em" height="4em" style="position:relative; margin:0 auto;" viewBox="0 0 16 16" class="bi bi-image" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M14.002 2h-12a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zm-12-1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12z"/>
                                <path d="M10.648 7.646a.5.5 0 0 1 .577-.093L15.002 9.5V14h-14v-2l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71z"/>
                                <path fill-rule="evenodd" d="M4.502 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                            </svg>
                        </div>
                        <span class="untitle"><?php echo $post_title ?></span>

                        <?php if($status==0){?>
                            <span class="status"> <?php echo ("Draft" ); ?> </span>
                            <span class="time"><?php $date=date_create($post_date);echo date_format($date,"M d, Y"); ?></span>
                        <?php  }?>

                        <?php if($status==1){ ?>
                            <span class="status"> <?php echo ("Published" ); ?> </span>
                            <span class="time" style="left: 175px !important;"><?php $date=date_create($post_date);echo date_format($date,"M d, Y"); ?></span>
                        <?php  }?>

                    </div>
                </a>
                </div>
            <?php } ?>
        </div>
    </div>
    </div>
    <?php require '../files/script.php' ?>
    <script src="post.js" ></script>
</body>

</html>