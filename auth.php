<?php
    session_start();
    require_once('config.php');
    $email=$_POST['email'];
    $pass=$_POST['password'];
    // echo $_POST['email'];
    // echo $pass;

    $row = $data->where('email',$email)->getOne('users');
    if ($data->count > 0)
    {
        if($pass == $row['password']){
            $_SESSION['auth']="logged";    
            $_SESSION['email']= $row['email'];
            $_SESSION['name']= $row['name'];
            // $_SESSION['auth']="logged";
            // echo "Successfully login";
            header("Location: menu.php");



            exit();
        }
        else{
            echo "Please try again";
            exit();
        }

    }
    else{
        echo "This email is not registered. Please sign up";
        exit();
    }
?>