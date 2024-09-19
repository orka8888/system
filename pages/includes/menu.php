<link href="../../assets/fonts/fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->


<?php
include_once('authen.php');
require_once('db_list.php');

$uri = $_SERVER['REQUEST_URI'];
$array = explode('/', $uri);
$key = array_search("pages", $array);
$pages = $array[$key + 1];
$pages2 = $array[$key + 2];
$menu = strtok($pages2, '?');
?>

<style>
    .custom_active {
        background-color: #ff6b6830;
    }

    .menu_color {
        color: red !important;
    }

    .navigation_sub {
        padding: .6rem 1rem .6rem 2.75rem;
    }
</style>

<div class="page-loader">
    <div class="page-loader__spinner">
        <svg viewBox="25 25 50 50">
            <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
</div>

<header class="header">
    <div class="navigation-trigger hidden-xl-up" data-ma-action="aside-open" data-ma-target=".sidebar">
        <div class="navigation-trigger__inner">
            <i class="navigation-trigger__line"></i>
            <i class="navigation-trigger__line"></i>
            <i class="navigation-trigger__line"></i>
        </div>
    </div>

    <div class="header__logo hidden-sm-down">
        <h1><a href="index.php">ระบบจองโต๊ะอาหาร </a></h1>
    </div>

    <ul class="top-nav">
        <h4 style="color: floralwhite;"> วันที่ : <?php echo date('d-m-Y H:i:s'); ?></h4>
    </ul>
</header>

<aside class="sidebar" style="background: white;width: 244px;">
    <div class="scrollbar-inner">
        <div class="user">
            <div class="user__info" data-toggle="dropdown">
                <img class="user__img" src="../../assets/img/user/<?php echo $row_session['image']; ?>">
                <div>
                    <div class="user__name"><?php echo $row_session['user_full_name']; ?></div>
                    <div class="user__email"><?php echo $row_session['username']; ?></div>
                </div>
            </div>
        </div>

        <ul class="navigation">

            <?php if ($row_session['role'] == 'ผู้ดูแล') { ?>
                <h6 style="margin-top: 12px;color: currentcolor;font-size: 0.8rem;"> ข้อมูลพื้นฐาน </h6 style="margin-top: 12px;color: currentcolor;font-size: 0.8rem;">
                <li class="<?php echo $pages == 'user' ? 'custom_active' : '' ?>">
                    <a href="../user/index.php" class="menu_color"><i class="zmdi zmdi-accounts-outline zmdi-hc-fw"></i> ผู้ใช้งาน</a>
                </li>
                <li class="<?php echo $pages == 'table' ? 'custom_active' : '' ?>">
                    <a href="../table/index.php" class="menu_color"><i class="zmdi zmdi-dialpad zmdi-hc-fw"></i> โต๊ะ</a>
                </li>
            <?php } ?>

            <h6 style="margin-top: 12px;color: currentcolor;font-size: 0.8rem;"> จองโต๊ะ </h6 style="margin-top: 12px;color: currentcolor;font-size: 0.8rem;">
            <li class="<?php echo $pages2 == 'reserved.php' ? 'custom_active' : '' ?>">
                <a href="../action/reserved.php" class="menu_color"><i class="zmdi zmdi-plus-circle-o-duplicate zmdi-hc-fw"></i> จองโต๊ะ</a>
            </li>
            <li class="<?php echo $pages2 == 'cleared.php' ? 'custom_active' : '' ?>">
                <a href="../action/cleared.php" class="menu_color"><i class="zmdi zmdi-check-all zmdi-hc-fw"></i> เคลียร์โต๊ะ</a>
            </li>
            <li class="<?php echo $pages2 == 'history.php' ? 'custom_active' : '' ?>">
                <a href="../action/history.php" class="menu_color"><i class="zmdi zmdi-rotate-ccw zmdi-hc-fw"></i> ประวัติ</a>
            </li>

            <h6 style="margin-top: 12px;color: currentcolor;font-size: 0.8rem;"> โปรไฟล์ </h6 style="margin-top: 12px;color: currentcolor;font-size: 0.8rem;">
            <li class="<?php echo $pages2 == 'profile.php' ? 'custom_active' : '' ?>">
                <a href="../profile/profile.php" class="menu_color"><i class="zmdi zmdi-account-o zmdi-hc-fw"></i> โปรไฟล์</a>
            </li>

            <li class="<?php echo $pages2 == 'chang_password.php' ? 'custom_active' : '' ?>">
                <a href="../profile/chang_password.php" class="menu_color"><i class="zmdi zmdi-portable-wifi zmdi-hc-fw"></i> เปลี่ยนรหัสผ่าน</a>
            </li>
            <h6 style="margin-top: 12px;color: currentcolor;font-size: 0.8rem;"> ออกจากระบบ </h6 style="margin-top: 12px;color: currentcolor;font-size: 0.8rem;">
            <li>
                <a href="../logout.php" class="menu_color"><i class="zmdi zmdi-power-setting zmdi-hc-fw"></i> ออกจากระบบ</a>
            </li>

        </ul>
    </div>
</aside>