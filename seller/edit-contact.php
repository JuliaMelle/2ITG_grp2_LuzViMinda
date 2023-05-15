<?php
require_once '../config.php';
session_start();

if (isset($_SESSION['loggedin'])) {
  require_once '../components/navbar-seller.php';
} else {
  require_once '../components/navbar-general.php';
}
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
      <div class="header"></div>
      <form class="form-flex column" id="regForm" action="../backend/edit-contact.php" method="post" enctype="multipart/form-data">

        <div class="card"> <!-- CARD -->
          <?php
          $id = $_SESSION['id'];
          $sql = "SELECT * FROM contacts WHERE `user_ID` = $id ";
          if (!empty($row['user_ID'])) {
            echo '<h2 class="welcome">EDIT CONTACT | SOCIAL DETAILS </h2>';
            echo '<b class="label">CONTACT NUMBER</b>';
            echo '<input type="text" class="input" name="contact_no" value="' . $row['contact_no'] . '"></input>';

            echo '<b class="label">FACEBOOK</b>';
            echo '<input type="text" class="input" name="facebook" value="' . $row['facebook'] . '"></input>';


            echo  '<b class="label">INSTAGRAM</b>';
            echo '<input type="text" class="input" name="instagram" value="' . $row['instagram'] . '"></input>';

            echo  '<b class="label">OTHERS:</b>';
            echo '<input type="text" class="input" name="others" value="' . $row['others'] . '"></input>';
          }
          else {
            echo '<h2 class="welcome">EDIT CONTACT | SOCIAL DETAILS </h2>';
            echo '<b class="label">CONTACT NUMBER</b>';
            echo '<input type="text" class="input" name="contact_no" value=""></input>';

            echo '<b class="label">FACEBOOK</b>';
            echo '<input type="text" class="input" name="facebook" value=""></input>';


            echo  '<b class="label">INSTAGRAM</b>';
            echo '<input type="text" class="input" name="instagram" value=""></input>';

            echo  '<b class="label">OTHERS:</b>';
            echo '<input type="text" class="input" name="others" value=""></input>';
          }


                // echo '<h2 class="welcome">EDIT CONTACT | SOCIAL DETAILS </h2>';
                // echo '<b class="label">CONTACT NUMBER</b>';
                // echo '<input type="text" class="input" name="contact_no" value="' . $row['contact_no'] . '"></input>';

                // echo '<b class="label">FACEBOOK</b>';
                // echo '<input type="text" class="input" name="facebook" value="' . $row['facebook'] . '"></input>';


                // echo  '<b class="label">INSTAGRAM</b>';
                // echo '<input type="text" class="input" name="instagram" value="' . $row['instagram'] . '"></input>';

                // echo  '<b class="label">OTHERS:</b>';
                // echo '<input type="text" class="input" name="others" value="' . $row['others'] . '"></input>';

          ?>
          <div class="mid_position_buttons">
            <button type="submit" class="button login">SAVE CHANGES</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <?php require_once '../components/footer.php' ?>

  <!-- <script src="" async defer></script> -->
</body>
<?php       //.4 Closing Database Connection
mysqli_close($conn); ?>

</html>