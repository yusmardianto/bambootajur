<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('./layouts/main.php');
?>
<div class="page-content">
  <section class="home-section slider-section">
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
          <li data-target="#banner-top-page" data-slide-to="9"></li>
          <li data-target="#banner-top-page" data-slide-to="10"></li>

          <!-- <li data-target="#banner-top-page" data-slide-to="9"></li> -->
        </ol>
        <div class="carousel-inner"> 
          <div class="carousel-item active">
            <div class="wrapper-carousel-img">
                <picture>
                  <source type="image/webp" srcset="<?= base_url();?>assets/images/home/Ready-Stock.webp"> 
                  <img src="<?= base_url();?>assets/images/home/Ready-Stock.jpg" alt="dp cicil sept" loading="lazy">
                </picture>
            </div>
          </div>  
          <div class="carousel-item">
            <div class="wrapper-carousel-img">
                <picture>
                  <source type="image/webp" srcset="<?= base_url();?>assets/images/home/may-promo.webp"> 
                  <img src="<?= base_url();?>assets/images/home/may-promo.jpg" alt="may promo" loading="lazy">
                </picture>
            </div>
          </div>
          <div class="carousel-item">
            <div class="wrapper-carousel-img">
              <picture>
                <source type="image/webp" srcset="<?= base_url();?>assets/images/home/promo-kpr-juli-1.webp"> 
                <img src="<?= base_url();?>assets/images/home/promo-kpr-juli-1.jpg" alt="New Normal Perumahan Green Bamboo Terrace" style="object-fit: contain;"  loading="lazy">
              </picture>
            </div>
          </div>
          <div class="carousel-item"> 
            <div class="wrapper-carousel-img">
              <picture>
                <source type="image/webp" srcset="<?= base_url();?>assets/images/home/promo-kpr-juli-2.webp"> 
                <img src="<?= base_url();?>assets/images/home/promo-kpr-juli-2.jpg" alt="New Normal Perumahan Green Bamboo Terrace" style="object-fit: contain;"  loading="lazy">
              </picture>
            </div>
          </div>
          <div class="carousel-item">
            <div class="wrapper-carousel-img">
              <picture>
                <source type="image/webp" srcset="<?= base_url();?>assets/images/home/promo-banner-2-new-resize.webp" />
                <img class="img-fluid" src="<?= base_url();?>assets/images/home/promo-banner-2-new-resize.jpg" alt="Harga Rumah Murah di Bogor"  loading="lazy">
              </picture>
            </div>
          </div>
          <div class="carousel-item">
            <div class="wrapper-carousel-img">
              <picture>
                <source type="image/webp" srcset="<?= base_url();?>assets/images/home/promo-banner-1-new-resize.webp" />
              <img class="img-fluid" src="<?= base_url();?>assets/images/home/promo-banner-1-new-resize.jpg" alt="Harga Rumah Murah di Bogor"  loading="lazy">
              </picture>
            </div>
          </div>
          <div class="carousel-item">
            <div class="wrapper-carousel-img">
              <picture>
                <source type="image/webp" srcset="<?= base_url();?>assets/images/home/promo-banner-3-new-resize.webp" />
              <img class="img-fluid" src="<?= base_url();?>assets/images/home/promo-banner-3-new-resize.jpg" alt="Keuntungan Membeli Rumah di Bogor" loading="lazy">
              </picture>
            </div>
          </div>
          <div class="carousel-item">
            <div class="wrapper-carousel-img">
              <picture>
                <source type="image/webp" srcset="<?= base_url();?>assets/images/home/IMG_7182.webp" />
              <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_7182.jpg" alt="bamboo tajur" loading="lazy">
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
              <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_4869.jpg" alt="bamboo terrance bogor" loading="lazy">
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
              <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_4120.jpg" alt="perumahan green bamboo tajur"  loading="lazy">
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
        <picture>
            <source type="image/webp" srcset="<?= base_url();?>assets/images/left_arrow.webp" />
            <img src="<?= base_url();?>assets/images/left_arrow.png" alt="Left Arrow">
        </picture>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right" href="#banner-top-page" role="button" data-slide="next">
        <picture>
            <source type="image/webp" srcset="<?= base_url();?>assets/images/right_arrow.webp" />
            <img src="<?= base_url();?>assets/images/right_arrow.png" alt="Right Arrow">
        </picture>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <section class="home-section section-desc" style="margin-top: 70px;">
    <div class="container">
      <div class="why-choose-us">
        <h1 class="arvo">Green Bamboo Terrace, Rumah Siap Huni dengan DP Murah di Tajur Bogor</h1>
        <p>
          Green Bamboo Terrace adalah sebuah rumah hunian yang aman, nyaman, dan asri dengan DP murah dan bisa dicicil. Rumah hunian ini dibangun di lokasi strategis yang menjadi pusat bisnis dan niaga di Kota Bogor, yaitu di wilayah Tajur yang dekat dengan akses pintu Tol Jagorawi dan Tol Bocimi. 
          <span id="dots"></span>  
        </p> 
        <p class="extratext mobile-hide" >
          Rumah hunian yang terdapat di Green Bamboo Terrace menekankan pada 3 hal penting, yaitu tahan terhadap gempa, kebocoran, dan desain yang menarik. Ketiga hal ini diwujudkan menjadi dua tipe rumah, yaitu tipe Akane dan Momiji.
        </p>
        <p   class="extratext mobile-hide">
          Tipe Akane merupakan rumah hunian bertipe 95 dua lantai dengan 3 kamar tidur, sedangkan tipe Momiji adalah rumah hunian bertipe 73 dua lantai dengan 2 kamar tidur. Kedua tipe rumah ini dibangun menggunakan material premium dengan standar berkualitas Jepang sehingga anti gempa dan kebocoran.
        </p>
        <p  class="extratext mobile-hide">
          Fasilitas yang terdapat di perumahan Green Bamboo Terrace didesain sedemikian rupa sehingga aman dan nyaman untuk dihuni Anda bersama dengan keluarga, seperti Mushola, taman bermain anak, club house, one gate system, CCTV dan security 24 jam.
        </p>
         
        <a href="javascript:void(0)"  id="mymore" class="show-mobile">Selangkapnya</a>
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
          <div class="wrapper_video2 yt-container">
            <a href="javascript:void(0)" id="ZEGUsEvJ9rM" title="GREEN BAMBOO TERRACE - JAPANESE DEVELOPER" >
                      <picture>
                        <source type="image/webp" srcset="<?= base_url();?>assets/images/home/img-yt-thumbnail.webp" />
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_7182.jpg" alt="Rumah 2 Lantai di Tajur Bogor" loading="lazy">
                      </picture> 
               <span class="yt-icon"></span>
            </a>
          </div>
          <!-- <iframe class="youtube-video-container" src="https://www.youtube.com/embed/F4PovsepfaM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
        </div>
      </div>
    </div>
  </section>

 
    <section class="home-section section-the-homes home-type-container" style="margin-top: 70px;">
      <div class="container">
        <h2 class="arvo middle">Tipe Rumah</h2>
        <br>
        <div class="row">
          <div class="col-12 px-md-0">
            <div class="home-type new-phase float-right">
              <picture>
                <source type="image/webp" srcset="<?= base_url();?>assets/images/home/new-phase2.webp" />
                <img src="<?= base_url();?>assets/images/home/new-phase2.jpg" class="img-fluid img-new-phase2" alt="new-phase2">
              </picture>
              <div class="white-box-back"></div>
              <div class="footer-home-type text-right text-md-left">
                <a class="w-100" href="<?= site_url(['tipe-rumah/new-phase'])?>">
                  <span>TIPE TERBARU</span>
                  <h3>PHASE II</h3>
                </a>
                <a href="<?= site_url(['tipe-rumah/new-phase'])?>" role="button">
                  <picture>
                    <source type="image/webp" srcset="<?= base_url();?>assets/images/right_arrow.webp" />
                    <img src="<?= base_url();?>assets/images/right_arrow.png" alt="Right Arrow">
                  </picture>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="home-type float-right">
              <div id="slide-the-homes-left" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#slide-the-homes-left" data-slide-to="0" class="active"></li>
                <li data-target="#slide-the-homes-left" data-slide-to="1"></li>
                <li data-target="#slide-the-homes-left" data-slide-to="2"></li>
                <li data-target="#slide-the-homes-left" data-slide-to="3"></li>
                <li data-target="#slide-the-homes-left" data-slide-to="4"></li>
              </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="wrapper-carousel-img">
                      <picture>
                        <source type="image/webp" srcset="<?= base_url();?>assets/images/home/IMG_7182.webp" />
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_7182.jpg" alt="Rumah 2 Lantai di Tajur Bogor" loading="lazy">
                      </picture>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="wrapper-carousel-img">
                      <picture>
                        <source type="image/webp" srcset="<?= base_url();?>assets/images/home/IMG_1682.webp" />
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_1682.jpg" alt="Rumah Minimalis Dijual di Tajur Bogor" loading="lazy">
                      </picture>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="wrapper-carousel-img">
                      <picture>
                        <source media="(max-width: 415px)" srcset="<?= base_url();?>assets/images/home/IMG_4120_mobile.webp">
                        <source type="image/webp" srcset="<?= base_url();?>assets/images/home/IMG_4120.webp">
                        <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_4120.jpg" alt="Teras Depan Rumah Modern" loading="lazy">
                      </picture>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="wrapper-carousel-img">
                      <picture>
                        <source type="image/webp" srcset="<?= base_url();?>assets/images/home/IMG_4759.webp" />
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_4759.jpg" alt="Desain Ruang Keluarga" loading="lazy">
                      </picture>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="wrapper-carousel-img">
                      <picture>
                        <source type="image/webp" srcset="<?= base_url();?>assets/images/home/IMG_4769.webp" />
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_4769.jpg" alt="Interior Ruang Makan Modern" loading="lazy">
                      </picture>
                    </div>
                  </div>
                </div>
              </div>
              <div class="footer-home-type text-right">
                <a href="#slide-the-homes-left" role="button" data-slide="prev">
                  <span class="sr-only">Previous</span>
                  <picture>
                    <source type="image/webp" srcset="<?= base_url();?>assets/images/left_arrow.webp" />
                    <img src="<?= base_url();?>assets/images/left_arrow.png" alt="Left Arrow">
                </picture>
                </a>
                <a href="<?= site_url(['tipe-rumah/akane'])?>">
                  <span>TIPE</span>
                  <h3>Akane, Rumah Tiga Kamar Tidur Tipe 95</h3>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="home-type float-left">
              <div id="slide-the-homes-right" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#slide-the-homes-right" data-slide-to="0" class="active"></li>
                <li data-target="#slide-the-homes-right" data-slide-to="1"></li>
                <li data-target="#slide-the-homes-right" data-slide-to="2"></li>
                <li data-target="#slide-the-homes-right" data-slide-to="3"></li>
                <li data-target="#slide-the-homes-right" data-slide-to="4"></li>
              </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="wrapper-carousel-img">
                      <picture>
                        <source type="image/webp" srcset="<?= base_url();?>assets/images/home/IMG_4869.webp" />
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_4869.jpg" alt="Rumah 2 Lantai Dijual di Bogor" loading="lazy">
                      </picture>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="wrapper-carousel-img">
                      <picture>
                        <source type="image/webp" srcset="<?= base_url();?>assets/images/home/IMG_5223.webp" />
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_5223.jpg" alt="Desain Kamar Tidur" loading="lazy">
                      </picture>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="wrapper-carousel-img">
                      <picture>
                        <source type="image/webp" srcset="<?= base_url();?>assets/images/home/IMG_5237.webp" />
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_5237.jpg" alt="Desain Kamar Tidur Modern" loading="lazy">
                      </picture>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="wrapper-carousel-img">
                      <picture>
                        <source type="image/webp" srcset="<?= base_url();?>assets/images/home/IMG_5246.webp" />
                      <img class="img-fluid" src="<?= base_url();?>assets/images/home/IMG_5246.jpg" alt="Desain Ruang Makan Minimalis" loading="lazy">
                      </picture>
                    </div>
                  </div>
                </div>
              </div>
              <div class="footer-home-type text-left">
                <a href="<?= site_url(['tipe-rumah/momiji'])?>">
                  <span>TIPE</span>
                  <h3>Momiji, Rumah Dua Kamar Tidur Tipe 73</h3>
                </a>
                <a href="#slide-the-homes-right" role="button" data-slide="next">
                <picture>
                  <source type="image/webp" srcset="<?= base_url();?>assets/images/right_arrow.webp" />
                  <img src="<?= base_url();?>assets/images/right_arrow.png" alt="Right Arrow">
              </picture>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="switch-section">
    <section class="home-section home-news-container" style="padding-bottom: 250px;">
      <div class="container">
        <h2 class="arvo middle mt-0"><a href="<?= site_url(['berita-dan-promo'])?>">Berita dan Promo</a></h2>
        <div class="row">
          <div class="col-md-4 mt-4">
            <div class="box-card">
              <div class="box-card-heading">
                <span>Senin</span>
                <br>
                <span>21 Februari 2022</span>
              </div>
              <div class="box-card-content">
                <h3>
                  <a href="<?php echo base_url ('berita-dan-promo/rumah-mewah-di-bogor-kota'); ?>">
                  Rumah Mewah di Bogor Kota
                  </a>
                </h3>
              </div>
              <div class="box-card-footer">
                <a href="<?php echo base_url ('berita-dan-promo/rumah-mewah-di-bogor-kota'); ?>">Lihat Selanjutnya ></a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-4">
            <div class="box-card">
              <div class="box-card-heading">
                <span>Kamis</span>
                <br>
                <span>23 Desember 2021</span>
              </div>
              <div class="box-card-content">
                <h3>
                  <a href="<?php echo base_url ('berita-dan-promo/rumah-ready-stock-di-bogor-timur-tajur'); ?>">
                  Rumah Ready Stock di Bogor Timur – Tajur
                  </a>
                </h3>
              </div>
              <div class="box-card-footer">
                <a href="<?php echo base_url ('berita-dan-promo/rumah-ready-stock-di-bogor-timur-tajur'); ?>">Lihat Selanjutnya ></a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mt-4">
            <div class="box-card">
              <div class="box-card-heading">
                <span>Selasa</span>
                <br>
                <span>23 November 2021</span>
              </div>
              <div class="box-card-content">
                <h3>
                  <a href="<?php echo base_url ('berita-dan-promo/rumah-murah-di-tajur-bogor'); ?>">
                  Rumah Murah di Tajur Bogor
                  </a>
                </h3>
              </div>
              <div class="box-card-footer">
                <a href="<?php echo base_url ('berita-dan-promo/rumah-murah-di-tajur-bogor'); ?>">Lihat Selanjutnya ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <section class="home-section section-facilities">
    <div class="container">
      <div class="card-slider">
        <h2 class="arvo middle mt-0"><a href="<?= site_url(['fasilitas-perumahan'])?>">Fasilitas di Perumahan Green Bamboo Terrace</a></h2>
        <div id="slider-the-facilities" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
                <li data-target="#slide-the-homes-right" data-slide-to="0" class="active"></li>
                <li data-target="#slide-the-homes-right" data-slide-to="1"></li>
                <li data-target="#slide-the-homes-right" data-slide-to="2"></li>
                <li data-target="#slide-the-homes-right" data-slide-to="3"></li>
                <li data-target="#slide-the-homes-right" data-slide-to="4"></li>
              </ol>
          <div class="carousel-inner">
            <div class="carousel-item text-center active">
              <div>
                <img class="img-fluid" src="<?= base_url();?>assets/images/home/amusement_park.png" alt="Fasilitas Perumahan" >
                <h3>Taman & Area Bermain Anak</h3>
                <p>Kami juga menyediakan taman dan area bermain untuk anak-anak. Fasilitas ini kami se-diakan agar hunian menjadi lebih asri serta anak-anak memiliki area bermain di dalam perumahan.</p>
              </div>
            </div>
            <div class="carousel-item text-center">
              <div>
                <img class="img-fluid" src="<?= base_url();?>assets/images/home/window.png" alt="Fasilitas Perumahan" loading="lazy">
                <h3>Mushola</h3>
                <p>Fasilitas mushola kami sediakan agar penghuni Green Bamboo Terrace lebih mudah untuk beribadah.</p>
              </div>
            </div>
            <div class="carousel-item text-center">
              <div>
                <img class="img-fluid" src="<?= base_url();?>assets/images/home/chair.png" alt="Fasilitas Perumahan" loading="lazy">
                <h3>Club House</h3>
                <p>Dengan adanya Club House yang berada di dalam perumahan Green Bamboo Terrace Bogor, Anda dan keluarga dapat menikmati hidup yang lebih nyaman. Fasilitas yang tersedia di Club House adalah kolam renang anak, ruang membaca, dan ruang serbaguna yang dapat dimanfaatkan sebagai ruang pertemuan warga atau ruang untuk menerima tamu.</p>
              </div>
            </div>
            <div class="carousel-item text-center">
              <div>
                <img class="img-fluid" src="<?= base_url();?>assets/images/home/home.png" alt="Fasilitas Perumahan" loading="lazy">
                <h3>Security & CCTV</h3>
                <p>Keamanan menjadi prioritas kami. Untuk menjamin rasa aman dan nyaman, kami men-yediakan security dan CCTV untuk seluruh penghuni di Green Bamboo Terrace Bogor.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-slider-arrow">
          <a class="left" href="#slider-the-facilities" role="button" data-slide="prev">
          <picture>
            <source type="image/webp" srcset="<?= base_url();?>assets/images/left_arrow.webp" />
            <img src="<?= base_url();?>assets/images/left_arrow.png" alt="Left Arrow">
          </picture>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right" href="#slider-the-facilities" role="button" data-slide="next">
          <picture>
            <source type="image/webp" srcset="<?= base_url();?>assets/images/right_arrow.webp" />
            <img src="<?= base_url();?>assets/images/right_arrow.png" alt="Right Arrow">
          </picture>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  </div>
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

<!-- <div class="modal fade" id="modal-promotion" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body">
        <picture>
          <source srcset="<?= base_url();?>assets/images/home/rumah-ready-stok.webp" type="image/webp">
          <img src="<?= base_url();?>assets/images/home/rumah-ready-stok.jpg" class="img-fluid" alt="ready stok">
        </picture>
      </div>
    </div>
  </div>
</div> -->

<script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
function lockScroll(){$("body").hasClass("lock-scroll")?$("body").removeClass("lock-scroll"):$("body").addClass("lock-scroll")}
</script>

<script>
$(".dropdown-item").on("click",function(){$(".carousel-item").removeClass("active");var a=$(this).data("slider");$(a).addClass("active"),console.log(a)});
// $(function(){
//   $("#modal-promotion").modal('show')
// })
</script>
<script>

</script>