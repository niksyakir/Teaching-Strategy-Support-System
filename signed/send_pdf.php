<?php
// Include the Composer autoloader
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['pdf'])) {
    // Check if PDF is uploaded
    $uploadedPdf = $_FILES['pdf'];

    if ($uploadedPdf['error'] === UPLOAD_ERR_OK) {
        // Move the uploaded PDF to a temporary location
        $uploadPath = 'uploads/' . $uploadedPdf['name'];
        if (move_uploaded_file($uploadedPdf['tmp_name'], $uploadPath)) {

            //Get name and email
            $userName = isset($_POST['userName']) ? $_POST['userName'] : 'Unknown User'; 
            $userEmail = isset($_POST['userEmail']) ? $_POST['userEmail'] : 'Unknown User'; 

            // Set up PHPMailer for email sending
            $mail = new PHPMailer(true);
            try {
                // SMTP server configuration
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // Replace with SMTP server, this one i use gmail 
                $mail->SMTPAuth = true;
                $mail->Username = 'nnikmuhammadsyakir@gmail.com'; // Your email
                $mail->Password = 'gzqc loww fnpq qrwb'; // Your app password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                // Set the email recipients
                $mail->setFrom('nnikmuhammadsyakir@gmail.com', 'EduInsight'); // Your email
                $mail->addAddress($userEmail, $userName); // Recipient's email

                // Attach the uploaded PDF
                $mail->addAttachment($uploadPath); // Attach the PDF from server

                // Set the email subject and body
                $mail->isHTML(true);
                $mail->Subject = 'Teaching Strategy Recommendation';
                $mail->Body    = 'Please find attached the PDF with teaching strategies for your course.';

                // Send the email
                $mail->send();

                // Delete the PDF from server after email is sent
                unlink($uploadPath);

                echo 'PDF sent successfully!';
            } catch (Exception $e) {
                echo "Error: {$mail->ErrorInfo}";
            }
        } else {
            echo 'Failed to upload PDF.';
        }
    } else {
        echo 'No PDF received.';
    }
} else {
    echo 'Invalid request.';
}
?>
