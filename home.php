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
    <!-- <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'> -->

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
      include('header.php');
     ?>

    <!--== Slider Area Start ==-->

    <!--== Services Area Start ==-->

    <!--== Services Area End ==-->
    <section id="slider-area">
        <!--== slide Item One ==-->
        <div class="single-slide-item">
            <div class="container">
                <div class="row">
                  <div class="col-lg-5">
                  <?php
                    if (isset($_SESSION["id"]) && $_SESSION["id"] != null) {
                      $sql = "SELECT u_authority FROM transaction WHERE u_id = '".$_SESSION['id']."'";
                      $result = mysqli_query($db,$sql);
                      $row = mysqli_fetch_array($result);
                      $sql = "SELECT u_verify FROM user WHERE u_id = '".$_SESSION['id']."'";
                      $result = mysqli_query($db,$sql);
                      $row1 = mysqli_fetch_array($result);
                      echo
                            '<div class="book-a-car">
                                <form action="contractcheck.php" method="post">
                                  <div class="pickup-location book-item">
                                      <h4>CHOOSE MEMBERSHIP LEVEL:</h4>
                                      <select class="custom-select" name="level" style="font-family: "微軟正黑體">
                                        <option name="level" selected disabled>選擇方案</option>
                                        <option value="平民方案">平民方案</option>
                                        <option value="尊榮方案">尊榮方案</option>
                                        <option value="貴族方案">貴族方案</option>
                                      </select>
                                  </div>
                                  <div class="choose-car-type book-item">
                                      <h4>CHOOSE CONTRACT DURATION:</h4>
                                      <select class="custom-select" name = "year" style="font-family: "微軟正黑體">
                                        <option name = "year" selected disabled>選擇年數</option>
                                        <option value="1">一年</option>
                                        <option value="2">二年</option>
                                        <option value="3">三年</option>
                                      </select>
                                  </div>';?>
                                  <?php if ($row1['u_verify']=='審核中') {
                                    echo '<div class="book-button text-center">
                                          <button class="book-now-btn btn btn-danger" disabled>審核中</button>';
                                        }
                                          else if($row1['u_verify']=='否決')
                                          {
                                            echo '<div class="book-button text-center">
                                                  <button class="book-now-btn btn btn-danger" disabled>否決!!請到會員專區修改照片</button>';
                                          }
                                  else{
                                    if ($row['u_authority']!= null) {
                                     echo '<br><br><div class="book-button text-center">
                                           <button class="book-now-btn" disabled>已訂閱!</button>';
                                         }
                                         else {
                                          echo '<br><br><div class="book-button text-center">
                                                <button class="book-now-btn">成為訂閱戶</button>';}
                                  }
                                    ?>
                                    </div>
                                </form>
                                </div>
                            </div>

                                            <?php  }?>

                    <!-- <div class="col-lg-7 text-right">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="slider-right-text">
                                    <h1 style="font-family: '微軟正黑體'">成為會員的開始 !</h1>
                                    <p>FOR AS LOW AS $10 A DAY PLUS 15% DISCOUNT <br> FOR OUR RETURNING CUSTOMERS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!--== slide Item One ==-->
    </section>
    <section id="pricing-page-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Pricing Content Start -->
                <div class="col-lg-12">
                    <div class="pricing-details-content">
                        <div class="row">
                            <!-- Single Pricing Table -->
                            <div class="col-lg-4 col-md-4 text-center">
                                <div class="single-pricing-table">
                                    <h3 style="font-family: '微軟正黑體'">平民方案</h3>
                                    <h2><i class='fab fa-ethereum' style="color:#666666"></i> 3.99</h2>
                                    <h5>PER YEAR</h5>

                                    <ul class="package-list" style="font-family: '微軟正黑體'">
                                        <li>每月免費保養一次
                                            <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                                        </li>
                                        <li>超高級車款任選
                                            <i class="fa fa-times" aria-hidden="true" style="color: red"></i>
                                        </li>
                                        <li>專人服務保險套裝
                                            <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                                        </li>
                                        <li>24小時道路救援
                                            <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                                        </li>
                                        <li>換車免手續費
                                            <i class="fa fa-times" aria-hidden="true" style="color: red"></i>
                                        </li>
                                        <li>外加保險方案選一
                                            <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Single Pricing Table -->

                            <!-- Single Pricing Table -->
                            <div class="col-lg-4 col-md-4 text-center">
                                <div class="single-pricing-table">
                                    <h3 style="font-family: '微軟正黑體'">尊榮方案</h3>
                                    <h2><i class='fab fa-ethereum' style="color:#666666"></i> 4.99</h2>
                                    <h5>PER YEAR</h5>

                                    <ul class="package-list" style="font-family: '微軟正黑體'">
                                        <li>每月免費保養兩次
                                            <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                                        </li>
                                        <li>超高級車款任選
                                            <i class="fa fa-times" aria-hidden="true" style="color: red"></i>
                                        </li>
                                        <li>專人服務保險套裝
                                            <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                                        </li>
                                        <li>24小時道路救援
                                            <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                                        </li>
                                        <li>換車免手續費
                                            <i class="fa fa-times" aria-hidden="true" style="color: red"></i>
                                        </li>
                                        <li>外加保險方案選二
                                            <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Single Pricing Table -->

                            <!-- Single Pricing Table -->
                            <div class="col-lg-4 col-md-4 text-center">
                                <div class="single-pricing-table">
                                     <h3 style="font-family: '微軟正黑體'">貴族方案</h3>
                                    <h2><i class='fab fa-ethereum' style="color:#666666"></i> 5.99</h2>
                                    <h5>PER YEAR</h5>

                                    <ul class="package-list" style="font-family: '微軟正黑體'">
                                        <li>每月免費保養兩次
                                            <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                                        </li>
                                        <li>超高級車款任選
                                            <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                                        </li>
                                        <li>專人服務保險套裝
                                            <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                                        </li>
                                        <li>24小時道路救援
                                            <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                                        </li>
                                        <li>換車免手續費
                                            <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                                        </li>
                                        <li>外加保險方案選三
                                            <i class="fa fa-check" aria-hidden="true" style="color: green"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Single Pricing Table -->
                        </div>
                    </div>
                </div>
                <!-- Pricing Content End -->

                <!-- Sidebar Area Start -->

                <!-- Sidebar Area End -->
            </div>
        </div>
    </section>
    <?php include"footer.php" ?>
    <!--== Footer Area End ==-->

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
