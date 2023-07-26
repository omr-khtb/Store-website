<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="Contact_Us.css">
    <link rel="icon" type="image/x-icon" href="../fav.png">
    <script src="Contact_Us.js"></script>
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
    <div class="background">
        <div class="container">
            <div class="palatte"></div>
            <div class="screen">
                <div class="screen-header">
                    <div class="screen-header-left">
                        <div class="screen-header-button close"></div>
                        <div class="screen-header-button maximize"></div>
                        <div class="screen-header-button minimize"></div>
                    </div>
                    <div class="screen-header-right">
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                    </div>
                </div>
                <div class="screen-body">
                    <div class="screen-body-item left">
                        <div class="app-title">
                            <span>CONTACT</span>
                            <span>US</span>
                        </div>
                        <div class="app-contact">CONTACT INFO : +20 101 022 8533</div>
                    </div>
                    <div class="screen-body-item">
                        <div class="app-form">
                            <form action="./config.php" method="post" onsubmit="return Validate();">
                                <div class="app-form-group">
                                    <input class="app-form-control" id="Name" placeholder="Name" required name="Name">
                                </div>
                                <div class="app-form-group">
                                    <input class="app-form-control" id="E_Mail" placeholder="E-Mail" required name="EMail">
                                </div>
                                <div class="app-form-group">
                                    <input class="app-form-control" id="Contact" placeholder="Contact Number" required name="Contact">
                                </div>
                                <div class="app-form-group message">
                                    <input class="app-form-control" id="Message" placeholder="Message" required name="Message">
                                </div>
                                <div class="app-form-group buttons">
                                    <button type="submit" class="app-form-button" name="Send" value="Send">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="palatte2"></div>
        </div>
    </div>
</body>

</html>