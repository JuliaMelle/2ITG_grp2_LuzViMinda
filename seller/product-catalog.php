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
    <title>LuzViMinda | Product Catalog</title>

    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/product-catalog.css">
    <link rel="stylesheet" href="../styles/navbar.css">
  <link rel="stylesheet" href="../styles/footer.css">

    <style>
        h2 {
            font-size: 32px;
        }
    </style>
</head>

<body>
    <?php require_once '../components/navbar-seller.php' ?>
    <div class="container">
        <div class="mid_container">

        <?php
        $sql = "SELECT* FROM products";
        $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
        
                  if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {  
        ?>

            <div class="card"> <!-- CARD -->
                <div class="capsule">
                    <p class="capsule_caption">   <?php echo $row ['category'] ?> </p>
                </div>
                <img src="../img/temp.png" alt="Avatar" style="width:100%">
                <h4 class="head">
                    ITEM NAME
                </h4>
                <h5 class="read_more">
                    Seller
                </h5>
            </div>


            <?php }
           }?>

            <!-- MID CONTAINER END -->
        </div>
    </div>
    <?php require_once '../components/footer.php' ?>

</body>

</html>