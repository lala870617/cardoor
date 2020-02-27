<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>終止合約</title>

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
    <section id="service-area" class="section-padding" style="padding-bottom: 120px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 style="font-family: 微軟正黑體; font-weight: bold;">終止合約</h2>
                        <span class="title-line"><i class='fab fa-ethereum' style='font-size:18px'></i></span>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-11">
                                    <p style='font-family: 微軟正黑體; font-size: 18px; line-height: 50px'>
                                        根據簽訂合約之內容，解約之後，您所繳交之<b>保證金將不會進行退款</b>，<br>
                                        若確定要進行解約，請填寫表單及原因後，按下確認並送出，<br>
                                        我們將會為您進行解除合約流程。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                    <div class="row" style="padding-top: 80px">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div class="section-title text-center">
                                <h3 style="font-family: 微軟正黑體; font-weight: bold;">- 終止合約表單 -</h3>
                            </div>
                            <div>
                            <form action="termination2.php" method="post">
                                  <div class="book-item">
                                    <h4 style="font-family: 微軟正黑體">您的帳號 :</h4>
                                    <input type="text" class="form-control" name="account">
                                  </div>
                                  <div class="book-item">
                                    <h4 style="font-family: 微軟正黑體">您的姓名 :</h4>
                                    <input type="text" class="form-control" name="name">
                                  </div>
                                  <div class="pickup-location book-item">
                                      <h4 style="font-family: 微軟正黑體">您所訂閱之方案 :</h4>
                                      <select class="custom-select" name="level" style="font-family: 微軟正黑體">
                                        <option name="level" selected disabled>選擇方案</option>
                                        <option value='平民方案'>平民方案</option>
                                        <option value='尊榮方案'>尊榮方案</option>
                                        <option value='貴族方案'>貴族方案</option>
                                      </select>
                                  </div>
                                  <div class="book-item">
                                    <h4 style="font-family: 微軟正黑體">原因:</h4>
                                    <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                                  </div>
                                  <br>
                                  <br>
                                  <div class="book-button text-center">
                                      <button class="book-now-btn" >解除合約</button>
                                  </div>
                            </form>
                            </div>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                    </div>
                </div>
            </div>
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
