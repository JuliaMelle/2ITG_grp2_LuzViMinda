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
    <title>LuzViMinda | Learn More</title>

    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/learn_more.css">

    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
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
}
    else{
    require_once '../components/navbar-general.php';

}

 ?>    <div class="container">
        <div class="mid_container">

        <!-- SEARCH PAGE -->
        <?php
        $sql = "SELECT* FROM blog_post";
        $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {  
        ?> <a href="learn_more_specific.php?id=<?php echo $row['post_id'] ?>" class="product-text sub-link">
            <div class="card"> <!-- CARD -->
                <div class="capsule">
                    <p class="capsule_caption"> BLOG</p>
                </div>
                <h4 class="head">
                <?php echo   $row['title'] ?>
                </h4>
                <h5 class="read_more">
                <?php 
                // echo  $row['content'];
                
                $sentence=$row['content'];
                if(strlen($sentence) >= 200) {
                    echo substr($sentence,0,199)."...";
                } else {
                    echo $sentence;
                }
                ?>

               
             
                </h5>
            </div>

            </a>
         
           <?php }
           }?>




            <!-- MID CONTAINER END -->
        </div>
    </div>
    <?php require_once '../components/footer.php' ?>

</body>

</html>