<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>

<div style="color: #000;background-color:#fff;text-align:left;padding: 120px 5% 20px 5%;text-align: justify;">
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <?php include 'sidebar-news.php' ?>

        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
                <h1 class="news__page-title">Informasi dan Promo</h1>
                <h3 class="news-title">Penandatanganan Kerjasama dengan Bank Mandiri dan Bank BNI Syariah</h3>
                <p class="news-date text-italic text-muted">1 Oktober 2019</p>

                <div class="text-center">
                    <div class="d-inline-block">
                        <img src="<?= base_url();?>assets/images/news/news-mandiri.jpg" class="news-image px-2" alt="KPR Bank Mandiri di Bogor">
                        <small class="d-block">Dengan Bank Mandiri.</small>
                    </div>
                    <div class="d-inline-block">
                        <img src="<?= base_url();?>assets/images/news/news-bni.jpg" class="news-image px-2" alt="KPR Bank BNI di Tajur Bogor">
                        <small class="d-block">Dengan Bank BNI Syariah.</small>
                    </div>
                </div>

            </div>
            <div class="pt-3 news-content">
                <p>Pada pertengahan Juni 2019 lalu Green Bamboo Terrace telah melakukan Penandatanganan Kerjasama dengan
                    Bank Mandiri, serta diawal bulan September 2019 dengan Bank BNI Syariah untuk Kredit Pemilikan Rumah
                    (KPR). </p>
                <p>Direktur PT Kebun Bambu Jakarta T. Ivan Mukmin menambahkan, “dengan penandatanganan kerjasama ini,
                    kami berharap program KPR yang ditawarkan lebih menarik dan menguntungkan bagi konsumen Green Bamboo
                    Terrace, sehingga masyarakat semakin dimudahkan untuk mendapatkan unit rumah di Green Bamboo Terrace
                    yang merupakan hunian modern eksklusif dengan standar baru sebuah hunian untuk meningkatkan
                    kenyamanan dan kualitas hidup konsumen kami.”</p>
                <p>Saat ini, baik Bank Mandiri dan Bank BNI Syariah menggulirkan promo DP dengan 10% saja, sudah bisa
                    melakukan akad kredit jual-beli rumah. Sehingga sangat memudahkan konsumen yang tertarik membeli
                    unit rumah di Green Bamboo Terrace.</p>
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
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