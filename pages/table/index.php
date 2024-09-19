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
    <title>โต๊ะ </title>
</head>

<body data-ma-theme="red" style="background: #ff6b6805;">
    <main class="main">
        <?php require_once('../includes/menu.php'); ?>

        <section class="content">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title" style="margin-bottom: 0px;">โต๊ะ </h4>
                    <div class="float-right mt-10">
                        <a href="add.php" class="btn btn-primary btn-icon box-shadow" style="width: 104.25px;"> <i class="zmdi zmdi-plus-circle zmdi-hc-fw"></i> เพิ่ม</a>
                    </div>

                    <div class="table-responsive">
                        <table id="data-table" class="table table-bordered">
                            <thead class="thead-default">
                                <tr>
                                    <th class="text-center" style="width: 120px;">ลำดับ</th>
                                    <th class="text-center">รูปภาพ</th>
                                    <th class="text-center">โต๊ะ</th>
                                    <th class="text-center" style="width: 250px;">จัดการ</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th class="text-center" style="width: 120px;">ลำดับ</th>
                                    <th class="text-center">รูปภาพ</th>
                                    <th class="text-center">โต๊ะ</th>
                                    <th class="text-center" style="width: 250px;">จัดการ</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                $num = 0;
                                while ($row_table_ = $result_table_->fetch_assoc()) {
                                    $num++;
                                ?>
                                    <tr>
                                        <td class="text-center" style="width: 120px;"><?php echo $num; ?></td>
                                        <td class="text-center" style="width: 120px;">
                                                <input type="hidden" name="image" value="<?php echo $row_table_['image']; ?>">
                                                <img id="imgUpload" style="width: 120px;" src="../../assets/img/table/<?php echo  $row_table_['image']; ?>">
                                        </td>
                                        <td><?php echo $row_table_['table']; ?></td>
                                        <td class="text-center" style="width: 250px;">
                                            <a href="edit.php?table_id=<?php echo $row_table_['id']; ?>" class="btn btn-warning btn-icon box-shadow" style="width: 79.25px;"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> แก้ไข</a>
                                            <a href="#" class="btn btn-danger btn-icon box-shadow" onclick="deleteItem(<?php echo $row_table_['id']; ?>);" style="width: 79.25px;"><i class="zmdi zmdi-delete zmdi-hc-fw"></i> ลบ</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
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
        // Delete
        function deleteItem(id) {
            if (confirm('ต้องการลบข้อมูลโต๊ะนี้หรือไม่') == true) {
                window.location = `sql/delete.php?table_id=${id}`;
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