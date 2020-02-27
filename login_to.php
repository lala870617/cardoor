<?php
    session_start();
    require('db.php');

    $user_account = mysqli_real_escape_string($db,$_POST['account']);
    $user_password = mysqli_real_escape_string($db,$_POST['pwd']);

    if($user_account == ''|| $user_password == ''){
      echo "<script>alert('Invalid email or password')</script>";
      header('Location: login.php');

    }else{
      $query = "SELECT u_id, u_account FROM user WHERE u_account = '$user_account' AND u_password = md5('$user_password')";
      $result = mysqli_query($db, $query);
      $row = mysqli_fetch_array($result);
      if (mysqli_num_rows($result)) {
        $_SESSION['id'] = $row['u_id'];
        echo "<script>alert('登入成功')</script>";
        echo '<meta http-equiv=REFRESH CONTENT=0;url=home.php>';
      }
      else {
        echo "<script>alert('登入失敗')</script>";
        echo '<meta http-equiv=REFRESH CONTENT=0;url=login.php>';
      }

    }
?>
