<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LuzViMinda | Add Contact</title>
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
      <div class="card"> <!-- CARD -->

        <h2 class="welcome">ADD CONTACT | SOCIAL DETAILS </h2>
        <!-- input contact number -->
        <b class="label">CONTACT NUMBER</b>
        <input type="text" class="input"></input>
        <!-- input facebook -->
        <b class="label">FACEBOOK</b>
        <input type="text" class="input"></input>
         <!-- input instagram -->
         <b class="label">INSTAGRAM</b>
         <input type="text" class="input"></input>
         <!-- input others-->
         <b class="label">OTHERS:</b>
         <input type="text" class="input"></input>
        <div class="mid_position_buttons">
        <button class="button login">SAVE CHANGES</button>
        </div>
      </div>


    </div>

  </div>
  </div>
  <?php require_once '../components/footer.php' ?>

  <!-- <script src="" async defer></script> -->
</body>

</html>