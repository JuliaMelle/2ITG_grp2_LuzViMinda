<?php
session_start();
require_once('../config.php');
$upload_dir = '../product_image/';

if (isset($_POST['Submit'])) {
  $product_name = $_POST['product_name'];
  $product_desc = $_POST['product_desc'];
  $product_price = $_POST['product_price'];
  $category = $_POST['category'];
  $user_ID = $_SESSION['user_ID'];
  $seller_name = $_SESSION['username'];

  $imgName = $_FILES['product_image']['name'];
  $imgTmp = $_FILES['product_image']['tmp_name'];
  $imgSize = $_FILES['product_image']['size'];

  $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
  $allowExt  = array('jpeg', 'jpg', 'png');
  $userPic = time() . '_' . rand(1000, 9999) . '.' . $imgExt;

  if (in_array($imgExt, $allowExt)) {
    if ($imgSize < 5000000) {
      move_uploaded_file($imgTmp, $upload_dir . $userPic);
    } else {
      header('Location: ../seller/add-product.php?imagesize=false');
    }
  } else {
    header('Location: ../seller/add-product.php?fields=false');
  }

  if (empty($product_name)) {
    header('Location: ../seller/add-product.php?name=false');
  }
  if (empty($product_desc)) {
    header('Location: ../seller/add-product.php?desc=false');
  }
  if (empty($product_price)) {
    header('Location: ../seller/add-product.php?price=false');
  }
  if (empty($userPic)) {
    header('Location: ../seller/add-product.php?imagefile=false');
  }
  if ($_FILES['product_image']['name'] == '') {
    header('Location: ../seller/add-product.php?imagefile=false');
  }
  if (empty($product_name) or empty($product_desc) or empty($product_price) or empty($userPic) or (($_FILES['product_image']['name'] !== ''))) {
    header('Location: ../seller/add-product.php?fields=false');      
  }

  if (!empty($product_name) AND !empty($product_desc) AND !empty($product_price) AND !empty($userPic) AND !empty($category) AND (($_FILES['product_image']['name'] !== ''))) {
    $sql = "INSERT INTO `products`
    (`user_id`, `seller_name`, `category`, `product_name`, `product_price`, `product_img`, `product_desc`)
            VALUES('" . $user_ID . "','" . $seller_name . "','" . $category . "', '" . $product_name . "', '" . $product_price . "', '" . $userPic . "', '" . $product_desc . "')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
      $successMsg = 'New record added successfully';
      header('Location: ../seller/manage-product.php');
    } else {
      $errorMsg = 'Error ' . mysqli_error($conn);
    }
  }
}
?>