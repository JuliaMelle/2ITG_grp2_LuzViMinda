<?php
session_start();
<<<<<<< Updated upstream

if (isset($_SESSION['loggedin'])) {
    require_once '../components/navbar-seller.php';
}
    else{
    require_once '../components/navbar-general.php';

}
=======
>>>>>>> Stashed changes
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuzViMinda | Learn More</title>

    <link rel="stylesheet" href="../styles/global.css">
<<<<<<< Updated upstream
    <link rel="stylesheet" href="../styles/product-catalog.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/footer.css">

    
    <link rel="stylesheet" href="../styles/seller-account.css">

    <title>Account Page</title>

    <style>
    input[type="file"]::file-selector-button {
        color: white;
    }
    input[type="text"] {
        flex:1;
        min-width:0;
    }
    .wrapper {
        display: flex;
    }
    label {
        margin-top:1rem;
    }
    </style>
    
=======
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/footer.css">


    <link rel="stylesheet" href="../styles/acc-page-seller2.css">
    <title>LuzViMinda | Account Page</title>
>>>>>>> Stashed changes
</head>

<body>
<<<<<<< Updated upstream
<?php require_once '../components/navbar-seller.php' ?>
    
    <div style="height:7rem;"></div>

    <main class="full-container">
        <h1 class="sub-link center" style="font-size:48px; font-weight:900;">MY ACCOUNT</h1>
        <hr>
        
        <input type="hidden" name="id" value="">
        
        <div class="half-container" style="width: 30rem; margin-bottom:5rem;">
        
            <form action="../db/update.php" method="post" enctype="multipart/form-data">
                <fieldset>

                    <div class="mid_position_buttons">
                    <button class="button">
                         <a href="change-profile.php" style="color: white;">CHANGE PROFILE</a>
                    </button>
                    </div>
                    
                    <div class="mid_position_buttons">
                    <button class="button">
                         <a href="" style="color: white;">SAVE CHANGES</a>
                    </button>
                    </div>

                 
                    <div class="mid_position_buttons">
                    <button class="button">
                         <a href="add-contact.php" style="color: white; text-decoration:none">ADD CONTACT
                        </a>
                    </div>
            
                    
                    <label for="username">Username:</label>
                    <div class="wrapper"><input type="username" id="username" name="username" value="" style="width: 514px;"></div>
                   
                    <div class="mid_position_buttons">
                    <button class="button">
                         <a href="change-password.php" style="color: white;">CHANGE PASSWORD</a>
                    </button>
                    </div>

                    <label for="emailAddress">Email Address:</label>
                    <div class="wrapper"><input type="email" id="email" name="email" value="" style="width: 400px;"></div>
                    
                    <label for="address">Address:</label>
                    <div class="wrapper"><input type="text" id="address" name="address" value=""></div>

                    <label for="website">Website:</label>
                    <div class="wrapper"><input type="text" id="website" name="website" value=""></div>


                    
                    
                    <?php require_once '../components/footer.php' ?>
                    </fieldset>
            </form>
        </div>
    </main>

    <footer>

    </footer>
=======
    <?php require_once '../components/navbar-seller.php' ?>

    <!-- ITO YUNG PAGE FOR VIEWERS ONLY -->


    <!-- // ACCOUNT DETAILS -->
    <div class="wrapper">
        
        <div class="header orange"></div>
        <div class="flex content">
            <?php
            require_once '../config.php';
            $id = $_SESSION['id'];
            $sql = "SELECT * FROM users WHERE user_id = $id";
            $sql_2 = "SELECT * FROM products WHERE user_id = $id";
            if ($result = $conn->query($sql)) {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_array()) {
?>
                       <div >
                        <img class="profile-img" src="../user_identification/' .<?php $row['valid_id_img'] ?>. '"/> 
                        
                        
                        <button class="button login" type="submit" value="Login">CHANGE PROFILE</button>
                        <button class="button login" type="submit" value="Login">SAVE CHANGES</button>
                        <button class="button login" type="submit" value="Login">ADD CONTACT </button>
                    
                       </div>

                   <div class="details">
                      <h3>USERNAME</h3>
                         <div class="box"><?php echo $row['business_name'] ?></div> 
                         <h3>CHANGE PASSWORD</h3>
                         <button class="button login" type="submit" value="Login" style="width:90%">CHANGE PASSWORD</button>



                         <h3>Email</h3> 
                         <div class="box"><?php echo $row['email'] ?></div> 
                         <h3>ADDRESS</h3>
                         <div class="box"><?php echo $row['address'] ?></div> 
                         <h3>WEBSITE</h3> 
                         <div class="box"> <?php echo $row['website'] ?></div> 
                         </div> 
                         </div> 
                         </div> 
           <?php         }
                    $result->free();
                }
            }
            ?>
        

    </div>

    <?php require_once '../components/footer.php' ?>
>>>>>>> Stashed changes
</body>

</html>