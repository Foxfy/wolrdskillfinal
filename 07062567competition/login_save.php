<?php
    session_start();
    include('connect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
    $result = $conn->query($sql);

    $data = $result->fetch_array(MYSQLI_ASSOC);
    if($data){
        header('location:competition-index.php');
    }else{
        $_SESSION['login_error'] = "username or password incorect";
        header('location:index1.php');
    }

?>