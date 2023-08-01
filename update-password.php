<?php
 ini_set("display_errors", 1);
require "connection.php";
@session_start();
ob_start();


if(isset($_POST['forget']))
{
    
  $forget1=mysqli_real_escape_string($con,$_POST['forget']);
  $forget=filter_var($forget1,FILTER_SANITIZE_STRING);

  $sql="SELECT * FROM imagedoc WHERE email = '$forget'";
      
  if($query_run=mysqli_query($con,$sql))
  {
    $query_num_rows=mysqli_num_rows($query_run);
    if($query_num_rows==0)
    {
      header('location:forget-password.php?notvalid=1');
    }
    elseif($query_num_rows==1)
    {
        require_once "mail/class.smtp.php";
        require_once "mail/class.phpmailer.php";
        
        $otp = rand(100000,999999);
        $msg = "Your OTP (One Time Password) for password reset is: ".$otp."<br>Warm Regards,<br>Image 3D Conversion";
    
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
    
        $mail->addAddress("$forget", "");
        
        $mail->isHTML(true);
    
        $mail->Subject = "OTP - Password Reset - Image3DConversion";
    
        // $mail->Body =   "Your OTP (One Time Password) for password reset is: ".$otp."<br><br>Your OTP will expire soon.<br><br>Please Do Not share your OTP with anyone.<br><br>For any OTP related query please email us at info@image3dconversion.com.<br><br>Warm Regards,<br>Image 3D Conversion";
        $mail->Body = $msg;
    
    
        if(!$mail->send())
        {
          echo "Mailer Error: " . $mail->ErrorInfo;
        }
        else
        {
            $match=0;
            $encoded_otp = base64_encode($otp);
            $_SESSION['encoded_otp'] = $encoded_otp;
            $_SESSION['forget_email'] = $forget;
        }
    
    }
  }

}

elseif(!empty($_POST['one']) && isset($_POST['one']))
  {
    $one1=mysqli_real_escape_string($con,$_POST['one']);
    $one=filter_var($one1,FILTER_SANITIZE_STRING);
    $decoded_otp = base64_decode($_SESSION['encoded_otp']);

    if($one==$decoded_otp)
    {
      $_SESSION['forgetdoc'] = $_SESSION['forget_email'];
      unset($_SESSION['forget_email']);
      unset($_SESSION['encoded_otp']);
     header('location:update-password-final.php');
    }
    else
    {
      $match=='1';
       echo'
         <script>
         alert("OTP entered is wrong. Please enter valid OTP.", "", "error");</script>
       ';
      
    }
  }

else{
    header("Location:404.html");
}

?>


<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-T8BNCHV');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Medikal - Health & Medical HTML Template" />
    <meta name="keywords" content="Surgical Guide implant, Guided implant surgery, Dental intraoral scanner, Intraoral digital scanner, Digital dental scanner, Digital Dentistry, 3d digital dentistry, Full mouth dental implants, Implant dentistry, All on 4 dental implants, Surgical stent dental, Nextdent surgical guide, Nobel biocare surgical guide, Surgical guide for dental implant, Surgical stent, dental" />
    <meta name="author" content="ThemeMascot" />
    <!-- Page Title -->
    <title>OTP</title>
    <!-- Favicon and Touch Icons -->
    <link href="images/new-favicon.png" rel="shortcut icon" type="image/png">
    <!-- Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/css-plugin-collections.css" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet" />
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
    <link rel="stylesheet" type="text/css" href="sweetalert/sweetalert.css">

    <!-- CSS | Theme Color -->
    <link href="css/colors/theme-skin-blue.css" rel="stylesheet" type="text/css">
    <!-- external javascripts -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="sweetalert/sweetalert.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="js/jquery-plugin-collection.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script></script>
  </head>
  <body class="has-side-panel side-panel-right fullwidth-page side-push-panel">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8BNCHV" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <div id="wrapper" class="clearfix">
      <!-- preloader -->
      <!-- Header --> <?php include 'header.php'; ?>
      <!-- Start main-content -->
      <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider " data-bg-img="new-banner.jpg">
          <div class="container pt-5 pb-0">
            <!-- Section Content -->
            <div class="section-content">
              <div class="row">
                <div class="col-md-12 text-center">
                  <h2 class="title" style="color:white">OTP verification</h2>
                  <ol class="breadcrumb text-center mt-5">
                    <li>
                      <a href="#" style="color:white">Home</a>
                    </li>
                    <li class="active" style="color:white">OTP</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <h3>OTP has been sent to your Email id</h3>
                <h5>It might take few minutes, so kindly have patience.</h5>
                <!-- Mailchimp Subscription Form-->
                <form method="post" class="newsletter-form mt-40" id="main">
                  <label for="mce-EMAIL"></label>
                  <div class="input-group">
                    <input type="text" id="mce-EMAIL" data-height="45px" class="form-control input-lg" placeholder="Enter OTP" name="one" value="" maxlength="6" onkeypress="return isNumber(event)">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-colored btn-dark btn-lg m-0" data-height="45px" name="otpverify" id="otpverify">Submit</button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- end main-content -->
      <!-- Footer --> <?php include 'footer.php'; ?> <a class="scrollToTop" href="#">
        <i class="fa fa-angle-up"></i>
      </a>
    </div>
    <!-- end wrapper -->
    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script src="js/custom.js"></script>
    <script type="text/javascript">
      function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
          return false;
        }
        return true;
      }
    </script>
  </body>

<?php

if($match=='1')
{
  echo'<script src="sweetalert/sweetalert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="sweetalert/sweetalert.css">
      <script>
        $(function(){
          swal("The OTP entered is incorrect. Please enter valid OTP", "", "error")
        })
      </script>';
}


?>   

</html>