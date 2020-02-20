<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>

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
                    <a href="<?php echo base_url ('news/kunjungan-dari-sumitomo-mitsui-banking-corporation-japan.php'); ?>">
                    Kunjungan Dari Sumitomo Mitsui Banking Corporation Japan
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/february-ai-promo.php'); ?>">
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
                  <li class="py-1 news-item-active">
                    Moda Transportasi dan Akses Semakin Lengkap, Properti di Bogor Semakin Menjanjikan.
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
                <h3 class="news-title">Moda Transportasi dan Akses Semakin Lengkap, Properti di Bogor Semakin
                    Menjanjikan.</h3>
                <p class="news-date text-italic text-muted">1 Oktober 2019</p>

                <div class="text-center">
                    <div class="d-inline-block">
                        <img src="<?= base_url();?>assets/images/news/news-tol-bocimi.jpg" class="news-image px-2"
                            alt="Tol Bocimi">
                        <small class="d-block">Tol Bocimi (Bogor-Ciawi-Sukabumi).</small>
                    </div>
                    <div class="d-inline-block">
                        <img src="<?= base_url();?>assets/images/news/news-stasiun-lrt.jpg" class="news-image px-2"
                            alt="Stasiun LRT Sentul">
                        <small class="d-block">Stasiun LRT Sentul.</small>
                    </div>
                </div>

            </div>
            <div class="pt-3 news-content">
                <p>Seperti kawasan penyangga Jakarta lainnya, Bogor terus berkembang menjadi area investasi properti
                    yang prospektif. Hal ini tercermin dari pertumbuhan hunian—baik tapak maupun vertikal—yang
                    dikembangkan, selain pusat perbelanjaan dan hiburan. </p>
                <p>Bogor juga disokong oleh sektor transportasi yang baik, misalnya KRL Jabotabek jurusan Bogor
                    –Jakarta Kota guna mengangkut warga Bogor yang bekerja di Ibukota. Hal ini senada berdasarkan
                    demografinya, kelompok usia yang menjadi pemukim baru di Bogor rata-rata merupakan kaum produktif.
                    Kawasan ini juga menyimpan potensi besar lewat gencarnya pembangunan infrastruktur dengan rencana
                    jaringan jalan Bogor Outer Ring Road (BORR), Bogor Inner Ring Road (BIRR), hingga jalan Poros Tengah
                    Timur (jalur Puncak Dua).</p>
                <p>Yang terbaru, jalan Tol Bogor-Ciawi – Sukabumi (Bocimi) per 08 Juni efektif beroperasi untuk seksi 1
                    ruas Ciawi – Cigombong. Jalan tol seksi 1 sepanjang 15,3 kilometer itu diyakini mampu memangkas
                    waktu tempuh hingga 1,5 jam atau mengurai kemacetan sampai 20%.</p>
                <p>Penyelesaian akan dilanjutkan dari Cigombong sampai Cibadak dan ditargetkan selesai pada 2019.
                    Sedangkan untuk sampai Sukabumi Timur akan selesai tahun 2020. Beroperasinya tol dari Ciawi sampai
                    Cigombong saja diperkirakan sudah mengurangi kemacetan yang signifikan.</p>
                <p class="pb-4">Sementara dari rencana tiga seksi tahapan pembangunan BORR, dua di antaranya kini telah
                    rampung.
                    Begitupula dengan pembangunan infrastruktur kereta ringan (light rail transit/LRT) rute Bogor –
                    Cawang yang digadang-gadang bakal bikin properti di kawasan Bogor meroket.</p>

                <h4 class="news-title">Perumahan Green Bamboo Terrace. </h4>
                <p>Kemudahan Akses Dari dan menuju Bogor, juga berdampak kepada meningkatnya permintaan terhadap
                    perumahan di Kota Bogor. </p>
                <p>Trend ini ditangkap dengan baik oleh PT. Kebun Bambu Jakarta, sebagai salah satu Developer Perumahan
                    untuk membangun dan mengembangkan Perumahan <strong>Green Bamboo Terrace</strong> yang berlokasi di
                    Tajur Kota Bogor,
                    yang dapat menempuh hanya dalam 7 menit saja ke Tol Jagorawi dan Tol Bocimi.</p>
                <p>Green Bamboo Terrace Bogor adalah sebuah standar baru untuk hunian tinggal yang Nyaman, Aman, dan
                    Asri yang terletak di Kota Bogor. Dengan Tagline <strong>A Taste Of Japanese Perfection</strong>,
                    Green Bamboo
                    Terrace Bogor menawarkan sebuah hunian yang sangat Exclusive dan Private yang berada di salah satu
                    pusat bisnis dan niaga di Kota Bogor.</p>

                <div class="text-center py-2">
                    <img src="<?= base_url();?>assets/images/news/news-1.jpg" class="w-75" alt="news-1">
                </div>

                <p>Saat Ini, Green Bamboo Terrace Bogor Ditawarkan dengan 2 pilihan unit yang bisa anda pilih sesuai
                    dengan kebutuhan anda. Yaitu:
                </p>
                <ul class="list-unstyled">
                    <li><strong>Type Akane</strong> dengan Luas bangunan 95,5 M dilengkapi dengan 3 Kamar Tidur, dan
                    </li>
                    <li><strong>Type Momiji</strong> dengan Luas Bangunan 73 M yang dilengkapi dengan 2 Kamar Tidur.
                    </li>
                </ul>
                <p>Green Bamboo Terrace Bogor terletak di Kawasan seluas 1,7 Ha dan memiliki jumlah unit yang sangat
                    terbatas yaitu hanya 106 unit, menjadikan Green Bamboo Terrace Bogor sangat exclusive dan private.
                </p>

                <div class="text-center py-2">
                    <img src="<?= base_url();?>assets/images/news/news-2.jpg" class="w-75" alt="news-2">
                </div>

                <p>Phase 1 yang mulai dipasarkan semenjak 1 Mei 2019, yang terdiri dari 38 Unit, telah hampir sepenuhnya
                    rampung dibangun. Dan di akhir September ini, Unit rumah Di Green Bamboo Terrace sudah mulai diserah
                    terimakan kepada para pembeli unit di Green Bamboo Terrace Bogor. </p>
                <p>Perumahan Green Bamboo Terrace juga dibangun menggunakan banyak sekali material-material terbaik di
                    kelasnya. Penggunaan Frame YKK dan Kaca Asahimas, Daun pintu dari Daiken, handle pintu Dekson,
                    sanitary dari Toto, lantai Homogenous Tile dengan merk Alice, dan juga di setiap unit disediakan
                    Dispenser dan water filter dari Toclas, 1 unit AC Mitsubishi, Ground Water Tank dan Torren sebagai
                    sebuah standar.</p>
                <p>Green Bamboo Terrace Bogor siap huni mulai September 2019 dan ditawarkan dengan harga Rp. 1,1
                    Milyar, dan juga menawarkan cara bayar Cash, cicilan ke developer dan juga KPR.</p>
            </div>
        </div>
    </div>
</div>

<!-- return to top -->
<!-- <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a> -->
<!-- <a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.."
    class="floating-whatsapp" target="_blank" rel="noopener noreferrer">
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