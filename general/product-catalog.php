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

        <div class="input-container2">
            <form class="form-flex" action="product-catalog.php" method="get">

                <select class="dropdown-category" name="category-region" id="category-region">
                    <option value="ncr">NCR</option>
                    <option value="car">CAR</option>
                    <option value="armm">ARMM</option>
                    <option value="1">Region 1</option>
                    <option value="4a">Region 4-A</option>
                    <option value="4b">Region 4-B</option>
                    <option value="5">Region 5</option>
                    <option value="6">Region 6</option>
                    <option value="7">Region 7</option>
                    <option value="10">Region 10</option>
                </select>

                <button class="dropdown-search" type="submit">DROPDOWN</button>
            </form>
        </div>

        
        <?php
        $sSearch = "";
        if (isset($_REQUEST['query']) or isset($_REQUEST['category-region'])) {
            if(!empty(isset($_REQUEST['query']))){
                $sSearch = $_REQUEST['query'];
            }
            $region = $_REQUEST['category-region'];
        }
        $sql = "SELECT * FROM products";
        if ($sSearch <> "") {
            $sql = "SELECT* FROM products WHERE `product_name` LIKE  '%" . $sSearch . "%' or `category` LIKE  '%" . $sSearch . "%'or `seller_name`
            LIKE  '%" . $sSearch . "%'or `product_price` LIKE  '" . $sSearch . "%'or `product_desc` LIKE  '" . $sSearch . "%'";

            echo '<div class="mid_text">';
            echo '<h1 class="center">' . " " . $sSearch . '</h1>';
            echo ' </div>';

            
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            echo '<div class="mid_container">';
            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<a href="view_product_specific?id=' . $row['product_id'] . '" class="product-text sub-link">';
                    echo '<div class="card">';
                    echo    '<div class="capsule">';
                    echo        '<p class="capsule_caption">' . $row['category'] . '</p>';
                    echo    '</div>';
                    echo   '<img src="../img/temp.png" alt="Avatar" style="width:100%">';
                    echo   '<h4 class="head">' . $row['product_name'] . '</h4>';
                    echo '<h5 class="read_more">' . $row['seller_name'] . '</h5>';
                    echo '</div>';
                }
            echo '</div>';
            } else {
                
                echo '<div class="ex1">';
                echo '<div class="card2">';
                echo '<img src="../img/noitemsfound.png" style=" height: 300px;">';
                echo '</div>';
                echo '</div>';
            }
            
        }
        else if(!empty($region)){
            $sql2 = "SELECT * FROM products WHERE category = '$region'";

                if ($result = $conn->query($sql2)) {
                    
                    if ($result->num_rows > 0) {
                        echo '<div class="mid_container">';
                        while ($row = $result->fetch_array()) {
                            // $sql_req = "SELECT * FROM products WHERE category = $region";
                            echo '<a href="view_product_specific?id=' . $row['product_id'] . '" class="product-text sub-link">';
                            echo '<div class="card">';
                            echo    '<div class="capsule">';
                            echo        '<p class="capsule_caption">' . $row['category'] . '</p>';
                            echo    '</div>';
                            echo   '<img src="../img/temp.png" alt="Avatar" style="width:100%">';
                            echo   '<h4 class="head">' . $row['product_name'] . '</h4>';
                            echo '<h5 class="read_more">' . $row['seller_name'] . '</h5>';
                            echo '</div>';
                        }
                        echo '</div>';
                    }
                    
                else {
                        echo '<div class="ex1">';
                        echo '<div class="card2">';
                        echo '<img src="../img/noitemsfound.png" style=" height: 300px;">';
                        echo '</div>';
                        echo '</div>';
                    }
                }

        }
        else {
            echo '<div class="mid_container">';
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<a href="view_product_specific?id=' . $row['product_id'] . '" class="product-text sub-link">';
                    echo '<div class="card">';
                    echo    '<div class="capsule">';
                    echo        '<p class="capsule_caption">' . $row['category'] . '</p>';
                    echo    '</div>';
                    echo   '<img src="../img/temp.png" alt="Avatar" style="width:100%">';
                    echo   '<h4 class="head">' . $row['product_name'] . '</h4>';
                    echo '<h5 class="read_more">' . $row['seller_name'] . '</h5>';
                    echo '</div>';
                }
            }
        }
        ?>
        <!-- MID CONTAINER END -->
    </div>


    <?php require_once '../components/footer.php' ?>

</body>

</html>