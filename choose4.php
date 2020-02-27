<?php
include('header.php');
include("db.php");
if(!isset($_SESSION)){
  session_start();
}

if(isset($_POST['submit'])){
  // $query = "SELECT * FROM car_menu WHERE c_id='".$_SESSION['button']."'";
  // $result = mysqli_query($db,$query);
  // $car = mysqli_fetch_array($result);
  // $c_name_after = $car['c_name'];
  // $choose_date = $_SESSION['date'].$_SESSION['time'];
  // $choose_location = $_SESSION['city'].$_SESSION['town'].$_SESSION['place'];
  // echo $choose_location;
  // $u_id = $row['u_id'];
  // $u_authority = $_SESSION['level'];
  // $t_startdate = $_SESSION['t_startdate'];
  // $t_enddate = $_SESSION['t_enddate'];
  // $c_id = $_SESSION['button'];
  // $l_sql = "SELECT * FROM car_storage WHERE rent='否' AND c_name='$c_name_after' ORDER BY RAND( ) LIMIT 1";
  // $result = mysqli_query($db,$l_sql);
  // if(!$result){
  //   printf("Error: %s\n", mysqli_error($db));
  //   die("storageERROR");
  // }
  // else{
  //   $l_car = mysqli_fetch_array($result);
  //   $c_license = $l_car['c_license'];
  // }
  //
  //
  // $sql = "UPDATE car_storage SET rent = '是' WHERE c_license = '$c_license'";
  // if(mysqli_query($db, $sql)){
  //
  // }else{
  //   die("UpdateERROR");
  // }
  //
  // switch ($u_authority) {
  //   case '平民方案':
  //     $t_pay = 1.99;
  //     break;
  //   case '尊榮方案':
  //     $t_pay = 3.79;
  //     break;
  //   case '貴族方案':
  //     $t_pay = 5.29;
  //   default:
  //     break;
  // }
  // $sql = "INSERT INTO transaction (u_id, u_authority,pay_time,t_startdate,t_enddate,t_remainder, t_pay, c_name_after,c_license,c_id,choose_date,choose_location,car_send,c_send_keeper,car_return,c_return_keeper) VALUES ('$u_id','$u_authority',0,'$t_startdate','$t_enddate',3,'$t_pay','$c_name_after','$c_license','$c_id','$choose_date','$choose_location','未完成','','未完成','')";
  // if(mysqli_query($db, $sql)){
  //
  // }else{
  //   printf("Error: %s\n", mysqli_error($db));
  //   die("ERROR");
  // }
  $query = "SELECT * FROM car_menu WHERE c_id='".$_SESSION['button']."'";
  $result = mysqli_query($db,$query);
  $car = mysqli_fetch_array($result);
  $c_name_after = $car['c_name'];
  $temp_date = $_SESSION['date'];
  $temp_date = (string)$temp_date;
  $choose_date = substr($temp_date,6,10)."-".substr($temp_date,0,2)."-".substr($temp_date,3,2)." ".$_SESSION['time'];
  $choose_location = $_SESSION['city'].$_SESSION['town'].$_SESSION['place'];
  $u_id = $row['u_id'];
  $u_authority = $_SESSION['level'];
  $t_startdate = $_SESSION['t_startdate'];
  $t_enddate = $_SESSION['t_enddate'];

  $l_sql = "SELECT * FROM car_storage WHERE rent='否' AND c_name='$c_name_after' ORDER BY RAND( ) LIMIT 1";
  $result = mysqli_query($db,$l_sql);
  if(!$result){
    printf("Error: %s\n", mysqli_error($db));
    die("storageERROR");
  }
  else{
    $l_car = mysqli_fetch_array($result);
    $c_license = $l_car['c_license'];
  }


  $sql = "UPDATE car_storage SET rent = '是' WHERE c_license = '$c_license'";
  if(mysqli_query($db, $sql)){

  }else{
    die("UpdateERROR");
  }

  $c_id = $_SESSION['button'];
  switch ($u_authority) {
    case '平民方案':
      $t_pay = 1.99;
      break;
    case '尊榮方案':
      $t_pay = 3.79;
      break;
    case '貴族方案':
      $t_pay = 5.29;
    default:
      break;
  }
  $sql = "INSERT INTO transaction (u_id, u_authority,pay_time,t_startdate,t_enddate,t_remainder, t_pay, c_name_after,c_license,c_id,choose_date,choose_location,car_send,c_send_keeper,car_return,c_return_keeper) VALUES ('$u_id','$u_authority',0,'$t_startdate','$t_enddate',3,'$t_pay','$c_name_after','$c_license','$c_id','$choose_date','$choose_location','未完成','','未完成','')";
  if(mysqli_query($db, $sql)){

  }else{
    printf("Error: %s\n", mysqli_error($db));
    die("ERROR");
  }
}
else{
  $query = "SELECT * FROM car_menu WHERE c_id='".$_SESSION['button']."'";
  $result = mysqli_query($db,$query);
  $car = mysqli_fetch_array($result);
  $c_name_after = $car['c_name'];
  $temp_date = $_SESSION['date'];
  $temp_date = (string)$temp_date;
  $choose_date = substr($temp_date,6,10)."-".substr($temp_date,0,2)."-".substr($temp_date,3,2)." ".$_SESSION['time'];
  $choose_location = $_SESSION['city'].$_SESSION['town'].$_SESSION['place'];
  $u_id = $row['u_id'];
  $u_authority = $_SESSION['level'];
  $t_startdate = $_SESSION['t_startdate'];
  $t_enddate = $_SESSION['t_enddate'];

  $l_sql = "SELECT * FROM car_storage WHERE rent='否' AND c_name='$c_name_after' ORDER BY RAND( ) LIMIT 1";
  $result = mysqli_query($db,$l_sql);
  if(!$result){
    printf("Error: %s\n", mysqli_error($db));
    die("storageERROR");
  }
  else{
    $l_car = mysqli_fetch_array($result);
    $c_license = $l_car['c_license'];
  }


  $sql = "UPDATE car_storage SET rent = '是' WHERE c_license = '$c_license'";
  if(mysqli_query($db, $sql)){

  }else{
    die("UpdateERROR");
  }

  $c_id = $_SESSION['button'];
  switch ($u_authority) {
    case '平民方案':
      $t_pay = 1.99;
      break;
    case '尊榮方案':
      $t_pay = 3.79;
      break;
    case '貴族方案':
      $t_pay = 5.29;
    default:
      break;
  }
  $sql = "INSERT INTO transaction (u_id, u_authority,pay_time,t_startdate,t_enddate,t_remainder, t_pay, c_name_after,c_license,c_id,choose_date,choose_location,car_send,c_send_keeper,car_return,c_return_keeper) VALUES ('$u_id','$u_authority',0,'$t_startdate','$t_enddate',3,'$t_pay','$c_name_after','$c_license','$c_id','$choose_date','$choose_location','未完成','','未完成','')";
  if(mysqli_query($db, $sql)){

  }else{
    printf("Error: %s\n", mysqli_error($db));
    die("ERROR");
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
                        <h2 style="font-family: 微軟正黑體">選 車</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>完成選車程序</p>
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
                        <h3 style="font-family: 微軟正黑體">恭喜你完成取車程序</h3>
                        <br><br><br>
                        <p style="font-family: 微軟正黑體; font-size: 22px; font-weight: bold;">還煩請 <?php echo ($row['u_name']) ?> 先生/小姐在預定的時間及地點取車，謝謝 : )</p>
                        <br><br><br><br><br><br><br><br>
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
