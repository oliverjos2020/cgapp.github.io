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
                    My Profile</a>  <a class="btn btn-sm btn-primary display-4" href="page4.php">Send Messages</a>           <a class="btn btn-sm btn-primary display-4" href="page3.php"><span class="mobi-mbri mobi-mbri-layers mbr-iconfont mbr-iconfont-btn"></span>Notification</a> <a class="btn btn-sm btn-primary display-4" href="../index/login.php"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>
                    Logout</a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/v">free html templates</a></section><section class="mbr-section content8 cid-rRVcfFEAEP" id="content8-h">

    
<br>
    <div class="container" style="background-color:#gainsboro;">
        <div class="media-container-row title">
            <div class="col-12 col-md-8">
                <div class="mbr-section-btn align-center"><a class="btn btn-primary display-4" href="page2.php"><span class="mbri-bulleted-list mbr-iconfont mbr-iconfont-btn"></span>My Post</a> <a class="btn btn-primary display-4" href="page5.php"><span class="mbri-bookmark mbr-iconfont mbr-iconfont-btn"></span>Latest</a> <a class="btn btn-primary display-4" href="page6.php"><span class="mbri-more-vertical mbr-iconfont mbr-iconfont-btn"></span>Advert</a><a class="btn btn-primary display-4" href="pagee.php"><span class="mbri-more-vertical mbr-iconfont mbr-iconfont-btn"></span>Message from Members</a>
                     <a class="btn btn-black-outline display-4" href="get_informed.php"><span class="mobi-mbri mobi-mbri-file mbr-iconfont mbr-iconfont-btn"></span>Get Informed</a> <a class="btn btn-black-outline display-4" href="page7.html"><span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>Church Search</a><a class="btn btn-black-outline display-4" href="add_admin.php">Add Admin</a><a class="btn btn-black-outline display-4" href="reg_memss.php">Reg'd members</a></div>
            </div>
        </div>
    </div>
</section>

<section class="carousel slide testimonials-slider cid-rRV9KIyIMj" data-interval="false" id="testimonials-slider1-d">
    
    

    

    <div class="container text-center">
        <h2 class="pb-5 mbr-fonts-style display-2">
        <?php
$conn=mysql_connect("localhost","root","");
mysql_select_db('church_project');
$sql ="SELECT* FROM administrator WHERE email='".$_SESSION['email']."'"; 
$mine=mysql_query($sql,$conn);
if(!$mine) {
die('Could not get data: ' . mysql_error()); 
}
while($row = mysql_fetch_array($mine, MYSQL_ASSOC)) {
echo "WELCOME ADMIN <br>of<br>
<a style='color:black; font-size:45px;'>{$row['name_of_church']}</a>
        </h2>

        <div class='carousel slide' role='listbox' data-pause='true' data-keyboard='false' data-ride='carousel' data-interval='5000'>
            <div class='carousel-inner'>
                
                
            <div class='carousel-item'>
                    <div class='user col-md-8'>
                        <div class='user_image'>
                
                        <img style='max-height:auto;'src='../index/images/".$row['image']."'>
                        </div>
                        
                        <div class='user_name mbr-bold pb-2 mbr-fonts-style display-7'>
                        {$row['name_of_church']}
                        </div>
                        <div class='user_desk mbr-light mbr-fonts-style display-7'>
                        {$row['email']}
                        </div>
                    </div>
                </div></div>
                ";}?>

           
        </div>
    </div>
</section>

<section class="mbr-section article content9 cid-rRT50SzGOJ" id="content9-9">
    
     

    <div class="container">
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 90%;">
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
            <hr class="line" style="width: 20%;">
        </div>
        </div>
</section>

<section once="footers" class="cid-rRV98GDdMf" id="footer7-b">

    

    

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