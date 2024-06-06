<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
  </head>
  <body>
  	<!-- body code goes here -->
		<main class="container">
			<div class="form-group margin_form">
				<header class="row">
					<h2>Register</h2>
				</header>
				<form action="register_save.php" method="post">
					<div class="row">
						<label for="username">Username</label>
						<input name="username" id="" value="" class="form-control">
					</div>
					<div class="row">
						<label for="password">Password</label>
						<input name="password" id="" value="" class="form-control">
					</div>
					<div class="row f-button">
						<input type="submit" class="btn form-control col-8" value="Register">
						<a href="index.php" class="btn form-control col-4">back</a>
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