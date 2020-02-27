<?php
    include("db.php");
    if(!isset($_SESSION)){
      session_start();
    }
 ?>
<?php
    if(isset($_POST['outcome'])){
        $id = $_POST['id'];
        $outcome = $_POST['outcome'];
        $sql = "UPDATE user SET u_verify = '$outcome' WHERE u_id = '$id'";
        if(mysqli_query($db, $sql)){
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
                        <h2 style="font-family: 微軟正黑體">審 核 資 料</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>請確認下方會員資訊是否正確並按下審核按鈕送出</p>
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
                        <h3 style="font-family: 微軟正黑體">以下為會員詳細資訊</h3>
                        <span class="title-line"><i class="fa fa-car"></i></span>

                    </div>
                    <div class="row" style="padding-bottom: 60px">
                            <?php
                              if(isset($_SESSION["aid"]) && $_SESSION["aid"] != null){
                                $query = "SELECT * FROM user WHERE u_verify = '審核中'";
                  							$result = mysqli_query($db,$query);
                  							$num_result = mysqli_num_rows($result);

                              }
                            ?>
                            <table class="table table-striped" style="text-align: center">
                                <thead class="thead-dark">
                                  <tr>
                                    <th>會員姓名</th>
                                    <th>手機</th>
                                    <th>圖片資訊</th>
                                    <th colspan="2">確認是否通過</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php for ($i=0;$i<$num_result;$i++) {?>
                                    <?php
                                        $row = mysqli_fetch_assoc($result);
                                        if(isset($_POST['pass'])){
                                            $sql = "UPDATE user SET u_verify = '通過' WHERE u_id = ".$row['u_id']." ";
                                        }
                                        if(mysqli_query($db, $sql)){
                                        }else{
                                            die("ERROR");
                                        }
                                     ?>

                                    <tr>
                                      <td style="text-align: center; vertical-align: middle;"><?php echo $row['u_name']; ?></td>
                                      <td style="text-align: center; vertical-align: middle;"><?php echo $row['u_phone']; ?></td>
                                      <td rowspan="4">
                                         <?php echo '<a class="car-hover" href="data:image/jpeg;base64,'.base64_encode($row['u_license_front']).'">' ?>
                                              <?php echo'<img style="width:50px;height:50px" src="data:image/jpeg;base64,'.base64_encode($row['u_license_front']).'" alt="JSOFT">'?>
                                          </a>
                                          <?php echo '<a class="car-hover" href="data:image/jpeg;base64,'.base64_encode($row['u_license_back']).'">' ?>
                                              <?php echo'<img style="width:50px;height:50px" src="data:image/jpeg;base64,'.base64_encode($row['u_license_back']).'" alt="JSOFT">'?>
                                          </a>
                                          <?php echo '<a class="car-hover" href="data:image/jpeg;base64,'.base64_encode($row['uID_photo_front']).'">' ?>
                                              <?php echo'<img style="width:50px;height:50px" src="data:image/jpeg;base64,'.base64_encode($row['uID_photo_front']).'" alt="JSOFT">'?>
                                          </a>
                                          <?php echo '<a class="car-hover" href="data:image/jpeg;base64,'.base64_encode($row['uID_photo_back']).'">' ?>
                                              <?php echo'<img style="width:50px;height:50px" src="data:image/jpeg;base64,'.base64_encode($row['uID_photo_back']).'" alt="JSOFT">'?>
                                          </a>
                                      </td>
                                        <form method="post" action="management.php">
                                        <td style="text-align: center; vertical-align: middle;">
                                            <input type="hidden" name="id" value="<?php echo $row['u_id']; ?>">
                                            <input type="submit" value="通過" name="outcome">

                                        </td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            <input type="submit" value="否決" name="outcome">

                                        </td>
                                        </form>
                                    </tr>

                              </tbody>
                              <?php            }?>
                          </table>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
                <!-- Section Title End -->
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
