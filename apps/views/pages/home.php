<?php
defined('BASEPATH') or exit('No direct script access allowed');

include('layouts/main.php');
?>

<style>
  .breadcrumbdesign li:last-child a {
    background: #f5f5f5 !important;
  }

  .breadcrumbdesign li a::before {
    border-left-color: #f5f5f5;
  }
</style>

<div class="bgimg-2">
  <div class="white-card-float --the-home">
    <div class="title-section-line">
      <div class="mr-md-4">
        <div class="jumbotron__category">
          <h1 class="head-title">Tipe Rumah</h1>
        </div>
      </div>
      <div>
        <hr>
      </div>
    </div>
    <div class="jumbotron__category9">
      <h3 class="head-title">Rumah dengan material premium berkualitas standar Jepang</h3>
    </div>
    <p class="text-justify m-0">
      Setiap unit rumah di Green Bamboo Terrace Bogor menggunakan spesifikasi terbaik yang bisa kami berikan sebagai sebuah Developer. Kami menawarkan pilihan unit yang bisa Anda pilih sesuai dengan kebutuhan Anda.
    </p>
  </div>
</div>

<section class="the-homes">
  <div class="container">
    <div style="padding: 20px 0 0;">
      <ul class="breadcrumbdesign">
        <li><?php echo '<a href="' . base_url() . '">Beranda</a>' ?></li>
        <li><a href="#">Rumah</a></li>
      </ul>
    </div>
    <div style="margin: 0 0 40px;">
      <p class="home-desc">
        Green Bamboo Terrace Bogor terletak di Kawasan seluas 1,7 Ha dengan harga mulai dari Rp. 1 M-an untuk setiap unitnya. Kami memiliki jumlah unit yang sangat terbatas menjadikan
        <b>Green Bamboo Terrace Bogor sangat exclusive dan private.</b>
      </p>
      <br>
      <p class="home-desc">Green Bamboo Terrace mempunyai dua unit tipe rumah, yaitu Tipe Akane dengan 3 kamar tidur, dan Tipe Momiji dengan 2 kamar tidur. Seluruh tipe unit rumah kami dibangun menggunakan material premium dengan standar kualitas Jepang.
      </p>
    </div>
    <section class="the-homes__type">
      <h2 class="text-center">Tipe Rumah</h2>
      <div class="row">
        <div class="col-md-6">
          <div class="type__item" data-home-type="tipe akane">
            <picture>
              <source srcset="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-1.webp" type="image/webp">
              <img src="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-1.png" class="img-fluid" alt="Rumah Type 90 di Bogor">
            </picture>
            <div class="d-flex flex-wrap">
              <div class="col-12 col-lg">
                Rumah Tiga Kamar Tidur Tipe 95
              </div>
              <div class="col-12 col-lg-auto text-center mt-3 mt-lg-0">
                <a href="<?php echo base_url('the-homes/akane'); ?>" class="btn">Lihat di Sini</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="type__item" data-home-type="tipe momiji">
            <img src="<?php echo base_url(); ?>assets/images/the-homes/momiji-interior-1.png" class="img-fluid" alt="Rumah Type 70 di Bogor">
            <div class="d-flex flex-wrap">
              <div class="col-12 col-lg">
                Rumah Dua Kamar Tidur Tipe 73
              </div>
              <div class="col-12 col-lg-auto text-center mt-3 mt-lg-0">
                <a href="<?php echo base_url('the-homes/momiji'); ?>" class="btn">Lihat di Sini</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div style="padding: 55px 0 75px">
      <p class="home-desc">Green Bamboo Terrace adalah hunian minimalis modern siap huni yang aman dan nyaman sehingga dapat ditinggali dalam jangka waktu panjang. Rumah siap huni ini didesain dengan 3 hal penting, yaitu tahan terhadap gempa, kebocoran dan desain yang unik dan kreatif.</p>
      <br>
      <p class="home-desc">Perumahan Greeen Bamboo Terrace juga mempunyai fasilitas terlengkap, seperti club house, musholla, taman, dan area bermain anak yang dapat digunakan oleh seluruh penghuni perumahan secara gratis tanpa dipungut biaya apapun.</p>
    </div>
  </div>
</section>

<!-- return to top -->
<!-- <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a> -->
<!-- <a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.." rel="noopener noreferrer" class="floating-whatsapp" target="_blank">
        <div class="f-whatsapp"> </div>
        <p class="floating-teks">0811 1403 280</p>
    </a> -->

<!-- Modal -->
<div class="modal fade" id="akane-modal" tabindex="-1" role="dialog" aria-labelledby="akaneModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header text-center d-block">
        <h5 class="modal-title d-inline-block" id="exampleModalLabelAkane">Denah Bangunan Type Akane</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="<?php echo base_url(); ?>assets/images/detail/denah-akane.png" class="img-responsive" alt="Denah Rumah Minimalis Type 90" />
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="momiji-modal" tabindex="-1" role="dialog" aria-labelledby="momijiModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header text-center d-block">
        <h5 class="modal-title d-inline-block" id="exampleModalLabelMomiji">Denah Bangunan Type Momiji</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="<?php echo base_url(); ?>assets/images/detail/denah-momiji.png" class="img-responsive" alt="Denah Rumah Minimalis Type 90" />
      </div>
    </div>
  </div>
</div>


<script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- <script src="<?= base_url(); ?>assets/js/navbar.js"></script> -->

<script>
 $("#momijibtn").click(function(){$("html, body").animate({scrollTop:$("Div").offset().top},2e3)}),$("#akanebtn").click(function(){$("html, body").animate({scrollTop:$("Div").offset().top},2e3)});
</script>

<script>
 $(window).scroll(function(){$(this).scrollTop()>=50?$("#return-to-top").fadeIn(100):$("#return-to-top").fadeOut(0)}),$("#return-to-top").click(function(){$("body,html").animate({scrollTop:0},{duration:750})});
</script>

<script>
  // $(function() {
  // var header = $("nav");

  // $(window).scroll(function() {
  //     var scroll = $(window).scrollTop();
  //     if (scroll >= 50) {
  //         header.addClass("scrolled");
  //     } else {
  //         header.removeClass("scrolled");
  //     }
  // });
  // });

  // $(function() {
  // var header = $(".menuIcon");

  // $(window).scroll(function() {
  //     var scroll = $(window).scrollTop();
  //     if (scroll >= 50) {
  //         header.addClass("scrolled-icon");
  //     } else {
  //         header.removeClass("scrolled-icon");
  //     }
  // });
  // });
</script>
<script>
  function lockScroll(){$("body").hasClass("lock-scroll")?$("body").removeClass("lock-scroll"):$("body").addClass("lock-scroll")}
</script>

<script>
  jQuery(function(){jQuery("#doAction").dropdown("toggle"),jQuery("#menu li div").removeClass("show")});
</script>

<script>
$(document).on("click",'[data-toggle="lightbox"]',function(t){t.preventDefault(),$(this).ekkoLightbox()});
</script>