<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta title="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/add-post.css">

    <script src="https://kit.fontawesome.com/b1d36f5527.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php require_once '../components/navbar.php' ?>

    <?php
    require_once "../config.php";
    if (isset($_GET["product_id"])) {
        $sql = "SELECT * FROM products WHERE product_id = ?";

        if ($stmt = $conn->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("i", $param_id);

            // Set parameters
            $param_id = trim($_GET["product_id"]);

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                $result = $stmt->get_result();

                if ($result->num_rows == 1) {
                    /* Fetch result row as an associative array. Since the result set
                            contains only one row, we don't need to use while loop */
                    $row = $result->fetch_array(MYSQLI_ASSOC);

                    // FORM
                    // $title = $row['title'];
                    // $content = $row["content"];
                } else {
                    // URL doesn't contain valid id parameter. Redirect to error page
                    header("location: error.php");
                    exit();
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        // Close statement
        $stmt->close();

        // Close connection
        $conn->close();
    } else {
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
    ?>

    <div class="wrapper">
        <div class="wrapper-content">
            <p>EDIT PRODUCT</p>
            <hr>
            <form action="../backend/product-update.php" method="post">
                <p>CATEGORY</p>
                <input required type="text" name="category" id="blog_title" placeholder="<?php echo $row["category"]; ?>">
                <p>PRODUCT NAME</p>
                <input required type="text" name="product_name"" id="blog_title" placeholder="<?php echo $row["product_name"]; ?>">
                <p>PRODUCT PRICE</p>
                <input required type="text" name="product_price" id="blog_title" placeholder="<?php echo $row["product_price"]; ?>">
                <p>PRODUCT IMAGE</p>
                <input required type="text" name="product_img" id="blog_title" placeholder="<?php echo $row["product_img"]; ?>">
                <p>PRODUCT DESCRIPTION</p>
                <input required type="text" name="product_desc" id="blog_title" placeholder="<?php echo $row["product_desc"]; ?>">

                <input type="hidden" name="id" value="<?php echo $_GET["product_id"]; ?>" />
                <button type="submit" class="button" title="submit" id="submit">PUBLISH POST</button>
            </form>
        </div>
    </div>


    <?php require_once '../components/footer.php' ?>
</body>

</html>