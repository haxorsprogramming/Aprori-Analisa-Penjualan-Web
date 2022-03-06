<?php
include('../config/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Aplikasi Analisa Penjualan - Apriori</title>
    <!-- Icons-->
    <link href="../public/ladun/admin/asset/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="../public/ladun/admin/asset/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="../public/ladun/admin/asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../public/ladun/admin/asset/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="../public/ladun/admin/asset/css/style.css" rel="stylesheet">
    <link href="../public/ladun/admin/asset/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <script src="../public/ladun/admin/asset/vendors/jquery/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img class="navbar-brand-full" src="https://s3.jagoanstorage.com/aditia-storage/asset/logo/uinsu.png" width="39" alt="Uinsu Logo">
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h4>Aplikasi Analisa Penjualan Apriori</h4>
        <ul class="nav navbar-nav ml-auto">

            <li class="nav-item d-md-down-none nama_admin">
                Halo, Administrator
            </li>
            <li class="nav-item dropdown" style="margin-right: 25px">
                <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="img-avatar" src="" alt="-">
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong>Account</strong>
                    </div>
                    <a class="dropdown-item" href="../index.php">
                        <i class="fa fa-lock"></i> Logout</a>
                </div>
            </li>
        </ul>
    </header>
    <div class="app-body" id="divApp">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" @click="menuAtc('mainApp/dashboard.php', 'Dashboard')">
                            <i class="nav-icon icon-speedometer"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" @click="menuAtc('mainApp/dataProduk.php', 'Data Produk')">
                            <i class="nav-icon icon-list"></i> Data Produk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" @click="menuAtc('mainApp/dataTransaksi.php', 'Data Transaksi')">
                            <i class="nav-icon icon-list"></i> Data Transaksi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" @click="menuAtc('mainApp/prosesApriori.php', 'Proses Apriori')">
                            <i class="nav-icon icon-list"></i> Proses Apriori
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" @click="menuAtc('admin/main-app/jenis-amalan/list', 'Jenis Amalan')">
                            <i class="nav-icon icon-list"></i> Laporan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">
                            <i class="nav-icon icon-list"></i> Logout
                        </a>
                    </li>
                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>

        <main class="main">
            <!-- Breadcrumb-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#!">Home</a></li>
                <li class="breadcrumb-item active"></li>
            </ol>
            <div class="container-fluid">
                <div id="divUtama">
                    asdsa
                </div>
            </div>
        </main>




    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js" integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../public/ladun/admin/asset/vendors/popper.js/js/popper.min.js"></script>
    <script src="../public/ladun/admin/asset/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="../public/ladun/admin/asset/vendors/pace-progress/js/pace.min.js"></script>
    <script src="../public/ladun/admin/asset/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="../public/ladun/admin/asset/vendors/@coreui/coreui/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <!-- <script src="../asset/vendors/chart.js/js/Chart.min.js"></script> -->
    <script src="../public/ladun/admin/asset/vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script>
       const server = "<?=$serverAddress; ?>";
    </script>
    <script src="../public/ladun/admin/base/js/mainApp.js"></script>

</body>

</html>