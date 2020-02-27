<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include("db.php");
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/phpmailer/src/Exception.php';
// require 'phpmailer/phpmailer/src/PHPMailer.php';
// require 'phpmailer/phpmailer/src/SMTP.php';

// phpinfo();

$today = date("Y-m-d",time());
echo '<br>'.$today.'<br>';
$mail_flag = 0;
$num = 0;

$mail = new PHPMailer;
// Enable verbose debug output
// $mail->SMTPDebug = 2;                               

// Set mailer to use SMTP
$mail->isSMTP();

// smtp 伺服器, 支援多台smtp server備援
$mail->Host = 'smtp.gmail.com';

// Enable SMTP authentication
$mail->SMTPAuth = true;

// SMTP username
$mail->Username = 'q72ZgmQQPS@gmail.com';

// SMTP password , If you must use the gmail application password

// $mail->Password = 'GC&EF2Pgh&5*MY%';

$mail->Password = 'pnchtbdkqryrdomm';

// Enable TLS encryption, `ssl` also accepted
$mail->SMTPSecure = "ssl";

// TCP port to connect to
$mail->Port = 465;

// $mail->setFrom('from@example.com', 'Mailer');
$mail->setFrom('q72ZgmQQPS@gmail.com.tw', "=?UTF-8?B?".base64_encode('辛普森')."?=");

// 寄信
$query_receiver = "SELECT u_id, u_name, u_email, u_authority, pay_time, t_startdate, t_enddate FROM transaction NATURAL JOIN user WHERE t_enddate>'$today'AND ((u_authority = '平民方案' AND pay_time<12) OR (u_authority = '尊榮方案' AND pay_time<24)OR (u_authority = '貴族方案' AND pay_time<36))";
$result_receiver = mysqli_query($db, $query_receiver);
$receiver_data = mysqli_fetch_all($result_receiver,MYSQLI_BOTH);

for($i = 0; isset($receiver_data[$i]['u_id']); $i++){
    $start_date = $receiver_data[$i]['t_startdate'];
    $pay_time = $receiver_data[$i]['pay_time'];
    $pay_start_date = date("Y-m-d",strtotime("$start_date + $pay_time months"));
    $pay_end_date = date("Y-m-d",strtotime("$pay_start_date + 1 months"));
    $mail_date = date("Y-m-d",strtotime("$pay_end_date - 7 days"));
    if($today==$mail_date){
        $address = $receiver_data[$i]['u_email'];
        $name = $receiver_data[$i]['u_name'];
        $mail->addAddress($address, $name);
        $mail_flag = 1;
        $num++;
    }
    echo $receiver_data[$i]['u_id']." 訂閱付款期：".$pay_start_date." 至 "."$pay_end_date"." ".$receiver_data[$i]['u_email']."<br>";
    echo "應寄信日：".$mail_date."<br>";
}

// // Add a recipient , name is optional
// // $mail->addAddress('joe@example.net', 'Joe User');
// // $mail->addAddress('ellen@example.com');
 
// // Add a recipient , 
// // $mail->addReplyTo('info@example.com', 'Information');
// // $mail->addCC('cc@example.com');
// // $mail->addBCC('bcc@example.com');
 
// // Add attachments , optional name
// // $mail->addAttachment('/var/tmp/file.tar.gz');
// // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');
 
// // Set email format to HTML
// $mail->isHTML(true);
 
// // $mail->Subject = 'Here is the subject';
// // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
// // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if($mail_flag){
    $due_date = date("Y-m-d",strtotime("$today + 7 days"));
    $s_date = date("Y-m-d",strtotime("$due_date - 1 months"));
    $mail->Subject = "=?UTF-8?B?".base64_encode('測試信件')."?=";
    // $mail->Body    = '在此通知您:<br>您此期的訂閱式租車服務付款時間將屆，請儘速至官網進行付款。<br>本期：'.$s_date.'至'.$due_date.'，付款期限:'.$due_date.'<br>如有任何疑慮請與客服人員聯絡。<br><br>Please do not reply the mail.<br>此為系統信件，請不要回覆此信';
    $mail->Body    = 
    '在此通知您:
    您此期的訂閱式租車服務付款時間將屆，請儘速至官網進行付款。
    本期：'.$s_date.'至'.$due_date.'
    付款期限:'.$due_date.'

    如有任何疑慮請與客服人員聯絡。
    Please do not reply the mail.
    此為系統信件，請不要回覆此信';
    
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent.';
        echo("已送出 $num 封信");
    }
}
?>