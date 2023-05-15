<?php
session_start();
require_once '../config.php';
$id = $_SESSION['id'];

   // $user_id = $_POST['user_id'];
    $contact_no = $_POST['contact_no'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $others = $_POST['others'];

    $sql = "UPDATE `contacts`
    SET
    `contact_no` = '$contact_no',
    `facebook` = '$facebook',
    `instagram` = '$instagram',
    `others` = '$others'
    WHERE `user_ID` = $id
    ";

        if (mysqli_query($conn, $sql)) {
            header('Location:../seller/seller-account.php');
        } else {
            mysqli_error($conn);
            header('Location: ../edit-contact.php?authenticate=false');
        }

        //.4 Closing Database Connection
        mysqli_close($conn);

?>