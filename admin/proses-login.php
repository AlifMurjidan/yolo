<?php
session_start();
include '../koneksi.php';
$username=$_POST['username'];
$password=md5($_POST['password']);

$data=mysqli_query($koneksi,"SELECT * FROM petugas WHERE username='$username' and password='$password'");
// var_dumb($data);
$cek=mysqli_num_rows($data);
$w=mysqli_fetch_array($data);
if ($cek > 0) {
  $_SESSION['username'] = $w['username'];
  $_SESSION['password'] = $w['password'];
  $_SESSION['level'] = $w['level'];

  $_SESSION['login'] = "Y";
  header("location:dashboard.php");
}else {
  echo "<script>alert('Username atau Password anda salah!')</script>";
	echo "<script>document.location='login.php'</script>";
}
 ?>
