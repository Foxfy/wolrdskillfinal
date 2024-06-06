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
	  
	  <header class="container py-4 register-text">
	  	<h3>Register</h3>
	  </header>
	  
	  <main class="container">
	  	<form action="" method="post" enctype="multipart/form-data">
			<div class="row">
				<label for="username">Username</label>
		  		<input class="form-control" name="username" type="text" value="" required>
			</div>
			
			<div class="row">
				<label for="password">Password</label>
				<input class="form-control" name="password" type="text" value="" required>
			</div>
			
			<div class="row">
				<label for="password">Confirm-Password</label>
				<input class="form-control" name="password2" type="text" value="" required>
			</div>
			
			<div class="row">
				<input type="submit" class="btn btn-primary form-control col-8" value="Sign up">
				<a href="index.html" class="btn form-control col-4">back</a>
			</div>
			
		</form>
	  </main>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>