<?php
require_once "../config.php";
session_start();


if (isset($_SESSION['loggedin'])) {
  if ($_SESSION['loggedin'] == false) {
    header('Location: ../login.php?security=false');
  }
} else {
  header('Location: ../login.php?security=false');
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LuzViMinda | Edit Contact</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- css -->
  <link rel="stylesheet" href="../styles/global.css">
  <link rel="stylesheet" href="../styles/navbar.css">
  <link rel="stylesheet" href="../styles/footer.css">
  <link rel="stylesheet" href="../styles/edit-contact.css">
  <!-- FAVICON -->
  <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
</head>

<body>

  <?php require_once '../components/navbar-seller.php' ?>
  <div class="container">
    <div class="mid_container">
      <div class="header"></div>
      <form class="form-flex column" id="regForm" action="../backend/edit-contact.php" method="post" enctype="multipart/form-data">

          <?php
          $id = $_SESSION['id'];
          $sql = "SELECT * FROM contacts WHERE user_id = $id ";
          if ($result = $conn->query($sql)) {
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_array()) {
                echo '<h2>EDIT CONTACT | SOCIAL DETAILS </h2>';
                echo '<p class="label">CONTACT NUMBER</p>';
                echo '<input type="text" class="input" name="contact_no" value="' . $row['contact_no'] . '"></input>';

                echo '<p class="label">FACEBOOK</p>';
                echo '<input type="text" class="input" name="facebook" value="' . $row['facebook'] . '"></input>';


                echo  '<p class="label">INSTAGRAM</p>';
                echo '<input type="text" class="input" name="instagram" value="' . $row['instagram'] . '"></input>';

                echo  '<p class="label">OTHERS:</p>';
                echo '<input type="text" class="input" name="others" value="' . $row['others'] . '"></input>';
              }
            }
          } else {
            echo '<h2>EDIT CONTACT | SOCIAL DETAILS </h2>';
            echo '<p class="label">CONTACT NUMBER</p>';
            echo '<input type="text" class="input" name="contact_no" value=""></input>';

            echo '<p class="label">FACEBOOK</p>';
            echo '<input type="text" class="input" name="facebook" value=""></input>';


            echo  '<p class="label">INSTAGRAM</p>';
            echo '<input type="text" class="input" name="instagram" value=""></input>';

            echo  '<p class="label">OTHERS:</p>';
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
            <button type="submit" class="button login">SAVE CHANGES</button>

      </form>
    </div>
  </div>

  <?php require_once '../components/footer.php' ?>

  <!-- <script src="" async defer></script> -->
</body>
<?php       //.4 Closing Database Connection
$conn->close(); ?>

</html>