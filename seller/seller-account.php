<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/footer.css">


    <link rel="stylesheet" href="../styles/seller-account.css">
    <title>LuzViMinda | Account Page</title>
</head>

<body>
    <?php require_once '../components/navbar-seller.php' ?>

    <!-- ITO YUNG PAGE FOR VIEWERS ONLY -->


    <!-- // ACCOUNT DETAILS -->
    <div class="wrapper">
        <div class="header orange"></div>
        <div class="flex content">
            <?php
            require_once '../config.php';
            $id = $_SESSION['id'];
            $sql = "SELECT * FROM users WHERE user_id = $id";
            $sql_2 = "SELECT * FROM products WHERE user_id = $id";
            if ($result = $conn->query($sql)) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_array()) {

                        echo '<div >';
                        echo '<img class="profile-img" src="../user_identification/' . $row['valid_id_img'] . '"/>';
                        echo '</div>';

                        echo '<div class="details">';
                        echo '<h3>Seller Name</h3>';
                        echo '<div class="box">' . $row['business_name'] . '</div>';
                        echo '<h3>Email</h3>';
                        echo '<div class="box">' . $row['email'] . '</div>';
                        echo '<h3>Link</h3>';
                        echo '<div class="box">' . $row['website'] . '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    $result->free();
                }
            }
            ?>
             <div class="wrapper-prod">
                        <div class="header blue"></div>
                        <h1 class="label">Products</h1>
                        <div class="card-wrapper">
                        <div class="flex-2">
            <?php
            if ($result = $conn->query($sql_2)) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_array()) {


                        

                        echo            '<div class="card">';
                        echo               '<div class="details-prod">';
                        echo                   '<div class="category">' . $row['category'] . '</div>';
                        echo                   '<img class="product-img">';
                        echo              '</div>';
                        echo              '<h3>' . $row['product_price'] . '</h3>';
                        echo               '<h3>' . $row['product_name'] . '</h3>';
                        echo               '<h3>'. $row['product_desc'] .'</h3>';
                        echo            '</div>';

                        
                        
                    }
                    $result->free();
                }
            }
            $conn->close();
            ?>
              </div>
            </div>
        </div>

        </div>

    </div>

    <?php require_once '../components/footer.php' ?>
</body>

</html>