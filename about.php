<!DOCTYPE html>
<html class="no-js" lang="zxx">
<style>
.btn-submit {
	background-color: #ffd000;
	border: medium none;
	cursor: pointer;
	font-size: 12px;
	font-weight: 600;
	margin-right: 15px;
	margin-top: 25px;
	padding: 8px 40px;
	text-transform: uppercase;
  width: auto;
  height: auto;
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
    <style>
        h2,h3,h4{
          font-family: '微軟正黑體';
        }
    </style>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active" onload="init()">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

<?php include('header.php') ?>


    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>關於我們</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>以下是我們團隊計畫和成員的介紹</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== About Page Content Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <!-- <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>About us</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div> -->
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                <p>這是一個結合區塊鏈技術、智能合約與訂閱制模式的租車平台，由中山大學資訊管理學系的六人小組於2020年發布。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="assets/img/home-2-about.png" alt="JSOFT">
                    </div>
                </div>
                <!-- About Video End -->
            </div>

            <!-- About Fretutes Start -->
            <div class="about-feature-area">
                <div class="row">
                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <i class="fa fa-link" aria-hidden="true"></i>
                            <h3>BLOCK CHAIN</h3>
                            <p>運用區塊鏈技術，形成去中心化、分散式資料庫，並且保持交易紀錄不可竄改性。</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            <h3>SMART CONTRACT</h3>
                            <p>智能合約不僅能簡化合約手續，也能提升交易效率，帶給您與以往不同的優質租車體驗。</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <i class="fa fa-mouse-pointer" aria-hidden="true"></i>
                            <h3>SUBSCRIPTION</h3>
                            <p>顧客透過訂閱制，自由決定優惠方案，選擇自己想要的車種。</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->
                </div>
            </div>
            <!-- About Fretutes End -->
        </div>
    </section>
    <!--== About Page Content End ==-->

    <!--== Our Facility Content Start ==-->
    <section id="our-facility" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Single Facility Start -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-our-facility">
                        <h3>租車訂閱服務</h3>
                        <ul>
                            <li>線上即刻租車</li>
                            <li>方案種類自由選</li>
                            <li>方案時效自由選</li>
                            <li>車種種類多樣</li>
                            <li>租車流程簡便</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Facility Start -->

                <!-- Single Facility Start -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-our-facility">
                        <h3>交易資訊流通服務</h3>
                        <ul>
                            <li>資料加密性</li>
                            <li>去中心化</li>
                            <li>資料不可被竄改</li>
                            <li>分散式資料庫</li>
                            <li>交易貨幣簡便</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Facility Start -->

                <!-- Single Facility Start -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-our-facility">
                        <h3>額外服務</h3>
                        <ul>
                            <li>道路救援</li>
                            <li>緊急救援</li>
                            <li>加價升級汽車設備</li>
                            <li>個人化配置服務</li>
                            <li>訂閱期限通知</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Facility Start -->

                <!-- Single Facility Start -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-our-facility">
                        <h3>多樣方案種類</h3>
                        <ul>
                            <li>限時方案</li>
                            <li>商業方案</li>
                            <li>畢業方案</li>
                            <li>信用卡方案</li>
                            <li>旅遊方案</li>
                        </ul>
                    </div>
                </div>
                <!-- Single Facility Start -->
            </div>
        </div>
    </section>
    <!--== Our Facility Content End ==-->

    <!--== Partner Area Start ==-->
    <div id="partner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner-content-wrap">
                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-benz.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-ford.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-toyota.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/audi.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-nissan.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-mazda.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-volkswagen.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Partner Area End ==-->

    <!--== Testimonials Area Start ==-->
    <section id="testimonial-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>團隊成員</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>大家好！我們是來自中山資管的雅汝戰隊！</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>
            <!--edit-->
            <?php include("about_us.php"); ?>
            <div class="row">
                <div class="col-lg-8 col-md-12 m-auto">
                    <div class="testimonial-content">
                        <!--== Single Testimoial Start ==-->
                        <div class="single-testimonial">
                            <p>使用非常方便！改變了我以往對租車手續繁複的印象！</p>
                            <h3>Vongchong Smith --忠實客戶</h3>
                            <div class="client-logo">
                                <img src="assets/img/client/client-pic-1.jpg" alt="JSOFT">
                            </div>
                        </div>
                        <!--== Single Testimoial End ==-->

                        <!--== Single Testimoial Start ==-->
                        <div class="single-testimonial">
                            <p>區塊鏈對我來說是很有趣的東西，我沒想到它會帶給使用者這麼多方便！</p>
                            <h3>Amader Tuni --新客戶</h3>
                            <div class="client-logo">
                                <img src="assets/img/client/client-pic-3.jpg" alt="JSOFT">
                            </div>
                        </div>
                        <!--== Single Testimoial End ==-->

                        <!--== Single Testimoial Start ==-->
                        <div class="single-testimonial">
                            <p>無論你喜歡租車，或只是想嘗試租車的訂閱制方案，我都非常推薦給你使用！</p>
                            <h3>Atex Tuntuni Smith --忠實客戶</h3>
                            <div class="client-logo">
                                <img src="assets/img/client/client-pic-2.jpg" alt="JSOFT">
                            </div>
                        </div>
                        <!--== Single Testimoial End ==-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Testimonials Area End ==-->
    <!-- Section Title Start -->
    <div class="col-lg-12">
        <div class="section-title  text-center">
            <h2>聯絡我們</h2>
            <span class="title-line"><i class="fa fa-car"></i></span>
            <p>歡迎您提供詳細的服務心得或意見！</p>
        </div>
    </div>
    <!-- Section Title End -->
    <!--== Page Title Area Start ==-->
    <!-- <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row"> -->
                <!-- Page Title Start -->
                <!-- <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>聯絡我們</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>歡迎您提供詳細的服務心得或意見！</p>
                    </div>
                </div> -->
                <!-- Page Title End -->
            <!-- </div>
        </div>
    </section> -->
    <!--== Page Title Area End ==-->
    <!--== Contact Page Area Start ==-->
    <div class="contact-page-wrao section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="contact-form">
                        <!-- edit -->
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

                          <div class="row">
                              <div class="col-lg-6 col-md-6">
                                  <div class="website-input">
                                      <!-- <input id="urlText" type="url" placeholder="網址連結/Website"> -->
                                      <input id="telText" type="tel" name="tel" placeholder="連絡電話/Phone">
                                  </div>
                              </div>

                              <div class="col-lg-6 col-md-6">
                                  <div class="subject-input">
                                      <input id="subjectText" type="text" name="subject" placeholder="主要職業/Subject">
                                  </div>
                              </div>
                          </div>

                          <div class="message-input">
                              <textarea id="message" name="message" cols="30" rows="10" placeholder="留給我們的訊息/Message" required/></textarea>
                          </div>
                          <input type="submit">
                          <!-- <div class="btn-submit">
                            <input type="submit">
                          </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Contact Page Area End ==-->

    <!--== Map Area Start ==-->
    <div class="maparea">
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29213.038296132225!2d90.39150904197642!3d23.760577791538438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c783c3404f0d%3A0x76ae0d2edabc81df!2sHatir+Jheel!5e0!3m2!1sen!2sbd!4v1517941663187"></iframe> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.680773960391!2d120.26254831406021!3d22.62839293662508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e040f54057675%3A0xdf976ed7fa8cba08!2z5ZyL56uL5Lit5bGx5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1563161619364!5m2!1szh-TW!2stw"></iframe>
    </div>
    <!--== Map Area End ==-->
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
