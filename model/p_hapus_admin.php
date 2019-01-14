<?php
include "../conf/koneksi.php";
$nik_pelapor = $_GET['nik_pelapor'];
$sql = "DELETE FROM jemput WHERE nik_pelapor='$nik_pelapor'";
$hasil = $koneksi->query($sql);
if ($hasil === TRUE){
  echo '<script>window.location=("../view/home_admin.php");</script>';
}else{
	echo "Hapus data gagal. pesan error".$koneksi->error;
}
$koneksi->close();
?>
