<?php
include('header.php');
include("db.php");
if(!isset($_SESSION)){
  session_start();
}
$query = "SELECT * FROM user WHERE u_id='".$_SESSION['id']."'";
$result = mysqli_query($db,$query);
$user = mysqli_fetch_array($result);

$u_id = $user['u_id'];

$query2 = "SELECT * FROM transaction WHERE u_id='$u_id'";
$result2 = mysqli_query($db,$query2);
$trans_user = mysqli_fetch_array($result2);

$u_authority = $trans_user['u_authority'];

$query_payment = "SELECT CM.c_dealer, T.t_pay FROM car_menu CM, transaction T WHERE T.u_id='$u_id' AND CM.c_name = T.c_name_after ";
$result_payment = mysqli_query($db,$query_payment);
$trans_payment = mysqli_fetch_array($result_payment);
$payment = $trans_payment['t_pay'];

$query_date_time = "SELECT t_startdate, pay_time FROM transaction WHERE u_id='$u_id'";//取出簽約時間與已付款次數
$result_date_time = mysqli_query($db,$query_date_time);
$p_date_time = mysqli_fetch_array($result_date_time);
$p_time = $p_date_time['pay_time'];//已付款次數
$p_date = $p_date_time['t_startdate'];//契約開始時間

$timestamp = time();
$date = getdate($timestamp);

$pay_date = date("Y-m-d", strtotime("$p_date + $p_time month"));
$pay_timestamp = strtotime($pay_date);//預計付款開始時間
if($payment==1.99){
  $platform = 0.39;
}
else if($payment==3.79){
  $platform = 0.93;
}
else if($payment==5.29){
  $platform = 1.39;
}

$payment = $payment - 0.2 - $platform;
if($timestamp>=$pay_timestamp){
    // echo $pay_date;

    $query_change_date = "SELECT c_id_before, c_id_after, change_date FROM changecar WHERE u_id='$u_id' ORDER BY c_time DESC";//取出簽約時間與已付款次數
    $result_change_date = mysqli_query($db,$query_change_date);
    $change_data = mysqli_fetch_array($result_change_date);
    $change_date = $change_data['change_date'];
    $c_id_before = $change_data['c_id_before'];
    $c_id_after = $change_data['c_id_after'];
    $change_timestamp =  strtotime($change_date);
    $pay_date_end = date("Y-m-d", strtotime("$pay_date + 1 month"));
    $pay_date_end_timestamp = strtotime($pay_date_end);

    $query_dealer = "SELECT * FROM car_menu WHERE c_id='$c_id_before'";//取出簽約時間與已付款次數
    $result_change_date = mysqli_query($db,$query_dealer);
    $result = mysqli_fetch_array($result_change_date);
    //echo $result['c_dealer'];
    $before_dealer = $result['c_dealer'];

    $query_dealer = "SELECT * FROM car_menu WHERE c_id='$c_id_after' ";//取出簽約時間與已付款次數
    $result_change_date = mysqli_query($db,$query_dealer);
    $result = mysqli_fetch_array($result_change_date);
    //echo $result['c_dealer'];
    $after_dealer = $result['c_dealer'];

    $exp = 0;
    $EXH = 0;

    if($change_timestamp > $pay_timestamp){
        $time_for_before = $change_timestamp - $pay_timestamp;//換車前的時間長度
        $time_for_after = $pay_date_end_timestamp - $change_timestamp;//換車後的時間長度

        $month_second = $pay_date_end_timestamp-$pay_timestamp;//一個月的總秒數

        $before_rate = $time_for_before/$month_second;
        $after_rate = $time_for_after/$month_second;

        $pay_for_before = $before_rate*$payment;
        $pay_for_after = $after_rate*$payment;

        $mod = 0.001;//取小數點後幾位
        $income = fmod($pay_for_before,$mod) + fmod($pay_for_after,$mod);//平台收入
        // echo "pay for the platform: ".$income."<br>";
        //
        // echo "before:".($pay_for_before-fmod($pay_for_before,$mod))."<br>";
        // echo "after:".($pay_for_after-fmod($pay_for_after,$mod))."<br>";


        if($before_dealer=='exp'){
          $exp += $pay_for_before-fmod($pay_for_before,$mod);
        }
        else{
          $EXH += $pay_for_after-fmod($pay_for_after,$mod);
        }
        if($after_dealer=='exp'){
          $exp += $pay_for_before-fmod($pay_for_before,$mod);
        }
        else{
          $EXH += $pay_for_after-fmod($pay_for_after,$mod);
        }
    }
    else{
      if(isset($after_dealer)){
        if($after_dealer=='exp'){
          $_SESSION['exp'] = $exp;
        }
        else{
          $_SESSION['EXH'] = $EXH;
        }
      }
      else{
        $query_cdealer = "SELECT CM.c_dealer, T.t_pay FROM car_menu CM, transaction T WHERE T.u_id='$u_id' AND CM.c_id = T.c_id ";
        $result_cdealer = mysqli_query($db,$query_cdealer);
        $trans_dealer = mysqli_fetch_array($result_cdealer);
        if($trans_dealer=='exp'){
          $_SESSION['exp'] = $exp;
        }
        else{
          $_SESSION['EXH'] = $EXH;
        }
      }
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

    <title>付費</title>

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
                        <h2 style="font-family: 微軟正黑體">付 費</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Pay for Car Subscription</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding" style="padding-bottom: 100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2 style="font-family: 微軟正黑體; font-weight: bold;">付費流程</h2>
                        <span class="title-line"><i class='fab fa-ethereum' style='font-size:18px'></i></span>
                    </div>
                </div>
                <?php
                    $query = "SELECT * FROM user WHERE u_id='".$_SESSION['id']."'";
                    $result = mysqli_query($db,$query);
                    $row = mysqli_fetch_array($result);

                    $query2 = "SELECT * FROM transaction WHERE u_id='".$_SESSION['id']."'";
                    $result2 = mysqli_query($db,$query2);
                    $tdata = mysqli_fetch_array($result2);
                ?>

                <div class="col-lg-12">
                    <div class="row" style="padding-bottom: 100px">
                        <div class="col-lg-2"></div>
                        <?php
                          $query = "SELECT * FROM transaction WHERE u_id='".$_SESSION['id']."'";
                          $result = mysqli_query($db,$query);
                          $tdata = mysqli_fetch_array($result);

                          $t_paytime = $tdata['pay_time'];
                          $before = $tdata['t_startdate'];
                          $today = date('Y-m-d') ;
                          $thisday = '2017-04-20';
                          $after = date("Y-m-d",strtotime("$before +$t_paytime month"));

                          $name = $row['u_name'];
                          $level = $tdata['u_authority'];
                          $pay = $tdata['t_pay'];

                          if(strtotime($today)>=strtotime($after)){
                            echo"<div class='col-lg-8'>
                                <div class='col-lg-12'>
                                <p style='font-family: 微軟正黑體; font-size: 18px'>親愛的 $name 先生/小姐您好 : </p>
                                </div>
                                <br>
                                <br>
                                <div class='row'>
                                <div class='col-lg-1'></div>
                                <div class='col-lg-11'>
                                    <p style='font-family: 微軟正黑體; font-size: 18px; line-height: 50px'>
                                        又到了一個月一次的付款時間，<br>
                                        您選擇的方案為：$level <br>
                                        這個月的收費為：<i class='fab fa-ethereum' style='font-size:24px'></i>$pay(未包含gas費用)<br>
                                        若確認無誤請按下確認送出，即可利用以太幣進行付費。<br>
                                    </p>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div align='center'>
                                <input id='send' type='submit' name='submit' class='rent-btn' value='確認並進行付款' style='font-family: 微軟正黑體; font-size: 16px'>
                            </div>
                            </div>
                            <div class='col-lg-2'></div>
                            </div>
                            ";
                          }
                          else{
                            echo"<div class='col-lg-8'>
                                <div class='col-lg-12'>
                                <p style='font-family: 微軟正黑體; font-size: 18px'>親愛的$name 先生/小姐您好 : </p>
                                </div>
                                <br>
                                <br>
                                <div class='row'>
                                <div class='col-lg-1'></div>
                                <div class='col-lg-11'>
                                    <p style='font-family: 微軟正黑體; font-size: 18px; line-height: 50px'>
                                        您已付清這個月的款項，<br>
                                        下個月的繳費日期為：$after <br>
                                        請屆時再行繳納，謝謝！<br>
                                    </p>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div align='center'>
                                  <a href='home.php' class='rent-btn' style='font-family: 微軟正黑體; font-size: 16px'>回首頁</a>
                            </div>
                            </div>
                            <div class='col-lg-2'></div>
                            </div>
                            ";
                          }
                        ?>
                </div>
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
    <script src="assets/js/web3.min.js"></script>

    <script>
    try{
      var web3 = new Web3(window.web3.currentProvider);
      var Contract;
      var abi = [
	{
		"constant": false,
		"inputs": [],
		"name": "changeCAR",
		"outputs": [],
		"payable": true,
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "dealer1",
				"type": "uint256"
			},
			{
				"name": "dealer2",
				"type": "uint256"
			}
		],
		"name": "createIOU",
		"outputs": [],
		"payable": true,
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [],
		"name": "guaranteeDeposit",
		"outputs": [],
		"payable": true,
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"inputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "constructor"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"name": "data",
				"type": "bytes32"
			},
			{
				"indexed": false,
				"name": "blockNumber",
				"type": "uint256"
			}
		],
		"name": "IOULog",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"name": "",
				"type": "uint256"
			},
			{
				"indexed": false,
				"name": "",
				"type": "uint256"
			}
		],
		"name": "LogUint",
		"type": "event"
	}
];
      var address ='0x9B37446722b361a0Fc91CdD947C2477fE44D4886';

      async function init(){
          Contract = await new web3.eth.Contract(abi,address);
      }
      init();
      async function send(){
          // var accounts = await web3.eth.getAccounts();
          // console.log(accounts[0])

          web3.eth.getAccounts(function(error, accounts) {
                if (error) {
                  console.log(error);
                }
              // Request account access
                window.ethereum.enable();
                console.log(accounts);
                //prefix "0x" 是個版本欄位，是用來識別編碼的資料的型別
                var privateKey = '0x587b36bda0a11c2640f7fb408a6b10dbb6eabfb94ce81ec8c62bad8d19539300';
                var account = accounts[0];
                var pay = <?php echo $tdata['t_pay'] ?>;
                pay = parseFloat(pay);
                console.log(pay);

                var exp = 0.5*1000;
                var exh = 1.29*1000;

                // var hexStr = web3.utils.utf8ToHex(str);
                var exp2 = web3.utils.numberToHex(exp);
                var exh2 = web3.utils.numberToHex(exh);
                try{
                  Contract.methods.createIOU(exp2,exh2)
                  .send({from:account, value: pay * 10**18})
                  .then(function(data){
                      console.log("Realdata");
                      console.log(data);
                      console.log("RRR");
                      const data2 = web3.eth.accounts.sign(data, privateKey);
                      console.log("sign");
                      console.log(data2);
                      console.log(data2.messageHash);
                      var Hash = data2.messageHash;
                      var Sign = data2.signature;
                      console.log("unsign");
                      const data3 = web3.eth.accounts.recover(Hash,Sign);

                      console.log(data3);
                      window.location.replace("pay_succeed.php");
                  })
                }
                catch (error) {
                  // User denied account access...
                  console.error("User denied account access");
                }
          });
      }
      document.getElementById('send').addEventListener('click',send);

    }
    catch (err) {
      console.log("Fehler beim Coin senden: " + err);
    }

    </script>
</body>

</html>
