<?php
session_start();

if (isset($_SESSION['loggedin'])) {
    require_once '../components/navbar-seller.php';
}
    else{
    require_once '../components/navbar-general.php';

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
    
</head>
<body>
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
</body>

</html>