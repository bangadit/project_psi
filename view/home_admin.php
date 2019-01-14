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

    <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>

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
                      <label>Jarak Desa ke Gunung (meter)</label>
                      <input type="number" min="0" name="nilai" class="form-control" required>
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



    <div class="table-responsive">
    <div class="container">
      <?php
      $sql = "SELECT * FROM jemput
              LEFT JOIN desa
              ON desa.id_desa = jemput.id_desa
              LEFT JOIN status
              ON status.id_status = jemput.id_status
              LEFT JOIN admin
              ON admin.id_admin = jemput.id_admin
              WHERE status.id_status = 1 ORDER BY preferensi1 DESC";

      $hasil = $koneksi->query($sql);

      ?>
      <table style="margin-top:10px;" class="table table-bordered text-center col-md-12">
        <h5><b>Menunggu</b></h5>
      <tr class="active">
        <th width="70" class="text-center">NO</th>
        <th width="400" class="text-center">NAMA KORBAN</th>
        <th width="250" class="text-center">TELEPON KORBAN</th>
        <th width="200" class="text-center">DESA</th>
      </tr>
      <?php
      $nomor = 0;
      if ($hasil->num_rows > 0){
        while ($baris = $hasil->fetch_assoc()){
          $nik_pelapor = $baris['nik_pelapor'];
          $nama_korban = $baris['nama_korban'];
          $telepon_korban = $baris['telepon_korban'];
          $desa = $baris['desa'];

      $carimax1 = "SELECT min(nilai) AS min1,
            max(j_lansia) AS max1,
            max(j_anak) AS max2,
            max(j_dewasa) AS max3,
            max(j_ternak) as max4,
            max(j_peliharaan) as max5
            FROM jemput JOIN desa ON desa.id_desa = jemput.id_desa
            WHERE id_status = '1'";
      $q1 = $koneksi->query($carimax1);
      $m1 = $q1->fetch_assoc();


      $ndesa = $m1['min1']/$baris['nilai'];

      $nlansia = $baris['j_lansia']/$m1['max1'];
      $nanak = $baris['j_anak']/$m1['max2'];
      $ndewasa = $baris['j_dewasa']/$m1['max3'];

      $nternak = $baris['j_ternak']/$m1['max4'];
      $npeliharaan = $baris['j_peliharaan']/$m1['max5'];
      $preferensi1 = (0.7*$ndesa)+(0.08*$nlansia)+(0.07*$nanak)+(0.06*$ndewasa)+(0.05*$nternak)+(0.04*$npeliharaan);

      $input = "UPDATE jemput set preferensi1='$preferensi1'
                WHERE nik_pelapor='$nik_pelapor'";
      $qinput = $koneksi->query($input);

      ?>
          <tr>
            <td>
              <?php echo $nomor=$nomor+1;?>
            </td>
            <td>
              <a class='btn btn-link' href='../model/p_edit_admin.php?nik_pelapor=<?php echo "$nik_pelapor" ?>'>
              <?php echo "$nama_korban" ?>
              </a>
            </td>



            <td>
              <a style='color:#a5c422;' href='tel:<?php echo "$telepon_korban" ?>'><?php echo "$telepon_korban" ?></a>
            </td>
            <td><?php echo "$desa" ?></td>
            <!-- <td><?php echo "$ndesa" ?></td>
            <td><?php echo "$nlansia" ?></td>
            <td><?php echo "$nanak" ?></td>
            <td><?php echo "$ndewasa" ?></td>
            <td><?php echo "$nternak" ?></td>
            <td><?php echo "$npeliharaan" ?></td>
            <td><?php echo "$preferensi1" ?></td> -->
          </tr>
      <?php
        }

      }

      $sql1 = "SELECT * FROM jemput
              LEFT JOIN desa
              ON desa.id_desa = jemput.id_desa
              LEFT JOIN status
              ON status.id_status = jemput.id_status
              LEFT JOIN admin
              ON admin.id_admin = jemput.id_admin
              WHERE status.id_status = 2 ORDER BY preferensi1 DESC";

      $hasil1 = $koneksi->query($sql1);
      ?>
      <table style="margin-top:10px;" class="table table-bordered text-center col-md-12">
              <div class="col-md-12 col-sm-12">
                <hr>
              </div>
              <h5><b>Penjemputan</b></h5>
            <tr class="warning">
              <th width="70" class="text-center">NO</th>
              <th width="400" class="text-center">NAMA KORBAN</th>
              <th width="250" class="text-center">TELEPON KORBAN</th>
              <th width="200" class="text-center">DESA</th>
            </tr>
      <?php
      $nomor = 0;
      if ($hasil1->num_rows > 0){
        while ($baris = $hasil1->fetch_assoc()){
          $nik_pelapor = $baris['nik_pelapor'];
          $nama_korban = $baris['nama_korban'];
          $telepon_korban = $baris['telepon_korban'];
          $desa = $baris['desa'];
      ?>
          <tr>
            <td>
              <?php echo $nomor=$nomor+1;?>
            </td>
            <td>
              <a class='btn btn-link' href='../model/p_edit_admin.php?nik_pelapor=<?php echo "$nik_pelapor" ?>'>
              <?php echo "$nama_korban" ?>
              </a>
            </td>

            <td>
              <a style='color:#a5c422;' href='tel:<?php echo "$telepon_korban" ?>'><?php echo "$telepon_korban" ?></a>
            </td>
            <td><?php echo "$desa" ?></td>
          </tr>
      <?php
        }
      }

      $sql2 = "SELECT * FROM jemput
              LEFT JOIN desa
              ON desa.id_desa = jemput.id_desa
              LEFT JOIN status
              ON status.id_status = jemput.id_status
              LEFT JOIN admin
              ON admin.id_admin = jemput.id_admin WHERE status.id_status = 3 ORDER BY preferensi1 DESC";

      $hasil2 = $koneksi->query($sql2);
      ?>
      <table style="margin-top:10px;" class="table table-bordered text-center col-md-12 col-xs-12">
        <div class="col-md-12 col-sm-12">
          <hr>
        </div>
        <h5><b>Selesai</b></h5>
      <tr class="success">
        <th width="70" class="text-center">NO</th>
        <th width="400" class="text-center">NAMA KORBAN</th>
        <th width="250" class="text-center">TELEPON KORBAN</th>
        <th width="200" class="text-center">DESA</th>
      </tr>
      <?php
      $nomor = 0;
      if ($hasil2->num_rows > 0){
        while ($baris = $hasil2->fetch_assoc()){
          $nik_pelapor = $baris['nik_pelapor'];
          $nama_korban = $baris['nama_korban'];
          $telepon_korban = $baris['telepon_korban'];
          $desa = $baris['desa'];
          $status = $baris['status'];
      ?>
          <tr>
            <td>
              <?php echo $nomor=$nomor+1;?>
            </td>
            <td>
              <a class='btn btn-link' href='../model/p_edit_admin.php?nik_pelapor=<?php echo "$nik_pelapor" ?>'>
              <?php echo "$nama_korban" ?>
              </a>
            </td>

            <td>
              <a style='color:#a5c422;' href='tel:<?php echo "$telepon_korban" ?>'><?php echo "$telepon_korban" ?></a>
            </td>
            <td><?php echo "$desa" ?></td>
          </tr>
      <?php
        }
      }

      $koneksi->close();
      ?>

      </table></div></div>

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
