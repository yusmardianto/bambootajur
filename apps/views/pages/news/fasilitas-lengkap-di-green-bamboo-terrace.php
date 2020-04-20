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
                    <a href="<?php echo base_url ('news/beli-rumah-di-green-bamboo-terrace-dengan-cara-kpr'); ?>">
                    Beli Rumah Di Green Bamboo Terrace Dengan Cara KPR
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/membangun-impian-bersama-green-bamboo-terrace'); ?>">
                    Membangun Impian Bersama Green Bamboo Terrace
                    </a>
                </li>
                <li class="py-1 news-item-active">
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
              <h3 class="news-title">Fasilitas Lengkap di Green Bamboo Terrace </h3>
              <p class="news-date text-italic text-muted">Jumat, 20 Maret 2020</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="row section-news">
                    <div class="col-12 col-md-12">
                        <div class="mb-4 febpromo-p">
                            
                            <div>
                                <p class="indent-2em">Apakah Anda sedang mencari rumah baru yang nyaman untuk ditempati? Di antara banyaknya perumahan baru, biasanya <i>developer</i> menawarkan konsep yang berbeda antara satu dan lainnya.</p>

                                <p class="indent-2em">Mulai dari bentuk arsitektur, sampai dengan tema dan slogan perumahan. Salah satu yang biasanya menarik calon pembeli adalah kehadiran fasilitas penunjang di dalam maupun di sekitar perumahan tersebut. Ketersediaan fasilitas internal dan eksternal sudah sepatutnya untuk disediakan di perumahan sebagai bentuk cara untuk mendukung kemudahan dalam menunjang kegiatan sehari-hari. </p>

                                <p class="indent-2em">Hal ini sesuai dengan undang-undang tentang ketersediaan prasarana yang terdiri dari fasilitas sosial ataupun juga fasilitas umum untuk memberikan pelayanan publik.</p>

                                <p class="indent-2em">Kami <i>Green Bamboo Terrace</i> dari developer Jepang memberikan hunian yang terbaik untuk Anda dan keluarga, dengan standar bahan material premium dan bergaransi yang kami gunakan.</p>

                                <p class="indent-2em">Dengan konsep rumah modern minimalis yang lebih exclusive dan private yang siap huni juga memiliki fasilitas yang sangat lengkap. Fasilitas yang tersedia di perumahan <i>Green Bamboo Terrace</i> adalah :</p>

                                <ul class="indent-2em ml-3">
                                    <li>Club House</li>
                                    <li>Children Pool</li>
                                    <li>Garden with kids playground (taman)</li>
                                    <li>Mushola</li>
                                    <li>Security dan CCTV 24 Jam</li>
                                    <li>Jaringan Listrik bawah Tanah</li>
                                    <li>PDAM, (Line Telepon dan Line Internet belum tersedia hanya disiapkan jalur saja)</li>
                                    <li>Lebar jalan utama 11 Meter dan lebar jalan rumah 8 meter.</li>
                                </ul>
                            </div>

                        </div>

                        <div class="text-center mb-4">
                            <img class="img-fluid" src="<?= base_url();?>assets/images/news/mar/fasilitas-lengkap-1.jpg" alt="Fasilitas Bermain Anak di Green Bamboo Terrace">
                            <span class="border border-top-0 border-dark py-1 px-3">Fasilitas Playground</span>
                        </div>

                        <div class="mb-4">
                            <p class="indent-2em">
                            <i>Green Bamboo Terrace</i> juga dekat dengan terminal Bus Bogor yang dapat ditempuh sekitar 10 Menit saja dan Stasiun Kereta Bogor yang berjarak 15 Menit saja. Selain itu Green Bamboo Terrace dekat sekali dengan fasilitas-fasilitas eksternal lain seperti Rumah Sakit : RS Juliana, RSUD Ciawi, RS BMC dan RS PMI. Untuk mall ada Ekalokasari Lippo Plaza, Botani Square, Tajur Trade Mall dan Transmart (tahap pembangunan) dan Mall Boxies 123 yang dapat dijangkau dengan jalan kaki saja. Untuk pendidikan ada: Universitas Pakuan, Universitas Juanda,  Sekolah Kesatuan, dll. Terdapat pula Hotel Zia Agria, Hotel Santika, Hotel Amarosa dll.
                            </p>
                        </div>
                        
                        <div class="text-center mb-4">
                            <div class="row">
                                <div class="offset-lg-2 offset-md-1 col-lg-8 col-sm-md">
                                    <img class="img-fluid" src="<?= base_url();?>assets/images/news/mar/fasilitas-lengkap-2.jpg" alt="Fasilitas Mushola di Green Bamboo Terrace">
                                    <span class="border border-dark py-1 px-3">Fasilitas Mushola di Green Bamboo Terrace</span>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <p class="indent-2em">Lokasi <i>Green Bamboo Terrace</i> juga sangat strategis sehingga mudah sekali mencapai Tol Jagorawi dan Tol Bocimi, yang berjarak hanya sekitar 7 menit saja dari perumahan <i>Green Bamboo Terrace</i>, sehingga akan sangat mudah juga untuk bepergian ke Jakarta, Bandung, dan Sukabumi, Terutama hanya 35 Menit saja ke Bandara Halim Perdana Kusuma.
                            </p>
                            <p class="indent-2em">Mari datang dan kunjungi show unit kami Senin – Minggu pukul 09.00-17.00 dan dapatkan promo menarik dan hadiah langsungnya.
                            </p>
                            <p class="indent-2em"><b>UNIT TERBATAS !!!</b></p>
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