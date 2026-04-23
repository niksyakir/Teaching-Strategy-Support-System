<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Kaushan+Script&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/sign up.css">

</head>
<body>
    <div class="main">
        <img src="pic/logo.png" class="logo">
        <Form action="signup_proses.php" method="POST">
            <p class="sign">SIGN UP</p>
            <input type="text"  name="email" placeholder="Email" class="email" >
            <input type="text" name="username" placeholder="Username" class="user" >

            <div class="pass-container"> 
                <input type="password" name="password" placeholder="Password" class="pass" id="password">
                <i class="far fa-eye eye-icon" id="togglePassword"></i> 
                <input type="password" name="cpassword" placeholder="Confirm Password" class="cpass" id="confirmPassword">
                <i class="far fa-eye eye-icon2" id="toggleConfirmPassword"></i> 
            </div>

            <input type="submit" name="signup" value="SIGN UP" class="signBt">

            <div class="line-or-container">
                <div class="line"></div>
                <p class="or">Or</p>
                <div class="line"></div>
            </div>

            <div class="socmed">
                <div class="google">
                    <img src="pic/google.png" class="gpic">
                    <p class="gsign">Sign in with Google</p>
                </div>
                <div class="fb">
                    <img src="pic/facebook.png" class="fpic">
                    <p class="fsign">Sign in with Facebook</p>
                </div>
            </div>
            <div class="nextpage">
                <p class="question">Already have an account? <a class="link" href="log in.php" style="color: #00BBFF">LOG IN</a></p>
                <p class="question" style="margin-top: 5px;">Continue as <a class="link" href="index.php">Guest</a></p>
            </div>
        </Form>
    </div>
    <script src="js/sign up.js"></script>
</body>
</html>