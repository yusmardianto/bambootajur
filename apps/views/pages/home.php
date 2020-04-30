<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>

<div class="bgimg-2">
  <div class="white-card-float">
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

<div class="container">
  <div style="margin: 40px 0;">
    <p class="home-desc">
    Green Bamboo Terrace Bogor terletak di Kawasan seluas 1,7 Ha dengan harga mulai dari Rp. 1 M-an untuk setiap unitnya. Kami memiliki jumlah unit yang sangat terbatas menjadikan
      <b>Green Bamboo Terrace Bogor sangat exclusive dan private.</b>
    </p>
  </div>
  <ul class="nav nav-tabs green-tabs" role="tablist">
    <li class="nav-item text-center">
      <a class="nav-link akane-tab active" data-toggle="tab" role="tab" aria-controls="type-akane" href="#type-akane" aria-selected="true">Type Akane</a>
    </li>
    <li class="nav-item text-center">
      <a class="nav-link momiji-tab" data-toggle="tab" role="tab" aria-controls="type-momiji" href="#type-momiji" aria-selected="false">Type Momiji</a>
    </li>
  </ul>
  <div class="tab-content type-home">
    <div id="type-akane" class="tab-pane fade show active" role="tabpanel" aria-labelledby="akane-tab">
      <div class="row">
        <div class="col-md-8 col-xl-9">
          <img class="img-fluid" src="<?php echo base_url();?>assets/images/the-homes/type-akane.png" alt="Rumah Type 90 di Bogor">
        </div>
        <div class="col-md-4 col-xl-3">
          <div class="side-info-showcase">
            <div class="list-info">
              <img src="<?php echo base_url();?>assets/images/icon/house_outline.png" alt="Luas">
              LB : 95,5 M
            </div>
            <div class="list-info">
              <img src="<?php echo base_url();?>assets/images/icon/double_king_size_bed.png" alt="Kamar">
              3 Kamar Tidur
            </div>
            <a class="link-denah" data-toggle="modal" data-target="#akane-modal" href="#">Lihat denah Bangunan</a>
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
            <a href="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-1.png" data-toggle="lightbox" data-gallery="akane_gallery">
              <img class="img-fluid pb-3" src="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-1.png" alt="Ruang Keluarga Minimalis">
            </a>
          </div>
          <div class="col-12 col-sm-5 col-md-4 col-xl-3 px-0 pl-sm-2 text-center">
            <a href="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-2.png" data-toggle="lightbox" data-gallery="akane_gallery">
              <img class="img-fluid pb-3" src="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-2.png" alt="Interior Ruangan Bergaya Jepang">
            </a>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-xl-6 px-0 pr-sm-2 text-center">
            <a href="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-3.png" data-toggle="lightbox" data-gallery="akane_gallery">
              <img class="img-fluid pb-3" src="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-3.png" alt="Desain Ruang Makan Modern">
            </a>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-xl-6 px-0 pl-sm-2 text-center">
            <a href="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-4.png" data-toggle="lightbox" data-gallery="akane_gallery">
              <img class="img-fluid pb-3" src="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-4.png" alt="Ruang Kamar Tidur Minimalis">
            </a>
          </div>
          <div class="col-12 col-sm-5 col-md-4 col-xl-3 px-0 pr-sm-2 text-center">
            <a href="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-5.png" data-toggle="lightbox" data-gallery="akane_gallery">
              <img class="img-fluid pb-3" src="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-5.png" alt="Desain Kamar Mandi">
            </a>
          </div>
          <div class="col-12 col-sm-7 col-md-8 col-xl-9 px-0 pl-sm-2 text-center">
            <a href="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-6.png" data-toggle="lightbox" data-gallery="akane_gallery">
              <img class="img-fluid pb-sm-3" src="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-6.png" alt="Ruang Tidur Utama Konsep Minimalis">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div id="type-momiji" class="tab-pane fade" role="tabpanel" aria-labelledby="momiji-tab">
      <div class="row">
        <div class="col-md-8 col-xl-9">
          <img class="img-fluid" src="<?php echo base_url();?>assets/images/the-homes/type-momiji.png" alt="Rumah Type 70 di Bogor">
        </div>
        <div class="col-md-4 col-xl-3">
          <div class="side-info-showcase">
            <div class="list-info">
              <img src="<?php echo base_url();?>assets/images/icon/house_outline.png" alt="Luas">
              LB : 73 M
            </div>
            <div class="list-info">
              <img src="<?php echo base_url();?>assets/images/icon/double_king_size_bed.png" alt="Kamar">
              2 Kamar Tidur
            </div>
            <a class="link-denah" data-toggle="modal" data-target="#momiji-modal" href="#">Lihat denah Bangunan</a>
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
            <a href="<?php echo base_url(); ?>assets/images/the-homes/momiji-interior-1.png" data-toggle="lightbox" data-gallery="momiji_gallery">
              <img class="img-fluid pb-3" src="<?php echo base_url(); ?>assets/images/the-homes/momiji-interior-1.png" alt="Desain Ruang Keluarga Konsep Minimalis">
            </a>
          </div>
          <div class="col-12 col-sm-5 col-md-4 col-xl-3 px-0 pl-sm-2 text-center">
            <a href="<?php echo base_url(); ?>assets/images/the-homes/momiji-interior-2.png" data-toggle="lightbox" data-gallery="momiji_gallery">
              <img class="img-fluid pb-3" src="<?php echo base_url(); ?>assets/images/the-homes/momiji-interior-2.png" alt="Tangga Rumah Minimalis">
            </a>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-xl-6 px-0 pr-sm-2 text-center">
            <a href="<?php echo base_url(); ?>assets/images/the-homes/momiji-interior-3.png" data-toggle="lightbox" data-gallery="momiji_gallery">
              <img class="img-fluid pb-3" src="<?php echo base_url(); ?>assets/images/the-homes/momiji-interior-3.png" alt="Dapur Rumah Modern">
            </a>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-xl-6 px-0 pl-sm-2 text-center">
            <a href="<?php echo base_url(); ?>assets/images/the-homes/momiji-interior-4.png" data-toggle="lightbox" data-gallery="momiji_gallery">
              <img class="img-fluid pb-3" src="<?php echo base_url(); ?>assets/images/the-homes/momiji-interior-4.png" alt="Interior Kamar Tidur">
            </a>
          </div>
          <div class="col-12 col-sm-5 col-md-4 col-xl-3 px-0 pr-sm-2 text-center">
            <a href="<?php echo base_url(); ?>assets/images/the-homes/momiji-interior-5.png" data-toggle="lightbox" data-gallery="momiji_gallery">
              <img class="img-fluid pb-3" src="<?php echo base_url(); ?>assets/images/the-homes/momiji-interior-5.png" alt="Kamar Mandi Minimalis">
            </a>
          </div>
          <div class="col-12 col-sm-7 col-md-8 col-xl-9 px-0 pl-sm-2 text-center">
            <a href="<?php echo base_url(); ?>assets/images/the-homes/momiji-interior-6.png" data-toggle="lightbox" data-gallery="momiji_gallery">
              <img class="img-fluid pb-sm-3" src="<?php echo base_url(); ?>assets/images/the-homes/momiji-interior-6.png" alt="Kamar Tidur Minimalis">
            </a>
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
    <img src="<?php echo base_url();?>assets/images/the-homes/detail-materials.png" alt="Material Perumahan Green Bamboo Terrace Bogor">
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
      <a href="<?php echo base_url();?>assets/images/detail/toclas.png" data-toggle="lightbox">
        <img src="<?php echo base_url();?>assets/images/detail/toclas.png" class="w-100" alt="Filter Air Teknologi Canggih Toclas" />
      </a>
  </div>
</div>

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
        <img src="<?php echo base_url();?>assets/images/detail/denah-akane.png" class="img-responsive" alt="Denah Rumah Minimalis Type 90" />
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
        <img src="<?php echo base_url();?>assets/images/detail/denah-momiji.png" class="img-responsive" alt="Denah Rumah Minimalis Type 90" />
      </div>
    </div>
  </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- <script src="<?= base_url();?>assets/js/navbar.js"></script> -->

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

<script>
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });
</script>
