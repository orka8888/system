<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0" />
<?php include_once('../../includes/authen.php');

if (isset($_POST['submit'])) {

    if ($_FILES['file']['name'] != '') {
        $temp =  explode('.', $_FILES['file']['name']);
        $image_name = round(microtime(true) * 9999) . '.' . end($temp);
        $url_upload = '../../../assets/img/table/' . $image_name;
        if (move_uploaded_file($_FILES['file']['tmp_name'], $url_upload)) {
        } else {
            echo '<script> alert("ไม่สามารถอัพโหลดรูปภาพใหม่ได้ โปรดลองอีกครั้ง")</script>';
            header('Refresh:0; url=../add.php');
        }
    } else {
        $image_name = 'no-img.png';
    }

    $sql = "INSERT INTO `tbl_table` (`table`, `image`) 
            VALUES ('" . $_POST['table'] . "', '" . $image_name . "')";

    $result = $conn->query($sql);
    if ($result) {
        echo '<script> alert("บันทึกสำเร็จ!")</script>';
        header('Refresh:0; url=../index.php');
    } else {
        echo '<script> alert("บันทึกไม่สำเร็จ!")</script>';
        header('Refresh:0; url=../add.php');
    }
} else {
    header('Refresh:0; url=../add.php');
}
?>