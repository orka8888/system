<?php 
    //-----------------------------------------------fetch------------------------------------------------//
    //session user login
    if (isset($_SESSION['id'])) {
        $sql_session = "SELECT * FROM `tbl_user` WHERE `id` = '".$_SESSION['id']."'";
    }
    $result_session = $conn->query($sql_session);
    $row_session = $result_session->fetch_assoc();

    //user
    if (isset($_GET['user_id'])) {
        $sql_user = "SELECT * FROM `tbl_user` WHERE `id` = '".$_GET['user_id']."'";
    } else { 
        $sql_user = "SELECT * FROM `tbl_user`"; 
    }
    $result_user = $conn->query($sql_user);
    $row_user = $result_user->fetch_assoc();

    //table
    if (isset($_GET['table_id'])) {
        $sql_table = "SELECT * FROM `tbl_table` WHERE `id` = '".$_GET['table_id']."'";
    } else { 
        $sql_table = "SELECT * FROM `tbl_table`"; 
    }
    $result_table = $conn->query($sql_table);
    $row_table = $result_table->fetch_assoc();


    //-----------------------------------------------no fetch------------------------------------------------//

    //user
    if (isset($_GET['user_id'])) {
        $sql_user_ = "SELECT * FROM `tbl_user` WHERE `id` = '".$_GET['user_id']."'";
    } else { 
        $sql_user_ = "SELECT * FROM `tbl_user` ORDER BY `id` DESC"; 
    }
    $result_user_ = $conn->query($sql_user_);

    //table
     if (isset($_GET['table_id'])) {
        $sql_table_ = "SELECT * FROM `tbl_table` WHERE `id` = '".$_GET['table_id']."'";
    } else { 
        if (isset($_GET['reserved'])) {
            $sql_table_ = "SELECT * FROM `tbl_table` WHERE `reserved` = '".$_GET['reserved']."' ORDER BY `table` ASC ";
        } else {
            $sql_table_ = "SELECT * FROM `tbl_table` ORDER BY `table` ASC ";
        }
    }
    $result_table_ = $conn->query($sql_table_);

    //reserved
    if (isset($_GET['reserved_id'])) {
        $sql_reserved_ = "SELECT * FROM `vw_reserved` WHERE `id` = '".$_GET['reserved_id']."'";
    } else { 
        if (isset($_GET['status'])) {
            $sql_reserved_ = "SELECT * FROM `vw_reserved` WHERE `status` = '".$_GET['status']."' ORDER BY `table_name` ASC ";
        } else {
            $sql_reserved_ = "SELECT * FROM `vw_reserved` ORDER BY `id` DESC"; 
        }
    }
    $result_reserved_ = $conn->query($sql_reserved_);
