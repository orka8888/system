<?php
session_start();
require_once('includes/connect.php');
//   print_r($_POST);

if (isset($_POST['submit'])) {
  $username = $conn->real_escape_string($_POST['username']);
  $password = $conn->real_escape_string($_POST['password']);

  $sql = "SELECT * FROM `tbl_user` WHERE `username` = '" . $username . "' AND status = 'ใช้งาน' ";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  if (!empty($row) && password_verify($password, $row['password'])) {
    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['role'] = $row['role'];
    $_SESSION['last_login'] = $row['last_login'];

    $update = "UPDATE `tbl_user` SET `last_login` = '" . date("Y-m-d H:i:s") . "' WHERE `id` = '" . $row['id'] . "' ";
    $result_update = $conn->query($update);

    if ($result_update) {
      if ($_SESSION['role'] == 'ผู้ดูแล') {
        header('Location: action/reserved.php');
      } else {
        header('Location: action/reserved.php');
      }
    } else {
      echo '<script> alert("เกิดข้อผิดพลาด!") </script>';
    }
  } else {
    echo '<script> alert("ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง หรือ ไม่มีสิทธิ์เข้าใช้งาน") </script>';
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
  <title>เข้าสู่ระบบ</title>
</head>

<style>
  body,
  html {
    height: 100%;
    margin: 0;
  }

  .bg {
    /* The image used */
    background-image: url("../assets/img/123.jpg");

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
          <h3 style="color: floralwhite;">ระบบจองโต๊ะอาหาร</h3>
        </div>

        <div class="login__block__body mt-2">

          <h5 style="color: #FF6B68;">เข้าสู่ระบบ</h5>

          <div class="form-group form-group--float form-group--centered">
            <input type="text" class="form-control" required="" name="username">
            <label>ชื่อในการเข้าสู่ระบบ</label>
            <i class="form-group__bar"></i>
          </div>

          <div class="form-group form-group--float form-group--centered">
            <input type="password" class="form-control" required="" name="password">
            <label>รหัสผ่าน</label>
            <i class="form-group__bar"></i>
          </div>

          <button type="submit" name="submit" class="btn login__block__btn">เข้าสู่ระบบ <i class="zmdi zmdi-long-arrow-right"></i></button><br><br><br>
          <a href="forget.php" class="btn btn-outline-info btn-sm" style="width: 200px;"><i class="zmdi zmdi-lock-outline zmdi-hc-fw"></i> ลืมรหัสผ่าน</a><br><br>
          <a href="../index.php" class="btn btn-outline-warning btn-sm" style="width: 200px;"><i class="zmdi zmdi-home zmdi-hc-fw"></i> หน้าแรก</a>
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