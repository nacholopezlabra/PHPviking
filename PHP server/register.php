<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registro PHP Y MYSQLI</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
	  <div class="contenedorreg">
  	<h2 class="title_reg">Register</h2> 
  <div id="regimg">
	<img  class="boxT1"src="img/logo1.gif" alt="logo" width="200" height="200" >  
</div>
	  </div>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
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
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php"><br>Sign in</a>
  	</p>
	  
  </form>
  </div>
</body>
</html>