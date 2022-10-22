<?php 

session_start();

if(!isset($_SESSION["email"])){
	header("Location: login.php");
	exit;
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
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">

  	<link rel="manifest" href="manifest.json">

  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


<style type="text/css">
	
	body{
		font-family: 'Open Sans', sans-serif;
		background-color: #0000001a;
	}

	.keep-aspect{
		width:100%;
	    height:90vh;
	    object-fit: cover;
	    overflow: hidden;
	}

	.match-btn {
		width: 70px;
		height: 70px;
		font-size: 30px;
	}

	.online-green{
		color: #0b0;
		font-size: 8px;
	}
	.small-text{
		font-size: 15px;
		color: white;
		margin-top: -10px;
		text-shadow: 2px 2px 6px #000;
	}

	.name-text{
		font-size: 35px;
		font-family: 'Rubik', sans-serif;
		text-shadow: 2px 2px 6px #000;
	}

	.on-top{
		position: absolute;
		bottom: 15px;
		left: 16px;
		width: -moz-available;
		right: 16px;
	}

	.nav-buttons{
		font-size: 25px;
	}

	.fa-center { line-height: inherit!important; vertical-align: middle; }

	.bottom-nav{
		-webkit-box-shadow: 0px -4px 3px rgba(50, 50, 50, 0.23);
		-moz-box-shadow: 0px -4px 3px rgba(50, 50, 50, 0.23);
	}

	

</style>

</head>
<body>


	<!-- <div class="container-flex m-2">		
		<a href="settings.php" class="nav-buttons text-secondary"><i class="fas fa-gear"></i></a>
		<a href="conversations.php" class="nav-buttons text-secondary float-right"><i class="fas fa-comment"></i></a>
	</div> -->

	<div class="container-flex m-2">	
		
		<div style="position: relative;">
			
			<img class="keep-aspect rounded-lg shadow" src="imgs/11.jpg" id="profile_image" onclick="moveSlides()">
			
			<div class="container-flex on-top">
				
					<p class="name-text text-white">Kurt Kobain | 21</p>
					<p class="small-text">Facultad de Ciencias Exactas - TUDAI</p>
					<p class="small-text"><i class="online-green fas fa-circle fa-center"></i> En el campus</p>

					<button class="match-btn btn btn-danger shadow rounded-circle float-left"><i class="fas fa-xmark"></i></button>
					<button class="match-btn btn btn-success shadow rounded-circle float-right"><i class="fas fa-check"></i></button>
					
			</div>
		</div>
	</div>

	

	<div class="container-flex p-2 pl-3 pr-3 fixed-bottom bg-white bottom-nav text-center">
		<a href="index.php" class="nav-buttons text-secondary mr-5"><i class="fas fa-fire"></i></a>
		<a href="settings.php" class="nav-buttons text-secondary mr-3 ml-3"><i class="fas fa-gear"></i></a>
		<a href="conversations.php" class="nav-buttons text-secondary ml-5"><i class="fas fa-comment"></i></a>
	</div>

</div>

</body>

<script>
    
function moveSlides() {
	
	$('#profile_image').attr('src','imgs/14.jpg');
}
	
	

</script>

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