<?php
    session_start();
    require('db.php');
    $sql = "SELECT * FROM user WHERE u_id = '".$_SESSION['id']."'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result);
    $_SESSION['level']= $_POST['level'];
    $_SESSION['year']= $_POST['year'];
    if (isset($_POST)) {
      $level = $_POST['level'];
      $year  = $_POST['year'];
      $year =(int)$year;
      if($level=="平民方案"){
        $pay = 1.99*$year;
      }
      else if($level=="尊榮方案"){
        $pay = 3.79*$year;
      }
      else if($level=="貴族方案"){
        $pay = 5.29*$year;
      }
    }
    $t_startdate = date_create('now')->format('Y-m-d');
    if($year=='1'){
      $t_enddate = date_create('now')->add(new DateInterval("P1Y"))->format('Y-m-d');
    }
    else if($year=='2'){
      $t_enddate = date_create('now')->add(new DateInterval("P2Y"))->format('Y-m-d');
    }
    else{
      $t_enddate = date_create('now')->add(new DateInterval("P3Y"))->format('Y-m-d');
    }
    $_SESSION['t_startdate']= $t_startdate;
    $_SESSION['t_enddate']= $t_enddate;
 ?>
 <?php
 if(isset($_POST['submit'])){

     echo "<script>alert('成功');</script>";
     $t_startdate = date_create('now')->format('Y-m-d');
     if($year=='1'){
       $t_enddate = date_create('now')->add(new DateInterval("P1Y"))->format('Y-m-d');
     }
     else if($year=='2'){
       $t_enddate = date_create('now')->add(new DateInterval("P2Y"))->format('Y-m-d');
     }
     else{
       $t_enddate = date_create('now')->add(new DateInterval("P3Y"))->format('Y-m-d');
     }

     $insert_sql = "INSERT INTO transaction (u_id, u_authority,t_startdate,t_enddate,t_remainder,c_name_after) VALUES ('{$row['u_id']}','{$_POST['level']}',$t_startdate,$t_enddate,5,'')";
     // $insert_sql = "INSERT INTO changecar (u_id, c_id_before,c_id_after,c_time) VALUES (1,'1','1',$t_startdate)";

     if(mysqli_query($db, $insert_sql)){
       echo "<script>alert('成功');</script>";
      echo '<meta http-equiv=REFRESH CONTENT=0;url=choose1.php>';
     }else{
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
    <?php
      include('header.php')
     ?>

    <!--== Slider Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2 style="font-family: 微軟正黑體">繳 費 程 序</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <!--<div class="section-title  text-center">
                        <h2 style="font-family: 微軟正黑體">繳費程序</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>-->
                    <div class="row" style="padding-bottom: 100px">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <?php echo "<p style='font-family: 微軟正黑體;font-size: 22px'>".'親愛的'.$row['u_name'].'先生/小姐:'."</h4>"?>
                            <br>
                            <br>
                            <?php echo "<p style='font-family: 微軟正黑體; font-size: 22px; line-height: 50px;'>".
                                '您目前所選擇的 方案是'.'<span style="color: red">'.$level."|&nbsp;".'</span>'.'<span>'.$year."年</span>".'的方案'."<br>".'總共是每個月須付 '.$pay."元<i class='fab fa-ethereum' style='font-size:22px'>"."</i>(不包含智慧合約交易手續費gas)" ?>
                            <br>
                            若確認無誤請按下確認送出，即可依照您選擇的方案進行選車。</p>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div align="center">
                                <input type="submit" name="submit" class="rent-btn" value="確認並進行選車"  style="font-family: 微軟正黑體; font-size: 16px" onclick="location.href='choose1.php'">
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

			<!-- Service Content Start -->
			<div class="row">

				<!-- Single Service End -->


				<!-- Single Service End -->
			</div>
			<!-- Service Content End -->
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
