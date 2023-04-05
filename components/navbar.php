<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>

    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/navbar.css">
</head>
<body>
<nav class="sticky" id="navbar">
        <div class="logo">
            <p>TITLE</p>
        </div>

        <div>
            <!-- RIGHT SIDE OF NAVBAR -->
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
                <i><ion-icon name="menu-outline"></ion-icon></i>
            </label>

            <ul>
                <li><a class="active" href="#">PRODUCTS</a></li>
                <li><a href="#">SEARCH</a></li>
                <li class="btn-account">
                  <div class="dropdown">
                    <a href="#">ACCOUNT</a>
                  </div>
                  
                  <div class="drop-content">
                  <a href="#">EDIT ACCOUNT</a>
                  <a href="#">VIEW PRODUCTS</a>

                  </div>
              </li>
            </ul>
        </div>
</nav>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <script>
window.onscroll = function() {myFunction()};

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