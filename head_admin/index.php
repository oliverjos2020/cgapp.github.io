<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.12.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="mbr-section info2 cid-rS13nkMduM" id="info2-2">

    

    

    <div class="container">
        <div class="row main justify-content-center">
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                <div class="mbr-section-btn align-left py-4"><a class="btn btn-primary display-4" href="https://mobirise.co"><span class="mbri-like mbr-iconfont mbr-iconfont-btn"></span>
                    TESTED &amp; TRUSTED</a> <a class="btn btn-primary display-4" href="../index/index.php"><span class="mbri-left mbr-iconfont mbr-iconfont-btn"></span>
                    Back to Homepage</a></div>
            </div>
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2">WELCOME TO YOUR CONTROL PANEL</h2>
                <h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-5">
                    Info block with gradient. Text is aligned to right.
                </h3>
            </div>
        </div>
    </div>
</section>

<section class="engine"><a href="https://mobirise.info/i">free web creation software</a></section><section class="mbr-section form3 cid-rRZljafLpe mbr-parallax-background" id="form3-1">

    

    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                
                <h3 class="mbr-section-subtitle align-center pb-5 mbr-light mbr-fonts-style display-5">*All fields must be field</h3>
            </div>
        </div>

        <div class="row py-2 justify-content-center">
            <div class="col-12 col-lg-6  col-md-8 " data-form-type="formoids">
                <!---Formbuilder Form--->
                <form action="index.php" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="CAP//6gjVfYzssHah+ZTDc30RudR95idjfSi9ikU5WA8hQJYWr5Dgu5pwS0C5bXKx0iCx41VmTxbkco35dgvETBwbVoFm4hhazX0a05cdGBiGQYHVga6bazMMxP4rSFh">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="form-group col" data-for="email">
                            <input type="text" name="user" placeholder="Username" data-form-field="Email" required="required" class="form-control display-7" id="email-form3-1"><br>
                            <p><input type="password" name="pass" placeholder="Password" data-form-field="Email" required="required" class="form-control display-7" id="email-form3"></p>
                            <p><button type="submit" name="submit" class="btn btn-primary display-4">LOGIN</button></p>
                        </div>
                        <div class="col-auto input-group-btn"></div>
                    </div>
                    <?php
                    $connect=mysqli_connect("localhost","root","","church_project");
if(isset($_POST['submit'])){
$user=$_POST['user'];
$pass=$_POST['pass'];
$result = mysqli_query($connect, 'SELECT * FROM head_administrator WHERE user="'.$user.'" AND pass="'.$pass.'"');
if(mysqli_num_rows($result)==1){
echo"<script>alert('Access Granted...'); window.location='page1.php';</script>";
}
else{
echo"<script>alert('Access Denied');</script>";
}
if(isset($_GET['logout'])){
    session_unregister('email');
}
}
?>        </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>