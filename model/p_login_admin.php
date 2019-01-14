<?php

session_start();

include "../conf/koneksi.php";

$username = $koneksi->real_escape_string($_POST['username']);
$password = $koneksi->real_escape_string($_POST['password']);

$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$hasil = $koneksi->query($sql);
$q = $hasil->num_rows;
if ($q) {
  $cetak = $hasil->fetch_assoc();
  extract($cetak);
  $_SESSION['id_admin'] = $id_admin;
  echo '<script>window.location=("../view/home_admin.php");</script>';
}
else{
  echo '<script>window.alert("Maaf, Password atau Username anda salah!");window.location=("../index.php");</script>';
}

?>
