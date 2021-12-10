<?php
session_start();

// inizializacion de variables.
$username = "";
$email    = "";
$errors = array(); 
$servidor="localhost";
$usuario="root";
$password="usbw";
$bd="test";
// conexion a la base de datos.
$db = mysqli_connect($servidor, $usuario, $password, $bd);

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // recibe todos los input de el formulario recibir.
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // Validacion de formulario: Comprobacion de que el formulario sea correcto.
  // Al añadir (array_push()) que corresponde al $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // se comprueba primero en la base de datos,
  // para que no haya ningun usuario con un email o un username igual.
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // si el usuario existe.
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Registro del usuario si no hay errores.
  if (count($errors) == 0) {
  	$password = md5($password_1);// Metodo para encriptar la contraseña antes de guardarla en la base de datos.
  	$query = "INSERT INTO users (username, email, password, rol_id) 
  			  VALUES('$username', '$email', '$password',NULL)";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// LOGIN USER

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
       
      
        if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];
 
 
  $password = md5($password);
  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

  $results = mysqli_query($db, $query);

  $results_assoc = mysqli_fetch_assoc($results);
  if (mysqli_num_rows($results) == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    if($results_assoc["rol_id"]==1) {
      $_SESSION["is_admin"] = TRUE;
      header('location:admin.php');
      }elseif($results_assoc["rol_id"]==2){
      $_SESSION["is_admin"]==false;
      header('location:indexuser.php');
      }

     
  }else {
  array_push($errors, "Wrong username/password combination");
}    
}      

} 
}
