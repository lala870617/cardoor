<?php
    include("db.php");
    if(!isset($_SESSION)){
      session_start();
    }

 ?>
 <?php
  //派
     if(isset($_POST['outcome1'])){
         $id = $_POST['id'];
         $outcome = $_POST['outcome1'];
         $sql = "UPDATE transaction SET car_send = '已完成' WHERE u_id = '$id'";
         if(mysqli_query($db, $sql)){
         }else{
             die("ERROR");
         }
     }
//還
     if(isset($_POST['outcome2'])){
         $id = $_POST['id'];
         $outcome = $_POST['outcome2'];
         $sql = "UPDATE transaction SET car_return = '已完成' WHERE u_id = '$id'";
         if(mysqli_query($db, $sql)){
         }else{
             die("ERROR");
         }
     }
//換
     if(isset($_POST['outcome3'])){
         $id = $_POST['id'];
         $outcome = $_POST['outcome3'];
         $sql = "UPDATE changecar SET c_status = '已完成' WHERE u_id = '$id'";
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

    <title>派車</title>

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
                        <h2 style="font-family: 微軟正黑體">派車</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>下方為派車表單，供查詢、確認之使用</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding" style="padding-bottom: 100px">
        <div class="container">
            <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2 style="font-family: 微軟正黑體">派車表單</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    </div>
            </div>
              <ul class="nav nav-tabs justify-content-end" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home">今日派車</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu1">未來派車</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu2">過去派車</a>
                </li> -->
              </ul>


              <div class="tab-content">
                <?php
                  $query = "SELECT u_name FROM user";
                  $result = mysqli_query($db,$query);
                  $user = mysqli_fetch_array($result);
                  $query = "SELECT * FROM transaction";
                  $result = mysqli_query($db,$query);
                  $tdata = mysqli_fetch_array($result);

                  $t_paytime = $tdata['pay_time'];
                  $before = $tdata['t_startdate'];
                  $today = date('Y-m-d') ;
                  $after = date("Y-m-d",strtotime("$before +$t_paytime month"));

                  $name = $user['u_name'];
                  $level = $tdata['u_authority'];
                  $pay = $tdata['t_pay'];

                ?>
                <div id="home" class="container tab-pane active"><br>
                    <h3 style="font-family: 微軟正黑體">今日派車</h3>
                    <br>
                      <table class="table table-hover">
                        <thead class="thead-dark">
                          <tr>
                            <th>日期時間</th>
                            <th>客戶姓名</th>
                            <th>類別</th>
                            <th>出租車種</th>
                            <th>出租車牌</th>
                            <th>還回車種</th>
                            <th>還回車牌</th>
                            <th>地點</th>
                            <th>狀態</th>
                          </tr>
                        </thead>
                        <tbody>


                          <?php
                          //抓transaction的派車
                          $today = date('Y-m-d');

                          $query = "SELECT * FROM user,transaction Where user.u_id=transaction.u_id AND car_send='未完成'";
                          $result = mysqli_query($db,$query);
                          $num_result = mysqli_num_rows($result);

                           for ($i=0; $i < $num_result;$i++) {
                             $row = mysqli_fetch_assoc($result);
                             $after = date("Y-m-d",strtotime($row['choose_date']));
                             if(strtotime($today)==strtotime($after)){
                               echo"<tr>
                                 <td>".$row['choose_date']."</td>
                                 <td> ".$row['u_name']."</td>
                                 <td>派車</td>
                                 <td>".$row['c_name_after']."</td>
                                 <td>".$row['c_license']."</td>
                                 <td>X</td>
                                 <td>X</td>
                                 <td>".$row['choose_location']."</td>
                                 <td>
                                  <form method='post' action='dispatch.php'>
                                    <input type='hidden' name='id' value=".$row['u_id'].">
                                    <input type='submit' value='完成' name='outcome1' class='btn btn-dark'>
                                  </form>
                                 </td>
                               </tr>";
                             }
                         }
                         ?>


                         <?php
                         //抓transaction的還車
                         $query = "SELECT * FROM user,transaction Where user.u_id=transaction.u_id AND car_return='未完成'";
                         $result = mysqli_query($db,$query);
                         $num_result = mysqli_num_rows($result);

                          for ($i=0; $i < $num_result;$i++) {
                            $row = mysqli_fetch_assoc($result);
                            $after = $row['t_enddate'];
                            if(strtotime($today)==strtotime($after)){
                               echo"<tr>
                                 <td>".$row['t_enddate']."</td>
                                 <td> ".$row['u_name']."</td>
                                 <td>還車</td>
                                 <td>X</td>
                                 <td>X</td>
                                 <td>".$row['c_name_after']."</td>
                                 <td>".$row['c_license']."</td>
                                 <td>".$row['choose_location']."</td>
                                 <td>
                                  <form method='post' action='dispatch.php'>
                                    <input type='hidden' name='id' value=".$row['u_id'].">
                                    <input type='submit' value='完成' name='outcome2' class='btn btn-dark'>
                                  </form>
                                 </td>
                               </tr>";
                            }
                         }
                         ?>


                         <?php
                         //抓changecar
                         $query = "SELECT * FROM user,changecar Where user.u_id=changecar.u_id AND c_status = '未完成'";
                         $result = mysqli_query($db,$query);
                         $num_result = mysqli_num_rows($result);
                         if (mysqli_num_rows($result) == 0) {
                         }
                          for ($i=0; $i < $num_result;$i++) {
                            $row = mysqli_fetch_assoc($result);
                            $after = date("Y-m-d",strtotime($row['change_date']));
                            if(strtotime($today)==strtotime($after)){
                                $l_sql = "SELECT * FROM car_menu WHERE c_id='$row[c_id_before]'";
                                $result = mysqli_query($db,$l_sql);
                                if(!$result){
                                  die("storageERROR");
                                  printf("Error: %s\n", mysqli_error($db));
                                }
                                else{
                                  $l_car = mysqli_fetch_array($result);
                                  $c_name_before = $l_car['c_name'];
                                }

                                $l_sql = "SELECT * FROM car_menu WHERE c_id='$row[c_id_after]'";
                                $result = mysqli_query($db,$l_sql);
                                if(!$result){
                                  die("storageERROR");
                                  printf("Error: %s\n", mysqli_error($db));
                                }
                                else{
                                  $l_car = mysqli_fetch_array($result);
                                  $c_name_after = $l_car['c_name'];
                                }

                               echo"<tr>
                                 <td>".$row['change_date']."</td>
                                 <td> ".$user['u_name']."</td>
                                 <td>換車</td>
                                 <td>$c_name_before</td>
                                 <td>".$row['c_license_before']."</td>
                                 <td>$c_name_after</td>
                                 <td>".$row['c_license_after']."</td>
                                 <td>".$row['change_place']."</td>
                                 <td>
                                  <form method='post' action='dispatch.php'>
                                    <input type='hidden' name='id' value=".$row['u_id'].">
                                    <input type='submit' value='完成' name='outcome3' class='btn btn-dark'>
                                  </form>
                                 </td>
                               </tr>";
                            }
                         }
                         ?>

                      </tbody>
                </table>

              <br>
                </div>


                <div id="menu1" class="container tab-pane fade"><br>
                  <h3 style="font-family: 微軟正黑體">未來派車</h3>
                  <br>
                  <table class="table table-hover">
                    <thead class="thead-dark">
                      <tr>
                        <th>日期時間</th>
                        <th>客戶姓名</th>
                        <th>類別</th>
                        <th>出租車種</th>
                        <th>出租車牌</th>
                        <th>還回車種</th>
                        <th>還回車牌</th>
                        <th>地點</th>
                        <th>狀態</th>
                      </tr>
                    </thead>
                    <tbody>


                      <?php
                      //抓transaction的派車
                      $today = date('Y-m-d');

                      $query = "SELECT * FROM user,transaction Where user.u_id=transaction.u_id AND car_send='未完成'";
                      $result = mysqli_query($db,$query);
                      $num_result = mysqli_num_rows($result);

                       for ($i=0; $i < $num_result;$i++) {
                         $row = mysqli_fetch_assoc($result);
                         $after = date("Y-m-d",strtotime($row['choose_date']));
                         if(strtotime($today)<strtotime($after)){
                           echo"<tr>
                             <td>".$row['choose_date']."</td>
                             <td> ".$row['u_name']."</td>
                             <td>派車</td>
                             <td>".$row['c_name_after']."</td>
                             <td>".$row['c_license']."</td>
                             <td>X</td>
                             <td>X</td>
                             <td>".$row['choose_location']."</td>
                             <td>未完成</td>
                           </tr>";
                         }
                     }
                     ?>


                     <?php
                     //抓transaction的還車
                     $query = "SELECT * FROM user,transaction Where user.u_id=transaction.u_id AND car_return='未完成'";
                     $result = mysqli_query($db,$query);
                     $num_result = mysqli_num_rows($result);

                      for ($i=0; $i < $num_result;$i++) {
                        $row = mysqli_fetch_assoc($result);
                        $after = $row['t_enddate'];
                        if(strtotime($today)<strtotime($after)){
                           echo"<tr>
                             <td>".$row['t_enddate']."</td>
                             <td> ".$row['u_name']."</td>
                             <td>還車</td>
                             <td>X</td>
                             <td>X</td>
                             <td>".$row['c_name_after']."</td>
                             <td>".$row['c_license']."</td>
                             <td>".$row['choose_location']."</td>
                             <td>未完成</td>
                           </tr>";
                        }
                     }
                     ?>


                     <?php
                     //抓changecar
                     $query = "SELECT * FROM user,changecar Where user.u_id=changecar.u_id AND c_status = '未完成'";
                     $result = mysqli_query($db,$query);
                     $num_result = mysqli_num_rows($result);
                     if (mysqli_num_rows($result) == 0) {
                     }
                      for ($i=0; $i < $num_result;$i++) {
                        $row = mysqli_fetch_assoc($result);
                        $after = date("Y-m-d",strtotime($row['change_date']));
                        if(strtotime($today)<strtotime($after)){
                            $l_sql = "SELECT * FROM car_menu WHERE c_id='$row[c_id_before]'";
                            $result = mysqli_query($db,$l_sql);
                            if(!$result){
                              die("storageERROR");
                              printf("Error: %s\n", mysqli_error($db));
                            }
                            else{
                              $l_car = mysqli_fetch_array($result);
                              $c_name_before = $l_car['c_name'];
                            }

                            $l_sql = "SELECT * FROM car_menu WHERE c_id='$row[c_id_after]'";
                            $result = mysqli_query($db,$l_sql);
                            if(!$result){
                              die("storageERROR");
                              printf("Error: %s\n", mysqli_error($db));
                            }
                            else{
                              $l_car = mysqli_fetch_array($result);
                              $c_name_after = $l_car['c_name'];
                            }

                           echo"<tr>
                             <td>".$row['change_date']."</td>
                             <td> ".$row['u_name']."</td>
                             <td>換車</td>
                             <td>$c_name_before</td>
                             <td>".$row['c_license_before']."</td>
                             <td>$c_name_after</td>
                             <td>".$row['c_license_after']."</td>
                             <td>".$row['change_place']."</td>
                             <td>未完成</td>
                           </tr>";
                        }
                     }
                     ?>
                    </tbody>
              </table>
              <br>

                </div>

                <!-- <div id="menu2" class="container tab-pane fade"><br>
                  <h3 style="font-family: 微軟正黑體">過去派車</h3>
                  <br>
                  <table class="table table-hover">
                    <thead class="thead-dark">
                      <tr>
                        <th>日期時間</th>
                        <th>管家姓名</th>
                        <th>客戶姓名</th>
                        <th>類別</th>
                        <th>出租車種</th>
                        <th>出租車牌</th>
                        <th>還回車種</th>
                        <th>還回車牌</th>
                        <th>地點</th>
                        <th>狀態</th>
                      </tr>
                    </thead>
                    <tbody>


                      <?php
                      //抓transaction的派車
                      $today = date('Y-m-d');

                      $query = "SELECT * FROM user,transaction Where user.u_id=transaction.u_id AND car_send='已完成'";
                      $result = mysqli_query($db,$query);
                      $num_result = mysqli_num_rows($result);

                       for ($i=0; $i < $num_result;$i++) {
                         $row = mysqli_fetch_assoc($result);
                         $after = date("Y-m-d",strtotime($row['choose_date']));
                         if(strtotime($today)>strtotime($after)){
                           echo"<tr>
                             <td>".$row['choose_date']."</td>
                             <td>".$row['c_send_keeper']."</td>
                             <td> ".$row['u_name']."</td>
                             <td>派車</td>
                             <td>".$row['c_name_after']."</td>
                             <td>".$row['c_license']."</td>
                             <td>X</td>
                             <td>X</td>
                             <td>".$row['choose_location']."</td>
                             <td>".$row['car_send']."</td>
                           </tr>";
                         }
                     }
                     ?>


                     <?php
                     //抓transaction的還車
                     $query = "SELECT * FROM user,transaction Where user.u_id=transaction.u_id AND car_return='已完成'";
                     $result = mysqli_query($db,$query);
                     $num_result = mysqli_num_rows($result);

                      for ($i=0; $i < $num_result;$i++) {
                        $row = mysqli_fetch_assoc($result);
                        $after = $row['t_enddate'];
                        if(strtotime($today)>strtotime($after)){
                           echo"<tr>
                             <td>".$row['t_enddate']."</td>
                             <td>".$row['c_return_keeper']."</td>
                             <td> ".$row['u_name']."</td>
                             <td>還車</td>
                             <td>X</td>
                             <td>X</td>
                             <td>".$row['c_name_after']."</td>
                             <td>".$row['c_license']."</td>
                             <td>".$row['choose_location']."</td>
                             <td>".$row['car_return']."</td>
                           </tr>";
                        }
                     }
                     ?>


                     <?php
                     //抓changecar
                     $query = "SELECT * FROM changecar WHERE c_status ='已完成' GROUP BY c_time";
                     $result = mysqli_query($db,$query);
                     if(!$result){
                       printf("Error: %s\n", mysqli_error($db));
                     }

                     $num_result = mysqli_num_rows($result);
                     if(!$num_result){
                       printf("Error: %s\n", mysqli_error($db));
                     }

                     if (mysqli_num_rows($result) == 0) {
                     }
                      for ($i=0; $i < $num_result;$i++) {
                        $row = mysqli_fetch_assoc($result);
                        echo "原本".$row['change_date']."<br>";
                        $after = date("Y-m-d",strtotime($row['change_date']));
                        echo "轉換".$after."<br>";

                        $query = "SELECT * FROM user WHERE u_id = '$row[u_id]'";
                        $result = mysqli_query($db,$query);
                        if(!$result){
                          printf("Error: %s\n", mysqli_error($db));
                        }
                        $user = mysqli_fetch_array($result);
                        $user_name = $user['u_name'];

                        if(strtotime($today)>strtotime($after) && $after!=""){
                            $l_sql = "SELECT * FROM car_menu WHERE c_id='$row[c_id_before]'";
                            $result = mysqli_query($db,$l_sql);
                            if(!$result){
                              die("storageERROR");
                              printf("Error: %s\n", mysqli_error($db));
                            }
                            else{
                              $l_car = mysqli_fetch_array($result);
                              $c_name_before = $l_car['c_name'];
                            }

                            $l_sql = "SELECT * FROM car_menu WHERE c_id='$row[c_id_after]'";
                            $result = mysqli_query($db,$l_sql);
                            if(!$result){
                              die("storageERROR");
                              printf("Error: %s\n", mysqli_error($db));
                            }
                            else{
                              $l_car = mysqli_fetch_array($result);
                              $c_name_after = $l_car['c_name'];
                            }

                           echo"<tr>
                             <td>".$row['change_date']."</td>
                             <td>".$row['c_housekeeper']."</td>
                             <td> ".$user_name."</td>
                             <td>換車</td>
                             <td>$c_name_before</td>
                             <td>".$row['c_license_before']."</td>
                             <td>$c_name_after</td>
                             <td>".$row['c_license_after']."</td>
                             <td>".$row['change_place']."</td>
                             <td>".$row['c_status']."</td>
                           </tr>";
                        }
                     }
                     ?>
                    </tbody>
              </table>
              <br>
                </div> -->
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
