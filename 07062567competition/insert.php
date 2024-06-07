<?php
    session_start();
    include_once('connect.php');

    if(empty($_POST)){
        header('location:competition-create.php');
    }

    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $max_teams = $_POST['max_teams'];
    $banner = $_FILES['banner']['name'];

    copy($_FILES['banner']['tmp_name'] , 'images/'.$_FILES['banner']['name']);

    try{
        $sql = "INSERT INTO competitions VALUES(NULL,'$name','$slug','$max_teams','$banner')";
        $inserted = $conn->query($sql);
        $insert_id = mysqli_insert_id($conn);

        foreach($_POST['allowed_provinces'] as $provinces_id){
            $sql = "INSERT INTO allowed_provinces VALUES(NULL,'$insert_id','$provinces_id')";
            $result = $conn->query($sql);
        }

        $_SESSION['alert']['msg'] = "Competition create successfully";
        header('location:competition-detail.php?competition_slug='.$slug);
    }catch (Exception $e){
        $_SESSION['alert']['msg'] = "This slug is already in use";

        $_SESSION['post'] = $_POST;
        $_SESSION['banner'] = $banner;

        header('location:competition-create.php');
    }

?>