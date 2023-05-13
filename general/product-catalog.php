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
    <?php
    if (isset($_SESSION['loggedin'])) {
        require_once '../components/navbar-seller.php';
    } else {
        require_once '../components/navbar-general.php';
    }
    ?>
    <div class="container">

        <div class="input-container">
            <form action="product-catalog.php" method="get">
                <input type="text" class="input" placeholder="search..." aria-label="Search" name="query">
            </form>
            <span class="icon">
                <svg width="19px" height="19px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path opacity="1" d="M14 5H20" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path opacity="1" d="M14 8H17" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M21 11.5C21 16.75 16.75 21 11.5 21C6.25 21 2 16.75 2 11.5C2 6.25 6.25 2 11.5 2" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path opacity="1" d="M22 22L20 20" stroke="#000" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
            </span>
        </div>
        <?php


        $sSearch = "";
        if (isset($_REQUEST['query'])) {
            $sSearch = $_REQUEST['query'];
        }
        $sql = "SELECT* FROM products";
        
       
        if ($sSearch <> "") { ?>
            <!-- SEARCH PAGE -->
            <?php
            $sql = "SELECT* FROM products WHERE `product_name` LIKE  '%" . $sSearch . "%' or `category` LIKE  '%" . $sSearch . "%'or `seller_name` LIKE  '%" . $sSearch . "%'or `product_price` LIKE  '" . $sSearch . "%'or `product_desc` LIKE  '" . $sSearch . "%'";
            ?>
            <!-- CARD -->
            <div class="mid_text">
                <h1 class="center"><?php echo " " . $sSearch; ?></h1>
        </div>

        <div class="mid_container">
                <?php
                $upload_dir = '../upload/';
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>

                        <a href="view_product_specific?id=<?php echo $row['product_id'] ?>" class="product-text sub-link">

                            <div class="card"> <!-- CARD -->
                                <div class="capsule">
                                    <p class="capsule_caption"> <?php echo $row['category'] ?> </p>
                                </div>
                                <img src="../img/temp.png" alt="Avatar" style="width:100%">
                                <h4 class="head">
                                    <?php echo $row['product_name'] ?>
                                </h4>
                                <h5 class="read_more">
                                    <?php echo $row['seller_name'] ?>
                                </h5>
                            </div>
                            <!-- </div> -->
                            
                            <!-- CARD -->
                    <?php
                    } 
                } else { ?>
                </div>
                    <div class="ex1">
                        <div class="card2">
                            <!-- <h1 class="">No items found.</h1> -->
                            <img src="../img/noitemsfound.png" style=" height: 300px;">
                        </div>
                    </div>
                <?php }
            } else { ?>

                    <div class="mid_container">

                        <?php
                       
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);

                        if ($resultCheck > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>

                                <a href="view_product_specific?id=<?php echo $row['product_id'] ?>" class="product-text sub-link">

                                    <div class="card"> <!-- CARD -->
                                        <div class="capsule">
                                            <p class="capsule_caption"> <?php echo $row['category'] ?> </p>
                                        </div>
                                        <img src="../img/temp.png" alt="Avatar" style="width:100%">
                                        <h4 class="head">
                                            <?php echo $row['product_name'] ?>
                                        </h4>
                                        <h5 class="read_more">
                                            <?php echo $row['seller_name'] ?>
                                        </h5>
                            </div>


                            <?php }
                        } 
            }
                 ?>
<!-- MID CONTAINER END -->
</div>
            </div>
                 
                      
            <?php require_once '../components/footer.php' ?>

</body>

</html>