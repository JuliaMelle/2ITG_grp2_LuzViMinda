<?php
require_once 'config.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LuzViMinda | Home</title>

    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/home.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">

</head>

<body>
    <?php
    if (isset($_SESSION['loggedin'])) {
        require_once 'components/navbar-seller.php';
    }
        else{
        require_once 'components/navbar-general.php';

    }
    ?> 

    <div>
    <h1 class="welcome">WELCOME TO LUZVIMINDA!</h1>

    <h2 class="tagline">Various Filipino Merchandise from Various Regions in the Philippines</h2>

    <h3 class="content">A website that embodies the idea of supporting locals. This highlights the products made by the local Filipino artisans, 
    being an instrument to promote and preserve the Filipino culture. LuzViMinda features locally made products available from different regions present in the Philippines. 
    A market place that offers high-quality products made with the greatest love and care of each Filipino maker. At LuzViMinda, our goal is to let this platform be a space for showcasing the creations of each Filipino. 
    Flourishing the local Filipino industry. Through this website, we hope to be able to contribute how supporting local products can have a greater impact in promoting cultural growth in our country.</h3>
    </div>

    <div>
    <h1 class="welcome">READ OUR BLOG POSTS</h1>

    <h2 class="tagline">We Love What is Local! Filipino-made goods for you to look into.</h2>

    <h3 class="content">Every Filipino owns at least one local product that came from a place whom he or she visited in the past. Or, can be a "pasalubong" from a friend, a family, or a relative. 
    May it be an item to display or an item that can be used at home. If you are planning to look for more Filipino products you may check the blog posts below.</h3>
    </div>

    <div class="container">
        <div class="mid_container">

        <!-- SEARCH PAGE -->
        <?php
        $sql = "SELECT* FROM blog_post";
        $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {  
        ?>
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
                if(strlen($sentence) >= 30) {
                    echo substr($sentence,0,29)."...";
                } else {
                    echo $sentence;
                }
                
                ?>
                
                <br> read more...
                </h5>
            </div>
         
           <?php }
           }?>
            <!-- MID CONTAINER END -->
        </div>
    </div>

    <div class="mid_position_buttons">
        <a href="registration_form.php">
        <button class="button login">REGISTER HERE</button>
        </a>

        <a href="general/learn_more.php">
        <button class="button login">LEARN MORE</button>
        </a>

        <a href="general/product-catalog.php">
        <button class="button login">VIEW PRODUCTS</button>
        </a>
    </div>

    <?php require_once 'components/footer.php'?>

</body>
</html>

