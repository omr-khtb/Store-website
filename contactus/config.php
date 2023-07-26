<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Contact_Us.css">
    <title>A Basic HTML5 Template</title>
    <meta name="description" content="technology">
    <meta name="author" content="SitePoint">

    <link rel="icon" href="/favicon.ico">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--nav seach bar-->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../fav.png">
    <script src="../darkmode.js"></script>
    <link rel="stylesheet" href="../darkmode.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<style>img[alt="www.000webhost.com"]{display:none;}</style>
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
<body>
    <header class="wrapper">
        <div class="Nav_Bar">
            <div class="Nav_Logo">
                <img src="./img/Logo.JPG" alt="logo">
            </div>
            <div class="Nav_Menu">
                <ul class="menu">
                    <li> <a id="dark" onclick="dark()"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></a></li>
                    <li><a href="../home/home.php">Home</a></li>
                    <li><a href="../aboutus/about.php">About</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="../checkout/checkout.php">Checkout</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="../contactus/contact.php">Contact US</a></li>

                    <?php
                   $con = mysqli_connect("localhost", "id20069586_fatlaa", "t2STseJ(Gk2S*%By", "id20069586_fatla");
                    if (isset($_COOKIE["emaill"])) {
                        echo '<li><a href="#"><i class="fa fa-fw fa-user" class="animate"></i>' . $_COOKIE["user"];
                        '</a></li>';
                    } else {
                        echo '<li><a href="../index.php"><i class="fa fa-fw fa-user" class="animate"></i> Login</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </header>

</body>

</html>
<?php
                   $con = mysqli_connect("localhost", "id20069586_fatlaa", "t2STseJ(Gk2S*%By", "id20069586_fatla");
    if ($con->connect_error) {
		echo "<h1>NOT Connected</h1>";
	} else {
        $Name = $_POST["Name"];
        $Phone_Number = $_POST["Contact"];
        $Message = $_POST["Message"];
        $EMail = $_POST["EMail"];
        $SQL = "insert into contact(Namec,emailc, Phone, Message)
            values (' $Name ','$EMail' , '$Phone_Number' , '$Message ')";
        $run = mysqli_query($con,$SQL);
        if ($run) {
            echo "<h1>We have received your feedback! Thank you for contacting.</h1>";
            $file = fopen("names.txt", "a");
            fwrite($file, "name : " . $Name . "\n");
            fwrite($file, "E-mail: " . $EMail . "\n");
            fwrite($file, "phone: " . $Phone_Number . "\n");
            fwrite($file, "message: " . $Message . "\n");
            fclose($file);
        } else {
            echo "Error: " . $SQL . "<br>" . $Conn->error;
        }
    }

?>