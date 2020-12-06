<?php
session_start(); 
include 'config.php';

require_once 'validation.php';
mysqli_select_db($conn,$database);

$pass = $_POST['psw'];
$email = $_POST['email'];

$s = "SELECT * FROM details WHERE email = '$email' && password = '$pass'";


$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);


if($num == 1){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['id']=$row["id"];
    $_SESSION['userName'] = $row["name"];
    $_SESSION['bioh1'] = $row["bioh1"];
    $_SESSION['bioh2'] = $row["bioh2"];
    $_SESSION['mobile'] = $row["mobile"];
    $_SESSION['PROF']=$row["profilesource"];

    $name= $_SESSION['userName'];
    

    $countSpace=substr_count($name," ");

    if($countSpace>0)
    {

    $spacePosition=strpos($name," ");
    $first_name=substr($name,0,$spacePosition);
    $_SESSION['firstName'] = $first_name;
    $_SESSION['lastName']  = substr($name,$spacePosition);
    
    }
    else
    {
    $_SESSION['firstName']=$name;
    $_SESSION['lastName']="";
    }


    

    exit(header("location: ../../user/home/home.php"));
}else{
    $_SESSION['status']='password-wrong';
    exit(header("location: ../../login/login-page.php"));
}

mysqli_close($conn);


?>
