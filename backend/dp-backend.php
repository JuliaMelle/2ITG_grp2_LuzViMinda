<?php
 session_start();
 require_once '../config.php';
 $upload_dir= '../user_identification/';
 $currentID=$_SESSION["user_ID"];
  $imgName = $_FILES['image']['name'];
  $imgTmp = $_FILES['image']['tmp_name'];
  $imgSize = $_FILES['image'] ['size'];

  $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
    
  $allowExt  = array('jpeg', 'jpg', 'png', 'gif');

  $userPic = time().'_'.rand(1000,9999).'.'.$imgExt;

  if(in_array($imgExt, $allowExt)){

    if($imgSize < 5000000){
      move_uploaded_file($imgTmp ,$upload_dir.$userPic);
    }else{
      $errorMsg = 'Image too large';
    }
  }else{
    $errorMsg = 'Please select a valid image';
  }
  
  $sql = "UPDATE users
  SET
      `profile`= '$userPic'

  WHERE user_ID = $currentID
      ";
  

if(mysqli_query($conn, $sql)){

 $_SESSION["profile"] = $userPic;
 if ($_SESSION["usertype"] == "Seller") {
   header('Location: ../seller/seller-page.php');
 }
 if ($_SESSION["usertype"] == "Buyer") {
   header('Location:../buyer/buyer-page.php');
 }
} else {
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

//CLOSE DATABASE CONNECTION
mysqli_close($conn);

 ?>