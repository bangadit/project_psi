<?php

include "../conf/koneksi.php";

$nama_admin = $_POST['nama_admin'];
$username = $_POST['username'];
$password = $_POST['password'];


$sql = "INSERT INTO admin (nama_admin,username,password)
VALUES ('$nama_admin', '$username', '$password')";
$q = $koneksi->query($sql);

if($q === TRUE){
	echo '<script>window.alert("Penjemput berhasil terdaftar");window.location=("../view/home_admin.php");</script>';
}
else {
  echo "Terjadi kesalahan ".$koneksi->error;
}

$koneksi->close();

?>
