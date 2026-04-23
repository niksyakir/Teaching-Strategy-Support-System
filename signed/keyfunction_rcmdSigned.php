<?php
    //Meneruskan session Sebelumnya
    session_start();
    //Menyemak Sama Ada Pengguna Berada Dalam session Serta Pemboleh Ubah session Diumpukkan Nilai
    //Jika Tidak, Halaman Tidak Akan Dipaparkan
    if (isset($_SESSION['Email']) && $_SESSION['LogIn']==true) {
        $username = $_SESSION['Username'];
        $email = $_SESSION['Email'];
?>

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
            <a href="indexSigned.php" class="home">HOME</a> 
            <a href="key functionSigned.php" class="key_function">KEY FUNCTION</a>
            <a href="aboutSigned.php" class="home">ABOUT US</a> 
            <a href="featuresSigned.php" class="home">FEATURES</a> 
            <a href="contactSigned.php" class="home">CONTACT</a>
            </div>

            <div class="right-side">
                <div class="profile-container">
                    <img id="profile-icon" src="../pic/user.png" alt="Profile Icon" class="profile-icon">
                    <div id="floating-menu" class="floating-menu">
                        <p id="user-name" class="username"><?php echo htmlspecialchars($username); ?></p>
                        <p id="user-email" class="email"><?php echo htmlspecialchars($email); ?></p>
                        <button id="logout-button" class="logout-button">Logout</button>
                    </div>
                </div>
            </div>
            
            
        </div>
        <div class="line" style="position: absolute; margin-left: 10px; margin-top: 66px;"></div>
        <div class="content">
            <div class="main" style="display:flex;flex-direction:column">
                <div class="title-container">
                    <div style="margin-left: 115px;">
                        <p class="title">Recommended Teaching Strategies</p>
                        <p class="details">Here are the top three recommended teaching strategies to be implemented during the lessons!
                            Press the card to learn more about each teaching strategy.
                        </p>
                    </div>
                    <img src="../pic/greengirl.png" class="greengirl">
                </div>
                

                
                

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

                    let additionalContent = "";

                    // Add different content based on the strategy
                    if (item.strategy === "Practical Exercises") {
                        additionalContent = "Practical Exercises are hands-on activities that allow students to apply the knowledge they have gained in a real-world context. These exercises are an important part of the learning process as they bridge theory and practice.";
                    } else if (item.strategy === "Problem-based Learning") {
                        additionalContent = "Problem-Based Learning (PBL) is an active teaching strategy that engages students in solving real-world problems. By working through complex issues, students develop critical thinking skills, gain practical knowledge, and learn to collaborate effectively.";
                    } else if (item.strategy === "Cooperative Learning") {
                        additionalContent = "Cooperative learning involves students working together in small groups to accomplish shared goals. This approach encourages collaboration, communication, and active learning, allowing students to learn from one another while completing tasks or solving problems. In a cooperative learning environment, each student is responsible for their contribution and is also accountable for helping others succeed.";
                    } else if (item.strategy === "Resource Sharing"){
                        additionalContent = "Resource sharing and online communities are essential tools in modern education that foster collaboration, engagement, and the exchange of knowledge. Through these platforms, students and educators can share learning materials, discuss ideas, and solve problems together, creating a more interactive and supportive learning environment. Whether through online discussion forums, shared document platforms, or collaborative tools, resource sharing encourages students to contribute to the collective learning experience.";
                    } else if (item.strategy === "Continuous Evaluation"){
                        additionalContent = "Continuous evaluation and feedback play a critical role in helping students progress in helping students progress in their learning journey. This approach allows teachers to monitor students development, identify areas for improvement, and adjust their teaching strategies accordingly. By providing regular feedback, teachers can guide students to better understand their strengths and areas needing attention.";
                    } else {
                        additionalContent = "";
                    }
    


                    strategiesDiv.innerHTML += `<div class="top-three-box" 
                    onmouseover="showHoverContent(this, '${additionalContent}')"
                    onmouseout="hideHoverContent(this)"
                    onclick="navigateToStrategy('${item.strategy.toLowerCase().replace(' ', '')}Signed.php')">
                    <p><span class="strategy-name" id="strategy-name">STRATEGY: ${index+1} : ${item.strategy.toUpperCase()}</span>
                    <!-- - Total Score: ${item.totalScore}-->
                    <br>
                    <div class="hidden-content" style="display: none; padding: 10px; margin-top: 10px;"></div>
                    <a href="${item.strategy.toLowerCase().replace(" ","")}Signed.php" style="font-size:18px;display:block;" class="learnmore">Learn more</a>
                    </p>
                    </div>`;
                });
            } else {
                strategiesDiv.innerHTML = "<p>No strategies available.</p>";
            }

            // Function to dynamically show content on hover
            function showHoverContent(element, content) {
                const hiddenContent = element.querySelector(".hidden-content");
                hiddenContent.innerHTML = `<p>${content}</p>`;
                hiddenContent.style.display = "block"; // Show the hidden content
            }

            // Function to hide content when mouse leaves the element
            function hideHoverContent(element) {
                const hiddenContent = element.querySelector(".hidden-content");
                hiddenContent.style.display = "none"; // Hide the hidden content
            }

            // Function to handle the redirect or any other logic you want on click
            function navigateToStrategy(url) {
                // You can redirect to the URL using window.location
                window.location.href = url;
            }

        </script>
        <script src="../js/log_out.js"></script>
    </body>
</html>
<?php
    }else{
        //Memaparkan Mesej Jika Pengguna Tidak Log Masuk Terlebih Dahulu
        //Memaparkan Halaman Log Masuk
        echo "<script>alert('Please Login In.');
        window.location.replace('log in.php');
        </script>";
    }
?>