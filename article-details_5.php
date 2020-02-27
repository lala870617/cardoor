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
                        <h2 style="font-family:'微軟正黑體'">這樣租車，優惠多、省更多！</h2>
                        <div class="car-preview-crousel">
                            <div class="single-car-preview">
                                <img src="assets/img/article/arti-thumb-12.jpg" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="assets/img/article/arti-thumb-6.jpg" alt="JSOFT">
                            </div>
                            <div class="single-car-preview">
                                <img src="assets/img/article/arti-thumb-15.jpg" alt="JSOFT">
                            </div>
                        </div>
                        <div class="car-details-info blog-content">
                            <p>如果您非常想要嘗試租車服務，可是又怕預算太高，怎麼辦？<br>別擔心，這篇文章就能教你如何靈活運用租車優惠方案，讓你錢包無負擔喔！</p>

                            <p>在使用我們的服務之前，可以先參考這篇文章：<a href="article-details_3.php">優惠新方案全新上架</a>，並且詢問相關客服人員，以獲得更多詳細的優惠資訊，以及確認自己的會員身分符合哪些優惠方案的條件喔！</p>

                            <p class="thme-blockquote">貼心小提醒：有些優惠方案標明為「限時」優惠，並非永久保留的，所以要趁早把握優惠機會喔！</p>

                            <p>除此之外，如果您用與我們合作銀行的信用卡付款，那您也有機會可享用信用卡優惠方案，若要瞭解更多資訊歡迎洽詢客服人員或合作銀行服務人員。如果您對我們的服務有任何疑問，歡迎在「聯絡我們」的頁面與我們聯絡，謝謝！</p>

                            <div class="review-area">
                                <h3 style="font-family:'微軟正黑體'">Write Your Comment</h3>
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
