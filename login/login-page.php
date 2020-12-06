<?php

session_start();

?>





<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../resources/css/bootstrap.css">
    <link rel="stylesheet" href="login-page.css">
    <title>Sphoot-For Those Who Want To Grow</title>
</head>

<body>

    <div class="togglearea" id="togglearea2">
        <button type="button" class="sidebarCollapse navbar-btn" id="sidebarCollapse">
			<span id="spinnertop"></span>
			<span id="spinnermiddle"></span>
			<span id="spinnerbottom"></span>
        </button>
        <button class="button-login-navbar" type="button" onclick="loginpage()">Log in</button>
        <button class="button-signup-navbar" type="button" onclick="signuppage()">Sign Up</button>
    </div>
    <div class="navbar2 sticky-top" id="myHeader">
        <button type="button" class="sidebarCollapse navbar-btn" id="sidebarCollapse2">
			<span id="spinnertop1"></span>
			<span id="spinnermiddle2"></span>
			<span id="spinnerbottom3"></span>
        </button>

        <a href="../index.php"><img src="../resources/images/logo2.png" class="logo_originol"></a>
        <a href="../index.php" id="homebtn">Home</a>
        <a href="../about/about.php" id="aboutbtn">About</a>
        <form class="search_item" action="#">
            <input type="text" placeholder="Search" name="search">
        </form>
        <button class="button button2" type="button" onclick="loginpage()">Log in</button>
        <button class="button button3" type="button" onclick="signuppage()">Sign Up</button>
    </div>

    <div class="wrapper">
        <nav id="sidebar">
            <ul class="list-unstyled components">
                <a href="../index.php"><img src="../resources/images/logo2.png" class="logo786" id="logo_toggle"></a>
                <li>
                    <button id="create-blog">&#x2b; &nbsp; Create Blog</button>
                </li>
                <li class="active">
                    <a href="#"> Feed</a>
                </li>
                <li>
                    <a href="#"> Science</a>
                </li>
                <li>
                    <a href="#"> History</a>
                </li>
                <li>
                    <a href="#"> Food</a>
                </li>
                <li>
                    <a href="#"> Education</a>
                </li>
                <li>
                    <a href="#"> Business</a>
                </li>
                <li>
                    <a href="#"> Health</a>
                </li>
                <li>
                    <a href="#"> Books</a>
                </li>
                <li>
                    <a href="#"> Technology</a>
                </li>
                </br>
                </br>
                </br>
                <li>
                    <span style="display: inline-block; "> <a
                            style="display: inline-block; font-size: 11px; padding-left: 15px !important;"
                            href="#">Terms of Service
                            &nbsp; &#8226;</a></span>
                    <span style="display: inline-block; "> <a
                            style="display: inline-block; font-size: 11px; padding: 1px !important;" href="#">Privacy
                            &nbsp; &#8226;
                        </a></span>
                    <span style="display: inline-block; "> <a
                            style="display: inline-block; font-size: 11px; padding: 1px !important;" href="#"> Content
                            Policy
                        </a></span>
                </li>

            </ul>

        </nav>

    </div>

    <div id="wrapper-side">
        <div class="form-place">
            <div class="center-area">
                <form class="login-form" action="../resources/config_files/validation.php" method="post">
                    <button type="submit" class="loginbtn1">Log in with Google</button>
                    <div class="container-form">
                        <label id="email-label"><b>Email</b></label>
                        <input type="text" name="email" id="email-fill" style="background-color: white;">
                        <label id="pass-label"><b>Password</b></label>
                        <input type="password" name="psw" id="pass-fill"  style="background-color: white;" >
                        <a href="" style="text-decoration:none; position: absolute; left: 160px; font-size: 15px;">Forgot password?</a>
                        <button type="submit" class="button23">Login</button>                       
                    </div>
                </form>
                <div class="signin">
                    <p>Don't have an account? <a href="../signup/signup-page.php">Sign up</a></p>
                </div>
        
            </div>
    
        </div>
        <div id="blankspace"></div>
    </div>
   

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <script src="../resources/js/bootstrap.min.js"></script>
    <script src="../resources/tools/sweetalert/sweetalert.min.js"></script>
    <script src="loginpage.js"></script>

	<?php
      
      if($_SESSION['status']==1) {
        echo '<script type="text/JavaScript">  
        swal({
			title: "Registration Successful!",
			text: "Please login to contnue",
			icon: "success",
			button: "OK",
		  });
        </script>' ;
        }
        elseif($_SESSION['status']=='password-wrong') {
        
            echo '<script type="text/JavaScript">
            swal({
                class: "myClass",
                title: "Try again",
                text: "Please check the password.",
                icon: "warning",
                button: "Ok got it",
                
                dangerMode: true,
            });
            </script>' ;
        }
        else{
            unset($_SESSION['status']);
        }	 
    ?>

</body>

</html>