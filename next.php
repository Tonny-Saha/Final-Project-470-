<?php
    session_start();
    require_once('config.php');
    // header("Location: login.php");
    if(isset($_SESSION['auth'])){
    if($_SESSION['auth']=="logged"){
        header("Location: menu.php");
        exit();
    }
    else{
        header("Location: login.php");
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
    <link rel="stylesheet" href="next.css">
    <link rel="shortcut icon" href="logo/logo.png" type="image/x-icon">
</head>
<body>
    
    <div class="main" >
        <a href="login.php"><button class="b-1"><b>Log-in</b></button></a>
        <br>
    <a href="signup.php"><button class="b-1"><b>Sign-up</b></button></a>
</div>
</body>
</html>