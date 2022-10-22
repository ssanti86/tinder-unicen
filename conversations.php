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
		background-color: #0000001a;
	}

	.chat-profile-pic {
		height: 70px;
		width: 70px;
		object-fit: cover;
	    overflow: hidden;
	}

	.chat-row{
		border-top: solid #8080802b 1px;
		border-bottom: solid #8080802b 1px;
	}

	.chat-row:hover{
		background-color: #8080801c;
	}

	.chat-message{
		margin-top: -10px;
		font-size: 12px;
	}

	.online-green{
		color: #0b0;
		font-size: 8px;
	}

	.unread-red{
		color: #fd2121b8;;
		font-size: 10px;
	}

	.fa-center { line-height: inherit!important; vertical-align: middle; }

	.bottom-nav{
		-webkit-box-shadow: 0px -4px 3px rgba(50, 50, 50, 0.23);
		-moz-box-shadow: 0px -4px 3px rgba(50, 50, 50, 0.23);
	}

	.nav-buttons{
		font-size: 25px;
	}

	.title{
		color: #242424;
		font-size: 20px;
	}

</style>

</head>
<body>

	<div class="container-flex">
		

		<p class="m-3 text-center title">Mensajes</p>

		<div class="chat-row bg-white container-flex shadow-sm p-3 mb-1" onclick="openChat(1)">
			<div class="row">
				<div class="ml-3 align-items-center">
					<img class="chat-profile-pic rounded-circle" src="imgs/photo.jpg">
				</div>
				<div clas="container-flex">
					<p class="ml-3 mt-2"><i class="online-green mr-1 fas fa-circle fa-center"></i>Asuka Langley</p>
					<p class="chat-message ml-3"><i class="text-secondary fas fa-share fa-center mr-1"></i>sos down?</p>	
				</div>

			</div>
		</div>

		<div class="chat-row bg-white container-flex shadow-sm p-3 mb-1">
			<div class="row">
				<div class="ml-3 align-items-center">
					<img class="chat-profile-pic rounded-circle" src="imgs/14.jpg">
				</div>
				<div clas="container-flex">
					<p class="ml-3 mt-2">Kurt Kobain</p>
					<p class="chat-message ml-3"></i>i don't have a gun</p>	
				</div>
			</div>
		</div>

		<div class="chat-row bg-white container-flex shadow-sm p-3 mb-1">
			<div class="row">
				<div class="ml-3 align-items-center">
					<img class="chat-profile-pic rounded-circle" src="imgs/pic.jpg">
				</div>
				<div clas="container-flex">
					<p class="ml-3 mt-2"><i class="online-green mr-1 fas fa-circle fa-center"></i>Peruano</p>
					<p class="chat-message ml-3"><i class="unread-red fas fa-circle-dot fa-center mr-1"></i>Hola linda como estas todo bien????????????</p>	
				</div>
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

<script type="text/javascript">
	
	function openChat(id){
		window.location.href='chat.php?id='+id;
	}

</script>

</html>