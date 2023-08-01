<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T8BNCHV');</script>
<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Verify your email with otp and change your account password." />
<meta name="keywords" content="image3dconversion forget password, password change, image3d password, i3dc, forgot password, reset password" />
<meta name="author" content="ThemeMascot" />
<link rel="canonical" href="https://www.image3dconversion.com/forget-password.php"/>
<!-- Page Title -->
<title>Forgot Password</title>

<!-- Favicon and Touch Icons -->
<link href="images/new-favicon.ico" rel="shortcut icon" type="image/ico">


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

<div id="wrapper" class="clearfix">
  <!-- preloader -->
  
  
  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
   <section class="inner-header divider " data-bg-img="new-banner.webp">
        <div class="container pt-5 pb-0">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h1 class="title" style="color:white">Forgot Password</h1>
              <ol class="breadcrumb text-center mt-5">
                <li><a href="#" style="color:white">Home</a></li>
               
                <li class="active" style="color:white">Doctor Forget Password</li>
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
            <h3>Enter your registered email id</h3>
            <h5>Your OTP will be send to your email id</h5>
            
            <!-- Mailchimp Subscription Form-->
            <form method="post" class="newsletter-form mt-40" action="update-password.php">
              <label for="mce-EMAIL"></label>
              <div class="input-group">
                <input type="email" id="mce-EMAIL" data-height="45px" class="form-control input-lg" placeholder="Your Email" name="forget" value="">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-colored btn-dark btn-lg m-0" data-height="45px">Submit</button>
                </span>
              </div>
            </form>

            
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

<?php
if(isset($_GET['notvalid']))
{
    
      echo' 
<script src="sweetalert/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert/sweetalert.css">
           <script>$(function(){
    swal("Email not registered", "", "error")

});</script>';
}



?>   



</html>