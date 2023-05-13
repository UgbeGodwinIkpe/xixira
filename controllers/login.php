<?php
require 'functions.php';
require '../config/config.php';
$error = [];
$msg=[];
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

session_start();
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    header('location: agent/dashboard.php');
} else {
    session_destroy();
}
if(isset($_GET['success'])==1){
    $msg[]="You registration was successful!";
}
if (isset($_POST['login'])) {
    $err_flag = false;
    if (!empty($_POST['email'])) {
        $email = sanitize($_POST['email']);
        
    } else {
        $error[] = "An email address is necessary";
    }
    if (!empty($_POST['password'])) {
        $pass = sanitize($_POST['password']);
    } else {
        $error[] = "Please enter your password";
    }
    
    if (empty($err_msg)) {
        $query = "SELECT * FROM users WHERE email= '$email' and password = '$pass'";

        $check = mysqli_query($con, $query);
        //  or die(mysqli_error($db));
        $find = mysqli_num_rows($check);
        
        if ($find == 1) {
            $fetch = mysqli_fetch_assoc($check);
            $user = $fetch['userid'];
            session_start();
            $_SESSION['user'] = $user;
            header('location: agent/dashboard.php');
        } else {
            $error[] = "Email or password is incorrect!";
        }
    }
}

?>