<?php
// require_once '../templates/navbar_seller.php'
session_start();

// if (isset($_SESSION['isLogin'])) {
//     if ($_SESSION['isLogin'] == false) {
//         header('Location: ../login.php?security=false');
//     }
// } else {
//     header('Location: ../login.php?security=false');
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MAIN CSS Sheet-->
    <link rel="stylesheet" href="../styles/main.css">

    <!-- Google Font: Poppins-->
    <!-- Weights: 400 REGULAR, 600 SEMIBOLD, 700 BOLD -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- FAVICON -->
    <!-- <link rel="icon" href="../img/aGROWculture-Favicon.png" type="image/gif" sizes="16x16"> -->

    <title>LuzViMinda: My Profile</title>
</head>
<body>

<?php require_once '../components/navbar-seller.php' ?>
    <div style="height:5rem;"></div>

    <main class="full-container">
        <h1 class="sub-link center" style="font-size:48px; font-weight:900;">My Account</h1>
        <!-- <hr> -->

         <!-- MAIN CONTENT -->
        <main class="half-container">
            <form action="../db/update.php" method="post" enctype="multipart/form-data">
                <fieldset>

                <h1 class="sub-link center" style="font-size:48px; font-weight:900;">MY ACCOUNT</h1>
                    <div class="wrapper">
                    <button class="btn-circle btn-center">
                         <a href="change-profile.php" style="color: white; text-decoration:none">CHANGE PROFILE
                        </a>
                    </div>
            
                    <input type="hidden" name="id" value="<?php
                                                            $currentID = $_SESSION["user_ID"];
                                                            echo $currentID; ?>">
                    
                    <label for="username">Userame</label>
                    <div class="wrapper"><input type="text" id="sFirstName" name="sFirstName" value="<?php echo $_SESSION["sFirstName"] ?>"></div>
                    
                    <label for="password">Change password:</label>
                    <div class="wrapper">
                    <button class="btn-circle btn-center">
                         <a href="change-password.php" style="color: white; text-decoration:none">CHANGE PASSWORD
                        </a>
                    </div>
                    
                    <label for="emailAddress">Email:</label>
                    <div class="wrapper"><input type="email" id="email" name="email" value="<?php echo $_SESSION["email"] ?>" style="width: 514px;"></div>

                    <label for="fullName">Last Name:</label>
                    <div class="wrapper"><input type="text" id="sLastName" name="sLastName" value="<?php echo $_SESSION["sLastName"] ?>"></div>


                    <label for="businessName">Company/Business Name:</label>
                    <div class="wrapper"><input type="text" id="business_name" name="business_name" value="<?php echo $_SESSION["business_name"] ?>"></div>

                    <label for="phone_number">Phone Number:</label>
                    <div class="wrapper"><input type="text" id="phone_number" name="phone_number" value="<?php echo $_SESSION["phone_number"] ?>"></div>

                    <label for="address">Address:</label>
                    <div class="wrapper"><input type="text" id="address" name="address" value="<?php echo $_SESSION["address"] ?>"></div>

                    <div class="flex row">
                        <button type="submit" class="btn-circle btn-center" name="update" onClick="window.location.reload();">Save Profile</button>
                         <button class="btn-circle btn-center">
                         <a href="../logout.php" style="color: white; text-decoration:none">Logout
                        </a>
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </main>

    <footer>

    </footer>

</body>

</html>