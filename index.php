<?php
    require_once ('config.php');
    $users = $data->where('id',2)->getOne('users');
    // var_dump($users);
    echo "username: ". $users["username"]."<br>"; 
    echo "name: ". $users["name"];

?>