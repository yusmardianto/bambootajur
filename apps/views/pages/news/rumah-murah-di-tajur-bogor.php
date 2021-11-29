<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>

<style>
    sup{
      top: -.5em !important;
    }
    .indent-2em {
        text-indent: 2em;
    }
    .pl-2em {
        padding-left: 2em;
    }
    .fs-18{
      font-size: 18px;
    }
</style>

<div style="color: #000;background-color:#fff;text-align:left;padding: 120px 5% 20px 5%;text-align: justify;">
<div style="margin: 20px 0;">
        <ul class="breadcrumbdesign">
            <li><?php echo '<a href="'.base_url().'">Beranda</a>' ?></li>
            <li><a href="<?= site_url(['berita-dan-promo'])?>">Berita</a></li>
            <li>
                <a href="<?php echo base_url ('rumah-murah-di-tajur-bogor'); ?>">
                Rumah Murah di Tajur Bogor
                </a>
            </li>
        </ul>
    </div>
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <?php include 'sidebar-news.php' ?>

        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
                <h1 class="news__page-title">Informasi dan Promo</h1>
                <h3 class="news-title">Rumah Murah di Tajur Bogor</h3>
                <p class="news-date text-italic text-muted">Selasa, 23 November 2021</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="section-news">
                    <div>
                        <p class="indent-2em">Banyak <a href="https://www.bambootajur.com/tipe-rumah" target="_blank">rumah murah di Tajur Bogor</a>. Tapi seringkali harga yang murah tersebut tidak sejalan dengan kualitas bangunan dari rumah yang akan Anda beli.</p>

                        <p class="indent-2em">Perlu ketelitian untuk membeli dan menemukan <a href="https://www.bambootajur.com/tipe-rumah" target="_blank">rumah murah di Tajur Bogor</a>. Jika Anda tidak atau kurang berhati - hati, tidak menutup kemungkinan dalam waktu satu atau dua tahun setelah Anda huni, akan banyak perbaikan dan renovasi yang disebabkan oleh kualitas bangunan yang tidak baik atau terkesan asal dibangun.</p>

                        <p class="indent-2em">Green Bamboo Terrace adalah perumahan dengan konsep cluster one gate system yang berada di kawasan Tajur, Kota Bogor. Berada di bawah naungan <a href="https://kbj.co.id/" target="_blank">PT. Kebun Bambu Jakarta</a>, perumahan ini selalu memprioritaskan kualitas bangunan sebelum rumah dijual kepada konsumen. Lihat semua fasilitas kami di halaman berikut: <a href="https://www.bambootajur.com/fasilitas-perumahan" target="_blank">FASILITAS PERUMAHAN</a>.</p>

                        <div class="row justify-content-center">
                            <div class="col-md-10 text-center">
                            <p><strong>= = Foto fasilitas = =</strong></p>
                            <picture>
                                <source srcset="<?= base_url();?>assets/images/news/2021/nov/rumah-murah-di-tajur-bogor-1.webp" type="image/webp"/>
                                <img class="mb-4 img-fluid" src="<?= base_url();?>assets/images/news/2021/nov/rumah-murah-di-tajur-bogor-1.png" alt="Rumah Murah di Tajur Bogor">
                            </picture>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-10 text-center">
                            <picture>
                                <source srcset="<?= base_url();?>assets/images/news/2021/nov/rumah-murah-di-tajur-bogor-2.webp" type="image/webp"/>
                                <img class="mb-4 img-fluid" src="<?= base_url();?>assets/images/news/2021/nov/rumah-murah-di-tajur-bogor-2.png" alt="Rumah Murah di Tajur Bogor">
                            </picture>
                            </div>
                        </div>

                        <p class="indent-2em">Green Bamboo Terrace juga sangat memperhatikan estetika dan keindahan di dalam kawasan perumahan. Jika Anda mengunjungi lokasi (survey), mungkin Anda akan bertanya, "apakah sudah masuk listrik?".</p>
                    
                        <p class="indent-2em">Tentu sudah. Listrik & PDAM sudah terinstal dengan sempurna pada perumahan kami. Jika Anda tidak menemukan adanya kabel - kabel yang melintang dari tiang ke rumah, itu karena Green Bamboo Terrace menggunakan Underground Electricity, atau jaringan listrik bawah tanah. Meteran PDAM juga telah terpasang rapih pada masing - masing unit.</p>
                    
                        <p class="indent-2em">Mengapa Green Bamboo Terrace dapat dikatakan sebagai <a href="https://www.bambootajur.com/tipe-rumah" target="_blank">rumah murah di Tajur Bogor</a>? Karena Anda akan membeli rumah dengan kualitas terbaik. Sirkulasi udara yang prima, pencahayaan yang sangat cukup, karena kami memasang cukup banyak jendela pada setiap unit, dan berbagai peralatan premium berkualitas terbaik, terpasang pada rumah yang akan Anda beli.</p>
                    
                        <p class="indent-2em">Lihat spesifikasi bangunan secara lengkap, beserta semua fasilitas dalam rumah pada halaman berikut:  <a href="https://www.bambootajur.com/tipe-rumah/akane" target="_blank">FASILITAS TIPE AKANE</a> dan <a href="https://www.bambootajur.com/tipe-rumah/momiji" target="_blank">FASILITAS TIPE MOMIJI</a>.</p>
                    
                        <p class="indent-2em">Selain itu di penghujung tahun 2021 ini, Anda bisa mendapatkan promo FREE PPN, Gratis AC & Gratis Water Purifier.</p>
                    
                        <p class="indent-2em">Untuk mendapatkan visualisasi yang lebih baik dan mendalam seputar perumahan Green Bamboo Terrace, kami sangat menyarankan Anda untuk melihat video kami berikut ini.</p>

                        <div class="row justify-content-center">
                            <div class="col-md-10 text-center">
                            <p><strong>Video Tipe Akane</strong></p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/gjkyY9DNIJ8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-center">
                            <div class="col-md-10 text-center">
                            <p><strong>Video Tipe Momiji</strong></p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/EWooB-AHRaU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>

                        <p class="indent-2em">Setelah Anda lihat dengan seksama, dengan segala fasilitas, lokasi premium di tengah Kota Bogor dan kecanggihan alat yang ada di dalam rumah, tentu tidak salah jika kita katakan bahwa Green Bamboo Terrace dapat kita kategorikan sebagai <a href="https://www.bambootajur.com/tipe-rumah" target="_blank">rumah murah di Tajur Bogor</a>.</p>
                    
                        <p class="indent-2em">Dapatkan pricelist lengkap dan konsultasi dengan tim marketing kami melalui WhatsApp dengan meng-klik tombol di bawah ini.</p>

                        <div class="row justify-content-center">
                            <div class="col-md-10 text-center">
                                <a href="https://wa.me/628111403280?text=Halo%20Green%20Bamboo%20Terrace,%20saya%20ingin%20meminta%20Pricelist.%20Terimakasih" target="_blank" rel="noopener noreferrer">
                                    <picture>
                                        <source type=" image/webp" srcset="/assets/images/New_CTA_Button_2.webp">
                                        <img src="/assets/images/New_CTA_Button_2.png" alt="WA" class="cta-contact-us-news" width="300">
                                    </picture>
                                </a>
                            </div>
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
    $('#' + id + ' ul').slideToggle();
    $('#' + id + ' i').toggleClass('fa-chevron-up').toggleClass('fa-chevron-down');
    $('#' + id + ' .inactive ul').css('display', 'block');
}
</script>