<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form Penjemputan - Sistem Penjemput Korban Bencana Alam</title>
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
    <form action="../model/p_login_admin.php" method="post">
      <div class="modal fade" role="dialog" id="login">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">
                Login Penjemput
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </h3>
            </div>
            <div class="modal-body">
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
              <button type="submit" class="section-btn btn btn-default smoothScroll">LOGIN</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>

<section id="appointment" data-stellar-background-ratio="3">
    <form action="../model/p_check.php" method="post">
      <div class="modal fade" role="dialog" id="check">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">
                Check Proses Penjemputan
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </h3>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>NIK Pelapor</label>
                <input type="text" maxlength="16" minlength="16" name="nik_pelapor" class="form-control" required>
              </div>
            </div>

            <div class="modal-footer">
              <button type="submit" class="section-btn btn btn-default smoothScroll">CHECK</button>
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
          <a href="../index.php">
            <img style="margin-top:10px;" src="../style/images/logo.png" width="230" alt="">
          </a>
        </div>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../index.php" class="smoothScroll">Home</a></li>
            <li><a href="" data-toggle="modal" data-target="#check">Check</a></li>
            <li class="appointment-btn"><a href="form_jemput.php">Form Penjemputan</a></li>
          </ul>
        </div>

      </div>
    </section>

    <br><br>

    <section id="appointment" data-stellar-background-ratio="3">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 visible-md visible-sm visible-lg wow fadeInUp" data-wow-delay="0.12s">
            <img src="../style/images/timsar.png" class="img-responsive" alt="">
          </div>

          <div class="col-md-6 col-sm-6">
            <form class="appointment-form" action="../model/p_jemput.php" role="form" method="post">
              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                <h2>Form Penjemputan</h2>
              </div>

              <div class="wow fadeInUp" data-wow-delay="0.5s">

                <div class="col-md-12 col-sm-12">
                  <h5><b>Data Diri Pelapor</b></h5>
                  <hr>
                </div>

                <div class="col-md-6 col-sm-6">
                  <label for="nik_pelapor">NIK</label>
                  <input type="text" class="form-control" name="nik_pelapor" maxlength="16" minlength="16" placeholder="NIK Pelapor" required>
                </div>

                <div class="col-md-6 col-sm-6">
                  <label for="telepon_pelapor">Telepon</label>
                  <input type="text" class="form-control" name="telepon_pelapor" maxlength="13" placeholder="Telepon Pelapor" required>
                </div>

                <div class="col-md-12 col-sm-12">
                  <label for="nama_pelapor">Nama</label>
                  <input type="text" class="form-control" name="nama_pelapor" placeholder="Nama Pelapor" required>
                </div>

                <div class="col-md-12 col-sm-12">
                  <h5><b>Data Diri Korban</b></h5>
                  <hr>
                </div>

                <div class="col-md-6 col-sm-6">
                  <label for="nik_korban">NIK</label>
                  <input type="text" class="form-control" name="nik_korban" maxlength="16" minlength="16" placeholder="NIK Korban">
                </div>

                <div class="col-md-6 col-sm-6">
                  <label for="telepon_korban">Telepon</label>
                  <input type="text" class="form-control" name="telepon_korban" maxlength="13" placeholder="Telepon Korban" required>
                </div>

                <div class="col-md-12 col-sm-12">
                  <label for="nama_korban">Nama</label>
                  <input type="text" class="form-control" name="nama_korban" placeholder="Nama Korban" required>
                </div>

                <div class="col-md-12 col-sm-12">
                  <hr>
                </div>

                <div class="col-md-4 col-sm-4">
                  <label for="j_lansia">Lansia</label>
                  <input type="number" min="0" class="form-control" name="j_lansia" placeholder="Lansia">
                </div>

                <div class="col-md-4 col-sm-4">
                  <label for="j_dewasa">Dewasa</label>
                  <input type="number" min="0" class="form-control" name="j_dewasa" placeholder="Dewasa">
                </div>

                <div class="col-md-4 col-sm-4">
                  <label for="j_anak">Anak-Anak</label>
                  <input type="number" min="0" class="form-control" name="j_anak" placeholder="Anak-Anak">
                </div>



                <div class="col-md-12 col-sm-12">
                  <hr>
                </div>




                <div class="col-md-4 col-sm-4">
                  <label for="j_ternak">Hewan Ternak</label>
                  <input type="number" min="0" class="form-control" name="j_ternak" placeholder="Hewan Ternak">
                </div>

                <div class="col-md-4 col-sm-4">
                  <label for="j_peliharaan">Hewan Peliharaan</label>
                  <input type="number" min="0" class="form-control" name="j_peliharaan" placeholder="Hewan Peliharaan">
                </div>

                <div class="col-md-12 col-sm-12">
                  <hr>
                </div>

                <div class="col-md-8 col-sm-8">
                  <label for="id_desa">Pilih Desa</label>
                  <select name="id_desa" class="form-control">
                  <?php

                  include "../conf/koneksi.php";
                  $sql = "SELECT * FROM desa";
                  $hasil = $koneksi->query($sql);
                  if ($hasil->num_rows) {
                    while ($cetak = $hasil->fetch_assoc()) {
                      extract($cetak);
                      echo
                      '<option value='.$id_desa.'>'.$desa.'</option>';
                    }
                  }
                  ?>
                </select>
                </div>

                <div class="col-md-12 col-sm-12">
                  <label for="alamat_detail">Lokasi Detail</label>
                  <textarea style="resize: none;" type="text" class="form-control" rows="5" id="alamat_detail" maxlength="255" name="alamat_detail" placeholder="Alamat Detail"></textarea>
                </div>

                <div class="col-md-12 col-sm-12 hidden">
                  <label for="id_admin">Penjemput</label>
                  <select name="id_admin" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>

                <div class="col-md-12 col-sm-12 hidden">
                  <label for="id_status">Status</label>
                  <select name="id_status" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </div>

                <div class="col-md-12 col-sm-12">
                  <button type="submit" class="form-control" id="cf-submit" name="submit" onClick="return confirm('Apakah anda yakin?')">Submit</button>
                </div>

                </div>

              </div>
            </form>
          </div>
        </div>
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
                <p>Copyright &copy; 2018 Zoom <a href="" data-toggle="modal" data-target="#login">Studio</a></p>
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
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5b0ae78c10b99c7b36d45a52/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

  </body>
</html>
