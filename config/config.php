<?php
//error_reporting(0);
date_default_timezone_set("Europe/London");
global $con;
$dbHost = "localhost"; // Isi dengan localhost
$dbUser = "root"; // database user
$dbPassword = ""; // database pass
$db="xixira"; // database name
// conneting to the server
$con = mysqli_connect($dbHost, $dbUser, $dbPassword, $db) or die("Could not connect to database");

// if($_COOKIE["username"] and $_COOKIE["password"]){
//      $q = mysqli_query( $con, "SELECT * FROM tb_users WHERE username='{$_COOKIE['username']}' AND password='{$_COOKIE['password']}'") or die(mysqli_error($con));
//      if(mysqli_num_rows($q) == 0){
//           $_COOKIE['username'] = false;
//           $_COOKIE['password'] = false;
//      } else {
//           $loggedin = 1;
//           $r = mysqli_fetch_assoc($q);
//           if((isset($_SESSION['acttype']))){
//                if($ddatabase=="xixira_viewdeep"){
//                     $_SESSION['acttype']=1;
//                }else{
//                     $_SESSION['acttype']=2;
//                }
//           }else{
//                $_SESSION['acttype']=1;
//           }
//      }
// }





?>
