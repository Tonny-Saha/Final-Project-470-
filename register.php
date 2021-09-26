<?php
    session_start();
    require_once('config.php');
    $fname=$_POST['full-name'];
    $uname=$_POST['user-name'];
    $pass=$_POST['pass'];
    $rpass=$_POST['rpass'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $bdate=$_POST['date'];

    if($pass !== $rpass ){
        echo "Password did not match";
        exit();
    } 
    $row = $data->where('email',$email)->getOne('users');
    if ($data->count > 0){
        echo "Email is already registered, Please sign in";
        exit();
    }
    $col = $data->where('username',$uname)->getOne('users');
    if ($data->count > 0){
        echo "Username is already taken , Please try another";
        exit();
    }
    $d = Array ("name" => $fname,
               "username" => $uname,
               "email" => $email,
               "password" => $pass
);
$id = $data->insert ('users', $d);
$_SESSION['auth']="logged";    
            $_SESSION['email']= $email;
            $_SESSION['name']= $fname;
            header("Location: menu.php");
    exit();

?>