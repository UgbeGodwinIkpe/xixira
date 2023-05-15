<?php
require 'functions.php';
require '../../config/config.php';
$error = [];
$propertyid=$_GET['propertyid'];
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
// <input name="upload[]" type="file" multiple="multiple" />
session_start();
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    session_destroy();
    header('location: ../login.php');
}
if(isset($_POST['upload'])){
$files = array_filter($_FILES['upload']['name']); //Use something similar before processing files.
// Count the number of uploaded files in array
$total_count = count($_FILES['upload']['name']);
// Loop through every file
for( $i=0 ; $i < $total_count ; $i++ ) {
   //The temp file path is obtained
   $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
   //A file path needs to be present
   if ($tmpFilePath != ""){
      //Setup our new file path
      $newFilePath = "../uploads/properties/" . $_FILES['upload']['name'][$i];
      //File is uploaded to temp dir
      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
     //     saving the image directory to the database
          $query = "INSERT INTO property_images (property_id, userid, image_link)
          VALUES ('$propertyid', '$user', '$newFilePath')";
          $send = mysqli_query($con, $query);
     }
     if ($i>=$total_count) {
     ?>
     <script>
          alert("Property has been successfully uploaded")
     </script>
     <?php
     
     }
 }
}
}