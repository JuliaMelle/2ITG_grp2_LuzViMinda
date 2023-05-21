<?php
require_once '../config.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzViMinda | View Blog Post</title>

    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/learn_more_specific.css">

    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">

    <script src="https://kit.fontawesome.com/96362859e2.js" crossorigin="anonymous"></script>
    <style>
        h2 {
            font-size: 32px;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_SESSION['loggedin'])) {
        require_once '../components/navbar-seller.php';
    } else {
        require_once '../components/navbar-general.php';
    }

    ?> <div class="container">
        <div class="mid_container">

            <!-- SEARCH PAGE -->
            <?php
            $varUserid = $_GET['id'];
            $to_id = intval($varUserid);

            $sql = "SELECT * FROM `blog_post` WHERE `post_id`=" . $varUserid;
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="card"> <!-- CARD -->
                        <div class="up">
                            <div class="capsule">
                                <p class="capsule_caption"> BLOG</p>
                            </div>
                        </div>

                        <h4 class="head">
                            <?php echo   $row['title'] ?>
                        </h4>
                        <div class="cspecific">
                        <?php echo   $row['content'] ?>
                        </div>
                        <div class="bright">
                        <a href="learn_more.php">
                        <button class="button">BACK</button>
                        </a>
                        </div>
                    </div>

            <?php
                }
            } ?>




            <!-- MID CONTAINER END -->
        </div>
    </div>
    <?php require_once '../components/footer.php' ?>

</body>

</html>