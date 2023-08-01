<?php
require "connection.php";
@session_start();
ob_start();

$alert='0';
$yes='0';
if(isset($_POST['loginid']))
    {
      $login=mysqli_real_escape_string($con,$_POST['loginid']);
      $loginid=filter_var($login,FILTER_SANITIZE_STRING);

      $loginpass=mysqli_real_escape_string($con,$_POST['loginpassword']);
      $loginpassword=filter_var($loginpass,FILTER_SANITIZE_STRING);

      $sql="SELECT * FROM imagedoc WHERE email = '$loginid' && password='$loginpassword'";

        if($query_run=mysqli_query($con,$sql))
        {

         	$logged_in_user = mysqli_fetch_assoc($query_run);
		        $approved = $logged_in_user['approved'] ;



            $query_num_rows=mysqli_num_rows($query_run);
            if($query_num_rows==0)
            {
             $alert='1';

            }
            elseif($query_num_rows==1)
            {

                if($approved==1)
            {


		        $loggedinemail = $logged_in_user['email'] ;
			    $_SESSION['doc'] = $loggedinemail;

						header('location:order-form');
            }

            elseif($approved==0)
            {
                $yes='1';
            }

            }
        }


    }

?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="" />
<meta name="keywords" content=" clinic, dental, doctor, health, hospital, medical, medical theme, medicine, therapy" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Doctor Login & Register</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

<!-- Favicon and Touch Icons -->
<link href="images/new-favicon.png" rel="shortcut icon" type="image/png">


<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-blue.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->

<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T8BNCHV');</script>
<!-- End Google Tag Manager -->
</head>
<body class="has-side-panel side-panel-right fullwidth-page side-push-panel">
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8BNCHV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="body-overlay"></div>
<div id="side-panel" class="dark" data-bg-img="images/bg/bg8.jpg">
  <div class="side-panel-wrap">
    <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="pe-7s-close font-36"></i></a></div>
    <a href="javascript:void(0)"><img alt="logo" src="images/logo-wide.png"></a>
    <div class="side-panel-nav mt-30">
      <div class="widget no-border">
        <nav>
          <ul class="nav nav-list">
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a class="tree-toggler nav-header">Pages <i class="fa fa-angle-down"></i></a>
              <ul class="nav nav-list tree">
                <li><a href="#">About</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">FAQ</a></li>
              </ul>
            </li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="side-panel-widget mt-30">
      <div class="widget no-border">
        <ul>
          <li class="font-14 mb-5"> <i class="fa fa-phone text-theme-colored"></i> <a href="#" class="text-gray">123-456-789</a> </li>
          <li class="font-14 mb-5"> <i class="fa fa-clock-o text-theme-colored"></i> Mon-Fri 8:00 to 2:00 </li>
          <li class="font-14 mb-5"> <i class="fa fa-envelope-o text-theme-colored"></i> <a href="#" class="text-gray">contact@yourdomain.com</a> </li>
        </ul>
      </div>
      <div class="widget">
        <ul class="styled-icons icon-dark icon-theme-colored icon-sm">
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        </ul>
      </div>
      <p>Copyright &copy;2016 ThemeMascot</p>
    </div>
  </div>
</div>
<div id="wrapper" class="clearfix">
  <!-- preloader -->


  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->

    <section class="inner-header divider " data-bg-img="new-banner.jpg">
         <div class="container pt-5 pb-0">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title" style="color:white">Doctor Login/Register</h2>
              <ol class="breadcrumb text-center text-black mt-5">
                <li><a href="#" style="color:white">Home</a></li>

                <li class="active" style="color:white">Doctor Login/Register</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>





    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <ul class="nav nav-tabs">
              <li><a href="https://orders.image3dconversion.com/doc/login">Login</a></li>
              <li  class="active"><a href="#register-tab" data-toggle="tab">Register</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade in p-15" id="login-tab">
                <h4 class="text-gray mt-0 pt-5">Doctor Login</h4>
                <hr>

                <form name="login-form" class="clearfix" method="post" action="doctor-login.php">
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="form_username_email">Email</label>
                      <input id="loginid" name="loginid" class="form-control" type="text" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label for="form_password">Password</label>
                      <input id="form_password" name="loginpassword" class="form-control" type="password" required>
                    </div>
                  </div>
                  <div class="checkbox pull-left mt-15">

                  </div>
                  <div class="form-group pull-left mt-10">

                    <button type="submit" class="btn btn-dark btn-sm">Login</button>
                    <br>
                    <a class="text-theme-colored font-weight-600 font-12" href="forget-password.php">Forgot Your Password?</a>
                  </div>


                </form>
              </div>
              <div class="tab-pane fade active  in p-15" id="register-tab">
                <form name="reg-form" class="register-form" method="post" action="doctor-login.php">
                  <div class="icon-box mb-0 p-0">
                    <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                      <i class="pe-7s-users"></i>
                    </a>
                    <h4 class="text-gray pt-10 mt-0 mb-30">Don't have an Account? Register Now.</h4>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Name</label>
                      <input name="one" class="form-control" type="text" required>
                    </div>
                      <div class="form-group col-md-6">
                      <label for="form_choose_username">Mobile (Eg +919854123456)</label>
                      <input id="form_choose_username" pattern="^\+[1-9]{1}[0-9]{3,14}$"  name="three" class="form-control" type="text" required>
                    </div>

                  </div>

                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Practice Name</label>
                      <input name="six" class="form-control" type="text" required>
                    </div>
                      <div class="form-group col-md-6">
                      <label for="form_choose_speciality">Clinical Speciality</label>                      
                      <select name="seven" class="form-control" required>
                        <option value="">Select</option>
                        <option value="Prosthodontist">Prosthodontist </option>
                        <option value="Orthodontist">Orthodontist </option>
                        <option value="General Sugeon">General Sugeon </option>                        
                      </select>
                    </div>
                  </div>

                  <div class="row">
                      <div class="form-group col-md-12">
                      <label for="form_choose_password">Address</label>
                      <input id="form_choose_password" name="four" class="form-control" type="text" required>
                    </div>

                  </div>
                   <div class="row">
                      <div class="form-group col-md-12">
                      <label for="form_choose_zip"> Zip Code</label>
                      <input id="form_choose_zip" name="eight" class="form-control" type="number" required>
                    </div>

                  </div>
                  <div class="row">
                   <div class="form-group col-md-6">
                      <label>Email Address</label>
                      <input name="two" class="form-control" type="email" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Password</label>
                      <input id="form_re_enter_password" name="five"  class="form-control" type="text" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-dark btn-lg btn-block mt-15" type="submit">Register Now</button>
                  </div>
                  <div class="text-center">
                    <a class="text-theme-colored font-weight-600 font-12" href="https://orders.image3dconversion.com/doc/login">Already registered? Login here</a>

                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  <!-- Footer -->
  <?php include 'footer.php'; ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>

<!-- Mirrored from thememascot.net/demo/personal/s/medikal/v4.0/demo/form-login-register-style2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 11:20:48 GMT -->
<?php

if($alert=='1')
{
echo'
<script src="sweetalert/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert/sweetalert.css">
           <script>$(function(){
    swal("Invalid Combination", "", "error")

});</script>';
}

if($yes=='1')
{

      echo'
<script src="sweetalert/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert/sweetalert.css">
           <script>$(function(){
    swal("Awaiting Approval", "", "warning")

});</script>';
}



if(isset($_POST['two']))
    {
      $tw=mysqli_real_escape_string($con,$_POST['two']);
      $two=filter_var($tw,FILTER_SANITIZE_STRING);

      $sql="SELECT * FROM imagedoc WHERE email = '$two'";

        if($query_run=mysqli_query($con,$sql))
        {

            $query_num_rows=mysqli_num_rows($query_run);
            if($query_num_rows==0)
            {
              $already='0';

            }
            elseif($query_num_rows==1)
            {
             $already='1';


            }
        }


    }






?>
<?php
$registered='0';

$aschoolemail='0';
$adminemail='0';
if
    (isset($_POST['one'])&&
     isset($_POST['two'])&&
     isset($_POST['three'])&&
     isset($_POST['four'])&&
     isset($_POST['five'])&&
     isset($_POST['six'])&&
     isset($_POST['seven'])&&
     isset($_POST['eight']))
     {
        $name1=mysqli_real_escape_string($con,$_POST['one']);
        $name=filter_var($name1,FILTER_SANITIZE_STRING);
        $emai=mysqli_real_escape_string($con,$_POST['two']);
        $email=filter_var($emai,FILTER_SANITIZE_STRING);
        $mob=mysqli_real_escape_string($con,$_POST['three']);
        $mobile=filter_var($mob,FILTER_SANITIZE_STRING);
        $add=mysqli_real_escape_string($con,$_POST['four']);
        $address=filter_var($add,FILTER_SANITIZE_STRING);
        $pass=mysqli_real_escape_string($con,$_POST['five']);
        $password=filter_var($pass,FILTER_SANITIZE_STRING);
        $practice1=mysqli_real_escape_string($con,$_POST['six']);
        $practice=filter_var($practice1,FILTER_SANITIZE_STRING);
        $speciality1=mysqli_real_escape_string($con,$_POST['seven']);
        $speciality=filter_var($speciality1,FILTER_SANITIZE_STRING);
        $zipcode1=mysqli_real_escape_string($con,$_POST['eight']);
        $zipcode=filter_var($zipcode1,FILTER_SANITIZE_STRING);

    if
    (!empty($name)&&
     !empty($email)&&
     !empty($mobile)&&
     !empty($address)&&
     !empty($password)&&
     !empty($practice)&&
     !empty($speciality)&&
     !empty($zipcode))
    {
    if($already=='0')
        {
         $sqlsc="INSERT INTO imagedoc (name,email,mobile,address,password,practice,speciality,zipcode)
VALUES('$name','$email','$mobile','$address','$password','$practice','$speciality','$zipcode')";
        if(mysqli_query($con,$sqlsc))
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
$mail->FromName = "I3DC Doctor Registration";

$mail->addAddress("info@image3dconversion.com.test-google-a.com", "Image3dconversion");
$mail->addAddress("developer@image3dconversion.com.test-google-a.com", "Support");

$mail->isHTML(true);

$mail->Subject = "Doctor Registration Form";

$mail->Body = 	'
  Image3dconversion - You have got a new doctor registration request. <br><br>
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
      <td width="50%" style="font-size:16px;"> <b>Address:</b> </td>
      <td width="50%" style="font-size:16px;"> <b> '.$address.'</b></td>
    </tr>
    <tr>
      <td width="50%" style="font-size:16px;"> <b>Zip Code:</b> </td>
      <td width="50%" style="font-size:16px;"> <b> '.$zipcode.'</b></td>
    </tr>
    <tr>
      <td width="50%" style="font-size:16px;"> <b>Practice Name:</b> </td>
      <td width="50%" style="font-size:16px;"> <b> '.$practice.'</b></td>
    </tr>
    <tr>
      <td width="50%" style="font-size:16px;"> <b>Clinical Speciality:</b> </td>
      <td width="50%" style="font-size:16px;"> <b> '.$speciality.'</b></td>
    </tr>

  </table><br><br>

 <center> <h1><b>Follow this link to approve <a href="https://image3dconversion.com/doc-register.php">Click Here</a></b></h1></center>

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

$mailnew->Subject = "Doctor Registration Form - Image3dconversion";

$mailnew->Body = 	 "Hello ".$name.",
<table><tr><td><img src='https://www.image3dconversion.com/images/welcome-doctor.jpg'></td></tr>
<tr><td align='center'><p><b>Warm Regards</b><br>Image3dconversion Team<br> For any enquires you can call us or whatsapp us at 8876395581<br>
For regular updates follow us on </td></tr>
<tr><td align='center'>
  <a style='float:left;margin-right:5px;align='center'' href='https://www.facebook.com/image3dconversion/'><img src='https://www.image3dconversion.com/images/f.png'></a>
  <a  style='float:left;margin-right:5px;align='center'' href='https://www.linkedin.com/in/image3dconversion/'><img src='https://www.image3dconversion.com/images/l.png'></a>
  <a  style='float:left;margin-right:5px;align='center'' href='https://www.instagram.com/image3dconversion/'><img src='https://www.image3dconversion.com/images/i.png'></a><br>
  <br>
</p></td></tr></table>";


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
        }

         else
                                    {

                                          echo'
<script src="sweetalert/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert/sweetalert.css">
           <script>$(function(){
    swal("Email Already registered", "", "error")

});</script>';
                                    }



    }
}





if(isset($_GET['updated']))
{

      echo'
<script src="sweetalert/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert/sweetalert.css">
           <script>$(function(){
    swal("Password Updated!", "Try loggin in!", "success");

});</script>';







}







?>





























</html>
