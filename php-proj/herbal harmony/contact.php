<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Contact Page</title>
    <link rel="stylesheet" type="text/css" href="contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Andika:ital,wght@0,400;0,700;1,400;1,700&family=Truculenta:opsz,wght@12..72,100..900&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<section class="top" id="top">
    <div class="con">
        <h1 class="heading">Our Experts</h1><hr>
    </div>
    <div class="wrapper">
        <div class="container">
            <div class="img-wrapper">
                <img src="pic/d1Dr-Zankhana-M-Buch.png">
            </div>
            <div class="details">
                <h3>DR. ZANKHANA M. BUCH</h3>
                <h5>Medical Superintedent with 20 Years of Experience (Kayachiktsa)</h5>
                <div class="social-icons">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-instagram"></i>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="img-wrapper">
                <img src="pic/d2Shrinivasa-Pandey.png">
            </div>
            <div class="details">
                <h3>DR.SHRINIVASA PANDEY</h3>
                <h5>Ayurveda physician with 32 years of work experience.(Kayachiktsa)</h5>
                <div class="social-icons">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-instagram"></i>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="img-wrapper">
                <img src="pic/d3Dr.-Kalpita-Thakre-1.png">
            </div>
            <div class="details">
                <h3>DR. KALPITA THAKRE</h3>
                <h5>Ayurveda Surgeon with 3 years of experience.(Shalyatantra)</h5>
                <div class="social-icons">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-instagram"></i>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="img-wrapper">
                <img src="pic/d4Dr.-Bheema-Bhatta.png">
            </div>
            <div class="details">
                <h3>DR. BHEEMA BHATTA</h3>
                <h5>Ayurveda Specialist with 40 years of experience.(Panchakarma)</h5>
                <div class="social-icons">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-instagram"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bottom" id="bottom">
    <div class="con">
        <h1 class="heading">LOCATION</h1><hr>
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118147.80351149273!2d70.82129635!3d22.27348695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959c98ac71cdf0f%3A0x76dd15cfbe93ad3b!2sRajkot%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1712243709301!5m2!1sen!2sin" width="600" height="450" 
        style="border:0;" allowfullscreen="" loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
</body>
</html>