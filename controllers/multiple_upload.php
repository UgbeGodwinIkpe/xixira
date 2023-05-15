<?php
require 'functions.php';
require '../config/config.php';
$error = [];
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
      $newFilePath = "./uploadFiles/" . $_FILES['upload']['name'][$i];
      //File is uploaded to temp dir
      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
         //Other code goes here
      }
   }
}
