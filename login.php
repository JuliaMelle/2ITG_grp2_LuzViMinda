<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- css -->
  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/login.css">
</head>

<body>

  <?php require_once 'components/navbar.php' ?>
  <div class="container">
    <div class="mid_container">

      <div class="card"> <!-- CARD -->
        <h2 class="welcome">WELCOME!</h2>
        <!-- input username -->
        <b>USERNAME</b>
        <input type="text" class="input"></input>
        <!-- input password -->
        <b>PASSWORD</b>
        <input type="password" class="input"></input>
        <div class="mid_position_buttons">
        <button class="button login">LOGIN</button>
        <button class="button">REGISTER</button>
        </div>
      </div>

 
    </div>

  </div>
  </div>
  <?php require_once 'components/footer.php' ?>

  <!-- <script src="" async defer></script> -->
</body>

</html>