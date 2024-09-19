<!DOCTYPE html>
<html lang="th">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="../../assets/vendors/material-design-iconic-font/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="../../assets/vendors/animate.css/animate.min.css">
        <link rel="stylesheet" href="../../assets/vendors/jquery-scrollbar/jquery.scrollbar.css">

    <!-- BEGIN: Custom Search Builder -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/searchbuilder/1.3.0/css/searchBuilder.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/datetime/1.1.1/css/dataTables.dateTime.min.css">
    <!-- END: Custom Search Builder -->

    <!-- BEGIN: File export -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css"> -->
    <!-- END: File export -->

        <!-- App styles -->
        <link rel="stylesheet" href="../../assets/css/app.min.css">
        <title>ประวัติ </title>
    </head>

    <body data-ma-theme="red" style="background: #ff6b6805;">
        <main class="main">
           <?php require_once('../includes/menu.php'); ?>

            <section class="content">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="margin-bottom: 0px;">ประวัติ </h4>
                        <div class="float-right mt-10">
                           
                        </div>

                        <div class="table-responsive">
                        <table id="example" class="table table-bordered display nowrap" style="width:100%;">
                            <!-- <table id="data-table" class="table table-bordered"> -->
                                <thead class="thead-default">
                                    <tr>
                                        <!-- <th class="text-center">ลำดับ</th> -->
                                        <th class="text-center">โต๊ะ</th>
                                        <th class="text-center">ผู้จอง</th>
                                        <th class="text-center">เบอร์โทร</th>
                                        <th class="text-center">จองวันที่</th>
                                        <th class="text-center">จองเวลา</th>
                                        <th class="text-center">สถานะ</th>
                                        <th class="text-center">พนักงาน</th>
                                        <th class="text-center">วันที่จอง</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <!-- <th class="text-center">ลำดับ</th> -->
                                        <th class="text-center">โต๊ะ</th>
                                        <th class="text-center">ผู้จอง</th>
                                        <th class="text-center">เบอร์โทร</th>
                                        <th class="text-center">จองวันที่</th>
                                        <th class="text-center">จองเวลา</th>
                                        <th class="text-center">สถานะ</th>
                                        <th class="text-center">พนักงาน</th>
                                        <th class="text-center">วันที่จอง</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php 
                                        $num = 0;
                                        while($row_reserved_ = $result_reserved_->fetch_assoc()){
                                        $num++;
                                    ?>
                                    <tr>
                                        <!-- <td class="text-center" style="width: 90px;"><?php echo $num; ?></td> -->
                                        <td class="text-center" style="width: 210px;"><?php echo $row_reserved_['table_name']; ?></td>
                                        <td class="text-center"><?php echo $row_reserved_['booker_name']; ?></td>
                                        <td class="text-center" style="width: 230px;"><?php echo $row_reserved_['booker_tel']; ?></td>
                                        <td class="text-center" style="width: 140px;"><?php $date = new DateTimeImmutable($row_reserved_['booker_date']);
                                            echo $date->format('d-m-Y'); ?></td>
                                        <td class="text-center" style="width: 120px;"><?php $date = new DateTimeImmutable($row_reserved_['booker_time']);
                                            echo $date->format('H:i'); ?></td>
                                        <td class="text-center" style="width: 120px;">
                                        <?php if($row_reserved_['status'] == '1'){ ?>
                                            <span class="badge badge-info">จอง</span>
                                        <?php }elseif($row_reserved_['status'] == '2'){ ?>
                                            <span class="badge badge-secondary">เคลียร์โต๊ะ</span>
                                        <?php }else{ ?>
                                            <span class="badge badge-warning">ยกเลิกจอง</span>
                                        <?php } ?>
                                        </td>
                                        <td class="text-center" style="width: 230px;"><?php echo $row_reserved_['created_by_name']; ?></td>
                                        <td class="text-center" style="width: 180px;"><?php $date = new DateTimeImmutable($row_reserved_['created_date']);
                                            echo $date->format('d-m-Y H:i:s'); ?></td>
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

     <!-- BEGIN: Custom Search Builder JS-->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/searchbuilder/1.3.0/js/dataTables.searchBuilder.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>
    <!-- END: Custom Search Builder JS-->

      <!-- BEGIN: File export JS-->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script> -->
    <!-- END: File export JS-->

        <!-- App functions and actions -->
        <script src="../../assets/js/app.min.js"></script>

        <script>
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

<script>
         $(document).ready(function() {
        $.extend(true, $.fn.dataTable.defaults, { // datatables language
            language: {
                searchBuilder: {
                    add: 'ค้นหาแบบละเอียด',
                    button: 'Filtres',
                    clearAll: 'รีเซ็ต',
                    condition: 'เงื่อนไข',
                    conditions: {
                        date: {
                            before: 'ก่อน',
                            after: 'หลัง',
                            equals: 'เท่ากับ',
                            not: 'ไม่เท่ากับ',
                            between: 'ระหว่าง',
                            notBetween: 'ไม่อยู่ระหว่าง',
                            empty: 'ว่าง',
                            notEmpty: 'ไม่ว่าง'
                        },
                        moment: {
                            before: 'ก่อน',
                            after: 'หลัง',
                            equals: 'เท่ากับ',
                            not: 'ไม่เท่ากับ',
                            between: 'ระหว่าง',
                            notBetween: 'ไม่อยู่ระหว่าง',
                            empty: 'ว่าง',
                            notEmpty: 'ไม่ว่าง'
                        },
                        number: {
                            equals: 'เท่ากับ',
                            not: 'ไม่เท่ากับ',
                            gt: 'มากกว่า',
                            gte: 'มากกว่าหรือเท่ากับ',
                            lt: 'น้อยกว่า',
                            lte: 'น้อยกว่าหรือเท่ากับ',
                            between: 'ระหว่าง',
                            notBetween: 'ไม่อยู่ระหว่าง',
                            empty: 'ว่าง',
                            notEmpty: 'ไม่ว่าง'
                        },
                        string: {
                            contains: 'ประกอบด้วย',
                            notContains: 'ไม่ประกอบด้วย',
                            empty: 'ว่าง',
                            notEmpty: 'ไม่ว่าง',
                            equals: 'เท่ากับ',
                            not: 'ไม่เท่ากับ',
                            endsWith: 'ลงท้ายด้วย',
                            startsWith: 'เริ่มต้นด้วย',
                            notEndsWith: 'ไม่ลงท้ายด้วย',
                            notStartsWith: 'ไม่เริ่มต้นด้วย'
                        },
                    },
                    data: 'ฟิลด์',
                    logicAnd: 'และ',
                    logicOr: 'หรือ',
                    title: {
                        0: 'ค้นหาแบบละเอียด',
                        _: 'ค้นหาแบบละเอียด (%d)'
                    },
                    deleteTitle: 'ลบ',
                    leftTitle: 'หลัก',
                    rightTitle: 'ย่อย',
                    value: 'ข้อมูล',
                },

                select: {
                    rows: {
                        _: " %d แถวที่เลือก",
                        0: "",
                        1: "เลือก 1 แถว"
                    }
                },
                aria: {
                    sortDescending: " - คลิก Enter เพื่อเรียงลำดับจากมากไปหาน้อย",
                    sortAscending: " - คลิก Enter เพื่อเรียงลำดับจากน้อยไปมาก"
                }
            }
        });
        
        var table = $('#example').DataTable({
            dom: "'Qlfrtip'",
            order: [
                [0, 'asc'],
                [1, 'asc'],
                [2, 'desc']
            ],
            searchBuilder: {
                columns: [0, 1, 2, 3, 4, 5]
            },
            buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    // $(document).ready(function() {
    // $('#example').DataTable( {
    //     dom: 'Bfrtip',
    //     buttons: [
    //         'copy', 'csv', 'excel', 'pdf', 'print'
    //     ]
    //     } );
    // } );
    </script>

    </body>

</html>