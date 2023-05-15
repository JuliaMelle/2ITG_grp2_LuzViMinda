<?php
session_start();
require_once '../config.php';
$id = $_SESSION['user_ID'];

   // $user_id = $_POST['user_id'];
    $contact_no = $_POST['contact_no'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $others = $_POST['others'];

    $sql = "  INSERT INTO 
    contacts
    (user_ID,contact_no, facebook, instagram, others) 
    VALUES (
        '" . $id . "',
        '" . $contact_no . "',
        '" . $facebook . "',
        '" . $instagram . "',
        '" . $others . "'
        )";

        if (mysqli_query($conn, $sql)) {
            header('Location:../seller/seller-account.php');
        } else {
            mysqli_error($conn);
            header('Location: ../add-contact.php?authenticate=false');
        }

        //.4 Closing Database Connection
        mysqli_close($conn);

?>