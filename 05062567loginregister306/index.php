<?php
	session_start();
	include_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
  	<!-- body code goes here -->

		<main class="container">
			<div class="form-group margin_form">
				<header class="row">
					<h2>Login</h2>
					<?php
						if(isset($_SESSION['login_error']))
						{
					?>
						<p style="color: #FF0004"><?php echo $_SESSION['login_error']?></p>
					<?php
						unset($_SESSION['login_error']);
						}
					?>
				</header>
				<form action="login_save.php" method="post">
					<div class="row">
						<label for="username">Username</label>
						<input name="username" id="" value="" class="form-control">
					</div>
					<div class="row">
						<label for="password">Password</label>
						<input name="password" id="" value="" class="form-control">
					</div>
					<div class="row f-button">
						<input type="submit" class="btn form-control" value="Login">
						<a href="register.php" class="btn">Sign up</a>
					</div>
				</form>
			</div>
	  	</main>
	  
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>