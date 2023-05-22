<?php
// Include config file
require_once "../config.php";
$upload_dir = '../product_image/';

// Define variables and initialize with empty values
$category = $product_name = $product_price = $product_img = $product_desc = "";
$category_err = $name_err = $price_err = $img_err = $desc_err ="";

if (isset($_POST["id"]) && !empty($_POST["id"])) {
    // Get hidden input value
    $id = $_POST["id"];

    $category = $_POST["category"];
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    //$product_img = $_POST["product_img"];
    $product_desc = $_POST["product_desc"];
    
    // Check input errors before inserting in database
    if (empty($name_err) && empty($price_err) && empty($category_err) && empty($desc_err)) {
        // Prepare an update statement
        $sql = "UPDATE products SET category = ?, product_name = ?, product_price = ?, product_desc = ? WHERE product_id = ?";

        if ($stmt = $conn->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssisi", $param_category, $param_name, $param_price, $param_desc, $param_id);

            // Set parameters
            $param_category = $category;
            $param_name = $product_name;
            $param_price = $product_price;
            //$param_img = $product_img;
            $param_desc = $product_desc;
            $param_id = $id;

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Records updated successfully. Redirect to landing page
                header("location: ../seller/manage-product.php");
                exit();
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        $stmt->close();
    }

    // Close connection
    $conn->close();
} else {
    // Check existence of id parameter before processing further
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        // Get URL parameter
        $id =  trim($_GET["id"]);

        // Prepare a select statement
        $sql = "SELECT * FROM blog_post WHERE post_id = ?";
        if ($stmt = $conn->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("i", $param_id);

            // Set parameters
            $param_id = $id;

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                $result = $stmt->get_result();

                if ($result->num_rows == 1) {
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = $result->fetch_array(MYSQLI_ASSOC);

                    // Retrieve individual field value
                    $category = $row["category"];
                    $product_name = $row["product_name"];
                    $product_price = $row["product_price"];
                    //$product_img = $row["product_img"];
                    $product_desc = $row["product_desc"];
                } else {
                    // URL doesn't contain valid id. Redirect to error page
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
}
