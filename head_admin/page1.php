<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.12.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="Web Site Maker Description">
  
  <title>welcome</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="cid-rS4T66QYiE mbr-fullscreen mbr-parallax-background" id="header2-b">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h3 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    CONTEMPORARY GOSPEL CONTROL PANEL
                </h3>
                
                
                <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="gets.php">GET INFORMED</a></div>
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="engine"><a href="https://mobirise.info/l">free site templates</a></section><section class="mbr-section article content9 cid-rS1boiNInP" id="content9-6">
    
     

    <div class="container">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 25%;">
            <div class="section-text align-center mbr-fonts-style display-5">
            <em style="color:#333;">Latest:</em> <marquee width="80%"style="font-size:22px;font-weight:normal;font-family:futura Lt Bt; text-align:center;"><?php
$conn=mysql_connect("localhost","root","");
mysql_select_db('church_project');
$sql ="SELECT* FROM latest ORDER by id desc LIMIT 1 "; 
$mine=mysql_query($sql,$conn);
if(!$mine) {
die('Could not get data: ' . mysql_error()); 
}
while($row = mysql_fetch_array($mine, MYSQL_ASSOC)) {
    echo"{$row['messages']}";
}
?></marquee>
                </div>
            <hr class="line" style="width: 25%;">
        </div>
        </div>
</section>

<section once="footers" class="cid-rS1bqsPsZM" id="footer6-7">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2019 Mobirise - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>

<section class="menu cid-rS4RTDGvxy" once="menu" id="menu2-a">

    

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
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="https://mobirise.co"><span class="socicon socicon-houzz mbr-iconfont mbr-iconfont-btn"></span></a><a class="navbar-caption text-black display-4" href="https://mobirise.co" style="background-color: rgb(255, 255, 255); display: inline !important;">CG CONTROL PANEL</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="https://mobirise.co">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>
                </li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="users_post.php"><span class="mbri-users mbr-iconfont mbr-iconfont-btn" style="font-size: 20px;"></span>Users Post</a><a class="btn btn-sm btn-primary display-4" href="complains.php">Complain</a> <a class="btn btn-sm btn-primary display-4" href="advert.php"><span class="mbri-more-vertical mbr-iconfont mbr-iconfont-btn" style="font-size: 20px;"></span>Advert</a> <a class="btn btn-sm btn-primary display-4" href="latest.php"><span class="mbri-bookmark mbr-iconfont mbr-iconfont-btn" style="font-size: 20px;"></span>Latest</a><a class="btn btn-sm btn-primary display-4" href="reg_admin.php">Reg'd Admins</a><a class="btn btn-sm btn-primary display-4" href="regd_mem.php">Reg'd Members</a> <a class="btn btn-sm btn-primary display-4" href="sia.php">SIA</a> <a class="btn btn-sm btn-primary display-4" href="sna.php">SNA</a><a class="btn btn-sm btn-primary display-4" href="index2.php">Add Head Admin</a><a class="btn btn-sm btn-primary display-4" href="gets.php">Get Informed</a><a class="btn btn-sm btn-primary display-4" href="index.php"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn" style="font-size: 20px;"></span>Logout</a></div>
        </div>
    </nav>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>