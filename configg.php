<!DOCTYPE html>

<head>
	<title>config</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<style>img[alt="www.000webhost.com"]{display:none;}</style>
<body>

	<?php
	//connecting database
	ob_start();
	$con = mysqli_connect("localhost", "id20069586_fatlaa", "t2STseJ(Gk2S*%By", "id20069586_fatla");
	//checking connection



	if ($con->connect_error) {
		echo "<h1 style='color:white'>NOT Connected</h1>";
	} else {
		echo "<h1 style='color:white'>Connected </h1><br>";
		if (isset($_COOKIE["emaill"]) && !isset($_POST['logout']) && !isset($_POST['delete'])) // $_COOKIE is a variable and login is a cookie name 
		{
			echo "<p style='color:white'>you are logged in already,<br> You are being redirected</p>";
			echo $_COOKIE["user"];
			header("refresh:5;url=./home/home.php");
			//setcookie ("users","",time()- 3600, '/');
			//setcookie("emaill", "", time()-3600, '/');
			//setcookie("pswd", "", time()-3600, '/');
		} else {
			//checks if it is a signup request
			if (isset($_POST['signup'])) {
				extract($_REQUEST);
				//checks if the user already exists
				$query = mysqli_query($con, "select emails from persons where emails='$emails'");
				if (mysqli_num_rows($query) != 0) {
					echo " <p style='color:white'>Username already exists <p>";
				} else {
					//wrirte values in file
					$file = fopen("names.txt", "a");
					fwrite($file, "name : " . $users . "\n");
					fwrite($file, "E-mail: " . $emails . "\n");
					fwrite($file, "password: " . $pswds . "\n");
					fclose($file);
					//sql query o write in database
					$add = "insert into persons (names, emails, passes)
			                values ('$users','$emails','$pswds');";
					//write in database

					$run_1 = mysqli_query($con, $add);
					//checks if quesry successed 
					if ($run_1) {
						echo "<h1>Your account was created successfully! Welcome :), you are being redirected.</h1>";
						setcookie("user", $users, time() + 3600, '/');
						setcookie("emaill", $emails, time() + 3600, '/');
						setcookie("pswd", $pswds, time() + 3600, '/');
						header("refresh:5;url=./home/home.php");
					} else {
						echo "<h1 style='color:white;'>Not Signed up :(</h1>";
					}
				}
			}

			if (isset($_POST['signin'])) {
				extract($_REQUEST);
				$query = mysqli_query($con, "select* from persons where emails='$emaill'and passes='$pswd'");
				if (mysqli_num_rows($query) != 0) {
					echo "Loged in";

					if (!empty($_POST["remember"])) {
						//setcookie ("emaill",$_POST["emaill"],time()+ 3600);
						echo "Cookies Set Successfuly you are being redirected";
					} else {
						echo "Choose remember me next time for skipping the login step,you are being redirected";
					}
					$usercookie = mysqli_query($con, "select names from persons where emails='$emaill'and passes='$pswd'");
					$results = mysqli_fetch_array($usercookie);
					ob_start();
					setcookie("user", $results['names'], time() + 3600, '/');
					setcookie("emaill", $_POST["emaill"], time() + 3600, '/');
					setcookie("pswd", $_POST["pswd"], time() + 3600, '/');
					header("refresh:5;url=./home/home.php");
					ob_end_flush();
				} else {
					echo "Username does not exist or wrong password";
				}
			}
			if (isset($_POST['logout'])) {
			    
				setcookie("user", "hi", time() - 3600, '/');
				setcookie("emaill", "hi", time() - 3600, '/');
				setcookie("pswd", "hi", time() - 3600, '/');
				header("refresh:5;url=./index.php");
				echo '<h1 style="color:white;">Your have logged out, you are being redirected';
			}
			if (isset($_POST['delete'])) {

				$mail = $_COOKIE['emaill'];
				$passs = $_COOKIE['pswd'];
				$query = mysqli_query($con, "delete from persons where emails='$mail' and passes='$passs' ");
				setcookie("user", "hi", time() - 3600, '/');
				setcookie("emaill", "hi", time() - 3600, '/');
				setcookie("pswd", "hi", time() - 3600, '/');
				echo '<h1 style="color:white;">Your account Has been deleted it is bad to see you go :( you are being redirected';
				header("refresh:5;url=./index.php");
			}
		}
	}
ob_end_flush();
	?>
</body>


</html>