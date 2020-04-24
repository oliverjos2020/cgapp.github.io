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
  
  <title>user_reg</title>
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
  

<section class="engine"><a href="https://mobirise.info/c">free site builder</a></section><section class="mbr-section form1 cid-rRNw1BB6XW mbr-parallax-background" id="form1-m">

    

    <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(37, 34, 31);">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5"><strong><b style="font-size:40px; color:white;">REGISTRATION PAGE</b><br>*All fields must be filled.
                </strong></h3>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5"><strong><b style="font-size:30px; color:white;">*Your church must be registered. for you to be able to register.</b>
                </strong></h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoids">
                <!---Formbuilder Form--->
                <form action="page1.php" method="POST" class="mbr-form form-with-styler" enctype="multipart/form-data"><input type="hidden" name="email" data-form-email="true" >
                    
                    <div class="dragArea row">
                        <div class="col-md-4  form-group" data-for="name">
                            <label for="name-form1-m" class="form-control-label mbr-fonts-style display-7"><strong>Fullame</strong></label>
                            <input type="text" name="fullname" data-form-field="Name" required="required" class="form-control display-7" >
                        </div>
                        <div class="col-md-4  form-group" data-for="email">
                            <label for="email-form1-m" class="form-control-label mbr-fonts-style display-7"><strong>Email</strong></label>
                            <input type="email" name="email" data-form-field="Email" required="required" class="form-control display-7" >
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-m" class="form-control-label mbr-fonts-style display-7"><strong>Phone</strong></label>
                            <input type="tel" name="phone" data-form-field="Phone" class="form-control display-7" 
                            >
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-m" class="form-control-label mbr-fonts-style display-7"><strong>Country</strong></label>
                            <input type="text" name="country" data-form-field="Phone" class="form-control display-7" 
                            >
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-m" class="form-control-label mbr-fonts-style display-7"><strong>State</strong></label>
                            <input type="text" name="state" data-form-field="Phone" class="form-control display-7" 
                            >
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-m" class="form-control-label mbr-fonts-style display-7"><strong>address</strong></label>
                            <input type="text" name="address" data-form-field="Phone" class="form-control display-7" 
                            >
                        </div>
                        
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-m" class="form-control-label mbr-fonts-style display-7"><strong>Name of Church/Denomination</strong></label>
                            <select name="name_of_church" class="form-control display-7">
                            <?php
mysql_connect("localhost","root","");
mysql_select_db("church_project");
$sql="select * from administrator";
$rs_result=mysql_query($sql);
while($row=mysql_fetch_array($rs_result,MYSQL_ASSOC)){
?>
<option><?php echo $row['name_of_church'];} ?></option>
</select>
                        </div>

                        

                        <div class="col-md-4  form-group" data-for="name">
                            <label for="name-form1-m" class="form-control-label mbr-fonts-style display-7"><strong>Password</strong></label>
                            <input type="password" name="pass" data-form-field="Name" required="required" class="form-control display-7" >
                        </div>
                        <div class="col-md-4  form-group" data-for="name">
                            <label for="name-form1-m" class="form-control-label mbr-fonts-style display-7"><strong>Confirm Password</strong></label>
                            <input type="password" name="pass2" data-form-field="Name" required="required" class="form-control display-7" >
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-m" class="form-control-label mbr-fonts-style display-7"><strong>Image of your Church/Organization</strong></label>
                            <input type="hidden" name="size" value="10000000" />
<p><input type="file" name="image" value="Upload Image" class="btn btn-primary display-4"/></p><p><marquee width="70%" behavior="alternate" style="color:white; font-weight:bold;">Not more than 1mb</marquee></p>
                        </div>
                        <div class="col-md-12 input-group-btn align-center"><button type="submit" class="btn btn-primary btn-form display-4" name="SUBMIT">CREATE ACCOUNT</button><br><a class="btn btn-primary display-4" href="index.php"><span class="mbri-left mbr-iconfont mbr-iconfont-btn"></span>BACK</a></div>
                    </div>
                    <?php
$db=mysqli_connect("localhost","root","","church_project");
if(isset($_POST['SUBMIT'])){
$target="images/".basename($_FILES['image']['name']);
$name_of_church=$_POST['name_of_church'];
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$country=$_POST['country'];
$state=$_POST['state'];
$address=$_POST['address'];
$pass=$_POST['pass'];
$pass2=$_POST['pass2'];
$image=$_FILES['image']['name'];
$username=mysqli_query($db,"SELECT email from registration where email='$email'");
$count=mysqli_fetch_array($username);
if($count!=0){
die("<script>alert('Email has already been registered');</script>");
}
if($pass==$pass2){
    $sql=("INSERT into registration (name_of_church,fullname,email,phone,country,state,address,pass,pass2,image)VALUES('$name_of_church','$fullname ','$email','$phone','$country','$state','$address','$pass','$pass2','$image')");
mysqli_query($db,$sql);
if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
$msg="Image uploaded successfully";
}else{
$msg="There was a problem uploading image";
}
echo"<script>alert('Your registration was successful'); window.location='page2.php'</script>";
}else{
    echo"<script>alert('Passwords do not match');</script>";
}

}
?>
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