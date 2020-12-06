<?php include '../files/variable.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../../resources/css/bootstrap.css">
    <link rel="stylesheet" href="edit-blog.css">
    <link rel="stylesheet" href="../files/cssForMainClass.css">
    <title>Sphoot: My Blog</title>
    <script src="../../resources/tools/ckeditor/ckeditor.js"></script>
</head>

<body>
    <nav class="mynav sticky-top">
        <a  href="#" id="pointer" onclick="goBack()">
            <svg width="1em" style="font-size:30px; " height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"
                />
                <path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </a>
        <a href=""><img src="../../resources/images/logo2.png" alt="" id="logo"></a>
        <button type="button" class="publish btn-success" id="publish" onclick="mypost()">
                <svg width="1em" height="1em" style="position: relative; top: -3px;" viewBox="0 0 16 16" class="bi bi-cursor-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
                </svg>
        Publish</button>
    </nav>
        <div id="top" >
            <button id="upnav">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-up " fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"
                    />
                </svg>
            </button>
            <button id="downnav">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"
                    />
                </svg>
            </button>
        </div>
        <div class="main-area <?php require '../files/mainclass.php'?>">
            <div class="writespace">
                <div id="title">
                    <h5 id="title-h">Title</h5>
                    <input type="text" placeholder="Title" id="input-h" value="<?php if($post_title !='(Untitled)'){echo ($post_title);}?>">
                </div>
            <div id="area" contenteditable="true"><?php if($post_content !=''){echo ($post_content);}?></div>
            </div>
        </div>



    <script src="../../resources/js/jquery-3.4.1.min.js"></script>
    <script src="../../resources/js/popper.min.js"></script>
    <script src="../../resources/js/bootstrap.js"></script>
    <script src="blog.js"></script>
</body>

</html>