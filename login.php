<?php include('server.php'); ?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="styles/styleLogin.css">
  <style>
	  body {
		  background:url('images/test.jpg') no-repeat center center fixed;
		  -webkit-background-size:cover;
  		  -moz-background-size:cover;
 	      -o-background-size:cover;
 		 background-size:cover;
		 }
		 </style>
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
		<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
		  <button type="submit" class="btn" name="login_user">Login</button>
		  <button type="submit" class="btn" name="logout_user">Logout</button>
		  <button type="submit" class="btn" name="reg_exit">Exit</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Register</a>
  	</p>
  </form>

</body>
</html>