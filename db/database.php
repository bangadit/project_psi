<?php
$namaServer = "localhost";
$namaPengguna = "root";
$password = "";

$koneksi = new mysqli($namaServer, $namaPengguna, $password);

if ($koneksi->connect_error){
	die("Koneksi Gagal : ".$koneksi->connect_error."<br>");
}

$sql = "CREATE DATABASE project_psi";
$q = $koneksi->query($sql);
if ($q === TRUE) {
	echo "Basisdata 'project_psi' sukses dibuat";
}else {
	echo "Gagal membuat basisdata 'project_psi' ". $koneksi->error;
}
$koneksi->close();

?>
