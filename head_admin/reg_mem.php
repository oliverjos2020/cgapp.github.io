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
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-4" href="https://mobirise.co"><span class="socicon socicon-houzz mbr-iconfont mbr-iconfont-btn"></span></a><a class="navbar-caption text-black display-4" href="#" style="background-color: rgb(255, 255, 255); display: inline !important;">CG CONTROL PANEL</a></span>
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
                <div class="mbr-section-btn align-left py-4"><a class="btn btn-primary display-4" href="page1.php"><span class="mbri-left mbr-iconfont mbr-iconfont-btn"></span>
                    BACK</a><br>
                    <a class="btn btn-primary display-4" href="#search">
                    SEARCH</a>
                </div>
            </div>
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2">REGISTERED ADMIN</h2>
                <h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-5">
                <?php
$conn=mysql_connect('localhost','root','');
if(!$conn){
echo"Database Error";
}
mysql_select_db('church_project'); 

$result= mysql_query("SELECT COUNT(name_of_church) AS totalsum FROM administrator ");
$row = mysql_fetch_assoc($result); 
$sum = $row['totalsum'];
echo ("Total Registered Admins are : $sum");
mysql_free_result($result);
 mysql_close($conn); 

?>
                </h3>
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
                <th>Denomination</th>
                    <th>Name of Church</th>
                    <th>Email</th>
                    <th>Mobile Number </th>
                    <th>Country </th>
                    <th>State</th>
                    <th>Address</th>
                    <th>Pass</th>
                    <th>Pass</th>
                    <th>Image</th>
                    <th>Edit </th>
                    <th>Delete </th>
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
$sql="select * from administrator limit $start_from,$num_per_page";
$rs_result=mysql_query($sql);
?>
          <?php
while($row=mysql_fetch_array($rs_result,MYSQL_ASSOC)){
?>
<tr>
<td><?php echo $row['denomination']; ?></td>
<td><?php echo $row['name_of_church']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['country']; ?></td>
<td><?php echo $row['state']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['pass']; ?></td>
<td><?php echo $row['pass2']; ?></td>
<td><?php echo "<a href='edit_images.php?edit=$row[id]'><img style='max-height:80px;'src='../index/images/".$row['image']."'></a>"; ?></td>
<td><?php echo"<a href='reg_mema.php?edit=$row[id]'>update</a>"?></td>
<td><?php echo"<a href='delete_reg_mem.php?delete=$row[id]'style='color:orangered'>delete</a>"?></td></tr>

<?php
}
?>
</table>
</center>
<center>
<?php
$sql="SELECT * from administrator ";
$rs_result=mysql_query($sql);
$total_records=mysql_num_rows($rs_result);
$total_pages=ceil($total_records/$num_per_page);
echo "<div class='pagination'>";
for($i=1;$i<=$total_pages;$i++){
    if($i==$page)
echo" <a class='active' href='reg_mem.php?page=".$i."'>".$i."</a>&nbsp;";
else
echo'<a href="reg_mem.php?page='.$i.'">'.$i.'</a>';
    }
    echo"</div>";
?>
     </center>      
            <!--Card-5-->
            
            <!--Card-6-->
            
        </div>
    </div>
</section>
<section id="search">
    <br>
    <br>
    <center>
<p><form method="POST"><input type="text" style="width:400px" name="search" class="form-control" placeholder="search using name or name of church" required>
        <br>
        <button type="submit" name="submit" style="width:300px;background-color:dodgerblue;color:white;" class="form-control">search...</button>
        <div class='table-responsive' id='table-compile'>
        <table class="table table-striped table-hover">
        <?php
 mysql_connect("localhost","root","") or die("could not connect database");
 mysql_select_db("church_project") or die("could not find db!");
 $output='';
 $search='';
 $count='';
 if(isset($_POST['submit'])){
     $search=$_POST['search'];
     $search=preg_replace("#[^0-9a-z]#i","",$search);
     $query = mysql_query("SELECT * from administrator WHERE name_of_church LIKE '%$search%' OR address LIKE '%$search%'") or die("could not search!");
     $count = mysql_num_rows($query);
     if($count ==0){
         $output = 'No results found for your search...';

     }else{
         while($row = mysql_fetch_array($query)){
             $name_of_church = $row['name_of_church'];
             
             $email = $row['email'];
             $phone = $row['phone'];
             $country = $row['country'];
             $state = $row['state'];
             $address = $row['address'];
             $pass = $row['pass'];
             
             $output .='
             <tr>
             <td>'.$name_of_church.'</td>
             
             <td>'.$email.'</td>
             <td>'.$phone.'</td>
             <td>'.$country.'</td>
             <td>'.$state.'</td>
             <td>'.$address.'</td>
             <td>'.$pass.'</td>     
             
             </tr>';
         }
     }
 }
 ?>
<?php 
echo"search for<b> ($search)</b> found <b>$count  </b> items<br><br> ";
print("$output");
?>
</table>
    </form></p>
</center>
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