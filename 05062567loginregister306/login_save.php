<?php
	session_start();
	include('connect.php');
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";

	$reslut = $conn->query($sql);

	$data = $reslut->fetch_array(MYSQLI_ASSOC);
	if($data){
		header('location:competitionlist.php');
	}
	else{
		$_SESSION['login_error']="username or password incorect!";
		header('location:index.php');
	}

?>