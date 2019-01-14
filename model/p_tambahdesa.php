<?php

include "../conf/koneksi.php";

$desa = $_POST['desa'];
$nilai = $_POST['nilai'];

$sql = "INSERT INTO desa (desa,nilai)
VALUES ('$desa', '$nilai')";
$q = $koneksi->query($sql);

if($q === TRUE){
	echo '<script>window.alert("Desa berhasil ditambahkan");window.location=("../view/home_admin.php");</script>';
}
else {
  echo "Terjadi kesalahan ".$koneksi->error;
}

$koneksi->close();

?>
