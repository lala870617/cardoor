<!DOCTYPE html>
<html class="no-js" lang="zxx">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="jQuery-TWzipcode-master/jquery.twzipcode.min.js"></script>
<style>
.city, .town{width: 100%;}
.f1{float:left;margin-left:5px;margin-right:5px;width:calc(5% - 10px)}
.f2{float:left;margin-left:5px;margin-right:5px;width:calc(10% - 10px)}
.f3{float:left;margin-left:5px;margin-right:5px;width:calc(15% - 10px)}
.f4{float:left;margin-left:5px;margin-right:5px;width:calc(20% - 10px)}
.f5{float:left;margin-left:5px;margin-right:5px;width:calc(25% - 10px)}
.f6{float:left;margin-left:5px;margin-right:5px;width:calc(30% - 10px)}
.f7{float:left;margin-left:5px;margin-right:5px;width:calc(35% - 10px)}
.f8{float:left;margin-left:5px;margin-right:5px;width:calc(40% - 10px)}
.f9{float:left;margin-left:5px;margin-right:5px;width:calc(45% - 10px)}
.f10{float:left;margin-left:5px;margin-right:5px;width:calc(50% - 10px)}
.f11{float:left;margin-left:5px;margin-right:5px;width:calc(55% - 10px)}
.f12{float:left;margin-left:5px;margin-right:5px;width:calc(60% - 10px)}
.f13{float:left;margin-left:5px;margin-right:5px;width:calc(65% - 10px)}
.f14{float:left;margin-left:5px;margin-right:5px;width:calc(70% - 10px)}
.f15{float:left;margin-left:5px;margin-right:5px;width:calc(75% - 10px)}
.f16{float:left;margin-left:5px;margin-right:5px;width:calc(80% - 10px)}
.f17{float:left;margin-left:5px;margin-right:5px;width:calc(85% - 10px)}
.f18{float:left;margin-left:5px;margin-right:5px;width:calc(90% - 10px)}
.f19{float:left;margin-left:5px;margin-right:5px;width:calc(95% - 10px)}
.f20{float:left;margin-left:5px;margin-right:5px;width:calc(100% - 10px)}
</style>
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
      include('header.php');
      $button = $_GET['button'];
      $_SESSION['button'] = $button;
     ?>


    <!--== Slider Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2 style="font-family: 微軟正黑體">換 車 程 序</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>請完成下列表單並按下送出</p><br>
                    </div>
                <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:50%">50%</div>
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
                        <h3 style="font-family: 微軟正黑體">請填入換車詳細資訊</h3>
                        <span class="title-line"><i class="fa fa-car"></i></span>

                    </div>
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                        <div class="book-a-car" style="margin: 10px">
                            <form action="change3.php" method="post">
                                    <!--== Pick Up Location ==-->
                                    <!--== Car Choose ==-->
                                    <div class="choose-car-type book-item">
                                        <h4 style="font-family: 微軟正黑體; font-weight: bold;">選擇取還車地點:</h4>
                                       <div id="zipcode3">
                                         <div class="f3" data-role="county" style="width:100px; margin-bottom:10px">
                                         </div>
                                         <div class="f4" data-role="district" style="width:120px">
                                         </div>
                                         <input name="place" type="text" class="f13 address form-control" style="margin-bottom:20px" placeholder="例：XXX鎮YY巷（RR樓N樓M號）">
                                       </div>
                                    </div>

                                    <!--== Pick Up Date ==-->
                                    <div class="pick-up-date book-item">
                                        <h4 style="font-family: 微軟正黑體; font-weight: bold; margin-top:100px">選擇取還車日期:</h4>
                                        <input name="date" id="startDate" required="required" placeholder="Pick Up Date" />
                                    </div>
                                    <!--== Pick Up Location ==-->
                                    <div class="choose-car-type book-item">
                                        <h4 style="font-family: 微軟正黑體; font-weight: bold;">選擇取還車時間:</h4>
                                        <select required="required" name="time" class="custom-select">
                                          <option value="09:00">09:00</option>
                                          <option value="09:30">09:30</option>
                                          <option value="10:00">10:00</option>
                                          <option value="10:30">10:30</option>
                                          <option value="11:00">11:00</option>
                                          <option value="11:30">11:30</option>
                                          <option value="12:00">12:00</option>
                                          <option value="12:30">12:30</option>
                                          <option value="13:00">13:00</option>
                                          <option value="13:30">13:30</option>
                                          <option value="14:00">14:00</option>
                                          <option value="14:30">14:30</option>
                                          <option value="15:00">15:00</option>
                                          <option value="15:30">15:30</option>
                                          <option value="16:00">16:00</option>
                                          <option value="16:30">16:30</option>
                                          <option value="17:00">17:00</option>
                                          <option value="17:30">17:30</option>
                                          <option value="18:00">18:00</option>
                                        </select>
                                    </div>


                                    <br>
                                    <br>

                                    <div class="row">
                                        <!--<div class="col-lg-5">
                                            <div class="book-button text-left">
                                                <a href="change1.php"><button class="book-now-btn" style="font-family: 微軟正黑體; font-weight: bold;"><i class='far fa-arrow-alt-circle-left' style='font-size:24px'></i>上一步</button></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-5">
                                            <div class="book-button text-right">
                                                <a href="change4.php"><button type="submit" class="book-now-btn" style="font-family: 微軟正黑體; font-weight: bold;">下一步<i class='far fa-arrow-alt-circle-right' style='font-size : 24px'></i></button></a>
                                            </div>
                                        </div>-->
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-4">
                                            <div class="book-button" align="center">
                                                <button class="book-now-btn" style="font-family: 微軟正黑體">確認</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-4"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
                <!-- Section Title End -->
        </div>
    </section>
			<!-- Service Content Start -->


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
    <script>
$("#zipcode3").twzipcode({
"zipcodeIntoDistrict": true,
"css": ["city form-control", "town form-control"],
"countyName": "city", // 指定城市 select name
"districtName": "town" // 指定地區 select name
});
</script>
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
