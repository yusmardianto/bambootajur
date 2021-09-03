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
            <li><a href="<?php echo base_url ('berita-dan-promo/momijigari-festival'); ?>">Momijigari Festival 2020 Special Open House</a></li>
        </ul>
    </div>
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <?php include 'sidebar-news.php' ?>
        
        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
                <h1 class="news__page-title">Informasi dan Promo</h1>
                <h3 class="news-title">Momijigari Festival 2020 Special Open House</h3>
                <p class="news-date text-italic text-muted">Senin, 5 Oktober 2020</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="row section-news">
                    <div class="col-md-12 text-center">
                        <picture>
                            <source srcset="<?= base_url();?>assets/images/news/oct/momijigari-festival.webp" type="image/webp">
                            <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/oct/momijigari-festival.jpg" alt="Momijigari Festival 2020 Special Open House">
                        </picture>
                    </div>
                </div>
                <div class="mb-4">
                     <p class="indent-2em"><strong>MARK YOUR CALENDAR!</strong> <i>Special Open House Green Bamboo Terrace</i> “Momijigari Festival 2020”, Sabtu dan Minggu 17-18 Oktober 2020.</p>
                     <p class="indent-2em">Ayo datang ke Marketing Gallery kami di JL. Raya Tajur Komplex Unitex, Bogor, Jawa Barat.</p>
                     <p class="indent-2em">Kamu bisa bertanya apapun dan langsung dapat melihat rumah yang sudah jadi dan siap huni di <i>Green Bamboo Terrace</i>.  Serta dapat menikmati suasana <i>ala</i> Jepang dengan disiapkannya <i>photobooth</i> dengan pakaian tradisional Jepang yaitu <i>Yukata</i>, sehingga kamu bisa berfoto bersama keluarga dengan suasana yang berbeda. Juga sambil menikmati hidangan snack dan makanan Jepang juga.  </p>
                     <p class="indent-2em">Yuk datang dan ajak keluarga ke <i>Green Bamboo Terrace</i> dan dapatkan banyak keuntungannya!</p>
                     <p class="indent-2em">Selama pembelian rumah di acara special open house “Momijigari Festival” <i>Green Bamboo Terrace</i> akan mendapatkan: 
                        <ol class="ml-5 pl-4">
                            <li>Special Down Payment untuk cara bayar KPR; DP 0%*, DP5%, DP10% yang dapat dicicil 3x</li>
                            <li>Instalment ke Developer hingga 12 Bulan</li>
                            <li>Discount Khusus untuk cara bayar Hard Cash.</li>
                            <li>Free BPHTB untuk cara bayar KPR</li>
                            <li>1 AC Mitsubishi 1PK</li>
                            <li>Toclas Water Dispenser</li>
                            <li>Toclas Water Filter</li>
                            <li>2 Water Tank</li>
                            <li>Door & Roof Guarantee</li>
                            <li>Water Heater</li>
                            <li>Anti Virus Air Purifier</li>
                            <li>Carport Canopy</li>
                        </ol>                     
                     </p>
                     <p class="indent-2em">Nah banyak sekali kan keuntungannya di acara Special Open House “Momijigari Festival 2020”, Yuk datang dan ramaikan……</p>
                     <p class="indent-2em">INFO: Untuk info lebih lanjut dapat menghubungi Sales Consultant kami atau dapat menghubungi kami di 0811 1403 280</p>
                </div>
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
    "@id": "https://www.bambootajur.com/berita-dan-promo/semangat"
  },
  "headline": "Semangat",
  "description": "Kamu seharusnya tidak menyerah terhadap apapun yang terjadi padamu.",
  "image": "https://www.bambootajur.com/assets/images/news/semangat.png",  
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
