<style media="screen">
  @media screen and (min-width:768px) {
    .ml {
      margin-left: 60px !important;
      margin-right: 60px !important;
    }
  }
  /*  marque css  */
  .bounce {
    height: 50px;
    overflow: hidden;
    position: relative;
    background: #fefefe;
    color: #333;
    border: 1px solid #3d5b9b;
  }

  .bounce p {
    position: absolute;
    width: 120%;
    height: 100%;
    margin: 0;
    line-height: 50px;
    text-align: center;
    -moz-transform: translateX(100%);
    -webkit-transform: translateX(100%);
    transform: translateX(100%);
    -moz-animation: bouncing-text 5s linear infinite alternate;
    -webkit-animation: bouncing-text 5s linear infinite alternate;
    animation: bouncing-text 40s linear infinite;
  }

  @-moz-keyframes bouncing-text {
    0% {
      -moz-transform: translateX(100%);
    }

    100% {
      -moz-transform: translateX(-100%);
    }
  }

  @-webkit-keyframes bouncing-text {
    0% {
      -webkit-transform: translateX(100%);
    }

    100% {
      -webkit-transform: translateX(-100%);
    }
  }

  @keyframes bouncing-text {
    0% {
      -moz-transform: translateX(100%);
      -webkit-transform: translateX(100%);
      transform: translateX(100%);
    }

    100% {
      -moz-transform: translateX(-100%);
      -webkit-transform: translateX(-100%);
      transform: translateX(-100%);
    }
  }

  /*  marque css  */
</style>
<style>
@media (min-width: 720px) and (max-width: 900px) {
    .logo-phone {
      margin-left: 200px !important;
    }
}
@media (max-width: 719px) {
    .logo-phone {
      margin-left: 50px !important;
    }
}
</style>
<!-- Header -->
<header id="header" class="header">
  <div class="header-top bg-theme-colored sm-text-center hidden-xs">
    <div class="container-fluid ml">
      <div class="row" style="margin-top:-2px;margin-bottom:-19px;">
        <div class="col-md-2">
          <div class="widget no-border m-0">
            <ul class="styled-icons icon-dark icon-theme-colored icon-sm sm-text-center">
              <li>
                <a href="https://www.facebook.com/image3dconversion/" target="_blank" style="width:20px;">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li>
                <a href="https://twitter.com/image3_d" target="_blank" style="width:10px;">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/image3dconversion/" target="_blank" style="width:20px;">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/in/image3dconversion/" target="_blank" style="width:20px;">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-10">
          <div class="widget no-border m-0" style="font-size:13px;">
            <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
              <li class="m-0 pl-10 pr-10 text-white">
                  Toll Free No: 
                  <img style="max-width:15px" src="https://via.placeholder.com/15x15" data-src="img/us.webp" alt="u.s" async defer> &nbsp;USA & Canada: 
                  <a href="tel:+18882769811" style="color:white;"><span>(+1)</span>888-276-9811</a> &nbsp;&nbsp; 
                  <img style="max-width:15px" src="https://via.placeholder.com/15x15" data-src="img/uk.webp" alt="uk" async defer>&nbsp;UK: 
                  <a href="tel:+448000903841" style="color:white;"><span>(+44)</span>800-090-3841</a> &nbsp;&nbsp; <i class="fa fa-whatsapp"></i>&nbsp; 
                  <a href="https://wa.me/9910630323" style="color:white;"><span>(+91)</span>9910630323</a>
              </li>
              <li class="m-0 pl-10 pr-10">
                <i class="fa fa-envelope-o text-white"></i>
                <a class="text-white" href="mailto:info@image3dconversion.com">info@image3dconversion.com</a>
              </li>
              <li class="sm-display-block mt-sm-10 mb-sm-10">
                <!-- Modal: Appointment Starts -->
                <!-- Modal: Appointment End -->
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
      function init() {
        var imgDefer = document.getElementsByTagName('img');
        for (var i = 0; i < imgDefer.length; i++) {
          if (imgDefer[i].getAttribute('data-src')) {
            imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
          }
        }
      }
      window.onload = init;
    </script>
  <script language="JavaScript">
    document.onclick = myClickHandler;

    function myClickHandler() {
      $(document).click(function(event) {
        var clickover = $(event.target);
        var $navbar = $(".navbar-collapse");
        var _opened = $navbar.hasClass("in");
        if (_opened === true && !clickover.hasClass("navbar-toggle")) {
          $navbar.collapse('hide');
        }
      });
    }
  </script> <?php
$url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$curr_page = basename($_SERVER['PHP_SELF']);

?> <div class="header-nav">
    <div class="header-nav-wrapper navbar-scrolltofixed bg-lightest" style="z-index: 1000;">
      <div class="container-fluid ml">
        <nav id="menuzord-right" class="menuzord blue bg-lightest menuzord-responsive">
          <a class="menuzord-brand pull-left flip logo-phone" href="/">
            <img src="img/logo-small.webp" alt="i3d logo" class="img-fluid" async defer>
          </a>
          <ul class="menuzord-menu menuzord-right menuzord-indented scrollable" style="max-height: 400px; display: none;">
            <li <?php if($curr_page=='index.php') { echo 'class="active"'; } ?>>
              <a href="/">Home</a>
            </li>
            <li <?php if($curr_page=='partner.php' || $curr_page=='doctor-login.php') { echo 'class="active"'; } ?>>
              <a onclick="myFunction2()" class="dropbtn2">Login <span class="indicator">
                  <span class="caret"></span>
                </span>
              </a>
              <ul id="myDropdown2" class="dropdown dropdown-content2" style="right: auto; display: none;">
                <li>
                  <a href="https://orders.image3dconversion.com/doc/">Doctor Login</a>
                </li>
                <li>
                  <a href="partner.php">Be a Partner</a>
                </li>
              </ul>
            </li>
            
            <li <?php if($curr_page=='radiology-report.php' || $curr_page=='bone-segmentation.php' || $curr_page=='guided-surgery-planning.php' || $curr_page=='surgical-guide.php' || $curr_page=='provisional-prosthetic-planning.php'|| $curr_page=='denture-provisional.php' || $curr_page=='implant-planning.php' || $curr_page=='3d-conversion.php' || $curr_page=='i3dc-ortho.php' || $curr_page=='i3dc-ortho-print.php') { echo 'class="active"'; } ?>>
              <a onclick="myFunction()" class="dropbtn">Services <span class="indicator">
                  <span class="caret"></span>
                </span>
              </a>
              <ul id="myDropdown" class="dropdown dropdown-content" style="right: auto; display: none;">
                <li>
                  <a href="3d-conversion.php">Bone Segmentation</a>
                </li>
                <li>
                  <a href="radiology-report.php">Radiology Report</a>
                </li>
                <li>
                  <a href="implant-planning.php">Implant Planning</a>
                </li>
                <li>
                  <a href="bone-reduction-guide.php">Bone Reduction Guide</a>
                </li>
                <li>
                  <a href="surgical-guide.php">Surgical Guides</a>
                </li>
                <li>
                  <a href="denture-provisional.php">Denture & Provisional</a>
                </li>
                <!--<li><a href="service1.php">Service 1</a></li><li><a href="denture-provisional.php">Service 2</a></li>-->
              </ul>
            </li>
            <li <?php if($curr_page=='case-study.php') { echo 'class="active"'; } ?>>
              <a href="case-study.php">Gallery</a>
            </li>
            <li <?php if($curr_page=='orthodontic-treatment-planning.php') { echo 'class="active"'; } ?>>
              <a href="orthodontic-treatment-planning.php">Orthodontics</a>
            </li>
            <li <?php if($curr_page=='online-training.php' || $curr_page=='workshop.php' || $curr_page=='1-day-guided-surgery-workshop.php' || $curr_page=='1-day-orthodontic-workshop.php' || $curr_page=='3-day-guided-surgery-workshop.php') { echo 'class="active "'; } ?>>
              <a onclick="myFunction3()" class="dropbtn3">Training <span class="indicator">
                  <span class="caret"></span>
                </span>
              </a>
              <ul id="myDropdown3" class="dropdown dropdown-content3" style="right: auto; display: none;">
                <li>
                  <a href="online-training.php">Online Training</a>
                </li>
                <li>
                  <a href="workshop.php">Workshops</a>
                </li>
              </ul>
            </li>
            <li <?php if($curr_page=='blogs.php') { echo 'class="active"'; } ?>>
              <a href="blogs.php">Blogs</a>
            </li>
            <li <?php if($curr_page=='career.php') { echo 'class="active"'; } ?>>
              <a href="career.php">Career</a>
            </li>
            <li <?php if($curr_page=='about.php' || $curr_page=='how-we-work.php' || $curr_page=='testimonial.php') { echo 'class="active "'; } ?>>
              <a onclick="myFunction1()" class="dropbtn1">About <span class="indicator">
                  <span class="caret"></span>
                </span>
              </a>
              <ul id="myDropdown1" class="dropdown dropdown-content1" style="right: auto; display: none;">
                <li>
                  <a href="about.php">About Company</a>
                </li>
                <li>
                  <a href="how-we-work.php">How we work</a>
                </li>
                <li>
                  <a href="testimonial.php">Testimonials</a>
                </li>
              </ul>
            </li>
            <li <?php if($curr_page=='contact.php') { echo 'class="active"'; } ?>>
              <a href="contact.php">Contact</a>
            </li>
            
          </ul>
        </nav>
      </div>
      <!--        <div class="bounce"><p><b> We are observing holiday from 24.10.2020 to 26.10.2020 and hence we will have limited access to our support or calls.  If you require immediate assistance, please email at info@image3dconversion.com</b></p></div>-->
    </div>
    <div></div>
  </div>
  <script>
    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }

    function myFunction1() {
      document.getElementById("myDropdown1").classList.toggle("show");
    }
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn1')) {
        var dropdowns = document.getElementsByClassName("dropdown-content1");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }

    function myFunction2() {
      document.getElementById("myDropdown2").classList.toggle("show");
    }
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn2')) {
        var dropdowns = document.getElementsByClassName("dropdown-content2");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
    
    function myFunction3() {
      document.getElementById("myDropdown3").classList.toggle("show");
    }
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn3')) {
        var dropdowns = document.getElementsByClassName("dropdown-content3");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  </script>
</header>