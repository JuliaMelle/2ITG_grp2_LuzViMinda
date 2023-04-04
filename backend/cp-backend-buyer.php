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

        header('Location: ../buyer/change-password.php?fillout=false');

        }
        else if ($curpassword != $password) {
        echo "There was a problem. Wrong Password.";

        header('Location: ../buyer/change-password.php?wrongpassword=true');

        } else if ($password1 != $password2) {
        echo "Passwords don't match.";

        header('Location: ../buyer/change-password.php?match=false');

        } else {
        $sql = "UPDATE users SET `password` = '$password1'  WHERE user_ID='$currentID'";
        $query = mysqli_query($conn, $sql);
        if($query){
      
            header('Location: ../buyer/buyer-page.php');

          }else{

           header('Location: ../buyer/buyer-page.php');
           
           echo $errorMsg = 'Error '.mysqli_error($conn);
          }
        echo "Success! Password has been changed.";
        }
}
mysqli_close($conn);
?>