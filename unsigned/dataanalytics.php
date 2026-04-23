<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Analytics</title>
    <!--Font for Madimi One-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Kaushan+Script&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!--Link css stylesheet-->
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">

    <!--Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

            /*Log out*/
            .profile-container {
                position: relative;
                display: inline-block;
            }

            .profile-icon {
                width: 40px;
                height: 40px;
                cursor: pointer;
                border-radius: 50%;
                border: 2px solid #ccc;
            }

            .floating-menu {
                display: none;
                position: absolute;
                top: 50px; /* Adjust based on the icon's size */
                right: 0;
                background-color: #fff;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                padding: 10px;
                border-radius: 5px;
                z-index: 1000;
                width: 200px;
            }

            .floating-menu p {
                margin: 0;
                padding: 5px 0;
                font-size: 14px;
                color: #333;
            }

            .logout-button {
                width: 100%;
                padding: 8px;
                background-color: #eea6a1;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 14px;
            }

            .logout-button:hover {
                background-color: #d32f2f;
            }


    </style>
</head>
<body>
    <!--Navigation bar-->
    <div class="header">
        <div class="left-side">
            <img src="../pic/logo.png" class="logo">
            <a href="../index.php" class="home">HOME</a> 
            <a href="key function.php" class="home">KEY FUNCTION</a>
            <a href="about.php" class="home">ABOUT US</a> 
            <a href="features.php" class="current_pg">FEATURES</a> 
            <a href="contact.php" class="home">CONTACT</a>
            </div>

            <div class="right-side">
                <a href="../sign up.php" class="sign">SIGN UP</a>
                <a href="../log in.php" class="log">LOG IN</a>
            </div>

    </div>
    <div class="line"></div>
    <div class="content-otherfeatures">
        <h1>Data Analytics</h1>  
        <h3>Most Recommended Teaching Strategies</h3>
        <canvas id="strategyChart" width="400" height="200"></canvas>

        <h3>Teacher Strategy Preferences</h3>
        <canvas id="teacherPreferencesChart" width=100%></canvas>

        <h3>Student Performance Before and After Strategy Implementation</h3>
        <canvas id="studentPerformanceChart" width="400" height="200"></canvas>

        <h3>Effectiveness of Teaching Strategies</h3>
        <canvas id="effectivenessChart" width="400" height="200"></canvas>

    </div>
    <div class="line"></div>
    <div class="footer"></div>
        

    <script src="../js/data_analytics.js"></script>
    <script src="../js/log_out.js"></script>
</body>
</html>
