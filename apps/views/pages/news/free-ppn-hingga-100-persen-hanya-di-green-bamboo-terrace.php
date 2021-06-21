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
            <li><a href="<?php echo base_url ('berita-dan-promo/free-ppn-hingga-100-persen-hanya-di-green-bamboo-terrace'); ?>">
            Free PPN Hingga 100%, Hanya di perumahan <i>Green Bamboo Terrace</i></a></li>
        </ul>
    </div>
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <?php include 'sidebar-news.php' ?>
        
        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
                <h1 class="news__page-title">Informasi dan Promo</h1>
                <h3 class="news-title">Free PPN Hingga 100%, Hanya di perumahan <i>Green Bamboo Terrace</i></h3>
                <p class="news-date text-italic text-muted">Senin, 21 Juni 2021</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="section-news"> 
                    <div class="row justify-content-center">
                        <div class="col-md-10" style="text-align:center">
                            <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/2021/juni/news_001.jpg" alt="Free PPN Hingga 100%, Hanya di perumahan Green Bamboo Terrace"> 
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                        <p class="indent-2em">Meski dilanda pandemik yang masih terus berlangsung hingga kini, permintaan akan perumahan akhir-akhir ini mengalami peningkatan yang signifikan di kota Bogor, utamanya di <i>Green Bamboo Terrace</b> Bogor. Bertepatan dengan momen ini, Pemerintah resmi mengeluarkan kebijakan penghapusan Pajak Pertambahan Nilai (PPN) menjadi 0%. Penghapusan PPN berlaku hingga 31 Agustus 2021.</p>
                        <p class="indent-2em">Momen ini adalah kesempatan terbaik Anda untuk mewujudkan punya hunian yang sudah <i>ready stock</i>, legalitas aman, juga exclusive dan private  dengan INSENTIF PPN HINGGA 100%. Program ini berlaku untuk produk rumah ready stock. Selain FREE PPN 0%, Anda juga bisa mendapatkan special discount untuk unit pilihan, serta masih banyak free yang lain yang bisa Anda dapatkan. Di antaranya; Free BPHTB, Free 1 Unit AC merk Mitsubishi, Free Dispenser Toclas dengan pemurni air, dan 2 buat Water Tank, juga Carport Canopy.</p>
                        <p class="indent-2em">Simak syarat dan ketentuan untuk program PPN berikut:</p>
                        <ol class="ml-5 list-group-numbered">
                            <li>Program Pemerintah PPN 0% berlaku sejak 1 Maret 2021 hingga 31 Agustus 2021.</li>
                            <li>Konsumen hanya dapat membeli 1 produk selama program berlaku berdasarkan Nomor Induk Kependudukan (NIK) KTP.</li>
                            <li>Konsumen tidak diperbolehkan menjual properti tersebut dalam kurun waktu 1 (satu) tahun sejak Berita Acara Serah Terima.</li>
                            <li>Produk yang diambil harus lunas atau akad kredit dan serah terima paling lambat 31 Agustus 2021.</li>
                            <li>Berlaku untuk rumah tapak, rumah susun dan ruko komersial.</li>
                            <li>Tidak berlaku untuk kavling komersil dan kavling hunian.</li>
                            <li>Program ini berlaku berdasarkan daftar harga atau price list yang berlaku.</li>
                            <li>Ketentuan besarnya PPN yang mendapatkan subsidi:<br>Nominal = 2 Milyar mendapatkan insentif PPN 100% (10% dari harga).<br>Nominal > 2 Milyar s/d 5 Milyar mendapatkan insentif PPN 50% (5% dari harga).</li>
                        </ol>
                        <p class="indent-2em">Impian punya properti INSENTIF PPN HINGGA 100% pasti bisa terwujud di <i>Green Bamboo Terrace</i>. Ingin mengetahui lebih detail produk rumah dengan Program INSENTIF PPN HINGGA 100% plus hadiah banyak lainnya? Hubungi Sales Marketing <i>Green Bamboo Terrace</i> di 0811 1403 280.</p>
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