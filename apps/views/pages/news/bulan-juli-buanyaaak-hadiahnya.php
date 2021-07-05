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
            <li><a href="<?php echo base_url ('berita-dan-promo/bulan-juli-buanyaaak-hadiahnya'); ?>">
            Bulan Juli, Buanyaaak Hadiahnya… !</i></a></li>
        </ul>
    </div>
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <?php include 'sidebar-news.php' ?>
        
        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
                <h1 class="news__page-title">Informasi dan Promo</h1>
                <h3 class="news-title">Bulan Juli, Buanyaaak Hadiahnya… !</i></h3>
                <p class="news-date text-italic text-muted">Senin, 5 Juli 2021</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="section-news"> 
                    <div class="row justify-content-center">
                        <div class="col-md-10" style="text-align:center">
                            <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/2021/juli/promo-juli.jpg" alt="Bulan Juli, Buanyaaak Hadiahnya… !"> 
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                        <p class="indent-2em"><em>Green Bamboo Terrace</em> memberikan promo luar biasa di bulan Juli 2021 ini. Promo ini memberikan penawaran yang tak bisa ditolak oleh kamu yang sedang mencari rumah untuk tempat tinggal, maupun untuk berinvestasi property. </p>
                        <p class="indent-2em"><em>Green Bamboo Terrace</em> sendiri adalah sebuah hunian yang telah siap huni yang berlokasi di Kawasan Tajur, Kota Bogor. Dengan mengusung konsep perumahan yang Exclusive dan Private, <em>Green Bamboo Terrace</em> ini dibangun dan dikembangkan oleh sebuah developer Jepang yaitu <em>PT. Kebun Bambu Jakarta</em> yang sudah masuk dan mulai menancapkan kukunya di sektor properti sejak tahun 2015 di Indonesia. </p>
                        <p class="indent-2em">Perumahan <em>Green Bamboo Terrace</em> sendiri terlebih dahulu dibangun, baru kemudian dipasarkan. Tentu sangat berbeda dengan kebanyakan developer lokal lainnya yang kita tahu, di mana biasanya unit akan dibangun setelah ada pesanan dan uang customer sudah masuk. Juga kualitas dan penggunaan material yang berstandar hunian di Jepang, membuat perumahan <em>Green Bamboo Terrace</em> sangat jauh berbeda dengan perumahan lain yang saat ini sedang ditawarkan dan dipasarkan. </p>
                        <p class="indent-2em">Khusus untuk bulan Juli 2021 ini, <em>Green Bamboo Terrace</em> memberikan penawaran yang sangat berbeda….. Khusus di bulan Juli ini penawaran special yang kami berikan buat kamu adalah :</p>
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
                        <p>Luar biasa banyak kan <i>free</i> nya?</p>
                        <p>Jadi tidak perlu menunggu akhir tahun untuk mendapatkan promo terbaik dari sebuah property kan?</p>
                        <p class="indent-2em">Jadi apa lagi yang kamu tunggu? Sekarang lah saatnya waktu terbaik untuk membeli rumah, utamanya di Green Bamboo Terrace.</p>
                        <p class="indent-2em">Kalau kamu mau tahu lebih banyak mengenai perumahan Green Bamboo Terrace dan ingin mendapatkan penjelasan mengenai promo ini,  kamu bisa menghubungi kami di 08111 403 280 yaa..</p>
                        <p class="indent-2em">Dengan senang hati kami akan memberikan informasi selengkap-lengkapnya untuk kamu.</p>
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