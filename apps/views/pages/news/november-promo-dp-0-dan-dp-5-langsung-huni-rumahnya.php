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
            <li><a href="<?php echo base_url ('news/november-promo-dp-0-dan-dp-5-langsung-huni-rumahnya'); ?>">November Promo - DP 0% dan DP 5% Langsung Huni Rumahnya!</a></li>
        </ul>
    </div>
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <?php include 'sidebar-news.php' ?>
        
        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
                <h1 class="news__page-title">Informasi dan Promo</h1>
                <h3 class="news-title">November Promo - DP 0% dan DP 5% Langsung Huni Rumahnya!</h3>
                <p class="news-date text-italic text-muted">Kamis, 5 November 2020</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="row">
                    <div class="offset-md-3 col-md-6">
                        <picture>
                            <source srcset="<?= base_url();?>assets/images/news/nov/november-promo.webp" type="image/webp">
                            <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/nov/november-promo.jpg" alt="Promo DP 0%">
                        </picture>
                    </div>
                </div>
                <p class="indent-2em"><i>Green Bamboo Terrace</i> dengan tagline <i>A Taste Of Japanese Perfection</i> selalu berkomitmen menghadirkan pilihan yang tepat untuk bertempat tinggal dan berinvestasi. Untuk bulan November ini, <i>Green Bamboo Terrace</i> mengadakan promo <b>“November Promo – Dp 0% dan 5% langsung huni rumahnya”</b>. </p>
                <p class="indent-2em">Yaitu promo cukup dengan DP 0% untuk PNS, Peg. BUMN dan Anak Perusahaan BUMN, Serta Dokter.  Sedang untuk Peg. Swasta dan Wirausaha juga tidak kalah menarik yaitu  cukup dengan DP 5% yang dapat dicicil 3x dengan kisaran 16 Jutaan saja, Anda sudah dapat menempati rumah di <i>Green Bamboo Terrace</i>. harga sudah include PPN, serta Free BPHTB apabila menggunakan fasilitas KPR dengan Bank rekanan kami. </p>
                <p class="indent-2em">Dan tidak cukup hanya itu, Anda juga mendapatkan Free 1 Buah AC Mitsubishi 1 PK, Dispenser with water filter dari Toclas, 2 buah water tank dan Carport Canopy. Semua ini <i>Green Bamboo Terrace</i> persembahkan untuk membantu meringankan dan mewujudkan impian Anda memiliki rumah impian.</p>
                <p class="indent-2em">Berbicara mengenai tempat tinggal di lokasi strategis, untuk dapat memilikinya dengan harga yang tidak cenderung tinggi bukan perkara mudah. Apalagi kalau sudah Ready Stock dan Siap Huni. Lokasi strategis yang dimaksud adalah dekat dengan pusat perbelanjaan, <i>lifestyle</i>, sarana seperti sekolah dan universitas dengan akreditasi baik, rumah sakit berstandar internasional, akses yang mudah dan infrastruktur yang memadai.</p>
                <p class="indent-2em"><i>Green Bamboo Terrace</i> menawarkan konsep rumah  masa kini yang  dekat dengan pusat <i>lifestyle</i> dan aktivitas. Terdekat adalah Mal Boxies dengan tenant utama AEON, Mall Ekalokasari, dan  Transmart yang sedang finishing pembangunannya. </p>
                <p class="indent-2em">Nah, jika Anda ingin mewujudkan mimpi memiliki rumah landed berlokasi strategis, dekat dengan pusat <i>lifestyle</i> dan aktivitas, akses yang mudah ke tol Jagorawi dan tol Bocimi dan juga bernilai investasi tinggi, inilah momen yang tepat. Silakan segera datang dan lihat sendiri perumahan <i>Green Bamboo Terrace</i> yang sudah Ready Stock atau menghubungi nomor telepon  <a href="tel:+628111403280">0811 1403 280</a>.</p>
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
