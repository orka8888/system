<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<?php include_once('../../includes/authen.php'); ?>
<?php
    if (isset($_GET['user_id'])){
        $sql = "DELETE FROM `tbl_user` WHERE `id` = '".$_GET['user_id']."' ";
        $result = $conn->query($sql);

        if( $conn->affected_rows ){
            echo '<script> alert("ลบสำเร็จ!")</script>'; 
            header('Refresh:0; url=../index.php'); 
        } else {
            echo '<script> alert("ไม่มีข้อมูล!")</script>'; 
            header('Refresh:0; url=../index.php');
        }

    } else {
        header('Refresh:0; url=../index.php');
    }
?>