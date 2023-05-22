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
  <link rel="stylesheet" href="styles/login.css">
  <link rel="stylesheet" href="styles/navbar.css">
  <link rel="stylesheet" href="styles/footer.css">

  <link rel="stylesheet" href="styles/navbar.css">
  <link rel="stylesheet" href="styles/footer.css">
  <link rel="icon" type="image/x-icon" href="img/favicon.ico">

</head>

<body>

    <?php
        if (isset($_SESSION['loggedin'])) {
    require_once 'components/navbar-seller.php';
}
    else{
    require_once 'components/navbar-general.php';
}  
    ?> 
  <?php
                    if (isset($_GET['fillout'])) { //check if authenticate key exists in URL
                        if ($_GET['fillout'] == "false") { ?>

                        <div class="alert">
                        <span class="closebtn">&times;</span>  
                        <strong style="color:white">Please fill out</strong> 
                        </div>
                    <?php
                        }
                    }
                    ?>
                      <?php
                    if (isset($_GET['password'])) { //check if authenticate key exists in URL
                        if ($_GET['password'] == "false") { ?>

                        <div class="alert">
                        <span class="closebtn">&times;</span>   
                        <strong style="color:white">Incorrect Username / Password</strong> <br>Please try again
                        </div>
                    <?php
                        }
                    }
                    ?>
  <div class="container">
    <div class="mid_container">

      <div class="card"> <!-- CARD -->
        <h2 class="welcome">WELCOME!</h2>
        <form action="backend/authenticate.php" method="post">
        <!-- input username -->
        <b>USERNAME</b>
        <input type="text" class="input" name="username" placeholder="Username" id="username" require></input>
        <!-- input password -->
        <b>PASSWORD</b>
        <input type="password" class="input" name="password" placeholder="Password" id="password" require></input>
        <div class="mid_position_buttons">
        <button class="button login" type="submit" value="Login">LOGIN</button>
      
        </form>

        <a href="registration_form.php" class="register button"> REGISTER </a>

        </div>
      </div>


 
    </div>

  </div>
  </div>
  <?php require_once 'components/footer.php' ?>

  <!-- <script src="" async defer></script> -->
  <script>
        var close = document.getElementsByClassName("closebtn");
        var i;

        for (i = 0; i < close.length; i++) {
            close[i].onclick = function() {
                var div = this.parentElement;
                div.style.opacity = "0";
                setTimeout(function() {
                    div.style.display = "none";
                }, 600);
            }
        }
    </script>
</body>

</html>