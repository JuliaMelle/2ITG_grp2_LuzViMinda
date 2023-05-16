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
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LuzViMinda | Add Product</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="../styles/global.css">
  <link rel="stylesheet" href="../styles/navbar.css">
  <link rel="stylesheet" href="../styles/footer.css">
  <link rel="stylesheet" href="../styles/add-product.css">

  <script src="https://kit.fontawesome.com/96362859e2.js" crossorigin="anonymous"></script>

</head>
<body>
<?php $_SESSION['loggedin'] ?>
         <form class="form-flex column" action="../backend/add_product.php" method="post" enctype="multipart/form-data">
      
         <div class="container">
        
         <a class="close-btn" href="manage-product.php"> <i class="fa-solid fa-xmark" style="margin-left: 700px; font-size: 50px; color: #000000;"></i> </a>
                    <div class="mid_container">

                    <h3 class="identifiers">PRODUCT NAME</h3>
                    <input type="text" class="box" id="product_name" name="product_name"></input>

                    <h3 class="identifiers">PRODUCT DESCRIPTION</h3>
                    <input type="text" class="box" id="product_desc" name="product_desc"></input>

                    <h3 class="identifiers">PRODUCT PRICE</h3>
                    <input type="text" class="box" id="product_price" name="product_price"></input>

                    <h3 class="identifiers">CATEGORY</h3>
                    <select class="dropdown-category" name="category" id="category">
                         <option value="region-ncr">NCR</option>
                        <option value="region-car">CAR</option>
                       <option value="region-armm">ARMM</option>
                       <option value="region-1">Region 1</option>
                      <option value="region-4a">Region 4-A</option>
                      <option value="region-4b">Region 4-B</option>
                      <option value="region-5">Region 5</option>
                      <option value="region-6">Region 6</option>
                      <option value="region-7">Region 7</option>
                      <option value="region-10">Region 10</option>
                    </select>

                    <h3 class="identifiers1">PROFILE PICTURE</h3>
                   <h5 class="picture">This only accepts .jpeg, .jpg, and .png files.</h5>
                  <input type="file" class="upload-btn" name="image" required></input>
                  <br>

      <button class="button login" type="submit" value="Submit" style="width:90%">ADD A PRODUCT</button>

    </div>
  </div>
</form>
</body>
</html>