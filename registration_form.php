<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>Register: LuzViMinda</title>
  
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- css files -->
  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/register.css">
</head>

<body>

  <?php require_once 'components/navbar.php' ?>
  <div class="container">
    <div class="mid_container">

      <div class="card"> <!-- CARD -->
        <h2 class="registerheader">JOIN US</h2>

        <h3 class="register">LOGIN CREDENTIALS</h3>
        <!-- input username -->
        <b>USERNAME</b>
        <input type="text" class="input"></input>
        
        <!-- input password -->
        <b>PASSWORD</b>
        <input type="password" class="input"></input>

        <h3 class="register">BUSINESS INFORMATION</h3>
        <!-- input display name -->
        <b>DISPLAY NAME</b>
        <input type="displayname" class="input"></input>
        
        <!-- input email -->
        <b>EMAIL</b>
        <input type="email" class="input"></input>

        <!-- input address -->
        <b>ADDRESS</b>
        <input type="address" class="input"></input>

        <!-- input profile picture -->
        <b>PROFILE PICTURE</b>
        <input type="file" id="picture"></input>
        <label for="picture" class="profpic">UPLOAD YOUR PROFILE PICTURE</label>
        
        <div class="mid_position_buttons">
        <button class="button login">SUBMIT</button>
        </div>

      </div>

    </div>

  </div>
  <br>
  <br>
  <br>

  <?php require_once 'components/footer.php' ?>

</body>
</html>