<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Medicine Page</title>
    <link rel="stylesheet" type="text/css" href="med.css">
    <link href="https://fonts.googleapis.com/css2?family=Andika:ital,wght@0,400;0,700;1,400;1,700&family=Truculenta:opsz,wght@12..72,100..900&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header class="header">
<a href="#" class="logo">
            <img src="pic/logo.png">
        </a>
    <nav class="headbar">
        <a href="index.php">Home</a>
        <a href="med.php">Medicine</a>
        <a href="doc.php">Doctors</a>
        <a href="service.php">Service</a>
        <a href="contact.php">Contact</a>
        <?php if(isset($_SESSION["user"])){?>
            <a href="logout.php">Logout</a>
        <?php }else{?>
            <a href="index.php">Login</a>
        <?php }?>
    </nav>
    <div class="menubtn">
        <button>HelpDesk</button>
    </div>
    <div class="icon">
        <div class="fa fa-search" id="search-btn"></div>
        <div class="fa fa-shopping-cart" id="cart-btn"></div>
        <div class="fa fa-upload" id="up-btn"></div>
    </div>
    <form class="search-form">
        <input type="search" id="search-box" placeholder="Type Something..">
        <label for="search-box" class="fa fa-search"></label>
    </form>
    <div class="shopping-cart">
        <div class="box">
            <img src="pic/immunity.png">
            <i class="fa fa-trash"></i>
            <div class="content">
                <h3>ImmuneAid Capsules</h3>
                <span class="price">Rs.220/-</span>
            </div>
        </div>
        <div class="box">
            <img src="pic/cart3.png">
            <i class="fa fa-trash"></i>
            <div class="content">
                <h3>MadhuMoksha Vati</h3>
                <span class="price">Rs.399/-</span>
            </div>
        </div>
        <div class="box">
            <img src="cart3.png">
            <i class="fa fa-trash"></i>
            <div class="content">
                <h3>Kankasav Cough Syrup</h3>
                <span class="price">Rs.152/-</span>
            </div>
        </div>
    </div>
    <div class="upload-form">
        <input class="default-btn" type="file" hidden>
        <div class="btn">
            <button onclick="active()" class="custom-btn">Upload Prescription</button>
        </div>
        <div class="file-name">No File Chosen</div>
    </div>
</header>
<section class="top" id="top">
        <div class="container">
            <h1 class="heading">Ayurvedic Wellness</h1><hr>
        </div>
        <div class="box-container">
        <!--1-->     
        <div class="box">
            <div class="slide-img">
                <img src="pic/cart3.png">
                <div class="overlay">
                    <p>Ayurvedic Cough Syrup for bronchitis, cough.</p>
                    <a href="#" class="learn-btn">Learn more</a>
                </div>
            </div>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
            <div class="detail-box">
                <div class="type">
                    <a href="#">Kankasav Cough Syrup</a>
                    <span>New arrival</span>
                </div>
                <a href="#" class="price">Rs.152/-</a>
            </div>
            <a href="#" class="my-button" title="b-title">Order Now</a>
            <a href="#" class="my-button" title="b-title">Add to cart</a>
        </div>
        <!--2-->
        <div class="box">
            <div class="slide-img">
                <img src="pic/cart2.png">
                <div class="overlay">
                    <p>Controls blood sugar level and improves insulin performance.</p>
                    <a href="#" class="learn-btn">Learn more</a>
                </div>Shri Chyawan Madhumoksha Vati for Diabetes -60 Tab
            </div>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
            <div class="detail-box">
                <div class="type">
                    <a href="#">Shri Chyawan Madhumoksha Vati for Diabetes -60 Tab</a>
                    <span>Bestseller</span>
                </div>
                <a href="#" class="price">Rs.399/-</a>
            </div>
            <a href="#" class="my-button" title="b-title">Order Now</a>
            <a href="#" class="my-button" title="b-title">Add to cart</a>
        </div>
        <!--3-->
        <div class="box">
            <div class="slide-img">
                <img src="pic/immunity.png">
                <div class="overlay">
                    <p>Enhances Immunity and maintains the enregy level of body.</p>
                    <a href="#" class="learn-btn">Learn more</a>
                </div>
            </div>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
            <div class="detail-box">
                <div class="type">
                    <a href="#">ImmuneAid Capsules</a>
                    <span>Clinically Proven</span>
                </div>
                <a href="#" class="price">Rs.220/-</a>
            </div>
            <a href="#" class="my-button" title="b-title">Order Now</a>
            <a href="#" class="my-button" title="b-title">Add to cart</a>
        </div>
        <!--4-->
        <div class="box">
            <div class="slide-img">
                <img src="pic/med4.png">
                <div class="overlay">
                    <p>Effective in acidity, improves appetite, useful in Indigestion,hyperacidity.</p>
                    <a href="#" class="learn-btn">Learn more</a>
                </div>
            </div>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
            <div class="detail-box">
                <div class="type">
                    <a href="#">Avipattikar Churna, Ayurvedic Medicine For Hyper Acidity -60GM</a>
                    <span>Safe & Effective</span>
                </div>
                <a href="#" class="price">Rs.223/-</a>
            </div>
            <a href="#" class="my-button" title="b-title">Order Now</a>
            <a href="#" class="my-button" title="b-title">Add to cart</a>
        </div>
        </div>
</section>
<!--medicine 2-->
<section class="bottom" id="bottom">
        <div class="container">
            <h1 class="heading">Medicine</h1><hr>
        </div>
        <div class="box-container">
        <!--5-->
        <div class="box">
            <div class="slide-img">
                <img src="pic/med5.png" style="width: 90%; padding-left: 15%;">
                <div class="overlay">
                    <p>Effective in reducing cholesterol and reduces chance of heart disease.</p>
                    <a href="#" class="learn-btn">Learn more</a>
                </div>
            </div>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
            <div class="detail-box">
                <div class="type">
                    <a href="#">Ayurvedic Medicine For Reduce Bad Cholesterol Hertocare G1</a>
                    <span>Recommended</span>
                </div>
                <a href="#" class="price">Rs.599/-</a>
            </div>
            <a href="#" class="my-button" title="b-title">Order Now</a>
            <a href="#" class="my-button" title="b-title">Add to cart</a>
        </div>
        <!--6-->
        <div class="box">
            <div class="slide-img">
                <img src="pic/med6.png">
                <div class="overlay">
                    <p>Relieves joint & muscle pain, relaxes joint muscles.</p>
                    <a href="#" class="learn-btn">Learn more</a>
                </div>
            </div>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
            <div class="detail-box">
                <div class="type">
                    <a href="#">Dr. Vaidya's Pain Relief Oil 100ml</a>
                    <span>New arrival</span>
                </div>
                <a href="#" class="price">Rs.179/-</a>
            </div>
            <a href="#" class="my-button" title="b-title">Order Now</a>
            <a href="#" class="my-button" title="b-title">Add to cart</a>
        </div>
        <!--7-->
        <div class="box">
            <div class="slide-img">
                <img src="pic/med7.png">
                <div class="overlay">
                    <p>Quick and long-lasting relief for all types of cough and 
                        improve respiratory health.</p>
                    <a href="#" class="learn-btn">Learn more</a>
                </div>
            </div>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
            <div class="detail-box">
                <div class="type">
                    <a href="#">Zandu Ayurvedic Cough Syrup - 100 ml</a>
                    <span>Ayurvedic Excellence</span>
                </div>
                <a href="#" class="price">Rs.110/-</a>
            </div>
            <a href="#" class="my-button" title="b-title">Order Now</a>
            <a href="#" class="my-button" title="b-title">Add to cart</a>
        </div>
        <!--8-->
        <div class="box">
            <div class="slide-img">
                <img src="pic/med8.png">
                <div class="overlay">
                    <p>Clears acne, pimples, scars, wrinkles, dark spots, pigments, blackheads. 
                        Gives relief from skin disorders lifelong.</p>
                    <a href="#" class="learn-btn">Learn more</a>
                </div>
            </div>
            <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
            <div class="detail-box">
                <div class="type">
                    <a href="#">Gynoveda Anti Acne Ayurvedic Medicine</a>
                    <span>Recommended</span>
                </div>
                <a href="#" class="price">Rs.399/-</a>
            </div>
            <a href="#" class="my-button" title="b-title">Order Now</a>
            <a href="#" class="my-button" title="b-title">Add to cart</a>
        </div>
        </div>
</section>
<script type="text/javascript" src="med.js"></script>
</body>
</html>