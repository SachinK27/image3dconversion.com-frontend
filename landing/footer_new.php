<div style="display: inline-block;">
<section class="bg-theme-colored " style="z-index: 0" id="footer">
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
              <li><a href="home.php">Home</a></li>
              <li><a href="home.php#about">About Us</a></li>            
              <li><a href="home.php#services">Our Services</a></li>           
              <li><a href="home.php#contact">Contact</a></li>
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
          <p class="text-white font-11 m-0">Copyright &copy;2020 Image3d Conversion. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
  </section> 

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