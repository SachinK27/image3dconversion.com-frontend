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
    <meta name="description" content="Enjoy exclusive perks for becoming a partner. Team of CAD/CAM experts & doctors ready to execute precise treatment planning for your guided implant surgery case." />
    <meta name="keywords" content="Surgical Guide implant, Guided implant surgery, Dental intraoral scanner, Intraoral digital scanner, Digital dental scanner, Digital Dentistry, 3d digital dentistry, Full mouth dental implants, Implant dentistry, All on 4 dental implants, Surgical stent dental, Nextdent surgical guide, Nobel biocare surgical guide, Surgical guide for dental implant, Surgical stent, dental" />
    <meta name="author" content="image3dconversion" />
    <link rel="canonical" href="https://www.image3dconversion.com/partner.php" />
    <!-- Page Title -->
    <title>Become Our Partner - Image3DConversion</title>
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

    <!-- reCaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body class="has-side-panel side-panel-right fullwidth-page side-push-panel">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8BNCHV" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="wrapper" class="clearfix">
      <!-- preloader -->
      <div id="preloader">
        <div id="spinner">
          <img src="images/preloaders/4.gif" alt="preloader">
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
      </div>
      <!-- Header -->
      <!-- Header --> <?php include'header.php'; ?>
      <!-- Start main-content -->
      <div class="main-content">
        <!-- Section: home -->
        <section class="inner-header divider " data-bg-img="new-banner.jpg">
          <div class="container pt-5 pb-0">
            <!-- Section Content -->
            <div class="section-content">
              <div class="row">
                <div class="col-md-12 text-center">
                  <h1 class="title" style="color:white">Partner</h1>
                  <ol class="breadcrumb text-center text-black">
                    <li>
                      <a href="#" style="color:white">Home</a>
                    </li>
                    <li class="active" style="color:white">Partner</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Section: About -->
        
        <script>
        
            var TxtType = function(el, toRotate, period) {
                this.toRotate = toRotate;
                this.el = el;
                this.loopNum = 0;
                this.period = parseInt(period, 10) || 2000;
                this.txt = '';
                this.tick();
                this.isDeleting = false;
            };
    
            TxtType.prototype.tick = function() {
                var i = this.loopNum % this.toRotate.length;
                var fullTxt = this.toRotate[i];
        
                if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
                } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
                }
        
                this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';
        
                var that = this;
                var delta = 200 - Math.random() * 100;
        
                if (this.isDeleting) { delta /= 2; }
        
                if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
                } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
                }
        
                setTimeout(function() {
                that.tick();
                }, delta);
            };
    
            window.onload = function() {
                var elements = document.getElementsByClassName('typewrite');
                for (var i=0; i<elements.length; i++) {
                    var toRotate = elements[i].getAttribute('data-type');
                    var period = elements[i].getAttribute('data-period');
                    if (toRotate) {
                      new TxtType(elements[i], JSON.parse(toRotate), period);
                    }
                }
                // INJECT CSS
                var css = document.createElement("style");
                css.type = "text/css";
                css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
                document.body.appendChild(css);
            };
            
        </script>"
        <style>
          @media screen and (min-width: 721px) {
            .partner1 {
              background-image: url("partner/newbottom.jpg");
              background-size:cover;
              background-repeat: no-repeat;
              margin-top:-25px;
              min-height:320px;
            }
            .partner2{
              padding-top:4%;
              padding-bottom:-20px;
            }
            .partner2 .h51{
              color: #3d5b9b;
            }
            .partner2 .h51 a{
              color: #3d5b9b;
            }
            .partner2 .h32{
              color: #3d5b9b;
            }
            .partner3{
              background-image: url('partner/newtop.jpg');
              min-height:320px;
              background-size:cover;
              background-repeat: no-repeat;
              margin-bottom:-25px;
            }
            .partner4{
              margin-top:5%;
            }
          }

          @media screen and (max-width: 720px) {
            .partner1 {
              background-image: url('partner/topmob.jpg');
              background-size:cover;
              background-repeat: no-repeat;
              margin-top:-25px;
              min-height:650px;
            }
            .partner2{
              padding-top:300px;
              padding-bottom:-20px;
            }
            .partner2 .h31{
              color: #fff;
            }
            .partner2 .h51{
              color: #fff;
            }
            .partner2 .h51 a{
              color: #fff;
            }
            .partner2 .h52{
              color: #fff;
            }
            .partner2 .h32{
              color: #fff;
            }
            .partner3{
              background-image: url('partner/bottommob.jpg');
              min-height:650px;
              background-size:cover;
              background-repeat: no-repeat;
              margin-bottom:-25px;
            }
            .partner4{
              margin-top:450px;
            }
          }
        </style>
        <!-- Section: Doctors -->
        <section id="doctors" style="" class="partner1">
          <div class="container pt-0 pb-0" style="">
            <div class="section-title text-left" style="">
              <div class="row">
                <div class="col-md-6 partner2">
                  <h5 class="h51 mt-12 mb-4 " style="font-family: 'Droid Serif', sans-serif;">Are you <a href="#" class="typewrite" data-period="2000" data-type='[ "looking for a cost-effective solutions? ", "looking for a team of professional CAD and CAM experts?", "looking for a one-stop solution for all type of guided surgery planning?", "looking for a reliable service provider for your bulk orders?", "looking for a virtual companion to assist you with carrying out dental procedures?", "failing to provide the right solutions due to lack of experience?", "tired of not being able to maintain the quality of your service? "]'>
                      <span class="wrap"></span>
                    </a>
                  </h5>
                  <h3 class="h31 mt-4 mb-1">i3DC is your one stop solution to all your problems </h3>
                  <hr style="border-top: 1px solid black;" class="mt-0 mb-2">
                  <h5 class="h52 mt-0 mb-0" style="font-family: 'Droid Serif', sans-serif;">Become a Partner </h5>
                  <h3 class="h32 mt-0 mb-0">Enjoy Digital Planning Services as low as $45. </h3>
                </div>
              </div>
            </div>
          </div>
        </section>
  
        <section id="about" class="">
          <div class="container pt-60 pb-30">
            <div class="section-content">
              <div class="row">
                <div class="col-md-8">
                  <div class="row" style="margin-bottom:4%">
                    <div class="col-md-6">
                      <div class="card effect__hover" style="min-height:220px;">
                        <div class="card__front bg-theme-colored" style='background-image: url("partner/Flip2.jpg");background-size:cover;'>
                          <div class="card__text">
                            <div class="display-table-parent">
                              <div class="display-table">
                                <div class="display-table-cell" style="vertical-align: bottom;">
                                  <div class="icon-box pl-10 pr-10 mb-0">
                                    <h5 class="icon-box-title  text-white" style="font-family: 'Droid Serif', sans-serif;">Improve Quality</h5>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card__back" data-bg-color="#e0e0e0">
                          <div class="card__text">
                            <div class="display-table-parent p-10">
                              <div class="display-table">
                                <div class="display-table-cell">
                                  <h5 style="font-family: 'Droid Serif', sans-serif;">Improve Quality</h5>
                                  <p>We assure high quality products and services in the exisiting market</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card effect__hover" style="min-height:220px;">
                        <div class="card__front bg-theme-colored" style='background-image: url("partner/Flip1.jpg");background-size:cover;'>
                          <div class="card__text">
                            <div class="display-table-parent">
                              <div class="display-table">
                                <div class="display-table-cell" style="vertical-align: bottom;">
                                  <div class="icon-box pl-10 pr-10 mb-0">
                                    <h5 class="icon-box-title  text-white" style="font-family: 'Droid Serif', sans-serif;">Increase workforce</h5>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card__back" data-bg-color="#e0e0e0">
                          <div class="card__text">
                            <div class="display-table-parent p-10">
                              <div class="display-table">
                                <div class="display-table-cell">
                                  <h5 style="font-family: 'Droid Serif', sans-serif;">Experienced Team</h5>
                                  <p class="fs12">We have sufficient and experienced team to be at your service</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row" style="margin-bottom:10%">
                    <div class="col-md-6">
                      <div class="card effect__hover" style="min-height:220px;">
                        <div class="card__front bg-theme-colored" style='background-image: url("partner/Flip3.jpg");background-size:cover;'>
                          <div class="card__text">
                            <div class="display-table-parent">
                              <div class="display-table">
                                <div class="display-table-cell" style="vertical-align: bottom;">
                                  <div class="icon-box pl-10 pr-10 mb-0">
                                    <h5 class="icon-box-title  text-white" style="font-family: 'Droid Serif', sans-serif;">Fast Assistance & Timely Delivery</h5>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card__back" data-bg-color="#e0e0e0">
                          <div class="card__text">
                            <div class="display-table-parent p-10">
                              <div class="display-table">
                                <div class="display-table-cell">
                                  <h5 style="font-family: 'Droid Serif', sans-serif;">Fast Assistance & Timely Delivery</h5>
                                  <p>We never miss our deadline and assure timely delivery</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card effect__hover" style="min-height:220px;">
                        <div class="card__front bg-theme-colored" style='background-image: url("partner/Flip4.jpg");background-size:cover;'>
                          <div class="card__text">
                            <div class="display-table-parent">
                              <div class="display-table">
                                <div class="display-table-cell" style="vertical-align: bottom;">
                                  <div class="icon-box pl-10 pr-10 mb-0">
                                    <h5 class="icon-box-title  text-white" style="font-family: 'Droid Serif', sans-serif;">Cost Saving</h5>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card__back" data-bg-color="#e0e0e0">
                          <div class="card__text">
                            <div class="display-table-parent p-10">
                              <div class="display-table">
                                <div class="display-table-cell">
                                  <h5 style="font-family: 'Droid Serif', sans-serif;">Cost saving</h5>
                                  <p>Use our low cost and high quality conversion to save more money</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="border-10px p-15" style="border: 10px solid #3d5b9b !important;min-height:460px;">
                    <div class="opening-hours text-left">
                      <br>
                      <form name="reservation_form" id="reservation_form" class="reservation-form" method="post">
                        <h2 class="mt-0 line-bottom line-height-1 text-black mb-30">Connect with us!</h2>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group mb-15">
                              <input placeholder="Enter Name" type="text" id="one" name="one" required="" class="form-control" aria-required="true">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group mb-15">
                              <input placeholder="Enter Email" type="email" id="reservation_email" name="two" class="form-control" required="" aria-required="true">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group mb-15">
                              <textarea id="form_message" name="three" class="form-control required" placeholder="Enter Message" rows="3" aria-required="true" required></textarea>
                            </div>
                          </div>
                          <div class="col-sm-12 mb-15">
                            <div class="g-recaptcha" data-sitekey="6LeAeZMgAAAAANQI5JMrEorbbeERnX0pzK5F7PXn"></div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group mb-0 mt-0">
                              <input name="form_botcheck" class="form-control" type="hidden" value="">
                              <button type="submit" class="btn btn-theme-colored btn-lg btn-block" data-loading-text="Please wait...">Enquiry Today</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <br>
                <br>
                <br>
                <br>
              </div>
            </div>
          </div>
      </div>
    </div>
    </section>
    <section class="partner3" id="doctors" style="">
      <div class="container pt-0 pb-30">
        <div class="section-title text-left">
          <div class="row">
            <div class="col-md-7 partner4">
              <h4 class="text-gray  mt-12 mb-4">High-End Infrastructure & Fabrication Lab </h4>
              <h3 class="text-theme-colored mt-12 mb-4">Why invest in costly machinery when you can virtually outsource and get your operations fulfilled? </h3>
              <a class="btn btn-lg btn-dark btn-theme-colored" href="contact.php">Want to know more Enquire Today!</a>
            </div>
          </div>
        </div>
    </section>
    <!-- Section: Services -->
    </div>
    <!-- end main-content -->
    <!-- Footer --> <?php include 'footer.php';?> <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
    </div>
    <!-- end wrapper -->
    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script src="js/custom.js"></script>
    <script type="text/javascript">
      //     $(document).ready(function(){
      //   $('#myModal').modal('show');
      //     }); 
      document.getElementById("reservation_form").addEventListener("submit", function(evt) {
        var restrictedWords = new Array("http", "www.");
        var txtInput = document.getElementById("form_message").value;
        var error = 0;
        for (var i = 0; i < restrictedWords.length; i++) {
          var val = restrictedWords[i];
          if ((txtInput.toLowerCase()).indexOf(val.toString()) > -1) {
            error = error + 1;
          }
        }
        if (error > 0) {
          alert('URLs and inappropriate words are not allowed.');
          evt.preventDefault();
          return false;
        }
        // Captcha Validation
        var response = grecaptcha.getResponse();
        if (response.length == 0) {
          alert("Please Verify you are not a robot");
          evt.preventDefault();
          return false;
        }
      });
    </script>

  </body>
</html> 
<?php
require "connection.php";
@session_start();
ob_start();

// Google reCAPTCHA API keys settings 
$secretKey  = '6LeAeZMgAAAAAE8lK1X-bAWTPbXKdRFNVP4omsO8'; 

// If the form is submitted 
$postData = $statusMsg = ''; 
$status = 'error'; 

if(isset($_POST['two']))
{  
  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){ 
    // Verify the reCAPTCHA API response 
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']); 

    // Decode JSON data of API response 
    $responseData = json_decode($verifyResponse);

      // If the reCAPTCHA API response is valid 
      if($responseData->success){
       
        $one1=mysqli_real_escape_string($con,$_POST['one']);
        $one=filter_var($one1,FILTER_SANITIZE_STRING);
        $two2=mysqli_real_escape_string($con,$_POST['two']);
        $two=filter_var($two2,FILTER_SANITIZE_STRING);
        $three3=mysqli_real_escape_string($con,$_POST['three']);
        $three=filter_var($three3,FILTER_SANITIZE_STRING);       
       
        $sqlsc="INSERT INTO imagebeapartner (name,email,message) VALUES('$one','$two','$three')";    
              $execute=mysqli_query($con,$sqlsc);    
          
        $recipient="info@image3dconversion.com.test-google-a.com";

        $subject="Become a Partner Form - Image3dconversion";
        $nheaders .= "MIME-Version: 1.0\r\n";
        $nheaders = "From: $one <$two>" . "\r\n";
        $nheaders .= "Content-Type: text/html; charset=UTF-8";
        $message = ' 
            Image3dconversion - You have got a new enquiry (Homepage). <br><br>
           <TABLE BORDER="1" WIDTH="100%">
          <TR>
           <TD>
           <table width="100%" border="1" cellspacing="1" cellpadding="1">
            <caption><h2><b> User Details</b></h2></caption>
            <tr>
               
              <td width="50%" style="font-size:16px;"><b>  Name: </b></td>
              <td width="50%" style="font-size:16px;"><b>'.$one.'</b></td>
            </tr>
            <tr>
              <td width="50%" style="font-size:16px;"> <b>Email:</b> </td>
              <td width="50%" style="font-size:16px;"><b>'.$two.'</b></td>
            </tr>
            <tr>
              <td width="50%" style="font-size:16px;"><b>Message:</b> </td>
              <td width="50%" style="font-size:16px;"> <b> '.$three.'</b></td>
            </tr>      
          </table><br><br>

          ';
         $mailBody=$message;

          if(mail($recipient, $subject, $mailBody, $nheaders))
          {
            $responder="Image3dconversion";
            $resSubject="Become a Partner Form - Image3dconversion";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers = "From: Image3dconversion <info@image3dconversion.com>" . "\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            $resMailbody= "Hi ".$one.",<p>Thank you for submitting your Become a Partner form.<br><br> We will review your details and get in touch with you soon. <p>
                                                            
              <p><b>Warm Regards</b><br>Image3dconversion Team<br>Follow us on social media<br><a href='https://www.facebook.com/image3dconversion/'>Facebook</a><br><a href='https://www.linkedin.com/in/image3dconversion/'>LinkedIn</a><br><a href='https://www.instagram.com/image3dconversion/'>Instagram</a><br><hr>
              <b>Contact Us</b><br>
              Address : 1st Floor, H.N. 81, Niva Villa, Bylane, 3, Pub Sarania Rd, Chandmari, Guwahati, Assam 781003
            
              <br>
            
               Ind : +91 88763 95581<br>
               USA & Canada: (+1)888-276-9811<br>
               UK: (+44)800-090-3841
                
                <br> 
                </p>";

            mail($two, $resSubject, $resMailbody, $headers);
            ?>
          <script src="sweetalert/sweetalert.min.js"></script>
          <link rel="stylesheet" type="text/css" href="sweetalert/sweetalert.css">
          <script>
            $(function()
            {
              swal("Thank You for Contacting Us!", "We will get back to you soon ", "success")
            });
          </script>
          <?php
        }else
        {
          ?>
            <script src="sweetalert/sweetalert.min.js"></script>
            <link rel="stylesheet" type="text/css" href="sweetalert/sweetalert.css">
            <script>
              $(function()
              {
                swal("Server Error!", "Please, try again later.", "error")
              });
            </script>
          <?php       
        }
      }
      else{
        // $statusMsg = 'Robot verification failed, please try again.';
        ?>
          <script src="sweetalert/sweetalert.min.js"></script>
          <link rel="stylesheet" type="text/css" href="sweetalert/sweetalert.css">
          <script>
            $(function()
            {
              swal("Robot Verification Failed!", "Robot verification failed, please try again.", "error")
            });
          </script>
        <?php
      }
  }
  else{
    // $statusMsg = 'Please check the reCAPTCHA checkbox.';
    ?>
      <script src="sweetalert/sweetalert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="sweetalert/sweetalert.css">
      <script>
        $(function()
        {
          swal("Captcha Error!", "Please check the CAPTCHA checkbox.", "error")
        });
      </script>
    <?php
  }
}

?>