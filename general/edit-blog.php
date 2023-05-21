<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta title="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzViMinda | Edit Post</title>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/add-post.css">


    <script src="https://kit.fontawesome.com/b1d36f5527.js" crossorigin="anonymous"></script>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
</head>

<body>
    <?php
    require_once "../config.php";
    if (isset($_GET["post_id"])) {
        $sql = "SELECT * FROM blog_post WHERE post_id = ?";

        if ($stmt = $conn->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("i", $param_id);

            // Set parameters
            $param_id = trim($_GET["post_id"]);

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                $result = $stmt->get_result();

                if ($result->num_rows == 1) {
                    /* Fetch result row as an associative array. Since the result set
                            contains only one row, we don't need to use while loop */
                    $row = $result->fetch_array(MYSQLI_ASSOC);

                    // FORM
                    $title = $row['title'];
                    $content = $row["content"];
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
        <div class="box-header">
                <p>EDIT YOUR BLOG</p>
                <a class="close-btn" href="blog-cms.php"> <i class="fa-solid fa-xmark" style="font-size: 25px; color: #000000;"></i> </a>

            </div>
            <hr>
            <form action="../backend/blog-edit.php" method="post">
                <p>TITLE</p>
                <input required type="text" name="title" id="blog_title" value="<?php echo $row["title"]; ?>">
                <span class="blog-category">BLOG</span>
                <p>BLOG CONTENT</p>
                <textarea required name="content" maxlength='10000' minlength='100'><?php echo $row["content"]; ?></textarea>
                <input type="hidden" name="id" value="<?php echo $_GET["post_id"]; ?>" />
                <button type="submit" class="button" title="submit" id="submit">PUBLISH POST</button>
            </form>
        </div>
    </div>


    <?php require_once '../components/footer.php' ?>
</body>

</html>