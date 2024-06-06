<?php
	// เชื่อมต่อกับฐานข้อมูล
	$conn = mysqli_connect('localhost','root','','football2');

	mysqli_set_charset($conn,'utf8');

	date_default_timezone_set('Asia/Bangkok');
?>