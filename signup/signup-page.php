<?php

session_start();

?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-signin-client_id" content="70309058388-dafchen7h2p0ge74l30sjblkrvapiop0.apps.googleusercontent.com">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../resources/css/bootstrap.css">
	<link rel="stylesheet" href="signup.css">
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
                <form class="login-form" action="../resources/config_files/registration.php" method="post" id="fieldarea" >
                    <button type="button" class="loginbtn1">Sign up with Google</button>
                    <div class="container-form">
                        <label id="name-label"><b>Display Name</b></label>
                        <input type="text" name="name" id="name-fill" style="background-color: white;" required>
                        <label id="cntempty">*Display name can't be empty</label>

                        <label id="email-label"><b>Email</b></label>
                        <input type="text" name="email" id="emailfill" style="background-color: white;">
                        <label id="invalidemail">*You have entered an invalid email</label>
                        
                        <label id="pass-label"><b>Password</b></label>
                        <input type="password" id="pass-fill" name="psw" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                            required>
                        <button class="instruction " type="button" id="button-addon2">
                            <img src="../resources/images/123.png" alt="" style="width: 20px; height:20px;"> 
                        </button>
                        <label id="invalidpass">*You have entered an invalid password.</label>

                        <label id="conf-label"><b>Confirm Password</b></label>
                        <input type="password" name="conf-psw" id="conf-fill"
                            style="background-color: white; width:100% !important;">
                        <label id="not-match">*Password do NOT match. Please try again..</label>
                        <label id="ok-match">*Password matched</label>
                        <!-- <iframe src="" frameborder="0" class="captcha"> -->
                        <!-- <div class="adjust"> -->
                        <div id="adjust" style="transform: scale(0.90); -webkit-transform: scale(0.90); transform-origin: 0 0; -webkit-transform-origin: 0 0;"  class="g-recaptcha" data-sitekey="6Lc6O7gZAAAAACvWdO8IBR4lXwAkn3oKoFG010KR"></div>
                        <!-- </iframe> -->
                        <!-- </div> -->
                        <button type="button"  class="button23" onclick="submission()" >Sign up</button>
                    </div>
                </form>
                <div class="arrow-box" id="message">
					<h3>Password must contain the following:</h3>
					<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
					<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
					<p id="number" class="invalid">A <b>number</b></p>
					<p id="length" class="invalid">Minimum <b>8 characters</b></p>
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
	<script src="signup.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

	<?php
      
      if($_SESSION['status']=='email_already') {
        echo '<script type="text/JavaScript">  
        swal({
			class: "myClass",
			title: "Oops!",
			text: "Email already exists.Try forget password",
			icon: "warning",
			button: "Ok got it",
			
			dangerMode: true,
		  });
        </script>' ;
        }
        elseif($_SESSION['status']=='uff') {
        
            echo '<script type="text/JavaScript">
            swal({
                class: "myClass",
                title: "Oops!",
                text: "Please fill the captcha",
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