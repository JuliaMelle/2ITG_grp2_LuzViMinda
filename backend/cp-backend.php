<?php

session_start();
require_once '../config.php';
if (isset($_POST['updatepassword'])) {
    $currentID = $_SESSION["user_ID"];
    $password = $_SESSION["password"];
    
    $curpassword=md5($_POST['cur_password']);
    $password1=md5($_POST['password1']);
    $password2=md5($_POST['password2']);
    if (empty ($_POST['cur_password'])){
        echo "Fill out all fields.";
        header('Location: ../seller/change-password.php?fillout=false');
        }else if (empty($_POST['password1'])){
          echo "Fill out all fields.";
          header('Location: ../seller/change-password.php?fillout=false');
          }
        else if ($curpassword != $password) {
     
        echo "There was a problem. Wrong Password.";
        echo $curpassword;
        header('Location: ../seller/change-password.php?wrongpassword=true');
        
        } else if ($password1 != $password2) {
        echo "Passwords don't match.";

        header('Location: ../seller/change-password.php?match=false');

        } else {
        $sql = "UPDATE users SET `password` = '$password1'  WHERE user_ID='$currentID'";
        $_SESSION['password'] = $password1;
        $query = mysqli_query($conn, $sql);
        if($query){
      
            header('Location: ../seller/seller-account.php?success=true');

          }else{

           header('Location: ../seller/seller-account.php?success=true');
           
           echo $errorMsg = 'Error '.mysqli_error($conn);
          }
        echo "Success! Password has been changed.";
        }
}

mysqli_close($conn);

?>