<?php
    include("db.php");
    if(!isset($_SESSION)){
      session_start();
    }
 ?>
 <style>
 li a{
   font-size: 18px;
 }
 </style>
<header id="header-area" class="fixed-top">
    <!--== Header Top Start ==-->
    <!--== Header Top End ==-->
    <!--== Header Bottom Start ==-->
    <div id="header-bottom">
        <div class="container">
            <div class="row">
                <!--== Logo Start ==-->
                <div class="col-lg-4">
                    <a href="home.php" class="logo">
                        <img src="assets/img/logo3.png" alt="JSOFT">
                    </a>
                </div>
                <!--== Logo End ==-->
                <!--== Main Menu Start ==-->
                <div class="col-lg-8 d-none d-xl-block">
                    <nav class="mainmenu alignright">
                        <ul>
                            <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'home.php'){echo 'active'; }else { echo ''; } ?>"><a href="home.php">首頁</a>
                            </li>
                            <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'about.php'){echo 'active'; }else { echo ''; } ?>"><a href="about.php">關於我們</a></li>
                            <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == '#'){echo 'active'; }else { echo ''; } ?>"><a href="#">服務項目</a>
                              <ul>

                              <li><a href="car-without-sidebar.php">車款介紹</a></li>
                              <li><a href="faq.php">汽車保險</a></li>
                              <li><a href="article-details.php">道路救援</a></li>
                              <?php
                              if (isset($_SESSION["id"]) && $_SESSION['id'] != null) {
                                $query = "SELECT * FROM transaction WHERE u_id='".$_SESSION['id']."'";
    								            $result = mysqli_query($db,$query);
    								            $change = mysqli_fetch_array($result);
                                if($change['u_id']!= null){
                                  echo '<li><a href="change1.php">車款更換</a></li>';
                                }
                              }
                              ?>

                              <?php
                              if (isset($_SESSION["id"]) && $_SESSION['id'] != null) {
                                $query = "SELECT * FROM transaction WHERE u_id='".$_SESSION['id']."'";
    								            $result = mysqli_query($db,$query);
    								            $change = mysqli_fetch_array($result);
                                if($change['u_id']!= null){
                                  echo '<li><a href="pay_month.php">付款頁面</a></li>';
                                }
                              }
                              ?>
                            </ul>
                            </li>
                            <?php if(isset($_SESSION["id"]) && $_SESSION["id"] != null){?>
                              <?php
								            $query = "SELECT * FROM user WHERE u_id='".$_SESSION['id']."'";
								            $result = mysqli_query($db,$query);
								            $row = mysqli_fetch_array($result);
                            echo '<li><a href="#">'.$row["u_name"].'</a>
                                    <ul>
                                      <li><a href="member.php">會員資料</a></li>
                                      <li><a href="car-record.php">行駛車輛紀錄</a></li>
                                      <li><a href="rent-record.php">換車紀錄</a></li>
                                      <li><a href="sub-record.php">訂閱紀錄</a></li>
                                    </ul>
                            </li>';
                            echo '<li><a href="logout.php">Logout</a></li>'?>
                          <?php }
                          elseif(isset($_SESSION['aid']) && $_SESSION['aid'] != null){
                                   $sql = "SELECT * FROM admin WHERE a_id='".$_SESSION['aid']."'";
                                   $result1 = mysqli_query($db,$sql);
                                   $row1 = mysqli_fetch_array($result1);
                                   echo '<li><a href="#">'.$row1["a_name"].'</a>
                                   <ul>
                                     <li><a href="management.php">審核資料</a></li>
                                     <li><a href="dispatch.php">派遣資料</a></li>
                                   </ul>
                                   </li>';
                                   echo '<li><a href="logout.php">Logout</a></li>';
                                 }
                                 else {
                                   echo '<li><a href="login.php">登入</a></li>';
                                         echo '<li><a href="register.php">註冊</a></li>';
                                 }


                       ?>
                    </nav>
                </div>
                <!--== Main Menu End ==-->
            </div>
        </div>
    </div>
    <!--== Header Bottom End ==-->
</header>
<!--== Header Area End ==-->
