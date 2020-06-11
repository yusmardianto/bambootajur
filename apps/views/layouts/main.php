
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
  <link rel="icon" href="<?php echo base_url();?>assets/images/ico16.png" type="image/gif" sizes="16x16">
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/ico16.png" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/images/ico16.png" />
  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:type" content="website" />
  <meta property="og:description" content="<?php echo $description; ?>" />
  <meta property="og:url" content="<?php echo base_url();?>" />
  <meta property="og:site_name" content="Bamboo Tajur" />
  <meta property="og:image" content="<?= base_url();?>assets/images/ogp-image.jpg" />
  <meta property="og:locale:alternate" content="id_ID" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=no name="viewport">
  <!-- Stylesheet -->
  <?php echo $this->layouts->print_includes('css'); ?>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- End Stylesheet-->

  <?php
    if (http_response_code() != 404 && $_SERVER['HTTP_HOST'] == "www.bambootajur.com") {
  ?>
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MHZQ3QG');
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
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MHZQ3QG"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <?php
    }
   ?>

<nav id="navbar" class="" style="z-index:3;">
    <div class="nav-wrapper">
        <!-- Navbar Logo -->
        <div class="logo">
            <!-- Logo Placeholder for Inlustration -->
            <a href="<?= base_url();?>" alt="header-link">
                <img src="<?= base_url();?>assets/images/logo.png" class="img-responsive p-10" alt="header-logo"/>
            </a>
        </div>

        <!-- Navbar Links -->
        <ul id="menu">
          <?php echo $this->uri->segment(1) != '' ? '<li><a href="'.base_url().'">Home</a></li>' : ''; ?>
          <li><a href="<?= site_url(['the-concept'])?>" <?php echo $this->uri->segment(1) == 'the-concept' ? 'class="active"' : ''; ?> >The Concept</a></li>
          <li><a href="<?= site_url(['the-homes'])?>" class="dropdown-toggle <?php echo $this->uri->segment(1) == 'the-homes' ? 'active' : ''; ?>"  data-toggle="dropdown">The Homes&nbsp;<span><i class="fas fa-caret-down"></i></span></a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?= site_url(['the-homes'])?>#akane-tab" >Tipe Akane</a>
                  <a class="dropdown-item" href="<?= site_url(['the-homes'])?>#momiji-tab">Tipe Momiji</a>
              </div>
          </li>
          <li><a href="<?= site_url(['the-facilities'])?>" <?php echo $this->uri->segment(1) == 'the-facilities' ? 'class="active"' : ''; ?> >The Facilities</a></li>
          <li><a href="<?= site_url(['news'])?>" <?php echo $this->uri->segment(1) == 'news' ? 'class="active"' : ''; ?> >News and Events</a></li>
          <li><a href="<?= site_url(['disclaimer'])?>" <?php echo $this->uri->segment(1) == 'disclaimer' ? 'class="active"' : ''; ?> >Disclaimer</a></li>
          <li><a href="<?= site_url(['contact'])?>" <?php echo $this->uri->segment(1) == 'contact' ? 'class="active"' : ''; ?> >Contact</a></li>
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
        <a href="<?= base_url();?>pages/index" aria-label="Homepage Link">
            <img src="<?= base_url();?>assets/images/logo.png" class="img-responsive p-10" alt="logo-img"/>
        </a>
    </div>
    <ul id="menu-mobile" class="menu-mobile">
        <?php echo $this->uri->segment(1) != '' ? '<li><a href="'.base_url().'">Home</a></li>' : ''; ?>
        <li><a href="<?= site_url(['the-concept'])?>" <?php echo $this->uri->segment(1) == 'the-concept' ? 'class="active"' : ''; ?> >The Concept</a></li>
        <li><a href="<?= site_url(['the-homes'])?>" class="dropdown-toggle <?php echo $this->uri->segment(1) == 'the-homes' ? 'active' : ''; ?>"  data-toggle="dropdown">The Homes&nbsp;<span><i class="fas fa-caret-down"></i></span></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= site_url(['the-homes'])?>#akane-tab" >Tipe Akane</a>
                    <a class="dropdown-item" href="<?= site_url(['the-homes'])?>#momiji-tab">Tipe Momiji</a>
                </div>
        </li>
        <li><a href="<?= site_url(['the-facilities'])?>" <?php echo $this->uri->segment(1) == 'the-facilities' ? 'class="active"' : ''; ?> >The Facilities</a></li>
        <li><a href="<?= site_url(['news'])?>" <?php echo $this->uri->segment(1) == 'news' ? 'class="active"' : ''; ?> >News and Events</a></li>
        <li><a href="<?= site_url(['disclaimer'])?>" <?php echo $this->uri->segment(1) == 'disclaimer' ? 'class="active"' : ''; ?> >Disclaimer</a></li>
        <li><a href="<?= site_url(['contact'])?>" <?php echo $this->uri->segment(1) == 'contact' ? 'class="active"' : ''; ?> >Contact</a></li>
    </ul>
</div>

  <?= $content?>

  <!-- FOOTER -->

  <?php if ($this->uri->segment(1) != 'privacy-policy' && $this->uri->segment(1) != 'disclaimer'): ?>

    <div style="color: #000;background-color:#fff;text-align:center;text-align: justify;">
      
      <div class="row bg-footer no-margin">

          <div class="col-md-3 f-first">
              <div class="detail-footer">
                  <p class="header-footer">Marketing Gallery</p>
                  Jalan Raya Tajur No.30, Tajur - Kota Bogor 16141<br>
                  Jawa Barat, Indonesia<br>
                  Phone <a class="phone-link phone1" data-phone="O8III4O328O">0811 1403 280</a><br>
                  Phone <a class="phone-link phone2" data-phone="O25I8574255">0251-8574 255</a><br>
                  Email <a class="mail-link" data-email="bambootajurATgmailDOTcom">bambootajur@gmail.com</a><br>
              </div>
          </div>

          <div class="col-md-3 f-first">
              <div class="detail-footer">
                  <p class="header-footer">Show Unit</p>
                  Jalan Unitex, Tajur - Kota Bogor 16141<br>
                  Jawa Barat, Indonesia<br>
                  Phone <a class="phone-link phone1" data-phone="O8III4O328O">0811 1403 280</a><br>
                  Email <a class="mail-link" data-email="bambootajurATgmailDOTcom">bambootajur@gmail.com</a><br>
              </div>
          </div>

          <div class="col-md-3">
              <div class="detail-footer">
                  <p class="header-footer">Pages</p>
                  <ul class="navbar-footer">
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li><a href="<?= site_url(['the-concept'])?>">The Concept</a></li>
                    <li><a href="<?= site_url(['the-homes'])?>">The Homes</a></li>
                    <li><a href="<?= site_url(['the-facilities'])?>">The Facilities</a></li>
                    <li><a href="<?= site_url(['news'])?>">News and Events</a></li>
                    <li><a href="<?= site_url(['disclaimer'])?>">Disclaimer</a></li>
                    <li><a href="<?= site_url(['contact'])?>">Contact</a></li>
                  </ul>
              </div>
          </div>

          <div class="col-md-3 ml-auto f-first">
              <div class="img-footer f-first">
                  <p class="m-nol header-footer no-margin">Development by</p>
                  <img src="<?= base_url();?>assets/images/vendor/kbj.png" class="img-kbj" alt="kbj-img"/>
              </div>
              <a href="<?= site_url(['privacy-policy'])?>" class="footer-link-item">Privacy Policy</a>
          </div>
          <!-- <div class="col-md-3 f-first">
              <div class="img-footer">
                  <p class="header-footer">Marketing by</p>
                  <img src="</?= base_url();?>assets/images/vendor/shinmichi.png" class="img-shinmichi" />
              </div>
          </div> -->

          <!-- icon -->

          <!-- google map multiple marker -->
          <!-- <div class="col-md-6">
            <div style="--aspect-ratio: 4/2;">
              <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1CS1SDIoKboqY-iYZkcinCHfRlzlSLTpe" width="640" height="480"></iframe>
            </div>
          </div> -->
          <!-- end google map multiple marker -->

          <div class="col-md-12">
            <p>
              <br><br>
              <p class="m-nol header-footer no-margin">Tentang Kami</p>
              <br>
              Green Bamboo Terrace, rumah murah siap huni dengan lokasi strategis di Tajur, Bogor. Tersedia rumah tipe 73 dengan 2 kamar tidur dan tipe 95 dengan 3 kamar tidur. Fasilitas lengkap mulai dari club house, mushola, taman, area bermain anak, dan diawasi dengan CCTV.
              <span id="dots"></span><span id="see-more-desc">
                <br>
                Harga rumah mulai dari Rp1M-an dengan program KPR yang menarik dan menguntungkan. Kami bekerjasama dengan berbagai bank terpercaya dan ternama. Nikmati DP murah, cicilan ringan, dan banyak penawaran menarik setiap bulannya.
                <br>
                Lokasi rumah dekat dengan stasiun LRT Sentul Bogor, Tol Bocimi, Stasiun Bogor, Mall Boxies 123, dan AEON Tajur. Jangan ragu untuk menghubungi kami dan dapatkan informasi seputar harga, fasilitas, promo, tipe rumah, dan lain-lain. Kami selalu siap melayani Anda.
                <br><br class="d-none d-sm-block"><br class="d-none d-sm-block"><br class="d-none d-sm-block">
              </span>
              <br>
              <button class="mt-2 btn btn-primary w-auto" onclick="seeMores()" id="myBtn">See More</button>
            </p>
          </div>

          <div class="col-sm-12 txt-center f-fav">
            <div class="footer-sosmed">
              <a href="https://www.facebook.com/GreenBambooTerrace" rel="noopener noreferrer" aria-label="Click here to visit our facebook account" target="_blank"><i class="fab fa-facebook-square"></i></a>
              <a href="https://twitter.com/BambooTajur" rel="noopener noreferrer" target="_blank" aria-label="Click here to visit our twitter account"><i class="fab fa-twitter"></i></a>
              <a href="https://www.instagram.com/bambootajur.official/" rel="noopener noreferrer" target="_blank" aria-label="Click here to visit our instagram account"><i class="fab fa-instagram"></i></a>
            </div>
          </div>

      </div>
  </div>

  <!-- copyright -->
  <div style="color: #fff;background-color:#088770;text-align:center;text-align: justify;">
      <div class="col-sm-12 txt-center f-cop">
          &copy; Copyright <?php echo date(Y) ?>. All Rights Reserved
      </div>
  </div>

  <?php endif; ?>

  <?php echo $this->layouts->print_includes('js'); ?>
  </script>
  <script src="<?php echo base_url();?>assets/js/script.js"></script>

  <!-- <input type="checkbox" id="messenger" class="icon-checkbox"> -->

  <div class="msgr-container" style="display: none;">
      <div class="messenger">
          <div class="hero2"></div>
          <div class="scrollable">
              <header class="header hero">
                <div class="home-btn-float-2">
                  <div id="closeMenu" >X</div>
                </div>
                  <p>Hi, we're</p>
                  <h1>Green Bamboo Terrace</h1>
                  <p>Silakan isi form di bawah ini untuk mendapatkan informasi lebih lanjut</p>
              </header>
              <div>
                <form class="form-style" id="bamboo-contact" name="bamboo-contact" method="POST">
                    <div style="text-align:left; font-size:12px">
                    <label for="InputName">Nama</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control contact-popup-custom" id="InputName"
                            placeholder="Nama Lengkap" required>
                    </div>
                    <div style="text-align:left; font-size:12px">
                    <label for="InputEmail">Alamat Email</label>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control contact-popup-custom" id="InputEmail" aria-describedby="emailHelp"
                            placeholder="Email" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div style="text-align:left; font-size:12px">
                    <label for="InputPhone">No.Telepon</label>
                    </div>
                    <div class="form-group">
                        <input type="text" name="number" class="form-control contact-popup-custom" id="InputPhone"
                            placeholder="No. Telepon" maxlength="13" required>
                    </div>
                    <div class="w-100 txt-center" style="margin-top: 20px">
                        <button type="submit" class="btn btn-primary" id="submit"
                            data-loading-text="Loading...">Kirim</button>
                    </div>
                </form>
              </div>
          </div>
          <footer class="footer">&copy; PT. KEBUN BAMBU JAKARTA <br>All Rights Reserved
          </footer>

      </div>
  </div>
  
  <div class="home-btn-float">
  <picture>
    <source type="image/webp" srcset="<?= base_url();?>assets/images/contactus_-_btn.webp" />
	  <img src="<?= base_url();?>assets/images/contactus_-_btn.png" alt="Email" class="cta-mail-us-float">
  </picture>
  </div>
  
  <div class="wa-btn-float">
	<a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20" target="_blank">
    <picture>
      <source type="image/webp" srcset="<?= base_url();?>assets/images/New_CTA_Button_2.webp" />
		  <img src="<?= base_url();?>assets/images/New_CTA_Button_2.png" alt="WA" class="cta-contact-us-float">
    </picture>
	</a>
  </div>

  <!-- <input type="checkbox" id="messenger" class="icon-checkbox">
  <label for="messenger" class="home-btn-float">
    <div class="text">
      Contact Us
    </div>
    <div class="icon-right">
      <img class="email" src="<?= base_url();?>assets/images/email.png" alt="Email">
      <img class="close" src="<?= base_url();?>assets/images/x.png" alt="Close">
    </div>
  </label> -->


  <!--===== Floating Contact Form ======-->
  <script>
    var contact_open = false;
    
      window.onload = function () {
        if (!contact_open) {
          if (!isMobile()) {
            $(".home-btn-float").click();
            contact_open = true; 
          } 
          <?php 
            if ($this->uri->segment(1) == ''):
          ?>
            if (isMobile()) {
              $(".home-btn-float").click();
              contact_open = true; 
            }
          <?php
            endif;
          ?>
        }
      }

    $(".home-btn-float").click( function() {
      $(".home-btn-float").hide();
      $(".msgr-container").show();
      contact_open = true;
    });
    $(".home-btn-float-2").click( function() {
      $(".home-btn-float").show();
      $(".msgr-container").hide();
      contact_open = false;
    });

    function isMobile() {
        return (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino|android|ipad|playbook|silk/i
            .test(navigator.userAgent || navigator.vendor || window.opera) ||
            /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
            .test((navigator.userAgent || navigator.vendor || window.opera).substr(0, 4)))
    }

    $(document).ready(function() {

        $('#bamboo-contact').on('submit', function(e) {
            e.preventDefault();
            var form = $('#bamboo-contact');
            $.ajax({
                url: '<?= site_url(['email-index']) ?>',
                data: form.serialize(),
                type: 'POST',
                dataType: "text",  
                cache:false,
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
    });
  </script>

  <script>
    $('.mail-link').on('click', function () {
      var email = $(this).attr("data-email").replace(/AT/,'@').replace(/DOT/,'.');
      window.open('mailto:'+email);
    });

    $('.phone-link.phone1').on('click', function () {
      var phone_1 = $(this).attr('data-phone').replace(/O/,'0').replace(/I/,'1').replace(/I/,'1').replace(/I/,'1').replace(/O/,'0').replace(/O/,'0');
      window.open('tel:'+phone_1);
    });

    $('.phone-link.phone2').on('click', function () {
      var phone_2 = $(this).attr('data-phone').replace(/O/,'0').replace(/I/,'1');
      window.open('tel:'+phone_2);
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
    } ,
    "sameAs": "https://www.facebook.com/GreenBambooTerrace"
  }
  </script>

</body>
</html>
