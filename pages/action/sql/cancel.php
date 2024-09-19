<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0" />
<?php include_once('../../includes/authen.php');

if (isset($_GET['reserved_id'])) {

    $sql = "UPDATE `tbl_reserved` 
    SET `status` = '3',
        `action_by` = '" . $_SESSION['id'] . "',
        `action_date` = '" . date("Y-m-d H:i:s") . "'
    WHERE `id` = '" . $_GET['reserved_id'] . "';";

    $result = $conn->query($sql) or die($conn->error);
    if ($result) {
        echo '<script> alert("ยกเลิกโต๊ะสำเร็จ!") </script>';
        header('Refresh:0; url=../cleared.php');
    } else {
        echo '<script> alert("ยกเลิกโต๊ะไม่สำเร็จ!")</script>';
        header('Refresh:0; url=../cleared.php');
    }
} else {
    header('Refresh:0; url=../cleared.php');
}
?>