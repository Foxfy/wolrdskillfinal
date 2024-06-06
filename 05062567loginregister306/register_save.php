<?php
	session_start();
	include('connect.php');

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "INSERT INTO users VALUES('NULL','$username','$password')";

	$result = $conn->query($sql);

	if($result){
		// สมัครสำเร็จ
		header('location:index.php');
	}
	else{
		// สมัครไม่สำเร็จ
		header('location:register.php');
	}
?>