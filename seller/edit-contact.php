<?php
require_once '../config.php';
session_start();

if (isset($_SESSION['loggedin'])) {
    require_once '../components/navbar-seller.php';
} else {
    require_once '../components/navbar-general.php';
}
?>
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- css -->
  <link rel="stylesheet" href="../styles/global.css">
  <link rel="stylesheet" href="../styles/navbar.css">
  <link rel="stylesheet" href="../styles/footer.css">
  <link rel="stylesheet" href="../styles/add-contact.css">
</head>

<body>

  <?php require_once '../components/navbar-seller.php' ?>
  <div class="container">
    

    <div class="mid_container">
    <div class="header">
</div>
<?php 

$sql = "SELECT * FROM contacts WHERE `userID` = " . $_SESSION['user_ID'] . ";";
   $result = mysqli_query($conn, $sql);
   $resultCheck = mysqli_num_rows($result);
?>
<form class="form-flex column" id="regForm" action="../backend/add-contact.php" method="post" enctype="multipart/form-data">

      <div class="card"> <!-- CARD -->

        <h2 class="welcome">ADD CONTACT | SOCIAL DETAILS </h2>
        <!-- input contact number -->
        <b class="label">CONTACT NUMBER</b>
        <input type="text" class="input" name="contact_no">
        <?php echo $row['contact_no'] ?></input>
        
        <!-- input facebook -->
        <b class="label">FACEBOOK</b>
        <input type="text" class="input" name="facebook">
        <?php echo $row['facebook'] ?></input>


         <!-- input instagram -->
         <b class="label">INSTAGRAM</b>
         <input type="text" class="input" name="instagram">
         <?php echo $row['instagram'] ?></input>

         <!-- input others-->
         <b class="label">OTHERS:</b>
         <input type="text" class="input" name="others">
         <?php echo $row['others'] ?></input></input>
        <div class="mid_position_buttons">
        <button type="submit" class="button login">SAVE CHANGES</button> 
        
        </div>
      </div>
    </div>
  </div>
  </div>
</form>
  <?php require_once '../components/footer.php' ?>

  <!-- <script src="" async defer></script> -->
</body>
<?php       //.4 Closing Database Connection
        mysqli_close($conn);?>
</html>