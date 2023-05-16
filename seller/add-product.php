<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LuzViMinda | Add Product</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="../styles/global.css">
  <link rel="stylesheet" href="../styles/navbar.css">
  <link rel="stylesheet" href="../styles/footer.css">
  <link rel="stylesheet" href="../styles/add-product.css">

  <script src="https://kit.fontawesome.com/96362859e2.js" crossorigin="anonymous"></script>

</head>
<body>
         <!-- <?php $_SESSION['user_ID']?> -->
         <form class="form-flex column" action="backend/add-product.php" method="post" enctype="multipart/form-data">
      
                  <div class="container">
                  <a class="close-btn" href="manage-product.php"> <i class="fa-solid fa-xmark" style="margin-left: 700px; font-size: 50px; color: #000000;"></i> </a>
                  
                    <div class="mid_container">

<<<<<<< Updated upstream
                         <h3 class="identifiers">PRODUCT NAME</h3>
                         <input type="text" class="box"></input>
=======
  <form class="form-flex column" action="backend/add-product.php" method="post" enctype="multipart/form-data">
>>>>>>> Stashed changes

                         <h3 class="identifiers">PRODUCT DESCRIPTION</h3>
                         <input type="text" class="box"></input>

                         <h3 class="identifiers">PRODUCT PRICE</h3>
                         <input type="text" class="box"></input>

                         <h3 class="identifiers">CATEGORY</h3>
                         <input type="text" class="box"></input>
                         
                         <h3 class="identifiers1">PROFILE PICTURE</h3>
                         <h5 class="picture">This only accepts .jpeg, .jpg, and .png files.</h5>
                         <input type="file" class="upload-btn" name="image" required></input>
                         <br>

                         <button class="button login" type="submit" value="Login" style ="width:90%">ADD A PRODUCT</button>

<<<<<<< Updated upstream
                         </div>
                  </div>
</form>
                        
=======
</form>

>>>>>>> Stashed changes
</body>
</html>