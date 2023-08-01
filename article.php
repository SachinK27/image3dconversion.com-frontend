<?php 
require "connection.php";

  if(isset($_GET['post']) && !empty($_GET['post'])){
      
    $url_slug = $_GET['post'];

    $sql="SELECT * FROM blogs WHERE url = '$url_slug' AND status = 'active'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {

      while($article = $result->fetch_assoc()) {
        
        $id = $article["id"];
        $title = $article["title"];
        $description = $article["description"];
        $image = $article["article_image"];
        $author = $article["written_by"];
        $created_at = $article["created_at"];
        $updated_at = $article["updated_at"];

        $last_updated = date( "d M Y", strtotime($updated_at));
      }
    } else {
      header("Location: https://www.image3dconversion.com/404.php");
    }
    $con->close();
  }else {
    header("Location: https://www.image3dconversion.com/404.php");
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
    })(window,document,'script','dataLayer','GTM-T8BNCHV');</script>
    <!-- End Google Tag Manager -->
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="We are the leading digital implant dentistry company with a team of expert CAD/CAM professional and doctors to help you navigate through both implantology and orthodontics." />
    <meta name="keywords" content="Surgical Guide implant, Guided implant surgery, Dental intraoral scanner, Intraoral digital scanner, Digital dental scanner, Digital Dentistry, 3d digital dentistry, Full mouth dental implants, Implant dentistry, All on 4 dental implants, Surgical stent dental, Nextdent surgical guide, Nobel biocare surgical guide, Surgical guide for dental implant, Surgical stent, dental" />
    <meta name="author" content="image3dconversion" />
    <link rel="canonical" href="https://www.image3dconversion.com/article.php" />
    <!-- Page Title -->
    <title><?php echo $title; ?> | Image3DConversion</title>
    <!-- Favicon and Touch Icons -->
    <link async defer href="images/new-favicon.ico" rel="shortcut icon" type="image/ico">
    <!-- Stylesheet -->
    <link async defer href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">-->
    <link async defer href="css/animate.css" rel="stylesheet" type="text/css">
    <link async defer href="css/article-style.css" rel="stylesheet" type="text/css">
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
    
    <!-- CSS | Theme Color -->
    <link async defer href="css/colors/theme-skin-blue.css" rel="stylesheet" type="text/css">
    <!-- external javascripts -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- <script src="js/jquery-ui.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="js/jquery-plugin-collection.js"></script>
    <style type="text/css">
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap");

      body {
        font-family: "Poppins", sans-serif !important;
      }
      
      .article-cont a{
          color: #3d5b9b !important;
      }
      .social-share a{
        color: white !important;
      }
      .article-cont .h2, .h3, .h4, .h5, .h6, h2, h3, h4, h5, h6 {
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
        color: inherit;
      }

    </style>
  </head>
  <body class="has-side-panel side-panel-right fullwidth-page side-push-panel">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8BNCHV" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="wrapper" class="clearfix">
      <!-- Header --> 
      <?php include'header.php'; ?>
      <!-- Start main-content -->
      <div class="container article-cont">
        <div class="row">
          <div class="col-md-9">
            <div style="max-width: 700px; top: -80px;" class="mx-auto text-secondary">
              <!-- Title -->
              <h1 class="font-weight-bold text-dark"><?php echo $title; ?></h1>
              <div class=" d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                  <small class="ml-2 mb-2">
                    <span class="text-primary d-block">By <?php echo $author; ?> |</span>
                    <span><?php echo $last_updated; ?></span>
                  </small>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-9">
            <img class="w-100" style="border-radius:5px;" src="<?php echo $image; ?>" />
            <div style="margin-top: 10px;" class="mx-auto text-secondary">
              <?php echo $description; ?>
            </div>
            <br>
            <hr>
            <!-- share code -->
            <div class="social-share s-m">
            <span>Share:</span>
              <a class="fa fa-facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.image3dconversion.com/article.php?post=<?php echo $url_slug; ?>" target="_blank"></a>
              <a class="fa fa-twitter" href="https://twitter.com/intent/tweet?url=https://www.image3dconversion.com/article.php?post=<?php echo $url_slug; ?>" target="_blank"></a>
              <a class="fa fa-whatsapp" href="https://api.whatsapp.com/send?text=%0ahttps://www.image3dconversion.com/article.php?post=<?php echo $url_slug; ?>" target="_blank"></a>
              <a class="fa fa-envelope" href="mailto:?&subject=&body=https://www.image3dconversion.com/article.php?post=<?php echo $url_slug; ?>" target="_blank"></a>
              <a class="fa fa-linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.image3dconversion.com/<?php echo $url_slug; ?>" target="_blank"></a>
            </div>
            <!-- share code ends here -->

            <!-- comments will appear here -->
            <hr>
            <div class="comments">
              <h4>Comments:</h4>
              <div class="coment-bottom bg-white p-2 px-4">
                <div class="d-flex flex-row add-comment-section mt-4" style="margin-bottom:20px;">
                  <form id="frm-comment">
                    <input type="hidden" name="comment_id" id="commentId" />
                    <input type="hidden" name="article_id" id="articleId" value="<?php echo $id; ?>" />
                    <input type="text" class="form-control mr-3 mb-5" name="name" id="name" placeholder="Your name" required>
                    <input type="text" class="form-control mr-3 mb-5" name="comment" id="comment" placeholder="Add comment" required>
                    <button class="btn btn-primary" id="submitButton" type="button">Comment</button>
                  </form>
                </div>

                <div id="output"></div>

              </div>
            </div>
            <!-- comments will end here -->

          </div>

          <div class="col-md-3">
            <div class="panel panel-default">
              <a href="online-training.php"><img src="https://via.placeholder.com/400x1200" data-src="images/article-side-banner.webp" alt="article-side-banner" style="border-radius:5px;"></a>
            </div>
          </div>

        </div>
      </div>
      <br>
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
    <script>
      function postReply(commentId) {
        $('#commentId').val(commentId);
        $("#name").focus();
      }

      $("#submitButton").click(function () {

         if(document.getElementById("comment").value.length == 0)
          {
              alert("Comment Box is empty!");
              return false;
          }
          if(document.getElementById("name").value.length == 0)
          {
              alert("Please enter you name in the comment box!");
              return false;
          }


        $("#comment-message").css('display', 'none');
        var str = $("#frm-comment").serialize();

        $.ajax({
          url: "comment/comment-add.php",
          data: str,
          type: 'post',
          success: function (response)
          {
            var result = eval('(' + response + ')');
            if (response)
            {
              $("#comment-message").css('display', 'inline-block');
              $("#name").val("");
              $("#comment").val("");
              $("#commentId").val("");
             listComment();
            } else
            {
              alert("Failed to add comments !");
              return false;
            }
          }
        });
      });
      
      $(document).ready(function () {
           listComment();
      });

      function listComment() {
        $.post("comment/comment-list.php",
          {
            id: <?php echo $id; ?>
          },
          function (data) {
            var data = JSON.parse(data);
            
            var comments = "";
            var replies = "";
            var item = "";
            var parent = -1;
            var results = new Array();

            var list = $("<ul class='outer-comment'>");
            var item = $("<li>").html(comments);

            for (var i = 0; (i < data.length); i++)
            {
              var commentId = data[i]['comment_id'];
              parent = data[i]['parent_comment_id'];

              if (parent == "0")
              {
                comments = "<div class='commented-section' style='margin-bottom:20px;'><div class='d-flex flex-row align-items-center commented-user'><span class='mr-2'><img src='https://img.icons8.com/officel/344/user.png' width='15px'> "+ data[i]['comment_sender_name'] +"</span> | <span class='h6 mb-1 ml-2'>"+ data[i]['comment_at'] +"</span></div><div class='comment-text-xs'><p>"+ data[i]['comment'] +"</p></div><div class='reply-section'><div class='d-flex flex-row align-items-center voting-icons'><a onClick='postReply(" + commentId + ")'><h6 class='ml-2 mt-1'>Reply</h6></a></div></div></div>";

                var item = $("<li>").html(comments);
                list.append(item);
                var reply_list = $('<ul>');
                item.append(reply_list);
                listReplies(commentId, data, reply_list);
              }
            }
            $("#output").html(list);
          });
      }

      function listReplies(commentId, data, list) {
        for (var i = 0; (i < data.length); i++)
        {
          if (commentId == data[i].parent_comment_id)
          {
            var comments = "<div class='commented-section' style='margin-bottom:20px;'><div class='d-flex flex-row align-items-center commented-user'><span class='mr-2'><img src='https://img.icons8.com/officel/344/user.png' width='15px'> "+ data[i]['comment_sender_name'] +"</span> | <span class='h6 mb-1 ml-2'>"+ data[i]['comment_at'] +"</span></div><div class='comment-text-xs'><p>"+ data[i]['comment'] +"</p></div><div class='reply-section'><div class='d-flex flex-row align-items-center voting-icons'><a onClick='postReply(" + data[i]['comment_id'] + ")'><h6 class='ml-2 mt-1'>Reply</h6></a></div></div></div>";

            var item = $("<li>").html(comments);
            var reply_list = $('<ul>');
            list.append(item);
            item.append(reply_list);
            listReplies(data[i].comment_id, data, reply_list);
          }
        }
      }
    </script>
  </body>
</html>