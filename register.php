<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
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
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
			<input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
	  </div>
  	<div class="input-group">
  	  <label>Telephone</label>
  	  <input type="phone" name="phone" value="<?php echo $phone; ?>">
  	</div>
	  </div>
  	<div class="input-group">
  	  <label>Address</label>
  	  <input type="address" name="address" value="<?php echo $address; ?>">
  	</div>
  	<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
			<button type="submit" class="btn" name="reg_exit">Exit</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>