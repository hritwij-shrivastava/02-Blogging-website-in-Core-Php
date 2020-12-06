<?php

session_start();
include '../../resources/config_files/config.php';
require_once 'settings.php';

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sphoot-For Those Who Want To Grow</title>
    <link rel="stylesheet" href="settings.css">
    <?php require '../files/css.php' ?>
</head>

<body>
    <div class="allcontainer">
        <div class="set">
            <div class="setmenu">
                <div class="profile-pic" style="background-image: url(''),url('../../resources/images/profile2.svg')"></div>
                <ul>
                    <li>Personal</li>
                    <li>Professional</li>
                    <li>Password</li>
                    <li>Communication</li>
                    <li>Additional</li>
                    <li>Subscriptions</li>
                    <li>Privacy</li>
                </ul>
            </div>
            <div class="info">
            <h5>Personal Information</h5>
            <form action="">

            
            </form>
        </div>
        </div>
       
    </div>

    <?php require '../files/header.php' ?>
    <?php require '../files/sidebar.php' ?>

    
    <?php require '../files/script.php' ?>
    <script src="post.js" ></script>
</body>

</html>