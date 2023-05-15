<?php
session_start();
require_once '../config.php';
$id = $_SESSION['id'];

if (isset($_POST['id'])) {
    $contact_no = $_POST['contact_no'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $others = $_POST['others'];
    
    $sql = "INSERT INTO 
    contacts
    (user_id, contact_no, facebook, instagram, others) 
    VALUES (
        '" . $id . "',
        '" . $contact_no . "',
        '" . $facebook . "',
        '" . $instagram . "',
        '" . $others . "'
        )";
    if ($id==){
        $sql = "  UPDATE contacts
    SET
    'contact_no' = '$contact_no',
    'facebook' = '$facebook',
    'instagram' = '$instagram',
    'others' = '$others'
    WHERE user_ID = $id;
        ";
    }
    }    

        if (mysqli_query($conn, $sql)) {
            header('Location:../seller/seller-account.php');
        } else {
            mysqli_error($conn);
            header('Location: ../add-contact.php?authenticate=false');
        }
    
        //.4 Closing Database Connection
        mysqli_close($conn);

?>