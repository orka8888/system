<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<?php
    include_once('../../includes/authen.php');
    //print_r($_POST);

if (isset($_POST['submit'])) {
    if($_POST['password'] == $_POST['confirm_password']) {
        $role = $_POST['role'];
        $status = $_POST['status'];

    $sql_check_username = "SELECT * FROM `tbl_user` WHERE `username` = '" . $_POST['username'] . "' ";
    $check_username = $conn->query($sql_check_username);
        if (!$check_username->num_rows) {
            $hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
          
            if($_FILES['file']['name'] != ''){
                $temp =  explode('.',$_FILES['file']['name']);
                $image_name = round(microtime(true)*9999) . '.' . end($temp);
                $url_upload = '../../../assets/img/user/'.$image_name;
                if ( move_uploaded_file($_FILES['file']['tmp_name'], $url_upload) ){
          
                }else{
                    echo '<script> alert("ไม่สามารถอัพโหลดรูปภาพใหม่ได้ โปรดลองอีกครั้ง")</script>'; 
                    header('Refresh:0; url=../add.php'); 
                }
            } else {
                $image_name = 'avatar.png';
            }

                $sql = "INSERT INTO `tbl_user` (`username`, `password`, `user_full_name`, `email`, `tel`,`role`, `status`, `image`) 
                VALUES ('" . $_POST['username'] . "', 
                        '" . $hashed . "', 
                        '" . $_POST['user_full_name'] . "',
                        '" . $_POST['email'] . "',
                        '" . $_POST['tel'] . "',
                        '" . $role . "',
                        '" . $status . "',
                        '" . $image_name . "');";

                $result = $conn->query($sql);
                if ($result) {
                    echo '<script> alert("บันทึกสำเร็จ!")</script>';
                    header('Refresh:0; url=../index.php');
                } else {
                    echo '<script> alert("บันทึกไม่สำเร็จ!")</script>';
                    header('Refresh:0; url=../add.php');
                }

        } else {
            echo '<script> alert("ชื่อผู้ใช้งานนี้มีอยู่แล้ว!")</script>';
            header('Refresh:0; url=../add.php');
        }

    } else { 
        echo '<script> alert("รหัสผ่านไม่ตรงกัน!")</script>';
        header('Refresh:0; url=../add.php');
    }
   
} else {    
    header('Refresh:0; url=../add.php');
}
?>