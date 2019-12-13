<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>

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
          <img class="img-fluid" src="<?php echo base_url();?>assets/images/the-homes/type-akane.png" alt="Type Akane">
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
      <img src="<?php echo base_url();?>assets/images/detail/toclas.png" class="w-100" alt="toclas-img" />
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
                <img src="<?= base_url();?>assets/images/vendor/kbj.png" class="img-kbj" alt="kbj-img" />
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
                <a href="https://twitter.com/BambooTajur" rel="noopener noreferrer" aria-label="Click here to visit our twitter account" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/bambootajur.official/" rel="noopener noreferrer" aria-label="Click here to visit our instagram account" target="_blank"><i class="fab fa-instagram"></i></a>
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
<!-- <a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.." rel="noopener noreferrer" class="floating-whatsapp" target="_blank">
        <div class="f-whatsapp"> </div>
        <p class="floating-teks">0811 1403 280</p>
    </a> -->

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
            <!--<div class="card-nup">
                <p class="pri">Contact Us Now</p>
                <p class="data">Silahkan isi data informasi di bawah ini atau langsung hubungi kami di: </p>
                <p class="data">
                  <a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.." class="whatsapp-phone">
                    <img src="<?= base_url();?>assets/images//New_CTA_Button_2.png" alt="whatsapp-icon" />
                  </a>
                </p>
                <p class="data">Kami siap menghubungi Anda.</p>
            </div>-->
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
        <img src="<?php echo base_url();?>assets/images/detail/denah-akane.png" class="img-responsive "/>
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
        <img src="<?php echo base_url();?>assets/images/detail/denah-momiji.png" class="img-responsive"/>
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
