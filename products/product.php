<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <!--nav-->
    <div id="nav">
        <div class="search-container">
            <input type="text" name="search" placeholder="Search..." class="search-input">
            <a href="#" class="search-btn">
                <i class="fas fa-search"></i>
            </a>
        </div>
    </div>

    <!--product 2-->
    <div class="producthangerright">
        <div id="container" class="right">

            <div class="product-info">
                <h1>socks</h1>
                <hr>
                <span class="hint-star star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </span>

                <!--product-explaaination-->
                <p class="information">"Let's spread the joy , here is your hoodie , the most awaited cloth of
                    the
                    year. hoodies is what one needs the most. Here is the hoodie block which will enhance
                    your
                    winter creating experience.</p>
                <!--BUTTONS-->
                <div class="control">
                    <form action="../checkout/checkout.php">
                        <button class="btn" type="submit">
                            <span class="price">$17</span>
                            <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                            <span class="buy">Get now</span>
                        </button>
                    </form>

                </div>

            </div>
            <!--PICS-->
            <div class="product-image">

                <img src="./img/socks.png" alt="AI">
                <!--product-info-->
                <div class="info">
                    <h2> Description</h2>
                    <ul>
                        <li><strong>Material : </strong>cotton </li>
                        <li><strong>Language : </strong>English</li>
                        <li><strong>Decoration: </strong>stylish</li>
                        <li><strong>type: </strong>Eco-Friendly</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <br>
    <!--product 1-->
    <div class="producthanger">
        <div id="container">

            <div class="product-info">
                <h1>Bags</h1>
                <hr>
                <span class="hint-star star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </span>

                <!--product-explaaination-->
                <p class="information">" Let's spread the joy , here is your hoodie , the most awaited cloth of
                    the
                    year. hoodies is what one needs the most. Here is the hoodie block which will enhance
                    your
                    winter creating experience.</p>
                <!--BUTTONS-->
                <div class="control">
                    <form action="../checkout/checkout.php">
                        <button class="btn" type="submit">
                            <span class="price">$250</span>
                            <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                            <span class="buy">Get now</span>
                        </button>
                    </form>

                </div>

            </div>
            <!--PICS-->
            <div class="product-image">

                <img src="./img/totebag.png" alt="Bag">
                <!--product-info-->
                <div class="info">
                    <h2> Description</h2>
                    <ul>
                        <li><strong>Material : </strong>cotton </li>
                        <li><strong>Language : </strong>English</li>
                        <li><strong>Decoration: </strong>stylish</li>
                        <li><strong>type: </strong>Eco-Friendly</li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
    <Br>
    <!--product 1-->
    <div class="producthanger">
        <div id="container">

            <div class="product-info">
                <h1>Hoodies</h1>
                <hr>
                <span class="hint-star star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </span>

                <!--product-explaaination-->
                <p class="information">" Let's spread the joy , here is your hoodie , the most awaited cloth of
                    the
                    year. hoodies is what one needs the most. Here is the hoodie block which will enhance
                    your
                    winter creating experience.</p>
                <!--BUTTONS-->
                <div class="control">
                    <form action="../checkout/checkout.php">
                        <button class="btn" type="submit">
                            <span class="price">$250</span>
                            <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                            <span class="buy">Get now</span>
                        </button>
                    </form>
                </div>

            </div>
            <!--PICS-->
            <div class="product-image">

                <img src="../home/imgs/IMG_5663.jpg" alt="AI">
                <!--product-info-->
                <div class="info">
                    <h2> Description</h2>
                    <ul>
                        <li><strong>Material : </strong>cotton </li>
                        <li><strong>Language : </strong>English</li>
                        <li><strong>Decoration: </strong>stylish</li>
                        <li><strong>type: </strong>Eco-Friendly</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
    <br><br>
    <div>
        <footer>
            <div class="footer-content">
                <h3>Fatla</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo iste corrupti doloribus
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