<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Vendor styles -->
    <link rel="stylesheet" href="../../assets/vendors/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../../assets/vendors/animate.css/animate.min.css">
    <link rel="stylesheet" href="../../assets/vendors/jquery-scrollbar/jquery.scrollbar.css">

    <!-- App styles -->
    <link rel="stylesheet" href="../../assets/css/app.min.css">
    <title>เคลียร์โต๊ะ </title>
</head>


<style>
    .avatar-char,
    .avatar-img {
        border-radius: unset;
        width: 10rem;
        height: 7rem;
    }
</style>

<body data-ma-theme="red" style="background: #ff6b6805;">
    <main class="main">
        <?php
        $_GET['status'] = 1;
        require_once('../includes/menu.php'); ?>

        <section class="content">
            <div class="content__inner">

                <div class="toolbar">
                    <h4 class="card-title" style="margin-bottom: 0px;">เคลียร์โต๊ะ </h4>
                </div>
                <!-- <form method="post" action="sql/temp.php" class="form-horizontal" enctype="multipart/form-data"> -->
                <div class="row groups">
                    <?php
                    while ($row_reserved_ = $result_reserved_->fetch_assoc()) {
                    ?>
                        <div class="col-xl-2-4 col-lg-3 col-sm-4 col-6">
                            <div class="groups__item">
                                <img class="avatar-img" src="../../assets/img/table/<?php echo  $row_reserved_['table_image']; ?>">
                                <div class="groups__info">
                                    <strong><?php echo $row_reserved_['table_name']; ?></strong>
                                    <br>
                                    <?php echo $row_reserved_['booker_name']; ?>
                                    <br>
                                    <?php $date = new DateTimeImmutable($row_reserved_['booker_time']);
                                    echo $date->format('d-m-Y H:i');
                                    ?>
                                    <br>
                                </div><br>

                                <div class="row">
                                    <input type="hidden" name="id" value="<?php echo $row_reserved_['id']; ?>">

                                    <div class="col-6" style="padding-right: 0px;padding-left: 0px;">
                                        <a href="#" style="width: 80px;height: 26.75px;" class="btn btn-outline-warning btn-sm" onclick="ClearItem(<?php echo $row_reserved_['id']; ?>);">เคลียร์โต๊ะ</a>
                                    </div>
                                    <div class="col-6" style="padding-right: 0px;padding-left: 0px;">
                                        <a href="#" style="width: 80px;height: 26.75px;" class="btn btn-outline-danger btn-sm" onclick="CancelItem(<?php echo $row_reserved_['id']; ?>);">ยกเลิกจอง</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- </form> -->
            </div>

            <?php require_once('../includes/footer.php'); ?>
        </section>
    </main>

    <!-- Javascript -->
    <!-- Vendors -->
    <script src="../../assets/vendors/jquery/jquery.min.js"></script>
    <script src="../../assets/vendors/popper.js/popper.min.js"></script>
    <script src="../../assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/vendors/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../../assets/vendors/jquery-scrollLock/jquery-scrollLock.min.js"></script>

    <!-- Vendors: Data tables -->
    <script src="../../assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="../../assets/vendors/datatables-buttons/dataTables.buttons.min.js"></script>
    <script src="../../assets/vendors/datatables-buttons/buttons.print.min.js"></script>
    <script src="../../assets/vendors/jszip/jszip.min.js"></script>
    <script src="../../assets/vendors/datatables-buttons/buttons.html5.min.js"></script>

    <!-- App functions and actions -->
    <script src="../../assets/js/app.min.js"></script>

    <script>
        // Clear
        function ClearItem(id) {
            if (confirm('ต้องการเคลียร์โต๊ะนี้หรือไม่') == true) {
                window.location = `sql/cleare.php?reserved_id=${id}`;
            }
        };

        // Cancel
        function CancelItem(id) {
            if (confirm('ต้องการยกเลิกโต๊ะนี้หรือไม่') == true) {
                window.location = `sql/cancel.php?reserved_id=${id}`;
            }
        };

        // Data tables
        $.extend(true, $.fn.dataTable.defaults, {
            "language": {
                "sProcessing": "กำลังดำเนินการ...",
                "sLengthMenu": "แสดง  _MENU_ แถว",
                "sZeroRecords": "ไม่พบข้อมูล",
                "sInfo": "แสดง  _START_  ถึง _END_  จาก _TOTAL_  แถว",
                "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
                "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
                "sInfoPostFix": "",
                "sLength": "แถว",
                "sSearch": "ค้นหา:",
                "sSearchPlaceholder": "ค้นหา",
                "sUrl": "",
                "oPaginate": {
                    "sFirst": "เริ่มต้น",
                    "sPrevious": "ก่อนหน้า",
                    "sNext": "ถัดไป",
                    "sLast": "สุดท้าย"
                }
            }
        });
    </script>

</body>

</html>