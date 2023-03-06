<?php
include '../koneksi.php';
if(isset($_GET['nik'])) {
    $nik = $_GET['nik'];

    $sql = "DELETE FROM masyarakat WHERE nik = $nik";
    $query = mysqli_query($koneksi, $sql);

    if($query) {
        header('location:masyarakat.php');
    } else {
        die ("GAGAL MENGHAPUS");
    }
}
 else {
    die ("AKSES DILARANG!!!");
 }
?>