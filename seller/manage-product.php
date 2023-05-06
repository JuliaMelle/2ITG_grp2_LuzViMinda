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

    <title>Document</title>
</head>

<body>
    <?php require_once '../components/navbar-seller.php' ?>
    <!-- product_id	user_id	category	product_name	product_price	product_img	product_desc -->
    <div class="blog-container">

    <button class="button" id="btn-add">ADD A PRODUCT</button>

        <table class="a">
            <thead>
                <tr>
                    <th class="id">PRODUCT ID</th>
                    <th class="title">PRODUCT NAME</th>
                    <th class="title">PRODUCT PRICE</th>
                    <th class="title">PRODUCT IMG</th>
                    <th class="title">PRODUCT DESCR</th>
                    <th class="delete">DELETE</th>
                    <th class="edit">EDIT</th>
                </tr>
            </thead>
            <tbody>

                <tr>
            <?php
                require_once '../config.php';
                $sql = "SELECT * FROM products WHERE user_id = 2"; // to change user_id to session id variable
                if ($result = $conn-> query($sql)) {
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_array()) {
                            echo '<tr>';
                            echo '<td class="blog"><span class="blog-id">' . $row['product_id'] . '</span></td>';
                            echo '<td><span class="blog-title">' . $row['product_name'] . '</span></td>';
                            echo '<td><span class="blog-title">' . $row['product_price'] . '</span></td>';
                            echo '<td><span class="blog-title">' . $row['product_img'] . '</span></td>';
                            echo '<td><span class="blog-title">' . $row['product_desc'] . '</span></td>';

                            echo '<td><a href="../backend/product-delete.php?product_id=' . $row['product_id'] . '"title="Delete Record" data-toggle="tooltip"><span class="blog-delete" onclick="return confirm('."'". "Are you sure?" ."'".');"><i class="fa-regular fa-trash-can"></i></span></a></td>';
                            echo '<td><a href="product-edit.php?product_id=' . $row['product_id'] . '" title="Edit Record" data-toggle="tooltip"><span class="blog-edit"><i class="fa-regular fa-pen-to-square"></i></span></a></td>';

                            
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