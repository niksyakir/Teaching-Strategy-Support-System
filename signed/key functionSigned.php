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
        

        <style>
            
        </style>

        <title>Key Function</title>


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
            <div class="main">
                <div class="title-container">
                    <div style="margin-left: 115px;">
                        <p class="title">The Best Way To Find Your Own Teaching Strategies</p>
                        <p class="details">Enter details about your teaching courses and students numbers to receive personalized teaching strategy recommendations.</p>
                    </div>
                    <img src="../pic/greengirl.png" class="greengirl">
                </div>
                <div class="main-info">

                <!--Background Information-->
                    <div class="teaching">
                        <p style="font-size: 20px; font-weight: 700; margin-bottom: 0;">Background Information :</p>
                        
                        <select name="school-type" id="school-type" class="teach-input">
                            <option value="none" selected disabled hidden>School Type</option>
                            <option value="Secondary Vocational School">Secondary Vocational School</option>
                            <option value="Higher Vocational School">Higher Vocational School</option>
                            <option value="University">University</option>
                            <option value="Others">Others</option>  
                        </select>
                        <label name="occupation-type" id="occupation-type" style="height:fit-content;display: flex;flex-direction:column;border:solid;border-width: 1px;border-color: rgba(0, 0, 0, 0.311);border-radius: 10px;padding:10px;">
                            <p>Occupation Type:</p><br>
                            <label class="teach-input-checkbox"><input type="checkbox" name="occupation-type" id="occupation-type-1" value="Full-Time Teachers">Full-Time Teachers</label><br>
                            <label class="teach-input-checkbox"><input type="checkbox" name="occupation-type" id="occupation-type-2" value="Teaching and Research Supervisor">Teaching and Research Supervisor</label><br>
                            <label class="teach-input-checkbox"><input type="checkbox" name="occupation-type" id="occupation-type-3" value="Administration Staff">Administration Staff</label><br>
                            <label class="teach-input-checkbox"><input type="checkbox" name="occupation-type" id="occupation-type-4" value="Others">Others</label><br>
                        </label>    
                        
                        <input type="number" class="teach-input" id="years-of-experience" placeholder="Years of Experience">
                    </div>


                <!--Occupation-->
                    <div class="teaching" style="margin-right: 100px;">
                        <p style="font-size: 20px; font-weight: 700; margin-bottom: 0;">Occupation :</p>
                        <select name="subject" id="subject" class="teach-input">
                            <option value="none" selected disabled hidden>Subject</option>
                            <option value="Mathematics and Computer Science">Mathematics and Computer Science</option>
                            <option value="Language">Language</option>
                            <option value="Business and Economics">Business and Economics</option>
                            <option value="Art">Art</option>
                            <option value="Engineering (Construction, Machinery, etc.)">Engineering (Construction, Machinery, etc.)</option>
                            <option value="Others">Others</option>
                        </select>
                        <select name="class-size" id="class-size" class="teach-input">
                            <option value="none" selected disabled hidden>Class Size</option>
                            <option value="1-10">1-10</option>
                            <option value="11-20">11-20</option>
                            <option value="21-30">21-30</option>
                            <option value="31-40">31-40</option>
                            <option value="More than 40">More than 40</option>
                        </select>
                        <select name="teaching-duration" id="teaching-duration" class="teach-input">
                            <option value="none" selected disabled hidden>Teaching Duration</option>
                            <option value="15 min">15 min</option>
                            <option value="30 min">30 min</option>
                            <option value="45 min">45 min</option>
                            <option value="60 min">60 min</option>
                            <option value="More than 60 min">More than 60 min</option>
                        </select>
                        
                    </div>
                </div>

                <!--Container for testing purpose-->
                <div style="width: 100%;">
                    <div class="additional" style="margin-right: 100px;">
                        <p id="test"></p>
                        
                    </div>
                </div>

                <div style="color: white; margin-bottom: 70px; margin-top: 20px;">
                    <button id="generate-button" class="button" style="border: none;">Generate Recommendations</button>
                </div>
                
                
            </div>
            <div class="line"></div>
        </div>
        <div class="footer">
            <p>s           </p>
            <p>s</p>
        </div>
        <script>
            document.getElementById('generate-button').addEventListener('click', function() {
                // Capture the values from the inputs
                const schoolType = document.getElementById('school-type').value;

                const checkboxes = document.querySelectorAll('#occupation-type input[type="checkbox"]:checked');
                const occupationType = Array.from(checkboxes).map(checkbox => checkbox.value);
                 // This will give an array of selected values.

                const yearsOfExperience = document.getElementById('years-of-experience').value;
                const subject = document.getElementById('subject').value; 
                const classSize = document.getElementById('class-size').value;
                const teachingDuration = document.getElementById('teaching-duration').value;
                

                // Calculate the best strategy based on the inputs and weights
                const bestStrategy = calculateBestStrategy(schoolType,occupationType,yearsOfExperience,
                    subject,classSize,teachingDuration
                    
                );

                
                window.location.href = "keyfunction_rcmdSigned.php";

                // Redirect to the corresponding strategy page (e.g., formative.html, groupwork.html)
                //window.location.href = bestStrategy + "Signed.php";  // Redirect dynamically based on the strategy
                //document.getElementById("test").innerHTML = bestStrategy;

                //Store the value in session storage
                sessionStorage.setItem('schoolType', schoolType);
                sessionStorage.setItem('occupationType', occupationType);
                sessionStorage.setItem('yearsOfExperience', yearsOfExperience);
                sessionStorage.setItem('subject', subject);
                sessionStorage.setItem('classSize', classSize);
                sessionStorage.setItem('teachingDuration', teachingDuration);
                
                
            });
        
            function calculateBestStrategy(schoolType,occupationType,yearsOfExperience,
                    subject,classSize,teachingDuration) {
                // Weights for each input (expressed as percentages)
                
                const weights = {
                      // Weight for class size
                    schoolType: 3.917238456,  
                    occupationType: 0.396122489, 
                    yearsOfExperience: 84.55614074,
                    subject: 7.263656194,
                    classSize: 2.932099425,
                    teachingDuration: 0.934742693,
                    
                };
                
                
        
                // Scores for the strategies based on the input values
                const scores = {
                    "Practical Exercises": { 
                        //Background Information
                        schoolType: schoolType.includes("University") ? 3 : schoolType.includes("Higher Vocational School") ? 4 : schoolType.includes("Secondary Vocational School") ? 2 : 1,
                        occupationType: occupationType.includes("Full-Time Teachers") ? 4 : 3,
                        yearsOfExperience: yearsOfExperience>10 ? 4 : yearsOfExperience>3 ? 4 : 2,
                        
                        //Occupation
                        subject: subject.includes("Mathematics and Computer Science") ? 4 : subject.includes("Others") ? 3 : subject.includes("Language") ? 2 : 1,
                        classSize: classSize.includes("11-20") ? 1 : classSize.includes("21-30") ? 2 : classSize.includes("31-40") ? 3 : 4,
                        teachingDuration: teachingDuration.includes("30 min") ? 4 : teachingDuration.includes("45 min") ? 3 : teachingDuration.includes("60 min") ? 2 : 1,
                                               
                        
                    },
                    "Problem-based Learning": { 
                        //Backgruound Information
                        schoolType: schoolType.includes("University") ? 3 : schoolType.includes("Higher Vocational School") ? 4 : schoolType.includes("Secondary Vocational School") ? 2 : 1,
                        occupationType: occupationType.includes("Full-Time Teachers") ? 4 : 3,
                        yearsOfExperience: yearsOfExperience>10 ? 4 : yearsOfExperience>3 ? 4 : 2,
                        
                        //Occupation
                        subject: subject.includes("Mathematics and Computer Science") ? 4 : subject.includes("Others") ? 3 : subject.includes("Language") ? 2 : 1,
                        classSize: classSize.includes("11-20") ? 1 : classSize.includes("21-30") ? 2 : classSize.includes("31-40") ? 3 : 4,
                        teachingDuration: teachingDuration.includes("45 min") ? 4 : teachingDuration.includes("30 min") ? 3 : teachingDuration.includes("15 min") ? 2 : 1,
                        
                        
                    },
                    "Cooperative Learning": { 
                        //Backgruound Information
                        schoolType: schoolType.includes("University") ? 4 : schoolType.includes("Higher Vocational School") ? 4 : schoolType.includes("Secondary Vocational School") ? 1 : 1,
                        occupationType: occupationType.includes("Full-Time Teachers") ? 4 : 3,
                        yearsOfExperience: yearsOfExperience>10 ? 4 : yearsOfExperience>3 ? 4 : 2,
                        
                        //Occupation
                        subject: subject.includes("Mathematics and Computer Science") ? 4 : subject.includes("Business and Economics") ? 3 : 1,
                        classSize: classSize.includes("1-10") || classSize.includes("11-20") ? 1 : classSize.includes("21-30") ? 2 : classSize.includes("31-40") ? 3 : 4,
                        teachingDuration: teachingDuration.includes("45 min") ? 4 : teachingDuration.includes("15 min") || teachingDuration.includes("60 min") ? 3 : teachingDuration.includes("30 min") || teachingDuration.includes("More than 60 min") ? 2 : 1,
                        
  
                        
                        
                    },
                    "Resource Sharing": { 
                        //Backgruound Information
                        schoolType: schoolType.includes("University") ? 3 : schoolType.includes("Higher Vocational School") ? 4 : schoolType.includes("Secondary Vocational School") ? 2 : 1,
                        occupationType: occupationType.includes("Full-Time Teachers") ? 4 : 3,
                        yearsOfExperience: yearsOfExperience>10 ? 6 : yearsOfExperience>3 ? 2 : 2,
                        
                        //Occupation
                        subject: subject.includes("Mathematics and Computer Science") ? 4 : subject.includes("Engineering (Construction, Machinery, etc.)") ? 2 : subject.includes("Others") ? 2 : 1,
                        classSize: classSize.includes("11-20") || classSize.includes("21-30") ? 2 : classSize.includes("31-40") ? 4 : classSize.includes("More than 40") ? 3 : 1,
                        teachingDuration: teachingDuration.includes("45 min") ? 4 : teachingDuration.includes("15 min") || teachingDuration.includes("60 min") ? 3 : teachingDuration.includes("30 min") || teachingDuration.includes("More than 60 min") ? 2 : 1,
                        
                        

                    },
                    "Continuous Evaluation": { 
                        //Backgruound Information
                        schoolType: schoolType.includes("University") ? 1.25 : schoolType.includes("Higher Vocational School") ? 4.25 : schoolType.includes("Secondary Vocational School") ? 3.25 : 1.25,
                        occupationType: occupationType.includes("Full-Time Teachers") ? 4 : 3,
                        yearsOfExperience: yearsOfExperience>10 ? 4 : yearsOfExperience>3 ? 4 : 2,
                        
                        //Occupation
                        subject: subject.includes("Mathematics and Computer Science") || subject.includes("Others") || subject.includes("Business and Economics") || subject.includes("Art") ? 2.25 : 1,
                        classSize: classSize.includes("11-20") || classSize.includes("More than 40") || classSize.includes("31-40") ? 3 : 1,
                        teachingDuration: teachingDuration.includes("45 min") ? 4 : teachingDuration.includes("60 min") || teachingDuration.includes("15 min") || teachingDuration.includes("More than 60 min") ? 1.65 : 1.05,
                        
                       
                    },
                    
                };
                
                
        
                // Calculate the weighted scores for each strategy
                const scoresArray = [];
                let bestStrategy = "";
                let maxScore = 0;
        
                for (const strategy in scores) {
                    let totalScore = 0;
        
                    // Calculate weighted score for each strategy
                    Object.keys(weights).forEach(
                        key => {
                            if(scores[strategy][key]!==undefined){
                                totalScore += weights[key] *scores[strategy][key];
                            }else{
                                document.getElementById("test").innerHTML = "Key not found in the strategy";
                            }
                        }
                    )
                    
                    //document.getElementById("test").innerHTML += totalScore +"<br>";
                        
                    // Store the strategy and its total score in an array
                    scoresArray.push({ strategy: strategy, totalScore: totalScore });

                    // Compare with maxScore and update the best strategy if necessary
                    if (totalScore > maxScore) {
                        maxScore = totalScore;
                        bestStrategy = strategy;
                    }
                    
                }
                

                // Sort the array in descending order of total scores
                scoresArray.sort((a, b) => b.totalScore - a.totalScore);

                // // Display the sorted scores
                // scoresArray.forEach(item => {
                //     document.getElementById("test").innerHTML += `${item.strategy}: ${item.totalScore}<br>`;
                // });

                // Get the top 3 strategies
                const topThree = scoresArray.slice(0, 3);

                // Store the top 3 strategies in session storage
                sessionStorage.setItem('topThreeStrategies', JSON.stringify(topThree));


                //document.getElementById("test").innerHTML += bestStrategy + "<br>";
        
                return bestStrategy.toLowerCase().replace(" ", "");  // Convert to lowercase and remove spaces for page URLs
            }//can only convert one time. if two space appears, the second space will not be converted
        
            // Helper function to check if any keyword is in the input string
            function checkKeywords(input, keywords) {
                for (let i = 0; i < keywords.length; i++) {
                    if (input.includes(keywords[i].toLowerCase())) {
                        return true; // Keyword found in the input
                    }
                }
                return false; // No keywords found in the input
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