<?php
session_start();

if (isset($_SESSION['isLogin'])) {
    if ($_SESSION['isLogin'] == false) {
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
    <title>LuzViMinda | Learn More</title>

    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/learn_more.css">

    <style>
        h2 {
            font-size: 32px;
        }
    </style>
</head>

<body>
    <?php 
    // require_once '../components/navbar-seller.php' 
    if (isset($_SESSION['loggedin'])) {
        require_once '../components/navbar-seller.php';
    }
        else{
        require_once '../components/navbar-general.php';
    
    }
    ?>
    <div class="container">
        <div class="mid_container">

            <div class="card"> <!-- CARD -->
                <div class="capsule">
                    <p class="capsule_caption"> BLOG</p>
                </div>
                <h4 class="head">
                    Example Post Title
                </h4>
                <h5 class="read_more">
                    Read More
                </h5>
            </div>

            <div class="card"> <!-- CARD -->
                <div class="capsule">
                    <p class="capsule_caption"> BLOG</p>
                </div>
                <h4 class="head">
                    Example Post Title
                </h4>
                <h5 class="read_more">
                    Read More
                </h5>
            </div>

            <div class="card"> <!-- CARD -->
                <div class="capsule">
                    <p class="capsule_caption"> BLOG</p>
                </div>
                <h4 class="head">
                    Example Post Title
                </h4>
                <h5 class="read_more">
                    Read More
                </h5>
            </div>

            <div class="card"> <!-- CARD -->
                <div class="capsule">
                    <p class="capsule_caption"> BLOG</p>
                </div>
                <h4 class="head">
                    Example Post Title
                </h4>
                <h5 class="read_more">
                    Read More
                </h5>
            </div>

            <div class="card"> <!-- CARD -->
                <div class="capsule">
                    <p class="capsule_caption"> BLOG</p>
                </div>
                <h4 class="head">
                    Example Post Title
                </h4>
                <h5 class="read_more">
                    Read More
                </h5>
            </div>




            <!-- MID CONTAINER END -->
        </div>
    </div>
    <?php require_once '../components/footer.php' ?>

</body>

</html>