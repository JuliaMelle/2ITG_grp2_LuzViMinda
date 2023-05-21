<?php
session_start();
require_once '../config.php';
$upload_dir = '../user_identification/';

$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
$website = $_POST['website'];
$business_name= $_POST['business_name'];
$currentID = $_SESSION['user_ID'];


if (empty($email)) {
  $errorMsg = 'Please input your email';
  header('Location: ../seller/acc-page-seller.php?authenticate=false');
} else if (empty($username)) {
  $errorMsg = 'Please input your username';
  header('Location: ../selleracc-page-seller.php?authenticate=false');
} else if (empty($address)) {
  $errorMsg = 'Please input your address';
  header('Location: ../seller/acc-page-seller.php?authenticate=false');
} else if (empty($business_name)) {
  $errorMsg = 'Please input your business name';
  header('Location: ../seller/acc-page-seller.php?authenticate=false');
} 
else if (empty($website)) {
  $errorMsg = 'Please input your website';
  header('Location: ../seller/acc-page-seller.php?authenticate=false');
}else {

  $sql = "UPDATE users
         SET

            `business_name` = '$business_name',
             `username` = '$username',
             `email` = '$email',
             `address` = '$address',
             `website` = '$website'
         WHERE user_ID = $currentID
             ";
}

if (mysqli_query($conn, $sql)) {
  $_SESSION['username'] = $_POST['username'];
  $_SESSION['email'] = $email;
  $_SESSION["website"] = $website;
  $_SESSION["address"] = $address;


  header('Location: ../seller/seller-account.php');
} else {
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

//CLOSE DATABASE CONNECTION
mysqli_close($conn);
