<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0" />
<?php include_once('../../includes/authen.php');

if (isset($_POST['submit'])) {

    $sql = "INSERT INTO `tbl_reserved` (`table_id`, `booker_name`, `booker_tel`, `booker_date`, `booker_time`, `booker_datetime`, `created_by`, `created_date`, `status`) 
            VALUES ('" . $_POST['table_id'] . "', 
                    '" . $_POST['booker_name'] . "',
                    '" . $_POST['booker_tel'] . "',
                    '" . $_POST['booker_date'] . "',
                    '" . $_POST['booker_time'] . "',
                    '" . $_POST['booker_date'].' '.$_POST['booker_time'] . "',
                    '" . $_SESSION['id'] . "',
                    '" . date("Y-m-d H:i:s") . "',
                    '1')";

    $result = $conn->query($sql);
    if ($result) {

        echo '<script> alert("จองโต๊ะแล้ว!")</script>';
        header('Refresh:0; url=../reserved.php');
    } else {
        echo '<script> alert("จองโต๊ะไม่สำเร็จ!")</script>';
        header('Refresh:0; url=../reserved.php');
    }
} else {
    header('Refresh:0; url=../reserved.php');
}
?>