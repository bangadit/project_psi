<?php

session_start();

if (!isset($_SESSION['id_admin'])) {
  echo '<script>window.alert("Maaf, anda wajib login dahulu");window.location=("../index.php");</script>';
}

else{
  include "../conf/koneksi.php";
  $id_admin = $_SESSION['id_admin'];
  $sql = "SELECT * FROM admin WHERE id_admin = '$id_admin'";
  $hasil=$koneksi->query($sql);
  $cetak=$hasil->fetch_assoc();
  extract($cetak);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin - Sistem Penjemput Korban Bencana Alam</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="ZOOM">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/png" href="../style/images/icon.png"/>
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/css/font-awesome.min.css">
    <link rel="stylesheet" href="../style/css/animate.css">
    <link rel="stylesheet" href="../style/css/owl.carousel.css">
    <link rel="stylesheet" href="../style/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../style/css/tooplate-style.css">
  </head>
  <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <header>
      <div class="container">
        <div class="row">

          <div class="col-md-4 col-sm-5">
            <p>Jemban - Sistem Penjemput Korban Bencana Alam</p>
          </div>
          <div class="col-md-8 col-sm-7 text-align-right">
            <span class="phone-icon"><i class="fa fa-phone"></i><a href="tel:+6282177329234"> +62 821 7732 9234</a></span>
            <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 8:00 AM - 17:00 PM (Mon-Fri)</span>
            <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="mailto:bangadit.irawan@gmail.com">mail@adtputr.com</a></span>
          </div>

        </div>
      </div>
    </header>

    <section id="appointment" data-stellar-background-ratio="3">
        <form action="../model/p_tambahpenjemput.php" method="post">
          <div class="modal fade" role="dialog" id="tambahpenjemput">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title">
                    Tambah Penjemput
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </h3>
                </div>
                <div class="modal-body">

                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_admin" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                  </div>
                </div>

                <div class="modal-footer">
                  <button type="submit" class="section-btn btn btn-default smoothScroll">TAMBAH</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </section>

      <section id="appointment" data-stellar-background-ratio="3">
          <form action="../model/p_tambahdesa.php" method="post">
            <div class="modal fade" role="dialog" id="tambahdesa">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 class="modal-title">
                      Tambah Desa
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </h3>
                  </div>
                  <div class="modal-body">

                    <div class="form-group">
                      <label>Nama Desa</label>
                      <input type="text" name="desa" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label>Jarak Desa ke Gunung</label>
                      <input type="number" name="nilai" class="form-control" required>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button type="submit" class="section-btn btn btn-default smoothScroll">TAMBAH</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </section>

    <section class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
          </button>
          <a href="../index.php" onClick="return confirm('Anda harus logout untuk melihat, apakah anda yakin?')">
            <img style="margin-top:10px;" src="../style/images/logo.png" width="230" alt="">
          </a>
        </div>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="" data-toggle="modal" data-target="#tambahpenjemput">Tambah Penjemput</a></li>
            <li><a href="" data-toggle="modal" data-target="#tambahdesa">Tambah Desa</a></li>
            <li><a>|</a></li>
              <li><a><?php echo "$nama_admin";?></a></li>
              <li><a href="../model/p_logout_admin.php" onClick="return confirm('Apakah anda yakin ?')">Logout</a></li>
          </ul>
        </div>

      </div>
    </section>



    <section id="appointment" data-stellar-background-ratio="3">
      <div class="container">
        <?php
        include "../conf/koneksi.php";
        $nik_pelapor = $_GET['nik_pelapor'];
        $sql = "SELECT * FROM jemput
                LEFT JOIN desa
                ON desa.id_desa = jemput.id_desa
                LEFT JOIN status
                ON status.id_status = jemput.id_status
                LEFT JOIN admin
                ON admin.id_admin = jemput.id_admin
                WHERE nik_pelapor='$nik_pelapor'";
        $hasil = $koneksi->query($sql);
        if ($hasil->num_rows) {
          echo "<form action='p_update_admin.php' method='POST'>";
        	while ($baris = $hasil->fetch_array()) {
        	  $nik_pelapor = $baris['nik_pelapor'];
            $nama_korban = $baris['nama_korban'];
            $desa = $baris['desa'];
            $alamat_detail = $baris['alamat_detail'];

            $nama_pelapor = $baris['nama_pelapor'];
            $telepon_pelapor = $baris['telepon_pelapor'];

            $nik_korban = $baris['nik_korban'];
            $telepon_korban = $baris['telepon_korban'];

            $j_lansia = $baris['j_lansia'];
            $j_anak = $baris['j_anak'];
            $j_dewasa = $baris['j_dewasa'];

            $j_ternak = $baris['j_ternak'];
            $j_peliharaan = $baris['j_peliharaan'];

            $nama_admin = $baris['nama_admin'];
            $status = $baris['status'];
        		?>
            <h3><?php echo "$nama_korban"; ?></h3>

            <div class="col-md-12 col-sm-12">
              <hr>
            </div>

              <!-- <div class="col-md-6 col-sm-6">
                <label for="desa">Desa</label>
                <input class="form-control" type='text' name='id_desa' readonly
                value='<?php echo "$baris[desa]";?>'>
              </div> -->

              <div class="col-md-6 col-sm-6">
                <label for="desa">Desa</label>
                <select class="form-control" type='text' name='id_desa'>
                <?php
                include "../conf/koneksi.php";
                $sql = "SELECT * FROM desa";
                $hasil = $koneksi->query($sql);
                if ($hasil->num_rows) {
                  while ($cetak = $hasil->fetch_assoc()) {
                    extract($cetak);
                    if ($baris['id_desa'] == "$id_desa") echo "<option value='$id_desa' selected>$desa</option>";
                    else echo "<option value='$id_desa' disabled>$desa</option>";
                  }
                }
                ?>
                </select>
              </div>

              <div class="col-md-6 col-sm-6">
                <label for="alamat_detail">Alamat Detail</label>
                <input class="form-control" type='text' name='alamat_detail' readonly
                value='<?php echo "$baris[alamat_detail]";?>'>
              </div>

              <div class="col-md-6 col-sm-6">
                <label for="status">Status</label>
                <select class="form-control" type='text' name='id_status'>
                <?php
                include "../conf/koneksi.php";
                $sql = "SELECT * FROM status";
                $hasil = $koneksi->query($sql);
                if ($hasil->num_rows) {
                  while ($cetak = $hasil->fetch_assoc()) {
                    extract($cetak);
                    if ($baris['id_status'] == "$id_status") echo "<option value='$id_status' selected>$status</option>";
                    else echo "<option value='$id_status'>$status</option>";
                  }
                }
                ?>
                </select>
              </div>

                <div class="col-md-6 col-sm-6">
                  <label for="nama_admin">Penjemput</label>
                  <select class="form-control" type='text' name='id_admin'>
                  <?php
                  include "../conf/koneksi.php";
                  $sql = "SELECT * FROM admin";
                  $hasil = $koneksi->query($sql);
                  if ($hasil->num_rows) {
                    while ($cetak = $hasil->fetch_assoc()) {
                      extract($cetak);
                      if ($baris['id_admin'] == "$id_admin") echo "<option value='$id_admin' selected>$nama_admin</option>";
                      else echo "<option value='$id_admin'>$nama_admin</option>";
                    }
                  }
                  ?>
                  </select>
                </div>

              <div class="col-md-12 col-sm-12">
                <p>
                  <input class="btn btn-link" type="submit" name="submit" value="UPDATE" onClick="return confirm('Apakah anda yakin?')">
                  <a class="btn btn-link" href='../view/home_admin.php'>CANCEL</a>
                  <a class='btn btn-link' href='p_hapus_admin.php?nik_pelapor=<?php echo "$nik_pelapor" ?>' onClick="return confirm('Apakah anda yakin ?')">HAPUS</a>
                </p>
              </div>

              <h3>Informasi</h3><br>

              <div class="col-md-4 col-sm-4">
                <label for="nik_pelapor">NIK Pelapor</label>
                <input class="form-control" type='text' name='nik_pelapor' readonly
                value='<?php echo "$baris[nik_pelapor]";?>'>
              </div>

              <div class="col-md-4 col-sm-4">
                <label for="nama_pelapor">Nama Pelapor</label>
                <input class="form-control" type='text' name='nama_pelapor' readonly
                value='<?php echo "$baris[nama_pelapor]";?>'>
              </div>

              <div class="col-md-4 col-sm-4">
                <label for="telepon_pelapor">Telepon Pelapor</label>
                <input class="form-control" type='text' name='telepon_pelapor' readonly
                value='<?php echo "$baris[telepon_pelapor]";?>'>
              </div>

              <div class="col-md-1 col-sm-1 visible-sm visible-xs">
                <label for="">Tlp:</label>
                <a class="btn btn-link" href="tel:<?php echo "$baris[telepon_pelapor]";?>"> CALL </a>
              </div>

              <div class="col-md-12 col-sm-12">
                <hr>
              </div>

              <div class="col-md-4 col-sm-4">
                <label for="nik_korban">NIK Korban</label>
                <input class="form-control" type='text' name='nik_korban' readonly
                value='<?php echo "$baris[nik_korban]";?>'>
              </div>

              <div class="col-md-4 col-sm-4">
                <label for="nama_korban">Nama Korban</label>
                <input class="form-control" type='text' name='nama_korban' readonly
                value='<?php echo "$baris[nama_korban]";?>'>
              </div>

              <div class="col-md-4 col-sm-4">
                <label for="telepon_korban">Telepon Korban</label>
                <input class="form-control" type='text' name='telepon_korban' readonly
                value='<?php echo "$baris[telepon_korban]";?>'>
              </div>

              <div class="col-md-1 col-sm-1 visible-sm visible-xs">
                <label for="">Tlp:</label>
                <a class="btn btn-link" href="tel:<?php echo "$baris[telepon_korban]";?>"> CALL </a>
              </div>

              <div class="col-md-12 col-sm-12">
                <hr>
              </div>

              <div class="col-md-2 col-sm-2">
                <label for="j_lansia">Lansia</label>
                <input class="form-control" type='text' name='j_lansia' readonly
                value='<?php echo "$baris[j_lansia]";?>'>
              </div>

              <div class="col-md-2 col-sm-2">
                <label for="j_anak">Anak-Anak</label>
                <input class="form-control" type='text' name='j_anak' readonly
                value='<?php echo "$baris[j_anak]";?>'>
              </div>

              <div class="col-md-2 col-sm-2">
                <label for="j_dewasa">Dewasa</label>
                <input class="form-control" type='text' name='j_dewasa' readonly
                value='<?php echo "$baris[j_dewasa]";?>'>
              </div>

              <div class="col-md-12 col-sm-12">
                <hr>
              </div>

              <div class="col-md-2 col-sm-2">
                <label for="j_ternak">Hewan Ternak</label>
                <input class="form-control" type='text' name='j_ternak' readonly
                value='<?php echo "$baris[j_ternak]";?>'>
              </div>

              <div class="col-md-2 col-sm-2">
                <label for="j_peliharaan">Hewan Peliharaan</label>
                <input class="form-control" type='text' name='j_peliharaan' readonly
                value='<?php echo "$baris[j_peliharaan]";?>'>
              </div>

              <div class="col-md-12 col-sm-12">
                <hr>
              </div>

              <div class="col-md-2 col-sm-2">
                <label for="desa">Desa</label>
                <input class="form-control" type='text' name='desa' readonly
                value='<?php echo "$baris[desa]";?>'>
              </div>

              <div class="col-md-12 col-sm-12">
                <hr>
              </div>

              <div class="col-md-6 col-sm-6">
                <label for="alamat_detail">Alamat Detail</label>
                <textarea class="form-control" style="resize: none;" readonly name="name" rows="5" cols="50"><?php echo "$baris[alamat_detail]";?></textarea>
              </div>




            <?php
          }
        }
        $koneksi->close();
        ?>
      </div>
    </section>




    <footer data-stellar-background-ratio="5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="footer-thumb">
              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
              <p>Silahkan hubungi kami secara langsung jika ada kendala dalam proses penjemputan.</p>

              <div class="contact-info">
                <p><i class="fa fa-phone"></i> +62-821-7732-9234</p>
                <p><i class="fa fa-envelope-o"></i> <a href="mailto:bangadit.irawan@gmail.com">mail@adtputr.com</a></p>
              </div>

            </div>
          </div>

          <div class="col-md-6 col-sm-6">
            <div class="footer-thumb">

              <div class="opening-hours">
                <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                <p>Monday - Friday <span>08:00 AM - 17:00 PM</span></p>
                <p>Saturday <span>08:00 AM - 14:00 PM</span></p>
                <p>Sunday <span>Closed</span></p>
              </div>

              <ul class="social-icon">
                <li><a href="https://www.facebook.com/adityacakil" class="fa fa-facebook"></a></li>
                <li><a href="https://www.instagram.com/adtputr" class="	fa fa-instagram"></a></li>
                <li><a href="https://www.youtube.com/channel/UCny9g9FHbEMOovZv6KLsLaQ?view_as=subscriber" class="fa fa-youtube-play"></a></li>
              </ul>

            </div>
          </div>

          <div class="col-md-12 col-sm-12 border-top">
            <div class="col-md-10 col-sm-12">
              <div class="copyright-text">
                <p>Copyright &copy; 2018 Zoom Studio</p>
              </div>
            </div>

            <div class="col-md-2 col-sm-2 text-align-center">
              <div class="angle-up-btn">
                <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </footer>

    <script src="../style/js/jquery.js"></script>
    <script src="../style/js/bootstrap.min.js"></script>
    <script src="../style/js/jquery.sticky.js"></script>
    <script src="../style/js/jquery.stellar.min.js"></script>
    <script src="../style/js/wow.min.js"></script>
    <script src="../style/js/smoothscroll.js"></script>
    <script src="../style/js/owl.carousel.min.js"></script>
    <script src="../style/js/custom.js"></script>

  </body>
</html>
