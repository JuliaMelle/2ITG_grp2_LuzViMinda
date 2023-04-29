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
  <link rel="stylesheet" href="styles/registration_form.css">
</head>

<body>
<script type="text/javascript" src="validate.js"></script>

  <?php require_once 'components/navbar.php' ?>
  <div class="container">
    <div class="mid_container">
    <form class="form-flex column" id="regForm" action="backend/register_data.php" method="post" enctype="multipart/form-data">

      <div class="card"> <!-- CARD -->
        <h2 class="registerheader">JOIN US</h2>

        <h3 class="register">LOGIN CREDENTIALS</h3>
        <!-- input username -->
        <b>USERNAME</b>
        <input type="text" class="input" name="username"></input>
        
        <!-- input password -->
        <b>PASSWORD</b>
        <input type="password" class="input" name="password"></input>

        <h3 class="register">BUSINESS INFORMATION</h3>
        <!-- input display name -->
        <b>DISPLAY NAME</b>
        <input type="displayname" class="input" name="business_name" ></input>
        
        <!-- input email -->
        <b>EMAIL</b>
        <input type="email" class="input" name="email"></input>

        <!-- input address -->
        <b>ADDRESS</b>
        <input type="address" class="input" name="address"></input>

        <!-- input profile picture -->
        <b>PROFILE PICTURE</b>
        <input type="file" class="upload-btn" name="image"></input>
        <br>

        <!-- input profile valid ID -->
        <!-- <b>VALID ID</b>
        <input type="file" id="picture" name="imagevalid" style="color:black;"  ></input>
        <label for="picture" class="profpic" >UPLOAD YOUR VALID ID</label> -->
        
  
    
        <div class="mid_position_buttons">
        <button type="submit" name="Submit" class="button login" onclick="validateForm()">SUBMIT</button>
        </div>
        </form>
      </div>
   
    </div>
  </div>
  <br>
  <br>
  <br>

  <?php
    if (isset($_GET['authenticate'])) { //check if authenticate key exists in URL
      if ($_GET['authenticate'] == "false") {
        echo '
          <br>
          <div class="alert alert-danger" role="alert">
            Invalid inputs.
          </div>
        ';

      }
    }
    ?>

  <?php require_once 'components/footer.php' ?>

</body>
 
</html>