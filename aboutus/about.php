<!DOCTYPE html>
<html>
<style>img[alt="www.000webhost.com"]{display:none;}</style>
<head>
    <title>
        FATLA
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="about us.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" type="image/x-icon" href="../fav.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- from here just form the POP_UP -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- the above link have deleted the color of the body -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- this is a library for a login icon -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="../darkmode.js"></script>
    <link rel="stylesheet" href="../darkmode.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <div class="palatte"></div>
    <div class="Content">
        <div class="Who_Are_We">
            <div class="Information">
                <h1>
                    Who Are We
                </h1>
                <p id="Cont" style="text-decorstion:none;">
                    We are Fatla production. our products are known for the high quality and the stylish look. The products are competeing
                    to be on the top list. That is why we are a source of trust to our creative customers that like to get out of the box.
                </p>
            </div>
            <div class="Picture">
                <img id="Logo" src="./img/Logo.JPG" alt="Logo">
            </div>
        </div>
        <div class="Ahmed">
            <div class="Information">
                <h1>
                    The hoodies
                </h1>
                <p id="Cont">
                    The hoodies is such a trendy style nowadays. That is why we are trying to extract the best experience out of it. Enjoy the
                    smoothness and warmness from the inside and the stylish look from the outside.
                </p>
            </div>
            <div class="Picture">
                <img id="Logo" src="./img/ahmed.jpg" alt="Ahmed Abd El-Moniem">
            </div>
        </div>
        <div class="palatte2"></div>
        <div class="palatte"></div>
        <div class="Mazen">
            <div class="Information">
                <h1>
                    Shirts
                </h1>
                <p id="Cont">
                    Shirts are the oldest type of clothes since the mankind started to care about clothes the first thing That
                    came to their minds were shirts. our shirts are friendly and we believe it brings luck.
                </p>
            </div>
            <div class="Picture">
                <img id="Logo" src="./img/mazen.jpg" alt="Mazen Ashraf">
            </div>
        </div>
        <div class="Omar">
            <div class="Information">
                <h1>
                    Printed shirts
                </h1>
                <p id="Cont">
                    We never forgot our creative customers. We always appreciate and adore their art. it was an important role for a high quality
                    clothes making company to make a wole section for custom prints. Be creative.. get out of the box,, and we make your dreams
                    come true!
                </p>
            </div>
            <div class="Picture">
                <img id="Logo" src="./img/omar.jpg" alt="Omar Khatab">
            </div>
        </div>
    </div>
    <div class="palatte2"></div>
    <div>
        <footer>
            <div class="footer-content" style="height:60px">
                <h3>Fatla</h3>
                <p>Join us on socials!
                    odio sed!</p>
                <div class="socials">
                    <a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
                    <a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
                    <a href="http://www.google.com"><i class="fa fa-google-plus"></i></a>
                    <a href="http://www.youtube.com"><i class="fa fa-youtube"></i></a>
                    <a href="http://www.linkedin.com"><i class="fa fa-linkedin-square"></i></a>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>