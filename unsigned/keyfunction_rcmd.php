<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Kaushan+Script&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Kaushan+Script&family=Madimi+One&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
       
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&family=Jost:ital,wght@0,100..900;1,100..900&family=Kaushan+Script&family=Madimi+One&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&family=Cabin:ital,wght@0,400..700;1,400..700&family=Jost:ital,wght@0,100..900;1,100..900&family=Kaushan+Script&family=Madimi+One&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <link href="../css/key functionSigned.css" rel="stylesheet">
        
        <title>Recommended Teaching Strategies</title>

        <style>
            
        </style>

    </head>
    <body>
        <div class="header">
            <div class="left-side">
                <img src="../pic/logo.png" class="logo">
            <a href="../index.php" class="home">HOME</a> 
            <a href="key function.php" class="key_function">KEY FUNCTION</a>
            <a href="about.php" class="home">ABOUT US</a> 
            <a href="features.php" class="home">FEATURES</a> 
            <a href="contact.php" class="home">CONTACT</a>
            </div>

            <div class="right-side">
                <a href="../sign up.php" class="sign">SIGN UP</a>
                <a href="../log in.php" class="log">LOG IN</a>
            </div>
            
            
        </div>
        <div class="line" style="position: absolute; margin-left: 10px; margin-top: 66px;"></div>
        <div class="content">
            <div class="main">
                <div class="title-container">
                    <div style="margin-left: 115px;">
                        <p class="title">Recommended Teaching Strategies</p>
                        <p class="details">Here are the top three recommended teaching strategies to be implemented during the lessons!
                            Press the card to learn more about each teaching strategy.
                        </p>
                    </div>
                    <img src="../pic/greengirl.png" class="greengirl">
                </div>
                <div class="main-info">

                
                

                <!--Recommendations-->
                <div style="width: 100%;">
                    <div class="top-three" id="strategies">
                    
                        
                    </div>
                </div>

                
                
                
            </div>
            <div class="line"></div>
        </div>
        <div class="footer">
            <p>s           </p>
            <p>s</p>
        </div>
        <script>
            // Retrieve the top three strategies from session storage
            const topThreeStrategies = JSON.parse(sessionStorage.getItem('topThreeStrategies')) || [];

            // Display the strategies on the page
            const strategiesDiv = document.getElementById('strategies');
            if (topThreeStrategies.length > 0) {
                topThreeStrategies.forEach((item,index) => {
                    strategiesDiv.innerHTML += `
                    <p style="background-color: red">Strategy: ${index+1} : <b>${item.strategy}</b><!-- - Total Score: ${item.totalScore}-->
                    <br>
                    <a href="${item.strategy.toLowerCase().replace(" ","")}.php">Learn more</a>
                    </p>
                    `;
                });
            } else {
                strategiesDiv.innerHTML = "<p>No strategies available.</p>";
            }

        </script>
        <script src="../js/log_out.js"></script>
    </body>
</html>