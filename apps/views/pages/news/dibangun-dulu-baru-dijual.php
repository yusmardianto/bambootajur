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
                    <a href="<?php echo base_url ('news/hanami-festival'); ?>">
                    Hanami Festival
                    </a>
                </li>
                <li class="py-1 news-item-active">
                    <a href="<?php echo base_url ('news/dibangun-dulu-baru-dijual'); ?>">
                    Dibangun dulu, Baru dijual…
                    </a>
                </li>
                <li class="py-1">
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
              <h3 class="news-title">Dibangun dulu, Baru dijual…</h3>
              <p class="news-date text-italic text-muted">Kamis, 5 Maret 2020</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="row section-news">
                    <div class="col-12 col-md-12">
                        <div class="mb-4 febpromo-p">
                            <p class="indent-2em">
                            Baru-baru ini kita mendengar peristiwa yang cukup memilukan hati, di mana hampir 7 ribu orang yang mendambakan rumah pertama nya harus menelan pil pahit atas kenyataan bahwa mereka ditipu oleh pengembang perumahan, yang menjanjikan dalam jangka waktu tertentu, pemesan unit rumah melalui pengembang tersebut akan mendapatkan rumah impian nya. Apa daya, semua hanya tipuan dari pengembang yang tidak memiliki kredibilitas.
                            </p>
                        
                            <p class="indent-2em">
                            Berbanding terbalik dengan <i>Green Bamboo Terrace</i>, sebuah proyek perumahan dari PT. Kebun Bambu Jakarta yang berlokasi di daerah Tajur, Kota Bogor.<i> Green Bamboo Terrace</i> dibangun menggunakan banyak sekali material-material berkualitas dan berstandar Jepang.
                            </p>

                            <p class="indent-2em">
                            <i>Green Bamboo Terrace</i> mulai dipasarkan di Bulan Mei 2019, saat pembangunan sudah mencapai 95%. Hingga kini, sudah tersedia 38 unit rumah yang siap huni, dan serah terima sudah mulai dilakukan semenjak September 2019. Dan saat ini beberapa penghuni yang sudah melakukan pelunasan unit, telah dilakukan penandatanganan AJB di notaris rekanan <i>Green Bamboo Terrace</i>.
                            </p>

                            <p class="indent-2em">
                            Bukan saja hanya siap huni, akan tetapi seluruh legalitas sebuah perumahan telah didapatkan, dan seluruh sertifikat unit rumah di <i>Green Bamboo Terrace</i> telah pecah, sehingga memudahkan penghuni dan calon penghuni di <i>Green Bamboo Terrace</i> bisa mendapatkan bukti dan legalitas yang valid untuk kepemilikan unit rumah di <i>Green Bamboo Terrace</i>.
                            </p>

                        </div>
                        <div class="text-center">
                            <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/mar/dibangun.png" alt="Kunjungan Dari Sumitomo Mitsui Banking Corporation Japan">
                        </div>
                        <div class="mb-4 feb-promo-p">
                            <p class="indent-2em">
                            Selain itu, material-material terbaik digunakan dalam pembangunan unit rumah di <i>Green Bamboo Terrace</i>. Salah satunya adalah penggunaan kualitas beton K300 yang jauh di atas kualitas rata-rata perumahan yang dibangun oleh developer lokal lainnya. Dan penggunaan merek-merek Jepang lainnya seperti sanitary dari TOTO, frame kaca dari YKK, kaca dari Asahimass Glass, Dispenser TOCLAS yang langsung dapat diminum dari aliran air PDAM, Dll.
                            </p>
                            <p class="indent-2em">
                            Semua ini adalah bentuk Komitmen dari PT. Kebun Bambu Jakarta untuk membangun sebuah hunian dengan kualitas terbaik, legalitas terpenuhi, dan <i>affordable</i>. <i>Green Bamboo Terrace</i> dibangun seperti membangun rumah sendiri. 
                            </p>
                            <p class="indent-2em">
                            PT. Kebun Bambu Jakarta, sangat memahami bahwa rumah adalah untuk selamanya, dan banyak customer yang mencari rumah sebagai istana tempatnya berlindung untuk jangka waktu yang sangat lama, oleh karenanya, Komitment PT. Kebun Bambu Jakarta diwujudkan dalam perumahan <i>Green Bamboo Terrace</i>, yang dibangun dulu sebelum dijual, dan menggunakan banyak material-material terbaik. 
                            </p>
                            <p class="indent-2em">
                            Jangan ragu lagi, silakan datang dan buktikan sendiri. Kunjungi rumah contoh dan unit ready kami hanya di site project <i>Green Bamboo Terrace</i> Jl. Raya Tajur Komp. Unitex. Atau dapat menghubungi kami di 0811 140 3280 untuk membuat janji kunjungan ke proyek dan rumah contoh kami.
                            </p>
                        </div>
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