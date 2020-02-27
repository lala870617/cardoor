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
                        <h2 style="font-family: 微軟正黑體">選 車</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>請在下方填入你想行駛的車輛並完成接下來的選車程序</p>
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
                    <div class="section-title  text-center">
                        <h3 style="font-family: 微軟正黑體">請在下方選取欲行駛之車輛</h3>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    </div>
                </div>
            </div>
        </div>
    <!--</section>

    <section id="choose-car" class="section-padding">-->
        <div class="container" style="padding-bottom: 150px">

            <div class="row">
                <!-- Choose Area Content Start -->
                <div class="col-lg-12">
                    <div class="choose-content-wrap">
                        <!-- Choose Area Tab Menu -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular_cars" role="tab" aria-selected="true">popular Cars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#newest_cars" role="tab" aria-selected="false">newest cars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#office_map" role="tab" aria-selected="false">Our Office</a>
                            </li>
                        </ul>
                        <!-- Choose Area Tab Menu -->

                        <!-- Choose Area Tab content -->
                        <div class="tab-content" id="myTabContent">
                            <!-- Popular Cars Tab Start -->
                            <div class="tab-pane fade show active" id="popular_cars" role="tabpanel" aria-labelledby="home-tab">
                                <!-- Popular Cars Content Wrapper Start -->
                                <div class="popular-cars-wrap">
                                    <!-- Filtering Menu -->
                                    <div class="popucar-menu text-center">
                                        <a href="#" data-filter="*" class="active">all</a>
                                        <a href="#" data-filter=".con">Conver</a>
                                        <a href="#" data-filter=".hat">Truck</a>
                                        <a href="#" data-filter=".mpv">MPV</a>
                                        <a href="#" data-filter=".sedan">Sedan</a>
                                        <a href="#" data-filter=".suv">SUV</a>
                                    </div>

                                    <!-- Filtering Menu -->

                                    <!-- PopularCars Tab Content Start -->
                                    <?php
                                        // session_start();
                                        // require('db.php');
                                        $sql = "SELECT *,COUNT(car_storage.c_name) AS count FROM car_storage INNER JOIN car_menu ON car_storage.c_name = car_menu.c_name WHERE rent = '否' GROUP BY car_storage.c_name ORDER BY `car_menu`.`c_id`";
                                        $result=mysqli_query($db,$sql);
                                        $num_result= mysqli_num_rows($result);
                                        ?>
                                      <div class='row popular-car-gird'>
                                      <?php
                                        $user_level = $_SESSION['level'];

                                        for($i = 0;$i< $num_result;$i++){
                                          $button = $i+1;
                                          $judge = "false";
                                      ?>
                                          <?php $row = mysqli_fetch_assoc($result);
                                                // $row1 = mysqli_fetch_assoc($result2);
                                            switch ($user_level) {
                                              case '平民方案':
                                                if($row['c_level']=='平民級'){
                                                  $judge = "true";
                                                }
                                                else{
                                                  $judge = "false";
                                                }
                                                break;
                                              case '尊榮方案':
                                                if($row['c_level']=='尊榮級' || $row['c_level']=='平民級'){
                                                  $judge = "true";
                                                }
                                                else{
                                                  $judge = "false";
                                                }
                                                break;
                                              case '貴族方案':
                                                  $judge = "true";
                                              default:
                                                break;
                                            }
                                            // echo($judge);
                                            if($judge == "false"){
                                              continue;
                                            }
                                            // echo($button);
                                          ?>
                                          <div class='col-lg-4 con suv mpv'>
                                              <div class='single-popular-car'>
                                                  <div class='p-car-thumbnails'>
                                                      <a class='car-hover' href='<?php echo ($row['c_pic']); ?>'>
                                                        <img src='<?php echo ($row['c_pic']); ?>' alt='JSOFT' style='height: 200px;width: 350px'>
                                                     </a>
                                                  </div>
                                                  <div class='p-car-content'>
                                                      <h3>
                                                          <?php echo stripslashes($row['c_name']); ?>
                                                      </h3>
                                                        <div class="p-car-feature">
                                                      <h5 style="font-family: 微軟正黑體">適用等級:</h5>


                                                        <?php if($row['c_level']=='平民級'){
                                                    echo "<a href='#'>".stripslashes('平民級')."</a>";echo "<a href='#'>".stripslashes('尊榮級')."</a>";echo "<a href='#'>".stripslashes('貴族級')."</a>"; }
                                                     elseif($row['c_level']=='尊榮級'){
                                                    echo "<a href='#'>".stripslashes('尊榮級')."</a>";echo "<a href='#'>".stripslashes('貴族級')."</a>";}
                                                     else{
                                                    echo "<a href='#'>".stripslashes('貴族級')."</a>";}
                                                    ?>
                                                      </div>
                                                      <br>
                                                      <div style="font-family: '微軟正黑體'; font-weight: bold">
                                                          <p>排氣量 :<?php echo stripslashes($row['c_displacement']); ?></p>
                                                          <p>可承載乘客數 : <?php echo stripslashes($row['c_passenger']); ?> 人</p>
                                                          <p>車商: <?php echo stripslashes($row['c_vendor']); ?></p>
                                                          <p>自/手排 : <?php echo stripslashes($row['c_auto']); ?></p>
                                                          <p>目前所剩車輛數 :<?php  echo $row['count'];?> 台</p>
                                                      </div>
                                                      <br>
                                                      <div align="center">
                                                          <input type="submit" name="submit" class="rent-btn" value="選取車輛"  style="font-family: 微軟正黑體; font-size: 16px" onclick="location.href='choose2.php?button=<?php echo $button?>'">
                                                      </div>
                                                  </div>
                                            </div>
                                        </div>
                                          <?php } ?>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->

                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->

                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <!-- Single Popular Car End -->
                                    </div>
                                    <!-- PopularCars Tab Content End -->
                                </div>
                                <!-- Popular Cars Content Wrapper End -->
                            </div>
                            <!-- Popular Cars Tab End -->

                            <!-- Newest Cars Tab Start -->
                            <!-- Newest Cars Tab End -->

                            <!-- Office Map Tab -->
                            <div class="tab-pane fade" id="office_map" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="map-area">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.6538067244583!2d90.37092511435942!3d23.79533919297639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0cce3251ab1%3A0x7a2aa979862a9643!2sJSoft!5e0!3m2!1sen!2sbd!4v1516771096779"></iframe>
                                </div>
                            </div>
                            <!-- Office Map Tab -->
                        </div>
                        <!-- Choose Area Tab content -->
                    </div>
                </div>
                <!-- Choose Area Content End -->
            </div>
        </div>
    </section>
    <!--== Services Area End ==-->



    <?php
      include("footer.php")
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
