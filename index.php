<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home - Sistem Penjemput Korban Bencana Alam</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="ZOOM">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/png" href="style/images/icon.png"/>
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/css/animate.css">
    <link rel="stylesheet" href="style/css/owl.carousel.css">
    <link rel="stylesheet" href="style/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="style/css/tooplate-style.css">
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
    <form action="model/p_login_admin.php" method="post">
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
    <form action="model/p_check.php" method="post">
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
          <a href="index.php">
            <img style="margin-top:10px;" src="style/images/logo.png" width="230" alt="">
          </a>
        </div>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#top" class="smoothScroll">Home</a></li>
            <li><a href="#team" class="smoothScroll">Team</a></li>
            <li><a href="#google-map" class="smoothScroll">Contact</a></li>
            <li><a href="" data-toggle="modal" data-target="#check">Check</a></li>
            <li class="appointment-btn"><a href="view/form_jemput.php">Form Penjemputan</a></li>
          </ul>
        </div>

      </div>
    </section>





    <section id="home" class="slider" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="owl-carousel owl-theme">
            <div class="item item-first">
              <div class="caption">
                <div class="col-md-offset-1 col-md-10">
                  <h3>Ketahui Lebih Jauh Tentang Gunung di Bumi</h3>
                  <h1>Gunung Berapi</h1>
                  <a href="https://id.wikipedia.org/wiki/Gunung_berapi" class="section-btn btn btn-default smoothScroll">Baca Artikel</a>
                </div>
              </div>
            </div>

            <div class="item item-second">
              <div class="caption">
                <div class="col-md-offset-1 col-md-10">
                  <h3>10 gunung terindah di indonesia yang wajib dikunjungi</h3>
                  <h1>Wonderful Indonesia</h1>
                  <a href="http://anekatempatwisata.com/10-gunung-terindah-di-indonesia-yang-wajib-dikunjungi/" class="section-btn btn btn-default btn-gray smoothScroll">Baca Artikel</a>
                </div>
              </div>
            </div>

            <div class="item item-third">
              <div class="caption">
                <div class="col-md-offset-1 col-md-10">
                  <h3>Banyak Manfaat Gunung Yang Mungkin Kita Tidak Tahu</h3>
                  <h1>Manfaat Gunung</h1>
                  <a href="https://ruangpendaki.blogspot.com/2017/08/8-manfaat-gunung-bagi-kehidupan-manusia.html" class="section-btn btn btn-default btn-blue smoothScroll">Baca Artikel</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section id="team" data-stellar-background-ratio="1">
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-sm-12">
            <div class="about-info">
              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Team</h2>
            </div>
          </div>

          <div class="clearfix"></div>

          <div class="col-md-3 col-sm-6">
            <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
              <img src="style/images/fotoadit.png" class="img-responsive" alt="">
              <div class="team-info">
                <h3>Aditya Putra Irawan</h3>
                <p>Project Manager</p>
                <div class="team-contact-info">
                  <p><i class="fa fa-phone"></i> +62-821-7732-9234</p>
                  <p><i class="fa fa-envelope-o"></i> <a href="mailto:bangadit.irawan@gmail.com">adtput@gmail.com</a></p>
                </div>
                <ul class="social-icon">
                  <li><a href="https://www.facebook.com/adityacakil" class="fa fa-facebook"></a></li>
                  <li><a href="https://www.instagram.com/adtputr" class="	fa fa-instagram"></a></li>
                  <li><a href="https://www.youtube.com/channel/UCny9g9FHbEMOovZv6KLsLaQ?view_as=subscriber" class="fa fa-youtube-play"></a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
              <img src="style/images/team-image5.png" class="img-responsive" alt="">
              <div class="team-info">
                <h3>Moch Dian Nafi</h3>
                <p>UI/UX</p>
                <div class="team-contact-info">
                  <p><i class="fa fa-phone"></i> +62-812-4213-9981</p>
                  <p><i class="fa fa-envelope-o"></i> <a href="mailto:bangadit.irawan@gmail.com">dian.nafi@gmail.com</a></p>
                </div>
                <ul class="social-icon">
                  <li><a href="https://www.facebook.com/adityacakil" class="fa fa-facebook"></a></li>
                  <li><a href="https://www.instagram.com/adtputr" class="	fa fa-instagram"></a></li>
                  <li><a href="https://www.youtube.com/channel/UCny9g9FHbEMOovZv6KLsLaQ?view_as=subscriber" class="fa fa-youtube-play"></a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
              <img src="style/images/team-image6.png" class="img-responsive" alt="">
              <div class="team-info">
                <h3>Muhammad Yasin Deru</h3>
                <p>Front-End Programer</p>
                <div class="team-contact-info">
                  <p><i class="fa fa-phone"></i> +62-812-9516-4268</p>
                  <p><i class="fa fa-envelope-o"></i> <a href="mailto:bangadit.irawan@gmail.com">yasin.deru@gmail.com</a></p>
                </div>
                <ul class="social-icon">
                  <li><a href="https://www.facebook.com/adityacakil" class="fa fa-facebook"></a></li>
                  <li><a href="https://www.instagram.com/adtputr" class="	fa fa-instagram"></a></li>
                  <li><a href="https://www.youtube.com/channel/UCny9g9FHbEMOovZv6KLsLaQ?view_as=subscriber" class="fa fa-youtube-play"></a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
              <img src="style/images/fotoadot.png" class="img-responsive" alt="">
              <div class="team-info">
                <h3>Aditya Mahavira</h3>
                <p>Back-End Programer</p>
                <div class="team-contact-info">
                  <p><i class="fa fa-phone"></i> +62-821-4812-1174</p>
                  <p><i class="fa fa-envelope-o"></i> <a href="mailto:bangadit.irawan@gmail.com">m_ahavi@gmail.com</a></p>
                </div>
                <ul class="social-icon">
                  <li><a href="https://www.facebook.com/adityacakil" class="fa fa-facebook"></a></li>
                  <li><a href="https://www.instagram.com/mashadit" class="	fa fa-instagram"></a></li>
                  <li><a href="https://www.youtube.com/channel/UCny9g9FHbEMOovZv6KLsLaQ?view_as=subscriber" class="fa fa-youtube-play"></a></li>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section id="google-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31642.510277663947!2d110.4282145!3d-7.5407171!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a641ec0ff2fa5%3A0xe92612624cad8800!2sGunung+Merapi!5e0!3m2!1sid!2sid!4v1530285573254" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="	fa fa-instagram"></a></li>
                <li><a href="#" class="fa fa-youtube-play"></a></li>
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

    <script src="style/js/jquery.js"></script>
    <script src="style/js/bootstrap.min.js"></script>
    <script src="style/js/jquery.sticky.js"></script>
    <script src="style/js/jquery.stellar.min.js"></script>
    <script src="style/js/wow.min.js"></script>
    <script src="style/js/smoothscroll.js"></script>
    <script src="style/js/owl.carousel.min.js"></script>
    <script src="style/js/custom.js"></script>
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
