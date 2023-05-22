<?php
// require_once '../templates/navbar_seller.php'
session_start();

if (isset($_SESSION['loggedin'])) {
    if ($_SESSION['loggedin'] == false) {
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
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/change_password.css">
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
    <!-- Google Font: Poppins-->
    <!-- Weights: 400 REGULAR, 600 SEMIBOLD, 700 BOLD -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- FAVICON -->
    <link rel="icon" href="../img/aGROWculture-Favicon.png" type="image/gif" sizes="16x16">

    <title>LuzViMinda | Change Password</title>
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
   
    <!-- MAIN CONTENT -->
    <main class="full-container">
        <h1 class="sub-link center" style="font-size:48px; font-weight:900;">My Profile</h1>
        <hr>

        <div class="half-container">
            <form action="../backend/cp-backend.php" method="post" enctype="multipart/form-data">
                    <?php
                    if (isset($_GET['fillout'])) { //check if authenticate key exists in URL
                        if ($_GET['fillout'] == "false") { ?>

                            <br>
                            <div class="alert alert-danger" role="alert">

                            <span class="closebtn">&times;</span> 
                                Fill out all fields.
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <?php
                    if (isset($_GET['wrongpassword'])) { //check if authenticate key exists in URL
                        if ($_GET['wrongpassword'] == "true") { ?>

                        <div class="alert alert-danger">
                        <span class="closebtn">&times;</span>  
                        Incorrect Password
                        </div>
                    <?php
                        }
                    }
                    ?>
                    <?php
                    if (isset($_GET['match'])) { //check if authenticate key exists in URL
                        if ($_GET['match'] == "false") { ?>

                            <br>
                            <div class="alert alert-danger" role="alert">
                            <span class="closebtn">&times;</span> 
                                Passwords don't match.
                            </div>
                    <?php
                        }
                    }
                    ?>

                    <label for="cur_password" class="titles">Current Password:</label>
                    <input class="wrapper" type="password" id="cur_password" name="cur_password">

                    <label for="password1" class="titles">New Password:</label>
                    <input class="wrapper" type="password" id="password1" name="password1">

                    <label for="password2" class="titles">Confirm New Password:</label>
                    <input class="wrapper" type="password" id="password2" name="password2">

                  
                    <button type="submit" class="btn-circle btn-center" name="updatepassword" onClick="window.location.reload();">Save Password</button>
                    
            
            </form>
        </div>
    </main>

    <footer>

    </footer>
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