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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson Plan Generator</title>
    <!--Font for Madimi One-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Kaushan+Script&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!--Link css stylesheet-->
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <style>
        .footer{
                width: 100%;
                height: 70px;
                background-image: url(../../pic/main\ background\ 2.png);
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
                width: 220px;
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
            <a href="indexSigned.php" class="home">HOME</a> 
            <a href="key functionSigned.php" class="home">KEY FUNCTION</a>
            <a href="aboutSigned.php" class="home">ABOUT US</a> 
            <a href="featuresSigned.php" class="current_pg">FEATURES</a> 
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
    <div class="line"></div>
    <div class="content-otherfeatures">  
        <h1>Lesson Plan Generator</h1>
        <a href="featuresSigned.php" class="backBt" ><img src="../pic/backBt.png" style="height: 45px;"></a>
        <div id="input-form">
            <div class="form-group">
                <label for="subject">Select Subject:</label>
                <select id="subject">
                    <option value="Math">Math</option>
                    <option value="Science">Science</option>
                    <option value="English">English</option>
                    <option value="History">History</option>
                </select>
            </div>
            <div class="form-group">
                <label for="grade-level">Select Grade Level:</label>
                <select id="grade-level">
                    <option value="Secondary Vocational School">Secondary Vocational School</option>
                    <option value="Higher Vocational School">Higher Vocational School</option>
                    <option value="University">University</option>
                </select>
            </div>
            <div class="form-group">
                <label for="teaching-strategy">Select Preferred Teaching Strategy:</label>
                <select id="teaching-strategy">
                    <option value="PracticalExercises">Practical Exercises</option>
                    <option value="ProblembasedLearning">Problem-based Learning</option>
                    <option value="CooperativeLearning">Cooperative Learning</option>
                    <option value="ResourceSharing">Resource Sharing and Online Communities</option>
                    <option value="ContinuousEvaluation">Continuous Evaluation and Feedback</option>
                </select>
            </div>
            <div class="form-group">
                <label for="objective">Learning Objective:</label>
                <input type="text" id="objective" placeholder="E.g., Understand fractions">
            </div>
            <button class="button" id="generate-plan">Generate Lesson Plan</button>
        </div>
        <div id="lesson-plan" class="lesson-plan" style="display: none;"></div>
    </div>
    <div class="line"></div>
    
    </div>
    <div class="footer">
        

    <script src="../js/lessonplan.js"></script>
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