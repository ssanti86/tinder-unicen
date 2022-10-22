<?php

session_start();

if(isset($_SESSION["email"])){
    header("Location: index.php");
    exit;
}

require("./includes/config.php");

$error_message = "";

if (isset($_POST['email']) AND isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    //prepare bind
    $stmt = $mysqli->prepare("SELECT email, password, nombre FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    
    //check valid login
    $data = mysqli_fetch_assoc($result);   

    if($data){

        session_start();

        $_SESSION['nombre'] = $data["nombre"];
        $_SESSION['email'] = $data["email"];

        header("Location: index.php");

    }else{
        header("Location: login.php?error=invalid"); 
    }

}

if(isset($_GET["error"])){
	$error_message = "Email y/o contraseña incorrecta.";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>APP</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link href="assets/css/fontawesome.css" rel="stylesheet">
	<link href="assets/css/all.css" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> 

  	<link rel="manifest" href="manifest.json">

  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


<style type="text/css">
	
	html, body {
	    overflow: auto;
	}

	body{
		font-family: 'Open Sans', sans-serif;

	}

	.vertical-center{
	  margin: 0;
	  position: absolute;
	  top: 50%;
	  -ms-transform: translateY(-50%);
	  transform: translateY(-50%);
	  width: 100%;
	}

</style>

</head>
<body>


	<div class="vertical-center container-flex static">

		<div class="container-flex">

			<h2 class="text-center text-secondary">Bienvenido!</h2>

			<form role="form" method="POST">

				<div class="from-group">

					<div class="m-3">
						<label>Email</label>
						<input class="form-control" type="text" name="email" required>	
					</div>

					<div class="m-3">
						<label>Contraseña</label>
						<input class="form-control" type="password" name="password" required>	
					</div>
					
					<div class="m-3">
						<p class="text-center text-danger"><?php echo $error_message; ?></p>
					</div>

				</div>

				<div class="container-flex text-center m-3 mt-4 pb-5">
					<button class="btn btn-block btn-lg btn-primary shadow-sm mb-3">Iniciar Sesion</button>
					<a class="text-secondary" href="register.php">¿No tienes una cuenta? Registrate!</a>
				</div>



			</form>

		</div>
			
	

</div>

</body>

<script src="jquery/jquery-3.6.1.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>	

	 if ('serviceWorker' in navigator) {
	  window.addEventListener('load', function() {
	  navigator.serviceWorker.register('service-worker.js').then(function(registration) {
	  // Registration was successful
	  console.log('Registered!');
	  }, function(err) {
	  // registration failed :(
	  console.log('ServiceWorker registration failed: ', err);
	  }).catch(function(err) {
	  console.log(err);
	  });
	  });
	  } else {
	  console.log('service worker is not supported');
	 }

	 window.addEventListener('beforeinstallprompt', e => {
	  console.log('beforeinstallprompt Event fired');
	  e.preventDefault();
	  // Stash the event so it can be triggered later.
	  this.deferredPrompt = e;
	  return false;
	  });
	// When you want to trigger prompt:
	this.deferredPrompt.prompt();
	  this.deferredPrompt.userChoice.then(choice => {
	  console.log(choice);
	  });
	this.deferredPrompt = null;

</script>

</html>