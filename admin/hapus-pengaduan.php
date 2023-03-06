<?php
include '../koneksi.php';
if(isset($_GET['id_pengaduan'])) {
    $id = $_GET['id_pengaduan'];

    $sql = "DELETE FROM pengaduan WHERE id_pengaduan=$id";
    $query = mysqli_query($koneksi, $sql);

    if($query) {
        header('location: pengaduan.php');
    } else {
        die ("GAGAL MENGHAPUS");
    }
}
else {
    die ("AKSES DILARANG!!!");
}
?>