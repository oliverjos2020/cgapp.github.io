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
  
  <title>event</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <style>
.pagination a{
    color:black;
    float:left;
    padding:8px 16px;
    text-decoration:none;
    transition:background-color .3s;
}
    .pagination a.active{
        background-color:#4caf50;
        color:#fff;
    }
.pagination{
    margin-top:30px;
}
.pagination a:hover:not(.active){
    background-color:#ddd;
}
  </style>
  
</head>
<body>
  <section class="mbr-section info1 cid-rRVlibucTy" id="info1-v">

    

    
    <div class="container">
        <div class="row justify-content-center content-row">
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h3 class="mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style display-5">
                    Post an event to your members
                </h3>
                <h2 class="align-left mbr-bold mbr-fonts-style display-2">NOTIFICATION</h2>
            </div>
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                <div class="mbr-section-btn align-right py-4"><a class="btn btn-primary display-4" href="index.php"><span class="mbri-left mbr-iconfont mbr-iconfont-btn"></span>Back</a></div>
            </div>
        </div>
    </div>
</section>

<section class="engine"><a href="https://mobirise.info/j">website templates</a></section><section class="menu cid-rRVlicDcZr" once="menu" id="menu2-w">

    

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
                    My Profile</a>  <a class="btn btn-sm btn-primary display-4" href="page4.php">Send message</a>           <a class="btn btn-sm btn-primary display-4" href="page3.php"><span class="mobi-mbri mobi-mbri-layers mbr-iconfont mbr-iconfont-btn"></span>Notification</a> <a class="btn btn-sm btn-primary display-4" href="../index/login.php"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>
                    Logout</a></div>
        </div>
    </nav>
</section>

<section class="testimonials4 cid-rRVlxqzBMu" id="testimonials4-z">

  

  <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(35, 35, 35);">
  </div>
  <div class="container">
    
    <div class="col-md-10 testimonials-container"> 
      

    
    <div class='testimonials-item'>
        <div class='user row'>
          <div class='col-lg-3 col-md-4'>
            <div class='user_image'>
            
            </div>
          </div>
          <div class='testimonials-caption col-lg-9 col-md-8'>
            <div class='user_text '>
              <p class='mbr-fonts-style  display-7'>
              <form method="POST" enctype="multipart/form-data">
<p><input type="text" id="text1" name="msg" style="padding:5px 5px 5px 25px; width:600px;" placeholder="Please type in the details of your event..." required></p>


<p><input type="text" name="timez" style="padding:5px 5px 5px 25px; width:400px;" value="<?php 
date_default_timezone_set('Africa/Lagos');
echo date('h:ia')." ". date('l\, F jS Y');
                            ?>" hidden></p>
<p><input type="text" name="mails" value="<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db('church_project');
$sql ="SELECT* FROM administrator WHERE email='".$_SESSION['email']."'";
$mine=mysql_query($sql,$conn);
if(!$mine) {
die('Could not get data: ' . mysql_error()); 
}
while($row = mysql_fetch_array($mine, MYSQL_ASSOC)) {
echo "{$row['email']}";}?>" hidden ></p>
<p><select name="type_of_event" class="form-control display-7">
<optgroup label="Select Event">
<option>Wedding</option>
<option>Anniversary</option>
<option>Birthday</option>
<option>Burial</option>
<option>Meeting</option>
</select></p>
<p><input type="text" name="church" value="<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db('church_project');
$sql ="SELECT* FROM administrator WHERE email='".$_SESSION['email']."'";
$mine=mysql_query($sql,$conn);
if(!$mine) {
die('Could not get data: ' . mysql_error()); 
}
while($row = mysql_fetch_array($mine, MYSQL_ASSOC)) {
echo "{$row['name_of_church']}";}?>" hidden ></p>
<input type="hidden" name="size" value="10000000" />
<p><input type="file" name="image" class="btn btn-primary display-4" value="Upload Image"/></p><p><marquee width="30%" behavior="alternate" style="color:#663399;">Not more than 1mb</marquee></p>

<p><button type="submit" class="btn btn-primary display-4" name="SUBMIT" onclick="fn2()"><span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>SEND NOTIFICATION</button></p>

<?php
$db=mysqli_connect("localhost","root","","church_project");
if(isset($_POST['SUBMIT'])){
$target="images/".basename($_FILES['image']['name']);
$church=$_POST['church'];
$msg=$_POST['msg'];
$timez=$_POST['timez'];
$mails=$_POST['mails'];
$type_of_event=$_POST['type_of_event'];
$image=$_FILES['image']['name'];
$sql="INSERT INTO event (church,msg,timez,mails,type_of_event,image) VALUES ('$church','$msg','$timez','$mails','$type_of_event','$image')";
mysqli_query($db,$sql);
if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
$msg="Image uploaded successfully";
}else{
$msg="There was a problem uploading image";
}
echo"<script>alert('Event posted sucessfully');</script>";
}
?>
</form>
              </p>
              
            </div>
            <div class='user_name mbr-bold mbr-fonts-style align-left pt-3 display-7'>
            
            </div>
            <div class='user_desk mbr-light mbr-fonts-style align-left pt-2 display-7'>
            
            </div>
          </div>
        </div>
      </div>
     

      </div>
  </div>
  <center><br>
  </center>

  <div class="col-md-10 testimonials-container"> 

    <?php
mysql_connect("localhost","root","");
mysql_select_db("church_project");
$num_per_page=05;
if(isset($_GET["page"])){
$page=$_GET["page"];
}
else
{
$page=1;
}
$start_from=($page-1)*05;
$sql="select * from event WHERE mails='".$_SESSION['email']."' order by id desc limit $start_from,$num_per_page ";
$rs_result=mysql_query($sql);
?>
<?php
while($row=mysql_fetch_array($rs_result,MYSQL_ASSOC)){
echo"

    <div class='testimonials-item'>
        <div class='user row'>
          <div class='col-lg-3 col-md-4'>
            <div class='user_image'>
              <img style='max-height:auto;'src='images/".$row['image']."'>
            </div>
          </div>
          <div class='testimonials-caption col-lg-9 col-md-8'>
            <div class='user_text '>
              <p class='mbr-fonts-style  display-7'>
                 <em>'{$row['msg']}'</em>
              </p>
            </div>
            <div class='user_name mbr-bold mbr-fonts-style align-left pt-3 display-7'>
            {$row['type_of_event']}
            </div>
            <div class='user_desk mbr-light mbr-fonts-style align-left pt-2 display-7'>
            {$row['mails']}<br>
            <p>Posted at <em>'{$row['timez']}'</em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='delete_event.php?delete=$row[id]'style='color:orangered'>delete</a></p>
            </div>
          </div>
        </div>
        ";
}
?>
      </div><div class="testimonials-item">
        <div class="user rows">
          <div class="col-lg-3 col-md-4">
            
          <div class="testimonials-caption col-lg-9 col-md-8">
            <div class="user_text">
              <p class="mbr-fonts-style  display-7">
                 <em>"Pages <?php
$sql="SELECT * from event WHERE mails='".$_SESSION['email']."'";
$rs_result=mysql_query($sql);
$total_records=mysql_num_rows($rs_result);
$total_pages=ceil($total_records/$num_per_page);
echo "<div class='pagination'>";
for($i=1;$i<=$total_pages;$i++){
    if($i==$page)
echo" <a class='active' href='page3.php?page=".$i."'>".$i."</a>&nbsp;";
else
echo'<a href="page3.php?page='.$i.'">'.$i.'</a>';
    }
    echo"</div>";

?>   </em>
              </p>
            </div>
            
            
          </div>
        </div>
      </div></div>
  </div>
</section>

<section once="footers" class="cid-rRVlifn0vK" id="footer7-y">

    

    

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
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>