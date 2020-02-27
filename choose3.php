<?php
    include("db.php");
    if(!isset($_SESSION)){
      session_start();
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
    <?php
      include('header.php');
     ?>

    <!--== Slider Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2 style="font-family: 微軟正黑體">選 車</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>請確認下方資訊是否正確並按下確認送出</p>
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
                    <div class="section-title text-center">
                        <h3 style="font-family: 微軟正黑體">以下為您取車之詳細資訊</h3>
                        <span class="title-line"><i class="fa fa-car"></i></span>

                    </div>
                    <div class="row" style="padding-bottom: 60px">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-6">
                            <?php
                              if(isset($_SESSION["id"]) && $_SESSION["id"] != null){
                                $query = "SELECT * FROM user WHERE u_id='".$_SESSION['id']."'";
    							$result = mysqli_query($db,$query);
    							$row = mysqli_fetch_array($result);

                                $_SESSION['date'] = $_POST['date'];
                                $_SESSION['time'] = $_POST['time'];
                                $_SESSION['city'] = $_POST['city'];
                                $_SESSION['town'] = $_POST['town'];
                                $_SESSION['place'] = $_POST['place'];
                              }
                            ?>
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                  <tr>
                                    <th>項目</th>
                                    <th colspan="3">資訊</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>會員帳號 :</td>
                                    <td colspan="3"><?php echo $row["u_account"];?></td>
                                  </tr>
                                  <tr>
                                    <td>姓名 :</td>
                                    <td colspan="3"><?php echo $row["u_name"];?></td>
                                  </tr>
                                  <tr>
                                    <td>取車日期 :</td>
                                    <td colspan="3"><?php echo $_SESSION['date'];?></td>
                                  </tr>
                                  <tr>
                                    <td>取車時間  :</td>
                                    <td colspan="3"><?php echo $_SESSION['time'];?></td>
                                  </tr>
                                  <tr>
                                    <td>取車地址 :</td>
                                    <td><?php echo $_SESSION['city'];?></td>
                                    <td><?php echo $_SESSION['town'];?></td>
                                    <td><?php echo $_SESSION['place'];?></td>
                                    <!-- <i class="material-icons" style="font-size:24px">place</i></td> -->
                                  </tr>
                                  <tr>
                                    <td>租賃合約開始時間 :</td>
                                    <td colspan="3"><?php echo $_SESSION['t_startdate'];?></td>
                                  </tr>
                                  <tr>
                                    <td>租賃合約結束時間 :</td>
                                    <td colspan="3"><?php echo $_SESSION['t_enddate'];?></td>
                                  </tr>
                                </tbody>
                            </table>

                        </div>
                        <?php
                          $query = "SELECT * FROM car_menu WHERE c_id='".$_SESSION['button']."'";
                          $result = mysqli_query($db,$query);
                          $car = mysqli_fetch_array($result);
                        ?>
                        <div class="col-lg-4">
                            <div class="single-popular-car">
                                                    <div class="p-car-thumbnails">
                                                        <a class="car-hover" href="<?php echo $car['c_pic'];?>">
                                                          <img src="<?php echo $car['c_pic'];?>" alt="JSOFT">
                                                       </a>
                                                    </div>

                                                    <div class="p-car-content">
                                                        <h3>
                                                            <a href="#"><?php echo $car['c_name'];?></a>
                                                        </h3><br><br>
                                                    <button class="btn btn-warning btn-block" data-toggle="collapse" data-target="#demo">詳細資訊</button>
                                                        <div id="demo" class="collapse">
                                                        <h5 style="font-family: 微軟正黑體">適用等級</h5>
                                                        <div class="p-car-feature">
                                                           <?php
                                                            if($car['c_level']=='平民級'){
                                                              echo '<a href="#">貴族級</a> ';
                                                              echo '<a href="#">尊榮級</a> ';
                                                              echo '<a href="#">平民級</a>';
                                                            }
                                                            if($car['c_level']=='尊榮級'){
                                                              echo '<a href="#">貴族級</a> ';
                                                              echo '<a href="#">尊榮級</a>';
                                                            }
                                                            if($car['c_level']=='貴族級'){
                                                              echo '<a href="#">貴族級</a>';
                                                            }
                                                            ?>
                                                        </div>
                                                        <br>
                                                        <div style="font-family: 微軟正黑體; font-weight: bold">
                                                            <p>可承載乘客數 : <?php echo $car['c_passenger'];?> 人</p>
                                                            <p>可承載行李數 : 5 個</p>
                                                            <p>自/手排 : <?php echo $car['c_auto'];?></p>
                                                        </div>
                                                    </div>
                                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>
            <div class="row" style="padding-bottom: 100px">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-4" align="center">
                                            <form action="choose4.php" method="post">
                                                <div class="book-button" align="center">
                                                    <input type="submit" name="submit" class="rent-btn" value="確認並完成"  style="font-family: 微軟正黑體; font-size: 16px">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-4"></div>

            </div>
    </section>

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
