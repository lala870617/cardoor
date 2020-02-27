<?php
    if(isset($_POST)){
      require('db.php');
      session_start();
      $user_name = mysqli_real_escape_string($db,$_POST['name']);
      $user_email = mysqli_real_escape_string($db,$_POST['email']);
      $user_account = mysqli_real_escape_string($db,$_POST['account']);
      $user_pwd = mysqli_real_escape_string($db,$_POST['pwd']);
      $user_phone = mysqli_real_escape_string($db,$_POST['phone']);
      $user_wallet = mysqli_real_escape_string($db,$_POST['metamaskaddress']);
      $license_front_file = $_FILES["license_front"]["name"];
      $license_back_file = $_FILES["license_back"]["name"];
      $ID_front_file = $_FILES["IDpic_front"]["name"];
      $ID_back_file = $_FILES["IDpic_back"]["name"];
      if(addslashes($_FILES["license_front"]["size"])>1000000||addslashes($_FILES["license_back"]["size"])>1000000||addslashes($_FILES["IDpic_front"]["size"])>1000000||addslashes($_FILES["IDpic_back"]["size"])>1000000) {
		        echo "<script>alert('檔案太大，更改失敗');</script>";
		        echo '<meta http-equiv=REFRESH CONTENT=0;url=memberupdate.php>';
		        exit();
		    }
      $query = "SELECT * FROM user WHERE u_id = '".$_SESSION['id']."'";
      $result = mysqli_query($db,$query);
      $row = mysqli_fetch_array($result);
      $user_license_front = $row['u_license_front'];
      $user_license_back = $row['u_license_back'];
      $user_ID_front = $row['uID_photo_front'];
      $user_ID_back = $row['uID_photo_back'];
      if ($license_front_file=="") {
        $sql = "UPDATE user SET u_license_front='$user_license_front'WHERE u_id = '".$_SESSION['id']."'";
        $result1 = mysqli_query($db,$sql);
      }
      else{
        $license_front_pic =addslashes(file_get_contents($_FILES["license_front"]["tmp_name"]));
        $sql = "UPDATE user SET u_license_front='$license_front_pic' WHERE u_id = '".$_SESSION['id']."'";
        $result2 = mysqli_query($db,$sql);
      }
      if ($license_back_file=="") {
        $sql = "UPDATE user SET u_license_back='$user_license_back'WHERE u_id = '".$_SESSION['id']."'";
        $result3 = mysqli_query($db,$sql);
      }
      else{
          $license_back_pic =addslashes(file_get_contents($_FILES["license_back"]["tmp_name"]));
          $sql = "UPDATE user SET u_license_back='$license_back_pic' WHERE u_id = '".$_SESSION['id']."'";
          $result4 = mysqli_query($db,$sql);
      }
      if ($ID_front_file=="") {
        $sql = "UPDATE user SET uID_photo_front='$user_ID_front'WHERE u_id = '".$_SESSION['id']."'";
        $result5 = mysqli_query($db,$sql);
      }
      else{
          $ID_front_pic =addslashes(file_get_contents($_FILES["IDpic_front"]["tmp_name"]));
          $sql = "UPDATE user SET uID_photo_front='$ID_front_pic' WHERE u_id = '".$_SESSION['id']."'";
          $result6 = mysqli_query($db,$sql);
      }
      if ($ID_back_file=="") {
        $sql = "UPDATE user SET uID_photo_back='$user_ID_back'WHERE u_id = '".$_SESSION['id']."'";
        $result7 = mysqli_query($db,$sql);
      }
      else{
        $ID_back_pic =addslashes(file_get_contents($_FILES["IDpic_back"]["tmp_name"]));
        $sql = "UPDATE user SET uID_photo_back='$ID_back_pic' WHERE u_id = '".$_SESSION['id']."'";
        $result8 = mysqli_query($db,$sql);
      }
      if ($license_front_file!="" && $license_back_file!="" && $ID_front_file!="" && $ID_back_file!="") {
        $sql = "UPDATE user SET u_verify='審核中' WHERE u_id = '".$_SESSION['id']."'";
        $result9 = mysqli_query($db,$sql);
      }
      $user_ID = mysqli_real_escape_string($db,$_POST['ID']);
      $user_sex = mysqli_real_escape_string($db,$_POST['sex']);
      $user_address = mysqli_real_escape_string($db,$_POST['address']);
      $user_birthday = mysqli_real_escape_string($db,$_POST['birthday']);
      $user_ename = mysqli_real_escape_string($db,$_POST['ename']);
      $user_ename_relationship = mysqli_real_escape_string($db,$_POST['erelationship']);
      $user_ename_phone = mysqli_real_escape_string($db,$_POST['ephone']);
      if ($user_pwd == '') {
        $user_pwd = $row['u_password'];
        $sql = "UPDATE user SET u_name ='$user_name', u_email='$user_email', u_account='$user_account', u_password='$user_pwd', u_phone='$user_phone',u_wallet='$user_wallet',uID='$user_ID', u_sex='$user_sex', u_address='$user_address', u_birthday='$user_birthday', e_name='$user_ename', e_relationship='$user_ename_relationship', e_phone='$user_ename_phone' WHERE u_id = '".$_SESSION['id']."'";
      }
      else {
        $sql = "UPDATE user SET u_name ='$user_name', u_email='$user_email', u_account='$user_account', u_password='".md5($user_pwd)."', u_phone='$user_phone',u_wallet='$user_wallet',uID='$user_ID', u_sex='$user_sex', u_address='$user_address', u_birthday='$user_birthday', e_name='$user_ename', e_relationship='$user_ename_relationship', e_phone='$user_ename_phone' WHERE u_id = '".$_SESSION['id']."'";
      }

      if(mysqli_query($db, $sql)){
        echo "<script>alert('更新成功');</script>";
       echo '<meta http-equiv=REFRESH CONTENT=0;url=member.php>';
      }else{
        die("ERROR");
      }
      $db->close();
    }
 ?>
