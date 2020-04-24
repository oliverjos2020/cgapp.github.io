<?php
session_start();
?><!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.12.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  <style>

/* This is for tooltip Container */ 
body{
    background:url(images/hd.jpg);
}
.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}


/* This is for tooltip text */ 

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 1s;
}


.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent;
}

/* Show the tooltip text when you
mouse over the tooltip container */ 

.tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
}
.back{
    background:url(images/hd.jpg) no-repeat;
    background-size:cover;
}
</style>
</head>
<body>
  <section class="menu cid-rRPjm1qFXp" once="menu" id="menu2-0">

    

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
                    <a class="nav-link link text-black display-4" href="https://mobirise.co"><span class="mbri-right mbr-iconfont mbr-iconfont-btn"></span></a>
                </li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="page1.php"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>
                    My Profile</a>  <a class="btn btn-sm btn-primary display-4" href="page4.php"><span class="mbrib-letter mbr-iconfont mbr-iconfont-btn"></span>Inbox</a>           <a class="btn btn-sm btn-primary display-4" href="page3.php"><span class="mobi-mbri mobi-mbri-layers mbr-iconfont mbr-iconfont-btn"></span>Notification</a> <a class="btn btn-sm btn-primary display-4" href="../index/page2.php"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>
                    Logout</a></div>
        </div>
    </nav>
</section>
<div class="back">
<section class="engine"><a href="https://mobirise.info/v">free html templates</a></section><section class="mbr-section content8 cid-rRVcfFEAEP" id="content8-h">

    
<br>
    <div class="container" style="background-color:#gainsboro;">
        <div class="media-container-row title">
            <div class="col-12 col-md-8">
                <div class="mbr-section-btn align-center"><a class="btn btn-primary display-4" href="page2.php"><span class="mbri-bulleted-list mbr-iconfont mbr-iconfont-btn"></span>Post Advert</a> <a class="btn btn-primary display-4" href="page5.php"><span class="mbri-bookmark mbr-iconfont mbr-iconfont-btn"></span>Latest</a> <a class="btn btn-primary display-4" href="page6.php"><span class="mbri-more-vertical mbr-iconfont mbr-iconfont-btn"></span>Advert</a>
                <a class="btn btn-primary display-4" href="pagess.php"><span class="mobi-mbri mobi-mbri-file mbr-iconfont mbr-iconfont-btn"></span>Send Admin a Message</a> <a class="btn btn-primary display-4" href="page7.html"><span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>Google Church Search</a><a class="btn btn-primary display-4" href="get_informed.php"><span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>Get Informed</a></div>
            </div>
        </div>
        
        
    </div>
    
</section>

</div>
<br>
<center><p style='font-size:25px;'>WELCOME</p><?php
$conn=mysql_connect("localhost","root","");
mysql_select_db('church_project');
$sql ="SELECT* FROM registration WHERE email='".$_SESSION['email']."'"; 
$mine=mysql_query($sql,$conn);
if(!$mine) {
die('Could not get data: ' . mysql_error()); 
}
while($row = mysql_fetch_array($mine, MYSQL_ASSOC)) {
    echo"<p style='font-size:25px; font-weight:bold;color:brown; background-color:white;'>{$row['fullname']} of {$row['name_of_church']}</p>";
}
?></center>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/mbr-testimonials-slider/mbr-testimonials-slider.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>