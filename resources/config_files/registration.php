<?php
session_start(); 
include 'config.php';

require_once 'registration.php';
$conn = mysqli_connect($servername, $username, $password, $database);

mysqli_select_db($conn,$database);

$name = $_POST['name'];
$pass = $_POST['psw'];
$email = $_POST['email'];
$bioh1 = "WRITE YOUR BIO HERE";
$bioh2 = "AND DESCRIBE YOURSELF";
$mobile = "+91 80********";
$profilesource = "../images/profile.png";

$s = "SELECT * FROM details WHERE email = '$email'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);


if($num == 1){
    $_SESSION['status']='email_already';

    exit(header("Location: ../signup/signup-page.php"));
    
}else{
    
    $reg = "INSERT INTO details(name , email ,password , bioh1 , bioh2 , mobile , profilesource,background-theme ) VALUES ('$name' , '$email' ,'$pass','$bioh1','$bioh2','$mobile','$profilesource','' )";
    mysqli_query($conn, $reg);
    $_SESSION['status']=1;
    exit(header("Location: ../login/login-page.php"));
   
    
}

mysqli_close($conn);




?>
