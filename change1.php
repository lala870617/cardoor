 <?php
    include "db.php";
    if(!isset($_SESSION)){
    session_start();
    date_default_timezone_set('Asia/Taipei');
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
                        <h2 style="font-family: 微軟正黑體">換 車 程 序</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>請在下方填入你想換的車輛並完成接下來的換車程序</p><br>
                        <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width:25%">25%</div>
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
                        <h2 style="font-family: 微軟正黑體">您目前的車輛相關資訊</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    </div>
                </div>
                <?php
                    $query = "SELECT * FROM user WHERE u_id='".$_SESSION['id']."'";
                    $result = mysqli_query($db,$query);
                    $row = mysqli_fetch_array($result);
                ?>
                <?php $sql = "SELECT * FROM `transaction` INNER JOIN `car_menu` ON transaction.c_id = car_menu.c_id WHERE u_id='".$_SESSION['id']."'";
                                $result=mysqli_query($db,$sql);
                                $num_result=mysqli_fetch_array($result);
                                $enddate=$num_result['t_enddate'];
                                $datetime=date("Y/m/d");
                                $user_level =  $num_result['u_authority'];
                                $car_name = $num_result['c_name'];
                      $query = "SELECT * FROM `changecar` WHERE u_id='".$_SESSION['id']."' order by change_date desc limit 0,1";
                      $result = mysqli_query($db,$query);
                      if(!$result){
                        die("storageERROR");
                        printf("Error: %s\n", mysqli_error($db));
                      }
                      else{
                        $l_car = mysqli_fetch_array($result);
                        $change_date = $l_car['change_date'];
                      }
                      $next_date = date("Y-m-d",strtotime("$change_date +1 month"));
                      $today = date('Y-m-d') ;
                      $query1 = "SELECT COUNT(c_name) AS count FROM car_storage  WHERE rent = '否' AND c_name = '$car_name' GROUP BY c_name";
                      $result = mysqli_query($db,$query1);
                      $num_result1=mysqli_fetch_array($result);
                ?>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5">

                        <table class="table table-striped table-hover">
                           <tbody>
                              <thead class="thead-dark">
                                  <tr>
                                    <th>項目</th>
                                    <th>資料</th>
                                  </tr>
                            </thead>
                              <tr>
                                <td>姓名: </td>
                                <td><?php echo stripslashes($row['u_name']);?></td>
                              </tr>
                              <tr>
                                <td>目前所開行之車輛 : </td>
                                <td><?php echo stripslashes($num_result['c_name_after']); ?></td>
                              </tr>
                              <tr>
                                <td>剩餘換車次數 :</td>
                                <td><?php echo stripslashes($num_result['t_remainder']); ?> 次</td>
                              </tr>
                              <tr>
                                <td>剩餘租賃時間 :</td>
                                <td><?php echo (strtotime($enddate) - strtotime($datetime))/ (60*60*24); ?> 天</td>
                              </tr>
                              <tr>
                                <td>租賃合約結束時間 :</td>
                                <td><?php echo stripslashes($num_result['t_enddate']); ?></td>
                              </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="col-lg-5">
                            <!--<div class="col-md-2">
                            </div>-->

                            <div class="col-lg-10 con suv mpv">
                                                <div class="single-popular-car">
                                                    <div class="p-car-thumbnails">
                                                        <a class="car-hover" href='<?php echo ($num_result['c_pic']); ?>'>
                                                          <img src="<?php echo ($num_result['c_pic']); ?>" alt="JSOFT">
                                                       </a>
                                                    </div>
                                                    <div class="p-car-content">
                                                        <h3>
                                                            <?php echo stripslashes($num_result['c_name_after']); ?>
                                                        </h3>
                                                        <br>
                                                        <button class="btn btn-warning btn-block" data-toggle="collapse" data-target="#demo">詳細資訊</button>
                                                        <div id="demo" class="collapse">
                                                        <h5 style="font-family: 微軟正黑體">適用方案等級</h5>
                                                        <div class="p-car-feature">
                                                            <?php if($user_level=='平民級'){
                                                        echo "<a href='#'>".stripslashes('平民級')."</a>";echo "<a href='#'>".stripslashes('尊榮級')."</a>";echo "<a href='#'>".stripslashes('貴族級')."</a>"; }
                                                         elseif($user_level=='尊榮級'){
                                                        echo "<a href='#'>".stripslashes('尊榮級')."</a>";echo "<a href='#'>".stripslashes('貴族級')."</a>";}
                                                         else{
                                                        echo "<a href='#'>".stripslashes('貴族級')."</a>";}
                                                        ?>
                                                    </div>
                                                    <br>
                                                        <div style="font-family: 微軟正黑體; font-weight: bold">
                                                            <p>排氣量 : <?php echo stripslashes($num_result['c_displacement']); ?></p>
                                                            <p>可承載乘客數 : <?php echo stripslashes($num_result['c_passenger']); ?>個</p>
                                                            <p>車商 : <?php echo stripslashes($num_result['c_vendor']); ?></p>
                                                            <p>自/手排 : <?php echo stripslashes($num_result['c_auto']); ?></p>
                                                            <p>目前所剩車輛數 :<?php echo stripslashes($num_result1['count']); ?> 台</p>
                                                        </div>
                                                    </div>
                                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>
                <!-- Section Title End -->
        </div>
        <br>
        <br>
        <?php if( (strtotime($today)>=strtotime($next_date)) || $change_date==null){   ?>
        <div class="container" style="padding-bottom: 150px">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h4 style="font-family: 微軟正黑體">- 請在下方選取欲更換之車輛 -</h4>
                        <!--<span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Choose Area Content Start -->
                <div class="col-lg-12">
                    <div class="choose-content-wrap">


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
                                    <div class="row popular-car-gird">
                                        <!-- Single Popular Car Start -->
                                            <?php $sql = "SELECT *,COUNT(car_storage.c_name) AS count FROM car_storage INNER JOIN car_menu ON car_storage.c_name = car_menu.c_name WHERE rent = '否' GROUP BY car_storage.c_name ORDER BY `car_menu`.`c_id`";
                                              $result=mysqli_query($db,$sql);
                                              $num_result=mysqli_num_rows($result);
                                            ?>
                                            <?php for($i = 0;$i< $num_result;$i++){
                                                    $button = $i+1;
                                                    $judge = "false";
                                          ?>
                                            <?php $row=mysqli_fetch_assoc($result);
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
                                            ?>
                                                <div class="col-lg-4">
                                                <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href='<?php echo ($row['c_pic']); ?>'>
                                                        <img src="<?php echo ($row['c_pic']); ?>" style='height: 200px;width: 350px'></a>

                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <?php echo stripslashes($row['c_name']); ?>
                                                    </h3>
                                                    <div class="p-car-feature">
                                                        <h5 style="font-family: 微軟正黑體">適用方案等級:</h5>

                                                            <?php if($row['c_level']=='平民級'){
                                                        echo "<a href='#'>".stripslashes('平民級')."</a>";echo "<a href='#'>".stripslashes('尊榮級')."</a>";echo "<a href='#'>".stripslashes('貴族級')."</a>"; }
                                                         elseif($row['c_level']=='尊榮級'){
                                                        echo "<a href='#'>".stripslashes('尊榮級')."</a>";echo "<a href='#'>".stripslashes('貴族級')."</a>";}
                                                         else{
                                                        echo "<a href='#'>".stripslashes('貴族級')."</a>";}
                                                        ?>
                                                    </div>
                                                    <br>
                                                    <div style="font-family: 微軟正黑體; font-weight: bold">
                                                        <p>排氣量 : <?php echo stripslashes($row['c_displacement']); ?></p>
                                                        <p>可承載乘客數 :<?php echo stripslashes($row['c_passenger']); ?>人</p>
                                                        <p>車商 : <?php echo stripslashes($row['c_vendor']); ?> </p>
                                                        <p>自/手排 : <?php echo stripslashes($row['c_auto']); ?></p>
                                                        <p>目前所剩車輛數 : <?php echo stripslashes($row['count']); ?> 台</p>
                                                    </div>
                                                    <br>
                                                    <div align="center">
                                                        <input type="submit" name="submit" class="rent-btn" value="進行換車"  style="font-family: 微軟正黑體; font-size: 16px" onclick="location.href='change2.php?button=<?php echo $button?>'">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <?php } ?>
                                        <!-- Single Popular Car End -->

                                        </div>
                                        <!-- Choose Area Tab content -->
                                    </div>
                                </div>
                                <!-- Choose Area Content End -->
                            </div>
                        </div>
                    </div>
                <?php }
                    else{
                      echo "<div class='container'>
                            <div class='row'>
                            <div class='col-lg-12' align='center' style='font-size:20px; padding-bottom:50px; padding-top:50px; font-weight:bold'>";
                        echo "~ 抱歉 sorry ~<br><br>";
                        echo "您上次換車的時間為 : ".substr($change_date,0,10)."<br>";
                        echo "因此需等到".$next_date."方可換車";
                        echo "</div>
                              </div>
                            </div>";
                    }
                    ?>
                    </div>
                </div>
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
