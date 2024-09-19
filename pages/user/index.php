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
        <title>ผู้ใช้งาน </title>
    </head>

    <body data-ma-theme="red" style="background: #ff6b6805;">
        <main class="main">
           <?php require_once('../includes/menu.php'); ?>

            <section class="content">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="margin-bottom: 0px;">ผู้ใช้งาน </h4>
                        <div class="float-right mt-10">
                            <a href="add.php" class="btn btn-primary btn-icon box-shadow" style="width: 104.25px;"> <i class="zmdi zmdi-plus-circle zmdi-hc-fw"></i> เพิ่ม</a>
                        </div>

                        <div class="table-responsive">
                            <table id="data-table" class="table table-bordered">
                                <thead class="thead-default">
                                    <tr>
                                        <th class="text-center">ลำดับ</th>
                                        <th class="text-center">ชื่อในการเข้าสู่ระบบ</th>
                                        <th class="text-center">ชื่อ - นามสกุล</th>
                                        <th class="text-center">บทบาท</th>
                                        <th class="text-center">สถานะ</th>
                                        <th class="text-center">จัดการ</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th class="text-center">ลำดับ</th>
                                        <th class="text-center">ชื่อในการเข้าสู่ระบบ</th>
                                        <th class="text-center">ชื่อ - นามสกุล</th>
                                        <th class="text-center">บทบาท</th>
                                        <th class="text-center">สถานะ</th>
                                        <th class="text-center">จัดการ</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php 
                                        $num = 0;
                                        while($row_user_ = $result_user_->fetch_assoc()){
                                        $num++;
                                    ?>
                                    <tr>
                                        <td class="text-center" style="width: 90px;"><?php echo $num; ?></td>
                                        <td class="text-center"><?php echo $row_user_['username']; ?></td>
                                        <td class="text-center"><?php echo $row_user_['user_full_name']; ?></td>
                                        <td class="text-center">
                                        <?php if($row_user_['role'] == 'ผู้ดูแล'){ ?>
                                            <span class="badge badge-success"><?php echo $row_user_['role']; ?></span>
                                        <?php }elseif($row_user_['role'] == 'ผู้ใช้งาน'){ ?>
                                            <span class="badge badge-secondary"><?php echo $row_user_['role']; ?></span>
                                        <?php }else{ ?>
                                            <span class="badge badge-info"><?php echo $row_user_['role']; ?></span>
                                        <?php } ?>
                                        </td>
                                        <td class="text-center">
                                        <?php if($row_user_['status'] == 'ใช้งาน'){ ?>
                                            <span class="badge badge-success"><?php echo $row_user_['status']; ?></span>
                                        <?php }else{ ?>
                                            <span class="badge badge-light"><?php echo $row_user_['status']; ?></span>
                                        <?php } ?>
                                        </td>
                                        <td class="text-center" style="width: 300px;">
                                            <a href="view.php?user_id=<?php echo $row_user_['id'];?>" class="btn btn-info btn-icon box-shadow" style="width: 79.25px;"><i class="zmdi zmdi-search zmdi-hc-fw"></i> แสดง</a>
                                            <a href="edit.php?user_id=<?php echo $row_user_['id'];?>" class="btn btn-warning btn-icon box-shadow" style="width: 79.25px;"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> แก้ไข</a>
                                            <?php if($row_user_['id'] != '1'){ ?>
                                            <a href="#" class="btn btn-danger btn-icon box-shadow" onclick="deleteItem(<?php echo $row_user_['id']; ?>);" style="width: 79.25px;"><i class="zmdi zmdi-delete zmdi-hc-fw"></i> ลบ</a>
                                            <?php } ?>
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
            function deleteItem (id) { 
                if(confirm('ต้องการลบข้อมูลผู้ใช้งานนี้หรือไม่') == true){
                window.location=`sql/delete.php?user_id=${id}`;
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