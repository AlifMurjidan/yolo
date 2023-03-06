<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masyarakat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="header">
<nav class="navbar navbar-expand-sm navbar-light fixed-top bg-light" style="height:70px;" id="navbar">
    <div class="collapse navbar-collapse ml-5 px-2" id="navbarNav" style="font-size:20px;">
    <ul class="navbar-nav ml-3">
        <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Pengaduan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="cek-pengaduan.php">Cek Pengaduan</a>
        </li>
    </ul>
    </div>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        </ul>
        <a href="proses-logout.php"><button class="btn btn-danger " name="button" type="submit" style="float: right;">Logout</button></a>
    </div>
</nav>
    <div class="inner-header" style="padding-top: 110px;">
    <div class="container-fluid mt-5">
    <div class="row justify-content-center">
    <div class="col-md-10 " style="padding-top:10px;">
    <div class="card shadow-lg mb-5" style="z-index:20;">
         
        <div class="card-body"> 
    <form action="proses-pengaduan.php" method="post" enctype="multipart/form-data">
              <h5>NIK : <?= $_SESSION["nik"] ?></h5>
            <div class="form-group">
              <label for="isi_laporan" style="float:left; ">Isi Laporan :</label>
              <textarea class="form-control textarea" name="isi_laporan" id="isi_laporan" rows="2" placeholder="Silahkan masukkan laporan Anda . . . ."></textarea>
              <label for="foto">Foto :</label><br>
        <input type="file" name="foto" id="foto" required>
              <hr>
              <button class="btn btn-success " name="button" type="submit" style="margin-bottom:12px; width:100px; float: right;">Kirim</button>
            </div>
        </div>
    </form>    
    </div>
    </div>
    </div>
    </div>
    </div>
    
</body>
</html>