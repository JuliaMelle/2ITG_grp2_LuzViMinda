<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LuzViMinda | Login</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- css -->
  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/navbar.css">
  <link rel="stylesheet" href="styles/footer.css">
  <link rel="stylesheet" href="styles/login.css">
  <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">

</head>

<body>

  <?php require_once 'components/navbar.php' ?>
  <div class="container">
    <div class="mid_container">

      <div class="card"> <!-- CARD -->
        <h2 class="welcome">WELCOME!</h2>
        <form action="backend/authenticate.php" method="post">
        <!-- input username -->
        <b>USERNAME</b>
        <input type="text" class="input" name="username" placeholder="Username" id="username" ></input>
        <!-- input password -->
        <b>PASSWORD</b>
        <input type="password" class="input" name="password" placeholder="Password" id="password" ></input>
        <div class="mid_position_buttons">
        <button class="button login" type="submit" value="Login">LOGIN</button>
       <button class="button"> <a href="registration_form.php"> REGISTER </a></button>
        </div>
      </div>
      </form>

 
    </div>

  </div>
  </div>
  <?php require_once 'components/footer.php' ?>

  <!-- <script src="" async defer></script> -->
</body>

</html>