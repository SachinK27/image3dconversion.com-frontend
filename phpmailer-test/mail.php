<?php
require "PHPMailer/PHPMailerAutoload.php";

$mail = new PHPMailer;
$mail->setFrom('autoreply@i3dliner.com', 'I3D Liner');
$mail->addAddress('nitapatra.mds@gmail.com', 'I3D Liner');
$mail->isHTML(true);

$mail->Subject = "Subject Text";

$mail->addEmbeddedImage('logo.png', 'logo_p2t');
$mail->addEmbeddedImage('f.png', 'f_p2t');
$mail->addEmbeddedImage('t.png', 't_p2t');
$mail->addEmbeddedImage('l.png', 'l_p2t');
$mail->addEmbeddedImage('i.png', 'i_p2t');
$mail->Body = "
<html>
<head>
<title></title>
</head>
<body>                
<div style='width:800px;background:#fff;border-style:groove;padding-left:10px'>
<div style='width:50%;text-align:left;'><a href='i3dliner.com' target='_blank'> <img  
src=\"cid:logo_p2t\"' width=\"175px\"' height=\"100px\"'></a></div>
<hr width='100%' size='2' color='#A4168E'>

<h2 style='width:50%;height:40px; text-align:right;margin:0px;padding-
left:390px;color:#B24909;'>Registration Successful</h2>
<h4 style='color:#ea6512;margin-top:-20px;'> Hello, nita
</h4>
<p>Thank you for submitting your enquiry form. We will review your details and get in touch with you soon. </p>
<hr/>
<div style='height:210px;padding:10px'>
    <p><b>Warm Regards</b><br>I3d Liner Team<br>Follow us on social media<br><br>
    <a href='i3dliner.com'><img src=\"cid:f_p2t\"'></a>
    <span><a href='i3dliner.com'><img src=\"cid:t_p2t\"'></a></span>
    <span><a href='i3dliner.com'><img src=\"cid:l_p2t\"'></a></span>
    <span><a href='i3dliner.com'><img src=\"cid:i_p2t\"'></a></span>
    </p>
</div> 
</div>              
</body>
</html>";
if(!$mail->send()) {
  echo $error='Message was not sent.';
  echo $error.='Mailer error: ' . $mail->ErrorInfo;
} else {
  echo $error='Message has been sent.';
}
/*function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'ssl://smtp.gmail.com';
        $mail->Port = 465;  
        $mail->Username = 'autoreply@i3dliner.com';
        $mail->Password = 'i3dliner@1985';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From="autoreply@i3dliner.com";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error ="Please try Later, Error Occured while Processing...";
            return $error; 
        }
        else 
        {
            $error = "Thanks You !! Your email is sent.";  
            return $error;
        }
    }
    
    $to   = 'nitapatra.mds@gmail.com';
    $from = 'autoreply@i3dliner.com';
    $name = 'i3dliner';
    $subj = 'PHPMailer 5.2 testing from i3dliner';
    $msg = 'This is mail about testing mailing using PHP.';
    
    $error=smtpmailer($to,$from, $name ,$subj, $msg);
    */
?>

<html>
    <head>
        <title>PHPMailer 5.2 testing from DomainRacer</title>
    </head>
    <body style="background: black;">
        <center><h2 style="padding-top:70px;color: white;"><?php echo $error; ?></h2></center>
    </body>
    
</html>