<?php
    session_start();
    if (isset($_SESSION['loggedin'])) {
        require_once '../components/navbar-seller.php';
    } else {
        require_once '../components/navbar-general.php';
    }

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzViMinda | Add Blog Post</title>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/add-post.css">
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">

    <script src="https://kit.fontawesome.com/b1d36f5527.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <div class="wrapper-content">
            <div class="box-header">
                <p>ADD A BLOG</p>
                <a class="close-btn" href="blog-cms.php"> <i class="fa-solid fa-xmark" style="font-size: 25px; color: #000000;"></i> </a>

            </div>

            <hr>
            <form action="../backend/blog-add.php" method="post">
                <p>TITLE</p>
                <input type="text" name="blog_title" id="blog_title" placeholder='Title here' required>
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>">
                <span class="blog-category">BLOG</span>
                <p>BLOG CONTENT</p>
                <textarea required name="blog_content" placeholder='Enter comment...' maxlength='10000' minlength='100'></textarea>
                <button type="submit" class="button" name="submit" id="submit">PUBLISH POST</button>
            </form>
        </div>
    </div>


    <?php require_once '../components/footer.php' ?>
</body>

</html>