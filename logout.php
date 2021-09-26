<?php
  session_start();
  require_once('config.php');
  if($_SESSION['auth']!=="logged" || !isset($_SESSION['auth'])){
      header("Location: login.php");
      exit();
  }
  session_destroy();
  header("Location: login.php");


?>