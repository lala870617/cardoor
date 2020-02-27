<?php
    require('db.php');
    session_start();
    $admin_account = mysqli_real_escape_string($db,$_POST['account']);
    $admin_password = mysqli_real_escape_string($db,$_POST['pwd']);

    if($admin_account == ''|| $admin_password == ''){
      echo "<script>alert('Invalid email or password')</script>";
      header('Location: adminlogin.php');

    }else{
      $query = "SELECT * FROM admin WHERE a_account = '$admin_account' AND a_password = '$admin_password'";
      $result = mysqli_query($db, $query);
      $row = mysqli_fetch_array($result);
      if (mysqli_num_rows($result)) {
        $_SESSION['aid'] = $row['a_id'];
        echo "<script>alert('登入成功')</script>";
        echo '<meta http-equiv=REFRESH CONTENT=0;url=management.php>';
      }
      else {
        echo "<script>alert('登入失敗')</script>";
        echo '<meta http-equiv=REFRESH CONTENT=0;url=adminlogin.php>';
      }

    }
?>
