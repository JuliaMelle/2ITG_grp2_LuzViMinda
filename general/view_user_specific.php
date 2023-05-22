<?php
session_start();
    if (isset($_SESSION['loggedin'])) {
        require_once '../components/navbar-seller.php';
    } else {
        require_once '../components/navbar-general.php';
    }
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

    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">


    <link rel="stylesheet" href="../styles/seller-account.css">
    <title>LuzViMinda | Account Page</title>
</head>

<body>

    <!-- ITO YUNG PAGE FOR VIEWERS ONLY -->


    <!-- // ACCOUNT DETAILS -->
    <?php
    if (isset($_GET['success'])) { //check if authenticate key exists in URL
        if ($_GET['success'] == "true") { ?>

            <div class="alert success">
                <span class="closebtn">&times;</span>
                <strong style="color:white">CHANGED PASSWORD SUCCESSFULLY</strong>
            </div>
    <?php
        }
    }
    ?>
    <div class="wrapper">

        <div class="header orange"></div>
        <div class="flex content">
            <?php
            require_once '../config.php';
            $varUserid = $_GET['user_id'];
            $to_id = intval($varUserid);

            $sql = "SELECT * FROM users WHERE user_id =$varUserid";
            $sql_2 = "SELECT * FROM products WHERE user_id =$varUserid";
            $sql_3 = "SELECT * FROM contacts WHERE user_id = $varUserid";
            if ($result = $conn->query($sql)) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_array()) {

                        echo '<div >';
                        echo '<img class="profile-img" src="../user_identification/' . $row['profile_img'] . '"/>';
                        echo '</div>';

                        echo '<div class="details">';
                        echo '<h3>DISPLAY NAME</h3>';
                        echo '<div class="box">' . $row['business_name'] . '</div>';
                        echo '<h3>EMAIL</h3>';
                        echo '<div class="box">' . $row['email'] . '</div>';
                        if ($result = $conn->query($sql_3)) {
                            if ($result->num_rows > 0) {
                                if (!empty($row['website'])) {
                                    echo '<h3>WEBSITE</h3>';
                                    echo '<a href="https://' . $row['website'] . '">';
                                    echo '<div class="box">' . $row['website'] . '</div>';
                                    echo '</a>';
                                }
                                while ($row = $result->fetch_array()) {

                                    if (!empty($row['contact_no'])) {
                                        echo '<h3>CONTACT NO.</h3>';
                                        echo '<div class="box">' . $row['contact_no'] . '</div>';
                                    }
                                    if (!empty($row['facebook'])) {
                                        echo '<h3>FACEBOOK</h3>';
                                        echo '<a target="_blank" href="https://' . $row['facebook'] . '">';
                                        echo '<div class="box">' . $row['facebook'] . '</div>';
                                        echo '</a>';
                                    }
                                    if (!empty($row['instagram'])) {
                                        echo '<h3>INSTAGRAM</h3>';
                                        echo '<a target="_blank" href="https://' . $row['instagram'] . '">';
                                        echo '<div class="box">' . $row['instagram'] . '</div>';
                                        echo '</a>';
                                    }
                                    if (!empty($row['others'])) {
                                        echo '<h3>OTHERS</h3>';
                                        echo '<a target="_blank" href="https://' . $row['others'] . '">';
                                        echo '<div class="box">' . $row['others'] . '</div>';
                                        echo '</a>';
                                    }
                                }
                            }
                        }
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
                                    if (!empty($row['product_img']) && ((str_contains($row['product_img'], '.jpg') == true) OR (str_contains($row['product_img'], '.png') == true)) && (file_exists('../product_image/' . $row['product_img']) == true)) {
                                        echo            '<div class="card">';
                                        echo            '<a href="../general/view_product_specific?id=' . $row['product_id'] . '" class="product-text sub-link">';
                                        echo               '<div class="details-prod">';
                                        echo                   '<div class="category">' . $row['category'] . '</div>';
                                        echo                   '<img class="product-img" src="../product_image/' . $row['product_img'] . '">';
                                        echo               '</div>';
                                        echo               '<h3> ₱ ' . $row['product_price'] . '</h3>';
                                        echo               '<h3>' . $row['product_name'] . '</h3>';
                                        echo               '<h3>' . $row['product_desc'] . '</h3>';
                                        echo            '</a>';
                                        echo            '</div>';
                                    }

                                    if (((str_contains($row['product_img'], '.jpg') == false) OR (str_contains($row['product_img'], '.png') == false)) && (file_exists('../product_image/' . $row['product_img']) == false)) {
                                        echo            '<div class="card">';
                                        echo            '<a href="../general/view_product_specific?id=' . $row['product_id'] . '" class="product-text sub-link">';
                                        echo               '<div class="details-prod">';
                                        echo                   '<div class="category">' . $row['category'] . '</div>';
                                        echo                   '<img class="product-img">';
                                        echo              '</div>';
                                        echo               '<h3> ₱ ' . $row['product_price'] . '</h3>';
                                        echo               '<h3>' . $row['product_name'] . '</h3>';
                                        echo               '<h3>' . $row['product_desc'] . '</h3>';
                                        echo            '</a>';
                                        echo            '</div>';
                                    }
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
    <script>
        var close = document.getElementsByClassName("closebtn");
        var i;

        for (i = 0; i < close.length; i++) {
            close[i].onclick = function() {
                var div = this.parentElement;
                div.style.opacity = "0";
                setTimeout(function() {
                    div.style.display = "none";
                }, 600);
            }
        }
    </script>
</body>

</html>