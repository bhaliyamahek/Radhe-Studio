<?php
// Load Composer's autoloader
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);  // Create a new PHPMailer instance

try {
    //Server settings
    $mail->isSMTP();                                    // Use SMTP
    $mail->Host = 'smtp.gmail.com';                      // SMTP server (Gmail in this case)
    $mail->SMTPAuth = true;                             // Enable SMTP authentication
    $mail->Username = 'bhaliyamahek78@gmail.com';           // SMTP username (your Gmail address)
    $mail->Password = 'dmuh skhh xitp ffsn';            // SMTP password (your Gmail password or App Password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
    $mail->Port = 587;                                  // TCP port to connect to (587 for TLS)
    
    //Recipients
    $mail->setFrom('bhaliyamahek78@gmail.com', 'Sender');   // Sender email
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $to = "recipient@example.com"; // Replace with the recipient's email address
        $from = $_POST['email'];
        $message = $_POST['message'];
        $subject = "Message from " . $from;
    
        // Set the headers
        $headers = "From: " . $from . "\r\n" .
                   "Reply-To: " . $from . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();
    
        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            echo "Email sent successfully!";
        } else {
            echo "Failed to send email.";
        }
    }
    //$mail->addAddress('riddhigohel792@gmail.com', 'Order Confirm'); // Recipient email

    // Content
    $mail->isHTML(true);                              // Set email format to HTML
    $mail->Subject = 'Order Confirm';
    $mail->Body    = 'Your Order has been Confirmed';
    //$mail->AltBody = 'This is a test email sent from PHP using PHPMailer (plain text).';

    // Send email
    $mail->send();
    echo 'Message has been sent successfully!';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
