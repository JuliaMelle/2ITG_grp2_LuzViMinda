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
    <div class="header">
</div>
<?php 
            $id = $_SESSION['id'];
$sql = "SELECT * FROM contacts WHERE `user_ID` = $id ";
//    $result = mysqli_query($conn, $sql);
//    $resultCheck = mysqli_num_rows($result);
   if ($result = $conn->query($sql)) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {

?>
<form class="form-flex column" id="regForm" action="../backend/edit-contact.php" method="post" enctype="multipart/form-data">

      <div class="card"> <!-- CARD -->

        <h2 class="welcome">EDIT CONTACT | SOCIAL DETAILS </h2>
        <!-- input contact number -->
        <b class="label">CONTACT NUMBER</b>
        <input type="text" class="input" name="contact_no" value="<?php echo $row['contact_no']?>"></input>
        
        <!-- input facebook -->
        <b class="label">FACEBOOK</b>
        <input type="text" class="input" name="facebook" value="<?php echo $row['facebook']?>"></input>


         <!-- input instagram -->
         <b class="label">INSTAGRAM</b>
         <input type="text" class="input" name="instagram" value="<?php echo $row['instagram']?>"></input>

         <!-- input others-->
         <b class="label">OTHERS:</b>
         <input type="text" class="input" name="others" value="<?php echo $row['others']?>"></input>
        <div class="mid_position_buttons">
        <button type="submit" class="button login">SAVE CHANGES</button> 
        
        </div>
      </div>
    </div>
  </div>
  </div>
</form>
<?php         }
                    $result->free();
                }
            }
?>
  <?php require_once '../components/footer.php' ?>

  <!-- <script src="" async defer></script> -->
</body>
<?php       //.4 Closing Database Connection
        mysqli_close($conn);?>
</html>