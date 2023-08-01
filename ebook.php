<?php 
	$email = $_POST['email'];

	if(isset($_POST['ebook_download'])){

		require_once "mail/class.smtp.php";
        require_once "mail/class.phpmailer.php";
        
        $msg = "New User Downloaded Ebook (From Website Footer Ebook Form): ".$email;
    
        $mail = new PHPMailer;
    
        //Enable SMTP debugging.
        $mail->SMTPDebug = 2;
        //Set PHPMailer to use SMTP.
        $mail->Host = 'tls://smtp.gmail.com:587';
        //Set this to true if SMTP host requires authentication to send email
        $mail->SMTPAuth = true;
        //Provide username and password
        $mail->Username = "info@image3dconversion.com";
        $mail->Password = "Img3d@5891";
        //If SMTP requires TLS encryption then set it
        $mail->From = "info@image3dconversion.com";
        $mail->FromName = "Image3DConversion";
    
        $mail->addAddress("info@image3dconversion.com.test-google-a.com", "");
        $mail->addAddress("developer@image3dconversion.com.test-google-a.com", "");
        
        $mail->isHTML(true);
    
        $mail->Subject = "New User Downloaded Ebook - Image3DConversion";
    
        $mail->Body = $msg;
    
    
        if(!$mail->send())
        {
          echo "Mailer Error: " . $mail->ErrorInfo;
        }
        else
        {
            header("Location:https://drive.google.com/uc?id=19YDNxNqor6dbz_bcYElWZm71K2jrB2Mj&export=download");
        }

	}
 ?>