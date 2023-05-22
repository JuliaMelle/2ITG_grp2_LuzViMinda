<?php
 session_start();
 require_once '../config.php';
 $upload_dir= '../product_image/';
  $product_id = $_POST['product_id'];
  $imgName = $_FILES['image']['name'];
  $imgTmp = $_FILES['image']['tmp_name'];
  $imgSize = $_FILES['image'] ['size'];

  if ($_FILES["image"]["name"] == ''){
    //echo "A valid product image must be uploaded.";
    header('Location: ../seller/product_img.php?image=false');
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
  
  $sql = "UPDATE products
  SET
      `product_img`= '$userPic'

  WHERE product_id = $product_id
      ";
  

if(mysqli_query($conn, $sql)){
    header('Location: ../seller/seller-account.php?success2=true');

} else {
 echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

//CLOSE DATABASE CONNECTION
mysqli_close($conn);

 ?>