<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Kaushan+Script&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/log in.css">
        

    </head>
    <body>
        
        <div class="welcome">WELCOME BACK!</div>
        <div class="main"><img src="pic/logo.png" class="logo">
            <p class="log">LOG IN</p>

            <Form action="log in.php" method="POST">

                <input type="text" name="email" placeholder="Email" class="user" required>

                <div class="pass-container">
                    <input type="password" name="password" placeholder="Password" class="pass" id="password" required>
                    <i class="far fa-eye eye-icon" id="togglePassword"></i>
                </div>

                <a href=" " class="forgot">Forgot Password?</a>
                <input type="submit" name="login" value="LOG IN" class="logb">
                <div class="line-or-container">
                    <div class="line"></div>
                    <p class="or">Or</p>
                    <div class="line"></div>
                </div>


                <div class="socmed">
                    <div class="google">
                        <img src="pic/google.png" class="gpic">
                        <p class="gsign">Login with Google</p>
                    </div>
                    <div class="fb">
                        <img src="pic/facebook.png" class="fpic">
                        <p class="fsign">Login with Facebook</p>
                    </div>
                </div>
                <div class="nextpage">
                    <p class="question" style="margin-top: 10px; ">No account? <a class="link" href="sign up.php" style="color: #00BBFF">SIGN UP</a></p>
                    <p class="question" style="margin-top: 5px;">Continue as <a class="link" href="index.php">Guest</a></p>
                </div>
            </div>
        </Form>
        <script src="js/log in.js"></script>
    </body>
</html>

<?php
    //Menghubung ke pangkalan data
    require('config.php');   
    
    if(isset($_POST['login'])){

        //Mengumpukkan pemboleh ubah untuk menyimpan data daripada pengguna
        $email=$_POST['email'];
        $password=$_POST['password'];

        //Melakukan query untuk mengesahkan akaun pengguna
        $recordUser=mysqli_query($con,"SELECT* FROM `User` WHERE EmailUser='$email' AND PasswordUser='$password'");

        //Store user data
        $userData = mysqli_fetch_assoc($recordUser);

        //Hasil carian rekod dari Pangkalan Data
        $result=mysqli_num_rows($recordUser);

        //Semak pengguna berjaya atau gagal untuk log masuk ke dalam sistem
        if($result>0){  

             //Memulakan session
             session_start();
             //Mengumpukkan Nilai ke Dalam Pemboleh Ubah session untuk Tujuan Penyemakan Seterusnya
             $_SESSION['Email']=$_POST['email'];
             $_SESSION['Username']=$userData['Username'];
             $_SESSION['LogIn']=true;
             echo "<script>alert('Successfully logged in.');</script>";
             echo "<script>window.location.replace('signed/indexSigned.php')</script>";

        }
        else{
            echo "<script>alert('Incorrect Email or Password');
            windows.location.replace('log in.php');</script>";
        }

    }
?>
