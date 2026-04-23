// Retrieve the value from sessionStorage
let courseName = sessionStorage.getItem('courseName') || "-";
let courseDescription = sessionStorage.getItem('courseDescription') || "-";
let gradeLevel = sessionStorage.getItem('gradeLevel') || "-";
let numberOfStudents = sessionStorage.getItem('numberOfStudents') || "-";
let studentPerformance = sessionStorage.getItem('studentPerformance') || "-";
let teachingStyle = sessionStorage.getItem('teachingStyle') || "-";
let technologyAvailability = sessionStorage.getItem('technologyAvailability') || "-";
let specialNeeds = sessionStorage.getItem('specialNeeds') || "-";
let yearsOfExperience = sessionStorage.getItem('yearsOfExperience') || "-";
let teachingDuration = sessionStorage.getItem('teachingDuration') || "-";

document.getElementById("user_data").innerHTML += "Course Name: " + courseName + "<br>";
document.getElementById("user_data").innerHTML += "Course Description: " + courseDescription + "<br>";
document.getElementById("user_data").innerHTML += "Grade Level: " + gradeLevel + "<br>";
document.getElementById("user_data").innerHTML += "No. of Students: " + numberOfStudents + "<br>";
document.getElementById("user_data").innerHTML += "Student Performance: " + studentPerformance + "<br>";
document.getElementById("user_data").innerHTML += "Teaching Style: " + teachingStyle + "<br>";
document.getElementById("user_data").innerHTML += "Technology Avaibility: " + technologyAvailability + "<br>";
document.getElementById("user_data").innerHTML += "Special Needs: " + specialNeeds + "<br>";
document.getElementById("user_data").innerHTML += "Years of Experience: " + yearsOfExperience + "<br>";
document.getElementById("user_data").innerHTML += "Teaching Duration: " + teachingDuration + "<br>";

//Function to download content in pdf
document.getElementById('download-pdf').addEventListener('click', function () {
    const element = document.body; // Target specific content
    
    const options = {
        margin: 1,
        filename: 'Recommended_Teaching_Strategy.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 1 },
        jsPDF: { orientation: 'portrait' }
    };

    // Generate PDF and add success alert
    html2pdf().set(options).from(element).save().then(() => {
        alert("PDF has been successfully downloaded!");
    }).catch((error) => {
        alert("Download PDF function is only available when accessing through the Key Function input page.");
    });
});


