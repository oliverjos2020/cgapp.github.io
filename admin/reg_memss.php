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
  
  <title>inbox</title>
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
        padding-bottom:5px;
        text-align:center;
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
  <section class="mbr-section info1 cid-rRVpzJ72Ii" id="info1-11">

    

    
    <div class="container">
        <div class="row justify-content-center content-row">
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h3 class="mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style display-5">
                    
                </h3>
                <h2 class="align-left mbr-bold mbr-fonts-style display-2">REG'D MEMBERS</h2>
                <h3 class="align-left mbr-bold mbr-fonts-style display-2" style="font-size:25px; padding:8px;">
                <?php
$conn=mysql_connect('localhost','root','');
if(!$conn){
echo"Database Error";
}
mysql_select_db('church_project'); 

$result= mysql_query("SELECT COUNT(name_of_church) AS totalsum FROM registration WHERE name_of_church='".$_SESSION['name_of_church']."'");
$row = mysql_fetch_assoc($result); 
$sum = $row['totalsum'];
echo ("Total Registered Members are : $sum");
mysql_free_result($result);
 mysql_close($conn); 

?>
                </h3>
            </div>
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                <div class="mbr-section-btn align-right py-4"><a class="btn btn-primary display-4" href="index.php"><span class="mbri-left mbr-iconfont mbr-iconfont-btn"></span>Back</a></div>
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
            

            <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th>Fullname</th>
                    <th>Name of Church</th>
                    <th>Email</th>
                    <th>Mobile Number </th>
                    <th>Country </th>
                    <th>State</th>
                    <th>Address</th>
                    <th>Pass</th>
                    <th>Pass</th>
                    <th>Image</th>
                    
                </tr>
            </thead>
            <tbody>
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
$sql="SELECT * from registration WHERE name_of_church='".$_SESSION['name_of_church']."' limit $start_from,$num_per_page";
$rs_result=mysql_query($sql);
?>
          <?php
while($row=mysql_fetch_array($rs_result,MYSQL_ASSOC)){
?>
<tr>
<td><?php echo $row['fullname']; ?></td>
<td><?php echo $row['name_of_church']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['country']; ?></td>
<td><?php echo $row['state']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['pass']; ?></td>
<td><?php echo $row['pass2']; ?></td>
<td><?php echo "<a href='edit_images.php?edit=$row[id]'><img style='max-height:80px;'src='../index/images/".$row['image']."'></a>"; ?></td>


<?php
}
?>
</table>
</center>
<center>
<?php
$sql="SELECT * from registration WHERE name_of_church='".$_SESSION['name_of_church']."' limit $start_from,$num_per_page";
$rs_result=mysql_query($sql);
$total_records=mysql_num_rows($rs_result);
$total_pages=ceil($total_records/$num_per_page);
echo "<div class='pagination'>";
for($i=1;$i<=$total_pages;$i++){
    if($i==$page)
echo" <a class='active' href='reg_memss.php?page=".$i."'>".$i."</a>&nbsp;";
else
echo'<a href="page2.php?page='.$i.'">'.$i.'</a>';
    }
    echo"</div>";
?>
     </center>      
            <!--Card-5-->
            
            <!--Card-6-->
            
        </div>
    </div>
</section>
<section class="menu cid-rRVpzK0CL0" once="menu" id="menu2-12">

    

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
                    My Profile</a>  <a class="btn btn-sm btn-primary display-4" href="page4.php">Send Messages</a>           <a class="btn btn-sm btn-primary display-4" href="page3.php"><span class="mobi-mbri mobi-mbri-layers mbr-iconfont mbr-iconfont-btn"></span>Event</a> <a class="btn btn-sm btn-primary display-4" href="../index/login.php"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>
                    Logout</a></div>
        </div>
    </nav>
</section>

<section once="footers" class="cid-rRVpzLU1nw" id="footer7-14">

    

    

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