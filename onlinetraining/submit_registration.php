<?php

$servername = "localhost";
$username = "imagesudip";
$password = "image@2020";
$dbname = "newimagedata";


// Create connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// if($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
      $secret = "6LcYvqMaAAAAAODrui72dp1ZISgQYNIgsjdxkXGW";
      $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);

      if($responseData->success){

         $fullName = mysqli_real_escape_string($db,$_POST['fullName']);
         $emailId = mysqli_real_escape_string($db,$_POST['emailId']);
         $pcode = mysqli_real_escape_string($db,$_POST['code']);
         $phoneNo = mysqli_real_escape_string($db,$_POST['phoneNo']);
         $country = mysqli_real_escape_string($db,$_POST['country']);
         $state = mysqli_real_escape_string($db,$_POST['state']);
         $city = mysqli_real_escape_string($db,$_POST['city']);
         $pincode = mysqli_real_escape_string($db,$_POST['pincode']);
         $speciality = mysqli_real_escape_string($db,$_POST['speciality']);
         $refId = uniqid('img3d');

         if(empty($_POST['check_list'])){
            $chk="";          
        } 
        else{
         $check_list=$_POST['check_list'];  
         $chk="";  
          foreach($check_list as $check)  
             {  
               $chk .= $check.",";  
             } 
        } 

         $date = date('Y-m-d');


         $sql = "INSERT INTO registration_landing (ref_id, name, email, phone, country, state, city, pin, speciality, module, post_date)
          VALUES ('$refId', '$fullName', '$emailId', '$pcode $phoneNo', '$country', '$state', '$city', '$pincode', '$speciality', '$chk', '$date')";

           if ($db->query($sql) === TRUE) {
           
            require_once "../mail/class.smtp.php";
            require_once "../mail/class.phpmailer.php";
        
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
            $mail->FromName = "I3DC Online Training";
            $mail->addReplyTo($emailId);
        
            $mail->addAddress("developer@image3dconversion.com.test-google-a.com", "Support");
            $mail->addAddress("training@image3dconversion.com.test-google-a.com", "Support");
            $mail->isHTML(true);
        
            $mail->Subject = "This lead has been generated through LANDING PAGE";
        
            $mail->Body = '
                Image3dconversion - You have got a new Online Training Registration. <br><br>
               <TABLE BORDER="1" WIDTH="100%">
              <TR>
               <TD>
               <table width="100%" border="1" cellspacing="1" cellpadding="1">
                <caption><h2><b> I3DC - Online Training Data</b></h2></caption>
                <tr>
                  <td width="50%" style="font-size:16px;"><b>  Name: </b></td>
                  <td width="50%" style="font-size:16px;"><b>' . $fullName . '</b></td>
                </tr>
                <tr>
                  <td width="50%" style="font-size:16px;"> <b>Email:</b> </td>
                  <td width="50%" style="font-size:16px;"><b>' . $emailId . '</b></td>
                </tr>
                <tr>
                  <td width="50%" style="font-size:16px;"><b>Mobile:</b> </td>
                  <td width="50%" style="font-size:16px;"> <b> ' . $pcode. '' . $phoneNo. '</b></td>
                </tr>
                <tr>
                  <td width="50%" style="font-size:16px;"> <b>Address:</b> </td>
                  <td width="50%" style="font-size:16px;"> <b> ' . $country . ',' . $state . ',' . $city . ',' . $pincode . '</b></td>
                </tr>
                <tr>
                  <td width="50%" style="font-size:16px;"> <b>Speciality:</b> </td>
                  <td width="50%" style="font-size:16px;"> <b> ' . $speciality . '</b></td>
                </tr>
              
                <tr>
                  <td width="50%" style="font-size:16px;"> <b>Modules:</b> </td>
                  <td width="50%" style="font-size:16px;"> <b> ' . $chk . '</b></td>
                </tr>
              </table><br><br>';
              
                          if (!$mail->send())
                {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                }
                else
                {
                    $mailnew = new PHPMailer;
                    //Enable SMTP debugging.
                    $mailnew->SMTPDebug = 3;
                    //Set PHPMailer to use SMTP.
                    $mailnew->Host = 'tls://smtp.gmail.com:587';
                    //Set this to true if SMTP host requires authentication to send email
                    $mailnew->SMTPAuth = true;
                    //Provide username and password
                    $mailnew->Username = "info@image3dconversion.com";
                    $mailnew->Password = "I#3dc1985@!@#";
                    //If SMTP requires TLS encryption then set it
                    $mailnew->From = "info@image3Dconversion.com";
                    $mailnew->FromName = "Image3dconversion";
            
                    $mailnew->addAddress($emailId);
            
                    $mailnew->isHTML(true);
            
                    $mailnew->Subject = "Image3Dconversion - Online Registration";
            
                    $mailnew->Body = "Hi " . $one . ",<p>Thank you for Registering for the Live Online Training.<br><br> We will get in touch with you soon.
                       <br><p>      
                        <p><b>Warm Regards</b><br>Image3dconversion Team<br> For any enquires you can call us or whatsapp us at 8876395581<br>
                        For regular updates follow us on <br><a href='https://www.facebook.com/image3dconversion/'>Facebook</a><br><a href='https://www.linkedin.com/in/image3dconversion/'>LinkedIn</a><br><a href='https://www.instagram.com/image3dconversion/'>Instagram</a><br><hr>
                        <b>Contact Us</b><br>
                        Address : 1st Floor, H.N. 81, Niva Villa, Bylane, 3, Pub Sarania Rd, Chandmari, Guwahati, Assam 781003
                        <br>
                        India : (+91)88763 95581<br>
                        USA & Canada: (+1)888-276-9811<br>
                        UK: (+44)800-090-3841
                        <br>
                        </p>";
            
                    if (!$mailnew->send())
                    {
                        echo "Mailer Error: " . $mailnew->ErrorInfo;
                    }
                    else
                    {
                        echo "<script>window.location='Thank-You-Page.php?ref=$refId'</script>";
            
                    }
                }

            // echo "<script>window.location='Thank-You-Page.php?ref=$refId'</script>";
           } else {
            // echo "Error: " . $sql . "<br>" . $db->error;
             echo '<script language="javascript">';
             echo 'alert("Something went wrong, go back and try again!")';
             echo '</script>';
            echo "<script>window.location='Registration.html'</script>";
           }        
      }
      else {
          echo '<script language="javascript">';
          echo 'alert("Robot verification failed, please try again.")';
          echo '</script>';
          echo "<script>window.history.back();</script>";
        }
     }else {
        echo '<script language="javascript">';
        echo 'alert("Please click on the reCAPTCHA box.")';
        echo '</script>';
        echo "<script>window.history.back();</script>";
      }

?>

