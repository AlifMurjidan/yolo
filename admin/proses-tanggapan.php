<?php
include '../koneksi.php';

if(isset($_POST['submit'])) {
    $id_pengaduan = $_POST['id_pengaduan'];
    $tgl_tanggapan = date('Y-m-d h:i:s');
    $tanggapan = $_POST['tanggapan'];
    $id_petugas = $_POST['id_petugas'];

    $result = mysqli_query($koneksi, "INSERT INTO tanggapan VALUES(null,'$id_pengaduan','$tgl_tanggapan','$tanggapan','$id_petugas')");

    if($result){
        header('location: pengaduan.php?status=sukses');
    } else {
        header('location: pengaduan.php?status=gagal');
    }
} else {
    die("AKSES DILARANG!!!");
}
?>