<?php
session_start();
require_once('includes/connect.php');
//   print_r($_POST);

if (isset($_POST['submit'])) {
  $username = $conn->real_escape_string($_POST['username']);
  $email = $conn->real_escape_string($_POST['email']);
  //$password = $conn->real_escape_string($_POST['password']);

  $sql = "SELECT * FROM `tbl_user` WHERE `username` = '" . $username . "' AND `status` = 'ใช้งาน' AND `email` = '" . $email . "' ";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  if (!empty($row)) {
    $tel = $row['tel'];
    $hashed = password_hash($tel, PASSWORD_DEFAULT);


    $update = "UPDATE `tbl_user` SET `password` = '" . $hashed . "' WHERE `id` = '" . $row['id'] . "' ";
    $result_update = $conn->query($update);

    if ($result_update) {
      echo '<script> alert("รหัสผ่านจะถูกรีเช็ตเป็น "เบอร์โทร" ของคุณที่อยู่ในระบบ!") </script>';
      //header('Refresh:0; url=login.php');
      header('Location: login.php');
    } else {
      echo '<script> alert("เกิดข้อผิดพลาด!") </script>';
    }
  } else {
    echo '<script> alert("อีเมลไม่ถูกต้อง") </script>';
  }
}
?>

<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Vendor styles -->
  <link rel="stylesheet" href="../assets/vendors/material-design-iconic-font/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="../assets/vendors/animate.css/animate.min.css">

  <!-- App styles -->
  <link rel="stylesheet" href="../assets/css/app.min.css">
  <title>ลืมรหัสผ่าน</title>
</head>

<style>
  body,
  html {
    height: 100%;
    margin: 0;
  }

  .bg {
    /* The image used */
    background-image: url("../assets/img/bg_login.jpg");

    /* Full height */
    height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>

<body data-ma-theme="red">
  <div class="login bg">
    <form action="" method="post">
      <div class="login__block active" id="l-login" style="width: 832.4px;">
        <div class="login__block__header">
          <i class="zmdi zmdi-account-circle"></i>
          <h3 style="color: floralwhite;">ลืมรหัสผ่าน</h3>
          <h5 style="color: floralwhite;"></h5>
        </div>

        <div class="login__block__body">
          <div class="form-group form-group--float form-group--centered">
            <input type="text" class="form-control" required="" name="username">
            <label>ชื่อในการเข้าสู่ระบบ</label>
            <i class="form-group__bar"></i>
          </div>

          <div class="form-group form-group--float form-group--centered">
            <input type="text" class="form-control" required="" name="email">
            <label>อีเมลที่ใช้ในระบบ</label>
            <i class="form-group__bar"></i>
          </div>

          <button type="submit" name="submit" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-long-arrow-right"></i></button><br><br>รหัสผ่านจะถูกรีเช็ตเป็นเบอร์โทรของคุณ<br>ที่อยู่ในระบบ <br><br><br>
          <a href="login.php" class="btn btn-outline-info btn-sm" style="width: 200px;"><i class="zmdi zmdi-lock-open zmdi-hc-fw"></i> มีบัญชีอยู่แล้ว</a>
        </div>
      </div>
    </form>
  </div>

  <!-- Javascript -->
  <!-- ../assets/Vendors -->
  <script src="../assets/vendors/jquery/jquery.min.js"></script>
  <script src="../assets/vendors/popper.js/popper.min.js"></script>
  <script src="../assets/vendors/bootstrap/js/bootstrap.min.js"></script>

  <!-- App functions and actions -->
  <script src="../assets/js/app.min.js"></script>
</body>

</html>