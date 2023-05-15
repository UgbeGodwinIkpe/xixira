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

$sql = "SELECT * FROM properties WHERE userid = '$user' JOIN property_images ON properties.id = property_images.propertyid";
    $query = mysqli_query($con, $sql);
    if(mysqli_error($con)){
        // echo "Error: ".mysqli_error($con);
        // die();
    }
    if ($query) {
        if (mysqli_num_rows($query) > 0) {
            $list=mysqli_fetch_assoc($query);
            
        } else {
            return false;
        }
    }

?>