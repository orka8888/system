<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<?php include_once('../../includes/authen.php'); ?>
<?php
    //print_r($_POST);
    if(isset($_POST['submit'])) {
        $id = $_POST['user_id'];
        
        if(isset($_POST['role'])){
            $role = $_POST['role'];
        } else {
            $role = 'ผู้ดูแล';
        }

        if(isset($_POST['status'])){
            $status = $_POST['status'];
        } else {
            $status = 'ใช้งาน';
        }

        $image_name = $_POST['image'];
        if($_FILES['file']['name'] != ''){
            $temp =  explode('.',$_FILES['file']['name']);
            $image_name = round(microtime(true)*9999) . '.' . end($temp);
            $url_upload = '../../../assets/img/user/'.$image_name;
            if ( move_uploaded_file($_FILES['file']['tmp_name'], $url_upload) ){
      
            }else{
                echo '<script> alert("ไม่สามารถอัพโหลดรูปภาพใหม่ได้ โปรดลองอีกครั้ง")</script>'; 
                header('Refresh:0; url=../edit.php?id='.$id); 
            }
        } 

        $sql = "UPDATE `tbl_user` 
        SET `user_full_name` = '".$_POST['user_full_name']."',
            `email` = '".$_POST['email']."',
            `tel` = '".$_POST['tel']."',
            `role` = '".$role."',
            `status` = '".$status."',
            `image` = '".$image_name."'
        WHERE `id` = '".$_POST['user_id']."';";

        $result = $conn->query($sql) or die($conn->error);
        if($result){
            echo '<script> alert("บันทึกสำเร็จ!") </script>';
            header('Refresh:0; url=../index.php');
        } else {
            echo '<script> alert("บันทึกไม่สำเร็จ!")</script>';
            header('Refresh:0; url=../edit.php?id='.$id);
        }
    } else {    
        header('Refresh:0; url=../index.php');
    } 
?>