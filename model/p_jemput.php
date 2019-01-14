<?php

include "../conf/koneksi.php";

$nik_pelapor = $_POST['nik_pelapor'];
$nama_pelapor = $_POST['nama_pelapor'];
$telepon_pelapor = $_POST['telepon_pelapor'];
$nik_korban = $_POST['nik_korban'];
$nama_korban = $_POST['nama_korban'];
$telepon_korban = $_POST['telepon_korban'];
$j_lansia = $_POST['j_lansia'];
$j_anak = $_POST['j_anak'];
$j_dewasa = $_POST['j_dewasa'];
$j_ternak = $_POST['j_ternak'];
$j_peliharaan = $_POST['j_peliharaan'];
$id_desa = $_POST['id_desa'];
$alamat_detail = $_POST['alamat_detail'];
$id_admin = $_POST['id_admin'];
$id_status = $_POST['id_status'];

$sql = "INSERT INTO jemput (nik_pelapor,nama_pelapor,telepon_pelapor,nik_korban,nama_korban,telepon_korban,j_lansia,j_anak,j_dewasa,j_ternak,j_peliharaan,id_desa,alamat_detail,id_admin,id_status)
VALUES ('$nik_pelapor', '$nama_pelapor', '$telepon_pelapor', '$nik_korban', '$nama_korban', '$telepon_korban', '$j_lansia', '$j_anak', '$j_dewasa', '$j_ternak', '$j_peliharaan','$id_desa','$alamat_detail', '$id_admin','$id_status')";
$q = $koneksi->query($sql);

if($q === TRUE){
	echo '<script>window.alert("Data berhasil ditambah");window.location=("../view/form_jemput.php");</script>';
}
else {
  echo "Terjadi kesalahan ".$koneksi->error;
}

$koneksi->close();

?>
