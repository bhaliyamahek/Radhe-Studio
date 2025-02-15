
<?php
  $conn=mysqli_connect("localhost","root","","raphotodb");
  
  $nm=$_POST['cname'];
  $id=$_POST['Eid'];
  $add=$_POST['caddress'];
  $cno=$_POST['cnumber'];
  $datetime=$_POST['cdate'];
  $event=$_POST['cevent'];
  //$event = "photography";
  $ins="insert into order_detalis
        values('$nm','$id','$add',$cno,'$datetime','$event')";
        mysqli_query($conn,$ins);
        echo "<script> alert('Record Inserted');</script>";
       // header("location:orders.php");
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
    $mail->setFrom('bhaliyamahek78@gmail.com', 'Radhe Studio');   // Sender email
    $mail->addAddress($id, 'Order Confirm'); // Recipient email

    // Content
    $mail->isHTML(true);                              // Set email format to HTML
    $mail->Subject = 'Order Confirm';
    $mail->Body    = 'Your Order has been Confirmed';
    //$mail->AltBody = 'This is a test email sent from PHP using PHPMailer (plain text).';

    // Send email
    $mail->send();
    //echo 'Message has been sent successfully!';
} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}    
header("location:orders.php");
?>
<!-- <html>
  <body>
    <center>
      <img src="images/sccaner.jpeg" alt="Make your payment here" width="500px" height="500px">
     <br/> <a href="orders.php"><input type="button" value="Go to Your Orders"></a>
    </center>
  </body>
</html> -->

