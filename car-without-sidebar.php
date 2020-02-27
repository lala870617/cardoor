<?php
   include "db.php";
   if(!isset($_SESSION)){
   session_start();
   date_default_timezone_set('Asia/Taipei');
   }
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

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

    <?php
      include('header.php')
     ?>

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2 style="font-family:'微軟正黑體'">車款介紹</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>以下為我們所提供的租車車款與相關介紹</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--edit  -->
<!--<section id="choose-car" class="section-padding">-->
  <div class="container" style="padding-bottom: 150px">
    <div class="row">
      <div class="col-lg-12">
          <div class="section-title  text-center">
              <!-- <h3 style="font-family: 微軟正黑體">請在下方選取欲行駛之車輛</h3> -->
              <!-- <span class="title-line"><i class="fa fa-car"></i></span> -->
          </div>
      </div>
        <!-- Choose Area Content Start -->
        <div class="col-lg-12">
            <div class="choose-content-wrap">
                <!-- Choose Area Tab Menu -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <!-- <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular_cars" role="tab" aria-selected="true">貴族方案</a> -->
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#royal_cars" role="tab" aria-selected="true">貴族方案</a>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link" id="profile-tab" data-toggle="tab" href="#newest_cars" role="tab" aria-selected="false">尊榮方案</a> -->
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#premium_cars" role="tab" aria-selected="false">尊榮方案</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#normal_cars" role="tab" aria-selected="false">平民方案</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#office_map" role="tab" aria-selected="false">Our Office</a>
                    </li> -->
                </ul>
                <!-- Choose Area Tab Menu -->

                <!-- Choose Area Tab content -->
                <div class="tab-content" id="myTabContent">
                  <!-- Royal Cars Tab Start -->
                  <div class="tab-pane fade show active" id="royal_cars" role="tabpanel" aria-labelledby="home-tab">
                      <!-- Royal Cars Content Wrapper Start -->
                      <div class="popular-cars-wrap">
                          <!-- Filtering Menu -->
                          <div class="popucar-menu text-center">
                              <a href="#" data-filter="*" class="active">all</a>
                              <a href="#" data-filter=".audi">Audi</a>
                              <a href="#" data-filter=".tesla">Tesla</a>
                              <a href="#" data-filter=".ferrari">Ferrari</a>
                              <a href="#" data-filter=".bentley">Bentley</a>
                              <a href="#" data-filter=".boxster">Boxster</a>
                          </div>

                          <!-- Filtering Menu -->

                          <!-- RoyalCars Tab Content Start -->
                          <div class="row popular-car-gird">
                              <!-- Single Royal Car Start -->
                              <!-- <div class="col-lg-4 col-md-6 con suv mpv"> -->
                              <div class="col-lg-4 col-md-6 audi">
                                  <div class="single-popular-car">
                                      <div class="p-car-thumbnails">
                                          <a class="car-hover" href="assets/img/car/car-1.jpg">
                                            <img src="assets/img/car/car-1.jpg" alt="JSOFT">
                                         </a>
                                      </div>
                                      <!-- 1  edit-->
                                      <div class="p-car-content">
                                          <h3>
                                              <a href="#">Audi Blue Wagon</a>
                                          </h3>

                                          <h5 style="font-family: 微軟正黑體">適用方案等級</h5>

                                          <div class="p-car-feature">
                                              <a href="#">貴族VIP</a>
                                              <!-- <a href="#">尊榮VIP</a> -->
                                              <!-- <a href="#">平民VIP</a> -->
                                          </div>
                                          <br>
                                          <div style="font-family: 微軟正黑體; font-weight: bold">
                                              <p>可承載乘客數 : 4 人</p>
                                              <p>可承載行李數 : 4 個</p>
                                              <p>自/手排 : 手排</p>
                                              <p>目前所剩車輛數 : 10 台</p>
                                              <P>車廠： Audi</p>
                                          </div>
                                          <br>
                                          <!-- <div align="center">
                                              <a href="change2.php" class="rent-btn" style="font-family: 微軟正黑體; font-size: 16px">進行換車</a>
                                          </div> -->
                                      </div>
                                  </div>
                              </div>
                              <!-- Single Royal Car End -->
                              <!-- Single Royal Car Start -->
                              <div class="col-lg-4 col-md-6 bentley">
                                  <div class="single-popular-car">
                                      <div class="p-car-thumbnails">
                                          <a class="car-hover" href="assets/img/car/car-13.jpg">
                                            <img src="assets/img/car/car-13.jpg" alt="JSOFT">
                                         </a>
                                      </div>
                                      <!-- 13  edit-->
                                      <div class="p-car-content">
                                          <h3>
                                              <a href="#">Bentley Continental GT</a>
                                              <!-- <span class="price"><i class="fa fa-tag"></i> $55/day</span> -->
                                          </h3>

                                          <h5 style="font-family: 微軟正黑體">適用等級</h5>

                                          <div class="p-car-feature">
                                              <a href="#">貴族VIP</a>
                                              <!-- <a href="#">尊榮VIP</a> -->
                                              <!-- <a href="#">平民VIP</a> -->
                                          </div>
                                          <br>
                                          <div style="font-family: 微軟正黑體; font-weight: bold">
                                              <p>可承載乘客數 : 4 人</p>
                                              <p>可承載行李數 : 4 個</p>
                                              <p>自/手排 : 自手排</p>
                                              <p>目前所剩車輛數 : 5 台</p>
                                              <P>車廠： Bentley</p>
                                          </div>
                                          <br>
                                          <!-- <div align="center">
                                              <a href="change2.php" class="rent-btn-disable" ><p></p></a>
                                          </div> -->
                                      </div>
                                  </div>
                              </div>
                              <!-- Single Royal Car End -->
                              <!-- Single Royal Car Start -->
                              <div class="col-lg-4 col-md-6 boxster">
                                  <div class="single-popular-car">
                                      <div class="p-car-thumbnails">
                                          <a class="car-hover" href="assets/img/car/car-14.jpg">
                                            <img src="assets/img/car/car-14.jpg" alt="JSOFT">
                                         </a>
                                      </div>
                                      <!-- 14  edit-->
                                      <div class="p-car-content">
                                          <h3>
                                              <a href="#">Porsche 718 Boxster</a>
                                              <!-- <span class="price"><i class="fa fa-tag"></i> $55/day</span> -->
                                          </h3>

                                          <h5 style="font-family: 微軟正黑體">適用等級</h5>

                                          <div class="p-car-feature">
                                              <a href="#">貴族VIP</a>
                                              <!-- <a href="#">尊榮VIP</a>
                                              <a href="#">平民VIP</a> -->
                                          </div>
                                          <br>
                                          <div style="font-family: 微軟正黑體; font-weight: bold">
                                              <p>可承載乘客數 : 2 人</p>
                                              <p>可承載行李數 : 6 個</p>
                                              <p>自/手排 : 自手排</p>
                                              <p>目前所剩車輛數 : 5 台</p>
                                              <P>車廠： Boxster</p>
                                          </div>
                                          <br>
                                          <!-- <div align="center">
                                              <a href="change2.php" class="rent-btn" style="font-family: 微軟正黑體; font-size: 16px">進行換車</a>
                                          </div> -->
                                      </div>
                                  </div>
                              </div>
                              <!-- Single Royal Car End -->







                              <!-- Single Royal Car Start -->
                              <!-- <div class="col-lg-4 col-md-6 con hat"> -->
                              <div class="col-lg-4 col-md-6 ferrari">
                                  <div class="single-popular-car">
                                      <div class="p-car-thumbnails">
                                          <a class="car-hover" href="assets/img/car/car-12.jpg">
                                            <img src="assets/img/car/car-12.jpg" alt="JSOFT">
                                         </a>
                                      </div>
                                      <!-- 12  edit-->
                                      <div class="p-car-content">
                                          <h3>
                                              <a href="#">Ferrari GTC4</a>
                                              <!-- <span class="price"><i class="fa fa-tag"></i> $55/day</span> -->
                                          </h3>

                                          <h5 style="font-family: 微軟正黑體">適用等級</h5>

                                          <div class="p-car-feature">
                                              <a href="#">貴族VIP</a>
                                              <!-- <a href="#">尊榮VIP</a>
                                              <a href="#">平民VIP</a> -->
                                          </div>
                                          <br>
                                          <div style="font-family: 微軟正黑體; font-weight: bold">
                                              <p>可承載乘客數 : 3 人</p>
                                              <p>可承載行李數 : 5 個</p>
                                              <p>自/手排 : 自排</p>
                                              <p>目前所剩車輛數 : 5 台</p>
                                              <P>車廠： Ferrari</p>
                                          </div>
                                          <br>
                                          <!-- <div align="center">
                                              <a href="change2.php" class="rent-btn-disable" style="font-family: 微軟正黑體; font-size: 16px"><p></p></a>
                                          </div> -->
                                      </div>
                                  </div>
                              </div>
                              <!-- Single Royal Car End -->
                              <!-- Single Royal Car Start -->
                              <div class="col-lg-4 col-md-6 tesla">
                                  <div class="single-popular-car">
                                      <div class="p-car-thumbnails">
                                          <a class="car-hover" href="assets/img/car/car-8.jpg">
                                            <img src="assets/img/car/car-8.jpg" alt="JSOFT">
                                         </a>
                                      </div>
                                      <!-- 8  edit-->
                                      <div class="p-car-content">
                                          <h3>
                                              <a href="#">Tesla Model X</a>
                                              <!-- <span class="price"><i class="fa fa-tag"></i> $55/day</span> -->
                                          </h3>

                                          <h5 style="font-family: 微軟正黑體">適用等級</h5>

                                          <div class="p-car-feature">
                                              <a href="#">貴族VIP</a>
                                              <!-- <a href="#">尊榮VIP</a>
                                              <a href="#">平民VIP</a> -->
                                          </div>
                                          <br>
                                          <div style="font-family: 微軟正黑體; font-weight: bold">
                                              <p>可承載乘客數 : 4 人</p>
                                              <p>可承載行李數 : 6 個</p>
                                              <p>自/手排 : 手排</p>
                                              <p>目前所剩車輛數 : 10 台</p>
                                              <P>車廠： Tesla</p>
                                          </div>
                                          <br>
                                          <!-- <div align="center">
                                              <a href="change2.php" class="rent-btn" style="font-family: 微軟正黑體; font-size: 16px">進行換車</a>
                                          </div> -->
                                      </div>
                                  </div>
                              </div>
                              <!-- Single Royal Car End -->
                          </div>
                          <!-- PopularCars Tab Content End -->
                      </div>
                      <!-- Popular Cars Content Wrapper End -->
                  </div>
                  <!-- Royal Cars Tab End -->

                    <!-- Premium Cars Tab Start -->
                    <!-- <div class="tab-pane fade" id="newest_cars" role="tabpanel" aria-labelledby="profile-tab"> -->
                    <div class="tab-pane fade" id="premium_cars" role="tabpanel" aria-labelledby="profile-tab">
                        <!-- Premium Cars Content Wrapper Start -->
                        <div class="popular-cars-wrap">
                            <!-- Filtering Menu -->
                            <div class="newcar-menu text-center">
                                <a href="#" data-filter="*" class="active">all</a>
                                <a href="#" data-filter=".benz">Benz</a>
                                <a href="#" data-filter=".bmw">BMW</a>
                                <a href="#" data-filter=".lexus">lexus</a>
                                <a href="#" data-filter=".volvo">Volvo</a>
                            </div>

                            <!-- Filtering Menu -->

                            <!-- PremiumCars Tab Content Start -->
                            <div class="row newest-car-gird">
                              <!-- Single Premium Car Start -->
                              <!-- <div class="col-lg-4 col-md-6 hat sedan"> -->
                              <div class="col-lg-4 col-md-6 benz">
                                  <div class="single-new-car">
                                      <div class="p-car-thumbnails">
                                          <a class="car-hover" href="assets/img/car/car-2.jpg">
                                            <img src="assets/img/car/car-2.jpg" alt="JSOFT">
                                         </a>
                                      </div>
                                      <!-- 2  edit-->
                                      <div class="p-car-content">
                                          <h3>
                                              <a href="#">Mercedes Benz Silver</a>
                                          </h3>

                                          <h5 style="font-family: 微軟正黑體">適用等級</h5>

                                          <div class="p-car-feature">
                                              <a href="#">貴族VIP</a>
                                              <a href="#">尊榮VIP</a>
                                              <!-- <a href="#">平民VIP</a> -->
                                          </div>
                                          <br>
                                          <div style="font-family: 微軟正黑體; font-weight: bold">
                                              <p>可承載乘客數 : 5 人</p>
                                              <p>可承載行李數 : 3 個</p>
                                              <p>自/手排 : 手排</p>
                                              <p>目前所剩車輛數 : 10 台</p>
                                              <P>車廠： Benz</p>
                                          </div>
                                          <br>
                                          <!-- <div align="center">
                                              <a href="change2.php" class="rent-btn" style="font-family: 微軟正黑體; font-size: 16px">進行換車</a>
                                          </div> -->
                                      </div>
                                  </div>
                              </div>
                              <!-- Single Premium Car End -->
                              <!-- Single Premium Car Start -->
                              <div class="col-lg-4 col-md-6 lexus">
                                  <div class="single-new-car">
                                      <div class="p-car-thumbnails">
                                          <a class="car-hover" href="assets/img/car/car-7.jpg">
                                            <img src="assets/img/car/car-7.jpg" alt="JSOFT">
                                         </a>
                                      </div>
                                      <!-- 7  edit-->
                                      <div class="p-car-content">
                                          <h3>
                                              <a href="#">Lexus NX</a>
                                              <!-- <span class="price"><i class="fa fa-tag"></i> $55/day</span> -->
                                          </h3>

                                          <h5 style="font-family: 微軟正黑體">適用等級</h5>

                                          <div class="p-car-feature">
                                              <a href="#">貴族VIP</a>
                                              <a href="#">尊榮VIP</a>
                                              <!-- <a href="#">平民VIP</a> -->
                                          </div>
                                          <br>
                                          <div style="font-family: 微軟正黑體; font-weight: bold">
                                              <p>可承載乘客數 : 4 人</p>
                                              <p>可承載行李數 : 4 個</p>
                                              <p>自/手排 : 手排</p>
                                              <p>目前所剩車輛數 : 10 台</p>
                                              <P>車廠： Lexus</p>
                                          </div>
                                          <br>
                                          <!-- <div align="center">
                                              <a href="change2.php" class="rent-btn-disable" style="font-family: 微軟正黑體";><p></p></a>
                                          </div> -->
                                      </div>
                                  </div>
                              </div>
                              <!-- Single Premium Car End -->
                              <!-- Single Premium Car Start -->
                              <!-- <div class="col-lg-4 col-md-6 con suv mpv"> -->
                              <div class="col-lg-4 col-md-6 bmw">
                                  <div class="single-new-car">
                                      <div class="p-car-thumbnails">
                                          <a class="car-hover" href="assets/img/car/car-6.jpg">
                                            <img src="assets/img/car/car-6.jpg" alt="JSOFT">
                                         </a>
                                      </div>
                                      <!-- 6  edit-->
                                      <div class="p-car-content">
                                          <h3>
                                              <a href="#">BMW 6 Series</a>
                                          </h3>

                                          <h5 style="font-family: 微軟正黑體">適用等級</h5>

                                          <div class="p-car-feature">
                                              <a href="#">貴族VIP</a>
                                              <a href="#">尊榮VIP</a>
                                              <!-- <a href="#">平民VIP</a> -->
                                          </div>
                                          <br>
                                          <div style="font-family: 微軟正黑體; font-weight: bold">
                                              <p>可承載乘客數 : 4 人</p>
                                              <p>可承載行李數 : 4 個</p>
                                              <p>自/手排 : 手排</p>
                                              <p>目前所剩車輛數 : 10 台</p>
                                              <P>車廠： BMW</p>
                                          </div>
                                          <br>
                                          <!-- <div align="center">
                                              <a href="change2.php" class="rent-btn" style="font-family: 微軟正黑體; font-size: 16px">進行換車</a>
                                          </div> -->
                                      </div>
                                  </div>
                              </div>
                              <!-- Single Premium Car End -->
                              <!-- Single Premium Car Start -->
                              <!-- <div class="col-lg-4 col-md-6 con suv mpv"> -->
                              <div class="col-lg-4 col-md-6 volvo">
                                  <div class="single-new-car">
                                      <div class="p-car-thumbnails">
                                          <a class="car-hover" href="assets/img/car/car-15.jpg">
                                            <img src="assets/img/car/car-15.jpg" alt="JSOFT">
                                         </a>
                                      </div>
                                      <!-- 15  edit-->
                                      <div class="p-car-content">
                                          <h3>
                                              <a href="#">Volvo XC40</a>
                                          </h3>

                                          <h5 style="font-family: 微軟正黑體">適用等級</h5>

                                          <div class="p-car-feature">
                                              <a href="#">貴族VIP</a>
                                              <a href="#">尊榮VIP</a>
                                              <!-- <a href="#">平民VIP</a> -->
                                          </div>
                                          <br>
                                          <div style="font-family: 微軟正黑體; font-weight: bold">
                                              <p>可承載乘客數 : 4 人</p>
                                              <p>可承載行李數 : 4 個</p>
                                              <p>自/手排 : 自排</p>
                                              <p>目前所剩車輛數 : 10 台</p>
                                              <P>車廠： Volvo</p>
                                          </div>
                                          <br>
                                          <!-- <div align="center">
                                              <a href="change2.php" class="rent-btn" style="font-family: 微軟正黑體; font-size: 16px">進行換車</a>
                                          </div> -->
                                      </div>
                                  </div>
                              </div>
                              <!-- Single Premium Car End -->


                                <!-- Single Newest Car Start -->
                                <!-- Single Newest Car End -->

                                <!-- Single Premium Car Start -->
                                <div class="col-lg-4 col-md-6 bmw">
                                    <div class="single-new-car">
                                        <div class="p-car-thumbnails">
                                            <a class="car-hover" href="assets/img/car/car-5.jpg">
                                              <img src="assets/img/car/car-5.jpg" alt="JSOFT">
                                           </a>
                                        </div>
                                        <!-- 5  edit-->
                                        <div class="p-car-content">
                                            <h3>
                                                <a href="#">BMW X5</a>
                                                <!-- <span class="price"><i class="fa fa-tag"></i> $35/day</span> -->
                                            </h3>

                                            <h5 style="font-family: 微軟正黑體">適用等級</h5>

                                            <div class="p-car-feature">
                                                <a href="#">貴族VIP</a>
                                                <a href="#">尊榮VIP</a>
                                                <!-- <a href="#">平民VIP</a> -->
                                            </div>
                                            <br>
                                            <div style="font-family: 微軟正黑體; font-weight: bold">
                                                <p>可承載乘客數 : 4 人</p>
                                                <p>可承載行李數 : 3 個</p>
                                                <p>自/手排 : 手排</p>
                                                <p>目前所剩車輛數 : 10 台</p>
                                                <P>車廠： BMW</p>
                                            </div>
                                            <br>
                                            <!-- <div align="center">
                                                <a href="change2.php" class="rent-btn" style="font-family: 微軟正黑體; font-size: 16px">進行換車</a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Premium Car End -->
                            </div>
                            <!-- PremiumCars Tab Content End -->
                        </div>
                        <!-- Premium Cars Content Wrapper End -->
                    </div>
                    <!-- Premium Cars Tab End -->

                    <!-- Normal Cars Tab Start -->
                    <div class="tab-pane fade" id="normal_cars" role="tabpanel" aria-labelledby="profile-tab">
                        <!-- Normal Cars Content Wrapper Start -->
                        <div class="popular-cars-wrap">
                            <!-- Filtering Menu -->
                            <div class="newcar-menu text-center">
                                <a href="#" data-filter="*" class="active">all</a>
                                <a href="#" data-filter=".nissan">Nissan</a>
                                <a href="#" data-filter=".mazda">Mazda</a>
                                <a href="#" data-filter=".toyota">Toyota</a>
                                <a href="#" data-filter=".honda">Honda</a>
                                <a href="#" data-filter=".luxgen">Luxgen</a>
                            </div>

                            <!-- Filtering Menu -->

                            <!-- NormalCars Tab Content Start -->
                            <div class="row newest-car-gird">


                                <!-- Single Royal Car Start -->
                                <!-- <div class="col-lg-4 col-md-6 hat sedan"> -->
                                <div class="col-lg-4 col-md-6 honda">
                                    <div class="single-new-car">
                                        <div class="p-car-thumbnails">
                                            <a class="car-hover" href="assets/img/car/car-10.jpg">
                                              <img src="assets/img/car/car-10.jpg" alt="JSOFT">
                                           </a>
                                        </div>
                                        <!-- 10  edit-->
                                        <div class="p-car-content">
                                            <h3>
                                                <a href="#">Honda CR-V</a>
                                            </h3>

                                            <h5 style="font-family: 微軟正黑體">適用等級</h5>

                                            <div class="p-car-feature">
                                                <a href="#">貴族VIP</a>
                                                <a href="#">尊榮VIP</a>
                                                <a href="#">平民VIP</a>
                                            </div>
                                            <br>
                                            <div style="font-family: 微軟正黑體; font-weight: bold">
                                                <p>可承載乘客數 : 5 人</p>
                                                <p>可承載行李數 : 3 個</p>
                                                <p>自/手排 : 手排</p>
                                                <p>目前所剩車輛數 : 10 台</p>
                                                <P>車廠： Honda</p>
                                            </div>
                                            <br>
                                            <!-- <div align="center">
                                                <a href="change2.php" class="rent-btn" style="font-family: 微軟正黑體; font-size: 16px">進行換車</a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Royal Car End -->
                                <!-- Single Normal Car Start -->
                                <!-- <div class="col-lg-4 col-md-6 suv con mpv"> -->
                                <div class="col-lg-4 col-md-6 toyota">
                                    <div class="single-new-car">
                                        <div class="p-car-thumbnails">
                                            <a class="car-hover" href="assets/img/car/car-3.jpg">
                                              <img src="assets/img/car/car-3.jpg" alt="JSOFT">
                                           </a>
                                        </div>
                                        <!-- 3  edit-->
                                        <div class="p-car-content">
                                            <h3>
                                                <a href="#">Toyota Vios</a>
                                            </h3>

                                            <h5 style="font-family: 微軟正黑體">適用等級</h5>

                                            <div class="p-car-feature">
                                                <a href="#">貴族VIP</a>
                                                <a href="#">尊榮VIP</a>
                                                <a href="#">平民VIP</a>
                                            </div>
                                            <br>
                                            <div style="font-family: 微軟正黑體; font-weight: bold">
                                                <p>可承載乘客數 : 4 人</p>
                                                <p>可承載行李數 : 4 個</p>
                                                <p>自/手排 : 手排</p>
                                                <p>目前所剩車輛數 : 10 台</p>
                                                <P>車廠： Toyota</p>
                                            </div>
                                            <br>
                                            <!-- <div align="center">
                                                <a href="change2.php" class="rent-btn" style="font-family: 微軟正黑體; font-size: 16px">進行換車</a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Normal Car End -->
                                <!-- Single Normal Car Start -->
                                <!-- <div class="col-lg-4 col-md-6 con hat"> -->
                                <div class="col-lg-4 col-md-6 nissan">
                                    <div class="single-new-car">
                                        <div class="p-car-thumbnails">
                                            <a class="car-hover" href="assets/img/car/car-4.jpg">
                                              <img src="assets/img/car/car-4.jpg" alt="JSOFT">
                                           </a>
                                        </div>
                                        <!-- 4  edit-->
                                        <div class="p-car-content">
                                            <h3>
                                                <a href="#">Nissan Sentra</a>
                                                <!-- <span class="price"><i class="fa fa-tag"></i> $55/day</span> -->
                                            </h3>

                                            <h5 style="font-family: 微軟正黑體">適用等級</h5>

                                            <div class="p-car-feature">
                                                <a href="#">貴族VIP</a>
                                                <a href="#">尊榮VIP</a>
                                                <a href="#">平民VIP</a>
                                            </div>
                                            <br>
                                            <div style="font-family: 微軟正黑體; font-weight: bold">
                                                <p>可承載乘客數 : 4 人</p>
                                                <p>可承載行李數 : 5 個</p>
                                                <p>自/手排 : 自排</p>
                                                <p>目前所剩車輛數 : 10 台</p>
                                                <P>車廠： Nissan</p>
                                            </div>
                                            <br>
                                            <!-- <div align="center">
                                                <a href="change2.php" class="rent-btn-disable" style="font-family: 微軟正黑體; font-size: 16px"><p></p></a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Normal Car End -->
                                <!-- Single Normal Car Start -->
                                <div class="col-lg-4 col-md-6 mazda">
                                    <div class="single-new-car">
                                        <div class="p-car-thumbnails">
                                            <a class="car-hover" href="assets/img/car/car-9.jpg">
                                              <img src="assets/img/car/car-9.jpg" alt="JSOFT">
                                           </a>
                                        </div>
                                        <!-- 9  edit-->
                                        <div class="p-car-content">
                                            <h3>
                                                <a href="#">Mazda CX-30</a>
                                                <!-- <span class="price"><i class="fa fa-tag"></i> $35/day</span> -->
                                            </h3>

                                            <h5 style="font-family: 微軟正黑體">適用等級</h5>

                                            <div class="p-car-feature">
                                                <a href="#">貴族VIP</a>
                                                <a href="#">尊榮VIP</a>
                                                <a href="#">平民VIP</a>
                                            </div>
                                            <br>
                                            <div style="font-family: 微軟正黑體; font-weight: bold">
                                                <p>可承載乘客數 : 4 人</p>
                                                <p>可承載行李數 : 3 個</p>
                                                <p>自/手排 : 自排</p>
                                                <p>目前所剩車輛數 : 10 台</p>
                                                <P>車廠：Mazda</p>
                                            </div>
                                            <br>
                                            <!-- <div align="center">
                                                <a href="change2.php" class="rent-btn" style="font-family: 微軟正黑體; font-size: 16px">進行換車</a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Normal Car End -->
                                <!-- Single Royal Car Start -->
                                <!-- <div class="col-lg-4 col-md-6 suv con mpv"> -->
                                <div class="col-lg-4 col-md-6 luxgen">
                                    <div class="single-new-car">
                                        <div class="p-car-thumbnails">
                                            <a class="car-hover" href="assets/img/car/car-11.jpg">
                                              <img src="assets/img/car/car-11.jpg" alt="JSOFT">
                                           </a>
                                        </div>
                                        <!-- 11  edit-->
                                        <div class="p-car-content">
                                            <h3>
                                                <a href="#">Luxgen U6 GT</a>
                                            </h3>

                                            <h5 style="font-family: 微軟正黑體">適用等級</h5>

                                            <div class="p-car-feature">
                                                <a href="#">貴族VIP</a>
                                                <a href="#">尊榮VIP</a>
                                                <a href="#">平民VIP</a>
                                            </div>
                                            <br>
                                            <div style="font-family: 微軟正黑體; font-weight: bold">
                                                <p>可承載乘客數 : 4 人</p>
                                                <p>可承載行李數 : 4 個</p>
                                                <p>自/手排 : 自排</p>
                                                <p>目前所剩車輛數 : 10 台</p>
                                                <P>車廠： Luxgen</p>
                                            </div>
                                            <br>
                                            <!-- <div align="center">
                                                <a href="change2.php" class="rent-btn" style="font-family: 微軟正黑體; font-size: 16px">進行換車</a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Normal Car End -->
                            </div>
                            <!-- Normal Tab Content End -->
                        </div>
                        <!-- Normal Cars Content Wrapper End -->
                    </div>
                    <!-- Normal Cars Tab End -->

                    <!-- Office Map Tab -->
                    <!-- <div class="tab-pane fade" id="office_map" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="map-area"> -->
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.6538067244583!2d90.37092511435942!3d23.79533919297639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0cce3251ab1%3A0x7a2aa979862a9643!2sJSoft!5e0!3m2!1sen!2sbd!4v1516771096779"></iframe> -->
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.680773960391!2d120.26254831406021!3d22.62839293662508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e040f54057675%3A0xdf976ed7fa8cba08!2z5ZyL56uL5Lit5bGx5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1563161619364!5m2!1szh-TW!2stw"></iframe>
                        </div>
                    </div> -->
                    <!-- Office Map Tab -->
                </div>
                <!-- Choose Area Tab content -->
            </div>
        </div>
        <!-- Choose Area Content End -->
    </div>
  </div>

  <?php
    include("footer.php");
   ?>
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
    <script>

    </script>
</body>

</html>
