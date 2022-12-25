<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Tugasuas - Marketplace Rental Mobil Se-PONTIANAK</title>

    <!--=== Bootstrap CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/plugins/vegas.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="<?php echo base_url() ?>assets/assets_shop/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="<?php echo base_url() ?>assets/assets_shop/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <!-- <div id="header-top" class="d-none d-xl-block"> -->
            <!-- <div class="container"> -->
                <!-- <div class="row"> -->
                    <!--== Single HeaderTop Start ==-->
                    <!-- <div class="col-lg-4 text-left"> -->
                        <!-- <i class="fa fa-map-marker"></i> 802/2, Mirpur, Dhaka -->
                    <!-- </div> -->
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <!-- <div class="col-lg-4 text-center"> -->
                        <!-- <i class="fa fa-mobile"></i> +1 800 345 678 -->
                    <!-- </div> -->
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <!-- <div class="col-lg-4 text-right"> -->
                        <!-- <i class="fa fa-clock-o"></i> Mon-Fri 09.00 - 17.00 -->
                    <!-- </div> -->
                    <!--== Single HeaderTop End ==-->

                    
                <!-- </div> -->
            <!-- </div> -->
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="index2.html" class="logo">
                            <img src="<?php echo base_url() ?>assets/assets_shop/img/logo.png" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <!-- <li><a href="<?php echo base_url('customer/dashboard') ?>">Beranda</a></li> -->

                                <li><a href="<?php echo base_url('customer/data_mobil') ?>">Mobil</a></li>

                                <?php if($this->session->userdata('nama')) { ?>

                                    <li><a href="<?php echo base_url('customer/transaksi') ?>">Transaksi</a></li>

                                <?php }else{ ?>

                                <?php } ?>

                                
                                <?php if($this->session->userdata('nama')) { ?>
                          
                                    <li><a href="<?php echo base_url('auth/ganti_password') ?>">Ganti Password</a></li>

                                    <li><a class="text-warning">Halo, <?php echo $this->session->userdata('nama') ?></a></li>

                                    <li><a href="<?php echo base_url('auth/logout') ?>">| LOGOUT</a></li>
                                <?php }else{ ?>
                                    <li><a href="<?php echo base_url('register') ?>">Register</a></li>
                                    <li><a href="<?php echo base_url('auth/login') ?>">Login</a></li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->
<br><br>

<body>
  <div id="app">
    <section class="section">
      
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <!-- <img src="<?php echo base_url('assets/assets_stisla') ?>/assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle"> -->
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <span class="m-2"><?php echo $this->session->flashdata('pesan') ?></span>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('auth/login') ?>">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="1" autofocus>
                    <?php echo form_error('username','<div class="text-small text-danger">','</div>') ?>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2">    <?php echo form_error('password','<div class="text-small text-danger">','</div>') ?>
                  </div>


                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>

              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Belum memiliki akun? <a href="<?php echo base_url('register') ?>">Buat akun</a>
            </div>
         
          </div>
        </div>
      </div>
    </section>
  </div>

    <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-6 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Tentang Kami</h2>
                            <div class="widget-body">
                                <img src="<?php echo base_url() ?>assets/assets_shop/img/logo.png" alt="JSOFT">
                                <p>Tugasuas adalah Pintu penghubung antara penyedia rental dengan customer. Sebuah marketplace untuk penyedia rental dan customer untuk saling terhubung.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->


                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-6 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Hubungi Kami</h2>
                            <div class="widget-body">
                                <p>Hubungi kami untuk mengetahui lebih banyak. Dapatkan layanan terbaik dan prioritas dari kami, Cardoor.</p>

                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> Jl. BLKI, PONTIANAK</li>
                                    <li><i class="fa fa-mobile"></i> +62 811 1111 111</li>
                                    <li><i class="fa fa-envelope"></i> layanan@cardoor.com</li>
                                </ul>
                                <!-- <a href="https://goo.gl/maps/b5mt45MCaPB2" class="map-show" target="_blank">Show Location</a> -->
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Design by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="<?php echo base_url() ?>assets/assets_shop/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="<?php echo base_url() ?>assets/assets_shop/js/main.js"></script>

</body>

</html>