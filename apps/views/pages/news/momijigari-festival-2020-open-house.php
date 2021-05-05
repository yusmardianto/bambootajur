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
    <div style="margin: 20px 0;">
        <ul class="breadcrumbdesign">
            <li><?php echo '<a href="'.base_url().'">Beranda</a>' ?></li>
            <li><a href="<?= site_url(['news'])?>">Berita</a></li>
            <li><a href="<?php echo base_url ('news/momijigari-festival-2020-open-house'); ?>">Momijigari Festival 2020, Very Special Open House di Pertengahan Oktober 2020</a></li>
        </ul>
    </div>
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <?php include 'sidebar-news.php' ?>
        
        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
                <h1 class="news__page-title">Informasi dan Promo</h1>
                <h3 class="news-title">Momijigari Festival 2020, Very Special Open House di Pertengahan Oktober 2020</h3>
                <p class="news-date text-italic text-muted">Selasa, 20 Oktober 2020</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <p class="indent-2em">Tanggal 17-18  Oktober kemarin, <i>Green Bamboo Terrace</i> mengadakan acara yang diberi tajuk “MOMIJIGARI FESTIVAL 2020, Special Open House”. Momijigari memiliki arti memandang bunga Momiji. Ini adalah salah satu kebiasaan warga di beberapa kota di Jepang, saat musim gugur tiba menjelang musim salju. Di mana keluarga pergi piknik bersama dan memandangi kumpulan bunga momiji yang berguguran. Terinspirasi kebiasaan tersebut, <i>Green Bamboo Terrace</i> juga mengadakan acara Momijigari yang juga kebetulan nama salah satu type rumah nya adalah Type Momiji.</p>
                <div class="row momiji__gallery">
                    <div class="offset-md-3 col-md-6">
                        <picture>
                            <source srcset="<?= base_url();?>assets/images/news/oct/momijigari-festival-2020-1.webp" type="image/webp">
                            <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/oct/momijigari-festival-2020-1.jpg" alt="Tipe Rumah Momiji">
                        </picture>
                    </div>
                </div>
                <p class="indent-2em">Acara yang dihelat mulai dari jam 09.00 hingga pukul 18.00 tersebut, lebih kepada konsep <i>acara Open House dan Home Tour</i>. Di mana customer yang datang, akan diajak melihat rumah contoh, dan berkeliling di seluruh <i>Site Projects</i>, kemudian akan diajak untuk menikmati hidangan khas Jepang di <i>Club House Green Bamboo Terrace</i>, serta makanan dan minuman lainnya. Ada hal yang juga tak kalah menarik adalah disediakannya Photo Booth dengan latar belakang gunung Fuji dan bunga Momiji, dan customer yang datang dapat berfoto menggunakan Yukata.</p>
                <p class="indent-2em">Antusiasme pada acara Momijigari Festival ditunjukkan dengan banyaknya calon customer yang hadir pada saat acara berlangsung. Selama 2 hari Sabtu dan Minggu tersebut. Hujan deras tak menyurutkan semangat para customer ini datang baik karena undangan dari team sales maupun mereka yang kebetulan melewati lokasi perumahan <i>Green Bamboo Terrace</i>.</p>
                <div class="row momiji__gallery">
                    <div class="col-5">
                        <picture>
                            <source srcset="<?= base_url();?>assets/images/news/oct/momijigari-festival-2020-2.webp" type="image/webp">
                            <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/oct/momijigari-festival-2020-2.webp" alt="">
                        </picture>
                    </div>
                    <div class="col-7">
                        <picture>
                            <source srcset="<?= base_url();?>assets/images/news/oct/momijigari-festival-2020-3.webp" type="image/webp">
                            <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/oct/momijigari-festival-2020-3.webp" alt="" style="object-position: top;">
                        </picture>
                    </div>
                    <div class="col-6">
                        <picture>
                            <source srcset="<?= base_url();?>assets/images/news/oct/momijigari-festival-2020-4.webp" type="image/webp">
                            <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/oct/momijigari-festival-2020-4.webp" alt="" style="object-position: bottom right;">
                        </picture>
                    </div>
                    <div class="col-6">
                        <picture>
                            <source srcset="<?= base_url();?>assets/images/news/oct/momijigari-festival-2020-5.webp" type="image/webp">
                            <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/oct/momijigari-festival-2020-5.webp" alt="" style="object-position: top;">
                        </picture>
                    </div>
                </div>
                <p class="indent-2em">Pada acara Momijigari Festival tersebut, <i>Green Bamboo Terrace</i> menawarkan aneka promo. Promo tersebut antara lain, KPR DP 0% dan DP 5% yang dapat dicicil 3x, Free BPHTB, serta hadiah 1 buah Water Heater, Air Purifier, dan Carport Canopy untuk customer yang booking di acara tersebut, dan paling penting adalah Rumah yang ditawarkan di <i>Green Bamboo Terrace</i> sudah Ready Stock dan Siap Huni.</p>
                <p class="indent-2em">Sampai bertemu di events <i>Green Bamboo Terrace</i> lainnya!</p>
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
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://www.bambootajur.com/news/apa-kata-mereka-mengenai-tinggal-di-green-bamboo-terrace"
  },
  "headline": "Apa Kata Mereka Mengenai Tinggal di Green Bamboo Terrace",
  "description": "Testimoni dari penghuni Green Bamboo Terrace",
  "image": "https://www.bambootajur.com/assets/images/news/apakatamereka.png",  
  "author": {
    "@type": "Organization",
    "name": "Green Bamboo Terrace"
  },  
  "publisher": {
    "@type": "Organization",
    "name": "Kebun Bambu Jakarta",
    "logo": {
      "@type": "ImageObject",
      "url": "https://www.bambootajur.com/assets/images/vendor/kbj.png"
    }
  },
  "datePublished": "2020-07-03",
  "dateModified": "2020-07-03"
}
</script>
