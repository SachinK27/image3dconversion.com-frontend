<?php

error_reporting(0);
ini_set('display_errors', 0);

require "connection.php";
@session_start();
ob_start();

$path= parse_url($_SERVER['HTTP_REFERER'],PHP_URL_PATH); 
$fixpath = "/update-password.php";

	
if($path==$fixpath && !empty($_SESSION['forgetdoc']))
{
  $demail = $_SESSION['forgetdoc'];

  unset($_SESSION['forgetdoc']);

  $_SESSION['docemail']=$demail;

}
elseif (isset($_POST['submitforget']) && !empty($_POST['newpass']) && !empty($_POST['confirmpass']) && !empty($_SESSION['docemail'])) {

  $docemail = $_SESSION['docemail'];
  unset($_SESSION['docemail']);

  $newpass1=mysqli_real_escape_string($con,$_POST['newpass']);
  $newpass=filter_var($newpass1,FILTER_SANITIZE_STRING);
  $confirmpass1=mysqli_real_escape_string($con,$_POST['confirmpass']);
  $confirmpass=filter_var($confirmpass1,FILTER_SANITIZE_STRING);

  if ($newpass==$confirmpass) {

    $sqls="UPDATE imagedoc SET password='$newpass' WHERE email='$docemail'";
    if(mysqli_query($con,$sqls))
    {
      require_once "mail/class.smtp.php";
      require_once "mail/class.phpmailer.php";

      $mailnew = new PHPMailer;

      //Enable SMTP debugging.
      $mailnew->SMTPDebug = 3;
      //Set PHPMailer to use SMTP.
      $mailnew->Host = 'tls://smtp.gmail.com:587';
      //Set this to true if SMTP host requires authentication to send email
      $mailnew->SMTPAuth = true;
      //Provide username and password
      $mailnew->Username = "info@image3dconversion.com";
      //$mailnew->Password = "I#3dc1985@!@#";
      $mailnew->Password = "Img3d@5891";
      //If SMTP requires TLS encryption then set it
      $mailnew->From = "info@image3Dconversion.com";
      $mailnew->FromName = "Image 3D Conversion";

      $mailnew->addAddress($docemail, "");

      $mailnew->isHTML(true);

      $mailnew->Subject = "Password Changed Successfully - Image3DConversion";

      $mailnew->Body = "<p>Hello,</p><p>Your password is successfully changed.</p><p>If it was not you, kindly report us at info@image3dconversion.com.</p>";

      if(!$mailnew->send())
      {
        echo "Mailer Error: " . $mailnew->ErrorInfo;
      }
      else
      {
        $passchangemail = "Password Changed Successfully";
        $_SESSION['passchangemail'] = $passchangemail;
      }
      
      
      unset($docemail);
      session_destroy();
      echo ("<script LANGUAGE='JavaScript'>
              window.alert('Password updated successfully.');
              window.location.href='https://orders.image3dconversion.com/doc/logout';
              </script>");
      // header('location:orders.image3dconversion.com/doc/');
      die();
    }else{
      echo "<script>alert('An error occured, please try again.');</script>";
    }
  }
  else {
    echo "<script>alert('Password does not match');</script>";
  }
  

}else{
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
    <meta name="keywords" content="Surgical Guide implant, Guided implant surgery, Dental intraoral scanner, Intraoral digital scanner, Digital dental scanner, Digital Dentistry, 3d digital dentistry, Full mouth dental implants, Implant dentistry, All on 4 dental implants, Surgical stent dental, Nextdent surgical guide, Nobel biocare surgical guide, Surgical guide for dental implant, Surgical stent, dental" />
    <meta name="author" content="ThemeMascot" />
    <!-- Page Title -->
    <title>Change Password</title>
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
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- CSS | Theme Color -->
    <link href="css/colors/theme-skin-blue.css" rel="stylesheet" type="text/css">
    <!-- external javascripts -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="js/jquery-plugin-collection.js"></script>

  </head>
  <body class="has-side-panel side-panel-right fullwidth-page side-push-panel">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8BNCHV" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="body-overlay"></div>
    <div id="side-panel" class="dark" data-bg-img="images/bg/bg8.jpg">
      <div class="side-panel-wrap">
        <div id="side-panel-trigger-close" class="side-panel-trigger">
          <a href="#">
            <i class="pe-7s-close font-36"></i>
          </a>
        </div>
        <a href="javascript:void(0)">
          <img alt="logo" src="images/logo-wide.png">
        </a>
        <div class="side-panel-nav mt-30">
          <div class="widget no-border">
            <nav>
              <ul class="nav nav-list">
                <li>
                  <a href="#">Home</a>
                </li>
                <li>
                  <a href="#">Services</a>
                </li>
                <li>
                  <a class="tree-toggler nav-header">Pages <i class="fa fa-angle-down"></i>
                  </a>
                  <ul class="nav nav-list tree">
                    <li>
                      <a href="#">About</a>
                    </li>
                    <li>
                      <a href="#">Terms</a>
                    </li>
                    <li>
                      <a href="#">FAQ</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">Contact</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="side-panel-widget mt-30">
          <div class="widget no-border">
            <ul>
              <li class="font-14 mb-5">
                <i class="fa fa-phone text-theme-colored"></i>
                <a href="#" class="text-gray">123-456-789</a>
              </li>
              <li class="font-14 mb-5">
                <i class="fa fa-clock-o text-theme-colored"></i> Mon-Fri 8:00 to 2:00
              </li>
              <li class="font-14 mb-5">
                <i class="fa fa-envelope-o text-theme-colored"></i>
                <a href="#" class="text-gray">contact@yourdomain.com</a>
              </li>
            </ul>
          </div>
          <div class="widget">
            <ul class="styled-icons icon-dark icon-theme-colored icon-sm">
              <li>
                <a href="#">
                  <i class="fa fa-google-plus"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
          <p>Copyright &copy;2016 ThemeMascot</p>
        </div>
      </div>
    </div>
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
                  <h2 class="title" style="color:white">Password Change</h2>
                  <ol class="breadcrumb text-center mt-5">
                    <li>
                      <a href="#" style="color:white">Home</a>
                    </li>
                    <li class="active" style="color:white">Password Change</li>
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
                <h3>Set New Password</h3>
                <form method="post" class="newsletter-form mt-40">
                  <label for="mce-EMAIL"></label>
                  <div class="input-group">
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label for="form_password">New Password</label>
                        <input id="form_password" name="newpass" class="form-control" type="password">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label for="form_password">Confirm New Password</label>
                        <input id="form_password" name="confirmpass" class="form-control" type="password">
                      </div>
                    </div>
                    <div class="checkbox pull-left mt-15"></div>
                    <div class="form-group pull-left mt-10">
                      <button type="submit" name="submitforget" class="btn btn-dark btn-sm">Submit</button>
                    </div>
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
  </body>


<?php


if($match=='1')
{
    
      echo' <script src="sweetalert/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert/sweetalert.css">
           <script>$(function(){
    swal("Password not matched", "", "error")

});</script>';
}



?>   



</html>