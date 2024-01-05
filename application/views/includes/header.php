<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php echo $_ENV['PROJECT_NAME'];?></title>
    <link
      rel="icon"
      href="<?php echo $_ENV['BASE_URL'];?>template/assets/img/favicon.png"
      sizes="20x20"
      type="image/png"
    />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>template/assets/css/vendor.css" />
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>template/assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo $_ENV['BASE_URL'];?>template/assets/css/responsive.css" />
    <style>
      .success_div{
        position: fixed;
        width: 300px;
        z-index: 111;
        top: 15px;
        right: 15px;
        text-align: center;
        padding: 15px;
        background: #318c31;
        color: #FFFFFF;
        font-weight: bold;
        border-radius: 10px;
      }
    </style>
  </head>
  <body>
    <?php if( $_SESSION['form_post']  == "success"){ ?>
    <div class="success_div"><?php echo $_SESSION['form_message'];?></div>
    <?php unset($_SESSION["form_post"]); unset($_SESSION["form_message"]); } ?>
    <!-- preloader area start 
    <div class="preloader" id="preloader">
      <div class="preloader-inner">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>
    preloader area end -->

    <!-- search popup start-->
    <div class="td-search-popup" id="td-search-popup">
      <form action="index.html" class="search-form">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Ara..." />
        </div>
        <button type="submit" class="submit-btn">
          <i class="fa fa-search"></i>
        </button>
      </form>
    </div>
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <!-- navbar start -->
    <div class="navbar-area">
      <!-- navbar top start -->
      <div class="navbar-top">
        <div class="container">
          <div class="row">
            <div class="col-md-8 text-md-left text-center">
              <ul>
                <li>
                  <p>
                    <i class="fa fa-map-marker"></i> Kuştepe, İnönü Cd. NO:22,
                    34000 Şişli/İstanbul
                  </p>
                </li>
                <li>
                  <p><i class="fa fa-envelope-o"></i> bilgi@dileregitim.com</p>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <ul class="topbar-right text-md-right text-center">
                <li class="social-area">
                  <a href="#"
                    ><i class="fa fa-facebook" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-twitter" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-instagram" aria-hidden="true"></i
                  ></a>
                  <a href="#"
                    ><i class="fa fa-pinterest" aria-hidden="true"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-area-1 navbar-area navbar-expand-lg bg-white">
        <div class="container nav-container">
          <div class="responsive-mobile-menu">
            <button
              class="menu toggle-btn d-block d-lg-none"
              data-target="#edumint_main_menu"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-left"></span>
              <span class="icon-right"></span>
            </button>
          </div>
          <div class="logo">
            <a href="<?php echo $_ENV['BASE_URL'];?>"><img src="<?php echo $_ENV['BASE_URL'];?>template/assets/img/logo.png" alt="img" /></a>
          </div>
          <div class="collapse navbar-collapse" id="edumint_main_menu">
            <ul class="navbar-nav menu-open">
              <li class="menu-item-has-children current-menu-item">
                <a href="<?php echo $_ENV['BASE_URL'];?>">Anasayfa</a>
              </li>
              <li class="menu-item-has-children">
                <a href="<?php echo $_ENV['BASE_URL'];?>kurslar">Kurslar</a>
              </li>
              <li class="menu-item-has-children">
                <a href="about.html">Hakkımızda</a>
              </li>
              <li><a href="contact.html">İletişim</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!-- navbar end -->