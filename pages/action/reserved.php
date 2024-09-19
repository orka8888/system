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
        <?php require_once('../includes/menu.php'); ?>

        <section class="content">
            <div class="content__inner">

                <div class="toolbar">
                    <h4 class="card-title" style="margin-bottom: 0px;">จองโต๊ะ </h4>
                </div>
                <!-- <form method="post" action="sql/temp.php" class="form-horizontal" enctype="multipart/form-data"> -->
                <div class="row groups">
                    <?php
                    while ($row_table_ = $result_table_->fetch_assoc()) {
                    ?>
                        <div class="col-xl-2-4 col-lg-3 col-sm-4 col-6">
                            <div class="groups__item">
                                <img class="avatar-img" src="../../assets/img/table/<?php echo  $row_table_['image']; ?>">
                                <div class="groups__info">
                                    <strong><?php echo $row_table_['table']; ?></strong>
                                </div><br>

                                <div class="row">
                                    <input type="hidden" name="id" value="<?php echo $row_table_['id']; ?>">

                                    <div class="col-12" style="padding-right: 0px;padding-left: 0px;">
                                        <a href="#" style="width: 100px;height: 26.75px;" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#AddModel<?php echo $row_table_['id']; ?>">จองโต๊ะ</a>
                                    </div>
                                </div>

                                <!-- BEGIN: AddModel-->
                                <div class="modal fade text-left" id="AddModel<?php echo $row_table_['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="AddModalLabel" aria-hidden="true" data-backdrop="false">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="AddModalLabel"><i data-feather='edit'></i> จองโต๊ะ : <?php echo $row_table_['table']; ?></h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div><br>
                                            <form action="sql/insert.php" method="post">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-3">ชื่อผู้จอง
                                                            </div>
                                                            <div class="col-9">
                                                                <input type="text" placeholder="ชื่อผู้จอง" class="form-control" name="booker_name" required />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-3">เบอร์โทรผู้จอง
                                                            </div>
                                                            <div class="col-9">
                                                                <input type="text" placeholder="เบอร์โทรผู้จอง" class="form-control" name="booker_tel" required />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-3">จองวันที่
                                                            </div>
                                                            <div class="col-9">
                                                                <input type="date" class="form-control" name="booker_date" value="<?php echo date('Y-m-d') ?>" required />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-3">จองเวลา
                                                            </div>
                                                            <div class="col-9">
                                                                <input type="time" class="form-control" name="booker_time" value="<?php echo date("H:i") ?>" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" name="table_id" value="<?php echo $row_table_['id']; ?>">
                                                    <button type="submit" name="submit" class="btn btn-success">จองโต๊ะ</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: AddModel-->

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