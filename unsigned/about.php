<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>About</title>
        <!--Font for Madimi One-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
        <!--Link for css stylesheet-->
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Kaushan+Script&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">

        <style>

            .footer{
                width: 100%;
                height: 70px;
                background-image: url(../pic/main\ background\ 2.png);
                background-size: cover;
            }

            .header{
                height: 66px;
            }

            .home,.current_pg,.sign,.log{
                font-size: 18px;
            }

            body{
                overflow: hidden;
            }


        .main{
            flex-direction: row;
        }
        .overlap-image{
            position: absolute;
            width: auto;
            z-index: 1; 
        }
        .overlap-image.img1{
            height:470px;
            bottom:0;
            left: 120px;
            
        }
        .overlap-image.img2{
            bottom: 0; 
            left: 23%;
            height: 320px;
            
        }
        </style>
    </head>
    <body>
        <div>
            <!--Navigation bar-->
            <div class="header" style="z-index: 2;">
                <div class="left-side">
                    <img src="../pic/logo.png" class="logo">
                    <a href="../index.php" class="home">HOME</a> <!--unsign home page-->
                    <a href="key function.php" class="home">KEY FUNCTION</a>
                    <a href="about.php" class="current_pg">ABOUT US</a> <!--unsign about page-->
                    <a href="features.php" class="home">FEATURES</a> <!--unsign features page-->
                    <a href="contact.php" class="home">CONTACT</a>
                    </div>
        
                    <div class="right-side">
                        <a href="../sign up.php" class="sign">SIGN UP</a>
                        <a href="../log in.php" class="log">LOG IN</a>
                    </div>
    
            </div>
            <div class="content">
                <div class="line"></div>
                <div class="main" style="background-color: white;">
                    <div class="About Column1" style="height: 550px;">
                        <div class="container">
                            <img src="../pic\about_boy1.png" alt="boy1_img" class="overlap-image img1">
                            <img src="../pic\about_boy2.png" alt="boy1_img" class="overlap-image img2">
                            
                        </div>
                    </div>
                    <div class="About Column2" style="height: 550px;">
                        <div class="container" style="display: flex;flex-direction: column;align-items: center;height:100%;padding-top: 70px;">
                            <h1 style="text-align: center;">ABOUT US</h1>
                            <p style="text-align: center;padding: 0 150px;">At Edulnsight, we're all about transforming education with the help of AI-powered teaching tools. Started by a group of passionate educators and tech lovers, our goal is to give teachers personalized insights based on data to help improve student learning. Our platform focuses on real-time feedback and is easy to use, making it simpler for teachers to apply the best teaching methods for each student's unique needs. We believe technology can make a big difference in education, and we're committed to creating tools that make teaching easier, more engaging, and rewarding for everyone.</p>
                        </div>
                    </div>
                </div>           
            </div>
            <div class="line"></div>
            <div class="footer"></div>
        </div>
    </body>
</html>
