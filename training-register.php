<?php
require 'connection.php';


if(isset($_GET['approve']))
{
    $name1=mysqli_real_escape_string($con,$_GET['approve']);
    $newid=filter_var($name1,FILTER_SANITIZE_STRING);
    
    
    $sql="SELECT * FROM imagedoc WHERE id = '$newid'";
      
        if($query_run=mysqli_query($con,$sql))
        {
         
         	$logged_in_user = mysqli_fetch_assoc($query_run);
          	 $name = $logged_in_user['name'] ;
             $email = $logged_in_user['email'] ;
		    $approved = $logged_in_user['approved'] ;
		    
		    
		    
		     $sqls="UPDATE imagedoc SET approved='1' WHERE id='$newid'";
                                if(mysqli_query($con,$sqls))
                                
		    {
		    
		      $responder="Image3dconversion";
            $resSubject="Doctor Registration Form - Image3dconversion";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers = "From: Image3dconversion <info@image3dconversion.com>" . "\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
       $resMailbody= "Hi ".$name.",<p>Your registration process has been approved. You can now login using your email id and password.<br><br>
           <b><a href='http://image3dconversion.com/doctor-login.php'>Click here</a></b> to login and upload your case
       <p>
                                                        
                             <p><b>Warm Regards</b><br>Image3dconversion Team<br>Follow us on social media<br><a href='https://www.facebook.com/image3dconversion/'>Facebook</a><br><a href='https://www.linkedin.com/in/image3dconversion/'>LinkedIn</a><br><a href='https://www.instagram.com/image3dconversion/'>Instagram</a><br><hr>
                            <b>Contact Us</b><br>
                            Address : 1st Floor, H.N. 81, Niva Villa, Bylane, 3, Pub Sarania Rd, Chandmari, Guwahati, Assam 781003
                            
                            <br>
                            
                           Ind : +91 88763 95581<br>
                           USA & Canada: (+1)888-276-9811<br>
                           UK: (+44)800-090-3841
                            
                            <br>
                            
                          
                            </p>";
            mail($email, $resSubject, $resMailbody, $headers);
		    
		    
        }
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
        }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}











if(isset($_GET['delete']))
{
    
    $name1=mysqli_real_escape_string($con,$_GET['delete']);
    $newid=filter_var($name1,FILTER_SANITIZE_STRING);
    
    
    $sqls="Delete from imagedoc WHERE id='$newid'";
                                mysqli_query($con,$sqls);
    
    
    
    
    
    
}


?>
<!DOCTYPE html>
<html>
<head>
    <style>
    .col-centered{
    float: none;
    margin: 0 auto;
}
        .panel-primary {
    height: calc(30vh - 145px);
}
    </style>
    
    
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="icon">
<link href="images/apple-touch-icon-72x72.png" rel="icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">


<!-- external javascripts -->

<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>



</head>
<body>
<div class="col-md-10 col-md-offset-1" style="margin-top:5%" >
             <ul class="nav nav-pills nav-justified">
    
    <li class="active"><a data-toggle="pill" href="#home1">Training Registration</a></li>
   <br><hr>
  </ul>
               <div class="tab-content">
                   
                               
                    
                    
                    
                    
                    
                    
                    
                     <div id="home1" class="tab-pane active">


             <div class="table-responsive">
             
  <table class="table table-striped">
    <thead>
      <tr>
        
          <th><h4><small><strong>Name</strong></small></h4></th>
            <th><h4><small><strong>For</strong></small></h4></th>
        <th><h4><small><strong>Email</strong></small></h4></th>
        <th><h4><small><strong>Mobile</strong></small></h4></th>
          <th><h4><small><strong>Address</strong></small></h4></th>
          <th><h4><small><strong>City</strong></small></h4></th>
          <th><h4><small><strong>Speciality</strong></small></h4></th>
          <th><h4><small><strong>Experience?</strong></small></h4></th>
          <th><h4><small><strong>If yes than?</strong></small></h4></th>
         
        
        
      </tr>
    </thead>
    <tbody>
      
          <?php
          $sql="SELECT * FROM training ORDER BY id DESC";
                if($query_run=mysqli_query($con,$sql))
                {
                    while($row=mysqli_fetch_assoc($query_run))
                    {
                        $id=$row['id'];
                        $for=$row['whom'];
                        $name=$row['name'];
                        $email=$row['email'];
                        $mobile=$row['mobile'];
                        $address=$row['address'];
                      $city=$row['city'];
                      $speciality=$row['speciality'];
                      $experience=$row['experience'];
                      $mention=$row['mention'];
                        echo'<tr>';
                        
                        echo ' <td><h4><small>'.$name.'</small></h4></td>';
                        echo ' <td><h4><small>'.$for.'</small></h4></td>';
                         echo ' <td><h4><small>'.$email.'</small></h4></td>';
                         echo ' <td><h4><small>'.$mobile.'</small></h4></td>';
                         echo ' <td><h4><small>'.$address.'</small></h4></td>';
                        echo ' <td><h4><small>'.$city.'</small></h4></td>';
                        echo ' <td><h4><small>'.$speciality.'</small></h4></td>';
                        echo ' <td><h4><small>'.$experience.'</small></h4></td>';
                        echo ' <td><h4><small>'.$mention.'</small></h4></td>';
                          
                       
                        
                        echo '</tr>';
                    }
                }
                    
                   ?>
    </tbody>
  </table>
             </div>
                          </div>   
                       
                   
                   
                   
             </div>
               </div>
