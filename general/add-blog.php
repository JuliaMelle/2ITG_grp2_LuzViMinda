
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/add-post.css">

    <script src="https://kit.fontawesome.com/b1d36f5527.js" crossorigin="anonymous"></script>
</head>
<body>

<?php
session_start();
if (isset($_SESSION['loggedin'])) {
    require_once '../components/navbar-seller.php';
}
    else{
    require_once '../components/navbar-general.php';

}

 ?>

<div class="wrapper">
        <div class="wrapper-content">
            <p>ADD A BLOG <?php echo $_SESSION['loggedin'];?></p>
            <hr>
            <form action="../backend/blog-add.php" method="post">
                <p>TITLE</p>
                <input type="text" name="blog_title" id="blog_title" placeholder='Title here' required>
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