// Retrieve the value from sessionStorage
let schoolType = sessionStorage.getItem('schoolType') || "-";
let occupationType = sessionStorage.getItem('occupationType') || "-";
let yearsOfExperience = sessionStorage.getItem('yearsOfExperience') || "-";
let subject = sessionStorage.getItem('subject') || "-";
let classSize = sessionStorage.getItem('classSize') || "-";
let teachingDuration = sessionStorage.getItem('teachingDuration') || "-";

document.getElementById("user_data").innerHTML += "School Type: " + schoolType + "<br>";
document.getElementById("user_data").innerHTML += "Occupation Type: " + occupationType + "<br>";
document.getElementById("user_data").innerHTML += "Years of Experience: " + yearsOfExperience + "<br>";
document.getElementById("user_data").innerHTML += "Subject: " + subject + "<br>";
document.getElementById("user_data").innerHTML += "Class Size: " + classSize + "<br>";
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



//function to send email
document.getElementById('generate-pdf').addEventListener('click', function() {
    
    try{
        var element = document.body; 

        // Get name and email
        var userEmail = document.getElementById('user-email').innerText;
        var userName = document.getElementById('user-name').innerText;
        console.log(userEmail);
    
        // Generate the PDF from the page content with custom page size
        var options = {
            margin: 0.5,
            filename: 'Teaching Strategy.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { dpi: 192, letterRendering: true },
            jsPDF: { 
                unit: 'px', // Use pixels as the unit
                format: [1800, 1200], // Use preferred size
                orientation: 'portrait'
            }
        };
    
        
    
        // Use html2pdf.js to generate the PDF
        html2pdf().from(element).set(options).toPdf().get('pdf').then(function(pdf) {
            // Convert the generated PDF to a byte array for sending
            var pdfData = pdf.output('arraybuffer');
    
            // Send the generated PDF to the server for email sending
            var formData = new FormData();
            formData.append('pdf', new Blob([pdfData], { type: 'application/pdf' }), 'Teaching Strategy.pdf');
    
            //Tell user it is sending
            document.querySelector(".message").innerHTML="Sending the PDF...";
            
            //Send name and email
            formData.append('userEmail', userEmail);
            formData.append('userName', userName);
    
            fetch('send_pdf.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(result => {
                alert(result);
                document.querySelector(".message").innerHTML=" ";
            }) // Success message
            .catch(error => {
                alert('Error: ' + error);
                document.querySelector(".message").innerHTML=" ";
            }) // Error handling
        });
    }catch(error){
        alert("Log In or Sign Up first.")
    }
    
});
