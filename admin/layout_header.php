<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/plugins/images/favicon.ico">
    <title>Selamat Datang di Wanoz Laundry</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="../assets/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../assets/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../assets/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="../assets/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="../assets/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="../assets/DataTables/datatables.min.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo align-items-center justify-content-center" href="index.php">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b>
                            Wanoz Laundry
                        </b>
                    </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                    <li>
                        <a class="profile-pic"> <img src="../assets/plugins/images/users/user.png" alt="user-img" width="36" class="img-circle">Admin</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 60px 0 0;">
                        <a href="index.php" class="waves-effect <?php if ($title == 'dashboard') {
                                                                    echo 'active';
                                                                } ?>"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="outlet.php" class="waves-effect <?php if ($title == 'outlet') {
                                                                        echo 'active';
                                                                    } ?>"><i class="fa fa-suitcase fa-fw" aria-hidden="true"></i> Data Outlet</a>
                    </li>
                    <li>
                        <a href="paket.php" class="waves-effect <?php if ($title == 'paket') {
                                                                    echo 'active';
                                                                } ?>"><i class="fa fa-archive fa-fw" aria-hidden="true"></i> Data Paket</a>
                    </li>

                    <li>
                        <a href="pelanggan.php" class="waves-effect <?php if ($title == 'pelanggan') {
                                                                        echo 'active';
                                                                    } ?>"><i class="fa fa-users fa-fw" aria-hidden="true"></i> Data Pelanggan</a>
                    </li>
                    <li>
                        <a href="transaksi.php" class="waves-effect <?php if ($title == 'transaksi') {
                                                                        echo 'active';
                                                                    } ?>"><i class="fa fa-shopping-cart fa-fw" aria-hidden="true"></i> Data Transaksi</a>
                    </li>
                    <li>
                        <a href="pengguna.php" class="waves-effect <?php if ($title == 'pengguna') {
                                                                        echo 'active';
                                                                    } ?>"><i class="fa fa-user fa-fw" aria-hidden="true"></i> Data Pengguna</a>
                    </li>
                    <li>
                        <a href="laporan.php" class="waves-effect <?php if ($title == 'laporan') {
                                                                        echo 'active';
                                                                    } ?>"><i class="fa fa-print fa-fw" aria-hidden="true"></i> Data Laporan</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-power-off fa-fw" aria-hidden="true"></i> Logout</a>
                    </li>
                </ul>
            </div>

        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">