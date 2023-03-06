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
    </div>
</nav>
    <div class="inner-header" style="padding-top: 200px;">
    <div class="container-fluid">
    <div class="row justify-content-center">
    <div class="col-md-10 " style="padding-top:10px;">
    <div class="card shadow-lg mb-5" style="z-index:20;">
    <div class="card-body" style="color:black">
    
    <?php 
    if(isset($_GET['nik'])){
        include '../koneksi.php';
        $nomor=1;
        $nik = $_GET['nik'];
        $query = mysqli_query($koneksi,"SELECT pengaduan.isi_laporan, pengaduan.status, tanggapan.tanggapan 
        FROM tanggapan 
        LEFT JOIN pengaduan ON pengaduan.id_pengaduan = tanggapan.id_pengaduan 
        where pengaduan.nik=$nik");        
        $cek = mysqli_num_rows($query);
    ?>
    <?php if($cek || $cek > 0){?>
    
    <table class="table table-striped table-bordered" style="color:black">
        <thead>
            <tr>
                <th>No.</th>
                <th>Laporan</th>
                <th>Status</th>
                <th>Tanggapan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($konten = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$nomor."</td>";
                echo "<td>".$konten['isi_laporan']."</td>";
                echo "<td>".$konten['status']."</td>";
                echo "<td>".$konten['tanggapan']."</td>";
                echo "</tr>";
                $nomor++;
            }
            ?>
        </tbody>
    </table>
        <?php }else{?>
            <p>Pengaduan Belum Ditanggapi</p>
        <?php }?>
    <a href="cek-pengaduan.php" class="btn btn-success" type="submit" style="margin-bottom:12px; width:100px; float: right">KEMBALI</a>
    <?php }else{?>
    <form action="" method="get">
        <div class="card-body">
        <div class="form-group">
    <label for="formGroupExampleInput" style="float:left;">NIK :</label>
    <input type="number" class="form-control" name="nik" id="formGroupExampleInput" placeholder="Masukkan NIK Anda . . . ." required>
  </div>
    <button class="btn btn-success " type="submit" style="margin-bottom:12px; width:100px; float: right;">CEK</button>
        </div>
    </form>    
    <?php }?>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!--Waves Container-->
    <div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
        </svg>
    </div>
    <!--Waves end-->
</div>
</div>
<div class="content flex">

</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    // When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

 </script>
</html>