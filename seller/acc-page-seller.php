<?php
session_start();
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




    <link rel="stylesheet" href="../styles/acc-page-seller2.css">
    <title>LuzViMinda | Account Page</title>
</head>


<body>
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




                        <button class="button login" type="submit" value="Login">ADD CONTACT</button>


                       </div>


                   <div class="details">
                      <h3>USERNAME</h3>
                         <div class="box"><?php echo $row['business_name'] ?></div>
                         
                         <h3>CHANGE PASSWORD</h3>
                         <button class="button login" type="submit" value="Login" style ="width:90%">CHANGE PASSWORD</button>


                         <h3>EMAIL</h3>
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
</body>


</html>
