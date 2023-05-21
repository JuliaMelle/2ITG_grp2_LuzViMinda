<?php
session_start();

if (isset($_SESSION['loggedin'])) {
    if ($_SESSION['loggedin'] == false) {
        header('Location: ../login.php?security=false');
    }
} else {
    header('Location: ../login.php?security=false');
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
    <link rel="stylesheet" href="../styles/manage-product.css">
    <script src="https://kit.fontawesome.com/b1d36f5527.js" crossorigin="anonymous"></script>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">

    <title>LuzViMinda | Manage Product</title>
</head>

<body>
    <?php require_once '../components/navbar-seller.php' ?>
    <!-- product_id	user_id	category	product_name	product_price	product_img	product_desc -->
    <div class="blog-container">

        <a href="add-product.php">
            <button class="button" id="btn-add">ADD A PRODUCT</button>
        </a>

        <table class="a">
            <thead>
                <tr>
                    <th class="id">PRODUCT ID</th>
                    <th class="title">PRODUCT NAME</th>
                    <th class="product_price">PRODUCT PRICE</th>
                    <th class="product_img">PRODUCT IMG</th>
                    <th class="product_desc">PRODUCT DESCR</th>
                    <th class="delete">DELETE</th>
                    <th class="edit">EDIT</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <?php
                    require_once '../config.php';
                    $id = $_SESSION['id'];
                    $sql = "SELECT * FROM products WHERE user_id = $id";
                    if ($result = $conn->query($sql)) {
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_array()) {
                    ?>

                <tr>
                    <td class="blog"><span class="blog-id"> <?php echo  $row['product_id'] ?> </span></td>
                    <td><span class="blog-title"><?php echo $row['product_name'] ?> </span></td>
                    <td class="product_price_data"><span> <?php echo $row['product_price'] ?></span></td>
                    <td class="product_img_data"><span> <?php echo $row['product_img'] ?></span></td>
                    <td class="product_desc_data"><span> <?php echo $row['product_desc'] ?> </span></td>

        <?php echo '<td > <a href="../backend/product-delete.php?product_id=' . $row['product_id'] . '"title="Delete Record" data-toggle="tooltip"><span class="blog-delete" onclick="return confirm(' . "'" . "Are you sure you want to delete?" . "'" . ');"><i class="fa-regular fa-trash-can"></i></span></a></td>';
                                echo '<td ><a href="product-edit.php?product_id=' . $row['product_id'] . '" title="Edit Record" data-toggle="tooltip"><span class="blog-edit"><i class="fa-regular fa-pen-to-square"></i></span></a></td>';
                            }
                            $result->free();
                        }
                    }
                    $conn->close();
        ?>

            </tbody>
        </table>



    </div>

    <?php require_once '../components/footer.php' ?>
</body>

</html>