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
        <a>Skincare store</a>

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

        <h2>#let's_talk</h2>
        <p>LEAVE A MESSAGE, We love to hear from you!</p>

    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency location or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>150 kampuchea krom street TK Phnom Penh</p>
                </li>
                <li>
                    <i class="fal fa-envelope"></i>
                    <p>Contact@example.com</p>
                </li>
                <li>
                    <i class="fal fa-phone-alt"></i>
                    <p>contact@example.com</p>
                </li>
                <li>
                    <i class="fal fa-clock"></i>
                    <p>Monday to Saturday: 9:00am to 16pm</p>
                </li>

            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.7412542918746!2d104.89551077492001!3d11.
            570397488630801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109517388680e15%3A0x63057e6682968f5!2sInstitute%20of%20Technology%20of%20Cambodia!5e0!3m2!1sen!2skh!4v1687357915299!5m2!1sen!2skh"
             width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </section>

    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="E-mail">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message">

            </textarea>
            <button class="normal">Submit</button>

        </form>

        <div class="people">
            <div>
            <img src="img/jenniekim.jpg" alt="">
            <p><span>Kim Jennie</span>  Phone: + 000 123 000 77 88
            <br> Email: contaact@example.com</p>
            </div>
            <div>
            <img src="img/jisoo.jpg" alt="">
            <p><span>Kim Jisoo</span>  Phone: + 000 123 000 77 88
            <br> Email: contaact@example.com</p>
            </div>
            <div>
            <img src="img/rosie.jpg" alt="">
            <p><span>Park Cheyoung</span>Phone: + 000 123 000 77 88
            <br> Email: contaact@example.com</p>
            </div>
            <div>
                <img src="img/lalisa.jpg" alt="">
                <p><span>Lalisa Monoban</span>  Phone: + 000 123 000 77 88
                <br> Email: contaact@example.com</p>
                </div>

        </div>
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
                <img src="img/pay/app.jpg" alt="">
                <img src="imgs/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="imgs/pay/pay.png" alt="">
        </div>

    </footer>

    <script src="script.js"></script>
</body>
</html>
