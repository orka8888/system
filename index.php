<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Vendor styles -->
    <link rel="stylesheet" href="assets/vendors/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="assets/vendors/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/vendors/jquery-scrollbar/jquery.scrollbar.css">

    <!-- App styles -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <title>จองโต๊ะ </title>
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
        require_once('pages/includes/authen.php');
        $sql_vw_table_ = "SELECT `id`,`table`,`image`,`reserved` FROM `vw_table` ORDER BY `table` ASC;";
        $result_vw_table_ = $conn->query($sql_vw_table_); 

        ?>
        <section class="content" style="padding-left: 30px;padding-top: 10px;">
            <div class="content__inner">
                <div class="card">
                    <div class="card-body">
                        <h4 class="float-left">จองโต๊ะ </h4>
                        <div class="float-right">
                            <a href="pages/index.php" class="btn login__block__btn" style="width: 104.25px;"> <i class="zmdi zmdi-home zmdi-hc-fw"></i> เข้าสู่ระบบ</a>
                        </div>
                    </div>
                </div>
                <div class="row groups">
                    <?php
                    while ($row_vw_table_ = $result_vw_table_->fetch_assoc()) {
                    ?>
                        <div class="col-xl-2-4 col-lg-3 col-sm-4 col-6">
                            <div class="groups__item">
                                <img class="avatar-img" src="assets/img/table/<?php echo  $row_vw_table_['image']; ?>">
                                <div class="groups__info">
                                    <strong><?php echo $row_vw_table_['table']; ?></strong>
                                </div><br>

                                <div class="row">
                                    <div class="col-12" style="padding-right: 0px;padding-left: 0px;">
                                        <?php if ($row_vw_table_['reserved'] == 'ว่าง') { ?>
                                            <span class="badge badge-success" style="width: 100px;height: 26.75px;">ว่าง</span>
                                        <?php } else { ?>
                                            <span class="badge badge-secondary" style="width: 100px;height: 26.75px;">ไม่ว่าง</span>
                                        <?php } ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <?php require_once('pages/includes/footer.php'); ?>
        </section>
    </main>

    <!-- Javascript -->
    <!-- Vendors -->
    <script src="assets/vendors/jquery/jquery.min.js"></script>
    <script src="assets/vendors/popper.js/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script src="assets/vendors/jquery-scrollLock/jquery-scrollLock.min.js"></script>

    <!-- Vendors: Data tables -->
    <script src="assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables-buttons/dataTables.buttons.min.js"></script>
    <script src="assets/vendors/datatables-buttons/buttons.print.min.js"></script>
    <script src="assets/vendors/jszip/jszip.min.js"></script>
    <script src="assets/vendors/datatables-buttons/buttons.html5.min.js"></script>

    <!-- App functions and actions -->
    <script src="assets/js/app.min.js"></script>

    <script>
        function go(id, price) {
            window.location = `sql/temp.php?id=${id}&price=${price}`;
        }

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