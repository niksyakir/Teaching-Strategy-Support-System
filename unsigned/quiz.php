<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Generator</title>
    <!--Font for Madimi One-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Kaushan+Script&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!--Link css stylesheet-->
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">

    <!--PDF-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    
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
        <h1>Quiz Generator</h1>  
        <a href="features.php" class="backBt" ><img src="../pic/backBt.png" style="height: 45px;"></a>
            <div class="quiz-container">
                <div class="question-list" id="quiz-questions">
                <div class="quiz-question">
                        <div class="question-container">
                            <label>Question 1</label>
                            <label>:</label>
                            <input type="text" id="question-1" placeholder="Enter the question" class="option-input">
                        </div>
                        
                        <div class="option-container">
                            <label>Option 1 </label><label>:</label><input type="text" id="option-1-1" class="option-input" >
                            <label>Option 2 </label><label>:</label><input type="text" id="option-1-2" class="option-input">
                            <label>Option 3 </label><label>:</label><input type="text" id="option-1-3" class="option-input">
                            <label>Option 4 </label><label>:</label><input type="text" id="option-1-4" class="option-input">
                        </div>
                        
                        
                        <label style="margin-right: 15px;">Correct Option</label><label style="margin-right: 20px;">:</label>
                        <select id="correct-1" class="correct">
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                            <option value="4">Option 4</option>
                        </select>
                    </div>
                </div>

                <button class="button" style="margin-bottom: 20px;" onclick="addNewQuestion()">Add New Question</button>

                <div class="button" style="margin-bottom: 20px;"id="preview-btn" onclick="previewQuiz()">Preview Quiz</div>

                <button class="button" style="margin-bottom: 20px;"id="download-pdf" onclick="downloadQuizPDF()">Download as PDF</button>
                <button class="button"style="margin-bottom: 20px;" id="download-csv" onclick="downloadQuizCSV()">Download as CSV</button>

                <div id="quiz-preview-container"></div>
            </div>

    </div>
    <div class="line"></div>
    <div class="footer"></div>
        

    <script src="../js/quiz.js"></script>

</body>
</html>
