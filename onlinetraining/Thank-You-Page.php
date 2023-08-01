<?php

if(isset ($_GET['ref'])) { ?>

<!DOCTYPE html>
<html>
   <head>
       <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2417169191743093');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2417169191743093&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <title>Thank You Page</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="css/style.css" type="text/css" />
      <link rel="stylesheet" href="css/reg.css" type="text/css" />
      <link rel="stylesheet" href="css/responsive.css" type="text/css" />
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   </head>
   <body>
      <header class="reg-header">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 text-center">
                  <a href="index.html"><img src="images/logo.png" alt="logo"></a>
               </div>
            </div>
         </div>
      </header>
      <section class="section-reg thank-you">
         <div class="container">
            <div class="checkout-panel">
                   <div class="panel-body text-center" style="padding: 0px 80px 0;">
                     <img src="images/ok.png">
                     <h1 style="color: #015e9a; font-weight: 700">AWESOME!</h1>
                  <h4 style="color:#004773; font-weight: 500">Your Registration for the Training is <span style="font-weight: 700;">successful!</span></h4>
                  <h4 style="color: #000; font-size: 18px; font-weight: 500">Our team will get in touch <br> with you shortly</h4>
                  <br>
                  <a href="index.html"><img src="images/back-home.png" class="img-responsive"></a>
                  <br>
                  <br>
                  <!-- <p><b>USA & Canada: (+1)888-276-9811 &nbsp; &nbsp; | &nbsp; &nbsp; UK: (+44)800-090-3841</b></p> -->
               </div>
            </div>
         </div>
      </section>
      <footer>
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <ul>
                     <li>
                        <img src="images/email.png" alt="img">
                        <a href="mailto:info@image3dconversion.com">info@image3dconversion.com</a>
                     </li>
                     <li>
                        <!-- <img class="mBlock" src="images/call.png" alt="img"> -->
                        <img src="images/usa.png" alt="img">
                        <a href="tel:+1 888-276-9811">USA & Canada: (+1)888-276-9811</a>
                     </li>
                     <li>
                        <img src="images/uk.png" alt="img">
                        <a href="tel:+44 800-090-3841">UK: (+44)800-090-3841</a>
                     </li>
                     <li>
                        <img src="images/india.png" alt="img">
                        <a href="tel:+91 8876395581">(+91)8876395581</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </footer>
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/popper.min.js"></script>
      <script type="text/javascript" src="js/custom.js"></script>
   </body>
</html>
<?php } else { ?>
   <script>window.location='Registration.html'</script>
<?php } ?>
