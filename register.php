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
                        <h2>註冊</h2>
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
                        <form action="signup.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="name-input">
                                        <label for="name"><b>姓名<span>必填</span></b></label>
                                        <input type="text" placeholder="姓名" name="name">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="email-input">
                                        <label for="email"><b>信箱<span>必填</span></b></label>
                                        <input type="email" placeholder="信箱" name="email">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="website-input">
                                        <label for="account"><b>帳號<span>必填</span></b></label>
                                        <input type="text" placeholder="帳號" name="account">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="subject-input">
                                        <label for="pwd"><b>密碼<span>必填</span></b></label>
                                        <input type="password" placeholder="密碼" name="pwd">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-6 col-md-3">
                                <div class="website-input">
                                  <label for="license"><b>駕照照片上傳(正面)<span>必填</span></b></label>
                                  <img id="img_id" src="assets/img/404.png" alt="your image" style="height:300px;width:512px">
                                      <input type="file" name="license_front" onchange="upload_img(this);">
                              </div>
                              </div>
                            <div class="col-lg-6 col-md-3">
                              <div class="website-input">
                                <label for="license"><b>駕照照片上傳(反面)<span>必填</span></b></label>
                                <img id="img_id1" src="assets/img/404.png" alt="your image" style="height:300px;width:512px">
                                    <input type="file" name="license_back" onchange="upload_img1(this);">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-3">
                            <div class="website-input">
                              <label for="license"><b>身分證照片上傳(正面)<span>必填</span></b></label>
                              <img id="img_id2" src="assets/img/404.png" alt="your image" style="height:300px;width:512px">
                                  <input type="file" name="IDpic_front" onchange="upload_img2(this);">
                          </div>
                        </div>
                              <div class="col-lg-6 col-md-3">
                                <div class="website-input">
                                  <label for="license"><b>身分證照片上傳(反面)<span>必填</span></b></label>
                                  <img id="img_id3" src="assets/img/logo.png" alt="your image" style="height:300px;width:512px">
                                      <input type="file" name="IDpic_back" onchange="upload_img3(this);">
                                </div>
                              </div>
                          </div>
                            <div class="row">
                              <div class="col-lg-6 col-md-6">
                                <div class="website-input">
                                    <label for="metamaskaddress"><b>Meta錢包位址<span>必填</span></b></label>
                                    <input type="text" placeholder="ex : 0x9FDAWFCSS154cefefjd" name="metamaskaddress" required>
                                </div>
                              </div>
                              <div class="col-lg-6 col-md-6">
                                  <div class="website-input">
                                      <label for="phone"><b>連絡電話</b></label>
                                      <input type="phone" placeholder="連絡電話" name="phone">
                                  </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-6 col-md-6">
                                  <div class="message-input">
                                    <label for="sex"><b>性別</b></label><br>
                                    <select class="custom-select" name="sex">
                                      <option selected>請選擇</option>
                                      <option value="男" name="sex">男</option>
                                      <option value="女" name="sex">女</option>
                                      <option value="無性別" name="sex">無性別</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="subject-input">
                                    <label for="address"><b>地址</b></label>
                                    <input type="text" placeholder="地址" name="address">
                                </div>
                            </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-6 col-md-6">
                                  <div class="website-input">
                                      <label for="birthday"><b>出生日期</b></label>
                                      <input type="date" placeholder="出生日期" name="birthday">
                                  </div>
                              </div>

                              <div class="col-lg-6 col-md-6">
                                  <div class="subject-input">
                                      <label for="ename"><b>緊急聯絡人</b></label>
                                      <input type="text" placeholder="緊急連絡人" name="ename">
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-6 col-md-6">
                                  <div class="website-input">
                                      <label for="erelationship"><b>緊急連絡人關係</b></label>
                                      <input type="text" placeholder="例:父子" name="erelationship">
                                  </div>
                              </div>

                              <div class="col-lg-6 col-md-6">
                                  <div class="subject-input">
                                      <label for="ephone"><b>緊急聯絡人電話</b></label>
                                      <input type="phone" placeholder="緊急連絡人電話" name="ephone">
                                  </div>
                              </div>
                          </div>
                          <div class="input-submit">
          									<button type="submit" name="signup"><i class="fa fa-check-square"></i> 註冊</button>
          								</div>
                            <!-- <div class="input-submit">
                                <button type="submit">Submit Message</button>
                            </div> -->
                        </form>
                        <div class="create-ac" align="center">
                    			<p>已經有帳戶了嗎? <a href="login.php">登入</a></p>
                    		</div>
                    		<div class="login-menu" align="center">
                    			<a href="about.php">關於我們</a>
                    			<span>|</span>
                    			<a href="contact.php">聯絡我們</a>
                    		</div>
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
