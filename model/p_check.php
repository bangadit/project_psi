<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Check Proses Penjemputan - Sistem Penjemput Korban Bencana Alam</title>
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
                <input type="text" minlength="16" maxlength="16" name="nik_pelapor" class="form-control" required>
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
            <li class="appointment-btn"><a href="../view/form_jemput.php">Form Penjemputan</a></li>
          </ul>
        </div>

      </div>
    </section>

    <div class="table-responsive">
    <div class="container">
      <?php
      include "../conf/koneksi.php";
      $nik_pelapor = $_POST['nik_pelapor'];

      $sql = "SELECT * FROM jemput
              LEFT JOIN desa
              ON desa.id_desa = jemput.id_desa
              LEFT JOIN status
              ON status.id_status = jemput.id_status
              LEFT JOIN admin
              ON admin.id_admin = jemput.id_admin
              WHERE nik_pelapor = '$nik_pelapor'";

      $hasil = $koneksi->query($sql);
      echo '<h5>Hasil Pencarian dari : '.$nik_pelapor.'</h5>';
      if ($hasil->num_rows) {
        echo
          '<table style="margin-top:10px;" class="table table-bordered text-center col-md-12">
             <tr class="info">
              <td>NAMA KORBAN</td>
              <td>DESA</td>
              <td>PENJEMPUT</td>
              <td>STATUS</td>
             </tr>
            <tbody>';

        while ($cetak = $hasil->fetch_assoc()) {
          extract($cetak);
          echo
            '<tr>
              <td>'.$nama_korban.'</td>
              <td>'.$desa.'</td>
              <td>'.$nama_admin.'</td>
              <td>'.$status.'</td>
             </tr>';
        }
          echo
            '</tbody>
            </table>';
      }else{
        echo "<h5 style='color:red;' align='center'>Data tidak ditemukan !</h5>";

      }
      ?>


    </div>
  </div>



    <footer data-stellar-background-ratio="5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="footer-thumb">
              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
              <p>Silahkan hubungi kami secara langsung jika ada kendala dalam proses penjemputan.</p>

              <div class="contact-info">
                <p><i class="fa fa-phone"></i><a href="tel:+6282177329234"> +62 821 7732 9234</a>></p>
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
