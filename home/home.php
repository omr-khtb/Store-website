<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- from here just form the POP_UP -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- the above link have deleted the color of the body -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- this is a library for a login icon -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="../fav.png">
    <title>Fatla</title>
    <script src="../darkmode.js"></script>
    <link rel="stylesheet" href="../darkmode.css">


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

    <?php
    $con = mysqli_connect("localhost", "id20069586_fatlaa", "t2STseJ(Gk2S*%By", "id20069586_fatla");
    ?>
    <header class="wrapper">
        <div class="Nav_Bar">
            <div class="Nav_Logo">
                <img src="./imgs/Logo.JPG" alt="logo">
            </div>
            <div class="Nav_Menu">
                <ul class="menu">
                <li> <a id="dark" onclick="dark()"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></a></li>

                    <li><a href="./home.php">Home</a></li>
                    <li><a href="../aboutus/about.php">About</a></li>
                    <li><a href="../products/product.php">Products</a></li>
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
   
    <p id="dark" style="color:black; font-size:larger">Have you heared of our products yet? check them out!</p>


    <div class="Products" onclick="location.href='../products/product.php';">
        <div class="Hoodie">
            <img src="./imgs/IMG_5660.jpg" alt="">
            <div class="cover cover1">
                <div class="texttt">
                    <p>HOODIES</p>
                </div>
            </div>
        </div>
        <div class="Stickers">
            <img src="./imgs/IMG_5662.jpg" alt="">
            <div class="cover cover2">
                <div class="texttt">
                    <p>Stickers</p>
                </div>
            </div>
        </div>
        <div class="Bags">
            <img src="./imgs/IMG_5665.jpg" alt="">
            <div class="cover cover3">
                <div class="texttt">
                    <p>Bags</p>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_COOKIE["emaill"])) {
        echo '   <div class="sing">
                     <p>Log out? :( </p>
                       <div class="box-1">
                          <div class="btn btn-one">

                          </div>
                        </div>
                   </div>
                   
                   <form action="../configg.php" method="post">
                   <button id="btnnn" type="submit" name="logout" value= "logout">logout</button>
                  <button id="btnnn" type="submit" name="delete" value="delete account" style="margin="20px">delete</button>
             </form>
                ';
    } else {


        echo '<div class="sing">
                <p>dont have an account!</p>
                   <div class="box-1">
                      <div class="btn btn-one">
                         <form action="../index.php">
                            <button id="btnnn" onclick="window.location.href="../index.php">Sign Up</button>
                          </form>
                      </div>
                    </div>
              </div>';
    }
    ?>
    </div>
    </div>
    <!-- here is the footer -->
    
    <div>
        <footer>
            <div class="footer-content">
                <h3>Fatla</h3>
                <p>Join us on socials!</p>
                <div class="socials">
                    <a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
                    <a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
                    <a href="http://www.google.com"><i class="fa fa-google-plus"></i></a>
                    <a href="http://www.youtube.com"><i class="fa fa-youtube"></i></a>
                    <a href="http://www.linkedin.com"><i class="fa fa-linkedin-square"></i></a>


                </div>
                <div  style=" margin:auto;margin-left:42%;margin-top:15px;">
                    <div class="mapouter" >
                        <div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=msa&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe><br>
                        </div>
                    </div>
                </div>
        </footer>
        
    </div>
    <script src="./home.js"></script>
    <script src="../darkmode.js"></script>
</body>

</html>