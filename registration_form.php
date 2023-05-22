<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>LuzViMinda | Register</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- css files -->
  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/navbar.css">
  <link rel="stylesheet" href="styles/footer.css">
  <link rel="stylesheet" href="styles/registration_form.css">
  <link rel="stylesheet" href="styles/navbar.css">
  <link rel="stylesheet" href="styles/footer.css">

  <!-- FAVICON -->
  <link rel="icon" type="image/x-icon" href="img/favicon.ico">

</head>

<body>
  <script type="text/javascript" src="validate.js"></script>

  <?php require_once 'components/navbar.php' ?>
  <div class="container">
    <div class="mid_container">

      <form class="form-flex column" id="regForm" action="backend/register_data.php" method="post" enctype="multipart/form-data">
        <?php
        if (isset($_GET['authenticate'])) { //check if authenticate key exists in URL
          if ($_GET['authenticate'] == "false") {
        ?>
            <br>
            <div class="alert">
              <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
              <strong style="color:white">Invalid</strong> Please try again
            </div>

        <?php
          }
        }
        ?>

        <?php
        if (isset($_GET['useremail'])) { //check if authenticate key exists in URL
          if ($_GET['useremail'] == "false") {
        ?>
            <br>
            <div class="alert">
              <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
              Invalid<strong style="color:white"> username or email. Already existing.</strong> Please try again.
            </div>

        <?php
          }
        }
        ?>
        
        <?php
        if (isset($_GET['email'])) { //check if authenticate key exists in URL
          if ($_GET['email'] == "false") {
        ?>
            <br>
            <div class="alert">
              <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
              Invalid<strong style="color:white"> email. Already existing.</strong> Please try again.
            </div>

        <?php
          }
        }
        ?>

        <?php
        if (isset($_GET['username'])) { //check if authenticate key exists in URL
          if ($_GET['username'] == "false") {
        ?>
            <br>
            <div class="alert">
              <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
              Invalid<strong style="color:white"> username. Already existing.</strong> Please try again.
            </div>

        <?php
          }
        }
        ?>


        <div class="card"> <!-- CARD -->
          <h2 class="registerheader">JOIN US</h2>

          <h3 class="register">LOGIN CREDENTIALS</h3>
          <!-- input username -->
          <b>USERNAME</b>
          <input type="text" class="input" name="username" placeholder="Username"></input>

          <!-- input password -->
          <b>PASSWORD</b>
          <input type="password" class="input" name="password" placeholder="Password"></input>
          <br>
          <br>

          <h3 class="register">BUSINESS INFORMATION</h3>
          <!-- input display name -->
          <b>DISPLAY NAME</b>
          <input type="displayname" class="input" name="business_name" placeholder="Display Name"></input>

          <!-- input email -->
          <b>EMAIL</b>
          <input type="email" class="input" name="email" placeholder="Email" placeholder="Email"> </input>

          <!-- input address -->
          <b>ADDRESS</b>
          <input type="address" class="input" name="address" placeholder="Address"></input>

          <!-- input profile picture -->
          <b>PROFILE PICTURE</b>
          <h5 class="picture">This only accepts .jpeg, .jpg, and .png files.</h5>
          <input type="file" class="upload-btn" name="image"></input>
          <br>

          <!-- input profile valid ID -->
          <b>VALID ID</b>
          <h5 class="picture">This only accepts .jpeg, .jpg, and .png files.</h5>
          <input type="file" class="upload-btn" name="image_v2"></input>
          <br>

          <div class="mid_position_buttons">
            <button type="submit" name="Submit" class="button login" onclick="validateForm()">SIGN UP</button>
          </div>
      </form>

    </div>

  </div>
  </div>
  <br>
  <br>
  <br>



  <?php require_once 'components/footer.php' ?>

</body>

</html>