<?php
// Process delete operation after confirmation

    // Include config file
    require_once "../config.php";

    // Prepare a delete statement
    $sql = "DELETE FROM products WHERE product_id = ?";

    if ($stmt = $conn->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("i", $param_id);

        // Set parameters
        
        $param_id = trim($_GET["product_id"]);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Records deleted successfully. Redirect to landing page
            
            header("location: ../seller/manage-product.php");

            exit();
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    $stmt->close();

    // Close connection
    $conn->close();

?>
