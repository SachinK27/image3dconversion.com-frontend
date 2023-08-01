     
    
 <?php



$newurl = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

$td=0;
$rr=0;
$bs=0;
$gsp=0;
$otp=0;
$ppp=0;
$dp=0;
$ip=0;
$io=0;
$iop=0;
$sg=0;

if (strpos($newurl,'radiology-report.php') !== false)
{
 $rr=1;  
}

elseif (strpos($newurl,'bone-reduction-guide.php') !== false) 
{
  $bs=1;  
}

elseif (strpos($newurl,'guided-surgery-planning.php') !== false)
{
 $gsp=1;   
}

elseif (strpos($newurl,'surgical-guide.php') !== false)
{
  $sg=1;  
}

elseif (strpos($newurl,'orthodontic-treatment-planning.php') !== false)
{
  $otp=1;  
}

elseif (strpos($newurl,'provisional-prosthetic-planning.php') !== false)
{
    $ppp=1;
}

elseif (strpos($newurl,'denture-provisional.php') !== false)
{
    $dp=1;
}

elseif (strpos($newurl,'implant-planning.php') !== false)
{
    $ip=1;
}

elseif (strpos($newurl,'3d-conversion.php') !== false)
{
    $td=1;
}

elseif (strpos($newurl,'i3dc-ortho.php') !== false)
{
    $io=1;
}

elseif (strpos($newurl,'i3dc-ortho-print.php') !== false)
{
  $iop=1;
} 

else {
   
}




?>    
    
<script>
$(function(){
    
    
        var stickyHeaderTop = $('#stickytypeheader').offset().top;
        
        
        var stickyHeaderBot = 1200;
 
        $(window).scroll(function(){
            
             if(( $(window).scrollTop() < 100)) {
                        $('#stickytypeheader').css({position: 'fixed', top: '300px',width: '220px'});
                        $('#sticky').css('display', 'block');
                      
                       
                } 
                
            
                if(( $(window).scrollTop() > 100 ) && ( $(window).scrollTop() < stickyHeaderBot )) {
                        $('#stickytypeheader').css({position: 'fixed', top: '100px',width: '220px'});
                        $('#sticky').css('display', 'block');
                      
                       
                } 
                
              if( ( $(window).scrollTop() > stickyHeaderBot )) {
                        $('#stickytypeheader').css({position: 'relative', top: '1000px'});
                        $('#sticky').css('display', 'block');
                       
                }
        });
        
        

        
      
        
  });
function toggleFixed () {
      var parentwidth = $(".parent").width();      
      $(".child").toggleClass("stickytypeheader").width(parentwidth);        
  }




</script>

<div class="hidden-xs" >
<div class="widget desktop" id="stickytypeheader" style="width:220px;z-index: 1;">
			 <div id="sticky"></div>
			 
			 
			 
			 
<h2 class="heading-title">I3DC Services</h2>


<div class="list-group" >
  <a href="3d-conversion.php" class="list-group-item <?php if($td==1) { echo 'active'; }  ?>">
  Bone Segmentation 
  </a>
   <a href="radiology-report.php" class="list-group-item <?php if($rr==1) { echo 'active'; }  ?>">Radiology Report</a>
  <a href="implant-planning.php" class="list-group-item <?php if($ip==1) { echo 'active'; }  ?>">Implant Planning</a>
  <a href="bone-reduction-guide.php" class="list-group-item <?php if($bs==1) { echo 'active'; }  ?>">Bone Reduction Guide</a>
  <a href="surgical-guide.php" class="list-group-item <?php if($sg==1) { echo 'active'; }  ?>">Surgical Guides</a>
 
  <a href="denture-provisional.php" class="list-group-item <?php if($dp==1) { echo 'active'; }  ?>">Denture & Provisional</a>
 
</div>
 
 
 
    <a href="https://orders.image3dconversion.com/doc"  data-toggle="popover" data-content="Upload your case for assesment of files, you don't need to go ahead with payment at this stage.">
        <button type="submit" class="btn btn-theme-colored btn-lg btn-block" data-loading-text="Please wait..." data-toggle="popover">Upload your case</button>
    </a>
<br>

			 
                              

                            </div>

</div>