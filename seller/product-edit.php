<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta title="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzViminda | Edit Product</title>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/add-post.css">

    <script src="https://kit.fontawesome.com/b1d36f5527.js" crossorigin="anonymous"></script>
</head>
<style>  
.upload-btn::-webkit-file-upload-button {
  color: var(--white);
  background: var(--dark-blue);
  padding: 5px 5px;
  border: none;
  border-radius: 10px !important;
  cursor: pointer;
}

.dropdown-category {
  width: calc(100%);
  height: 55px;
  background-color: var(--gray);
  border: 3px solid var(--black);
  padding: 15px;
  align-self: center;
}
</style>
<body>


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
            <div class="header-title">
            <p class="header-edit">EDIT PRODUCT</p>
            <a class="close-btn" href="manage-product.php"> <i class="fa-solid fa-xmark" style="font-size: 25px; color: #000000;"></i> </a>
            </div>

            <hr>
            <form action="../backend/product-update.php" method="post">
                <p>CATEGORY</p>
                <!-- <input required type="text" name="category" id="blog_title" placeholder="<?php echo $row["category"]; ?>"> -->
                <select class="dropdown-category" name="category" id="blog_title" <?php echo $row["category"]; ?>>
                <option value="NCR">NCR</option>
                <option value="CAR">CAR</option>
                <option value="ARMM">ARMM</option>
                <option value="REGION 1">Region 1</option>
                <option value="REGION 4A">Region 4-A</option>
                <option value="REGION 4B">Region 4-B</option>
                <option value="REGION 5">Region 5</option>
                <option value="REGION 6">Region 6</option>
                <option value="REGION 7">Region 7</option>
                <option value="REGION 10">Region 10</option>
                </select>
                
                <p>PRODUCT NAME</p>
                <input required type="text" name="product_name"" id="blog_title" value="<?php echo $row["product_name"]; ?>">
                <p>PRODUCT PRICE</p>
                <input required type="text" name="product_price" id="blog_title" value="<?php echo $row["product_price"]; ?>">
                <p>PRODUCT DESCRIPTION</p>
                <input required type="text" name="product_desc" id="blog_title" value="<?php echo $row["product_desc"]; ?>">

               
                <p>CHANGE PRODUCT IMAGE</p>
                <a href="product_img.php?id=<?php echo $row['product_id'] ?>" style="text-decoration: none; width: 100%;" class="button login">CHANGE PRODUCT IMAGE</a>


               
                <input type="hidden" name="id" value="<?php echo $_GET["product_id"]; ?>" />
                <button type="submit" class="button" title="submit" id="submit">SAVE CHANGES</button>
            </form>
        </div>
    </div>


    <?php require_once '../components/footer.php' ?>
</body>

</html>