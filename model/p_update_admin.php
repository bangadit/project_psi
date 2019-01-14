<?php

include "../conf/koneksi.php";
$sql = "SELECT * FROM jemput
        LEFT JOIN desa
        ON desa.id_desa = jemput.id_desa
        LEFT JOIN status
        ON status.id_status = jemput.id_status
        LEFT JOIN admin
        ON admin.id_admin = jemput.id_admin";

$hasil = $koneksi->query($sql);

if (isset($_POST['submit'])){
  $nik_pelapor = $_POST['nik_pelapor'];
  $id_desa = $_POST['id_desa'];
  $alamat_detail = $_POST['alamat_detail'];

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

  $id_admin = $_POST['id_admin'];
  $id_status = $_POST['id_status'];
}

$sql1 = "UPDATE jemput set nik_pelapor = '$nik_pelapor',
id_desa = '$id_desa',
alamat_detail = '$alamat_detail',

j_lansia = '$j_lansia',
j_anak = '$j_anak',
j_dewasa = '$j_dewasa',

j_ternak = '$j_ternak',
j_peliharaan = '$j_peliharaan',

nama_pelapor = '$nama_pelapor',
telepon_pelapor = '$telepon_pelapor',

nik_korban = '$nik_korban',
nama_korban = '$nama_korban',
telepon_korban = '$telepon_korban',
id_admin='$id_admin',
id_status='$id_status'

WHERE nik_pelapor='$nik_pelapor'";

$q = $koneksi->query($sql1);

if($q === TRUE){
	echo '<script>window.location=("../view/home_admin.php");
  </script>';
}
else {
  echo "Terjadi kesalahan ".$koneksi->error;
}

$koneksi->close();

?>
