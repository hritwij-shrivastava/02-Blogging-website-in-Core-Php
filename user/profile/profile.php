<?php

session_start();

if(empty($_SESSION['firstName'])){
  session_destroy();

header('location: ../../login/login-page.php');
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Sphoot-For Those Who Want To Grow</title>
    <!-- Bootstrap CSS -->
    <?php require '../files/css.php'?>
    <link rel="stylesheet" href="profile.css">
</head>

<body>

    <?php require '../files/header.php'?>
    <?php require '../files/sidebar.php'?>
    <div id="content">
        <div class="blank-space">
            <div class="message-area">
                <div class="yellowcircle">
                    <div class="yellocircle2">
                    </div>
                    <div class="greencircle">
                        <a href="<?php echo $_SESSION['PROF'] ?>" target="_blank">
                            <div class="imgarea" style = " background-image: url(<?php echo $_SESSION['PROF'] ?>); ">
                            </div>
                        </a>

                    </div>

                    <div class="whitearea">
                        <div id="img">
                            <h1 id="white_name">
                                <?php echo $_SESSION['firstName']; ?>
                            </h1>
                            <h1 id="title_name">
                                <?php echo $_SESSION['lastName']; ?>
                            </h1>
                            <h1 id="founder"class="the"><?php echo $_SESSION['bioh1']; ?></h1> <br> 
                            <h1 id="founderOF"class="the"> <?php echo $_SESSION['bioh2']; ?></h1>
                            <img id="landline" src="../../resources/images/pho2.png" alt="">
                            <h1 id="cme">Contact me on :</h1>
                            <h1 id="mobno">
                                <?php echo $_SESSION['mobile']; ?>
                            </h1>
                            <div class="finalcircle">
                                <h1 id="meem">MEET ME</h1>
                                <h1 id="ons">ON SPHOOT</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>




<?php require '../files/script.php'?>
</body>

</html>