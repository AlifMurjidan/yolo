<?php
session_start();
include '../koneksi.php';
$nik=$_POST['nik'];
$password=md5($_POST['password']);

$data=mysqli_query($koneksi,"SELECT * FROM masyarakat WHERE nik='$nik' and password='$password'");

$cek=mysqli_num_rows($data);
if ($cek > 0) {
  $_SESSION['nik'] = $nik;
  $_SESSION['status'] = "login";
  foreach ($data as $key => $data ){    
      $_SESSION["nik"]= $data["nik"];
  }
  header("location:pengaduan.php");
}else {
  echo "<script>alert('NIK atau Password Anda masukkan salah!')</script>";
	echo "<script>document.location='login.php'</script>";
}
?>