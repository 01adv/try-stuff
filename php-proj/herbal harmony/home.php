<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Home page</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Andika:ital,wght@0,400;0,700;1,400;1,700&family=Truculenta:opsz,wght@12..72,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="home.css">
    <element :root></element>
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
            <button onclick="toggleMenu()">Help Desk</button>
        </div>
    </header>

    <section class="main">
        <div class="left">
            <h2>Welcome to Ayurvedic Healing</h2>
            <h1>Ayurvedic Wellness Center</h1>
            <p>We are dedicated to providing holistic care round the clock.
                Feel free to reach out to us for any assistance.</p>
            <button>Discover Ayurvedic Wisdom</button>
        </div>
        <div class="right">
            <img src="pic/WhatsApp Image 2024-04-11 at 11.12.17 AM (1).jpeg">
        </div>
    </section>
    <script>
        function toggleMenu() {
            document.querySelector('.headbar').classList.toggle('show');
        }
    </script>
</body>

</html>