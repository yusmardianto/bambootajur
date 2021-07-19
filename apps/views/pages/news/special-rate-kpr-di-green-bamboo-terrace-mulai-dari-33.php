<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>

<style>
    .indent-2em {
        text-indent: 2em;
    }
    .custom-list {
        padding-left: 3em;
    }
    .custom-list li {
        margin-bottom: 15px;
    }
    .custom-list ul {
        padding-left: 2em;
    }
</style>

<div style="color: #000;background-color:#fff;text-align:left;padding: 120px 5% 20px 5%;text-align: justify;">
    <div style="margin: 20px 0;">
        <ul class="breadcrumbdesign">
            <li><?php echo '<a href="'.base_url().'">Beranda</a>' ?></li>
            <li><a href="<?= site_url(['berita-dan-promo'])?>">Berita</a></li>
            <li><a href="<?php echo base_url ('berita-dan-promo/special-rate-kpr-di-green-bamboo-terrace-mulai-dari-33'); ?>">
            Special Rate KPR di Green Bamboo Terrace Mulai dari 3,3%</i></a></li>
        </ul>
    </div>
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <?php include 'sidebar-news.php' ?>
        
        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
                <h1 class="news__page-title">Informasi dan Promo</h1>
                <h3 class="news-title">Special Rate KPR di Green Bamboo Terrace Mulai dari 3,3%</i></h3>
                <p class="news-date text-italic text-muted">Senin, 19 Juli 2021</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="section-news"> 
                    <div class="row justify-content-center">
                        <div class="col-md-10" style="text-align:center">
                            <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/2021/juli/special-rate-kpr.jpg" alt="Special Rate KPR di Green Bamboo Terrace Mulai dari 3,3%"> 
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                        <p class="indent-2em">Sebagai kebutuhan primer, memiliki hunian yang nyaman merupakan dambaan setiap orang. Di tengah pandemi, permintaan untuk membeli rumah khususnya untuk tempat tinggal masih muncul.</p>
                        <p class="indent-2em">Bulan Juli 2021 ini kembali <em>Green Bamboo Terrace</em> menggandeng Bank BSI sebagai Partner KPR untuk memberikan kemudahan dalam memberikan kredit kepemilikan unit rumah di <em>Green Bamboo Terrace</em> dengan metode pembayaran KPR. </p>
                        <p class="indent-2em">Kemudahan yang dimaksud adalah Program kemudahan <em>Down Payment</em> 5%, dan <em>Down Payment</em> 5% tersebut juga bisa dicicil sebanyak 3x. Juga Bank BSI sebagai partner KPR di <em>Green Bamboo Terrace</em> memberikan special rate untuk program ini, yakni; </p>
                        <ul class="ml-5">
                            <li>
                                <strong>Program Umum</strong>
                                <ol class="pl-4">
                                    <li><strong>3,3% fixed 1 tahun</strong>, selanjutnya mulai tahun ke 2 sebesar 10% minimal jangka waktu 15 tahun</li>
                                    <li><strong>4,5% fixed 3 tahun</strong>, selanjutnya mulai tahun ke 4 sebesar 11,5% minimal jangka waktu 15 tahun</li>
                                    <li><strong>5,99% fixed 5 tahun</strong>, selanjutnya mulai tahun ke 6 sebesar 12,5% minimal jangka waktu 15 tahun</li>
                                </ol>
                            </li>
                            <li>
                                <strong>Program KPR DP 0%</strong> Khusus untuk PNS/ASN, Pegawai BUMN dan anak Perusahaan, serta Dokter.
                            </li>
                        </ul>
                        <p class="indent-2em">KPR ini memiliki keunggulan pada proses yang cepat, biaya kredit ringan, dan uang muka terjangkau. Kelebihan KPR BSI selain memiliki rate yang sangat rendah dan menarik adalah memiliki masa tenor panjang hingga 30 tahun. Hal ini tentu menjadi pilihan yang menarik bagi customer agar bisa lebih fleksibel untuk mengatur cicilan per bulan. </p>
                        <p class="indent-2em">Proses KPR BSI pun cepat. Anda hanya perlu menyiapkan dokumen persyaratan KPR dan kemudian nantinya dalam hitungan hari akan diketahui apakah pengajuan KPR Anda disetujui atau tidak. </p>
                        <p class="indent-2em">Tak cukup sampai di situ, khusus untuk bulan Juli 2021 ini, <em>Green Bamboo Terrace</em> memberikan penawaran yang sangat berbeda….. Khusus di bulan Juli ini penawaran special yang kami berikan buat kamu adalah :</p>
                        <ul class="ml-5">
                            <li>Free Carport Canopy</li>
                            <li>Free AC untuk setiap ruangan (setiap kamar tidur & ruang tamu)</li>
                            <li>Free Dispenser Toclas</li>
                            <li>Free Water Filter Toclas</li>
                            <li>Free 2 Water Tank</li>
                            <li>Free Water Heater</li>
                            <li>Free Air Purifier</li>
                            <li>KPR cukup DP 5% dan bisa cicil 3x</li>
                            <li>Free BPHTB untuk seluruh cara bayar</li>
                            <li>Free PPN 100%</li>
                        </ul>
                        <p class="indent-2em">Jadi apa lagi yang kamu tunggu? Sekarang lah saatnya waktu terbaik untuk membeli rumah, utamanya di <em>Green Bamboo Terrace</em>.</p>
                        <p class="indent-2em">Kalau kamu mau tahu lebih banyak mengenai perumahan <em>Green Bamboo Terrace</em> dan ingin mendapatkan penjelasan mengenai promo ini,  kamu bisa menghubungi kami di 08111 403 280 yaa..</p>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div> 

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
    "@id": "https://www.bambootajur.com/berita-dan-promo/apa-kata-mereka-mengenai-tinggal-di-green-bamboo-terrace"
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