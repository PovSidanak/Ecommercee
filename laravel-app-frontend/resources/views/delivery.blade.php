<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project1</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />




</head>
<body>

    <section id="header">
        <a style="color: white">Skincare store</a>

        <div>
            <ul id="navbar">
                <li><a href="http://127.0.0.1:5173/homepage">Back</a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>

            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="page-header" class="about-header">
        <h2>#WelcomeHere</h2>
        <p>View Your Delivery</p>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For newsletter</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button onclick="window.location.href='http://127.0.0.1:5173/SignUp';">Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address: </strong> Toulkok,Phnom Penh</p>
            <p><strong>Phone: </strong> 071 123 345</p>
            <p><strong>Hours: </strong> 10:00 - 18:00, Mon- Sat</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>

        </div>
        <div class="col">
            <h4>About</h4>
            <a href="http://127.0.0.1:5173/about">About us</a>
            <a href="http://127.0.0.1:5173/delivery">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="http://127.0.0.1:5173/contact">Contact Us</a>
        </div>
        <div class="col">
            <h4> My Account</h4>
            <a href="http://127.0.0.1:5173/login">Sign In</a>
            <a href="http://127.0.0.1:5173/cart">View cart</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="imgs/pay/app.jpg" alt="">
                <img src="imgs/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="imgs/pay/pay.png" alt="">
        </div>

    </footer>

    <script src="script.js"></script>
</body>
</html>
