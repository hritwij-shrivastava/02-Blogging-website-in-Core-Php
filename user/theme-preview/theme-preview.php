<?php

session_start();
include '../../resources/config_files/config.php';
require_once 'theme-preview.php';
$back_img = $_GET['theme'];
?>

<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Theme Preview</title>
    <link rel="stylesheet" href="theme-preview.css">
    <link rel="stylesheet" href="../files/cssForMainClass.css">
    <?php require '../files/css.php'?>
</head>

<body>

    <?php require 'header-preview.php'?>
    <?php require '../files/sidebarauthor.php'?>

    <div id="content">
        <div class="main-area <?php require '../files/mainclass.php'?>">
            <div class="writespace">
                <div id="area">
                </div>
            </div>
        </div>
    </div>



    <?php require '../files/script.php'?>
    <script src="theme-preview.js"></script>
    <script>
        $(document).ready(function(){
            $('.applybtn').on('click', function(){
                window.open("../../resources/config_files/set-theme.php?theme="+<?php echo $back_img?>,"_self");
            });
        });
    </script>

</body>

</html>