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
     // header('location: dashboard.php');
} else {
    session_destroy();
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



if (isset($_POST['property'])) {
    $error_flag = false;
    if (!empty($_POST['title'])) {
        $title = sanitize($_POST['title']);
        
    } else {
        $error[] = "Title is required!";
    }

    if (!empty($_POST['purpose'])) {
        $purpose = sanitize($_POST['purpose']);
    } else {
        $error[] = "Purpose field can not be empty";
    }

    if (!empty($_POST['type'])) {
        $type = sanitize($_POST['type']);
    } else {
     $error[] = "What is the type of the property?";
    }
    if (!empty($_POST['subtype'])) {
     $subtype = sanitize($_POST['subtype']);
     } else {
     $error[] = "What is the address of where you live?";
     }
     if (!empty($_POST['bedrooms'])) {
          $bedrooms = sanitize($_POST['bedrooms']);
      } else {
       $error[] = "How many bedrooms is this property?";
      }
  
    if (!empty($_POST['toilet'])) {
        $toilet = sanitize($_POST['toilet']);
    } else {
        $error[] = "Please enter number of toilet";
    }

    if (!empty($_POST['size'])) {
     $size = sanitize($_POST['size']);
       
    } else {
        $error[] = "The size of the property is required";
    }
    if (!empty($_POST['state'])) {
        $state = sanitize($_POST['state']);
          
       } else {
           $error[] = "Which state is this property?";
       }
       if (!empty($_POST['locality'])) {
        $locality = sanitize($_POST['locality']);
          
       } else {
           $error[] = "The locality field is required";
       }
       if (!empty($_POST['area'])) {
        $area = sanitize($_POST['area']);
          
       } else {
           $error[] = "The area field is required";
       }
       if (!empty($_POST['address'])) {
        $address = sanitize($_POST['address']);
          
       } else {
           $error[] = "The size of the property is required";
       }
       if (!empty($_POST['price'])) {
        $price = sanitize($_POST['price']);
          
       } else {
           $error[] = "Set the price for this property";
       }
       if (!empty($_POST['currency'])) {
        $currency = sanitize($_POST['currency']);
          
       } else {
           $error[] = "Select the currency type";
       }
       if (!empty($_POST['description'])) {
        $description = sanitize($_POST['description']);
          
       } else {
           $error[] = "brief description of the property is required!";
       }
    if (!empty($_POST['furnished'])) {
     $furnished = sanitize($_POST['furnished']);
     } else {
        $furnished = 0;
     }
     if (!empty($_POST['serviced'])) {
          $serviced = sanitize($_POST['serviced']);
     } else {
        $serviced = 0;
     }
     if (!empty($_POST['newly-built'])) {
          $newly = sanitize($_POST['newly-built']);
     } else {
     $newly= 0;
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