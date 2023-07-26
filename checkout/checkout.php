<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="checkout.css">
    <link rel="icon" type="image/x-icon" href="../fav.png">
    <title>CheckOut</title>
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
                <img src="./imgs/Logo.JPG" alt="logo">
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
                    <button id="dark" onclick="dark()"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></button>

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
<style>img[alt="www.000webhost.com"]{display:none;}</style>
    <div class="container">
        <form action="https://accept.paymobsolutions.com/standalone/?ref=p_LRR2Rkh5VVV0UUtUYU14QkJLZzgySGVLUT09X0lsNnIwa0IvNm5VZTlJcW1lM2JYK3c9PQ">
            <div class="row">
                <div class="col">
                    <h3 class="title">billing address</h3>
                    <div class="inputBox">
                        <span>full name :</span>
                        <input type="text">
                    </div>
                    <div class="inputBox">
                        <span>email :</span>
                        <input type="email" placeholder="ahmed@gmail.com">
                    </div>
                    <div class="inputBox">
                        <span>address :</span>
                        <input type="text" placeholder="room - street - locality">
                    </div>
                    <div class="inputBox">
                        <span>city :</span>
                        <input type="text">
                    </div>
                    <div class="flex">
                        <div class="inputBox">
                            <span>state :</span>
                            <input type="text" placeholder="Egypt">
                        </div>
                        <div class="inputBox">
                            <span>zip code:</span>
                            <input type="text" placeholder="123 456">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3 class="title">Payment</h3>
                    <div class="inputBox">
                        <span>cards accepted :</span>
                        <img src="/Checkout/imgs/card_img.png" alt="">
                    </div>
                    <div class="inputBox">
                        <span>Name on Card</span>
                        <input type="text">
                    </div>
                    <div class="inputBox">
                        <span>email :</span>
                        <input type="email" placeholder="AMO@gmail.com">
                    </div>
                    <div class="inputBox">
                        <span>Credit Card Number:</span>
                        <input type="text" placeholder="1111-2222-3333-4444">
                    </div>
                    <div class="inputBox">
                        <span>Exp Month</span>
                        <input type="text" placeholder="">
                    </div>
                    <div class="flex">
                        <div class="inputBox">
                            <span>Exp Year</span>
                            <input type="text" placeholder="Egypt">
                        </div>
                        <div class="inputBox">
                            <span>CVV</span>
                            <input type="text" placeholder="123 456">
                        </div>
                    </div>
                </div>
                <input type="submit"  type="https://accept.paymobsolutions.com/standalone/?ref=p_LRR2Rkh5VVV0UUtUYU14QkJLZzgySGVLUT09X0lsNnIwa0IvNm5VZTlJcW1lM2JYK3c9PQ" name="https://accept.paymobsolutions.com/standalone/?ref=p_LRR2Rkh5VVV0UUtUYU14QkJLZzgySGVLUT09X0lsNnIwa0IvNm5VZTlJcW1lM2JYK3c9PQ" value="proceed to checkout" class="submit-btn">
        </form>
    </div>

    
</body>

</html>