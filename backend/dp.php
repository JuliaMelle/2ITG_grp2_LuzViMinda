<?php
 session_start();
 require_once '../config.php';
 $upload_dir= '../user_identification/';
 $currentID=$_SESSION["user_ID"];
  $imgName = $_FILES['image']['name'];
  $imgTmp = $_FILES['image']['tmp_name'];
  $imgSize = $_FILES['image'] ['size'];

  if ($_FILES["image"]["name"] == ''){
    //echo "A valid profile picture must be uploaded.";
    header('Location: ../seller/change_profile.php?image=false');
    exit;
  } 

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
      `profile_img`= '$userPic'

  WHERE user_id = $currentID
      ";
  

if(mysqli_query($conn, $sql)){
    header('Location: ../seller/acc-page-seller.php?success=true');
//  $_SESSION["profile_img"] = $userPic;
//  if ($_SESSION["user_id"] == $currentID) {
//    header('Location:acc-page-seller.php');
//  }
} else {
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

//CLOSE DATABASE CONNECTION
mysqli_close($conn);

 ?>