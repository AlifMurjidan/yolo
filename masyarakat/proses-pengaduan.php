<?php
session_start();
include("../koneksi.php");

if (isset($_POST['button'])) {
    $tanggal=date("Y-m-d H:i:s");
    $laporan=$_POST['isi_laporan'];
    $ekstensi_diperbolehkan	= array('png','jpg');
    $nama = $_FILES['foto']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['foto']['size'];
    $file_tmp = $_FILES['foto']['tmp_name'];	
    $nik = $_SESSION['nik'];
    
    // var_dump($nama);
    if(in_array($ekstensi, $ekstensi_diperbolehkan) == true){
        if($ukuran < 10440700){			
            move_uploaded_file($file_tmp, 'foto/'.$nama);
            $query = mysqli_query($koneksi,"INSERT INTO pengaduan VALUES(NULL,'$tanggal','$nik','$laporan','$nama','0')");
            if($query){
                header('Location: pengaduan.php?status=sukses');
            } else{
                header('Location: pengaduan.php?status=gagal');
            }
        } else{
            die("Akses dilarang.....");
        }
    }
}
?>