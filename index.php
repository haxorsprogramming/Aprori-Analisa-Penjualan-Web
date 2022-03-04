<?php
include('config/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Jepnidah Hasibuan">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Aplikasi Analisa Penjualan Apriori</title>
    <!-- Icons-->
    <link href="public/ladun/admin/asset/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="public/ladun/admin/asset/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="public/ladun/admin/asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="public/ladun/admin/asset/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="public/ladun/admin/asset/css/style.css" rel="stylesheet">
    <link href="public/ladun/admin/asset/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
</head>

<body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-group">
                    <div class="card p-4">
                        <div class="card-body">
                            <div style="text-align: center;">
                                <img src="https://s3.jagoanstorage.com/aditia-storage/asset/logo/uinsu.png" style="width: 200px;" />
                                <p class="text-muted" style="margin-bottom: -1px;">Aplikasi Analisa Penjualan</p>
                                <h3>Metode Apriori</h3>
                                <hr />
                                <h4>Login Administrator</h4>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-user"></i>
                                    </span>
                                </div>
                                <input class="form-control" type="text" placeholder="Username" id="txtUsername">
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-lock"></i>
                                    </span>
                                </div>
                                <input class="form-control" type="password" placeholder="Password" id="txtPassword">
                            </div>
                            <div class="row">
                                <div class="col-12" style="text-align: center;">
                                    <a href="javascript:void(0)" class="btn btn-primary px-4" id="btnLogin" onclick="prosesLogin()">Login</a>
                                </div>
                            </div>

                            <div style="margin-top:20px;text-align:center;">
                                Aplikasi Analisa Penjualan by <strong>Siti Nurhaliza Sofyan</strong><br />
                                Program Studi Ilmu Komputer, Fakultas Sains dan Teknologi<br />
                                Universitas Islam Negeri Sumatera Utara
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- CoreUI and necessary plugins-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    const server = "<?=$serverAddress; ?>";
</script>
<script src="public/ladun/admin/base/js/login.js"></script>
</html>