<?php
require 'functions.php';
require('../config/config.php');
$error=[];
// session_start();
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
     header('location: agent/dashboard.php');
} else {
    session_destroy();
}
if(isset($_POST['signup'])){ 
     if (!empty($_POST['email'])) {
          $emailTemp = sanitize($_POST['email']);
          if (!check_duplicate('users', 'email', $emailTemp)) {
              $email = $emailTemp;
          } else {
              $error[] = "Sorry, this email has already been registered
                      : $emailTemp";
          }
      } else {
          $error[] = "An email address is necessary";
     }
     if (!empty($_POST['username'])) {
          $username = sanitize($_POST['username']); 
      } else {
          $error[] = "Name is required";
      }
      if (!empty($_POST['password'])) {
          $password = sanitize($_POST['password']); 
      } else {
          $error[] = "Password is required";
      }
      if($password<6) {
        $error[] = "Password is required";
    }
    if (!empty($_POST['confirmpassword'])) {
          $repeat_pass = sanitize($_POST['confirmpassword']);
             if ($password== $repeat_pass) {
                 $password = $repeat_pass;
             } else {
                 $error[] = "Your Passwords do not match";
             }
         } else {
             $error[] = "Please retype the password";
         }
      if (!empty($_POST['accttype'])) {
          $accttype = sanitize($_POST['accttype']); 
      } else {
          $error[] = "Please select account type";
      }
      if (!empty($_POST['phone_number'])) {
          $phone_number = sanitize($_POST['phone_number']); 
      } else {
          $error[] = "Your phone number is required";
      }
     //  if there is no error
     if (empty($error)) {
          $unique_code = rand(3, 1000000000);
          $key = md5($email);
        //   echo $unique_code." ".$key;
        //   die();
  
          $query = "INSERT INTO users (username, email, password, accttype, phone_number, vcode) 
                      VALUES ('$username', '$email', '$password', '$accttype', '$phone_number', '$unique_code')";
  
          $ent = mysqli_query($con, $query) or die(mysqli_error($con));
          if ($ent) {
              $sign = "<a href = 'http://localhost:9090/xixira/views/loginin.php?key=" . $key . "&mail=" . $email . "' style = 'color: #c36103; font-weight: bold; text-transform: capitalize; text-decoration: none;'> Sign In </a>";
              $message = `<p><h4>Hello $username, </h4><p>
                              <p>Thank you for registration on Xixira System.</p>
                              <p>Your unique code is: <h3> $unique_code </h3> please keep it safe as it maybe require during you KYC verification. </p>
                              <p>Your password is: <h3> $password </h3> </p>
                              <p>Welcome Aboard!</p> \n
                              <p>You can sign in here: $sign </p> \n
                              <p>Contact us immediately if you did not authorize this registration. </p>
                              <p>Our help line: +2348127087575</p>
                              <p>Kind Regards!</p>
                              <h3>Xixira Team</h3>`;
              $to = "$email";
              $from = "auto-reply@xixira.com";
              $subject = "Registration Information";
              $headers = "From: " . $from;
              $headers = "Content-type:text/html;charset=UTF-8";
              $send = mail($to, $subject, $message, $headers);
              if ($send == true) {
                  header('location: login.php?success=1');
              } else {
                  header('location: login.php?success=1');
              }
          }
      } else {
          $err_msg[]= "Oop! Something went wrong!";
      }
    
}
?>