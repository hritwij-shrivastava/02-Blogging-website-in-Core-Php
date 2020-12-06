<?php

session_start();

include '../../resources/config_files/config.php';
require_once 'home.php';
mysqli_select_db($conn,$database);

$u_id = $_SESSION['id'];

// $all_post = "SELECT * FROM post WHERE u_id = '$u_id' ORDER BY post_id DESC";

// $all_post = "SELECT * FROM post ORDER BY post_id DESC";

// $result = mysqli_query($conn, $all_post);

$inner = "SELECT * FROM details d INNER JOIN post p ON d.id = p.u_id ORDER BY p.post_id DESC";
$result = mysqli_query($conn, $inner); 

if(empty($_SESSION['firstName'])){
  session_destroy();

header('location: ../../login/login-page.php');
}

?>

<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Sphoot-For Those Who Want To Grow</title>
    <link rel="stylesheet" href="home.css">
    <?php require '../files/css.php'?>
</head>

<body>

    <?php require '../files/header.php'?>
    <?php require '../files/sidebar.php'?>
    <div class="adbar">
            
    </div>
    <div id="content">
        <div class="writespace">
            <?php              
                while($row = mysqli_fetch_array($result)){
                    $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    $post_content = $row['post_content'];
                    $status = $row['status'];
                    $post_like = $row['like_count'];
                    $post_view = $row['post_view'];
                    $post_date = $row['post_date'];
                    $u_name = $row['name'];
                    $profile = $row['profilesource'];
                    if($status == '1'){
                ?>
                <div class="area" id="<?php echo($post_id)?>">
                    <div class="authorpic" style="background-image: url('<?php echo($profile)?>'),url('../../resources/images/profile2.svg')"></div>
                    <div class="authorname">
                        <h5><?php echo($u_name)?></h5>
                        <span class="dot-1">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-three-dots" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                            </svg>
                        </span>
                    </div>
                    <hr class="hr-tag">
                    <div class="internal-area">
                        <article>
                            <?php echo($post_content)?>
                        </article>
                    </div>
                    <div class="bigheart-container">
                        <span id="bigheart">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg>
                        </span>
                    </div>
                    <div class="likearea">
                        <hr class="hr-tag" style="top: 485px !important;">
                        <span class="views"><?php echo($post_view)?> views • <?php $date=date_create($post_date);echo date_format($date,"M d, Y"); ?></span>
                        <span class="heart">
                            <span id="blankh" class = "<?php require "test.php"?>" >
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16"  class="bi bi-heart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                </svg>
                            </span>
                            <span id="fillh" class="<?php require "test2.php"?>" style="color: #ff1d58;">
                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                </svg>
                            </span>
                            <span id="likenum" class="text"><?php echo($post_like)?></span>
                        </span>
                        <span class="share" data-toggle="modal" data-target="#exampleModalCenter">
                            <svg width="1.5em" height="1.5em" style="position: relative;top: -3px;font-size: 15px;" viewBox="0 0 16 16" class="bi bi-reply-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.079 11.9l4.568-3.281a.719.719 0 0 0 0-1.238L9.079 4.1A.716.716 0 0 0 8 4.719V6c-1.5 0-6 0-7 8 2.5-4.5 7-4 7-4v1.281c0 .56.606.898 1.079.62z"/>
                            </svg>
                            <span class="text">Share</span>
                        </span>
                        <span class="bookmark">
                            <svg width="1em" height="1em"  style="font-size: 18px;position: relative;top: -2px;" viewBox="0 0 16 16" class="bi bi-bookmark-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 0a2 2 0 0 0-2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4zm4.5 4.5a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>
                            </svg>
                            <span class="text">Save</span>
                        </span>
                    </div>
                </div>
                
            <?php } }?>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 461px !important;" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="svgcircle">
                        <svg width="1em" height="1em" style="position: relative;top: 3px;left: 11px;" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                    </div>
                    <h5 class="modal-title" id="exampleModalLongTitle">Share with people and groups</h5>
                    <button type="button" class="close" style="outline:transparent !important;" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="copylink" readonly> 
                    <button type="button" class="btn btn-info" id="copy">Copy link</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>

    <?php require '../files/script.php'?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../../resources/tools/readmore/readmore.js"></script>
    <script src="home.js"></script>
    

</body>

</html>