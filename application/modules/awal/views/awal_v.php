<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MI Ayam</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="apple-touch-icon" href="<?php echo base_url('kassets\img\favicon.png')?>">
  <link rel="icon" href="<?php echo base_url('kassets\img\favicon.png')?>">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic'>
  <link rel='stylesheet' href="<?php echo base_url('kassets\css\bootstrap.min.css')?>">
  <link rel='stylesheet' href="<?php echo base_url('kassets\css\vendor.css')?>">
  <link rel='stylesheet' href="<?php echo base_url('kassets\css\theme-3.css')?>" id="theme">
  <link rel='stylesheet' href="<?php echo base_url('kassets\css\custom.css')?>">
  <script src="<?php echo base_url('kassets\js\modernizr-2.8.3.min.js')?>"></script>
</head>
<body>

  <form name="sendin" action="$(link-login-only)" method="post">
    <input type="hidden" name="username" />
    <input type="hidden" name="password" />
    <input type="hidden" name="dst" value="$(link-orig)" />
    <input type="hidden" name="popup" value="true" />
  </form>
  <script type="text/javascript" src="<?php echo base_url('kassets/md5.js')?>"></script>
<!--   <script type="text/javascript">
      function doLogin() {
    document.sendin.username.value = document.login.username.value;
    document.sendin.password.value = hexMD5('$(chap-id)' + document.login.password.value + '$(chap-challenge)');
    document.sendin.submit();
    return false;
      }
  </script>
 <!--  $(endif) -->
  <div class="page-loader">
    <div class="spinner">
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
    </div>
  </div> <!-- .page-loader -->

  <header id="siteHeader" class="site-header site-header-fixed-top">
    <nav id="siteNavbar" class="navbar navbar-default navbar-fixed-top site-navbar-from-light-fg">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle-icon navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon ti-layout-grid3-alt"></span>
          </button>

          <a class="navbar-brand" href="login.html">
            <img class="navbar-brand-media-light" src="<?php echo base_url('kassets\img\mi-ayam-light.png')?>"  alt="">
            <img class="navbar-brand-media-dark" src="<?php echo base_url('kassets\img\mi-ayam-dark.png')?>" alt="">
          </a>
        </div> <!-- .navbar-header -->

      <!-- .navbar-collapse -->
      </div>
    </nav>
  </header> <!-- .site-header -->

  <div class="main">
    <div id="home" class="home-section home-hero align-outer bg-theme-1">

      <div id="homeBgImg" data-bg-img="media/index-layout-1-bg-img+animated-gradient.jpg"></div> <!-- #homeBgImg -->

      <div id="homeBgAnimatedGradient" data-opacity=".8"></div> <!--- #homeBgAnimatedGradient -->

      <div class="align-inner align-middle">
        <div class="container">
          <div class="home-row row">
            <div class="home-left-col col-sm-6">
              <h1 class="text-animate section-title">E D I E M O D O</h1>

              <h2 class="text-animate">                                REGISTER</h2>
              <div class="col-sm-6">
                <div class="btn-wrap">
                  <a class="btn btn-lg btn-block btn-theme-2 wow bounceIn" data-wow-delay=".2s"  href='<?php echo site_url('awal/memdos/register_member') ?>'>Dosen<span class="icon ti-arrow-circle-down"></span></a>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="btn-wrap">
                  <a class="btn btn-lg btn-block btn-default wow bounceIn" data-wow-delay=".2s" href="<?php echo site_url('awal/member/register_siwa') ?>"> Mahasiswa<span class="icon ti-arrow-circle-down"></span></a>
                </div>
              </div>
            </div> <!-- .home-left-col -->

            <div class="home-form-col col-sm-6 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2">
              <div class="panel panel-theme-2 wow fadeInUp">
                <div class="panel-heading">
                  <h5>Masuk Kuy Belajar</h5>
                </div>


               
                <div class="panel-body">
                  <form id="loginForm" class="form home-subscribe-form form-lite" role="form" action="<?php echo site_url('awal/auth') ?>" method="post">
                    <input type="hidden" name="dst" value="$(link-orig)"/>
                    <input type="hidden" name="popup" value="true"/>
                    <div class="row">
                      <div class="form-group col-sm-12">
                        <label for="inputUser">NIM / NIDN</label>
                        <input id="inputUser" class="form-control" type="text" placeholder="username" name="username" required>
                      </div>
                      <div class="form-group col-sm-12">
                        <label for="inputPassword">Password</label>
                        <input id="inputPassword" class="form-control" type="password" placeholder="password" name="password" required>
                      </div>
                      <!--<div class="form-group col-sm-12">
                        $(if error)
                        <p>Terjadi kesalahan: $(error)</p>
                        $(endif)
                      </div>-->
                      <div class="form-group col-sm-12">
                        <button class="btn btn-block btn-lg btn-theme-2" type="submit">LOGIN</button>
                      </div>
                      <div class="col-sm-12">
                        <span class="form-notify help-block"><span class="icon ti-lock"></span> Powered by PLN</span>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div> 
            

<!-- .home-form-col -->
          </div>
        </div>
      </div>
    </div> <!-- #home-->

     <!-- .iconbox -->

           <!-- .iconbox -->
        </div>
      </div>
    </div> <!-- #service-->

   

  <footer class="site-footer">
    <div id="siteFooterBottom" class="site-footer-bottom-section">
      <div class="container">
        <div class="site-footer-bottom-border"></div>
        <div class="row">
          <div class="site-footer-bottom-left-col col-md-6">
            <div class="site-footer-brand">
              MI-Ayam <span>Flexible Design</span>
            </div>

            <div class="site-footer-bottom-info">
              <ul>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Acceptable Use Policy</a></li>
              </ul>
            </div>
          </div>

          <div class="site-footer-bottom-right-col col-md-6">
            <ul class="site-footer-bottom-social-list">
              <li class="wow fadeInRight"><a href="https://facebook.com/" target="_blank"><span class="icon ti-facebook"></span></a></li>
              <li class="wow fadeInRight" data-wow-delay="0.1s"><a href="https://twitter.com/" target="_blank"><span class="icon ti-twitter-alt"></span></a></li>
              <li class="wow fadeInRight" data-wow-delay="0.2s"><a href="https://www.pinterest.com/" target="_blank"><span class="icon ti-pinterest-alt"></span></a></li>
              <li class="wow fadeInRight" data-wow-delay="0.3s"><a href="https://github.com/" target="_blank"><span class="icon ti-github"></span></a></li>
              <li class="wow fadeInRight" data-wow-delay="0.4s"><a href="https://www.linkedin.com/" target="_blank"><span class="icon ti-linkedin"></span></a></li>
            </ul>
            <div class="site-footer-bottom-copyright">Copyright © 2019 . All Rights Reserved.</div>
          </div>
        </div>
      </div>
    </div> <!-- #siteFooterBottom -->
  </footer>

  <script src="<?php echo base_url('kassets\js\jquery-1.11.3.min.js')?>"></script>
  <script src="<?php echo base_url('kassets\js\bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('kassets\js\vendor.js')?>"></script>
  <script src="<?php echo base_url('kassets\js\main.js')?>"></script>
  <script src="<?php echo base_url('kassets\js\map.js')?>"></script>
<!--   $(if chap-id) -->
      <script type="text/javascript" src="<?php echo base_url('kasset/md5.js')?>"></script>
<!--       <script type="text/javascript">
          $('#loginForm').submit(function () {
              var password = $('#inputPassword');
              password.val(hexMD5('$(chap-id)' + password.val() + '$(chap-challenge)'));
          });
      </script> -->
<!--       $(endif) -->
<!--       <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        });
      </script>
      <script type="text/javascript">
        document.login.username.focus();
      </script> -->
</body>
</html>
<!-- 
======================================================
created     : Lalat Merah
situs       : wp.icmp.my.id
whatsapp    : 082-120-215-248
ig          : @alpuketmerah
====================================================== 
-->