<?php
session_start();
include '../koneksi.php';
if ($_SESSION['login'] != 'Y') {
    header('location:login-level.php?module=home');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masyarakat</title>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="main.css">
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark py-3">
        <h2 style="margin-left: 22%; color: white">Layanan Aspirasi dan Pengaduan Masyarakat</h2>
    </nav>
    <div class="row" id="body-row">
        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
            <ul class="list-group">
                <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                    <small>MAIN MENU</small>
                </li>
                <a href="dashboard.php" data-toggle="collapsed" aria-expended="false" class="bg-white list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justofy-content-start align-items-center">
                    <span class="menu-collapsed">Dashboard</span>
                </div>
                </a>
                <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>OPTIONS</small>
                </li>
                <?php
                if ($_SESSION['level'] == 'admin') {
                ?>
                <a href="masyarakat.php" data-toggle="collapsed" aria-expended="false" class="bg-white list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justofy-content-start align-items-center">
                    <span class="menu-collapsed">Masyarakat</span>
                </div>
                </a>
                <a href="petugas.php" data-toggle="collapsed" aria-expended="false" class="bg-white list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justofy-content-start align-items-center">
                    <span class="menu-collapsed">Petugas</span>
                </div>
                </a>
                <?php
                }
                ?>
                <a href="pengaduan.php" data-toggle="collapsed" aria-expended="false" class="bg-white list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justofy-content-start align-items-center">
                    <span class="menu-collapsed">Pengaduan</span>
                </div>
                </a>
                <a href="login.php" data-toggle="sidebar-colapse" class="bg-white list-group-item list-group-item-action d-flex align-items-center">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span id="collapse-text" class="menu-collapsed">Logout</span>
                </div>
            </a>
            </ul>
        </div>
    

    <div class="col p-4">
        <h4 class="display-5 mb-4"><i class="fas ta-tachometer-alt mr-2"></i>DASHBOARD</h4>
        <hr class="height: 10px;">
        <div class="row text-black">
             <?php
             if($_SESSION['level'] == 'admin') {
            ?>
            <div class="shadow-lg p-3 mb-4 ml-4 bg-body rounded" style="width: 18rem;">
                <div class="card-body overview-item-c1">
                    <div class="card-body-icon">
                    </div>
                    <h5 class="card-title">MASYARAKAT</h5>
                    <div class="display-4">
                        <?php
                        $sql = "SELECT * FROM masyarakat";
                        $aksi = mysqli_query($koneksi, $sql);
                        echo mysqli_num_rows($aksi);
                        ?>
                    </div>
                    <a href="masyarakat.php"><p class="card-text text-black">Lihat Detail</p></a>
                </div>
            </div>
            <div class="shadow-lg p-3 mb-4 ml-4 bg-body rounded" style="width: 18rem;">
                <div class="card-body overview-item-c1">
                    <div class="card-body-icon">
                    </div>
                    <h5 class="card-title">PETUGAS</h5>
                    <div class="display-4">
                        <?php
                        $sql = "SELECT * FROM petugas";
                        $aksi = mysqli_query($koneksi, $sql);
                        echo mysqli_num_rows($aksi);
                        ?>
                    </div>
                    <a href="petugas.php"><p class="card-text text-black">Lihat Detail</p></a>
                </div>
            </div>
            <?php
             }
            ?>
            <div class="shadow-lg p-3 mb-4 ml-4 bg-body rounded" style="width: 18rem;">
                <div class="card-body overview-item-c1">
                    <div class="card-body-icon">
                    </div>
                    <h5 class="card-title">PENGADUAN</h5>
                    <div class="display-4">
                        <?php
                        $sql = "SELECT * FROM pengaduan";
                        $aksi = mysqli_query($koneksi, $sql);
                        echo mysqli_num_rows($aksi);
                        ?>
                    </div>
                    <a href="pengaduan.php"><p class="card-text text-black">Lihat Detail</p></a>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>