<?php
// require_once 'config.php';
  session_start();
  // mysqli_close($conn);
  $_SESSION['loggedin'] = FALSE;
  session_destroy();
  header('Location: login?logout=true');

 
?>