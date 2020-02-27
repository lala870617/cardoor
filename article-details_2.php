<!DOCTYPE html>
<html class="no-js" lang="zxx">
<style>
.p {
  font-family: '微軟正黑體';
}
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
      include("header.php");
    ?>
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2 style="font-family:'微軟正黑體'">相關訊息</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>最新鮮、最重要的租車資訊都在這裡</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Car List Area Start ==-->
    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-8">
                    <div class="car-details-content">
                        <h2 style="font-family:'微軟正黑體'">新手須知</h2>
                        <div class="car-preview-crousel">
                            <div class="single-car-preview">
                                <img src="assets/img/article/arti-thumb-7.jpg" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="assets/img/article/arti-thumb-6.jpg" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="assets/img/article/arti-thumb-8.jpg" alt="JSOFT">
                            </div>
                        </div>
                        <div class="car-details-info blog-content">
                            <p>在使用我們的服務之前，我們推薦您先安裝Metamask，並且註冊或登入一個Metamask的帳號，以建立交易買賣方之間區塊鏈的平台和帳戶。</p>


                            <p>Metamask的環境和帳號都安置好之後，您會先從我們提供的基本三種方案中，挑選其中一種作為您最初的方案；選完方案後，您可以選取符合方案的車種為租借選項。</p>

                            <p class="thme-blockquote">我們提供的基本方案可分為下列三種：平民、貴族、尊榮</p>

                            <p>我們建立的訂閱制度為：一年可換車最多四次，這項制度比起其他同業業者來得更划算、更便利，讓您享受更優質的服務。</p>

                            <div class="review-area">
                                <h3>Write Your Comment</h3>
                                <div class="review-form">
                                  <form action="https://formspree.io/yenrosa1729@gmail.com" method="POST">
                                      <div class="row">
                                          <div class="col-lg-6 col-md-6">
                                              <div class="name-input">
                                                  <input type="text" name="name" placeholder="全名/Full Name" required/>
                                              </div>
                                          </div>

                                          <div class="col-lg-6 col-md-6">
                                              <div class="email-input">
                                                  <input type="email" name="email" placeholder="Email 信箱/Email Address" required/>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="message-input">
                                          <!-- <textarea name="review" cols="30" rows="5" placeholder="留給我們的訊息/Message"></textarea> -->
                                          <textarea name="message" cols="30" rows="5" placeholder="留給我們的訊息/Message" required/></textarea>
                                      </div>

                                      <div class="input-submit">
                                          <button type="submit">留言</button>
                                      </div>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Car List Content End -->

                <!-- Sidebar Area Start -->
                <div class="col-lg-4">
                    <div class="sidebar-content-wrap m-t-50">
                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3 style="font-family:'微軟正黑體'">更多聯絡資訊</h3>

                            <div class="sidebar-body">
                                <p><i class="fa fa-mobile"></i> +886 987654321</p>
                                <p><i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 18.00</p>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->

                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3 style="font-family:'微軟正黑體'">租車小技巧</h3>

                            <div class="sidebar-body">
                                <ul class="recent-tips">
                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/article/arti-circle-1.jpg" alt="JSOFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="article-details_5.php">這樣租車，優惠多、省更多！</a></h4>
                                            <span class="date">February 5, 2018</span>
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/article/arti-circle-2.png" alt="JSOFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="article-details_6.php">5分鐘Metamask教學懶人包</a></h4>
                                            <span class="date">May 20, 2018</span>
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/article/arti-circle-3.png" alt="JSOFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="article-details_7.php">測驗：你最適合哪種租車方案？</a></h4>
                                            <span class="date">April 26, 2019</span>
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/article/arti-circle-4.jpg" alt="JSOFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="article-details_8.php">租車服務大統整！</a></h4>
                                            <span class="date">July 22, 2019</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->

                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3 style="font-family:'微軟正黑體'">聯絡我們</h3>

                            <div class="sidebar-body">
                                <div class="social-icons text-center">
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-behance"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->
                    </div>
                </div>
                <!-- Sidebar Area End -->
            </div>
        </div>
    </section>
    <!--== Car List Area End ==-->

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
