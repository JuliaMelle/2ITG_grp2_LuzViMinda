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

    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/view_product_specific.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/footer.css">
    
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">

    <script src="https://kit.fontawesome.com/96362859e2.js" crossorigin="anonymous"></script>
    <style>
        h2 {
            font-size: 32px;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_SESSION['loggedin'])) {
        require_once '../components/navbar-seller.php';
    } else {
        require_once '../components/navbar-general.php';
    }
    ?>

    <div class="container">
        <div class="mid_container">

            <!-- SEARCH PAGE -->
            <?php
            $varUserid = $_GET['id'];
            $to_id = intval($varUserid);

            $sql = "SELECT * FROM `products` WHERE `product_id`=" . $varUserid;
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="card"> <!-- CARD -->
                        <div class="up">

                            <div class="close-btn"> <a href="product-catalog.php">
                                    <i class="fa-solid fa-xmark" style="color: #000000;"></i> </a></div>
                        </div>

                        <div class="pposition">
                            <!-- <img class="pimage" src=<?php echo   $row['product_name'] ?>> -->


                            <img class="pimg" <?php
                                                if (!empty($row['product_img']) && ((str_contains($row['product_img'], '.jpg') == true) OR (str_contains($row['product_img'], '.png') == true)) && (file_exists('../product_image/' . $row['product_img']) == true)) {
                                                    echo   '<img src="../product_image/' . $row['product_img'] . '"alt="Avatar">';
                                                }
                                                if (((str_contains($row['product_img'], '.jpg') == false) OR (str_contains($row['product_img'], '.png') == false)) && (file_exists('../product_image/' . $row['product_img']) == false)) {
                                                    echo   '<img src="../img/temp.png" alt="Avatar">';
                                                }
                                                ?> </div>
                            
                            <a href="view_user_specific.php?user_id=<?php echo $row['user_id'] ?>" class="product-text sub-link"> <p class="seller_name"><?php echo   $row['seller_name'] ?></p>
                            </a>

                            <h1 class="head">
                                <?php echo   $row['product_name'] ?>
                            </h1>

                            <?php echo   $row['product_desc'] ?>

                            <h1 class="head1">
                                ₱ <?php echo   $row['product_price'] ?>
                            </h1>

                            <div class="capsule">
                                <p class="capsule_caption"> <?php echo $row['category'] ?> </p>
                            </div>
                        </div>

                <?php
                }
            } ?>

                <!-- MID CONTAINER END -->
                    </div>
        </div>

        <?php require_once '../components/footer.php' ?>

</body>