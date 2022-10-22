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

	.chat-profile-pic {
		height: 30px;
		width: 30px;
		object-fit: cover;
	    overflow: hidden;
	}

	.message-row{
		font-size: 15px;
	}


	.chat-message{
		text-align: center;
	}

	.online-green{
		color: #0b0;
		font-size: 8px;
	}

	.unread-red{
		color: #fd2121b8;;
		font-size: 10px;
	}

	.send-btn{
		width: 40px;
		height: 40px;
	}

	.text-box{
		border-top: solid #00000029 1px;
	}

	.fa-center { line-height: inherit!important; vertical-align: middle; }

</style>

</head>
<body>


	<div class="container-flex fixed-top bg-white p-3 shadow-sm" id="navbar">		
		<a href="conversations.php" class="text-secondary text-center"><i class="fas fa-chevron-left mr-1"></i>Kurt Kobain</a>
	</div>


	<div class="container-flex mr-2 ml-2">
	

		<div class="message-row container row mb-3 mt-3">
			<div class="align-items-center">
				<img class="chat-profile-pic rounded-circle" src="imgs/14.jpg">
			</div>
			<div class="container-flex bg-primary rounded-lg ml-1 pr-3 pt-2 shadow-sm text-white">
				<p class="ml-3 mt-1">holaa</p>
			</div>
		</div>


		<div class="message-row container-flex mb-3 mt-3">
			<div class="float-right bg-light rounded-lg shadow-sm">
				<p class="ml-3 mt-1 pr-3 pt-2">q ondaa :) </p>
			</div>
		</div>


		<div class="message-row container row mb-3 mt-3">
			<div class="align-items-center">
				<img class="chat-profile-pic rounded-circle" src="imgs/14.jpg">
			</div>
			<div class="container-flex bg-primary rounded-lg ml-1 pr-3 pt-2 shadow-sm text-white">
				<p class="ml-3 mt-1">i don't have a gun </p>
			</div>
		</div>


		<div class="message-row container-flex mb-3 mt-3">
			<div class="float-right bg-light rounded-lg shadow-sm">
				<p class="ml-3 mt-1 pr-3 pt-2">noo curco no lo haga :( </p>
			</div>
		</div>

		
						
			

	</div>

	<div class="container-flex fixed-bottom bg-white p-2 row text-box">

		<div class="col-10">
			<input class="form-control" type="text" name="text" >
		</div>
		<div class="col-2">
			<button class="send-btn btn btn-white"><i class="fas fa-paper-plane fa-center"></i></button>
		</div>
		
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