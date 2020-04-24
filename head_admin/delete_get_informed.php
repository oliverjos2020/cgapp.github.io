<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.12.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="Website Builder Description">
  
  <title>advert</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section once="footers" class="cid-rS4Ziroi60" id="footer6-h">

    

    

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

<section class="engine"><a href="https://mobirise.info/o">portfolio web templates</a></section><section class="menu cid-rS4Zishq4p" once="menu" id="menu2-i">

    

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
                </form> </a></div>
        </div>
    </nav>
</section>

<section class="mbr-section info2 cid-rS4ZitZ2b2" id="info2-j">

    

    

    <div class="container">
        <div class="row main justify-content-center">
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                <div class="mbr-section-btn align-left py-4"><a class="btn btn-primary display-4" href="get_informed.php"><span class="mbri-left mbr-iconfont mbr-iconfont-btn"></span>
                    BACK</a></div>
            </div>
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2">DELETE GET INFORMED</h2>
                
            </div>
        </div>
    </div>
</section>

<section class="services6 cid-rS4ZivaJF5" id="services6-k">
    <!---->
    
    <!---->
    <!--Overlay-->
    
    <!--Container-->
    <div class="container">
        <div class="row">
       
            <!--Titles-->
            

           

            <div class="table-responsive" id="table-compile">
    <?php
mysql_connect("localhost","root","");
mysql_select_db('church_project');
if(isset($_GET['delete'])){
$id=$_GET['delete'];
$sql=mysql_query("SELECT * FROM get_informed WHERE id='$id'");
$row=mysql_fetch_array($sql);
}
if(isset($_POST['delete'])){
$id=$_POST['id'];
$sql="DELETE FROM get_informed WHERE id='$id'";
$res=mysql_query($sql) or die("could not update".mysql_error());
echo"<script>alert('Record deleted successfully');</script>";
echo"<meta http-equiv='refresh' content='0;url=get_informed.php'>";


}
?>
<form action="delete_get_informed.php" method="POST">
<input type="text" name="newname" value="<?php echo $row[1];  ?>" style="text-align:center; width:200px;" class="form-control"/><br>
 <input type="hidden" name="id" value="<?php echo $row[0]; ?>" />
 Are you sure you want to delete this record?&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Yes" name="delete"/>
</form>

    </div>    
            <!--Card-5-->
            
            <!--Card-6-->
            
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>