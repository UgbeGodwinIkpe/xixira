<?php
//error_reporting(0);
session_start();
date_default_timezone_set("Europe/London");
if((isset($_SESSION['acttype']))){
if($_SESSION['acttype']==1){
$ddatabase = "xixira_viewdeep"; // database name
}
else{   
$ddatabase = "xixira_viewdeep"; // database name
}

}
else{
$ddatabase = "xixira_viewdeep"; 
}

$dhost = "localhost"; // Isi dengan localhost
$dusername = "xixira_realestate"; // database user
$dpassword = "kennykingcpa"; // database pass

 // database name
//error_reporting(0);
$con = mysqli_connect($dhost, $dusername, $dpassword, $ddatabase) or die("Could not connect database");

if($con){
//echo 'hello';
}
else{
//echo 'hey';
}




if($_COOKIE["username"] and $_COOKIE["password"])
{
$q = mysqli_query( $con, "SELECT * FROM tb_users WHERE username='{$_COOKIE['username']}' AND password='{$_COOKIE['password']}'") or die(mysql_error());
if(mysqli_num_rows($q) == 0)
{
$_COOKIE['username'] = false;
$_COOKIE['password'] = false;
} else {
$loggedin = 1;
$r = mysqli_fetch_assoc($q);
if((isset($_SESSION['acttype']))){
if($ddatabase=="xixira_viewdeep"){
$_SESSION['acttype']=1;
}
else{
$_SESSION['acttype']=2;
}
}
else{
$_SESSION['acttype']=1;
}
}
}





?>
