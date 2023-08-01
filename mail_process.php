<?php 

require_once "mail/class.smtp.php";
require_once "mail/class.phpmailer.php";


$mail = new PHPMailer;

//Enable SMTP debugging.
$mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
$mail->Host = 'tls://smtp.gmail.com:587';
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;
//Provide username and password
$mail->Username = "info@image3dconversion.com";
$mail->Password = "I#3dc1985@!@#";
//If SMTP requires TLS encryption then set it
$mail->From = "info@image3dconversion.com";
$mail->FromName = "Newsletter Testing";

$mail->addAddress("developer@image3dconversion.com.test-google-a.com", "Developer");
$mail->isHTML(true);

$mail->Subject = "NewsletterTest";

$mail->Body =  'Test Sucess';
if($mail->send())
{
    echo "Mail Sent";
}
else
{
   echo "Mailer Error: " . $mail->ErrorInfo;
}

?>