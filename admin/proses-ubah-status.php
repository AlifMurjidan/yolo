<?php
include '../koneksi.php';
if(isset($_POST['submit'])) {
    $id_pengaduan = $_POST['id_pengaduan'];
    $tgl_pengaduan = $_POST['tgl_pengaduan'];
    $nik = $_POST['nik'];
    $isi_laporan = $_POST['isi_laporan'];
    $status = $_POST['status'];
    $tgl_tanggapan = date('Y-m-d h:i:s');
    $tanggapan = $_POST['tanggapan'];
    $id_petugas = $_POST['id_petugas'];

    $sql = "UPDATE pengaduan SET tgl_pengaduan='$tgl_pengaduan', nik='$nik', isi_laporan='$isi_laporan', status='$status' WHERE id_pengaduan=$id_pengaduan";
    $query = mysqli_query($koneksi, $sql);

    if($query) {
        header('location: pengaduan.php');
    } else {
        die("GAGAL MENYIMPAN PERUBAHAN");
    }
} else {
    die ("AKSES DILARANG!!!");
}
?>