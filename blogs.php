<?php 
  require "connection.php";

  $sql="SELECT * FROM blogs WHERE status = 'active'";
  $result = $con->query($sql);
  $number_of_result = mysqli_num_rows($result);  
  $results_per_page = 5;
  $number_of_page = ceil ($number_of_result / $results_per_page);

  if (!isset ($_GET['page']) ) {  
    $page = '1';
  } else {  
    $page = $_GET['page'];  
  } 

  $page_first_result = ($page-1) * $results_per_page;

  $query = "SELECT * FROM blogs LIMIT " . $page_first_result . ',' . $results_per_page;  
  $result = mysqli_query($con, $query);





  $con->close();

 ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T8BNCHV');</script>
    <!-- End Google Tag Manager -->
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="We are the leading digital implant dentistry company with a team of expert CAD/CAM professional and doctors to help you navigate through both implantology and orthodontics." />
    <meta name="keywords" content="Surgical Guide implant, Guided implant surgery, Dental intraoral scanner, Intraoral digital scanner, Digital dental scanner, Digital Dentistry, 3d digital dentistry, Full mouth dental implants, Implant dentistry, All on 4 dental implants, Surgical stent dental, Nextdent surgical guide, Nobel biocare surgical guide, Surgical guide for dental implant, Surgical stent, dental" />
    <meta name="author" content="image3dconversion" />
    <link rel="canonical" href="https://www.image3dconversion.com/blogs.php" />
    <!-- Page Title -->
    <title>Blogs | Image3DConversion - Complete Guided Implant Surgery Solution</title>
    <!-- Favicon and Touch Icons -->
    <link async defer href="images/new-favicon.ico" rel="shortcut icon" type="image/ico">
    <!-- Stylesheet -->
    <link async defer href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">-->
    <link async defer href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/css-plugin-collections-home.css" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link async defer id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link async defer href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link async defer href="css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->
    
    <!-- CSS | Theme Color -->
    <link async defer href="css/colors/theme-skin-blue.css" rel="stylesheet" type="text/css">
    <!-- external javascripts -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!--<script src="js/jquery-ui.min.js"></script>-->
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
    <div id="wrapper" class="clearfix">
      <!-- preloader -->
      <div id="preloader">
        <div id="spinner">
          <img src="images/preloaders/4.gif" alt="preloader">
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
      </div>
      
      <!-- Header -->
      <?php include'header.php'; ?>
      <!-- Start main-content -->
      <div class="main-content">
        <!-- Section: home -->
        <section class="inner-header divider " data-bg-img="new-banner.webp">
          <div class="container pt-5 pb-0">
            <!-- Section Content -->
            <div class="section-content">
              <div class="row">
                <div class="col-md-12 text-center">
                  <h1 class="title" style="color:white">Blogs</h1>
                  <ol class="breadcrumb text-center text-black">
                    <li>
                      <a href="#" style="color:white">Home</a>
                    </li>
                    <li class="active" style="color:white">Blogs</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>1
        </section>
        <!-- Section: About -->
        <section id="about" class="">0
          <div class="container">

            <?php while ($row = mysqli_fetch_array($result)) { ?>
            <div style="margin-bottom: 30px;">
              <div class="row">
                <div class="col-md-4">
                  <a href="">
                    <img src="https://via.placeholder.com/1200x676" data-src="<?php echo $row['article_image']; ?>" alt="<?php echo $row['url']; ?>" style="border-radius:5px;" class="img-responsive" />
                  </a>
                </div>
                <div class="col-md-8">
                  <article id="">
                    <div class="meta">
                      <h2><?php echo $row['title']; ?></h2>
                      By <span class="author"><?php echo $row['written_by']; ?></span> | <span class="date"><?php echo date( "d M Y", strtotime($row['updated_at'])); ?></span>
                    </div>
                    <div class="entry-content">
                      <p class=""><?php echo $row['short_desc']; ?></p>
                      <a href="article.php?post=<?php echo $row['url']; ?>" class="btn btn-primary">Read More</a>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <?php } ?>
            <nav>
              <ul class="pagination">
                <!-- <li><a href="?page=<?php echo $page-1; ?>" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li> -->
                <?php for($pg = 1; $pg<= $number_of_page; $pg++) { ?>
                <li <?php if ($pg==$page) { ?> class="active" <?php } ?>><a href="?page=<?php echo $pg; ?>"><?php echo $pg; ?><span class="sr-only">(current)</span></a></li>
                <?php } ?>
                <!-- <li><a href="?page=<?php echo $page+1; ?>" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li> -->
              </ul>
            </nav>
          </div>
        </section>

      </div>
      <!-- end main-content -->
      <!-- Footer -->
      <?php include 'footer.php';?>
      <a class="scrollToTop" href="#">
        <i class="fa fa-angle-up"></i>
      </a>
    </div>
    <!-- end wrapper -->
    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script src="js/custom.js"></script>
  </body>
</html>