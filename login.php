<?php
    session_start();
    require_once('config.php');
    if(isset($_SESSION['auth'])){
    if($_SESSION['auth']=="logged"){
        header("Location: menu.php");
        exit();
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trivigo</title>
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="logo/logo.png" type="image/x-icon">
</head>
<body>
    <div class="main">
       <!-- <a href="menu.html"> -->
        <form action="auth.php" class="form" method="POST">
            <input type="text" name="email" id="name"  placeholder=" &nbsp; Username/Email" > <br><br>
            <input type="password" id="pass"  placeholder="&nbsp; Password" name="password"> <br><br>
        <input type="submit" id="submit" value="&nbsp; Log-in &nbsp;">
    
        </form>
        <!-- </a> -->
    </div>
</body>
</html>