
<?php
include('connection.php');

$name=htmlspecialchars(stripslashes(trim($_POST['name'])));
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$country=$_POST['country'];

$query=htmlspecialchars(stripslashes(trim($_POST['query'])));
	//Insert query
	$sql = "INSERT INTO enquiry(name, email, mobile, country,query)
	VALUES ('$name', '$email', '$mobile','$country','$query')";
	

if(mysqli_query($con,$sql))
{
	    

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
	$mail->FromName = "I3DC Doctor Inquiry";

	$mail->addAddress("info@image3dconversion.com.test-google-a.com", "Image3dconversion");
	$mail->addAddress("developer@image3dconversion.com.test-google-a.com", "Support");
	//$mail->addAddress("nita@image3dconversion.com", "Support");
	$mail->isHTML(true);

	$mail->Subject = "Doctor Inquiry Form";

	$mail->Body = 	'


    Image3dconversion - You have got a new doctor inquiry request. <br><br>
   <TABLE BORDER="1" WIDTH="100%">
  <TR>
   <TD>
   <table width="100%" border="1" cellspacing="1" cellpadding="1">
    <caption><h2><b> Doctor Details</b></h2></caption>
    <tr>

      <td width="50%" style="font-size:16px;"><b>  Name: </b></td>
      <td width="50%" style="font-size:16px;"><b>'.$name.'</b></td>
    </tr>
    <tr>
      <td width="50%" style="font-size:16px;"> <b>Email:</b> </td>
      <td width="50%" style="font-size:16px;"><b>'.$email.'</b></td>
    </tr>
    <tr>
      <td width="50%" style="font-size:16px;"><b>Mobile:</b> </td>
      <td width="50%" style="font-size:16px;"> <b> '.$mobile.'</b></td>
    </tr>
    <tr>
      <td width="50%" style="font-size:16px;"> <b>Country:</b> </td>
      <td width="50%" style="font-size:16px;"> <b> '.$country.'</b></td>
    </tr>
    <tr>
      <td width="50%" style="font-size:16px;"> <b>Query:</b> </td>
      <td width="50%" style="font-size:16px;"> <b> '.$query.'</b></td>
    </tr>
  </table><br><br>

 <center> <h1><b>Follow this link to approve <a href="">Click Here</a></b></h1></center>
';


if(!$mail->send())
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

	$mailnew->addAddress($email, $name);

	$mailnew->isHTML(true);

	$mailnew->Subject = "Doctor Inquiry Form - Image3dconversion";

	$mailnew->Body =  "<table class='' cellpadding='0' align='center' style='width:30%' border='0'>       			
       			<tr  align='center'><td colspan='2'><img src='images/logo.jpg' width='500px'></td></tr>
       			<tr  class='shadow' align='center' style='height: 100px;'><td colspan='2'>Thank you for showing interest in our services</td></tr>
       			<tr  align='center'><td colspan='2'><img src='images/20200901_114755.jpg' width='500px' height='600px'></td></tr>
       			<tr  align='center' style='height: 150px'><td colspan='2'><p>I you interested then download <a href='https://www.image3dconversion.com/download/guided-surgery-guide.pdf'>Guided surgery workflow</a></p><a class='btn btn-info' href='https://www.image3dconversion.com/download/guided-surgery-guide.pdf'>Download</a></td></tr>
       			<tr  align='center'><td colspan='2'><h1>Our Services</h1></td></tr>
       			<tr><td colspan='2'>
       				<table><tr align='center'>
       				<td><a href='https://www.image3dconversion.com'><img  style='padding: 5px' class='img-fluid' src='https://www.image3dconversion.com/img/h8.jpg'></a>sddfsd</td>
       				<td><a href='https://www.image3dconversion.com'><img  style='padding: 5px' class='img-fluid' src='https://www.image3dconversion.com/img/h4.jpg'></a>sdfsdf</td>
       			</tr>
       			<tr align='center'>
       				<td align='center'><a href='https://www.image3dconversion.com'><img  style='padding: 5px' class='img-fluid' src='https://www.image3dconversion.com/img/new-h3.jpg'></a>sdfsd</td>
       				<td><a href='https://www.image3dconversion.com'><img style='padding: 5px' class='img-fluid' src='https://www.image3dconversion.com/img/h5.jpg'></a>sdfsd</td>
       			</tr>
		       		</table>
		       	</td>
		       </tr>
		       <tr align='center'><td colspan='2'><a class='btn btn-info' style='margin-top: 25px' href='https://www.image3dconversion.com'>All Services</a></td></tr>
       		</table>

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

    if(!$mailnew->send())
	{
	    echo "Mailer Error: " . $mailnew->ErrorInfo;
	} 

	else
	{
	    echo '
		<script src="sweetalert/sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="sweetalert/sweetalert.css">
		<script>$(function(){
	    swal("Thank You!", "Your request is being processed & will be approved within 24 hours!", "success");
		});</script>';
	}
}

}


mysqli_close($conn);
?>

