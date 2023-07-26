<!DOCTYPE html>
<html>

<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<script src="./pass.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
	<link rel="icon" type="image/x-icon" href="./fav.png">

</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/63b6e6a8c2f1ac1e202be1f8/1gm17a1e0';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<style>img[alt="www.000webhost.com"]{display:none;}</style>
<body>
	<div id="all">
		<header class="wrapper">
			<div class="Nav_Bar">
				<div class="Nav_Logo">
					<img src="./Logo.JPG" alt="logo">
				</div>
				<div class="Nav_Menu">
				    
					<ul class="menu">
						<li><a href="./home/home.php">Home</a></li>
						<li><a href="./aboutus/about.php">About</a></li>
						<li><a href="./products/product.php">Products</a></li>
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
		<div id="allnonav">
			<div class="main" id="main" style="display:none;">
				<p style="color: white; text-align:center" id="message"></p>
				<input type="checkbox" id="chk" aria-hidden="true">
				<div class="signupp">
					<form onsubmit="return validate();" action="configg.php" method="post">
						<label for="chk" aria-hidden="true">Sign up</label>
						<input id="userss" type="text" name="users" placeholder="User" required>
						<input id="emailss" type="email" name="emails" placeholder="Email" required>
						<input id="pswdss" type="password" name="pswds" placeholder="pass" required>
						<div style="display: inline; width: 20%;;margin: 0%;padding: 0%; font-size: 15px;">
							<p style="color:white;text-align:center;margin: 0%;padding: 0%;display: inline;">
								<input type="checkbox" style="text-align:center;margin: 0%;padding: 0%;display: inline;" onclick="show()">Show Password
							</p>
						</div>
						<input type="submit" name="signup" value="sign up" class="submit">

					</form>
				</div>

				<div class="loginn">
					<form action="configg.php" method="post">
						<label for="chk" aria-hidden="true">Login</label>
						<input type="email" name="emaill" placeholder="email" required>
						<input id="pswd" type="password" name="pswd" placeholder="pass" required>
						<div style="display:inline-flex;padding:0px; margin:0px;">
							&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
							<p style="font-size:10px; text-align:center; margin-left: 20px;" style="text-align:center;margin: 0%;padding: 0%;display: inline;"><input type="checkbox" onclick="show2()">Show Password</p>
							&nbsp;&nbsp;&nbsp;<p style="font-size:10px; text-align:center;"><input type="checkbox" name="remember" /> Remember me</p>
						</div>
						<input type="submit" name="signin" value="sign in" class="submit">
					</form>
				</div>

			</div>
			<div style="margin-top: 20%;">
				<div class="google-btn" onclick="location.href='./googlesignin.php';">
					<div class="google-icon-wrapper">
						<img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" />
					</div>
					<p class="btn-text"><b>Sign in with google</b></p>
				</div>
				<br>
				<div id="fb-root"></div>
				<div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false"></div>
			</div>
		</div>
	</div>

</body>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0&appId=719105989627180&autoLogAppEvents=1" nonce="uT1P2W3m"></script>
<script>
	window.fbAsyncInit = function() {
		FB.init({
			appId: '{your-app-id}',
			cookie: true,
			xfbml: true,
			version: '{api-version}'
		});

		FB.AppEvents.logPageView();

	};

	function checkLoginState() {
		FB.getLoginStatus(function(response) {
			statusChangeCallback(response);
		});
	}
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {
			return;
		}
		js = d.createElement(s);
		js.id = id;
		js.src = "https://connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	FB.getLoginStatus(function(response) {
		statusChangeCallback(response);
	});
</script>
<script src="./login.js"></script>
<script src="./pass.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</html>