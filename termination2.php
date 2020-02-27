<?php
include('header.php');
include("db.php");
if(!isset($_SESSION)){
  session_start();
}

if(isset($_POST['submit'])){
  $name =    $_POST['name'];
  $account = $_POST['account'];
  $level =   $_POST['level'];
  //$query = "SELECT * FROM `user` INNER JOIN `transaction` ON user.u_id = transaction.u_id WHERE u_name='$name' u_account='$account' u_authority='$level'";
  $query = "SELECT * from user, transaction Where user.u_id=transaction.u_id AND u_name='$name' AND u_account='$account' AND u_authority='$level'";
  $result = mysqli_query($db,$query);
  $udata = mysqli_fetch_array($result);
  $u_id = $udata['u_id'];
  if($udata){
    $judge = "true";
  }
  else{
    $judge = "false";
  }

  if($judge=="true"){
    $query = "INSERT INTO record (u_id,u_authority,pay_time,t_id,t_startdate,t_enddate,t_remainder,t_pay,c_name_after,c_license,c_id,choose_date,choose_location) VALUES ('$udata[u_id]','$udata[u_authority]','$udata[pay_time]','$udata[t_id]','$udata[t_startdate]','$udata[t_enddate]',
'$udata[t_remainder]','$udata[t_pay]','$udata[c_name_after]','$udata[c_license]','$udata[c_id]','$udata[choose_date]','$udata[choose_location]')";
    $result = mysqli_query($db,$query);
    // $ya = mysqli_fetch_array($result);
    if(!$result){
      printf("Error: %s\n", mysqli_error($db));
    }
    $sql = "UPDATE car_storage SET rent = '否' WHERE c_license = '$udata[c_license]'";
    if(mysqli_query($db, $sql)){

    }else{
      die("UpdateERROR");
    }

    $sql = "DELETE FROM `transaction` WHERE `transaction`.`u_id` = '$u_id'";
    $result = mysqli_query($db,$sql);
    if(!$result){
      printf("Error: %s\n", mysqli_error($db));
    }
  }
}
else{
  $name =    $_POST['name'];
  $account = $_POST['account'];
  $level =   $_POST['level'];
  //$query = "SELECT * FROM `user` INNER JOIN `transaction` ON user.u_id = transaction.u_id WHERE u_name='$name' u_account='$account' u_authority='$level'";
  $query = "SELECT * from user, transaction Where user.u_id=transaction.u_id AND u_name='$name' AND u_account='$account' AND u_authority='$level'";
  $result = mysqli_query($db,$query);
  $udata = mysqli_fetch_array($result);
  $u_id = $udata['u_id'];
  if($udata){
    $judge = "true";
  }
  else{
    $judge = "false";
  }

  if($judge=="true"){
    $query = "INSERT INTO record (u_id,u_authority,pay_time,t_id,t_startdate,t_enddate,t_remainder,t_pay,c_name_after,c_license,c_id,choose_date,choose_location) VALUES ('$udata[u_id]','$udata[u_authority]','$udata[pay_time]','$udata[t_id]','$udata[t_startdate]','$udata[t_enddate]',
'$udata[t_remainder]','$udata[t_pay]','$udata[c_name_after]','$udata[c_license]','$udata[c_id]','$udata[choose_date]','$udata[choose_location]')";
    $result = mysqli_query($db,$query);
    // $ya = mysqli_fetch_array($result);
    if(!$result){
      printf("Error: %s\n", mysqli_error($db));
    }
    $sql = "UPDATE car_storage SET rent = '否' WHERE c_license = '$udata[c_license]'";
    if(mysqli_query($db, $sql)){

    }else{
      die("UpdateERROR");
    }

    $sql = "DELETE FROM `transaction` WHERE `transaction`.`u_id` = '$u_id'";
    $result = mysqli_query($db,$sql);
    if(!$result){
      printf("Error: %s\n", mysqli_error($db));
    }
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
                        <h2 style="font-family: 微軟正黑體">終止合約</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Termination of Contract</p>
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
                  <?php
                    if($judge=="true"){
                      echo"<div class='section-title text-center'>
                          <h3 style='font-family: 微軟正黑體'>解約程序已完成</h3>
                          <br><br><br>
                          <a href='home.php' class='rent-btn' style='font-family: 微軟正黑體; font-size: 16px'>回首頁</a>
                      </div>";
                    }
                    else{
                      echo"<div class='section-title text-center'>
                          <h3 style='font-family: 微軟正黑體'>輸入資料有誤，請重新填寫表單</h3>
                          <br><br><br>
                          <a href='termination.php' class='rent-btn' style='font-family: 微軟正黑體; font-size: 16px'>回上頁</a>
                      </div>";
                    }
                  ?>

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
