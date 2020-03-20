<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>

<style>
    .indent-2em {
        text-indent: 2em;
    }
</style>

<div style="color: #000;background-color:#fff;text-align:left;padding: 120px 5% 20px 5%;text-align: justify;">
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <div class="col-md-3" id="newsSidebar">

            <div class="news-sidebar" id="recent">
                <div class="d-flex flex-row">
                    <p class="py-2 m-0 h5 font-weight-bold">Recent</p>
                    <button type="button" class="close opacity-1 p-2" aria-label="Close" onClick="showNews('recent')">
                        <i class="fas fa-chevron-up"></i>
                    </button>
                </div>
                <ul class="list-unstyled pl-3">
                <li class="py-1">
                    <a href="<?php echo base_url ('news/fasilitas-lengkap-di-green-bamboo-terrace'); ?>">
                    Fasilitas Lengkap di Green Bamboo Terrace
                    </a>
                </li>
                <!-- <li class="py-1">
                    <a href="<?php echo base_url ('news/hanami-festival'); ?>">
                    Hanami Festival
                    </a>
                </li> -->
                <li class="py-1">
                    <a href="<?php echo base_url ('news/dibangun-dulu-baru-dijual'); ?>">
                    Dibangun dulu, Baru dijual…
                    </a>
                </li>
                <li class="py-1 news-item-active">
                    <a href="<?php echo base_url ('news/kunjungan-dari-sumitomo-mitsui-banking-corporation-japan'); ?>">
                    Kunjungan Dari Sumitomo Mitsui Banking Corporation Japan
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/february-ai-promo'); ?>">
                    February AI Promo
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/penandatanganan-ajb-dan-balik-nama-unit-di-green-bamboo-terrace'); ?>">
                    Penandatanganan AJB dan Balik Nama Unit di Green Bamboo Terrace
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/berburu-promo-green-bamboo-terrace-bogor-di-awal-tahun-2020'); ?>">
                    Berburu Promo Green Bamboo Terrace Bogor di Awal tahun 2020
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/year-end-promo-crazy-offer'); ?>">
                    Year End Promo - Crazy Offer
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/momijigari-festival-oktober'); ?>">
                    Momijigari Festival 26-27 Oktober, Keriuhan di Penghujung Bulan Oktober
                    </a>
                </li>
                  <li class="py-1">
                    <a href="<?php echo base_url ('news/serah-terima-unit-phase-1'); ?>">
                    Serah Terima Unit Phase 1
                    </a>
                  </li>
                  <li class="py-1">
                    <a href="<?php echo base_url ('news/customer-gathering-event-get-special-discount-and-gift'); ?>">
                      Customer Gathering Event: Get Special Discount and Gift
                    </a>
                  </li>
				          <li class="py-1">
                    <a href="<?php echo base_url ('news/penandatanganan-kerjasama-dengan-bank-mandiri-dan-bank-bni-syariah'); ?>">
                    Penandatanganan Kerjasama dengan Bank Mandiri dan Bank BNI Syariah
                    </a>
                  </li>
                  <li class="py-1">
                    <a href="<?php echo base_url ('news/moda-transportasi-dan-akses-semakin-lengkap-properti-di-bogor-semakin-menjanjikan'); ?>">
                    Moda Transportasi dan Akses Semakin Lengkap, Properti di Bogor Semakin Menjanjikan.
                    </a>
                  </li>
                </ul>
            </div>

            <div class="news-sidebar inactive" id="aug_19">
                <div class="d-flex flex-row">
                    <p class="text-muted py-2 m-0 h5 font-weight-bold">August 2019</p>
                    <button type="button" class="close opacity-1 p-2" aria-label="Close" onClick="showNews('aug_19')">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <ul class="list-unstyled pl-3">
                </ul>
            </div>

            <div class="news-sidebar inactive" id="jul_19">
                <div class="d-flex flex-row">
                    <p class="text-muted py-2 m-0 h5 font-weight-bold">July 2019</p>
                    <button type="button" class="close opacity-1 p-2" aria-label="Close" onClick="showNews('jul_19')">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
            </div>

            <div class="news-sidebar inactive" id="jun_19">
                <div class="d-flex flex-row">
                    <p class="text-muted py-2 m-0 h5 font-weight-bold">June 2019</p>
                    <button type="button" class="close opacity-1 p-2" aria-label="Close" onClick="showNews('jun_19')">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
            </div>

        </div> <!-- END NEWS SIDE BAR -->

        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
              <h3 class="news-title">Kunjungan Dari Sumitomo Mitsui Banking Corporation Japan</h3>
              <p class="news-date text-italic text-muted">Kamis, 20 Februari 2020</p>
			      </div>
            <div class="pl-3 pt-3 news-content">
                <div class="row section-news">
                    <div class="col-12 col-md-12">
                        <p class="mb-4 febpromo-p indent-2em">
                        Hari Kamis, 13 Februari 2020, <i>Green Bamboo Terrace</i> kedatangan tamu istimewa dari SMBC Group Japan. Dari pihak SMBC Group yang datang diwakili oleh Mr. Kengo Nakagawa sebagai Managing Executive Officer Deputy Head of Wholesale Banking unit di Sumitomo Mitsui banking Corporation juga Bersama Mr. Yasuhiro Daikoku yang menjabat sebagai Director SMBC Group di Bank BTPN. Dan kedatangan mereka juga disambut orang nomor 1 di Bamboo Field Japan yang merupakan Mother company dari PT. Kebun Bambu Jakarta yaitu Mr. Tatsunori Sasano sebagai Managing Director Bamboo Field, dan Mr. Hiroyuki Ishida sebagai Indonesia Project Advisor PT. Kebun Bambu Jakarta, dan Bpk. T. Ivan Mukmin sebagai Direktur Utama PT. Kebun Bambu Jakarta.
                        </p>
                        <img class="w-100 mb-4" src="<?= base_url();?>assets/images/news/feb/kunjungan-1.png" alt="Kunjungan Dari Sumitomo Mitsui Banking Corporation Japan">
                        <p class="mb-4 feb-promo-p">
                            <div class="indent-2em">
                                Kedatangan para petinggi SMBC group ini bertujuan mempererat kerjasama didalam banyak bidang, yang selama ini telah terjalin baik dengan Bamboo Field-Japan dan PT. Kebun Bambu Jakarta, sekaligus juga untuk melihat project perumahan <i>Green Bamboo Terrace</i> yang merupakan sebuah <i>Masterpiece</i> dari PT. Kebun Bambu Jakarta. <br><br>
                            </div>
                            <div class="indent-2em">
                                Selain diterima di <i>Clubhouse Green Bamboo Terrace</i> perwakilan dari SMBC Group tersebut juga diajak berkeliling ke site Project serta rumah contoh, juga melihat bagian dalam dari rumah-rumah yang telah terbangun di <i>Green Bamboo Terrace</i>. 
                            </div>
                        </p>
                        <img class="w-100 mb-4" src="<?= base_url();?>assets/images/news/feb/kunjungan-2.png" alt="Kunjungan Dari Sumitomo Mitsui Banking Corporation Japan">
                        <p class="feb-promo-p">
                            <div class="indent-2em">
                                Pertemuan yang berlangsung sore hari itu berlangsung selama lebih dari 1 jam. For Indonesia Project Director Mr. Hiroyuki Ishida juga turut menjelaskan banyak hal mengenai product, pricing strategy, Market Segment, dan Future Development <i>Green Bamboo Terrace</i> kepada perwakilan dari SMBC group, yang disambut  cukup antusias. <br><br>
                            </div>
                            <div class="indent-2em">
                                Dengan percaya diri, Green Bamboo Terrace diperkenalkan sebagai <i>A Taste Of Japanese Perfection</i>. Yang merupakan tagline utama <i>Green Bamboo Terrace</i>. Kepercayaan diri itu timbul dari digunakannya material-material berkualitas standar Jepang, timeline pembangunan standar Jepang, dan standar mutu dan kualitas bangunan dari Jepang pula. <br><br>
                            </div>
                            <div class="indent-2em">
                                Hujan rintik-rintik sore hari di 13 Februari tersebut, turut menambah syahdunya senyum para petinggi SMBC Group yang datang yang sangat terkesan dan cukup puas  dengan apa yang mereka lihat di project Green Bamboo Terrace. <br><br>
                            </div>
                            <div class="indent-2em">
                                A Taste Of Japanese Perfection bukan cuma sebuah tagline saja, akan tetapi menjadi sebuah filosofi yang dipegang teguh oleh Green Bamboo Terrace untuk memberikan perumahan yang terbaik bagi seluruh customer, dan mendapatkan sebuah pengalaman baru dalam memiliki sebuah hunian idaman bagi customer yang hendak tinggal maupun berinvestasi. <br><br>
                            </div>
                            <div class="indent-2em">
                                A Taste Of Japanese Perfection is a Philosophy, Guarantee, and Quality from Green Bamboo Terrace just for you.
                            </div>
                        </p>
                    </div>
                </div>
                

              <br>
            </div>
        </div>
    </div>
</div>

<!-- return to top -->
<!-- <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a> -->
<!-- <a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.." rel="noopener noreferrer"
    class="floating-whatsapp" target="_blank">
    <div class="f-whatsapp"> </div>
    <p class="floating-teks">0811 1403 280</p>
</a> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="<?= base_url();?>assets/js/navbar.js"></script>

<script>
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(100); // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(0); // Else fade out the arrow
    }
});
$('#return-to-top').click(function() { // When arrow is clicked
    $('body,html').animate({
        scrollTop: 0 // Scroll to top of body
    }, {
        duration: 750,
        // easing: "easeOutQuint"
    });
});
</script>

<script>
$(function() {
    var header = $("#navbar");

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
    } else {
        $('body').addClass('lock-scroll');
    }
}
</script>


<!-- SMOOTH SCROLL FUCNTION JQUERY DROPDOWN -->
<script>
$('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, function() {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                });
            }
        }
    });
</script>

<!-- SHOW NEWS SIDEBAR -->
<script>
$('.dropdown-item').on('click', function() {
    $('.carousel-item').removeClass('active');
    var itemSlider = $(this).data('slider');
    $(itemSlider).addClass('active');
    console.log(itemSlider);
})
</script>

<script>
function showNews(id) {
    $('#' + id + ' ul').toggle();
    $('#' + id + ' i').toggleClass('fa-chevron-up').toggleClass('fa-chevron-down');
    $('#' + id + ' .inactive ul').css('display', 'block');
}
</script>