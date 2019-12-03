<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>
<style>

</style>
<div style="padding-top: 105px; background-color: #fff;">
  <section class="home-section">
    <div style="position: relative;" class="container">
      <div id="banner-top-page" class="carousel slide" data-ride="carousel" data-interval="7000">
        <ol class="side-indicators carousel-indicators">
          <li data-target="#banner-top-page" data-slide-to="0" class="active"></li>
          <li data-target="#banner-top-page" data-slide-to="1"></li>
          <li data-target="#banner-top-page" data-slide-to="2"></li>
          <li data-target="#banner-top-page" data-slide-to="3"></li>
          <li data-target="#banner-top-page" data-slide-to="4"></li>
          <li data-target="#banner-top-page" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="wrapper-carousel-img">
              <img class="img-fluid" src="<?= base_url();?>assets/images/home/promo-banner-1.png" alt="Top Banner">
            </div>
          </div>
          <div class="carousel-item">
            <div class="wrapper-carousel-img">
              <img class="img-fluid" src="<?= base_url();?>assets/images/home/promo-banner-2.png" alt="Top Banner">
            </div>
          </div>
          <div class="carousel-item">
            <div class="wrapper-carousel-img">
              <img class="img-fluid" src="<?= base_url();?>assets/images/home/promo-banner-3.png" alt="Top Banner">
            </div>
          </div>
          <div class="carousel-item">
            <div class="wrapper-carousel-img">
              <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_7182.jpg" alt="Top Banner">
            </div>
            <div class="label-top-banner">
              A Taste Of Japanese Perfection
            </div>
          </div>
          <div class="carousel-item">
            <div class="wrapper-carousel-img">
              <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_4869.jpg" alt="Top Banner">
            </div>
            <div class="label-top-banner">
              A Taste Of Japanese Perfection
            </div>
          </div>
          <div class="carousel-item">
            <div class="wrapper-carousel-img">
              <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_4120.jpg" alt="Top Banner">
            </div>
            <div class="label-top-banner">
              A Taste Of Japanese Perfection
            </div>
          </div>
        </div>
      </div>
      <div class="slider-arrow">
        <a class="left" href="#banner-top-page" role="button" data-slide="prev">
          <img src="<?= base_url();?>assets/images/left_arrow.png" alt="Left Arrow">
          <span class="sr-only">Previous</span>
        </a>
        <a class="right" href="#banner-top-page" role="button" data-slide="next">
          <img src="<?= base_url();?>assets/images/right_arrow.png" alt="Right Arrow">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <section class="home-section section-desc" style="margin-top: 70px;">
    <div class="container">
      <div class="why-choose-us">
        <h2 class="arvo">Why Choose Us?</h2>
        <p>
          Green Bamboo Terrace Bogor adalah sebuah standar baru untuk hunian tinggal yang Nyaman, Aman, dan Asri yang terletak di Kota Bogor. Green Bamboo Terrace Bogor merupakan sebuah hunian eksklusif di Kota Bogor, yang dibangun menggunakan material terbaik standard Jepang.
        </p>
        <p>
          Lokasi Green Bamboo Terrace Bogor terletak di Lokasi strategis, yaitu daerah Tajur yang merupakan salah satu pusat bisnis dan niaga di Kota Bogor, dan dekat dengan pintu Tol Jagorawi dan Tol Bocimi.
        </p>
      </div>
    </div>
    <div class="container terrace-container">
      <div class="row">
        <div class="col-md-6">
          <div class="at-green-bamboo" style="margin-top: 70px;">
                <h2 class="head-title title-right">AT GREEN BAMBOO TERRACE</h2>
                <p class="arvo-italic">
                  We deliver you the best value for your dream home and future investment with
                  <strong class="arvo-bold-italic">a Taste Of Japanese Perfection</strong>
                </p>
          </div>
        </div>
        <div class="col-md-6">
          <iframe class="youtube-video-container" src="https://www.youtube.com/embed/F4PovsepfaM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
   
  </section>
  <div style="background-color: rgba(0, 0, 0, 0.05);">
    <section class="home-section section-the-homes" style="margin-top: 70px;">
      <div class="container">
        <h2 class="arvo middle">THE HOMES</h2>
        <br>
        <div class="row">
          <div class="col-md-6">
            <div class="home-type float-right">
              <div id="slide-the-homes-left" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="wrapper-carousel-img">
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_7182.jpg" alt="THE HOMES">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="wrapper-carousel-img">
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_1682.jpg" alt="THE HOMES">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="wrapper-carousel-img">
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_4120.jpg" alt="THE HOMES">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="wrapper-carousel-img">
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_4759.jpg" alt="THE HOMES">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="wrapper-carousel-img">
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_4769.jpg" alt="THE HOMES">
                    </div>
                  </div>
                </div>
              </div>
              <div class="footer-home-type text-right">
                <a href="#slide-the-homes-left" role="button" data-slide="prev">
                  <span class="sr-only">Previous</span>
                  <img src="<?= base_url();?>assets/images/left_arrow.png" alt="Left Arrow">
                </a>
                <a href="<?= site_url(['the-homes'])?>#akane-tab">
                  <span>TIPE</span>
                  <h3>AKANE</h3>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="home-type float-left">
              <div id="slide-the-homes-right" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="wrapper-carousel-img">
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_4869.jpg" alt="THE HOMES">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="wrapper-carousel-img">
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_5223.jpg" alt="THE HOMES">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="wrapper-carousel-img">
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_5237.jpg" alt="THE HOMES">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="wrapper-carousel-img">
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_5246.jpg" alt="THE HOMES">
                    </div>
                  </div>
                </div>
              </div>
              <div class="footer-home-type text-left">
                <a href="<?= site_url(['the-homes'])?>#momiji-tab">
                  <span>TIPE</span>
                  <h3>MOMIJI</h3>
                </a>
                <a href="#slide-the-homes-right" role="button" data-slide="next">
                  <img src="<?= base_url();?>assets/images/right_arrow.png" alt="Right Arrow">
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <section class="home-section section-facilities">
    <div class="container">
      <div class="card-slider">
        <h2 class="arvo middle mt-0"><a href="<?= site_url(['the-facilities'])?>">THE FACILITIES</a></h2>
        <div id="slider-the-facilities" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item text-center active">
              <div>
                <img class="img-fluid" src="<?= base_url();?>assets/images/home/amusement_park.png" alt="THE FACILITIES">
                <h3>Taman & Area Bermain Anak</h3>
                <p>Di dalam Perumahan tersedia juga taman dan area bermain anak, sehingga membuat hunian menjadi lebih asri dan anak-anak dapat menikmati fasilitas bermain anak di Green Bamboo Terrace Bogor.</p>
              </div>
            </div>
            <div class="carousel-item text-center">
              <div>
                <img class="img-fluid" src="<?= base_url();?>assets/images/home/window.png" alt="THE FACILITIES">
                <h3>Mushola</h3>
                <p>Tak lupa kami menyediakan Mushola untuk memudahkan penghuni kami dalam beribadah.</p>
              </div>
            </div>
            <div class="carousel-item text-center">
              <div>
                <img class="img-fluid" src="<?= base_url();?>assets/images/home/chair.png" alt="THE FACILITIES">
                <h3>Club House</h3>
                <p>Dengan adanya ClubHouse yang berada di dalam perumahan Green Bamboo Terrace Bogor membuat Anda dan keluarga dapat menikmati hidup yang lebih nyaman. Fasilitas yang tersedia di ClubHouse adalah Kolam renang anak, ruang membaca, dan ruang serbaguna yang dapat dimanfaatkan sebagai ruang pertemuan warga atau ruang untuk menerima tamu.</p>
              </div>
            </div>
            <div class="carousel-item text-center">
              <div>
                <img class="img-fluid" src="<?= base_url();?>assets/images/home/home.png" alt="THE FACILITIES">
                <h3>Security & CCTV</h3>
                <p>Keamanan menjadi perhatian kami, sehingga dapat menjamin rasa nyaman dan aman bagi setiap penghuni di Green Bamboo Terrace Bogor.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-slider-arrow">
          <a class="left" href="#slider-the-facilities" role="button" data-slide="prev">
            <img src="<?= base_url();?>assets/images/left_arrow.png" alt="Left Arrow">
            <span class="sr-only">Previous</span>
          </a>
          <a class="right" href="#slider-the-facilities" role="button" data-slide="next">
            <img src="<?= base_url();?>assets/images/right_arrow.png" alt="Right Arrow">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="home-section" style="margin-top: 70px;">
    <div class="container">
      <h2 class="arvo middle mt-0"><a href="<?= site_url(['news'])?>">NEWS</a></h2>
      <div class="row">
        <div class="col-md-4 mt-4">
          <div class="box-card">
            <div class="box-card-heading">
              <span>Sabtu - Minggu</span>
              <br>
              <span>26 - 27 Oktober 2019</span>
            </div>
            <div class="box-card-content">
              <h3>
                <a href="<?php echo base_url ('news'); ?>">
                  Momijigari Festival 26-27 Oktober, Keriuhan di Penghujung Bulan Oktober
                </a>
              </h3>
            </div>
            <div class="box-card-footer">
              <a href="<?php echo base_url ('news'); ?>">Lihat Selanjutnya ></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4">
          <div class="box-card">
            <div class="box-card-heading">
              <span>Senin</span>
              <br>
              <span>21 Oktober 2019</span>
            </div>
            <div class="box-card-content">
              <h3>
                <a href="<?php echo base_url ('news/serah-terima-unit-phase-1'); ?>">
                  Serah Terima Unit Phase 1
                </a>
              </h3>
            </div>
            <div class="box-card-footer">
              <a href="<?php echo base_url ('news/serah-terima-unit-phase-1'); ?>">Lihat Selanjutnya ></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4">
          <div class="box-card">
            <div class="box-card-heading">
              <span>Jumat</span>
              <br>
              <span>11 Oktober 2019</span>
            </div>
            <div class="box-card-content">
              <h3>
                <a href="<?php echo base_url ('news/customer-gathering-event-get-special-discount-and-gift'); ?>">
                  Customer Gathering Event: Get Special Discount and Gift
                </a>
              </h3>
            </div>
            <div class="box-card-footer">
              <a href="<?php echo base_url ('news/customer-gathering-event-get-special-discount-and-gift'); ?>">Lihat Selanjutnya ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="home-section banner-home-contact-us" style="margin-top: 70px; background-image: url('<?= base_url();?>assets/images/home/bg-home-contact.png');">
    <div class="white-box">
      <h3 class="arvo-bold"><strong>Book Now</strong></h3>
      <h4><strong>Only Rp 10,000,000 - </strong></h4>
      <span class="banner-sub">Limited Units</span>
      <p>Feel free to get in touch with us! We'd be happy to help.</p>
      <a class="btn-contact" href="<?= site_url(['contact'])?>">Contact Us</a>
    </div>
  </section>
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
                <img src="<?= base_url();?>assets/images/vendor/kbj.png" class="img-kbj" alt="kbj-img"/>
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
            <a href="https://www.facebook.com/GreenBambooTerrace" rel="noopener noreferrer" aria-label="Click here to visit our facebook account" target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a href="https://twitter.com/BambooTajur" rel="noopener noreferrer" target="_blank" aria-label="Click here to visit our twitter account"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/bambootajur.official/" rel="noopener noreferrer" target="_blank" aria-label="Click here to visit our instagram account"><i class="fab fa-instagram"></i></a>
        </div>

    </div>
</div>

<!-- copyright -->
<div style="color: #fff;background-color:#088770;text-align:center;text-align: justify;">
    <div class="col-sm-12 txt-center f-cop">
        &copy; Copyright <?php echo date(Y) ?>. All Rights Reserved
    </div>
</div>

<input type="checkbox" id="messenger" class="icon-checkbox">

<div class="msgr-container">
    <div class="messenger">
        <div class="hero"></div>
        <div class="hero2"></div>
        <div class="scrollable">
            <header class="header">
                <p>Hi, we're</p>
                <h1>Green Bamboo Terrace</h1>
            </header>
            <div class="card-nup">
                <!-- <p class="nup">NUP Only Rp. 5 Juta</p> -->
                <p class="pri">Contact Us Now</p>
                <!-- <p class="nup">Only Rp 10,000,000 – Limited Units</p> -->
                <p class="data">Silahkan isi data informasi di bawah ini atau langsung hubungi kami di: </p>
                <p class="data">
                  <a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.." class="whatsapp-phone">
                    <img src="<?= base_url();?>assets/images/New_CTA_Button_2.png" alt="Whatsapp">
                  </a>
                </p>
                <p class="data">Kami siap menghubungi Anda.</p>
            </div>
            <div style="max-height:200px; overflow-y:scroll">
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
                  <!-- <ul class="ul-wa">
                      <li class="li-wa"><a
                              href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.."
                              class="phone"><img
                                  src="<?= base_url();?>assets/images/icon/whatsapp.png" class="w-30" alt="whatsapp-icon" />0811 1403 280</a></li>
                      <li class="li-wa"><a
                              href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.."><img
                                  src="<?= base_url();?>assets/images/icon/whatsapp.png" class="w-30" alt="whatsapp-icon" /></a></li>
                  </ul> -->
              </form>
            </div>
        </div>
        <footer class="footer">&copy; PT. KEBUN BAMBU JAKARTA <br>All Rights Reserved
        </footer>

    </div>
</div>

<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
	  <div class="modal-header" style="padding: 5px 1rem;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20" target="_blank" rel="noreferrer">
          <img src="<?= base_url();?>assets/images/popup-banner.png" style="width:100%"/>
        </a>
        <style>
          .btn-contact-wa {
            margin: 35px auto 0 auto;
            padding: 10px 35px;
            border-radius: 5px;
            background-color: #037a68;
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-align: center;
          }
          .btn-contact-wa:hover {
            color: #fff;
            background-color: #026153;
            text-decoration: none;
          }
        </style>
        <div class="text-center">
          <a class="btn-contact-wa" href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20" target="_blank" rel="noreferrer">
            <img width="35" class="d-none d-sm-inline-block img-fluid mr-3" src="<?= base_url();?>assets/images/icon/wa-white.png" alt="Whatsapp">
            Kontak kami sekarang untuk konfirmasi kehadiran anda pada event ini
          </a>
        </div>
      </div>
    </div>
  </div>
</div> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
// $(function() {
//     var header = $("#navbar");

//     $(window).scroll(function() {
//         var scroll = $(window).scrollTop();
//         if (scroll >= 50) {
//             header.addClass("scrolled");
//         } else {
//             header.removeClass("scrolled");
//         }
//     });
// });

// $(function() {
//   var header = $(".menuIcon");

//   $(window).scroll(function() {
//     var scroll = $(window).scrollTop();
//     if (scroll >= 50) {
//         header.addClass("scrolled-icon");
//     } else {
//         header.removeClass("scrolled-icon");
//     }
//   });
// });
</script>
<script>
function lockScroll() {
    if ($('body').hasClass('lock-scroll')) {
        $('body').removeClass('lock-scroll');
    } else {
        $('body').addClass('lock-scroll');
    }
}
</script>
<script type="text/javascript">
function isMobile() {
    return (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino|android|ipad|playbook|silk/i
        .test(navigator.userAgent || navigator.vendor || window.opera) ||
        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
        .test((navigator.userAgent || navigator.vendor || window.opera).substr(0, 4)))
}

function checkboxEvent() {
    if (document.getElementById('messenger').checked) {
        $('.menuIcon').attr('style', 'display:none');
    } else {
        $('.menuIcon').attr('style', 'display:false');
    }
}

$(document).ready(function() {
    if (isMobile()) {
        $('#messenger').removeAttr("checked");
        $('#messenger').attr("onclick", 'checkboxEvent()');
    } else {
        // $('#messenger').attr("checked", "false");
    };

    $('#bamboo-contact').on('submit', function(e) {
        e.preventDefault();
        var form = $('#bamboo-contact');
        $.ajax({
            url: '<?= site_url(['submit-contact'])?>',
            data: form.serialize(),
            type: 'POST',
            dataType: 'json',
            beforeSend: function(event) {
                $("#submit").html("<i class='fa fa-spinner fa-spin'> </i> wait");
            },
            success: function(data) {
                if (data.save == true) {
                    $("#submit").html("Kirim");
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
$('.dropdown-item').on('click', function() {
    $('.carousel-item').removeClass('active');
    var itemSlider = $(this).data('slider');
    $(itemSlider).addClass('active');
    console.log(itemSlider);
})
</script>
<script type="text/javascript">
    // $(window).on('load',function(){
    //     $('#myModal').modal();
    // });

    $('.carousel').carousel({
      interval: 8000
    });
</script>
