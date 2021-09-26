<?php
    session_start();
    require_once('config.php');
    if($_SESSION['auth']!=="logged" || !isset($_SESSION['auth'])){
        header("Location: login.php");
        exit();
    }


    // echo $_SESSION['auth']."<br>"; 
    // echo $_SESSION['email']."<br>";
    // echo $_SESSION['name']."<br>";

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="logout.php">Logout</a>
</body>
</html>