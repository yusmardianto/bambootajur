<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>
<nav id="navbar" class="" style="z-index:3;">
    <div class="nav-wrapper">
        <!-- Navbar Logo -->
        <div class="logo">
            <!-- Logo Placeholder for Inlustration -->
            <a href="<?= base_url();?>">
                <img src="<?= base_url();?>assets/images/logo.png" class="img-responsive p-10"/>
            </a>
        </div>

        <!-- Navbar Links -->
        <ul id="menu">
            <li><a href="<?= base_url();?>">Home</a></li>
            <li><a href="<?= site_url(['the-concept'])?>">The Concept</a></li>
            <li><a href="<?= site_url(['the-homes'])?>" class="dropdown-toggle active"  data-toggle="dropdown">The Homes&nbsp;<span><i class="fas fa-caret-down"></i></span></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= site_url(['the-homes'])?>#akane-tab" >Tipe Akane</a>
                    <a class="dropdown-item" href="<?= site_url(['the-homes'])?>#momiji-tab">Tipe Momiji</a>

                </div>
            </li>
            <li><a href="<?= site_url(['the-facilities'])?>">The Facilities</a></li>
            <li><a href="<?= site_url(['news'])?>">News</a></li>
            <li><a href="<?= site_url(['disclaimer'])?>">Disclaimer</a></li>
            <li><a href="<?= site_url(['contact'])?>">Contact</a></li>
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
        <a href="<?= base_url();?>pages/index">
            <img src="<?= base_url();?>assets/images/logo.png" class="img-responsive p-10"/>
        </a>
    </div>
    <ul id="menu" class="menu-mobile">
        <li><a href="<?= base_url();?>">Home</a></li>
        <li><a href="<?= site_url(['the-concept'])?>">The Concept</a></li>
        <li><a href="<?= site_url(['the-homes'])?>" class="dropdown-toggle active"  data-toggle="dropdown">The Homes&nbsp;<span><i class="fas fa-caret-down"></i></span></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= site_url(['the-homes'])?>#akane-tab" >Tipe Akane</a>
                    <a class="dropdown-item" href="<?= site_url(['the-homes'])?>#momiji-tab">Tipe Momiji</a>

                </div>
            </li>
        <li><a href="<?= site_url(['the-facilities'])?>">The Facilities</a></li>
        <li><a href="<?= site_url(['news'])?>">News</a></li>
        <li><a href="<?= site_url(['disclaimer'])?>">Disclaimer</a></li>
        <li><a href="<?= site_url(['contact'])?>">Contact</a></li>
    </ul>
</div>

<div class="bgimg-2">
  <div class="white-card-float">
    <div class="title-section-line">
      <div class="mr-md-4">
        <div class="jumbotron__category">
            <h6 class="head-title">THE UNIT</h6>
        </div>
      </div>
      <div>
        <hr>
      </div>
    </div>
    <div class="jumbotron__category9">
        <h3 class="head-title">Pilihan unit sesuai kebutuhan Anda</h3>
    </div>
    <p class="text-justify m-0">
      Setiap unit rumah di Green Bamboo Terrace Bogor menggunakan spesifikasi terbaik yang bisa kami berikan sebagai sebuah Developer. Kami menawarkan pilihan unit yang bisa Anda pilih sesuai dengan kebutuhan Anda.
    </p>
  </div>
</div>

<div class="container">
  <div style="margin: 40px 0;">
    <p class="home-desc">
      Green Bamboo Terrace Bogor terletak di Kawasan seluas 1,7 Ha dan memiliki jumlah unit yang sangat terbatas yaitu hanya 107 unit, menjadikan
      <b>Green Bamboo Terrace Bogor sangat exclusive dan private.</b>
    </p>
  </div>
  <ul class="nav nav-tabs green-tabs" role="tablist">
    <li class="nav-item text-center">
      <a class="nav-link active" id="akane-tab" data-toggle="tab" role="tab" aria-controls="type-akane" href="#type-akane" aria-selected="true">Type Akane</a>
    </li>
    <li class="nav-item text-center">
      <a class="nav-link" id="momiji-tab" data-toggle="tab" role="tab" aria-controls="type-momiji" href="#type-momiji" aria-selected="false">Type Momiji</a>
    </li>
  </ul>
  <div class="tab-content type-home">
    <div id="type-akane" class="tab-pane fade show active" role="tabpanel" aria-labelledby="akane-tab">
      <div class="row">
        <div class="col-md-8 col-xl-9">
          <img class="img-fluid" src="<?php echo base_url();?>assets/images/the-homes/type-akane.png" alt="Type Akane">
        </div>
        <div class="col-md-4 col-xl-3">
          <div class="side-info-showcase">
            <div class="list-info">
              <img src="<?php echo base_url();?>assets/images/icon/house_outline.png" alt="Luas">
              LB 95,5 M
            </div>
            <div class="list-info">
              <img src="<?php echo base_url();?>assets/images/icon/double_king_size_bed.png" alt="Kamar">
              3 Kamar Tidur
            </div>
            <a class="link-denah" href="#">Lihat denah Bangunan</a>
          </div>
        </div>
      </div>
      <div class="title-section-line break-section">
        <div class="mr-md-4">
          <div class="jumbotron__category">
              <h6 class="head-title">Interior</h6>
          </div>
        </div>
        <div>
          <hr>
        </div>
      </div>
      <div class="the-homes-showcase">
        <div class="row mx-0">
          <div class="col-12 col-sm-7 col-md-8 col-xl-9 px-0 pr-sm-2 text-center">
            <img class="img-fluid pb-3" src="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-1.png" alt="Showcase">
          </div>
          <div class="col-12 col-sm-5 col-md-4 col-xl-3 px-0 pl-sm-2 text-center">
            <img class="img-fluid pb-3" src="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-2.png" alt="Showcase">
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-xl-6 px-0 pr-sm-2 text-center">
            <img class="img-fluid pb-3" src="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-3.png" alt="Showcase">
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-xl-6 px-0 pl-sm-2 text-center">
            <img class="img-fluid pb-3" src="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-4.png" alt="Showcase">
          </div>
          <div class="col-12 col-sm-5 col-md-4 col-xl-3 px-0 pr-sm-2 text-center">
            <img class="img-fluid pb-3" src="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-5.png" alt="Showcase">
          </div>
          <div class="col-12 col-sm-7 col-md-8 col-xl-9 px-0 pl-sm-2 text-center">
            <img class="img-fluid pb-sm-3" src="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-6.png" alt="Showcase">
          </div>
        </div>
      </div>
    </div>
    <div id="type-momiji" class="tab-pane fade" role="tabpanel" aria-labelledby="momiji-tab">
      <div class="row">
        <div class="col-md-8 col-xl-9">
          <img class="img-fluid" src="<?php echo base_url();?>assets/images/the-homes/type-momiji.png" alt="Type Momiji">
        </div>
        <div class="col-md-4 col-xl-3">
          <div class="side-info-showcase">
            <div class="list-info">
              <img src="<?php echo base_url();?>assets/images/icon/house_outline.png" alt="Luas">
              LB 95,5 M
            </div>
            <div class="list-info">
              <img src="<?php echo base_url();?>assets/images/icon/double_king_size_bed.png" alt="Kamar">
              3 Kamar Tidur
            </div>
            <a class="link-denah" href="#">Lihat denah Bangunan</a>
          </div>
        </div>
      </div>
      <div class="title-section-line break-section">
        <div class="mr-md-4">
          <div class="jumbotron__category">
              <h6 class="head-title">Interior</h6>
          </div>
        </div>
        <div>
          <hr>
        </div>
      </div>
      <div class="the-homes-showcase">
        <div class="row mx-0">
          <div class="col-12 col-sm-7 col-md-8 col-xl-9 px-0 pr-sm-2 text-center">
            <img class="img-fluid pb-3" src="<?php echo base_url(); ?>assets/images/the-homes/momiji-interior-1.png" alt="Showcase">
          </div>
          <div class="col-12 col-sm-5 col-md-4 col-xl-3 px-0 pl-sm-2 text-center">
            <img class="img-fluid pb-3" src="<?php echo base_url(); ?>assets/images/the-homes/momiji-interior-2.png" alt="Showcase">
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-xl-6 px-0 pr-sm-2 text-center">
            <img class="img-fluid pb-3" src="<?php echo base_url(); ?>assets/images/the-homes/momiji-interior-3.png" alt="Showcase">
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-xl-6 px-0 pl-sm-2 text-center">
            <img class="img-fluid pb-3" src="<?php echo base_url(); ?>assets/images/the-homes/momiji-interior-4.png" alt="Showcase">
          </div>
          <div class="col-12 col-sm-5 col-md-4 col-xl-3 px-0 pr-sm-2 text-center">
            <img class="img-fluid pb-3" src="<?php echo base_url(); ?>assets/images/the-homes/momiji-interior-5.png" alt="Showcase">
          </div>
          <div class="col-12 col-sm-7 col-md-8 col-xl-9 px-0 pl-sm-2 text-center">
            <img class="img-fluid pb-sm-3" src="<?php echo base_url(); ?>assets/images/the-homes/momiji-interior-6.png" alt="Showcase">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="title-section-line break-section">
    <div class="mr-md-4">
      <div class="jumbotron__category">
          <h6 class="head-title">Materials</h6>
      </div>
    </div>
    <div>
      <hr>
    </div>
  </div>
  <div class="detail-materials">
    <img src="<?php echo base_url();?>assets/images/the-homes/detail-materials.png" alt="Detail Materials">
  </div>
  <div class="row justify-content-center">
      <div class="col-sm-6">
          <table class="table table-bordered">
              <tr>
                  <th width="30%">Spesifikasi</th>
                  <th>Keterangan</th>
              </tr>
              <tr>
                  <td>Pondasi</td>
                  <td>Strauss pile & beton bertulang pondasi batu kali</td>
              </tr>
              <tr>
                  <td>Dinding</td>
                  <td>Pasangan bata merah dan mortar</td>
              </tr>
              <tr>
                  <td>Facade</td>
                  <td>Batu hias paras jogja, ornament dan grillwood</td>
              </tr>
              <tr>
                  <td>Finishing cat</td>
                  <td>Kansai weathershield (exterior) & Kansai paint (interior)</td>
              </tr>
              <tr>
                  <td>Finishing lantai</td>
                  <td>
                  -	Carport (ceramic tile Sandi Mas 40 x40) <br />
                  -	Keramik dalam rumah HomogeneousTile Double Layer Alice 60 x 60
                  </td>
              </tr>
              <tr>
                  <td>Ruang Mandi/Toilet</td>
                  <td>Lantai & dinding (ceramic tile roman)</td>
              </tr>
              <tr>
                  <td>Struktur atas</td>
                  <td>Beton K300</td>
              </tr>
              <tr>
                  <td>Atap</td>
                  <td>Dak beton, waterproof sika dan system insulasi</td>
              </tr>
              <tr>
                  <td>Plafond</td>
                  <td>Interior (gypsum Jaya board/Yoshino board)</td>
              </tr>
              <tr>
                  <td>Tangki air</td>
                  <td>Ground water tank & roof tank Penguin</td>
              </tr>
              <tr>
                  <td>Pompa air</td>
                  <td>Shimizu</td>
              </tr>
              <tr>
                  <td>Septictank</td>
                  <td>Bio tank</td>
              </tr>
              <tr>
                  <td>Supply air</td>
                  <td>PDAM</td>
              </tr>
              <tr>
                  <td>Listrik</td>
                  <td>Jaringan listrik bawah tanah</td>
              </tr>
          </table>
      </div>
      <div class="col-sm-6">
          <table class="table table-bordered">
              <tr>
                  <th width="30%">Spesifikasi</th>
                  <th>Keterangan</th>
              </tr>
              <tr>
                  <td>Kusen pintu dan jendela</td>
                  <td><img src="<?php echo base_url();?>assets/images/the-homes/ykk.png" alt="ykk"></td>
              </tr>
              <tr>
                  <td>Pintu</td>
                  <td><img src="<?php echo base_url();?>assets/images/the-homes/daiken.png" alt="daiken"></td>
              </tr>
              <tr>
                  <td>Sanitary</td>
                  <td><img src="<?php echo base_url();?>assets/images/the-homes/toto.png" alt="toto"></td>
              </tr>
              <tr>
                  <td>Listrik</td>
                  <td>2200VA</td>
              </tr>
              <tr>
                  <td>AC</td>
                  <td><img src="<?php echo base_url();?>assets/images/the-homes/mitsubishi.png" alt="mitsubishi"></td>
              </tr>
              <tr>
                  <td>Saklar dan Power Outlet</td>
                  <td><img src="<?php echo base_url();?>assets/images/the-homes/panasonic.png" alt="panasonic"></td>
              </tr>
              <tr>
                  <td>Instalasi air panas</td>
                  <td>Pipa westpex</td>
              </tr>
              <tr>
                  <td>Filter air</td>
                  <td><img src="<?php echo base_url();?>assets/images/the-homes/toclas.png" alt="toclas"></td>
              </tr>
          </table>
      </div>
  </div>
  <div class="txt-center" style="margin-bottom: 40px;">
      <img src="<?php echo base_url();?>assets/images/detail/toclas.png" class="w-100" />
  </div>
</div>

<!-- FOOTER -->

<div style="color: #000;background-color:#fff;text-align:center;text-align: justify;">
    <div class="row bg-footer no-margin">

        <div class="col-md-3 f-first">
            <div class="detail-footer">
                <p class="header-footer">Marketing Gallery</p>
                Jalan Raya Tajur No.30, Tajur - Kota Bogor 16141<br>
                Jawa Barat, Indonesia<br>
                Phone <a href="tel:08111403280">0811 1403 280</a><br>
                Phone <a href="tel:02518574255">0251-8574 255</a><br>
                Email <a href="mailto:bambootajur@gmail.com">bambootajur@gmail.com</a><br>
            </div>
        </div>

        <div class="col-md-3">
            <div class="detail-footer">
                <p class="header-footer">Show Unit</p>
                Jalan Unitex, Tajur - Kota Bogor 16141<br>
                Jawa Barat, Indonesia<br>
                Phone <a href="tel:08111403280">0811 1403 280</a><br>
                Email <a href="mailto:bambootajur@gmail.com">bambootajur@gmail.com</a><br>
            </div>
        </div>

        <div class="col-md-3 ml-auto f-first">
            <div class="img-footer f-first">
                <p class="m-nol header-footer no-margin">Development by</p>
                <img src="<?= base_url();?>assets/images/vendor/kbj.png" class="img-kbj" />
            </div>
            <a href="/privacy-policy" class="footer-link-item">Privacy Policy</a>
        </div>
        <!-- <div class="col-md-3 f-first">
            <div class="img-footer">
                <p class="header-footer">Marketing by</p>
                <img src="</?= base_url();?>assets/images/vendor/shinmichi.png" class="img-shinmichi" />
            </div>
        </div> -->

            <!-- icon -->

            <div class="col-sm-12 txt-center f-fav">
                <a href="https://www.facebook.com/GreenBambooTerrace" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="https://twitter.com/BambooTajur" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/bambootajur.official/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>

        </div>
    </div>

    <!-- copyright -->
    <div style="color: #fff;background-color:#088770;text-align:center;text-align: justify;">
        <div class="col-sm-12 txt-center f-cop">
            &copy; Copyright <?php echo date(Y) ?>. All Rights Reserved
        </div>
    </div>

    <!-- return to top -->
<!-- <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a> -->
<a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.." class="floating-whatsapp" target="_blank">
        <div class="f-whatsapp"> </div>
        <p class="floating-teks">0811 1403 280</p>
    </a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="<?= base_url();?>assets/js/navbar.js"></script>

<script>
    $("#momijibtn").click(function() {
    $('html, body').animate({
        scrollTop: $("Div").offset().top
    }, 2000);
});

$("#akanebtn").click(function() {
    $('html, body').animate({
        scrollTop: $("Div").offset().top
    }, 2000);
});
</script>

<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(100);    // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(0);   // Else fade out the arrow
        }
    });
    $('#return-to-top').click(function() {      // When arrow is clicked
        $('body,html').animate({
            scrollTop : 0                       // Scroll to top of body
        }, {
            duration: 750,
            // easing: "easeOutQuint"
            });
    });
</script>

<script>
    $(function() {
    var header = $("nav");

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            header.addClass("scrolled");
        } else {
            header.removeClass("scrolled");
        }
    });
    });

    $(function() {
    var header = $(".menuIcon");

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            header.addClass("scrolled-icon");
        } else {
            header.removeClass("scrolled-icon");
        }
    });
    });
</script>
<script>
    function lockScroll() {
        if ($('body').hasClass('lock-scroll')) {
            $('body').removeClass('lock-scroll');
            }
        else {
            $('body').addClass('lock-scroll');
        }
    }
</script>

<script>
jQuery(function(){
   jQuery('#doAction').dropdown("toggle");
   jQuery('#menu li div').removeClass("show");
});
</script>
