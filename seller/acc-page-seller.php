<?php
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


    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="../styles/footer.css">

    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">


    <link rel="stylesheet" href="../styles/acc-page-seller2.css">
    <title>LuzViMinda | Account Page</title>
</head>


<body>
    <?php require_once '../components/navbar-seller.php' ?>


    <!-- ITO YUNG PAGE FOR VIEWERS ONLY -->
    <div class="wrapper1">
    <?php
                    if (isset($_GET['success'])) { //check if authenticate key exists in URL
                        if ($_GET['success'] == "true") { ?>

                            <br>
                            <div class="alert alert-success" role="alert">

                            <span class="closebtn">&times;</span> 
                            You have successfully uploaded your new profile picture.
                            </div>
                    <?php
                        }
                    }
    ?>


    </div>

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
                        <div class="upper">
                            <img class="profile-img" src="../user_identification/<?php echo $row['profile_img'] ?>"/>

                            <a href="change_profile.php">
                            <button class="login">CHANGE PROFILE</button>
                            </a>

                            <a href="edit-contact.php">
                            <button class="login" >EDIT CONTACT</button>
                            </a>
                            <form action="../backend/update.php" method="post" enctype="multipart/form-data">

                            <button class="save" type="submit" name="submit">SAVE CHANGES</button>
                        </div>


                        <div class="details">

                        <h3 class="identifiers">DISPLAY NAME</h3>
                            <input class="box" value="<?php echo $row['business_name'] ?>" name="business_name"></input>
                            
                            <h3 class="identifiers">USER NAME</h3>
                            <input class="box" value="<?php echo $row['username'] ?>" name="username"></input>

                            <h3 class="identifiers">CHANGE PASSWORD</h3>
                            <a href="change-password.php" class="button" value="Login" >CHANGE PASSWORD </a>


                            <h3 class="identifiers">EMAIL</h3>
                            <input class="box" value="<?php echo $row['email'] ?>" name="email"></input>
                            <h3 class="identifiers">ADDRESS</h3>
                            <input class="box" value="<?php echo $row['address'] ?>" name="address"></input>
                            <?php
                            if (!empty($row['website'])) {
                                echo '<h3 class="website">WEBSITE</h3>';
                                echo '<input class="box" value="'.$row['website'].'" name="website"></input>';
                            }
                            ?>
                            <!-- 
                            <h3 class="identifiers">WEBSITE</h3>
                            <div class="box"> <</div> -->

                            </form>
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