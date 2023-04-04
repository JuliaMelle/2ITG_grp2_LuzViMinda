<?php
// require_once 'config.php';
  session_start();
  // mysqli_close($conn);
  session_destroy();
  header('Location: login?logout=true');
?>