<?php
include('header.php');
include("db.php");
if(!isset($_SESSION)){
  session_start();
}
if(isset($_POST['submit'])){
    $query = "SELECT * FROM car_menu WHERE c_id='".$_SESSION['after_id']."'";
    $result = mysqli_query($db,$query);
    $car = mysqli_fetch_array($result);

    $query = "SELECT * FROM transaction WHERE u_id='".$_SESSION['id']."'";
    $result = mysqli_query($db,$query);
    $car2 = mysqli_fetch_array($result);
    $c_license_before = $car2['c_license'];

    $l_sql = "SELECT * FROM car_storage WHERE rent='否' AND c_name='$car[c_name]' ORDER BY RAND( ) LIMIT 1";
    $result = mysqli_query($db,$l_sql);
    if(!$result){
      die("storageERROR");
      printf("Error: %s\n", mysqli_error($db));
    }
    else{
      $l_car = mysqli_fetch_array($result);
      $c_license_after = $l_car['c_license'];
    }

    $sql = "UPDATE car_storage SET rent = '是' WHERE c_license = '$c_license_after'";
    if(mysqli_query($db, $sql)){

    }else{
      die("UpdateERROR");
    }

    $sql = "UPDATE car_storage SET rent = '否' WHERE c_license = '$c_license_before'";
    if(mysqli_query($db, $sql)){

    }else{
      die("UpdateERROR2");
    }

    $c_name_after = $car['c_name'];
    $temp_date = $_SESSION['date'];
    $temp_date = (string)$temp_date;
    $change_date = substr($temp_date,6,10)."-".substr($temp_date,0,2)."-".substr($temp_date,3,2)." ".$_SESSION['time'];
    $change_place = $_SESSION['city'].$_SESSION['town'].$_SESSION['place'];
    $t_remainder = $car2['t_remainder'];
    $t_id = $car2['t_id'];
    if($car2['t_remainder']>0){
      $t_remainder = $t_remainder-1;
    }


    $u_id = $row['u_id'];
    $c_id_before = $_SESSION['before_id'];
    $c_id_after = $_SESSION['after_id'];
    date_default_timezone_set('Asia/Taipei');
    $c_time = date("Y/m/d h:i:s");
    $sql = "INSERT INTO changecar (u_id,t_id,c_id_before, c_id_after,c_license_before,c_license_after, c_time,change_date,change_place,c_status,c_housekeeper) VALUES ('$u_id','$t_id','$c_id_before','$c_id_after','$c_license_before','$c_license_after','$c_time','$change_date','$change_place','未完成','')";
    if(mysqli_query($db, $sql)){

    }else{
      die("ERROR1");
      printf("Error: %s\n", mysqli_error($db));
    }

    $sql = "UPDATE transaction SET t_remainder = $t_remainder ,c_name_after = '$c_name_after', c_license = '$c_license_after',c_id = '$c_id_after' WHERE u_id = '".$_SESSION['id']."'";
    if(mysqli_query($db, $sql)){

    }else{
      die("ERROR2");
      printf("Error: %s\n", mysqli_error($db));
    }


}
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
                        <h2 style="font-family: 微軟正黑體">換 車 程 序</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>您已完成換車</p><br>
                      <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:100%">100%
                    </div>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding" style="padding-bottom: 100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3 style="font-family: 微軟正黑體">恭喜你完成換車程序！請在至所選地點與時間取車</h3>
                  </br>
                        <a href="home.php" class="rent-btn" style="font-family: 微軟正黑體; font-size: 16px">回首頁</a>
                    </div>
                </div>
            </div>
        </section>
    <!--== Services Area End ==-->



    <?php
      include ("footer.php")
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
