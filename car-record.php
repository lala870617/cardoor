<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>行駛車輛紀錄</title>

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
                        <h2 style="font-family: 微軟正黑體">行駛車輛紀錄</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Historic Record of Driving Car</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding" style="padding-bottom: 120px">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-10 con suv mpv">
                                <div class="single-popular-car">
                                  <?php
                                    $query = "SELECT * FROM `transaction` INNER JOIN `car_menu` ON transaction.c_id = car_menu.c_id WHERE u_id='".$_SESSION['id']."'";
                                    $result = mysqli_query($db,$query);
                                    $car = mysqli_fetch_array($result);
                                  ?>
                                    <div class="p-car-thumbnails">
                                        <a class="car-hover" href="<?php echo $car['c_pic'];?>">
                                            <img src="<?php echo $car['c_pic'];?>" alt="JSOFT">
                                        </a>
                                    </div>
                                    <div class="p-car-content">
                                        <h3>
                                        <a href="#"><?php echo $car['c_name'];?></a>
                                        </h3>
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
                        <div class="col-lg-7">
                            <div class="container">
                              <h2 style="font-family: 微軟正黑體">車輛資訊</h2>
                              <p>Information of Car</p>
                              <table class="table table-hover">
                                <thead>
                                  <tr>
                                      <th>項目</th>
                                      <th>資訊</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th>車牌號碼</th>
                                    <td><?php echo $car['c_license'];?></td>
                                  </tr>
                                  <tr>
                                    <th>廠牌</th>
                                    <td><?php echo $car['c_vendor'];?></td>
                                  </tr>
                                  <tr>
                                    <th>車款</th>
                                    <td><?php echo $car['c_name'];?></td>
                                  </tr>
                                  <tr>
                                    <th>顏色</th>
                                    <td><?php echo $car['c_color'];?></td>
                                  </tr>
                                  <tr>
                                    <th>出廠年分</th>
                                    <td>2015</td>
                                  </tr>
                                  <tr>
                                    <th>排氣量</th>
                                    <td><?php echo $car['c_displacement'];?></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section id="service-area" class="section-padding" style="padding-bottom: 150px; padding-top: 10px">
                <div class="container">
                <h2 style="font-family: 微軟正黑體">車輛維修保養紀錄</h2>
                  <p>下列表格為您現在所開行車輛的維修保養歷史紀錄 :</p>
                  <table class="table table-hover">
                    <thead class="thead-dark">
                      <tr>
                        <th>日期</th>
                        <th>維修/保養</th>
                        <th>負責處所</th>
                        <th>經手人</th>
                        <th>項目</th>
                        <th>備註</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>2019.07.18</td>
                        <td>維修</td>
                        <td>高雄鼓山廠</td>
                        <td>臨更配</td>
                        <td>右後輪</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2019.07.18</td>
                        <td>保養</td>
                        <td>台北信義廠</td>
                        <td>臨更配</td>
                        <td>煞車皮</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2019.07.18</td>
                        <td>維修</td>
                        <td>台中大甲廠</td>
                        <td>臨更配</td>
                        <td>引勤</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2019.07.18</td>
                        <td>維修</td>
                        <td>台南永康廠</td>
                        <td>臨更配</td>
                        <td>雨刷</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>2019.07.18</td>
                        <td>保養</td>
                        <td>桃園中壢廠</td>
                        <td>臨更配</td>
                        <td>擋風玻璃</td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
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
