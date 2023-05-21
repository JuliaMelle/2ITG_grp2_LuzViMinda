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

    <!-- MAIN CSS Sheet-->
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/change_profile.css">
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
    <!-- Google Font: Poppins-->
    <!-- Weights: 400 REGULAR, 600 SEMIBOLD, 700 BOLD -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <title>LuzViMinda | Change Profile</title>
    <style>
        input[type="file"]::file-selector-button {
            color: white;
        }

        input[type="text"] {
            flex: 1;
            min-width: 0;
        }

        .wrapper {
            display: flex;
        }

        label {
            margin-top: 1rem;
        }
    </style>
</head>

<body>
    <?php require_once '../components/navbar-seller.php' ?>
    <?php
        $id = $_SESSION['id'];
        $sql = "SELECT `profile_img` FROM `users` WHERE `user_ID` = $id ";
        if ($result = $conn->query($sql)) {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_array()) {
        ?>
    <!-- MAIN CONTENT -->
    <main class="full-container">
        <h1 class="sub-link center" style="font-size:48px; font-weight:900;">My Profile</h1>
        <hr>

        <div class="half-container">
            <form action="../backend/dp.php" method="post" enctype="multipart/form-data">
            <?php
                    if (isset($_GET['image'])) { //check if authenticate key exists in URL
                        if (isset ($_GET['image']) == "false") { ?>

                            <br>
                            <div class="alert alert-danger" role="alert">

                            <span class="closebtn">&times;</span> 
                                A valid profile picture must be uploaded.
                            </div>
                    <?php
                        }
                    }
            ?>

                <!--THIS IS WHERE THE PICTURE WILL APPEAR-->
                <div class="pposition">
                <?php
                $upload_dir = '../user_identification/';
                ?>
                
                <img class="pimg" src="../user_identification/<?php echo $row['profile_img'] ?>" />
                </div>

                <!--UPLOAD NEW PROFILE PICTURE-->
                    <label for="uploadprof" class="titles">Change your Profile Picture:</label>
                    <input class="upload-btn" type="file" name="image">

                <div class="mid_position_buttons">
                    <button class="button save" type="submit" name="updateprofile" onClick="">SAVE PROFILE</button>
                </div>   
            </form>
        </div>
        
    </main>
    <?php
            }
                                $result->free();
                            }
                        }
            ?>
    <?php require_once '../components/footer.php' ?>

    <script>
        var close = document.getElementsByClassName("closebtn");
        var i;

        for (i = 0; i < close.length; i++) {
        close[i].onclick = function(){
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function(){ div.style.display = "none"; }, 600);
        }
        }
</script>

</body>
</html>