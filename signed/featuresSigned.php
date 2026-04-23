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
        <title>Features</title>
        <!--Font for Madimi One-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
        <!--Link for css stylesheet-->
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Kaushan+Script&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <!--Link for back icon-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">

        <style>

            
            .footer{
                margin-top: 0px;
                width: 100%;
                height: 70px;
                background-image: url(../pic/main\ background\ 2.png);
                background-size: cover;
            }

            body{
                overflow-x: hidden;
            }

            .home,.current_pg,.sign,.log{
                font-size: 18px;
            }

            .header{
                width: 100%;
                position:fixed;
                height: 66px;
                background-image: url(../pic/main\ background\ 1.png);
                background-size: cover;
                display: flex;
                align-items: center;
                justify-content: space-between;
                flex-direction: row;
                gap: 30px;
                font-family: 'Jost';
                font-weight: 600;
                font-size: 18px;
                background-color: white;
                z-index: 1;
            }

            .main{
                
                flex-direction: column;
                background-image: url("../pic/features_mainbg.png");
                background-color: #FAECD8;
            }
            h2{
                font-size: 35px;
                font-family: 'Madimi One';
            }

            h3{
                font-size: 30px;
                text-align: left;
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
        <div>
            <!--Navigation bar-->
            <div class="header">
                <div class="left-side">
                    <img src="../pic/logo.png" class="logo">
                <a href="indexSigned.php" class="home">HOME</a> <!--signed home page-->
                <a href="key functionSigned.php" class="home">KEY FUNCTION</a>
                <a href="aboutSigned.php" class="home">ABOUT US</a> <!--signed about page-->
                <a href="featuresSigned.php" class="contact">FEATURES</a> <!--signed feature page-->
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
            <div class="content" style="padding-top: 66px;">
                <div class="line" style="position: fixed; padding-top: 66px; z-index: 1; margin-left: 14px;"></div>
                <div class="main">
                    <div style="background-color:rgba(255, 255, 255, 0.7);width:100%;padding-left: 125px;">
                        <h1>Deep Dive To The World Of Teaching</h1>
                    </div>
                    <h3>Teaching Strategies Overview</h3>
                    <!-- Expanded Cards (Initially Hidden) -->
                    <div class="DetailFeatures DetailFeatures-Row1">
                        <div class="expandedcard" id="expanded1">
                            <div class="expanded-col1">
                                <img class="expanded-img" src="../pic/fPractical.jpg">
                                <h2 class="expanded-heading">PRACTICAL EXERCISES</h2>
                            </div>
                            <div class="expanded-col2"> 
                                <div class="icon-container">
                                    <i class="fas fa-circle-chevron-left" onclick="toggleExpandedCard(1)"></i>
                                </div>
                                <div class="expanded-description">Practical exercises are hands-on activities that allow students to apply the knowledge they’ve gained in a real-world context. These exercises are an important part of the learning process as they bridge theory and practice.<br>
                                    <a href="practicalexercisesSigned.php" style="color: darkblue;"><u>See Details</u></a>
                                </div>
                                
                            </div>                                
                        </div>
                        <div class="expandedcard" id="expanded2">
                            <div class="expanded-col1">
                                <img class="expanded-img" src="../pic/fPBL.jpg">
                                <h2 class="expanded-heading">PROBLEM-BASED LEARNING</h2>
                            </div>
                            <div class="expanded-col2"> 
                                <div class="icon-container">
                                    <i class="fas fa-circle-chevron-left" onclick="toggleExpandedCard(2)"></i>
                                </div>
                                <div class="expanded-description">Problem-Based Learning (PBL) is an active teaching strategy that engages students in solving real-world problems. By working through complex issues, students develop critical thinking skills, gain practical knowledge, and learn to collaborate effectively.
                                    <br><br>
                                    An example of problem-based learning activity:<br>
                                    - A city is facing traffic congestion. Students must work in groups to propose a solution, considering factors like infrastructure, budget, and environmental impact.
                                    <a href="problem-basedlearningSigned.php" style="color: darkblue;"><u>See Details</u></a>
                                </div>
                            </div>                                
                        </div>
                        <div class="expandedcard" id="expanded3">
                            <div class="expanded-col1">
                                <img class="expanded-img" src="../pic/fResource.jpg">
                                <h2 class="expanded-heading" style="text-align: center;">RESOURCE SHARING AND ONLINE COMMUNITIES</h2>
                            </div>
                            <div class="expanded-col2"> 
                                <div class="icon-container">
                                    <i class="fas fa-circle-chevron-left" onclick="toggleExpandedCard(3)"></i>
                                </div>
                                <div class="expanded-description">Resource sharing and online communities are essential tools in modern education that foster collaboration, engagement, and the exchange of knowledge. Through these platforms, students and educators can share learning materials, discuss ideas, and solve problems together, creating a more interactive and supportive learning environment. Whether through online discussion forums, shared document platforms, or collaborative tools, resource sharing encourages students to contribute to the collective learning experience.
                                    <a href="resourcesharingSigned.php" style="color: darkblue;"><u>See Details</u></a>
                                    </div>
                            </div>                                
                        </div>
                        
                    </div>
                    <div class="Features Row1" style="width: 100%;">
                        <div class="card" id="card1" onclick="toggleExpandedCard(1)">
                            <img src="../pic/fPractical.jpg">
                            <h2>PRACTICAL EXERCISES</h2>
                        </div>
                        <div class="card" id="card2" onclick="toggleExpandedCard(2)">
                            <img src="../pic/fPBL.jpg">
                            <h2>PROBLEM-BASED LEARNING</h2>
                        </div>
                        <div class="card" id="card3" onclick="toggleExpandedCard(3)">
                            <img src="../pic/fResource.jpg">
                            <h2 style="font-size: 33px;">RESOURCE SHARING AND ONLINE COMMUNITIES</h2>
                        </div>    
                    </div>
                    
                    <!-- Expanded Cards (Initially Hidden) -->
                    <div class="DetailFeatures DetailFeatures-Row2">
                        <div class="expandedcard" id="expanded9">
                            <div class="expanded-col1">
                                <img class="expanded-img" src="../pic/fContinuous.jpg">
                                <h2 class="expanded-heading" style="text-align: center;">CONTINUOUS EVALUATION AND FEEDBACK</h2>
                            </div>
                            <div class="expanded-col2"> 
                                <div class="icon-container">
                                    <i class="fas fa-circle-chevron-left" onclick="toggleExpandedCard(9)"></i>
                                </div>
                                <div class="expanded-description">Continuous evaluation and feedback play a critical role in helping students progress in their learning journey. This approach allows teachers to monitor students' development, identify areas for improvement, and adjust their teaching strategies accordingly. By providing regular feedback, teachers can guide students to better understand their strengths and areas needing attention.
                                     <a href="continuousevaluationSigned.php" style="color: darkblue;"><u>See Details</u></a>
                                    </div>
                            </div>                                
                        </div>
                        <div class="expandedcard" id="expanded10">
                            <div class="expanded-col1">
                                <img class="expanded-img" src="../pic/fCooperative.jpg">
                                <h2 class="expanded-heading">COOPERATIVE LEARNING</h2>
                            </div>
                            <div class="expanded-col2"> 
                                <div class="icon-container">
                                    <i class="fas fa-circle-chevron-left" onclick="toggleExpandedCard(10)"></i>
                                </div>
                                <div class="expanded-description">Cooperative learning involves students working together in small groups to accomplish shared goals. This approach encourages collaboration, communication, and active learning, allowing students to learn from one another while completing tasks or solving problems. In a cooperative learning environment, each student is responsible for their contribution and is also accountable for helping others succeed.
                                    <br><br>
                                    - Teachers can divide the class into small groups and assign each group a specific task, where students collaborate to find solutions or create projects together.<br>
                                    - Roles can be assigned within groups to ensure equal participation, such as group leader, note-taker, or presenter.
                                      <a href="cooperativelearningSigned.php" style="color: darkblue;"><u>See Details</u></a>
                                    </div>
                            </div>                                
                        </div>
                        
                    </div>
                    <div class="Features Row3">
                        <div class="card" id="card9" onclick="toggleExpandedCard(9)">
                            <img src="../pic/fContinuous.jpg">
                            <h2>CONTINUOUS EVALUATION AND FEEDBACK</h2>
                        </div>
                        <div class="card" id="card10" onclick="toggleExpandedCard(10)">
                            <img src="../pic/fCooperative.jpg">
                            <h2>COOPERATIVE LEARNING</h2>
                        </div>
                    </div>
                    <h3>Additional Features to Enhance Your Teaching</h3>
                        <div class="additional-features">
                            <a href="lessonplanSigned.php"><div class="additional-features-card card1"><h2>LESSON PLAN GENERATOR</h2></div></a>
                            <a href="dataanalyticsSigned.php"><div class="additional-features-card card2"><h2>DATA ANALYTICS</h2></div></a>
                            <a href="quizSigned.php"><div class="additional-features-card card3"><h2>QUIZ GENERATOR</h2></div></a>
                        </div>
                </div>
                
                
            
            </div>


            <div class="line"></div>
            <div class="footer">
                <p style="color: transparent; margin: 0;">s</p>
            </div>
            
        </div>
        <script src="../js/log_out.js"></script>
        <script src="../js/features.js"></script>

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


