<?php
// require 'functions.php';
require('../../config/config.php');
session_start();
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    session_destroy();
    header('location: ../login.php');
}

$sql = "SELECT * FROM properties INNER JOIN property_images ON properties.userid = '$user' AND property_images.userid='$user'";
    $query = mysqli_query($con, $sql);
    if(mysqli_error($con)){
        echo "Error: ".mysqli_error($con);
        die();
    }
    if ($query) {
        if (mysqli_num_rows($query) > 0) {
            $list=mysqli_fetch_assoc($query);
            // var_dump($list);
            // exit();
            //  $i=0;
            while($i < $list){
            $i++;
            }
            
        } else {
            return false;
        }
    }

?>