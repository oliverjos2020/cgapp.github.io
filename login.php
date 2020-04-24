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
  <meta name="description" content="Website Creator Description">
  
  <title>user_login</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link href="assets/fonts/style.css" rel="stylesheet">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>

<section class="engine"><a href="https://mobirise.info/y">html site templates</a></section><section class="mbr-section form3 cid-rRP96r7NHf mbr-parallax-background" id="form3-q">

    

    <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                
                <h3 class="mbr-section-subtitle align-center pb-5 mbr-light mbr-fonts-style display-5"><b style="font-size:40px;">ADMIN LOGIN PAGE</b><br>*All fields are required</h3>
            </div>
        </div>

        <div class="row py-2 justify-content-center">
            <div class="col-12 col-lg-6  col-md-8 " data-form-type="formoids">
                <!---Formbuilder Form--->
                <form action="login.php" method="POST" class="mbr-form form-with-styler" >
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">
                        Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="form-group col" >
                            <input type="email" name="email" placeholder="Email" data-form-field="Email" required="required" class="form-control display-7" ><br>
                            <br>
                            <select name="name_of_church" class="form-control display-7">
                            <?php
mysql_connect("localhost","root","");
mysql_select_db("church_project");
$sql="select * from administrator";
$rs_result=mysql_query($sql);
while($row=mysql_fetch_array($rs_result,MYSQL_ASSOC)){
?>
<option><?php echo $row['name_of_church'];} ?></option>
</select><br>
                            <input type="password" name="pass" placeholder="password"  required="required" class="form-control display-7" ><br>
                            <button type="submit" name="submit" class="btn btn-primary  display-4"><span class="mbri-login mbr-iconfont mbr-iconfont-btn"></span>Login</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary display-4" href="index.php"><span class="mbri-left mbr-iconfont mbr-iconfont-btn"></span>BACK</a><br><br><a class="btn btn-primary display-4" href="reg.php"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>Don't have an account<br>REGISTER<br></a>
                        </div>
                        
                        <?php
                    $con=mysqli_connect("localhost","root","","church_project");
if(isset($_POST['submit'])){
$email=$_POST['email'];
$name_of_church=$_POST['name_of_church'];
$pass=$_POST['pass'];
$result = mysqli_query($con, 'SELECT * FROM administrator WHERE email="'.$email.'" AND name_of_church="'.$name_of_church.'" AND pass="'.$pass.'"');
if(mysqli_num_rows($result)==1){
$_SESSION['email'] = $email;
$_SESSION['name_of_church'] = $name_of_church;
echo"<script>alert('Login Succesful...'); window.location='../admin/index.php'</script>";
}
else{
echo"<script>alert('Invalid Accont Details');</script>";
}
if(isset($_GET['logout'])){
    session_unregister('email');
}
}
?>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>