<?php

require_once '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate Title Length
    
    // Validate Post Content Length

    // Check input errors before inserting in database
    if (empty($blog_title) && empty($blog_content)) {
        // Prepare an insert statement
        $sql = "INSERT INTO blog_post (user_id, title, content) VALUES (?, ?, ?)";
    
        if ($stmt = $conn->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("iss", $param_id, $param_title, $param_content);
    
            // Set parameters
            $param_id = $_POST['user_id'];
            $param_title = $_POST['blog_title'];
            $param_content = $_POST['blog_content'];
    
            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Records created successfully. Redirect to landing page
                header("location: ../general/blog-cms.php");
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
}

?>