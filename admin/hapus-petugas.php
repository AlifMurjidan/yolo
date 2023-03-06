<?php
include '../koneksi.php';
if(isset($_GET['id_petugas'])){
    $id = $_GET['id_petugas'];

    $sql = "DELETE FROM petugas WHERE id_petugas = $id";
    $query = mysqli_query($koneksi, $sql);

    if($query) {
        header('location: petugas.php');
    } else {
        die ("GAGAL MENGAPUS");
    }
}
?>