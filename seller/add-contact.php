<?php
session_start();
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
  <!-- FAVICON -->
  <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
</head>

<body>

  <?php require_once '../components/navbar-seller.php' ?>
  <div class="container">


    <div class="mid_container">
    <div class="header">
</div>

<form class="form-flex column" id="regForm" action="../backend/add-contact.php" method="post" enctype="multipart/form-data">

      <div class="card"> <!-- CARD -->
      <p>If you do not have social media, please kindly type <b> 'none' </b> 
        <h2 class="welcome">ADD CONTACT | SOCIAL DETAILS </h2>
        <!-- input contact number -->
        <b class="label">CONTACT NUMBER</b>
        <input type="text" class="input" name="contact_no" ></input>
        
        <!-- input facebook -->
        <b class="label">FACEBOOK</b>
        <input type="text" class="input" name="facebook"></input>

         <!-- input instagram -->
         <b class="label">INSTAGRAM</b>
         <input type="text" class="input" name="instagram"></input>

         <!-- input others-->
         <b class="label">OTHERS:</b>
         <input type="text" class="input" name="others"></input>
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

</html>