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
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Trivigo</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="shortcut icon" href="logo/logo.png" type="image/x-icon">
</head>
<body>
   <div class="main">
       
    <div class="form">
        
        <form action="register.php" method="POST">
            <input type="text" name="full-name" placeholder="&nbsp; Full Name"> <br><br>
            <input type="text" name="user-name" placeholder="&nbsp; Username"> <br> <br>
            <input type="password" name="pass" placeholder="&nbsp; Password"><br><br>
            <input type="password" name="rpass" placeholder="&nbsp; Retype Password"><br><br>
            <input type="email" name="email" placeholder="&nbsp; Email"><br><br>
            <input type="tel" name="phone" placeholder=" &nbsp; Phone Number"> <br><br>
            <input type="text" name="date" placeholder="&nbsp;  Date of Birth"> <br><br>
            <!-- <input type="tel" id="phone" placeholder=" &nbsp; Phone Number"> <br><br> -->
            <!-- <input type="submit" id="submit" value="&nbsp; Sign-Up &nbsp; "> -->
            <button class="btn" type="submit">&nbsp; Sign-Up &nbsp;</button>
        </form>
        <!-- <a href="menu.html"> -->
  
    <!-- </a> -->
    </div>
   </div> 
</body>
</html>