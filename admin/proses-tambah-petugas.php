<?php

include '../koneksi.php';

if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $telp = $_POST['telp'];
    
    $result = mysqli_query($koneksi, "INSERT INTO petugas VALUES(NULL, '$nama', '$username', '$password', '$telp', 'petugas')");

    if($result){
        header('location:petugas.php?tambah-petugas=sukses');
    } else {
        header('location:petugas.php?tambah-petugas=gagal');
    }
} else {
    die("AKSES DILARANG!!!");
}

?>