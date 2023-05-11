    <?php

    //1. Setup Database connection
    require_once '../config.php';
    $upload_dir = '../user_profile_img/';
    $upload_dir2 = '../user_identification/';
    // $upload_dir = '../uploads/';

    $business_name = $_POST['business_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    // $password = md5($_POST['password']); 
    //MD5 encryption

    $imgName = $_FILES['image']['name'];
    $imgTmp = $_FILES['image']['tmp_name'];
    $imgSize = $_FILES['image']['size'];

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

    // 2nd image
    $imgName2 = $_FILES['image_v2']['name'];
    $imgTmp2 = $_FILES['image_v2']['tmp_name'];
    $imgSize2 = $_FILES['image_v2']['size'];

    $imgExt2 = strtolower(pathinfo($imgName2, PATHINFO_EXTENSION));

    $allowExt  = array('jpeg', 'jpg', 'png', 'gif');

    $userPic2 = time() . '_' . rand(1000, 9999) . '.' . $imgExt2;

    if (in_array($imgExt, $allowExt)) {

        if ($imgSize2 < 5000000) {
            move_uploaded_file($imgTmp2, $upload_dir2 . $userPic2);
        } else {
            $errorMsg = 'Image too large';
        }
    } else {
        $errorMsg = 'Please select a valid image';
    }

    if(empty($business_name)){
        $errorMsg ='Please input your Display name';
        header('Location: ../registration_form.php?authenticate=false');
      } else if(empty($username)){
        $errorMsg ='Please input your username';
        header('Location: ../registration_form.php?authenticate=false');
      }
     else if(empty($email)){
        $errorMsg ='Please input your email';
        header('Location: ../registration_form.php?authenticate=false');
      }
      else if(empty($password)){
        $errorMsg ='Please input your password';
        header('Location: ../registration_form.php?authenticate=false');
      }
      else if(empty($address)){
        $errorMsg ='Please input your address';
        header('Location: ../registration_form.php?authenticate=false');
      }

    //2. Insert SQL
    else {
    $sql = "  INSERT INTO 
    `users`
    (`business_name`, `username`, `email`, `password`, `address`, `profile_img`, `valid_id_img`) 
    VALUES (
        '" . $business_name . "',
        '" . $username . "',
        '" . $email . "',
        '" . $password . "',
        '" . $address . "',
        '" . $userPic . "',
        '" . $userPic2 . "'
        )";


    //3. Execute SQL
    if (mysqli_query($conn, $sql)) {
        header('Location:../login.php');
    } else {
        mysqli_error($conn);
        header('Location: ../registration_form?authenticate=false');
    }

    //.4 Closing Database Connection
    mysqli_close($conn);
    }




    ?>