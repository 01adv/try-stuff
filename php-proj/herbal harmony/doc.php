<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Doctor Page</title>
    <link rel="stylesheet" type="text/css" href="doc.css">
    <link href="https://fonts.googleapis.com/css2?family=Andika:ital,wght@0,400;0,700;1,400;1,700&family=Truculenta:opsz,wght@12..72,100..900&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <button>Help Desk</button>
    </div>
</header>

<section class="top" id="top">
    <div class="container">
        <h1 class="heading">TOP SPECIALIST AYURVEDACHARYA (DOCTORS)</h1>
    </div>
    <div class="box-container">
        <div class="box">
            <img src="pic/ent.png">
            <h1 class="title">ENT Specialist (Nasayam)</h1>
            <p>Ayurvedic experts in nasayam (nasal therapy) and throat care.</p>
            <p>Improving Sinus Health, Enhancing Respiratory Function, Allergy Management</p>
            <a href="#" class="btn">Read More..</a>
        </div>
        <div class="box">
            <img src="pic/kayachikitsa.png">
            <h1 class="title">General Physician (Kayachiktsa)</h1>
            <p>Diagnose and treats multisystem disease conditions or general health issues.</p>
            <p>Managing Common Ailments,Respiratory Health, Lifestyle Management</p>
            <a href="#" class="btn">Read More..</a>
        </div>
        <div class="box">
            <img src="pic/balaychikitsa.png">
            <h1 class="title">Pediatrics (Balachikitsa)</h1>
            <p>Ayurvedic care for infants, children, and adolescents.</p>
            <p>Immunity, Growth, Nutrition, Developmental Disorders.</p>
            <a href="#" class="btn">Read More..</a>
        </div>
        <div class="box">
            <img src="pic/image9.jpeg">
            <h1 class="title">Recommended Ayurvedic Doctors</h1>
            <p>Highly skilled and experienced ayurvedic practitioners.</p>
            <p>Covering all spealities</p>
            <a href="#" class="btn">Read More..</a>
        </div>
    </div>
</section>
<!--bottom-->
<section class="bottom" id="bottom">
    <div class="container">
        <h1 class="heading">OTHER SPECIALIST AYURVEDACHARYA (DOCTORS)</h1><hr>
    </div>
    <div class="box-container">
        <div class="box">
            <div class="img-container">
                <div class="inner-skew">
                    <img src="pic/Living-Ayurveda-181010-175.png" style="padding-left: 45px; padding-top: 26px;">
                </div>
            </div>
            <h1 class="title">Ophthalmologist (Netra Chikitsa)</h1>
            <p>Specialists in maintaining eye health and treating eye disorders.</p>
            <p>Netra Kandu (Eye Itching), Drishti Daurbalya (Visual Weakness), Kacha Drishti (Myopia).</p>
            <a href="#" class="btn">Read More..</a>
        </div>
        <div class="box">
            <div class="img-container">
                <div class="inner-skew">
                    <img src="pic/dental.png" style="padding-left: 50px; padding-top: 26px;">
                </div>
            </div>
            <h1 class="title">Dentist (Danta Chikitsa)</h1>
            <p>Experts in maintaining dental health and providing dental treatments.</p>
            <p>Danta Shoola (Toothache), Mukha Roga (Oral Diseases), Danta Prakshalana (Oral Hygiene).</p>
            <a href="#" class="btn">Read More..</a>
        </div>
        <div class="box">
            <div class="img-container">
                <div class="inner-skew">
                    <img src="pic/heart.png" style="padding-left: 55px; padding-top: 26px;">
                </div>
            </div>
            <h1 class="title">Cardiologist (Hrudaya Chikitsa)</h1>
            <p>Specialists in maintaining heart health and managing heart-related conditions.</p>
            <p>Hrudroga (Heart Diseases), Udarvrita Raktavaha Srotas (Blood Circulation), Rakta Dosha (Blood Impurities)</p>
            <a href="#" class="btn">Read More..</a><br>
        </div>
        <div class="box">
            <div class="img-container">
                <div class="inner-skew">
                    <img src="pic/skin.png" style="padding-left: 53px; padding-top: 24px;">
                </div>
            </div>
            <h1 class="title">Dermatologist (Twak Chikitsa)</h1>
            <p>Experts in diagnosing and treating skin disorders using Ayurvedic principles.</p>
            <p>Kushta (Skin Diseases), Charmaroga (Dermatitis), Vyanga (Hyperpigmentation)</p>
            <a href="#" class="btn">Read More..</a>
        </div>
    </div>
</section>
</body>
</html>