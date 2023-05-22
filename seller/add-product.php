<?php
session_start();
require_once '../config.php';

if (isset($_SESSION['loggedin'])) {
  if ($_SESSION['loggedin'] == false) {
    header('Location: ../login.php?security=false');
  }
} else {
  header('Location: ../login.php?security=false');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>LuzViMinda | Add Product</title>
  <link rel="stylesheet" href="../styles/global.css">
  <link rel="stylesheet" href="../styles/navbar.css">
  <link rel="stylesheet" href="../styles/footer.css">
  <!-- <link rel="stylesheet" href="../styles/add-product.css"> -->
  <link rel="stylesheet" href="../styles/add-post.css">
  <!-- FAVICON -->
  <link rel="icon" type="image/x-icon" href="../img/favicon.ico">

  <script src="https://kit.fontawesome.com/96362859e2.js" crossorigin="anonymous"></script>

  <style>
    /* ALERT */
    .alert {
      padding: 20px;
      background-color: #f44336;
      color: white;
      opacity: 1;
      transition: opacity 0.6s;
      margin-bottom: 15px;
      width: 44%;
      margin: auto;
      justify-content: center;
      align-items: center;
    }

    .alert.success {
      background-color: #04AA6D;
    }

    .alert.info {
      background-color: #2196F3;
    }

    .alert.warning {
      background-color: #ff9800;
    }

    .closebtn {
      margin-left: 15px;
      color: white;
      font-weight: bold;
      float: right;
      font-size: 22px;
      line-height: 20px;
      cursor: pointer;
      transition: 0.3s;
    }

    .closebtn:hover {
      color: black;
    }
  </style>

</head>

<body>

  <?php require_once '../components/navbar-seller.php' ?>

  <?php
  if (isset($_GET['name'])) { //check if authenticate key exists in URL
    if ($_GET['name'] == "false") { ?>

      <br>
      <div class="alert alert-danger" role="alert">

        <span class="closebtn">&times;</span>
        Fill out Product Name.
      </div>
  <?php
    }
  }
  ?>
  <?php
  if (isset($_GET['desc'])) { //check if authenticate key exists in URL
    if ($_GET['desc'] == "false") { ?>

      <br>
      <div class="alert alert-danger" role="alert">

        <span class="closebtn">&times;</span>
        Fill out Product Description.
      </div>
  <?php
    }
  }
  ?>
  <?php
  if (isset($_GET['price'])) { //check if authenticate key exists in URL
    if ($_GET['price'] == "false") { ?>

      <br>
      <div class="alert alert-danger" role="alert">

        <span class="closebtn">&times;</span>
        Fill out Product Price.
      </div>
  <?php
    }
  }
  ?>
  <?php
  if (isset($_GET['region'])) { //check if authenticate key exists in URL
    if ($_GET['region'] == "false") { ?>

      <br>
      <div class="alert alert-danger" role="alert">

        <span class="closebtn">&times;</span>
        Choose a certain region.
      </div>
  <?php
    }
  }
  ?>

  <?php
  if (isset($_GET['imagefile'])) { //check if authenticate key exists in URL
    if ($_GET['imagefile'] == "false") { ?>

      <br>
      <div class="alert alert-danger" role="alert">

        <span class="closebtn">&times;</span>
        Invalid picture.
      </div>
    <?php
    }

    ?>

    <?php
    if (isset($_GET['imagesize'])) { //check if authenticate key exists in URL
      if ($_GET['imagesize'] == "false") { ?>
        <br>
        <div class="alert alert-danger" role="alert">


          <span class="closebtn">&times;</span>
          Invalid picture. Image size too large.
        </div>
    <?php
      }
    }
    ?>
  <?php
  }

  ?>
  
<?php
  if (isset($_GET['fields'])) {

   //check if authenticate key exists in URL
    if ($_GET['fields'] == "false") { ?>

      <br>
      <div class="alert alert-danger" role="alert">

        <span class="closebtn">&times;</span>
        Please fill out all information needed.
      </div>
    <?php
    }
  }
    ?>


  <div class="wrapper">
    <div class="wrapper-content">
      <div class="box-header">
        <p>ADD A PRODUCT</p>
        <a class="close-btn" href="manage-product.php"> <i class="fa-solid fa-xmark" style="font-size: 25px; color: #000000;"></i> </a>
      </div>

      <hr>
      <form action="../backend/add_product.php" method="post" enctype="multipart/form-data">
        <h3 class="identifiers">PRODUCT NAME</h3>
          <input type="text" class="box" id="product_name" name="product_name"></input>

          <h3 class="identifiers">PRODUCT DESCRIPTION</h3>
          <input type="text" class="box" id="product_desc" name="product_desc"></input>

          <h3 class="identifiers">PRODUCT PRICE</h3>
          <input type="text" class="box" id="product_price" name="product_price"></input>

          <h3 class="identifiers">CATEGORY</h3>
          <select class="dropdown-category" name="category" id="category">
            <option value="NCR">NCR</option>
            <option value="CAR">CAR</option>
            <option value="ARMM">ARMM</option>
            <option value="REGION 1">Region 1</option>
            <option value="REGION 4A">Region 4-A</option>
            <option value="REGION 4B">Region 4-B</option>
            <option value="REGION 5">Region 5</option>
            <option value="REGION 6">Region 6</option>
            <option value="REGION 7">Region 7</option>
            <option value="REGION 10">Region 10</option>
          </select>

          <h3 class="identifiers1">PRODUCT IMAGE</h3>
          <input type="file" class="upload-btn" name="product_image"></input>
          <h5 class="picture">This only accepts .jpeg, .jpg, and .png files.</h5>
        <button type="submit" class="button" name="Submit" id="Submit">ADD PRODUCT</button>
      </form>
    </div>
  </div>


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