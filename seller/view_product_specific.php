<?php
require_once '../config.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LuzViMinda | View Product</title>

    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/view_product_specific.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">

</head>

<body>
    <?php
    if (isset($_SESSION['loggedin'])) {
        require_once '../components/navbar-seller.php';
    }
        else{
        require_once '../components/navbar-general.php';

    }
    ?> 

    <?php require_once '../components/footer.php'?>

</body>