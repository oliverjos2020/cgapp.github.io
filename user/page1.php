<?php
session_start();
?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.12.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="Web Page Builder Description">
  
  <title>my_profile</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="mbr-section info1 cid-rRViMzkess" id="info1-n">

    

    
    <div class="container">
        <div class="row justify-content-center content-row">
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                
                <h2 class="align-left mbr-bold mbr-fonts-style display-2">MY PROFILE</h2>
            </div>
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                <div class="mbr-section-btn align-right py-4"></div>
            </div>
        </div>
    </div>
</section>

<section class="engine"><a href="https://mobirise.info/f">simple website creator</a></section><section class="menu cid-rRPjm1qFXp" once="menu" id="menu2-i">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="https://mobirise.co"><span class="socicon socicon-houzz mbr-iconfont mbr-iconfont-btn"></span></a><a class="navbar-caption text-black display-4" href="https://mobirise.co" style="background-color: rgb(255, 255, 255); display: inline !important;">CONTEMPORARY GOSPEL</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="#"><span class="mbri-right mbr-iconfont mbr-iconfont-btn"></span></a>
                </li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" style="padding:12px; background:transparent; color:white; border:none; font-size:15px; font-weight:bold;"><?php 
date_default_timezone_set('Africa/Lagos');
echo date('')." ". date('l\, F jS Y');
                            ?> </a><a class="btn btn-sm btn-primary display-4"> <script language="javascript" type="text/javascript">
        /* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
        <!-- Begin
        var timerID = null;
        var timerRunning = false;
        function stopclock (){
            if(timerRunning)
                clearTimeout(timerID);
            timerRunning = false;
        }
        function showtime () {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds()
            var timeValue = "" + ((hours >12) ? hours -12 :hours)
            if (timeValue == "0") timeValue = 12;
            timeValue += ((minutes < 10) ? ":0" : ":") + minutes
            timeValue += ((seconds < 10) ? ":0" : ":") + seconds
            timeValue += (hours >= 12) ? " P.M." : " A.M."
            document.clock.face.value = timeValue;
            timerID = setTimeout("showtime()",1000);
            timerRunning = true;
        }
        function startclock() {
            stopclock();
            showtime();
        }
        window.onload=startclock;
        // End -->
    </SCRIPT>
    <form name="clock">
                    <i id="clock" class="icon-time"></i>
                    <input  class="span2" id="trans" type="submit"  name="face" value="" style="padding:5px; width:100px; background:transparent; color:white; border:none; font-size:15px; font-weight:bold;">
                </form> </a><a class="btn btn-sm btn-primary display-4" href="index.php"><span class="mbri-left mbr-iconfont mbr-iconfont-btn"></span>
                    Back</a></div>
        </div>
    </nav>
</section>

<section class="carousel slide testimonials-slider cid-rRVhYem8RM" data-interval="false" id="testimonials-slider1-l">
    
    

<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db('church_project');
$sql ="SELECT* FROM registration WHERE email='".$_SESSION['email']."'"; 
$mine=mysql_query($sql,$conn);
if(!$mine) {
die('Could not get data: ' . mysql_error()); 
}
while($row = mysql_fetch_array($mine, MYSQL_ASSOC)) {
    echo"

    <div class='container text-center'>
        <h2 class='pb-5 mbr-fonts-style display-2'>
        {$row['name_of_church']}
        </h2>

        <div class='carousel slide' role='listbox' data-pause='true' data-keyboard='false' data-ride='carousel' data-interval='6000'>
            <div class='carousel-inner'>
                
                
            <div class='carousel-item'>
                    <div class='user col-md-8'>
                        <div class='user_image'>
                        <img style='max-height:auto;'src='../index/images/".$row['image']."'>
                        </div>
                        
                        <div class='user_name mbr-bold pb-2 mbr-fonts-style display-7'>
                        {$row['fullname']}
                        </div>
                        <div class='user_desk mbr-light mbr-fonts-style display-7'>
                        {$row['email']}
                        </div>
                    </div>
                </div><div class='carousel-item'>
                    <div class='user col-md-8'>
                        <div class='user_image'>
                        <img style='max-height:auto;'src='../index/images/".$row['image']."'>
                        </div>
                        
                        <div class='user_name mbr-bold pb-2 mbr-fonts-style display-7'>
                        {$row['fullname']}
                        </div>
                        <div class='user_desk mbr-light mbr-fonts-style display-7'>
                        {$row['email']}
                        </div>
                        
                    </div>
                </div></div>

            <div class='carousel-controls'>
                <a class='carousel-control-prev' role='button' data-slide='prev'>
                  <span aria-hidden='true' class='mbri-arrow-prev mbr-iconfont'></span>
                  <span class='sr-only'>Previous</span>
                </a>
                
                <a class='carousel-control-next' role='button' data-slide='next'>
                  <span aria-hidden='true' class='mbri-arrow-next mbr-iconfont'></span>
                  <span class='sr-only'>Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class='mbr-section article content12 cid-rRVitkZuGU' id='content12-m'>
     

    <div class='container'>
        <div class='media-container-row'>
            <div class='mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7'>
                <ul>
                    <center><li><strong>MOBILE NUMBER</strong> - {$row['phone']}</li>
                    <li><strong>EMAIL ADDRESS</strong> - {$row['email']} <br><a href='page1a.php?edit=$row[id]'>Edit All</a></li>
                    </center>
                    ";}?>

                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 20%;">
            <div class="section-text align-center mbr-fonts-style display-5">
            <em style="color:dodgerblue; font-size:32px;">Latest:</em> <marquee width="80%"style="font-size:32px;font-weight:bold;font-family:futura Lt Bt; text-align:center; color:gold;"><?php
$conn=mysql_connect("localhost","root","");
mysql_select_db('church_project');
$sql ="SELECT* FROM latest ORDER by id desc"; 
$mine=mysql_query($sql,$conn);
if(!$mine) {
die('Could not get data: ' . mysql_error()); 
}
while($row = mysql_fetch_array($mine, MYSQL_ASSOC)) {
    echo"{$row['messages']}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;>>";
}
?></marquee>
                </div>
            <hr class="line" style="width: 20%;">
        </div>
        </div>
</section>

<section once="footers" class="cid-rRV98GDdMf" id="footer7-j">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">About us</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">Services</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">Get In Touch</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">Careers</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white mbr-bold" href="#" target="_blank">Work</a>
                    </li></ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    
                    
                    
                    
                    
                    
                <div class="soc-item">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://instagram.com/mobirise" target="_blank">
                            <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                            <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.behance.net/Mobirise" target="_blank">
                            <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2019 Mobirise - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/mbr-testimonials-slider/mbr-testimonials-slider.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>