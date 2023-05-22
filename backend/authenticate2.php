<?php
ob_start();
session_start();
session_regenerate_id();
require_once '../config.php';

$username = $_SESSION['username'];
$password = $_SESSION['password'];

//SELECT SQL
$sql = "
    SELECT 
      * 
    FROM 
      `users` 
    WHERE 
      `username`='" . $username . "'
      AND
      `password`='" . $password . "'
  ";

//Execute SQL
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);

if ($count > 0) {
    //user found

    $_SESSION['loggedin'] = TRUE;
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $row['user_id'];
    $_SESSION['user_ID'] = $row['user_id'];
    $_SESSION['password'] = $password;
    $_SESSION['profile_img'] = $userProfile;
  
    header('Location: ../seller/add-contact.php');
} else {


    $_SESSION['loggedin'] = TRUE;
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $row['user_id'];
    $_SESSION['user_ID'] = $row['user_id'];
    $_SESSION['password'] = $password;
    $_SESSION['profile_img'] = $userProfile;
    echo 'wawa ayaw';
}

//CLOSE DATABASE CONNECTION
mysqli_close($conn);
ob_end_flush();
?>
