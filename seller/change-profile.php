<?php
// require_once '../templates/navbar_seller.php'
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

    <!-- MAIN CSS Sheet-->
    <link rel="stylesheet" href="../css/main.css">

    <!-- Google Font: Poppins-->
    <!-- Weights: 400 REGULAR, 600 SEMIBOLD, 700 BOLD -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">

    <title>aGROWculture: My Profile</title>
</head>
<body>
<?php require_once '../templates/navbar_seller.php' ?>
    <div style="height:5rem;"></div>
    <!-- MAIN CONTENT -->
    <main class="full-container">
        <h1 class="sub-link center" style="font-size:48px; font-weight:900;">My Profile</h1>
        <hr>

        <div class="half-container" style="width: 30rem; margin-bottom:5rem;">
            <form action="../db/dp-backend.php" method="post" enctype="multipart/form-data">
                <fieldset>

                <?php
                $upload_dir = '../user_identification/';
                ?>

            <img src="<?php echo $upload_dir. $_SESSION["profile"] ?>" alt="" class="profile-icon placeholder-bg">
                <!--Upload Documents-->

                <div class="form-group">
                    <label for class="uploaddocs">Change Profile Picture:</label>
                    <div class="wrapper"><input type="file" name="image" class="upload-btn"></input></div>
                </div>


                
                    <div class="flex row">
                        <button type="submit" class="btn-circle btn-center" name="updatepassword" onClick="window.location.reload();">Save Profile</button>

                    </div>
                </fieldset>
            </form>
        </div>
    </main>

    <footer>

    </footer>

</body>

</html>