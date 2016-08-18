<?php

session_start();



$adminEmail = "a";
$adminPassword = "a";

$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];

$_SESSION['checklogin'] = false;

if(isset($_POST['submitAdmin'])){
    if($_SESSION['email']  == $adminEmail && $_SESSION['password'] == $adminPassword ){
        $_SESSION['checklogin'] = true;
        header ('Location: admin.php');
    }else{
        $_SESSION['errormsj']= "Invalid email or password!";
        header ('Location: index.php');
    }
    if(!empty($_SESSION['email']) && !empty($_SESSION['password'])){
        
    }else{
        $_SESSION['errormsj']= "Fill all gaps please!";
        header ('Location: index.php');
    }
    
}else{
    header ('Location: index.php');
}







?>