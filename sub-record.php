<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>訂閱紀錄</title>

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
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"
  rel="stylesheet"  type='text/css'>
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
                        <h2 style="font-family: 微軟正黑體">訂閱紀錄</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Historic Record of Subscription</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding" style="padding-bottom: 100px">
        <div class="container">
            <h2 style="font-family: 微軟正黑體">訂閱紀錄</h2>
              <p>目前合約紀錄 :</p>
              <?php
                $query = "SELECT * FROM `transaction` WHERE u_id='".$_SESSION['id']."'";
                $result = mysqli_query($db,$query);
                $num_result= mysqli_num_rows($result);
              ?>
              <table class="table table-hover" style="text-align:center">
                <thead class="thead-dark">
                  <tr>
                    <th>合約序號</th>
                    <th>會員等級</th>
                    <th>車款</th>
                    <th>起始日期</th>
                    <th>結束日期</th>
                    <th>金額</th>
                  </tr>
                </thead>
                <tbody>
                  <?php for ($i=0;$i<$num_result;$i++) {?>
                    <?php $row=mysqli_fetch_assoc($result); ?>
                    <tr>
                      <td><?php echo $row['t_id'] ?></td>
                      <td><?php echo $row['u_authority'] ?></td>
                      <td><?php echo $row['c_name_after']; ?></td>
                      <td><?php echo $row['t_startdate']; ?></td>
                      <td><?php echo $row['t_enddate']; ?></td>
                      <td><i class='fab fa-ethereum' style='font-size:24px'></i> <?php echo $row['t_pay']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              <p>歷史合約紀錄 :</p>
              <?php
                $query = "SELECT * FROM `record` WHERE u_id='".$_SESSION['id']."'";
                $result = mysqli_query($db,$query);
                $num_result= mysqli_num_rows($result);
              ?>
              <table class="table table-hover" style="text-align:center">
                <thead class="thead-dark">
                  <tr>
                    <th>合約序號</th>
                    <th>會員等級</th>
                    <th>車款</th>
                    <th>起始日期</th>
                    <th>結束日期</th>
                    <th>金額</th>
                  </tr>
                </thead>
                <tbody>
                  <?php for ($i=0;$i<$num_result;$i++) {?>
                    <?php $row=mysqli_fetch_assoc($result); ?>
                    <tr>
                      <td><?php echo $row['t_id'] ?></td>
                      <td><?php echo $row['u_authority'] ?></td>
                      <td><?php echo $row['c_name_after']; ?></td>
                      <td><?php echo $row['t_startdate']; ?></td>
                      <td><?php echo $row['t_enddate']; ?></td>
                      <td><i class='fab fa-ethereum' style='font-size:24px'></i> <?php echo $row['t_pay']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
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
