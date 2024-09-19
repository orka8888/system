<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<?php include_once('../../includes/authen.php'); ?>
<?php
//print_r($_POST);
if(isset($_POST['submit']) && ($_POST['password'] == $_POST['confirm_password']) ){
    $hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
  
    $sql = "UPDATE `tbl_user` 
    SET `password` = '".$hashed."'
    WHERE `id` = '".$_SESSION['id']."';";

    $result = $conn->query($sql) or die($conn->error);
    if($result){
        echo '<script> alert("บันทึกสำเร็จ!") </script>';
        header('Refresh:0; url=../chang_password.php');
    } else {
        echo '<script> alert("บันทึกไม่สำเร็จ!")</script>';
        header('Refresh:0; url=../chang_password.php');
    }

} else {
    echo '<script> alert("รหัสผ่านไม่ตรงกัน!")</script>';
    header('Refresh:0; url=../chang_password.php');
}

?>