<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('./layouts/main.php');
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
          <li data-target="#banner-top-page" data-slide-to="6"></li>
          <li data-target="#banner-top-page" data-slide-to="7"></li>
          <li data-target="#banner-top-page" data-slide-to="8"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="wrapper-carousel-img">
              <a href="<?php echo base_url ('news/insane-offer-promo-merdeka'); ?>">
                <picture>
                  <source type="image/webp" srcset="<?= base_url();?>assets/images/home/promo-merdeka.webp"> 
                  <img src="<?= base_url();?>assets/images/home/promo-merdeka.jpg" alt="Insane Offer Promo Merdeka!">
                </picture>
              </a>
            </div>
          </div>
          <div class="carousel-item">
            <div class="wrapper-carousel-img">
              <picture>
                <source type="image/webp" srcset="<?= base_url();?>assets/images/home/promo-kpr-juli-1.webp"> 
                <img src="<?= base_url();?>assets/images/home/promo-kpr-juli-1.jpg" alt="New Normal Perumahan Green Bamboo Terrace" style="object-fit: contain;">
              </picture>
            </div>
          </div>
          <div class="carousel-item">
            <div class="wrapper-carousel-img">
              <picture>
                <source type="image/webp" srcset="<?= base_url();?>assets/images/home/promo-kpr-juli-2.webp"> 
                <img src="<?= base_url();?>assets/images/home/promo-kpr-juli-2.jpg" alt="New Normal Perumahan Green Bamboo Terrace" style="object-fit: contain;">
              </picture>
            </div>
          </div>
          <div class="carousel-item">
            <div class="wrapper-carousel-img">
              <picture>
                <source type="image/webp" srcset="<?= base_url();?>assets/images/home/promo-banner-2-new-resize.webp" />
                <img class="img-fluid" src="<?= base_url();?>assets/images/home/promo-banner-2-new-resize.jpg" alt="Harga Rumah Murah di Bogor">
              </picture>
            </div>
          </div>
          <div class="carousel-item">
            <div class="wrapper-carousel-img">
              <picture>
                <source type="image/webp" srcset="<?= base_url();?>assets/images/home/promo-banner-1-new-resize.webp" />
              <img class="img-fluid" src="<?= base_url();?>assets/images/home/promo-banner-1-new-resize.jpg" alt="Harga Rumah Murah di Bogor">
              </picture>
            </div>
          </div>
          <div class="carousel-item">
            <div class="wrapper-carousel-img">
              <picture>
                <source type="image/webp" srcset="<?= base_url();?>assets/images/home/promo-banner-3-new-resize.webp" />
              <img class="img-fluid" src="<?= base_url();?>assets/images/home/promo-banner-3-new-resize.jpg" alt="Keuntungan Membeli Rumah di Bogor">
              </picture>
            </div>
          </div>
          <div class="carousel-item">
            <div class="wrapper-carousel-img">
              <picture>
                <source type="image/webp" srcset="<?= base_url();?>assets/images/home/IMG_7182.webp" />
              <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_7182.jpg" alt="bamboo tajur">
              </picture>
            </div>
            <div class="label-top-banner">
              A Taste Of Japanese Perfection
            </div>
          </div>
          <div class="carousel-item">
            <div class="wrapper-carousel-img">
              <picture>
                <source type="image/webp" srcset="<?= base_url();?>assets/images/home/IMG_4869.webp" />
              <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_4869.jpg" alt="bamboo terrance bogor">
              </picture>
            </div>
            <div class="label-top-banner">
              A Taste Of Japanese Perfection
            </div>
          </div>
          <div class="carousel-item">
            <div class="wrapper-carousel-img">
              <picture>
                <source type="image/webp" srcset="<?= base_url();?>assets/images/home/IMG_4120.webp" />
              <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_4120.jpg" alt="perumahan green bamboo tajur">
              </picture>
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
        <h2 class="arvo">Green Bamboo Terrace, Rumah di Tajur, Bogor</h2>
        <p>
          Green Bamboo Terrace Bogor adalah sebuah standar baru untuk hunian yang nyaman, aman, dan asri. Hunian eksklusif ini dibangun di lokasi yang strategis yaitu daerah Tajur yang merupakan salah satu pusat bisnis dan niaga di Kota Bogor serta dekat dengan pintu Tol Jagorawi dan Tol Bocimi.
        </p>
        <p>
          Green Bamboo Terrace merupakan hunian yang aman dan nyaman untuk ditinggali dalam jangka waktu yang panjang. Dalam pengembangannya, Green Bamboo Terrace selalu menekankan pada 3 hal penting, yaitu ketahanan terhadap gempa, kebocoran serta desain yang kreatif. Oleh karenanya, untuk menjaga kualitas bangunan, Green Bamboo Terrace selalu menggunakan material premium dengan standar kualitas Jepang.  Tidak hanya itu saja, Green Bamboo Terrace juga memiliki beragam fasilitas yang dapat membuat nyaman dan aman para penghuninya. 
        </p>
      </div>
    </div>
    <div class="container terrace-container">
      <div class="row">
        <div class="col-md-6">
          <div class="at-green-bamboo" style="margin-top: 70px;">
                <h2 class="head-title title-right">Kualitas Perumahan Green Bamboo Terrace, Rumah di Tajur Bogor</h2>
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
        <h2 class="arvo middle">Tipe Rumah</h2>
        <br>
        <div class="row">
          <div class="col-md-6">
            <div class="home-type float-right">
              <div id="slide-the-homes-left" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="wrapper-carousel-img">
                      <picture>
                        <source type="image/webp" srcset="<?= base_url();?>assets/images/home/IMG_7182.webp" />
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_7182.jpg" alt="Rumah 2 Lantai di Tajur Bogor">
                      </picture>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="wrapper-carousel-img">
                      <picture>
                        <source type="image/webp" srcset="<?= base_url();?>assets/images/home/IMG_1682.webp" />
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_1682.jpg" alt="Rumah Minimalis Dijual di Tajur Bogor">
                      </picture>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="wrapper-carousel-img">
                      <picture>
                        <source media="(max-width: 415px)" srcset="<?= base_url();?>assets/images/home/IMG_4120_mobile.webp">
                        <source type="image/webp" srcset="<?= base_url();?>assets/images/home/IMG_4120.webp">
                        <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_4120.jpg" alt="Teras Depan Rumah Modern">
                      </picture>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="wrapper-carousel-img">
                      <picture>
                        <source type="image/webp" srcset="<?= base_url();?>assets/images/home/IMG_4759.webp" />
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_4759.jpg" alt="Desain Ruang Keluarga">
                      </picture>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="wrapper-carousel-img">
                      <picture>
                        <source type="image/webp" srcset="<?= base_url();?>assets/images/home/IMG_4769.webp" />
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_4769.jpg" alt="Interior Ruang Makan Modern">
                      </picture>
                    </div>
                  </div>
                </div>
              </div>
              <div class="footer-home-type text-right">
                <a href="#slide-the-homes-left" role="button" data-slide="prev">
                  <span class="sr-only">Previous</span>
                  <img src="<?= base_url();?>assets/images/left_arrow.png" alt="Left Arrow">
                </a>
                <a href="<?= site_url(['the-homes/akane'])?>">
                  <span>TIPE</span>
                  <h3>Akane, Rumah Tiga Kamar Tidur Tipe 95</h3>
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
                      <picture>
                        <source type="image/webp" srcset="<?= base_url();?>assets/images/home/IMG_4869.webp" />
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_4869.jpg" alt="Rumah 2 Lantai Dijual di Bogor">
                      </picture>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="wrapper-carousel-img">
                      <picture>
                        <source type="image/webp" srcset="<?= base_url();?>assets/images/home/IMG_5223.webp" />
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_5223.jpg" alt="Desain Kamar Tidur">
                      </picture>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="wrapper-carousel-img">
                      <picture>
                        <source type="image/webp" srcset="<?= base_url();?>assets/images/home/IMG_5237.webp" />
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_5237.jpg" alt="Desain Kamar Tidur Modern">
                      </picture>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="wrapper-carousel-img">
                      <picture>
                        <source type="image/webp" srcset="<?= base_url();?>assets/images/home/IMG_5246.webp" />
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_5246.jpg" alt="Desain Ruang Makan Minimalis">
                      </picture>
                    </div>
                  </div>
                </div>
              </div>
              <div class="footer-home-type text-left">
                <a href="<?= site_url(['the-homes/momiji'])?>">
                  <span>TIPE</span>
                  <h3>Momiji, Rumah Dua Kamar Tidur Tipe 73</h3>
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

    <section class="home-section" style="padding-bottom: 250px;">
      <div class="container">
        <h2 class="arvo middle mt-0"><a href="<?= site_url(['news'])?>">News and Events</a></h2>
        <div class="row">
          <div class="col-md-4 mt-4">
            <div class="box-card">
              <div class="box-card-heading">
                <span>Kamis</span>
                <br>
                <span>30 Juli 2020</span>
              </div>
              <div class="box-card-content">
                <h3>
                  <a href="<?php echo base_url ('news/insane-offer-promo-merdeka'); ?>">
                    Insane Offer - Promo Merdeka!
                  </a>
                </h3>
              </div>
              <div class="box-card-footer">
                <a href="<?php echo base_url ('news/insane-offer-promo-merdeka'); ?>">Lihat Selanjutnya ></a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-4">
            <div class="box-card">
              <div class="box-card-heading">
                <span>Senin</span>
                <br>
                <span>20 Juli 2020</span>
              </div>
              <div class="box-card-content">
                <h3>
                  <a href="<?php echo base_url ('news/secangkir-teh'); ?>">
                    Secangkir Teh dan Semangkuk Nasi di Rumah Selalu Lebih Enak Daripada Jamuan di Tempat Lain
                  </a>
                </h3>
              </div>
              <div class="box-card-footer">
                <a href="<?php echo base_url ('news/secangkir-teh'); ?>">Lihat Selanjutnya ></a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-4">
            <div class="box-card">
              <div class="box-card-heading">
                <span>Jumat</span>
                <br>
                <span>3 Juli 2020</span>
              </div>
              <div class="box-card-content">
                <h3>
                  <a href="<?php echo base_url ('news/apa-kata-mereka-mengenai-tinggal-di-green-bamboo-terrace'); ?>">
                    Apa Kata Mereka Mengenai Tinggal di Green Bamboo Terrace
                  </a>
                </h3>
              </div>
              <div class="box-card-footer">
                <a href="<?php echo base_url ('news/apa-kata-mereka-mengenai-tinggal-di-green-bamboo-terrace'); ?>">Lihat Selanjutnya ></a>
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
        <h2 class="arvo middle mt-0"><a href="<?= site_url(['the-facilities'])?>">Fasilitas di Perumahan Green Bamboo Terrace</a></h2>
        <div id="slider-the-facilities" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item text-center active">
              <div>
                <img class="img-fluid" src="<?= base_url();?>assets/images/home/amusement_park.png" alt="THE FACILITIES">
                <h3>Taman & Area Bermain Anak</h3>
                <p>Kami juga menyediakan taman dan area bermain untuk anak-anak. Fasilitas ini kami se-diakan agar hunian menjadi lebih asri serta anak-anak memiliki area bermain di dalam perumahan.</p>
              </div>
            </div>
            <div class="carousel-item text-center">
              <div>
                <img class="img-fluid" src="<?= base_url();?>assets/images/home/window.png" alt="THE FACILITIES">
                <h3>Mushola</h3>
                <p>Fasilitas mushola kami sediakan agar penghuni Green Bamboo Terrace lebih mudah untuk beribadah.</p>
              </div>
            </div>
            <div class="carousel-item text-center">
              <div>
                <img class="img-fluid" src="<?= base_url();?>assets/images/home/chair.png" alt="THE FACILITIES">
                <h3>Club House</h3>
                <p>Dengan adanya Club House yang berada di dalam perumahan Green Bamboo Terrace Bogor, Anda dan keluarga dapat menikmati hidup yang lebih nyaman. Fasilitas yang tersedia di Club House adalah kolam renang anak, ruang membaca, dan ruang serbaguna yang dapat dimanfaatkan sebagai ruang pertemuan warga atau ruang untuk menerima tamu.</p>
              </div>
            </div>
            <div class="carousel-item text-center">
              <div>
                <img class="img-fluid" src="<?= base_url();?>assets/images/home/home.png" alt="THE FACILITIES">
                <h3>Security & CCTV</h3>
                <p>Keamanan menjadi prioritas kami. Untuk menjamin rasa aman dan nyaman, kami men-yediakan security dan CCTV untuk seluruh penghuni di Green Bamboo Terrace Bogor.</p>
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
