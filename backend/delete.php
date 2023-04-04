<?php 
session_start();
require_once '../config.php';

$sql = "DELETE FROM `product`
WHERE `product_id`= '" . $_GET["product_id"] . "'
";

if(mysqli_query($conn, $sql)){
    echo '<script> alert("Successfully deleted.");</script>';
    header('Location: ../seller/seller-page.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>