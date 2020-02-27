<?php

include('header.php');
include("db.php");
include("pay_succeed_mail.php");
if(!isset($_SESSION)){
  session_start();
}

if(isset($_POST['submit'])){
  $query = "SELECT * FROM transaction WHERE u_id='".$_SESSION['id']."'";
  $result = mysqli_query($db,$query);
  $tdata = mysqli_fetch_array($result);
  $t_paytime = $tdata['pay_time'];
  $before = $tdata['t_startdate'];
  $t_paytime = $t_paytime + 1;
  $after = date("Y-m-d",strtotime("$before +$t_paytime month"));
  $t_startdate = $tdata['t_startdate'];

  $sql = "UPDATE transaction SET pay_time = $t_paytime WHERE u_id = '".$_SESSION['id']."'";
  if(mysqli_query($db, $sql)){

  }else{
    die("ERROR2");
  }

}
else{
  $query = "SELECT * FROM transaction WHERE u_id='".$_SESSION['id']."'";
  $result = mysqli_query($db,$query);
  $tdata = mysqli_fetch_array($result);
  $t_paytime = $tdata['pay_time'];
  $before = $tdata['t_startdate'];
  $t_paytime = $t_paytime + 1;
  $after = date("Y-m-d",strtotime("$before +$t_paytime month"));
  $t_startdate = $tdata['t_startdate'];

  $sql = "UPDATE transaction SET pay_time = $t_paytime WHERE u_id = '".$_SESSION['id']."'";
  if(mysqli_query($db, $sql)){

  }else{
    die("ERROR2");
  }
}
$query = "SELECT * FROM transaction WHERE u_id='".$_SESSION['id']."'";
$result = mysqli_query($db,$query);
$tdata = mysqli_fetch_array($result);

$mail->addAddress('q72ZgmQQPS@gmail.com','EX-H');//收件人
$mail->Subject = "=?UTF-8?B?".base64_encode('收到訂閱付款')."?=";
$mail->Body    = "在此通知您:<br><br>自客戶編號: ".$tdata['u_id']."<br>訂單編號: ".$tdata['t_id']."<br>方案: ".$tdata['u_authority']."<br>收到 ".$tdata['t_pay']."eth。<br><br>Please do not reply the mail.<br>此為系統信件，請不要回覆此信";
$mail->send();

?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Cardoor - Car Rental HTML Template</title>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->

    <!--== Slider Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2 style="font-family: 微軟正黑體">付 費</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Pay for Car Subscription</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <?php
        $query = "SELECT * FROM user WHERE u_id='".$_SESSION['id']."'";
        $result = mysqli_query($db,$query);
        $row = mysqli_fetch_array($result); ?>
    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding" style="padding-bottom: 100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3 style="font-family: 微軟正黑體">付款程序已完成，謝謝您的訂閱！</h3>
                        <br><br><br>
                        <a href="home.php" class="rent-btn" style="font-family: 微軟正黑體; font-size: 16px">回首頁</a>
                    </div>
                </div>
            </div>
        </section>

    <?php
      include ("footer.php");
     ?>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="assets/js/main.js"></script>

</body>

</html>
