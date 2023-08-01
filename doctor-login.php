<?php
require "connection.php";
@session_start();
ob_start();

/* captch */
error_reporting(E_ALL);
ini_set('display_errors', 0);
$GLOBALS['DEBUG_MODE'] = '0';
// CHANGE TO 0 TO TURN OFF DEBUG MODE
// IN DEBUG MODE, ONLY THE CAPTCHA CODE IS VALIDATED, AND NO EMAIL IS SENT

$GLOBALS['ct_recipient']   = ''; // Change to your email address!  Make sure DEBUG_MODE above is 0 for mail to send!
$GLOBALS['ct_msg_subject'] = 'Securimage Test Contact Form';

/* captch end*/

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


$salutation=$name=$email=$mobile=$address=$pass=$practice=$speciality=$zip=$source=$othersource='';

?>


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
<meta name="description" content="Register now and become part of the most elite group of digital dentistry practitioners. Start your guided implant surgery journey with us." />
<meta name="keywords" content="Surgical Guide implant, Guided implant surgery, Dental intraoral scanner, Intraoral digital scanner, Digital dental scanner, Digital Dentistry, 3d digital dentistry, Full mouth dental implants, Implant dentistry, All on 4 dental implants, Surgical stent dental, Nextdent surgical guide, Nobel biocare surgical guide, Surgical guide for dental implant, Surgical stent, dental" />
<meta name="author" content="Image3DConversion" />
<link rel="canonical" href="https://www.image3dconversion.com/doctor-login.php"/>
<!-- Page Title -->
<title>Doctor Login & Register</title>

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

<style type="text/css">
  @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  background: linear-gradient(to bottom right, #92c5fe 0%, #cbc2fb 100%);
  font-family: "Open Sans", sans-serif;
  min-height: 90vh;
}
.image img {
  width: 100%;
  border-bottom-left-radius: 10px;
  border-top-left-radius: 10px;
  display: block;
}
a {
  /*color: #3c63cc;*/
  font-size: 14px;
}
a:hover {
  color: #2fa1fd;
}
.modernForm {
  max-width: 1600px;
  display: flex;
  margin: 50px auto;
  background-color: #fff;
  border-radius: 10px;
}
.imageSection {
  flex-basis: 50%;
  position: relative;
  color: white;
}
.overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: rgba(96, 30, 150, 0.507);
  border-bottom-left-radius: 10px;
  border-top-left-radius: 10px;
  z-index: 0;
}
.textInside,
.service {
  position: absolute;
}
.textInside {
  bottom: 200px;
  right: 120px;
}
.tagLine {
  font-size: 1.4rem;
  font-weight: 600;
}
.price {
  font-size: 2rem;
  font-weight: 700;
}
.service {
  bottom: 30px;
  right: 50px;
}
.service p {
  font-weight: 700;
}
.contactForm {
  flex-basis: 45%;
  margin: auto;
  color: #555;
}
.contactForm h1 {
  padding: 15px 0;
}
input[type="email"],
input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: rgb(177, 177, 177) 1px solid;
}
.name {
  position: relative;
  margin-bottom: 20px;
}
.iconName {
  position: absolute;
  right: 10px;
  bottom: 10px;
}

input[type="checkbox"] {
  margin-right: 10px;
}
input[type="submit"] {
  background-color: #3c63cc;
  font-size: 1rem;
  border: none;
  color: white;
  padding: 10px 50px;
  border-radius: 5px;
  text-decoration: none;
  margin: 30px 0;
  cursor: pointer;
  float: left;
}
input[type="submit"]:hover {
  background-color: #2fa1fd;
}

@media only screen and (max-width: 768px) {
  .modernForm {
    flex-wrap: wrap;
  }
  .imageSection,
  .contactForm {
    flex-basis: 100%;
  }
  .overlay,
  img {
    border-bottom-left-radius: 0;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }
}
</style>
</head>
<body class="has-side-panel side-panel-right fullwidth-page side-push-panel">
  <!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8BNCHV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="wrapper" class="clearfix">
  <!-- preloader -->


  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Start main-content -->
  <div class="container-fluid">
    <div class="modernForm">
      <div class="imageSection">
        <div class="image">
          <!--<div class="overlay"></div>-->
          <img src="images/register-page.webp" alt="register-promo">
        </div>
      </div>

      <div class="contactForm">
          <!-- <div class="text-center alert alert-secondary alert-dismissable font-weight-bolder text-sm">
            custom message
          </div> -->
        <div class="login-box mx-auto">
          <p class="text-center" style="margin-top:3em;color:#3d5b9b;font-size:18px"><strong>DOCTOR REGISTRATION</strong></p>
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <?php
              process_si_contact_form(); // Process the form, if it was submitted
              if (isset($_SESSION['ctform']['error']) &&  $_SESSION['ctform']['error'] == true): /* The last form submission had 1 or more errors */ ?>
              <div class="error">There was a problem with your submission.  Errors are displayed below in red.</div><br>            
              <?php endif; ?>
            </div>
          </div>
        
          <div class="row">
            <div class="tab-content">
                <div class="tab-pane fade in p-15" id="login-tab">
                  <h4 class="text-gray mt-0 pt-5">Doctor Login</h4>
                  <hr>

                  <form name="login-form" class="clearfix" method="post" action="">
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
                  <form method="post" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING']) ?>" id="contact_form">
                  <input type="hidden" name="do" value="contact">

                    <!-- <div class="icon-box mb-0 p-0">
                      <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                        <i class="pe-7s-users"></i>
                      </a>
                      <h4 class="text-gray pt-10 mt-0 mb-30">Don't have an Account? Register Now.</h4>
                    </div>
                    <hr> -->

                    <div class="row">
                      <div class="form-group col-md-4">
                        <?php if (!empty($_SESSION['ctform']['captcha_error'])) { $salutation= $_SESSION['salutation'];} ?>
                        <label>Salutation</label>
                        <select class="form-control" name="salutation" id="salutation">
                          <option value="" disabled selected>Select</option>
                          <option value="Dr." <?php if($salutation=='Dr.'){echo "selected";}?>>Dr.</option>
                          <option value="Mr." <?php if($salutation=='Mr.'){echo "selected";}?>>Mr.</option>
                          <option value="Mrs." <?php if($salutation=='Mrs.'){echo "selected";}?>>Mrs.</option>
                          <option value="Miss" <?php if($salutation=='Miss'){echo "selected";}?>>Miss</option>
                          <option value="M/S" <?php if($salutation=='M/S'){echo "selected";}?>>M/S</option>
                        </select>
                      </div>

                      <div class="form-group col-md-8">
                        <?php if (!empty($_SESSION['ctform']['captcha_error'])) { $name= $_SESSION['name'];} ?>
                        <label>Name</label>
                        <input name="one" class="form-control" type="text" value="<?php echo $name;?>" required>
                      </div>
                      
                    </div>

                    <div class="row">
                      <div class="form-group col-md-6">
                        <?php if (!empty($_SESSION['ctform']['captcha_error'])) { $practice= $_SESSION['practice'];} ?>
                        <label>Practice Name</label>
                        <input name="six" class="form-control" type="text" required value="<?php echo $practice;?>">
                      </div>
                        <div class="form-group col-md-6">
                        <label for="form_choose_speciality">Clinical Speciality</label> 
                        <?php if (!empty($_SESSION['ctform']['captcha_error'])) { $speciality= $_SESSION['speciality'];} ?>                     
                        <select name="seven" class="form-control" required >
                          <option value="">Select</option>
                          <option value="Prosthodontist" <?php if($speciality=='Prosthodontist'){echo "selected";}?>>Prosthodontist </option>
                          <option value="Orthodontist" <?php if($speciality=='Orthodontist'){echo "selected";}?>>Orthodontist </option>
                          <option value="General Surgeon" <?php if($speciality=='General Surgeon'){echo "selected";}?>>General Surgeon </option>                        
                        </select>
                      </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                        <label for="form_choose_password">Address</label>
                        <?php if (!empty($_SESSION['ctform']['captcha_error'])) { $address= $_SESSION['address'];} ?>
                        <input id="form_choose_password" name="four" class="form-control" type="text" required value="<?php echo $address;?>">
                      </div>

                    </div>
                     <div class="row">
                        <div class="form-group col-md-6">
                          <label for="form_choose_zip"> Zip Code</label>
                          <?php if (!empty($_SESSION['ctform']['captcha_error'])) { $zip= $_SESSION['zip'];} ?>
                          <input id="form_choose_zip" name="eight" class="form-control" type="text" required value="<?php echo $zip;?>">
                        </div>
                        <div class="form-group col-md-6">
                          <?php if (!empty($_SESSION['ctform']['captcha_error'])) { $mobile= $_SESSION['mobile'];} ?>
                          <label for="form_choose_username">Mobile (Eg +919854123456)</label>
                          <input id="form_choose_username" pattern="^\+[1-9]{1}[0-9]{3,14}$"  name="three" class="form-control" type="text" required  value="<?php echo $mobile;?>">
                        </div>
                      </div>

                    
                    <div class="row">
                     <div class="form-group col-md-6">
                        <label>Email Address</label>
                        <?php if (!empty($_SESSION['ctform']['captcha_error'])) { $email= $_SESSION['email'];} ?>
                        <input name="two" class="form-control" type="email" required value="<?php echo $email;?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label>Password</label>
                        <?php if (!empty($_SESSION['ctform']['captcha_error'])) { $pass= $_SESSION['pass'];} ?>
                        <input id="form_re_enter_password" name="five"  class="form-control" type="text" required value="<?php echo $pass;?>">
                      </div>
                    </div>
                    <div class="row">
                     
                    <div class="form-group col-md-6">
                        <label for="form_choose_speciality">How did you find us?</label>
                        <?php if (!empty($_SESSION['ctform']['captcha_error'])) { $source= $_SESSION['source'];} ?>
                        <select name="source" class="form-control" id="source" required>
                         <option value="" disabled selected >Select</option>
                         <option value="Social Media" <?php if($source=='Social Media'){echo "selected";}?>>Social Media </option>
                         <option value="Web Search" <?php if($source=='Web Search'){echo "selected";}?>>Web Search </option>
                         <option value="BlueSkyBio" <?php if($source=='BlueSkyBio'){echo "selected";}?>>BlueSkyBio </option>
                         <option value="Doctor's Referral" <?php if($source=="Doctor's Referral"){echo "selected";}?>>Doctor's Referral </option>
                         <option value="Newsletter" <?php if($source=='Newsletter'){echo "selected";}?>>Newsletter </option>
                         <option value="Other" <?php if($source=='Other'){echo "selected";}?>>Other </option>
                        </select>
                        <input id="othersource" name="othersource"  class="form-control mt-4" type="text" placeholder="Please Specify (Optional)" style="display:none;">
                      </div>

                      <div class="form-group col-md-6">
                        <input type="checkbox" required class="mb-5 mt-5"> <label>I am not a robot</label>
                        <?php
                            // show captcha HTML using Securimage::getCaptchaHtml()
                            require_once 'captcha/securimage.php';
                            $options = array();
                            $options['input_name']             = 'ct_captcha'; // change name of input element for form post
                            $options['disable_flash_fallback'] = false; // allow flash fallback

                            if (!empty($_SESSION['ctform']['captcha_error'])) {
                              // error html to show in captcha output
                              $options['error_html'] = $_SESSION['ctform']['captcha_error'];
                              //echo $name=$_SESSION['ctform']['name'];
                            }

                            echo "<div id='captcha_container_1'>\n";
                            echo Securimage::getCaptchaHtml($options);
                            echo "\n</div>\n";
                            ?>
                      </div>
                    </div>

                    <div class="form-group"> <input type="submit" class="btn btn-dark btn-lg btn-block mt-15" value="Register Now">
                      <!--<button class="btn btn-dark btn-lg btn-block mt-15" type="submit">Register Now</button>-->
                    </div>
                    <div class="text-center">
                      <a class="text-theme-colored font-weight-600 font-15" href="https://orders.image3dconversion.com/doc/login"><mark class="text-dark bg-primary rounded py-3">Already registered? Login here</mark></a>
                    </div>
                  </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end main-content -->
  <!-- Footer -->
<?php include 'footer.php'; ?>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script>
  $(function () {
        $("#source").change(function () {
            if ($(this).val() == "Other") {
                $("#othersource").show();
            } else {
                $("#othersource").hide();
            }
        });
    });
</script>
<script src="js/custom.js"></script>

</body>
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
} ?>
<?php 
// The form processor PHP code
function process_si_contact_form()
{
  $_SESSION['ctform'] = array(); // re-initialize the form session data

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && @$_POST['do'] == 'contact') {
      
    // if the form has been submitted    
    $captcha = @$_POST['ct_captcha']; // the user's entry for the captcha code
    //$name    = substr($one, 0, 64);  // limit name to 64 characters
    $_SESSION['salutation'] = $_POST['salutation'];
    $_SESSION['name'] = $_POST['one'];
    $_SESSION['email'] = $_POST['two'];
    $_SESSION['mobile'] = $_POST['three'];
    $_SESSION['address'] = $_POST['four'];
    $_SESSION['pass'] = $_POST['five'];
    $_SESSION['practice'] = $_POST['six'];
    $_SESSION['speciality'] = $_POST['seven'];
    $_SESSION['zip'] = $_POST['eight'];
    $_SESSION['source'] = $_POST['source'];
    
    $country=$city=$region='';
    
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ip = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ip = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ip = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ip = $_SERVER['REMOTE_ADDR'];

    // $ip = $_SERVER['REMOTE_ADDR'];
    

    $locationArray = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
  

    if($locationArray){
      $country=$locationArray['geoplugin_countryName'];
      $city=$locationArray['geoplugin_city'];
      $region=$locationArray['geoplugin_regionName'];
      $geoplugin_latitude=$locationArray['geoplugin_latitude'];
      $geoplugin_longitude=$locationArray['geoplugin_longitude'];
    }

    
    // var_dump($ip,$country);die;
    $errors = array();  // initialize empty error array   

    // Only try to validate the captcha if the form has no errors
    // This is especially important for ajax calls
    if (sizeof($errors) == 0) {
      require_once dirname(__FILE__) . '/captcha/securimage.php';
      $securimage = new Securimage();

      if ($securimage->check($captcha) == false) {
        $errors['captcha_error'] = 'Incorrect security code entered<br />';
        
      }
    }
    

    if (sizeof($errors) == 0) {
        
      // no errors, send the form
      $_SESSION['ctform']['timetosolve'] = $securimage->getTimeToSolve();
      $_SESSION['ctform']['error'] = false;  // no error with form

      /************************ if captch correct ********************************/
      /************************ save data into database********************************/
          require "connection.php";
          if(isset($_POST['two'])&&
                isset($_POST['three']))
          {
            $tw=mysqli_real_escape_string($con,$_POST['two']);
            $two=filter_var($tw,FILTER_SANITIZE_STRING);

            $thre=mysqli_real_escape_string($con,$_POST['three']);
            $three=filter_var($thre,FILTER_SANITIZE_STRING);
      

            $sql="SELECT * FROM imagedoc WHERE email = '$two'";
            $sql_phone="SELECT * FROM imagedoc WHERE mobile = '$three'";
            
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

              if($query_run1=mysqli_query($con,$sql_phone))
              {
                  
                $query_num_rows1=mysqli_num_rows($query_run1);
                if($query_num_rows1==0)
                {
                  $already_phone='0';
                }
                elseif($query_num_rows1==1)
                {
                  $already_phone='1';
                }
              }


            $registered='0';
            $aschoolemail='0';
            $adminemail='0';


            if
              (isset($_POST['salutation'])&&
                isset($_POST['one'])&&
                isset($_POST['two'])&&
                isset($_POST['three'])&&
                isset($_POST['four'])&&
                isset($_POST['five'])&&
                isset($_POST['six'])&&
                isset($_POST['seven'])&&
                isset($_POST['source'])&&
                isset($_POST['eight']))
                {
                $salutation1=mysqli_real_escape_string($con,$_POST['salutation']);
                $salutation=filter_var($salutation1,FILTER_SANITIZE_STRING);
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
                $source1=mysqli_real_escape_string($con,$_POST['source']);
                $source=filter_var($source1,FILTER_SANITIZE_STRING);


                if
                (!empty($salutation)&&
                  !empty($name)&&
                  !empty($email)&&
                  !empty($mobile)&&
                  !empty($address)&&
                  !empty($password)&&
                  !empty($practice)&&
                  !empty($speciality)&&
                  !empty($source)&&
                  !empty($zipcode))
                {

                  if($_POST['source']=="Other"){
                    if(!empty($_POST['othersource'])){
                      $source1=mysqli_real_escape_string($con,$_POST['othersource']);
                      $source=filter_var($source1,FILTER_SANITIZE_STRING);
                    }
                    else{
                      $source="Other: Not Specified";
                    }
                  }


                  if($already=='0' && $already_phone=='0')
                  {
                    $sqlsc = "INSERT INTO imagedoc (salutation,name,email,mobile,address,password,speciality,practice,zipcode,source) VALUES ('".$salutation."','".$name."','".$email."','".$mobile."','".$address."','".$password."','".$speciality."','".$practice."','".$zipcode."','".$source."')";
              
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
                    $mail->Password = "Img3d@5891";
                    //If SMTP requires TLS encryption then set it
                    $mail->From = "info@image3dconversion.com";
                    $mail->FromName = "I3DC Doctor Registration";

                    $mail->addAddress("info@image3dconversion.com.test-google-a.com", "Image3dconversion");
                    $mail->addAddress("developer@image3dconversion.com.test-google-a.com", "Support");
                    //$mail->addAddress("nitapatra.mds@gmail.com", "Support");
                    $mail->isHTML(true);

                    $mail->Subject = "Doctor Registration Form";

                    $mail->Body =   '
                      Image3dConversion - A new user has registered. <br><br>
                      <TABLE BORDER="1" WIDTH="100%">
                      <TR>
                        <TD>
                        <table width="100%" border="1" cellspacing="1" cellpadding="1">
                        <caption><h2><b> Doctor Details</b></h2></caption>
                        <tr>

                          <td width="50%" style="font-size:16px;"><b>  Salutation: </b></td>
                          <td width="50%" style="font-size:16px;"><b>'.$salutation.'</b></td>
                        </tr>
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
                        <tr>
                          <td width="50%" style="font-size:16px;"> <b>Country:</b> </td>
                          <td width="50%" style="font-size:16px;"> <b> '.$country.'</b></td>
                        </tr>
                        <tr>
                          <td width="50%" style="font-size:16px;"> <b>City:</b> </td>
                          <td width="50%" style="font-size:16px;"> <b> '.$city.'</b></td>
                        </tr>
                        <tr>
                          <td width="50%" style="font-size:16px;"> <b>Region:</b> </td>
                          <td width="50%" style="font-size:16px;"> <b> '.$region.'</b></td>
                        </tr>
                        <tr>
                          <td width="50%" style="font-size:16px;"> <b>Source:</b> </td>
                          <td width="50%" style="font-size:16px;"> <b> '.$source.'</b></td>
                        </tr>  

                      </table><br><br>

                      <!--<center> <h1><b>Follow this link to approve <a href="https://www.image3dconversion.com/doc-register.php">Click Here</a></b></h1></center>-->

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
                  //$mailnew->Password = "I#3dc1985@!@#";
                  $mailnew->Password = "Img3d@5891";
                  //If SMTP requires TLS encryption then set it
                  $mailnew->From = "info@image3Dconversion.com";
                  $mailnew->FromName = "Image3dconversion";

                  $mailnew->addAddress($email, $name);

                  $mailnew->isHTML(true);

                  $mailnew->Subject = "Doctor Registration Form - Image3dconversion";

                  $mailnew->Body =   "Hi ".$name.",
                  <p>Thank you for Registering.<br><br>
                  Greetings from Image3dconversion.<br>
                  It gives us immense pleasure welcome you aboard into one of the world's pioneers on Digital Dentistry!<br>
                  We at Image3dConversion believe in delivering to the specific needs of our client and making sure that their surgeries go hassle-free and we are able to cater best solutions to our clients.<br>
                  Having said that, we have curated the best possible sevice catalogue taking into account the global market and its needs. We have herewith attached our company profile along with our service brochure for your ready reference.<br>
                  And that's not all!<br>
                  Our designated team member shall get in touch with you very shortly, making sure that we have a clear understanding of your specific needs!<br>
                  We look forward to a long and fruitful association with you.<p>
                  <p><b>Warm Regards</b>
                  <br>I3DC Team
                  <br><a href='http://www.image3dconversion.com/' target='_blank'>www.image3dconversion.com</a>
                  <br>Contact: +919910630323/+918876395581<br>
                  Toll Free No:&nbsp;&nbsp;<br>
      USA &amp; Canada:&nbsp;(+1)888-276-9811&nbsp;<br>
      UK:&nbsp; &nbsp;&nbsp;(+44)800-090-3841<br>
                  Find us in social media&nbsp;and get up-to-date with our&nbsp;daily activities on Digital Dentistry&nbsp;<br>
                  <p>
<a href='https://www.facebook.com/image3dconversion/' target='_blank'><img width='5%' alt='facebook' src='https://i.ibb.co/N2xbMvv/facebook.png'></a>&nbsp;&nbsp;
<a href='https://www.instagram.com/image3dconversion/' target='_blank'><img width='5%' alt='instagram' src='https://i.ibb.co/WF6Ykgt/instagram.jpg'></a>&nbsp;&nbsp;
<a href='https://twitter.com/image3_d' target='_blank'><img width='5%' alt='twitter' src='https://i.ibb.co/ftDnd8z/twitter.png'></a>&nbsp;&nbsp;
<a href='https://in.linkedin.com/company/image3dconversion-india' target='_blank'><img width='5%' alt='linkedin1' src='https://i.ibb.co/0BHdHFv/linkedin1.png'></a>&nbsp;
                    </p>
                    <p>
<span style='color: #ff0000;'>Sharing knowledge is our utmost concern !!</span>
                    </p>
                    <p>
<img width='420' alt='logo' src='https://ci6.googleusercontent.com/proxy/WKEX0WUt-V7W4O6LFFXIxrCyyTVVkoSauXuU2owkl46Hcq-_RAPYtiWhGBudvenJMvSd_wyi6YQmlfNC8IpJg_9X8QrZOfmxz-m05FgQpPWbP14fFDhIZW1mpnL4X-Bw08on=s0-d-e1-ft#https://drive.google.com/uc?id=16ruI2oA1WzFX08B6xEKqni58Lu3WogsA&export=download' height='110'>
                    </p>
                  <br>
                  <span style='color: #ff0000; font-size: 8pt;'>PRIVILEGED AND CONFIDENTIAL COMMUNICATION: This electronic transmission, and any documents attached hereto, may contain confidential and/or legally privileged information. If you have received this message in error please contact the sender immediately. Any disclosure, copying, distribution, or use of the contents or information received in error is strictly prohibited.</span>
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
                      swal("Thank You!", "You can now login", "success");
                  });</script>';
                  }
                  }
                  }
                  }


                  else
                  {
                    echo
                    '<script src="sweetalert/sweetalert.min.js"></script>
                    <link rel="stylesheet" type="text/css" href="sweetalert/sweetalert.css">
                    <script>$(function(){
                    swal("Email or Phone Number is already registered", "", "error")
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
            /*********************************end data save******************************************/
        }

    } else {
     
      foreach($errors as $key => $error) {
        // set up error messages to display with each field
        $_SESSION['ctform'][$key] = "<span class=\"error\">$error</span>";
      }

      $_SESSION['ctform']['error'] = true; // set error floag
    }
  } // POST
}

$_SESSION['ctform']['success'] = false; // clear success value after running
?>


<?php



?>

</html>
<?php


