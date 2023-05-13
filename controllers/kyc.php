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

if (isset($_POST['kyc'])) {
    $err_flag = false;  
    //  if there is no erroe
    if (empty($err_msg)) {
        $file = ($_FILES['idcard']);
        $file2=($_FILES['selfie']);
        $id_card = upload_cert($file, $error);
        $selfie = upload_cert($file, $error);
        $status = 'pending';

        if ($id_card && $selfie) {
            $query = "INSERT INTO kyc (userid, id_card, selfie)
                    VALUES ('$user', '$id_card', '$selfie')";
            $send = mysqli_query($link, $query);
            if ($send) {
               ?>
               <script>
                    alert("Your documents has been successfully submitted.")
               </script>
               <?php
                //header('location: signin.php');
            }
        }
    } else {
     //return error here
       $error[]= "Oop! Something went wrong!";

    }
}
?>