<?php
    if(!isset($_SESSION)){
      session_start();
    }
    include("db.php");
    $sql = "SELECT * FROM user WHERE u_id = '".$_SESSION['id']."'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result);
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
    <style>
    *,h2{
      font-family: "微軟正黑體";
      }
      label,.create-ac p,.create-ac a{
        font-size: 24px;
      }
      .input-submit button,.login-menu a{
        font-size: 18px;
      }
      div.textinput{
        border-bottom:2px #ffd000 solid;
        font-size: 24px;
      }
      span{
        color: red;
        font-size: 16px;
      }
    </style>

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
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>會員資訊修改</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->
    <div class="contact-page-wrao section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="contact-form">
                        <form action="memberupdate_to.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="name-input">
                                        <label><b>姓名</b></label>
                                        <input name="name" class="textinput" value="<?php echo $row['u_name']; ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="email-input">
                                        <label><b>信箱</b></label>
                                        <input  name="email" class="textinput" value="<?php echo $row['u_email']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="website-input">
                                        <label><b>帳號</b></label>
                                        <input name="account" class="textinput" value="<?php echo $row['u_account']; ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="subject-input">
                                        <label><b>修改密碼</b></label>
                                        <input name="pwd" class="textinput" placeholder="若不需更改請保持空白">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-12 col-md-6">
                                <div class="website-input">
                                    <label for="metamaskaddress"><b>Meta錢包位址<span>必填</span></b></label>
                                    <input type="text" placeholder="ex : 0x9FDAWFCSS154cefefjd" name="metamaskaddress" value="<?php echo $row['u_wallet']; ?>">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-6 col-md-3">
                                <div class="website-input">
                                  <label for="license"><b>駕照照片上傳(正面)<span>必填</span></b></label>
                                  <?php echo'<img id="img_id" style="width:512px;height:300px" src="data:image/jpeg;base64,'.base64_encode($row['u_license_front']).'" alt="JSOFT">'?>
                                      <input type="file" name="license_front" onchange="upload_img(this);">
                              </div>
                              </div>
                            <div class="col-lg-6 col-md-3">
                              <div class="website-input">
                                <label for="license"><b>駕照照片上傳(反面)<span>必填</span></b></label>
                                <?php echo'<img id="img_id1" style="width:512px;height:300px" src="data:image/jpeg;base64,'.base64_encode($row['u_license_back']).'" alt="JSOFT">'?>
                                    <input type="file" name="license_back" onchange="upload_img1(this);">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-3">
                            <div class="website-input">
                              <label for="license"><b>身分證照片上傳(正面)<span>必填</span></b></label>
                              <?php echo'<img id="img_id2" style="width:512px;height:300px" src="data:image/jpeg;base64,'.base64_encode($row['uID_photo_front']).'" alt="JSOFT">'?>
                                  <input type="file" name="IDpic_front" onchange="upload_img2(this);">
                          </div>
                        </div>
                              <div class="col-lg-6 col-md-3">
                                <div class="website-input">
                                  <label for="license"><b>身分證照片上傳(反面)<span>必填</span></b></label>
                                  <?php echo'<img id="img_id3" style="width:512px;height:300px" src="data:image/jpeg;base64,'.base64_encode($row['uID_photo_back']).'" alt="JSOFT">'?>
                                      <input type="file" name="IDpic_back" onchange="upload_img3(this);">
                                </div>
                              </div>
                          </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="website-input">
                                        <label><b>連絡電話</b></label>
                                        <input name="phone" class="textinput" value="<?php echo $row['u_phone']; ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="subject-input">
                                        <label><b>身分證字號</b></label>
                                        <input name="ID" class="textinput" value="<?php echo $row['uID']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-6 col-md-6">
                                  <div class="message-input">
                                    <label><b>性別</b></label><br>
                                    <select class="custom-select textinput" name="sex">

                                      <option>請選擇</option>
                                      <option value="男" name="sex">男</option>
                                      <option value="女"  name="sex">女</option>
                                      <option value="無性別"  name="sex">無性別</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="subject-input">
                                    <label><b>地址</b></label>
                                    <input name="address" class="textinput" value="<?php echo $row['u_address']; ?>">
                                </div>
                            </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-6 col-md-6">
                                  <div class="website-input">
                                      <label><b>出生日期</b></label>
                                      <input type="date" name="birthday" class="textinput" value="<?php echo $row['u_birthday']; ?>">
                                  </div>
                              </div>

                              <div class="col-lg-6 col-md-6">
                                  <div class="subject-input">
                                      <label><b>緊急聯絡人</b></label>
                                      <input name="ename" class="textinput" value="<?php echo $row['e_name']; ?>">
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-6 col-md-6">
                                  <div class="website-input">
                                      <label><b>緊急連絡人關係</b></label>
                                      <input name="erelationship" class="textinput" value="<?php echo $row['e_relationship']; ?>">
                                  </div>
                              </div>

                              <div class="col-lg-6 col-md-6">
                                  <div class="subject-input">
                                      <label><b>緊急聯絡人電話</b></label>
                                      <input name="ephone" class="textinput" value="<?php echo $row['e_phone']; ?>">
                                  </div>
                              </div>
                          </div>
                          <div class="input-submit">
          									<button type="submit"><i class="fa fa-check-square"></i> 確定修改</button>
          								</div>
                            <!-- <div class="input-submit">
                                <button type="submit">Submit Message</button>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--== Login Page Content End ==-->

    <!--== Footer Area Start ==-->
    <?php
      include('footer.php')
     ?>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script type="text/javascript">


        function upload_img(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img_id').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        function upload_img1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img_id1').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        function upload_img2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img_id2').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        function upload_img3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img_id3').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
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
