<?php
 require_once('../config.php');
 $upload_dir = '../upload/';
 session_start();
//  $name ='';
 if (isset($_POST['Submit'])) {
   $productName = $_POST['productName'];
   $productPrice = $_POST['productPrice'];
   $category_type = $_POST['category_type'];
   $productDescription = $_POST['productDescription'];
   $product_image = $_POST['product_image'];
   $user_ID= $_SESSION['user_ID'];
   $seller_name= $_SESSION["sFirstName"]." ".$_SESSION["sLastName"];


        $imgName = $_FILES['product_image']['name'];
        $imgTmp = $_FILES['product_image']['tmp_name'];
        $imgSize = $_FILES['product_image']['size'];

        if(empty($productName )){
          $errorMsg = 'Please input  product name ';
        }elseif(empty($productPrice)){
          $errorMsg = 'Please input Product Price';
        }elseif(empty($category_type)){
          $errorMsg = 'Please choose category';
        }
        else{
    
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
        }
        if(!isset($errorMsg)){
              $sql = "insert into product(user_ID, seller_name,category, product_name, product_price, product_image, product_desc)
              values(".$user_ID.",'".$seller_name."','".$category_type."', '".$productName."', '".$productPrice."', '".$userPic."', '".$productDescription."')";
    
          $result = mysqli_query($conn, $sql);
          if($result){
            $successMsg = 'New record added successfully';
            header('Location: ../seller/seller-page.php');
          }else{
            $errorMsg = 'Error '.mysqli_error($conn);
          }
        }
 }
?>