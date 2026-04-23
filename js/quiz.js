let questionCount = 1;

    // Add new question dynamically${questionCount}
    function addNewQuestion() {
        questionCount++;
        const questionList = document.getElementById('quiz-questions');
        const newQuestionHTML = `
            <div class="quiz-question">
                        <div class="question-container">
                            <label>Question ${questionCount}</label>
                            <label>:</label>
                            <input type="text" id="question-${questionCount}" placeholder="Enter the question" class="option-input">
                        </div>
                        
                        <div class="option-container">
                            <label>Option 1 </label><label>:</label><input type="text" id="option-${questionCount}-1" class="option-input" >
                            <label>Option 2 </label><label>:</label><input type="text" id="option-${questionCount}-2" class="option-input">
                            <label>Option 3 </label><label>:</label><input type="text" id="option-${questionCount}-3" class="option-input">
                            <label>Option 4 </label><label>:</label><input type="text" id="option-${questionCount}-4" class="option-input">
                        </div>
                        
                        
                        <label style="margin-right: 15px;">Correct Option</label><label style="margin-right: 20px;">:</label>
                        <select id="correct-${questionCount}" class="correct">
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                            <option value="4">Option 4</option>
                        </select>
                    </div>
        `;
        questionList.insertAdjacentHTML('beforeend', newQuestionHTML);
    }

    // Preview the quiz on the page
    function previewQuiz() {
        let quizHTML = '';

        for (let i = 1; i <= questionCount; i++) {
            const questionText = document.getElementById(`question-${i}`).value;
            const options = [];
            for (let j = 1; j <= 4; j++) {
                options.push(document.getElementById(`option-${i}-${j}`).value);
            }
            const correctOption = document.getElementById(`correct-${i}`).value;
            quizHTML += `
                <p><strong>Q${i}:</strong> ${questionText}</p>
                <ul>
                    <li>Option 1: ${options[0]}</li>
                    <li>Option 2: ${options[1]}</li>
                    <li>Option 3: ${options[2]}</li>
                    <li>Option 4: ${options[3]}</li>
                </ul>
                <p><strong>Correct Answer:</strong> Option ${correctOption}</p><br>
            `;
        }

        document.getElementById('quiz-preview-container').innerHTML = "<h3>Quiz Preview</h3>" + quizHTML;
        //document.body.appendChild(quizPreview);
    }

    // Download Quiz as PDF
    function downloadQuizPDF() {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();
        let quizHTML = '';

        for (let i = 1; i <= questionCount; i++) {
            const questionText = document.getElementById(`question-${i}`).value;
            const options = [];
            for (let j = 1; j <= 4; j++) {
                options.push(document.getElementById(`option-${i}-${j}`).value);
            }
            const correctOption = document.getElementById(`correct-${i}`).value;
            quizHTML += `
                Q${i}: ${questionText}
                \nOption 1: ${options[0]}
                \nOption 2: ${options[1]}
                \nOption 3: ${options[2]}
                \nOption 4: ${options[3]}
                \nCorrect Answer: Option ${correctOption}\n\n
            `;
        }

        doc.text(quizHTML, 10, 10);
        doc.save('quiz.pdf');
    }

    // Download Quiz as CSV
    function downloadQuizCSV() {
        let csvContent = "Question,Option 1,Option 2,Option 3,Option 4,Correct Option\n";

        for (let i = 1; i <= questionCount; i++) {
            const questionText = document.getElementById(`question-${i}`).value;
            const options = [];
            for (let j = 1; j <= 4; j++) {
                options.push(document.getElementById(`option-${i}-${j}`).value);
            }
            const correctOption = document.getElementById(`correct-${i}`).value;
            csvContent += `"${questionText}","${options[0]}","${options[1]}","${options[2]}","${options[3]}","${correctOption}"\n`;
        }

        const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
        const link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = 'quiz.csv';
        link.click();
    }