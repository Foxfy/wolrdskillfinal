<?php
    session_start();
    include_once('connect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users VALUES(NULL,'$username','$password')";
    $result = $conn->query($sql);

    if($result){
        header('location:index1.php');
    }else{
        header('location:register.php');
    }

?>