<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Service</title>
    <link rel="stylesheet" type="text/css" href="service.css">
    <link href="https://fonts.googleapis.com/css2?family=Andika:ital,wght@0,400;0,700;1,400;1,700&family=Truculenta:opsz,wght@12..72,100..900&display=swap" 
    rel="stylesheet">
</head>
<body>

<header class="header">
    <a href="#" class="logo">
        <img src="pic/logo.png.jpeg">
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
        <button>Help Desk</button>
    </div>
</header>

<section>
    <div class="container">
        <div class="about">
            <h3 style="padding-left: 30%;">ABOUT US</h3>
            <p style="padding-left: 30%;">Welcome to "<span>Herbal Harmony</span>". We are dedicated to providing
                holistic ayurvedic solutions for your health and well-being.Located amidst serene natural surroundigs,
                Herbal Harmony is commited to blending tradition wisdom with modern science.
                
                Our facility, nestled in the heart of nature, operates throughout the week, from Monday to Saturday,
                8:30 AM to 8:00 PM and on Sundays from 9:00 AM to 8:00 PM.
                
                At "<span>Herbal Harmony</span>",we offer a wide range of authentic ayurvedic products,
                herbal remedies, aromatherapy essentials and natural supplements. Our expert team ensures
                that you receive the highest quality products at competitive prices.
            </p>
            <a href="#" class="btn">Read More</a>
            <div class="about-form">
                <img src="pic/about.png.jpeg">
            </div>
        </div>
    </div>
</section>
</body>
</html>