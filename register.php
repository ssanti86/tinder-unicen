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
	
	body{
		font-family: 'Open Sans', sans-serif;
		padding-top: 65px;
	}

	.divider{
		border-top: solid rgba(0, 0, 0, 0.20) 1px;
	  	margin-top: 30px;
	  	margin-left: 25px;
	    margin-right: 25px;
	    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.50) !important;
	}

</style>

</head>
<body>


	<div class="container-flex fixed-top bg-white p-3 shadow-sm" id="navbar">		
		<a href="login.php" class="text-secondary"><i class="fas fa-chevron-left mr-1"></i>Atras</a>
	</div>

	<div class="container-flex">
		<div class="container-flex mt-4">

			<h2 class="text-center text-secondary">Registrarse</h2>

			<form>

				<div class="from-group">

					<div class="m-3">
						<label>Email</label>
						<input class="form-control" type="text" name="email" required>	
					</div>

					<div class="m-3">
						<label>Nombre</label>
						<input class="form-control" type="text" name="nombre" required>	
					</div>

					<div class="m-3">
						<label>Edad</label>
						<input class="form-control" type="number" name="edad" required> 	
					</div>					
					
					<div class="m-3">
						<label>Facultad</label>

						<select class="custom-select" id="facultades" required>
                
			                <option selected>- Elegí una facultad -</option>
			                <option value="1">Facultad de Ciencias Exactas</option>
			                <option value="16">Facultad de Ciencias Veterinarias</option>
			                <option value="11">Facultad de Ciencias Económicas</option>
			                <option value="12">Facultad de Ciencias Humanas</option>
			                <option value="4">Facultad de Agronomía</option>
			                <option value="19">Facultad de Arte</option>
			                <option value="21">Facultad de Ciencias de la Salud</option>
			                <option value="15">Facultad de Ciencias Sociales</option>
			                <option value="20">Facultad de Derecho</option>
			                <option value="17">Facultad de Ingeniería</option>

                        </select>

					</div>

					<div class="m-3">
						<label>Carrera <small>(opcional)</small></label>
						<input class="form-control" type="text" name="carrera">	
					</div>

					<div class="m-3">
						<label>Contraseña</label>
						<input class="form-control" type="password" name="password">	
					</div>

					<div class="m-3">
						<label>Repetir Contraseña</label>
						<input class="form-control" type="password" name="password">
					</div>
					

				</div>

				<div class="container-flex text-center m-3 mt-4 pb-5">
					<button class="btn btn-block btn-lg btn-danger shadow-sm">Continuar <i class="fas fa-chevron-right"></i></button>
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