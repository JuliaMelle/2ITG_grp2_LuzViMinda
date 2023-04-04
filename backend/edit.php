<?php
session_start();
require_once '../config.php';
$upload_dir = '../upload/';

    
if (isset($_POST['edit'])) {
    $prodCheck = $_POST['product_id'];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $category_type = $_POST['category_type'];
    $productDescription = $_POST['productDescription'];
    $user_ID= $_SESSION['user_ID'];
    $seller_name= $_SESSION["sFirstName"]." ".$_SESSION["sLastName"];
    
    $imgName = $_FILES['product_image']['name'];
    $imgTmp = $_FILES['product_image']['tmp_name'];
    $imgSize = $_FILES['product_image']['size'];
    $IDprod = $_POST["product_id"];

    $concat = "../seller/edit-form.php?product_id=".$IDprod;
    if(!is_numeric($productPrice)){
      echo '<script> alert("Can only enter numerical value in Product Price.");</script>';
      header("Location: $concat");
    }
    else if(empty($imgName) || empty($imgTmp || empty($imgSize) || empty($prodImg) )){
        if(!isset($errorMsg)){
            $sql = "UPDATE product
            SET
            `user_ID` = '$user_ID',
            `seller_name` = '$seller_name',
            `category` = '$category_type',
            `product_name` = '$productName',
            `product_price` = '$productPrice',
            `product_desc`= '$productDescription'
            WHERE `product_id`= $prodCheck
            ";
     
           $result = mysqli_query($conn, $sql);
           if($result){
             header('Location: ../seller/seller-page.php');
           }else{
            header('Location: ../seller/seller-page.php');
            echo $errorMsg = 'Error '.mysqli_error($conn);
           }
         }
    }
    else {
      $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
        $allowExt  = array('jpeg', 'jpg', 'png', 'gif');
        $userPic = time().'_'.rand(1000,9999).'.'.$imgExt;
        
        if(in_array($imgExt, $allowExt)){
            if($imgSize < 5000000){
               move_uploaded_file($imgTmp,$upload_dir.$userPic);
             }else{
               echo $errorMsg = 'Image too large';
             }
           }else{
            echo $errorMsg = 'Please select a valid image';
           }
        
        if(!isset($errorMsg)){
            $sql = "UPDATE product
            SET
            `user_ID` = '$user_ID',
            `seller_name` = '$seller_name',
            `category` = '$category_type',
            `product_name` = '$productName',
            `product_price` = '$productPrice',
            `product_image`= '$userPic',
            `product_desc`= '$productDescription'
            WHERE `product_id`= $prodCheck
            ";
     
           $result = mysqli_query($conn, $sql);
           if($result){
             header('Location: ../seller/seller-page.php');
           }else{
            header('Location: ../seller/seller-page.php');
            echo $errorMsg = 'Error '.mysqli_error($conn);
           }
         }
    }
        
  }

?>