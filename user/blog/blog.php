<?php include '../files/variable.php'; ?>
<?php include '../../resources/config_files/set-post_view.php'; ?>

<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $post_title ?></title>
    <link rel="stylesheet" href="blog.css">
    <link rel="stylesheet" href="../files/cssForMainClass.css">
    <link rel="stylesheet" href="../files/loginSignupHeader.css">
    <?php require '../files/css.php'?>
</head>

<body>
    <?php
    if(empty($_SESSION['firstName'])){
        require '../files/loginSignupHeader.php';
    }
    else{
        require '../files/header.php';
    }
    ?>
    
    <?php require '../files/sidebarauthor.php'?>

    <div id="content">
    <div class="main-area <?php require '../files/mainclass.php'?> ">
            <div class="writespace">
                <div id="area">
                    <?php echo $post_content ?>
                </div>
            </div>
        </div>
    </div>



    <?php require '../files/script.php'?>
    <script src="../files/loginSignupHeader.js"></script>

</body>

</html>