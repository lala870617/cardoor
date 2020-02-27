<?php
    if(isset($_POST['signup'])){
      require('db.php');
      $user_name = mysqli_real_escape_string($db,$_POST['name']);
      $user_email = mysqli_real_escape_string($db,$_POST['email']);
      $user_account = mysqli_real_escape_string($db,$_POST['account']);
      $user_pwd = mysqli_real_escape_string($db,$_POST['pwd']);
      $user_wallet = mysqli_real_escape_string($db,$_POST['metamaskaddress']);
      $user_phone = mysqli_real_escape_string($db,$_POST['phone']);
      $license_front_file = $_FILES["license_front"]["name"];
      $license_back_file = $_FILES["license_back"]["name"];
      $ID_front_file = $_FILES["IDpic_front"]["name"];
      $ID_back_file = $_FILES["IDpic_back"]["name"];
      if(addslashes($_FILES["license_front"]["size"])>1000000||addslashes($_FILES["license_back"]["size"])>1000000||addslashes($_FILES["IDpic_front"]["size"])>1000000||addslashes($_FILES["IDpic_back"]["size"])>1000000) {
		        echo "<script>alert('檔案太大，更改失敗');</script>";
		        echo '<meta http-equiv=REFRESH CONTENT=0;url=register.php>';
		        exit();
		    }
      $license_front_picname=addslashes($_FILES["license_front"]["name"]);
      $license_back_picname=addslashes($_FILES["license_back"]["name"]);
      $license_front_picname=addslashes($_FILES["IDpic_front"]["name"]);
      $license_front_picname=addslashes($_FILES["IDpic_back"]["name"]);
	    $license_front_pic =addslashes(file_get_contents($_FILES["license_front"]["tmp_name"]));
      $license_back_pic =addslashes(file_get_contents($_FILES["license_back"]["tmp_name"]));
      $ID_front_pic =addslashes(file_get_contents($_FILES["IDpic_front"]["tmp_name"]));
      $ID_back_pic =addslashes(file_get_contents($_FILES["IDpic_back"]["tmp_name"]));
      $user_sex = mysqli_real_escape_string($db,$_POST['sex']);
      $user_address = mysqli_real_escape_string($db,$_POST['address']);
      $user_birthday = mysqli_real_escape_string($db,$_POST['birthday']);
      $user_ename = mysqli_real_escape_string($db,$_POST['ename']);
      $user_ename_relationship = mysqli_real_escape_string($db,$_POST['erelationship']);
      $user_ename_phone = mysqli_real_escape_string($db,$_POST['ephone']);
      $sql = "INSERT INTO user (u_name, u_email, u_account, u_password, u_wallet, u_license_front,u_license_back,uID_photo_front,uID_photo_back, u_phone, u_sex, u_address, u_birthday, e_name, e_relationship, e_phone) VALUES ('$user_name','$user_email','$user_account','".md5($user_pwd)."','$user_wallet','$license_front_pic','$license_back_pic','$ID_front_pic','$ID_back_pic','$user_phone','$user_sex','$user_address','$user_birthday','$user_ename','$user_ename_relationship','$user_ename_phone')";

      if(mysqli_query($db,$sql)){
        echo "<script>alert('註冊成功');</script>";
				echo '<meta http-equiv=REFRESH CONTENT=0;url=login.php>';
      }else{
        die("ERROR");
      }
      $db->close();
    }
 ?>
