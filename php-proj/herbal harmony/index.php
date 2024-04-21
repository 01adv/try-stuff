<?php 
session_start();
    if(isset($_SESSION["user"])){
        header("Location: home.php");
        exit();
    }
    include('db.php');
    $suc ="";
    $error = "";
    if(isset($_POST['btn'])){
        $uname=$_POST['uname'];
        $ename=$_POST['ename'];
        $pname=$_POST['pname'];
        $user = FALSE;
        $sql = "SELECT * FROM user WHERE username='$uname'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
            $user = TRUE;
        
        } else {
        }

        if(!$user){
            $sql = "INSERT INTO user (username, passward, email)
            VALUES ('$uname', '$pname', '$ename')";
                    
                    if(mysqli_query($conn, $sql))
                    {
                        $suc = "Account Successfully Created!";
                    }
                    else
                    {
                    echo"error";
                    }
                    
                    $conn->close();
        }else{
            $error = 'Username Already Exist!';
        }       
    }

    if(isset($_POST['login'])){
        $uname=$_POST['uname'];
        $pname=$_POST['pname'];
        $sql = "SELECT * FROM user WHERE username='$uname' && passward='$pname'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        $_SESSION["user"] = "user";
        header("Location: home.php");
        exit();
        
        } else {
            $error = 'User name and password does not match';
        }
    }

    

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Andika:ital,wght@0,400;0,700;1,400;1,700&family=Truculenta:opsz,wght@12..72,100..900&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<div class="container" id="container">
    <div class="form sign-up-container">
        <form action="login.php" method="post">
            
            <h1>Create an Account</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <a href="#" class="social"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a href="#" class="social"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
            <span>Or Use Your Email For Registration</span>
            <div class="input-field">
                <i class="fa-fa-user"></i>
                <input type="text" placeholder="Username" name="uname" required>
            </div>
            <div class="input-field">
                <i class="fa-fa-envelope"></i>
                <input type="email" placeholder="Email" name="ename" required>
            </div>
            <div class="input-field">
                <i class="fa-fa-lock"></i>
                <input type="password" placeholder="Password" name="pname" required>
            </div>
            <input type="submit" value="SIGN UP" class="btns" name="btn" style="border-radius: 20px;
    border: 1px solid #FF482B;
    background-color: #FF482B;
    color: #ffffff;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;">
        </form>
    </div>
        <!--sign in-->
    <div class="form sign-in-container">
        <form action="" method="post">
            <h4 style="color: green; font-size: 18px;"><?php echo $suc; ?></h4>
            <h4 style="color: red; font-size: 18px;"><?php echo $error; ?></h4>
            <h1>Login</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <a href="#" class="social"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a href="#" class="social"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
            <span>Or Use Your Account</span>
            <div class="input-field">
                <i class="fa-fa-user"></i>
                <input type="text" placeholder="Username" name="uname">
            </div>
            <div class="input-field">
                <i class="fa-fa-lock"></i>
                <input type="password" placeholder="Password" name="pname">
            </div>
            <a href="#">Forgot Your Password</a>
            <input type="submit" value="SIGN IN" class="btns" name="login" style="border-radius: 20px;
    border: 1px solid #FF482B;
    background-color: #FF482B;
    color: #ffffff;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;">
        </form>
    </div>

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome to our Ayurvedic Healing Center!</h1>
                <p>To stay connected with us and access personalized services, 
                please log in with your personal information.</p>
                <img src="pm-500x500.png" style="height: 25rem; width: 30rem; padding-top: 5%;">
                <button class="btn" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello User!</h1>    
                <p>Enter your personal details and begin your journey with us on the 
                    path of Ayurvedic healing.</p>
                <img src="pic/WhatsApp Image 2024-04-11 at 11.12.16 AM.jpeg" style="height: 25rem; width: 30rem;">
                <button class="btn" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<script>

var signUpButton = document.getElementById('signUp');
var signInButton = document.getElementById('signIn');
var container = document.getElementById('container');
signUpButton.addEventListener('click', () =>{
    container.classList.add("right-panel-active");
});
signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});
</script>
</body>
</html>



