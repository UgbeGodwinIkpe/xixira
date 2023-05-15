<?php
require '../config/config.php';
require 'functions.php';
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
     $error[] = "Sub_type for this property is required!";
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
       if (!empty($_POST['append_to'])) {
        $duration = sanitize($_POST['append_to']);
          
       } else {
           $error[] = "The price for this property is append to?";
       }
       if (!empty($_POST['currency'])) {
        $currency = sanitize($_POST['currency']);
          
       } else {
           $error[] = "Select the currency type";
       }
       if (!empty($_POST['installment_payment'])) {
        $installment = sanitize($_POST['installment_payment']);
          
       } else {
           $installment = 0;
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
        $propertyid = rand(3, 1000000000);
        $status = 'pending';

        if ($filed) {
            $query = "INSERT INTO properties (id, userid, title, purpose, type, sub_type, bedrooms, bathrooms, toilets, size, furnished, serviced, newly_built, state, locality, area, address, price, currency, append_to, installment_payment, description)
                    VALUES ('$propertyid', '$user', '$title', '$purpose', '$type', '$sub_type', '$bedrooms', '$bathrooms', '$toilets', '$furnished', '$serviced', '$newly_built' , '$state', '$locality', '$area', '$address', '$price', '$currency', '$append_to', '$installment', '$description')";
            $send = mysqli_query($con, $query);
            if ($send) {
               ?>
               <script>
                    alert("Upload the property pictures/images")
               </script>
               <?php
                header('location: property_images.php?propertyid='.$propertyid);
            }
        }
    } else {
     //return error here
       $err_msg[]= "Oop! Something went wrong!";

    }
}
?>