<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- <title>Navbar</title> -->

  <title></title>


  <link rel="stylesheet" href="../styles/global.css">
  <link rel="stylesheet" href="../styles/navbar.css">
</head>

<body>
  <nav class="sticky" id="navbar">

    <a href="../index.php"><img class="logo" src="../img/logo.png" alt="LUZVIMINDA" style="height:75px; width:75px"></a>


    <div>
      <!-- RIGHT SIDE OF NAVBAR -->
      <input type="checkbox" id="click" class="check">
      <label for="click" class="menu-btn">
        <i><ion-icon name="menu-outline"></ion-icon></i>
      </label>

      <ul>
        <li><a class="active" href="../general/product-catalog.php">PRODUCT CATALOG</a></li>
        <li><a class="active" href="../general/learn_more.php">LEARN MORE</a></li>
        <!-- <li><a href="#">SEARCH</a></li> -->
        <li class="btn-account">
          <div class="dropdown">
            <a href="#"><?php $current_username = $_SESSION['username'];
                        echo strtoupper($current_username)
                        ?></a>

          </div>

          <div class="drop-content">
            <a href="../seller/seller-account.php">ACCOUNT PAGE</a>
            <a href="../seller/acc-page-seller.php">EDIT ACCOUNT</a>
            <a href="../seller/manage-product.php">VIEW PRODUCTS</a>
            <a href="../general/blog-cms.php">BLOGS</a>
            <a href="../logout.php">LOGOUT</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <script>
    window.onscroll = function() {
      myFunction()
    };

    var navbar = document.getElementById('navbar');
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add('sticky')
      } else {
        navbar.classList.remove('sticky');
      }
    }
  </script>
</body>

</html>