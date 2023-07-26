<!DOCTYPE html>
<html>

<head>
	<title>Slide Navbar</title>
	<script src="./pass.js"></script>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<link rel="icon" type="image/x-icon" href="./fav.png">
	<meta name="google-signin-client_id" content="378547979214-ebs9qgfhr7u3743eondbj5tth47i19sl.apps.googleusercontent.com">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>img[alt="www.000webhost.com"]{display:none;}</style>
<body>
<header class="wrapper">
			<div class="Nav_Bar">
				<div class="Nav_Logo">
					<img src="./Logo.JPG" alt="logo">
				</div>
				<div class="Nav_Menu">
					<ul class="menu">
						<li><a href="./home/home.php">Home</a></li>
						<li><a href="./aboutus/about.php">About</a></li>
						<li><a href="#">Hoodies</a></li>
						<li><a href="./checkout/checkout.php">Checkout</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="./contactus/contact.php">Contact US</a></li>
						<?php
						$con = mysqli_connect("localhost", "id20069586_fatlaa", "t2STseJ(Gk2S*%By", "id20069586_fatla");
						if (isset($_COOKIE["emaill"])) {
							echo '<li><a href="#"><i class="fa fa-fw fa-user" class="animate"></i>' . $_COOKIE["user"];
							'</a></li>';
						} else {
							echo '<li><a href="./index.php"><i class="fa fa-fw fa-user" class="animate"></i> Login</a></li>';
						}
						?>
					</ul>
				</div>
			</div>
		</header>
	<div id="main2">
		<div>
			<div class="g-signin2" data-onsuccess="onSignIn"></div>
			<div class="data">
				<p>Name</p>
				<p id="name"></p>
				<p>Image</p>
				<img id="image" class="rounded-circle" width="100" height="100" />
				<p>Email</p>
				<p id="email"></p>
				<button type="button" class="btn btn-danger" onclick="signOut();">Sign Out</button>
			</div>
		</div>
	</div>


	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<script src="./login.js"></script>
<script src="./pass.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</html>