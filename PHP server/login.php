<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registro de PHP y MYSQLI</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="header">
  <div class="contenedor">
  	<h2 class="title_login">Login</h2> 
  <div id="logimg">
	<img  class="boxT"src="img/logo1.gif" alt="logo" width="200" height="200" >  
  </div>
</div> 
  <form  method="post" action="login.php">
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
  	</div>
  	<p>
  		Not yet a member? <a href="register.php"><br>Sign up</a>
  	</p>
	  
  </form>
  </div>
</body>
</html>