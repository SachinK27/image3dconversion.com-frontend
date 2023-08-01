<div style="display: inline-block;">
<section class="bg-theme-colored " style="z-index: 0">
      <div class="container pt-40 pb-40">
        <div class="row">
          <div class="col-md-5">
            <h4 class="mt-5 text-white">SUBSCRIBE TO NEWSLETTER</h4>
            <p class="text-white">Want to stay updated with all the latest news and services? Simply submit your email ID and stay connected with us. </p>
          <!--End mc_embed_signup-->
          </div>
          <div class="col-md-6 col-md-offset-1">            
            <!-- Mailchimp Subscription Form-->
            <form id="mailchimp-subscription-form11" class="newsletter-form mt-30" novalidate="true">
              <div class="input-group">
                <input type="email" id="mce-EMAIL" data-height="45px" class="form-control input-lg" placeholder="Your Email" name="EMAIL" value="" style="height: 45px;">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-colored btn-dark btn-lg m-0" data-height="45px" style="height: 45px;">Subscribe</button>
                </span>
              </div>
            </form> 
            <!-- Mailchimp Subscription Form Validation-->
            <script type="text/javascript">
              $('#mailchimp-subscription-form11').ajaxChimp({
                  callback: mailChimpCallBack,
                  url: 'https://image3dconversion.us12.list-manage.com/subscribe/post?u=d132cfb05f6a64f3ac58c2bec&amp;id=4a81af2648'
              });
              function mailChimpCallBack(resp) {
                  // Hide any previous response text
                  var $mailchimpform = $('#mailchimp-subscription-form11'),
                      $response = '';
                  $mailchimpform.children(".alert").remove();
                  if (resp.result === 'success') {
                      $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  } else if (resp.result === 'error') {
                      $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  }
                  $mailchimpform.prepend($response);
              }
            </script>            
          </div>
        </div> 
      </div>       
    </section>
<section class="bg-theme-colored " style="z-index: 0">
<!-- Footer -->
  <footer id="footer" class="footer pb-0 bg-black-111" style="z-index: 2;margin-bottom:-10px">
    <div class="container pt-50 pb-20" style="z-index: 2">
      <div class="row multi-row-clearfix" style="z-index: 2">
        <div class="col-sm-6 col-md-3" style="z-index: 5">
          <div class="widget dark"> <img alt="" src="img/logo-white.png">
            <p class="font-12 mt-20 mb-10">One of the leading dental companies and service provider in digital dentistry, Image3dconversion caters its wide and exclusive services worldwide.  With a team of expert CAD/CAM professionals and doctors we provide assistance from the least complicated case to the most muddled cases in both implantology and orthodontics.  </p>
            <a class="text-gray font-12" href="about.php"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
            <ul class="styled-icons icon-dark mt-20" style="">
              <li><a href="https://www.facebook.com/image3dconversion/" data-bg-color="#3B5998"><i  style="margin-top: 10px" class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/image3_d" data-bg-color="#02B0E8"><i style="margin-top: 10px" class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.linkedin.com/in/image3dconversion/" data-bg-color="#05A7E3"><i style="margin-top: 10px" class="fa fa-linkedin"></i></a></li>
              <li><a href="https://www.instagram.com/image3dconversion/" data-bg-color="#A11312"><i style="margin-top: 10px" class="fa fa-instagram"></i></a></li>
              <!--<li><a href="https://www.youtube.com/channel/UC_JOioxw0d820VdYeNMkDXQ" data-bg-color="#C22E2A"><i style="margin-top: 10px" class="fa fa-youtube"></i></a></li>-->
              <li><a href="https://www.youtube.com/channel/UCS8IxmRGRz2iGeeu7xZUD0A" data-bg-color="#C22E2A"><i style="margin-top: 10px" class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Pages</h5>
            <ul class="list list-border">
              <li><a href="#home">Home</a></li>
              <li><a href="#about">About Us</a></li>            
              <li><a href="#services">Our Services</a></li>           
              <li><a href="#contact">Contact</a></li>
              <li><a href="privacy-policy.php">Privacy Policy</a></li>
                <li><a href="refund-policy.php">Refund Policy</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Services</h5>
            <ul class="list-border list theme-colored angle-double-right">              
              <li><a href="bone-segmentation.php">Bone Segmentation</a></li>
              <li><a href="radiology-report.php">Radiology Report</a></li>
              <li><a href="implant-planning.php">Implant Planning</a></li>
               <li><a href="bone-reduction-guide.php">Bone Reduction Guides</a></li>
              <li><a href="surgical-guide.php">Surgical Guide</a></li>
              <li><a href="denture-provisional.php">Denture & provisional</a></li>             
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Quick Contact</h5>
            <ul class="list list-border">
                <li><a href="tel:+919910630323">+91-99106-30323 (India)</a><br>
                <a href="tel:+18882769811">+1-888-276-9811 (US+CANADA)</a><br>
                <a href="tel:+448000903841">+44-800-090-3841 (UK)</a></li>
              <li><a href="mailto:info@image3dconversion.com">info@image3dconversion.com</a></li>             
            </ul>        
          </div>
        </div>
      </div>
    </div>
    <div class="footer-nav bg-black-222 p-20">
      <div class="row text-center">
        <div class="col-md-12">
          <p class="text-white font-11 m-0">Copyright &copy;2019 Image3d Conversion. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
  </section> 
<?php 
$ip = $_SERVER['REMOTE_ADDR'];
$locationArray = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $ip));
$country=$locationArray['geoplugin_countryName'];
?>
<script type="text/javascript">
    $(window).on('load',function(){ 
        setTimeout(function() {
       // $('#basicExampleModal').modal();
    }, 500000000000000000000);
      
    });
</script>

<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true" style="margin-top: 100px">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="border-radius:5px;">
     <?php if($country == 'India'){ ?>
      <div class="modal-body" style="padding: 0px;background: url('images/web_christmas.jpg');height: 360px">
        <button type="button" class="close" data-dismiss="modal" style="color:red;font-size: 30px">X</button>
        <img src="images/animated-santa-claus.gif" style="margin-top: 35%;padding:2px; ">
      </div>
      <?php } else { ?>
      <div class="modal-body" style="padding: 0px;background: url('images/chrismas-offer-2020.jpg');height: 360px">
        <button type="button" class="close" data-dismiss="modal" style="color:red;font-size: 30px">X</button>
       
      </div>
      <?php } ?>
      <!--<div class="modal-footer">
        <center>          
        <div style="margin-bottom: 5px;font-size: 18px" id='response'></div>
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> Quick Enquiry</button>
        <a href="https://orders.image3dconversion.com/doc/login">  <button class="btn btn-default btn-lg mr-10 mb-10" style="transition: none 0s ease 0s; line-height: 17px; border-width: 1px; margin: 0px 9px 0px 0px; padding: 9px 23px; letter-spacing: 0px; font-weight: 400; font-size: 14px;background-color:#3d5b9b;color:white;margin-top:10px;">Upload Your Case</button></a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </center>
        </div>-->
    </div>
  </div>
</div>
 <style>
  .icon-bar {
  position: fixed;
  top: 55%;
  right: 0;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 0px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

 .quick-icon {
  position: fixed;
  top: 30%;
  right: 0;
  font-size: 30px;  
  width: 75px;
  height: 75px;
  margin-right: 5px;  
  border-radius: 50%;

  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
 /* transform: rotateZ(90deg);
  font-weight: 700px;
  letter-spacing: 2px;*/
  z-index: 1;
  overflow: hidden;
  padding:1px;  
  color:#3d5b9b;
  border: solid 1px #3d5b9b;
}



.glyphicon{
  color:#3d5b9b;
  font-size: 22px;
}      
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 80px;
  height: 80px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}  
</style>
  
<button type="button" class="b24-web-form-popup-btn-8 quick-icon"><i class="fa fa-question-circle" aria-hidden="true"></i><p style="font-size: 11px;font-weight: bold;margin-top: -8px">Enquiry </button>
<script id="bx24_form_button" data-skip-moving="true">
  (function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
    (w[b].forms=w[b].forms||[]).push(arguments[0])};
    if(w[b]['forms']) return;
    var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
    var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
  })(window,document,'https://b24-xjeoxm.bitrix24.in/bitrix/js/crm/form_loader.js','b24form');

  b24form({"id":"8","lang":"en","sec":"c2w93x","type":"button","click":""});
</script>
<div class="icon-bar" style="z-index:200;">
<a target="_blank" href="https://orders.image3dconversion.com/doc/login" ><img src="https://image3dconversion.com/img/UploadCaseSticky.png"></a>   
</div>
<script type="text/javascript">
var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || 
{widgetcode:"18362ef9ad7e5ecbc69d351cf2521a4c12a18bf16e0be0de0f5183762322c7b8", values:{},ready:function(){}};
var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;
s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
</script>  
</div>
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

<script>
(function(w,d,u){
var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
})(window,document,'https://cdn.bitrix24.in/b14429073/crm/tag/call.tracker.js');
</script>
</body>
</html>