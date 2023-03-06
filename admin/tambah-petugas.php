<?php
session_start();
require '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masyarakat</title>
</head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
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
            <h4 class="display-5 mb-4">TAMBAH PETUGAS</h4>
            <hr class="heigth: 10px;">
                                
          <div class="col-md-12 ">
            <div class="card shadow-lg mb-5" >    
            <div class="card-body">
                <form action="proses-tambah-petugas.php" method="post" class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="inputAddress">Nama</label>
                    <input type="text" maxlength="35" class="form-control" id="" name="nama" placeholder="Masukkan Nama" required>
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" maxlength="25" class="form-control" id="" name="username" placeholder="Masukkan Username" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" maxlength="32" class="form-control" id="" name="password" placeholder="Masukkan Password" required>
                </div>
                <div class="form-group">
                    <label for="">No. Telepon</label>
                    <input type="text" maxlength="13" class="form-control" id="" name="telp" placeholder="Masukkan No. Telepon" required>
                </div>
                <button type="submit" class="btn btn-info mt-5 float-right" style="width: 10%" name="submit">Daftar</button>
                </form>

                </div>  
                </div>
            </div>
        </div>
    
</body>
</html>