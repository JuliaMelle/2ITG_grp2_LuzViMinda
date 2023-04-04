<?php
// require_once '../templates/navbar_buyer.php'
session_start();

if (isset($_SESSION['isLogin'])) {
    if ($_SESSION['isLogin'] == false) {
        header('Location: ../login.php?security=false');
    }
} else {
    header('Location: ../login.php?security=false');
}
?>
<!-- USE THIS -->
<!-- <form action="../backend/cp-backend-buyer.php" method="post" enctype="multipart/form-data"> -->