<?php
$this->load->library('Layouts');
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Cache-Control: max-age=2592000" content="public">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <meta name="author" content="">
  <link rel="icon" href="<?php echo base_url(); ?>assets/images/ico16.png" type="image/gif" sizes="16x16">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/ico16.png" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/images/ico16.png" />
  <link rel="canonical" href="<?= $canonical ? $canonical : "https://www.bambootajur.com" ?>">
  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:type" content="website" />
  <meta property="og:description" content="<?php echo $description; ?>" />
  <meta property="og:url" content="<?php echo $url ? $url : "https://www.bambootajur.com"; ?>" />
  <meta property="og:site_name" content="Bamboo Tajur" />
  <meta property="og:image" content="<?= base_url(); ?>assets/images/ogp-image.jpg" />
  <meta property="og:locale:alternate" content="id_ID" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=no name=viewport">
  <meta name="facebook-domain-verification" content="6wavtvcosv0t3yfkkyt9ybrkmp7vts" />
  <!-- Stylesheet -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />

  <link rel="preconnect" href="https://www.googleadservices.com" />
  <link rel="preconnect" href="https://www.facebook.com" />
  <link rel="preconnect" href="https://connect.facebook.net" />
  <link rel="preconnect" href="https://www.google.com" />
  <link rel="preconnect" href="https://www.google.co.id" />

  <link rel="preload" as="font" href="<?= base_url(); ?>assets/fonts/Roboto-Medium.ttf" crossorigin type="font/ttf" />
  <link rel="preload" as="font" href="<?= base_url(); ?>assets/fonts/Roboto-Light.ttf" crossorigin type="font/ttf" />
  <link rel="preload" as="font" href="<?= base_url(); ?>assets/fonts/Roboto-Bold.ttf" crossorigin type="font/ttf" />
  <link rel="preload" as="font" href="<?= base_url(); ?>assets/fonts/Roboto-Black.ttf" crossorigin type="font/ttf" />
  <link rel="preload" as="font" href="<?= base_url(); ?>assets/fonts/Roboto-Regular.ttf" crossorigin type="font/ttf" />
  <link rel="preload" as="font" href="<?= base_url(); ?>assets/fonts/OpenSans-Regular.ttf" crossorigin type="font/ttf" />

  <link rel="preload" href="https://fonts.googleapis.com/css?family=Arvo:400,400i,700,700i&display=swap" as="style">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arvo:400,400i,700,700i&display=swap">
  <?php echo $this->layouts->print_includes('css'); ?>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <!-- End Stylesheet-->
  <?php
  if (http_response_code() != 404 && $_SERVER['HTTP_HOST'] == "www.bambootajur.com") {
  ?>
    <!-- Google Tag Manager -->
    <script>
      (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-MHZQ3QG');
      console.log("run");
    </script>
    <!-- End Google Tag Manager -->
  <?php
  }
  ?>
</head>



<body>
  <?php
  if (http_response_code() != 404 && $_SERVER['HTTP_HOST'] == "www.bambootajur.com") {
  ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MHZQ3QG" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <?php
  }
  ?>

  <nav id="navbar" class="" style="z-index:3;">
    <div class="nav-wrapper">
      <!-- Navbar Logo -->
      <div class="logo">
        <!-- Logo Placeholder for Inlustration -->
        <a href="<?= base_url(); ?>" alt="header-link">
          <img src="<?= base_url(); ?>assets/images/logo.png" class="img-responsive p-10" alt="header-logo" width="155" height="62" />
        </a>
      </div>

      <!-- Navbar Links -->
      <ul id="menu">
        <?php echo $this->uri->segment(1) != '' ? '<li><a href="' . base_url() . '">Home</a></li>' : ''; ?>
        <li><a href="<?= site_url(['desain-rumah']) ?>" <?php echo $this->uri->segment(1) == 'desain-rumah' ? 'class="active"' : ''; ?>>Desain Rumah</a></li>
        <li>
          <div class="menu__dropdown-menu">
            <a href="<?= site_url(['tipe-rumah']) ?>" class="d-inline-block pr-0 <?php echo $this->uri->segment(1) == 'tipe-rumah' ? 'active' : ''; ?>">Tipe Rumah

            </a>
            <a href="#" class="d-inline-block pl-1 dropdown-toggle <?php echo $this->uri->segment(1) == 'tipe-rumah' ? 'active' : ''; ?>" data-toggle="dropdown">

            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?= site_url(['tipe-rumah/new-phase']) ?>">New Phase</a>
              <a class="dropdown-item" href="<?= site_url(['tipe-rumah/akane']) ?>">Tipe Akane</a>
              <a class="dropdown-item" href="<?= site_url(['tipe-rumah/momiji']) ?>">Tipe Momiji</a>
            </div>
          </div>
        </li>
        <li><a href="<?= site_url(['fasilitas-perumahan']) ?>" <?php echo $this->uri->segment(1) == 'fasilitas-perumahan' ? 'class="active"' : ''; ?>>Fasilitas Perumahan</a></li>
        <li><a href="<?= site_url(['berita-dan-promo']) ?>" <?php echo $this->uri->segment(1) == 'berita-dan-promo' ? 'class="active"' : ''; ?>>Berita dan Promo</a></li>
        <li><a href="<?= site_url(['disclaimer']) ?>" <?php echo $this->uri->segment(1) == 'disclaimer' ? 'class="active"' : ''; ?>>Disclaimer</a></li>
        <li><a href="<?= site_url(['contact']) ?>" <?php echo $this->uri->segment(1) == 'contact' ? 'class="active"' : ''; ?>>Kontak</a></li>
      </ul>
    </div>
  </nav>

  <!-- Menu Icon -->
  <div class="menuIcon">
    <span class="icon-menu icon-bars"></span>
    <span class="icon-menu icon-bars overlay"></span>
  </div>

  <div class="overlay-menu">
    <div class="logo2">
      <!-- Logo Placeholder for Inlustration -->
      <a href="<?= base_url(); ?>" aria-label="Homepage Link">
        <img src="<?= base_url(); ?>assets/images/logo.png" class="img-responsive p-10" alt="logo-img" width="160" height="64" />
      </a>
    </div>
    <ul id="menu-mobile" class="menu-mobile">
      <?php echo $this->uri->segment(1) != '' ? '<li><a href="' . base_url() . '">Home</a></li>' : ''; ?>
      <li><a href="<?= site_url(['desain-rumah']) ?>" <?php echo $this->uri->segment(1) == 'desain-rumah' ? 'class="active"' : ''; ?>>Desain Rumah</a></li>
      <li>
        <div class="menu__dropdown-menu">
          <a href="<?= site_url(['tipe-rumah']) ?>" class="d-inline-block pr-0 <?php echo $this->uri->segment(1) == 'tipe-rumah' ? 'active' : ''; ?>">Tipe Rumah<span>
          </a>
          <a href="#" class="d-inline-block pl-1 dropdown-toggle <?php echo $this->uri->segment(1) == 'tipe-rumah' ? 'active' : ''; ?>" data-toggle="dropdown">
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?= site_url(['tipe-rumah/new-phase']) ?>">New Phase</a>
            <a class="dropdown-item" href="<?= site_url(['tipe-rumah/akane']) ?>">Tipe Akane</a>
            <a class="dropdown-item" href="<?= site_url(['tipe-rumah/momiji']) ?>">Tipe Momiji</a>
          </div>
        </div>
      </li>
      <li><a href="<?= site_url(['fasilitas-perumahan']) ?>" <?php echo $this->uri->segment(1) == 'fasilitas-perumahan' ? 'class="active"' : ''; ?>>Fasilitas Perumahan</a></li>
      <li><a href="<?= site_url(['berita-dan-promo']) ?>" <?php echo $this->uri->segment(1) == 'berita-dan-promo' ? 'class="active"' : ''; ?>>Berita dan Promo</a></li>
      <li><a href="<?= site_url(['disclaimer']) ?>" <?php echo $this->uri->segment(1) == 'disclaimer' ? 'class="active"' : ''; ?>>Disclaimer</a></li>
      <li><a href="<?= site_url(['contact']) ?>" <?php echo $this->uri->segment(1) == 'contact' ? 'class="active"' : ''; ?>>Kontak</a></li>
    </ul>
  </div>

  <?= $content ?>

  <!-- FOOTER -->

  <?php if ($this->uri->segment(1) != 'privacy-policy') : ?>

    <div style="color: #000;background-color:#fff;text-align:center;text-align: justify;">

      <div class="row bg-footer no-margin footer-container">

        <div class="col-md-3  ">
          <div class="detail-footer">
            <div class="header-footer">Marketing Gallery</div>
            <div class="footer-content">
              Jalan Raya Tajur No.30, Tajur - Kota Bogor 16141<br>
              Jawa Barat, Indonesia<br>
              Phone <a class="phone-link phone1" data-phone="O8III4O328O">0811 1403 280</a><br>
              Phone <a class="phone-link phone2" data-phone="O25I8574255">0251-8574 255</a><br>
              Email <a class="mail-link" data-email="bambootajurATgmailDOTcom">bambootajur@gmail.com</a><br>
            </div>
          </div>
        </div>

        <div class="col-md-3  ">
          <div class="detail-footer">
            <div class="header-footer">Show Unit</div>
            <div class="footer-content">
              Jalan Unitex, Tajur - Kota Bogor 16141<br>
              Jawa Barat, Indonesia<br>
              Phone <a class="phone-link phone1" data-phone="O8III4O328O">0811 1403 280</a><br>
              Email <a class="mail-link" data-email="bambootajurATgmailDOTcom">bambootajur@gmail.com</a><br>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="detail-footer">
            <div class="header-footer">Pages</div>
            <div class="footer-content">
              <ul class="navbar-footer">
                <li><a href="<?= base_url() ?>">Home</a></li>
                <li><a href="<?= site_url(['desain-rumah']) ?>">Desain Rumah</a></li>
                <li><a href="<?= site_url(['tipe-rumah']) ?>">Tipe Rumah</a></li>
                <li><a href="<?= site_url(['fasilitas-perumahan']) ?>">Fasilitas Perumahan</a></li>
                <li><a href="<?= site_url(['berita-dan-promo']) ?>">Berita dan Promo</a></li>
                <li><a href="<?= site_url(['disclaimer']) ?>">Disclaimer</a></li>
                <li><a href="<?= site_url(['contact']) ?>">Kontak</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-3 ml-auto  ">
          <div class="img-footer  ">
            <p class="m-nol header-footer no-margin">Development by</p>
            <img src="<?= base_url(); ?>assets/images/vendor/kbj.png" class="img-kbj" alt="kbj-img" width="105" height="93" />
          </div>
          <a href="<?= site_url(['privacy-policy']) ?>" class="footer-link-item mobile-hide">Privacy Policy</a>
        </div>
        <div class="col-md-12">
          <div class="detail-footer">
            <div class=" header-footer">Tentang Kami</div>
            <div class="footer-content">
              Green Bamboo Terrace merupakan rumah hunian modern dengan DP murah dan material berstandar Jepang yang siap huni dengan lokasi strategis di Tajur, Bogor. Tersedia rumah tipe 73 dengan 2 kamar tidur dan tipe 95 dengan 3 kamar tidur. Fasilitas lengkap mulai dari club house, mushola, taman, area bermain anak, dan diawasi dengan CCTV.
              <span>
                <br>
                Harga rumah mulai dari Rp 1 M-an dengan program KPR yang menarik dan menguntungkan. Kami bekerja sama dengan berbagai bank terpercaya dan ternama. Nikmati DP murah, cicilan ringan, dan banyak penawaran serta promo menarik lainnya setiap bulan.
                <br>
                Lokasi rumah hunian dekat dengan stasiun LRT Sentul Bogor, Tol Jagorawi, Tol Bocimi, Stasiun Bogor, Mall Boxies 123, dan AEON Tajur. Jangan ragu untuk menghubungi kami dan dapatkan informasi seputar harga, fasilitas, promosi, tipe rumah, dan lain-lain. Kami selalu siap melayani Anda.

              </span>
              <!-- <br>
              <button class="mt-2 btn btn-primary w-auto" onclick="seeMores()" id="myBtn">See More</button> -->

            </div>
          </div>
        </div>
        <div class="col-sm-12 show-mobile privacy-policy-mobile">
          <a href="<?= site_url(['privacy-policy']) ?>" class="footer-link-item">Privacy Policy</a>
        </div>
        <div class="col-sm-12 txt-center f-fav">
          <div class="footer-sosmed">
            <a href="https://www.facebook.com/GreenBambooTerrace" rel="noopener noreferrer nofollow" aria-label="Click here to visit our facebook account" target="_blank" class="facebook-icon"> </a>
            <a href="https://twitter.com/bambootajur_new" rel="noopener noreferrer nofollow" target="_blank" aria-label="Click here to visit our twitter account" class="twitter-icon"> </a>
            <a href="https://www.instagram.com/bambootajur.official/" rel="noopener noreferrer nofollow" target="_blank" aria-label="Click here to visit our instagram account" class="instagram-icon"> </a>
            <a href="https://www.youtube.com/channel/UCZNPRSwVSpnwCNttI-FPtVg" rel="noopener noreferrer nofollow" target="_blank" aria-label="Click here to visit our youtube account" class="youtube-icon"> </a>
          </div>
        </div>

      </div>
    </div>

    <!-- copyright -->
    <div style="color: #fff;background-color:#088770;text-align:center;text-align: justify;">
      <div class="col-sm-12 txt-center f-cop">
        &copy; Copyright <script>
          document.write(new Date().getFullYear())
        </script>. All Rights Reserved
      </div>
    </div>

  <?php endif; ?>

  <?php echo $this->layouts->print_includes('js'); ?>
  </script>
  <script defer src="<?php echo base_url(); ?>assets/js/script.js"></script>

  <!-- <input type="checkbox" id="messenger" class="icon-checkbox"> -->

  <div class="msgr-container" id="msgr-container-cs">
    <div class="messenger">
      <div class="hero2"></div>
      <div class="scrollable">
        <header class="header hero">
          <div class="home-btn-float-2">
            <div id="closeMenu">X</div>
          </div>
          <p>Hi, we're</p>
          <h3>Green Bamboo Terrace</h3>
          <p class="pb-2">Silakan isi form di bawah ini untuk mendapatkan informasi lebih lanjut</p>
        </header>
        <div>
          <form class="form-style text-left" id="bamboo-contact" name="bamboo-contact" method="POST">
            <div class=" text-left">
              <small class="text-danger font-weight-bold">* Wajib diisi</small>
            </div>            
            <div style="text-align:left; font-size:12px">
              <label for="InputName">Nama <span class="text-danger">*</span></label>
            </div>
            <div class="form-group">
              <input type="text" name="name" class="form-control contact-popup-custom" pattern="[a-zA-Z][a-zA-Z ]{2,}" title="Gunakan Huruf dan min 3 huruf" id="InputName" placeholder="Nama Lengkap" required>
            </div>
            <div style="text-align:left; font-size:12px">
              <label for="InputPhone">No.Telepon <span class="text-danger">*</span></label>
            </div>
            <div class="form-group">
              <input type="tel" name="number" class="form-control contact-popup-custom" id="InputPhone" placeholder="No. Telepon" maxlength="13" pattern="[0-9]{10,}" title="Gunakan hanya angka dan lebih dari 10" required>
            </div>
            <div style="text-align:left; font-size:12px">
              <label for="InputEmail">Alamat Email <span class="text-danger">(opsional)</span></label>
            </div>
            <div class="form-group text-center">
              <input type="email" name="email" class="form-control contact-popup-custom" id="InputEmail" aria-describedby="emailHelp" placeholder="Email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="w-100 txt-center" style="margin-top: 20px">
              <button type="submit" class="btn btn-primary" id="submit" data-loading-text="Loading..." disabled>Kirim</button>
            </div>
          </form>
        </div>
      </div>
      <footer class="footer">&copy; PT. KEBUN BAMBU JAKARTA <br>All Rights Reserved
      </footer>

    </div>
  </div>

  <!-- Whatsapp -->
  <div class="msgr-container" id="msgr-container-wa" style="display: none;">
    <div class="messenger">
      <div class="hero2"></div>
      <div class="scrollable">
        <header class="header hero">
          <div class="home-btn-float-2">
            <div id="closeMenuWA">X</div>
          </div>
          <p>Hi, we're</p>
          <h3>Green Bamboo Terrace</h3>
          <p class="pb-2">Silakan isi form di bawah ini sebelum melanjutkan chat whatsapp dengan kami</p>
        </header>
        <div>
          <form class="form-style text-left" id="bamboo-contact-two" name="bamboo-contact" method="POST">
            <div class=" text-left">
              <small class="text-danger font-weight-bold">* Wajib diisi</small>
            </div>
            <div style="text-align:left; font-size:12px">
              <label>Nama <span class="text-danger">*</span></label>
            </div>
            <div class="form-group">
              <input id="inputNameChat" type="text" name="name" class="form-control contact-popup-custom" pattern="[a-zA-Z][a-zA-Z ]{2,}" title="Gunakan Huruf dan min 3 huruf" placeholder="Nama Lengkap" required>
            </div>
            <div style="text-align:left; font-size:12px">
              <label>No.Telepon <span class="text-danger">*</span></label>
            </div>
            <div class="form-group">
              <input id="inputPhoneChat" type="tel" name="number" class="form-control contact-popup-custom" placeholder="No. Telepon" maxlength="13" pattern="[0-9]{10,}" title="Gunakan hanya angka dan lebih dari 10" required>
            </div>
            <div class="w-100 txt-center" style="margin-top: 20px">
              <button type="submit" class="btn btn-primary w-auto" id="submit-two" data-loading-text="Loading..." disabled>Chat With Us</button>
            </div>
          </form>
        </div>
      </div>
      <footer class="footer">&copy; PT. KEBUN BAMBU JAKARTA <br>All Rights Reserved
      </footer>
    </div>
  </div>

    <!-- Tawk -->
    <div class="msgr-container" id="msgr-container-tawk" style="display: none;">
      <div class="messenger">
        <div class="hero2"></div>
        <div class="scrollable">
          <header class="header hero-tawk">
            <div class="home-btn-float-2">
              <div id="closeMenuTawk">X</div>
            </div>
            <p>Hi, we're</p>
            <h3>Green Bamboo Terrace</h3>
            <p class="pb-2">Silakan isi form di bawah ini sebelum melanjutkan live chat dengan kami</p>
          </header>
          <div style="margin-top: -1px; margin-left:-1px;">
            <iframe src="https://tawk.to/chat/61de5853f7cf527e84d1ac93/1fp68i1tk" style="border:none;" height="350" width="352"></iframe>
          </div>
        </div>
        <footer class="footer">&copy; PT. KEBUN BAMBU JAKARTA <br>All Rights Reserved</footer>
      </div>
    </div>

  <div class="tawk-btn-float">
    <picture>
      <source type="image/webp" srcset="<?= base_url(); ?>assets/images/New-Tawk-to.webp" />
      <img src="<?= base_url(); ?>assets/images/New-Tawk-to.png" alt="Tawk To" class="cta-contact-us-float">
    </picture>
  </div>

  <div class="home-btn-float">
    <picture>
      <source type="image/webp" srcset="<?= base_url(); ?>assets/images/new-contact-us.webp" />
      <img src="<?= base_url(); ?>assets/images/new-contact-us.png" alt="Email" class="cta-mail-us-float">
    </picture>
  </div>

  <div class="wa-btn-float">
    <picture>
      <source type="image/webp" srcset="<?= base_url(); ?>assets/images/New_CTA_WA.webp" />
      <img src="<?= base_url(); ?>assets/images/NEW_CTA_WA.png" alt="WA" class="cta-contact-us-float">
    </picture>
  </div>

  <div class="modal fade" id="modal-video---" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div id="my-modal-title" style="font-size:16px;text-align:center;margin-bottom:10px;"></div>
          <iframe id="my-modal-video" width="100%" height="390" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  <!-- <input type="checkbox" id="messenger" class="icon-checkbox">
  <label for="messenger" class="home-btn-float">
    <div class="text">
      Contact Us
    </div>
    <div class="icon-right">
      <img class="email" src="<?= base_url(); ?>assets/images/email.png" alt="Email">
      <img class="close" src="<?= base_url(); ?>assets/images/x.png" alt="Close">
    </div>
  </label> -->

  <script src="<?= base_url(); ?>assets/js/modernizr-webp.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
  <!--===== Floating Contact Form ======-->
  <script>
    function isMobile() {
      return (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino|android|ipad|playbook|silk/i
        .test(navigator.userAgent || navigator.vendor || window.opera) ||
        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
        .test((navigator.userAgent || navigator.vendor || window.opera).substr(0, 4)))
    }
    var contact_open = false;
    window.onload = function() {
        if (!isMobile()) {
          $(".tawk-btn-float").click();
          //$(".tawk-btn-float").hide();
          $("#msgr-container-cs").hide();
          $("#msgr-container-wa").hide();
          $("#msgr-container-tawk").show();
        }

        if (isMobile()) {
          $("#msgr-container-cs").hide();
          $("#msgr-container-wa").hide();
          $("#msgr-container-tawk").hide();
        }
    }

    //btn contact
    $(".home-btn-float").click(function() {
      $(".home-btn-float").hide();
      $(".wa-btn-float").show();
      $("#msgr-container-cs").show();
      $("#msgr-container-wa").hide();
      $("#msgr-container-tawk").hide();
      $(".tawk-btn-float").show();
      $(".tawk-btn-float").addClass("menu-btn-float-tawk");
      contact_open = true;
    });
    $("#closeMenu").click(function() {
      $(".home-btn-float").show();
      $(".wa-btn-float").show();
      $(".tawk-btn-float").removeClass("menu-btn-float-tawk");
      $(".home-btn-float").removeClass("menu-btn-float-cs");
      contact_open = false;
      $("#msgr-container-cs").hide();
      $("#msgr-container-wa").hide();
      $("#msgr-container-tawk").hide();
    });

    //btn wa
    $(".wa-btn-float").click(function() {
      $(".wa-btn-float").hide();
      $(".home-btn-float").show();
      $(".home-btn-float").addClass("menu-btn-float-cs");
      $(".tawk-btn-float").show();
      $(".tawk-btn-float").addClass("menu-btn-float-tawk");
      $("#msgr-container-cs").hide();
      $("#msgr-container-tawk").hide();
      $("#msgr-container-wa").show();
    });
    $("#closeMenuWA").click(function() {
      $(".wa-btn-float").show();
      $(".home-btn-float").show();
      $(".home-btn-float").removeClass("menu-btn-float-cs");
      $(".tawk-btn-float").removeClass("menu-btn-float-tawk");
      $("#msgr-container-wa").hide();
      $("#msgr-container-cs").hide();
      $("#msgr-container-tawk").hide();
    });

    //btn tawkto
    $(".tawk-btn-float").click(function() {
      $(".tawk-btn-float").hide();
      $(".wa-btn-float").show();
      $("#msgr-container-cs").hide();
      $("#msgr-container-wa").hide();
      $("#msgr-container-tawk").show();
      $(".home-btn-float").show();
      $(".home-btn-float").removeClass("menu-btn-float-cs");
    });
    $("#closeMenuTawk").click(function() {
      $(".tawk-btn-float").show();
      $(".wa-btn-float").show();
      $(".wa-btn-float").show();
      $(".wa-btn-float").removeClass("menu-btn-float-cs");
      $(".home-btn-float").show();
      $(".tawk-btn-float").removeClass("menu-btn-float-tawk");
      $("#msgr-container-tawk").hide();
      $("#msgr-container-wa").hide();
      $("#msgr-container-cs").hide();
    });

    $(document).ready(function() {
      Modernizr.on('webp', function(result) {
        if (result) {
          $("body").addClass('webp');
        } else {
          $("body").addClass('no-webp');
        }
      })

      $("form#contact").validate({
        onfocusout: function (element) {
            $(element).valid();
        },
        errorClass: 'invalid-feedback',
        highlight: function(element) {
            $(element).addClass('is-invalid')
        },
        success: function(label, element) {
            $(element).removeClass('is-invalid').siblings('label.invalid-feedback').remove();
        },
        rules: {
          'name': {
            required: true,
            minlength: 3
          },
          'number': {
            required: true,
            minlength: 10,
            digits: true
          },
          'email' :{
            required: false
          },
          'message':{
            required: false
          }
        }
      });


      $("form#bamboo-contact").validate({
        onfocusout: function (element) {
            $(element).valid();
        },
        errorClass: 'invalid-feedback',
        highlight: function(element) {
            $(element).addClass('is-invalid')
        },
        success: function(label, element) {
            $(element).removeClass('is-invalid').siblings('label.invalid-feedback').remove();
        },
        rules: {
          'name': {
            required: true,
            minlength: 3
          },
          'number': {
            required: true,
            minlength: 10,
            digits: true
          },
          'email' :{
            required: false
          },
        }
      })
      function validateEmail($email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        return emailReg.test( $email );
      }
      $("#bamboo-contact").on('keyup', function(){
        var inputName = $("#InputName").val();
        var inputPhone = $("#InputPhone").val();
        var inputEmail = $("#InputEmail").val();
        if(inputName.length >= 3 && (inputPhone.length >= 10 && inputPhone.match(/^\d+$/))){
          if (inputEmail.length > 0) {
            if(validateEmail(inputEmail)) {
              $("#submit").attr('disabled', false);
            } else {
              $("#submit").attr('disabled', true);
            }
          } else {
            $("#submit").attr('disabled', false);
          }
        } else {
          $("#submit").attr('disabled', true);
        }
      })

      

      $('#bamboo-contact').on('submit', function(e) {
        e.preventDefault();
        var form = $('#bamboo-contact');
        $.ajax({
          url: '<?= site_url(['email-index']) ?>',
          data: form.serialize(),
          type: 'POST',
          dataType: "text",
          cache: false,
          beforeSend: function(event) {
            $("#submit").html("<i class='fa fa-spinner fa-spin'> </i> wait");
          },
          success: function(data) {
            if (data == 'sukses') {
              $("#submit").html("Kirim");
              window.dataLayer = window.dataLayer || [];
              window.dataLayer.push({
                'event': 'floatingContactForm'
              });
              alert('Terimakasih, Kontak anda sudah disimpan.');
              location.reload();
            } else {
              $("#submit").html("Kirim");
              alert('Terimakasih, Kontak anda sudah disimpan.');
              location.reload();
            }
          }
        });
      });

      $("form#bamboo-contact-two").validate({
        onfocusout: function (element) {
            $(element).valid();
        },
        errorClass: 'invalid-feedback',
        highlight: function(element) {
            $(element).addClass('is-invalid')
        },
        success: function(label, element) {
            $(element).removeClass('is-invalid').siblings('label.invalid-feedback').remove();
        },
        rules: {
          'name': {
            required: true,
            minlength: 3
          },
          'number': {
            required: true,
            minlength: 10,
            digits: true
          }
        }
      })
      $("#bamboo-contact-two").on('keyup', function(){
        var inputName = $("#inputNameChat").val();
        var inputPhone = $("#inputPhoneChat").val();
        if(inputName.length >= 3 && (inputPhone.length >= 10 && inputPhone.match(/^\d+$/))){
          $("#submit-two").attr('disabled', false);
        } else {
          $("#submit-two").attr('disabled', true);
        }
      })
      

      $('#bamboo-contact-two').on('submit', function(e) {
        e.preventDefault();
        var form = $('#bamboo-contact-two');
        $.ajax({
          url: '<?= site_url(['email-wa']) ?>',
          data: form.serialize(),
          type: 'POST',
          dataType: "text",
          cache: false,
          beforeSend: function(event) {
            $("#submit-two").html("<i class='fa fa-spinner fa-spin'> </i> wait");
          },
          success: function(data) {
            if (data == 'sukses') {
              $("#submit-two").html("Kirim");
              window.dataLayer = window.dataLayer || [];
              window.dataLayer.push({
                'event': 'floatingContactForm'
              });
              openInNewTab("https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20");
              location.reload();
            } else {
              $("#submit-two").html("Kirim");
              openInNewTab("https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20");
              location.reload();
            }
          }
        });
      });

      function openInNewTab(href) {
        Object.assign(document.createElement('a'), {
          target: '_blank',
          href: href,
        }).click();
      }

    });
    $('.wrapper_video2').click(function() {
      var id = $(this).children("a").attr("id");
      var url1 = 'https://www.youtube.com/embed/' + id;
      $('#my-modal-video').attr('src', url1 + '?autoplay=1');

      var gettitle = $(this).children("a").attr("title");
      $('#my-modal-title').text(gettitle);

      $('#modal-video---').modal();

      // console.log( $(this).children("iframe").attr("src") );
    });

    $("#modal-video---").on('hidden.bs.modal', function(e) {
      $("#modal-video--- iframe").attr("src", '');
    });
  </script>

  <script>
    $('.mail-link').on('click', function() {
      var email = $(this).attr("data-email").replace(/AT/, '@').replace(/DOT/, '.');
      window.open('mailto:' + email);
    });

    $('.phone-link.phone1').on('click', function() {
      var phone_1 = $(this).attr('data-phone').replace(/O/, '0').replace(/I/, '1').replace(/I/, '1').replace(/I/, '1').replace(/O/, '0').replace(/O/, '0');
      window.open('tel:' + phone_1);
    });

    $('.phone-link.phone2').on('click', function() {
      var phone_2 = $(this).attr('data-phone').replace(/O/, '0').replace(/I/, '1');
      window.open('tel:' + phone_2);
    });
  </script>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "RealEstateAgent",
      "name": "Green Bamboo Terrace",
      "image": "https://www.bambootajur.com/assets/images/logo.png",
      "@id": "",
      "url": "https://www.bambootajur.com/",
      "telephone": "0251-8574 255",
      "priceRange": "1.000.000.000",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Jalan Raya Tajur No.30, Tajur",
        "addressLocality": "Bogor",
        "postalCode": "16141",
        "addressCountry": "ID"
      },
      "sameAs": "https://www.facebook.com/GreenBambooTerrace"
    }
  </script>
  <script>
    $('.header-footer').click(function() {
      if ($(this).hasClass("active")) {
        $(this).removeClass('active');
        $(this).siblings('div').removeClass("active");

      } else {
        $(this).addClass('active');
        $(this).siblings('div').addClass("active");
      }




    });
    $.fn.extend({
      toggleText: function(a, b) {
        return this.text(this.text() == b ? a : b);
      }
    });
    $('#mymore').click(function() {
      $(this).siblings('.extratext').toggleClass("mobile-hide");
      $(this).toggleText('Selengkapnya', 'Sembunyikan');

    })
    // $(window).scroll(function() {

    //   $(".wa-btn-float").removeClass("onBottom");
    //   $(".home-btn-float").removeClass("onBottom");
    //   if($(window).scrollTop() + $(window).height() == $(document).height()) {
    //       //you are at bottom
    //       $(".home-btn-float").addClass("onBottom");
    //       $(".wa-btn-float").addClass("onBottom");
    //   }
    // });
  </script>
</body>

</html>