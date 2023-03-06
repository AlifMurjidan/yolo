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
<nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top" style="height:70px;" id="navbar">
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
    <div class="inner-header" style="padding-top: 180px;">
    <div class="container-fluid">
    <div class="row justify-content-center">
    <div class="col-md-4 " style="padding-top:10px; ">
    <div class="card shadow-lg mb-5" style="z-index:20; min-height: 300px;">
    <form action="proses-login.php" method="post">
        <div class="card-body mt-2">
        <h4 class="text-center"><a href="../admin/login.php" style="color: #000000;">LOGIN</a></h4>
        <hr style="width: 70%;">
            <div class="form-group">
              <label for="nik" style="float:left;">NIK </label>
              <input type="nik" name="nik" class="form-control mb-4" id="nik" placeholder="Isi NIK Anda">
              <label for="password" style=" float:left;">Password</label>
              <input type="password" name="password" class="form-control mb-4" id="" placeholder="Isi Password Anda">  
              <hr>
              <p style=" float: left;">Belum punya akun ? <a href="registrasi.php" style="color: black;">Daftar</a></p>
              <button class="btn btn-success " name="button" type="submit" style="margin-bottom:12px; width:100px; float: right;" data-toggle="" data-target="">Kirim</button>
            </div>
        </div>
    </form>    
    </div>
    </div>
    </div>
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