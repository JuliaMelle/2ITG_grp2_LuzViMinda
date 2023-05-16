<?php
 require_once('../config.php');
 $upload_dir = '../upload/';
 session_start();


 if (isset($_POST['Submit'])) {
   $product_name = $_POST['product_name'];
   $product_desc = $_POST['product_desc'];
   $product_price = $_POST['product_price'];
   $category = $_POST['category'];
   $product_img = $_POST['product_img'];
   $user_ID= $_SESSION['user_ID'];
   $seller_name= $_SESSION["sFirstName"]." ".$_SESSION["sLastName"];


   $imgName = $_FILES['image']['name'];
   $imgTmp = $_FILES['image']['tmp_name'];
   $imgSize = $_FILES['image']['size'];
       
        if(empty($product_name)){
            $errorMsg ='Please input a Product Name';
            header('Location: ../add-product.php?authenticate=false');
          } else if(empty($product_desc)){
            $errorMsg ='Please input Product Description';
            header('Location: ../add-product.php?authenticate=false');
          }
         else if(empty($product_price)){
            $errorMsg ='Please input Product Price';
            header('Location: ../add-product.php?authenticate=false');
          }
          else if(empty($category)){
            $errorMsg ='Please input a Category';
            header('Location: ../add-product.php?authenticate=false');
          }
          else if(empty($product_img)){
            $errorMsg ='Please input a Category';
            header('Location: ../add-product.php?authenticate=false');
          }
        else{
            $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));


            $allowExt  = array('jpeg', 'jpg', 'png', 'gif');
       
            $userPic = time() . '_' . rand(1000, 9999) . '.' . $imgExt;
       
            if (in_array($imgExt, $allowExt)) {
       
                if ($imgSize < 5000000) {
                    move_uploaded_file($imgTmp, $upload_dir . $userPic);
                } else {
                    $errorMsg = 'Image too large';
                }
            } else {
                $errorMsg = 'Please select a valid image';
            }


        }


        if(!isset($errorMsg)){
            $sql = "insert into product(user_ID, seller_name,category, product_name, product_price, product_img, product_desc)
            values(".$user_ID.",'".$seller_name."','".$category."', '".$product_name."', '".$product_price."', '".$userPic."', '".$product_desc."')";
 
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
