<?php
require_once('../config.php');
$upload_dir = '../product_image/';
session_start();

if (isset($_POST['Submit'])) {
  $product_name = $_POST['product_name'];
  $product_desc = $_POST['product_desc'];
  $product_price = $_POST['product_price'];
  $category = $_POST['category'];
  $user_ID = $_SESSION['user_ID'];
  $seller_name = $_SESSION['username'];


  if (empty($_POST['product_name'])) {
    echo "Fill out Product Name.";
    header('Location: ../seller/add-product.php?name=false');
  }
  if (empty($_POST['product_desc'])) {
    echo "Fill out Product Description.";
    header('Location: ../seller/add-product.php?desc=false');
  }
  if (empty($_POST['product_price'])) {
    echo "Fill out Product Price";
    header('Location: ../seller/add-product.php?price=false');
  }
  if (empty($_POST['category'])) {
    echo "Choose a certain region.";
    header('Location: ../seller/add-product.php?region=false');
  }
  if ($_FILES["image"]["name"] == '') {
    echo "Invalid picture.";
    header('Location: ../seller/add-product.php?image=false');
  }
  if ($_FILES['image']['tmp_name'] == '') {
    echo "Invalid picture.";
    header('Location: ../seller/add-product.php?image=false');
  }
  if ($_FILES['image']['size'] == '') {
    echo "Invalid picture.";
    header('Location: ../seller/add-product.php?image=false');
  }


  $imgName = $_FILES['image']['name'];
  $imgTmp = $_FILES['image']['tmp_name'];
  $imgSize = $_FILES['image']['size'];


  // if(empty($product_name)){
  //     $errorMsg ='Please input a Product Name';
  //     header('Location: ../seller/add-product.php?authenticate=false');
  //   } else if(empty($product_desc)){
  //     $errorMsg ='Please input Product Description';
  //     header('Location: ../seller/add-product.php?authenticate=false');
  //   }
  //  else if(empty($product_price)){
  //     $errorMsg ='Please input Product Price';
  //     header('Location: ../seller/add-product.php?authenticate=false');
  //   }
  //   else if(empty($category)){
  //     $errorMsg ='Please input a Category';
  //     header('Location: ../seller/add-product.php?authenticate=false');
  //   }
  //   else if(empty($product_img)){
  //     $errorMsg ='Please input a Category';
  //     header('Location: ../seller/add-product.php?authenticate=false');
  //   }

  $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));




  $allowExt  = array('jpeg', 'jpg', 'png', 'gif');

  $userPic = time() . '_' . rand(1000, 9999) . '.' . $imgExt;

  if (in_array($imgExt, $allowExt)) {

    if ($imgSize < 5000000) {
      move_uploaded_file($imgTmp, $upload_dir . $userPic);
    } else {
      echo $errorMsg = 'Image too large';
      header('Location: ../seller/add-product.php?imagesize=false');
    }
  } else {
    echo $errorMsg = 'Please select a valid image';
  }
}


if (!isset($errorMsg)) {
  $sql = "INSERT INTO `products`(`user_id`, `seller_name`, `category`, `product_name`, `product_price`, `product_img`, `product_desc`)
            VALUES('" . $user_ID . "','" . $seller_name . "','" . $category . "', '" . $product_name . "', '" . $product_price . "', '" . $userPic . "', '" . $product_desc . "')";

  $result = mysqli_query($conn, $sql);
  if ($result) {
    $successMsg = 'New record added successfully';
    header('Location: ../seller/manage-product.php');
  } else {
    $errorMsg = 'Error ' . mysqli_error($conn);
  }
}
