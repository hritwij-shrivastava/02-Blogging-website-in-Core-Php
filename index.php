<!doctype html>
<html lang="en">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172923637-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-172923637-1');
  </script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="resources/css/bootstrap.css ">
  <link rel="stylesheet" href="index.css">
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

    <a href="index.php"><img src="resources/images/logo2.png" class="logo_originol"></a>
    <a href="index.php" id="homebtn">Home</a>
    <a href="about/about.php" id="aboutbtn">About</a>
    <form class="search_item" action="#">
      <input type="text" placeholder="Search" name="search">
    </form>
    <button class="button button2" type="button" onclick="loginpage()">Log in</button>
    <button class="button button3" type="button" onclick="signuppage()">Sign Up</button>
  </div>

  <div class="wrapper">
    <nav id="sidebar">
      <ul class="list-unstyled components">
        <a href="index.php"><img src="resources/images/logo2.png" class="logo786" id="logo_toggle"></a>
        <li>
          <button id="create-blog" onclick="blogopen()">&#x2b; &nbsp; Create Blog</button>
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
              style="display: inline-block; font-size: 11px; padding-left: 15px !important;" href="#">Terms of Service
              &nbsp; &#8226;</a></span>
          <span style="display: inline-block; "> <a
              style="display: inline-block; font-size: 11px; padding: 1px !important;" href="#">Privacy &nbsp; &#8226;
            </a></span>
          <span style="display: inline-block; "> <a
              style="display: inline-block; font-size: 11px; padding: 1px !important;" href="#"> Content Policy
            </a></span>
        </li>

      </ul>

    </nav>

  </div>

  <div id="wrapper-side">
    <div id="carouselExampleIndicators" class="carousel slide below" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="resources/images/i1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block text-light">
            <h1>We are launching soon</h1>
            <!-- <p >Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="resources/images/i2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block text-light">
            <h1>We are launching soon</h1>
            <!-- <p >Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="resources/images/i3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block text-light">
            <h1>We are launching soon</h1>
            <!-- <p >Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="resources/images/i4.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block text-light">
            <h1>We are launching soon</h1>
            <!-- <p >Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="resources/images/i5.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block text-light">
            <h1>We are launching soon</h1>
            <!-- <p >Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="resources/images/i6.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block text-light">
            <h1>We are launching soon</h1>
            <!-- <p >Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="t-center">
      <h2 class="h-style">For everyone, who wants to grow</h2>
      <div class="small-line"></div>
      <p>
        Want a platform to share your knowledge uniquely?
Here we welcome you all to explore your exciting new ideas, knowledge, skills to share across the globe. Sphoot provides you the platform that helps you to build yourself irrespective of who you are.
Our mission helps beginners to know themselves and our services support you to keep growing. We provide assistance to get you started whatever else you dream up.
      </p>
    </div>

    <div class="container below">
      <div class="row">
        <div class="col-sm-6 col-md-4 text-center">
          <div class="card wh-media">
            <img src="resources/images/p22.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Blog</h5>
              <p class="card-text">Make your own blogg with us.We will help you in sharing your knowledge with everyone.</p>
              <a href="#" class="btn btn-primary">Start Making Blog</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 text-center mt-n5">
          <div class="card wh-media-special">
            <img src="resources/images/p22.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Ask question</h5>
              <p class="card-text">Feel free to ask anything here.</p>
              <a href="#" class="btn btn-primary">Try now</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 text-center">
          <div class="card wh-media">
            <img src="resources/images/p22.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Browse </h5>
              <p class="card-text">Browse anything as per choice.</p>
              <a href="#" class="btn btn-primary">Browse</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="frame">

    </div>

    <div class="footer bg-dark">
      <div>
        <ul class="footer-ar" style="list-style: none; float: left;">
          <li>
            <h3>Help</h3>
          </li>
          <li><a href="#" class="text-light">Help Center</a></li>
          <li><a href="#" class="text-light">Help Forum</a></li>
          <li><a href="#" class="text-light">Video Tutorials</a></li>
          </br>
          </br>
          <li>
            <span style="display: inline-block; "> <a
                style="display: inline-block; font-size: 11px; padding-left: 5px !important;" href="#">Terms of Service
                &nbsp; &#8226;</a></span>
            <span style="display: inline-block; "> <a
                style="display: inline-block; font-size: 11px; padding: 1px !important;" href="#">Privacy &nbsp; &#8226;
              </a></span>
            <span style="display: inline-block; "> <a
                style="display: inline-block; font-size: 11px; padding: 1px !important;" href="#"> Content Policy
              </a></span>
          </li>
        </ul>

      </div>
      <div>

      </div>
    </div>

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
  <script src="resources/js/bootstrap.min.js"></script>
  <script src="index.js"></script>

</body>

</html>