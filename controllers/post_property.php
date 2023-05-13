<?php
require 'functions.php';
require '../config/config.php';
$error = [];
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

session_start();
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
     // header('location: dashboard.php');
} else {
    session_destroy();
}

if (isset($_POST['property'])) {
    $error_flag = false;
    if (!empty($_POST['email'])) {
        $emailTemp = sanitize($_POST['email']);
        if (!check_duplicate('consultant', 'email', $emailTemp)) {
            $email = $emailTemp;
        } else {
            $err_msg[] = "Sorry, someone has already applied with this email
                    : $emailTemp";
        }
    } else {
        $err_msg = "An email address is necessary";
    }

    if (!empty($_POST['fname'])) {
        $fname = sanitize($_POST['fname']);
        
    } else {
        $err_msg[] = "What is your first name?";
    }

    if (!empty($_POST['lname'])) {
        $lname = sanitize($_POST['lname']);
    } else {
        $err_msg[] = "What is your last name?";
    }

    if (!empty($_POST['home'])) {
        $home_address = sanitize($_POST['home']);
    } else {
     $err_msg[] = "What is the address of where you live?";
    }
    if (!empty($_POST['office'])) {
     $office_address = sanitize($_POST['office']);
     } else {
     $err_msg[] = "What is the address of where you live?";
     }
     if (!empty($_POST['phone'])) {
          $phone_no = sanitize($_POST['phone']);
      } else {
       $err_msg[] = "What is the address of where you live?";
      }
  
    if (!empty($_POST['password'])) {
        $pass = sanitize($_POST['password']);
    } else {
        $err_msg[] = "Please enter a password";
    }

    if (!empty($_POST['repeat_password'])) {
     $repeat_pass = sanitize($_POST['repeat_password']);
        if ($pass== $repeat_pass) {
            $pass = $repeat_pass;
        } else {
            $err_msg[] = "Your Passwords do not match";
        }
    } else {
        $err_msg[] = "Please retype the password";
    }
    if (!empty($_POST['sex'])) {
     $gender = sanitize($_POST['sex']);
     } else {
          $err_msg[] = "What is your gender?";
     }
     if (!empty($_POST['xperience_years'])) {
          $xp_years = sanitize($_POST['xperience_years']);
     } else {
     $err_msg[] = "You must provide your years of experience";
     }
     if (!empty($_POST['qualification'])) {
          $qualification = sanitize($_POST['qualification']);
     } else {
     $err_msg[] = "You must provide the highest qualification you have on medical profession!";
     }
     
    //  if there is no erroe
    if (empty($err_msg)) {
        $id = rand(3, 1000000000);
        $key = md5($email);
        $fullN = $fname.' '.$lname;
        $file = ($_FILES['cert']);
        $filed = upload_cert($file, $err_msg);
        $status = 'pending';

        if ($filed) {
            $query = "INSERT INTO propertirs (id, name, email, password, home_address, phone_number, qualification, present_work_address, xperience_years, certificate, sex, application_status)
                    VALUES ('$id', '$fullN', '$email', '$pass', '$home_address', '$phone_no', '$qualification', '$office_address', '$xp_years', '$filed', '$gender', '$status')";
            $send = mysqli_query($link, $query);
            if ($send) {
               ?>
               <script>
                    alert("Your Application has been successfully submitted. You can login and monitor the status of the application")
               </script>
               <?php
                //header('location: signin.php');
            }
        }
    } else {
     //return error here
       $err_msg[]= "Oop! Something went wrong!";

    }
}
?>