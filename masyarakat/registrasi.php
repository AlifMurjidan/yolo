<?php

require '../koneksi.php';

session_start();

if (isset($_POST['nama']) && isset($_POST['password'])){
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "INSERT INTO `masyarakat` (nik, nama, telp, username, password) VALUES ('$nik','$nama','$telp', '$username','$password')";
    $result = mysqli_query($koneksi, $query);
    if($result){
       header("Location:login.php");
    }
    else
    {
        echo "Maaf, Anda gagal melakukan registrasi!!!";
    }    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Registrasi</title>
</head>
<body>
<main>
    <form action="registrasi.php" method="POST">
        <h1>FORM REGISTRASI</h1>
        <div>
            <label for="nik">NIK :</label>
            <input type="text" name="nik" id="nik" required>
        </div>
        <div>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" required>
        </div>
        <div>
            <label for="telp">Telepon :</label>
            <input type="text" name="telp" id="telp" required>
        </div>
        <div>
            <label for="username">Username :</label>
            <input type="username" name="username" id="username" required>
        </div>
        <div>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">Register</button>
        <footer>Sudah punya akun? <a href="login.php">Login</a></footer>
    </form>
</main>
</body>
</html>