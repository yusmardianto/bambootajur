<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>

<div style="color: #000;background-color:#fff;text-align:left;padding: 120px 5% 20px 5%;text-align: justify;">
<div style="margin: 20px 0;">
        <ul class="breadcrumbdesign">
            <li><?php echo '<a href="'.base_url().'">Beranda</a>' ?></li>
            <li><a href="<?= site_url(['news'])?>">Berita</a></li>
            <li>
                <a href="<?php echo base_url ('news/february-ai-promo'); ?>">
                February AI Promo
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
                <h3 class="news-title">February AI Promo</h3>
                <p class="news-date text-italic text-muted">Rabu, 12 Februari 2020</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="row section-news">
                    <div class="col-12 col-md-12">
                        <p class="mb-4 febpromo-p">
                        <img class="febpromo-img" src="<?= base_url();?>assets/images/news/feb/feb5.png" alt="">
                        Bulan Februari banyak diingat sebagai bulan penuh cinta, karena juga bertepatan dengan Valentine Day di setiap tanggal 14 Februari. Moment tersebut ditangkap oleh <i>Green Bamboo Terrace</i> untuk turut berbagi cinta dan kebahagiaan, dengan memberi kemudahan cara bayar dan promo-promo terbaik untuk calon customer <i>Green Bamboo Terrace</i>. 
                       <br><br>
                        <i>Ai</i> berarti Cinta dari Bahasa Jepang diambil sebagai nama promo di bulan februari ini, dengan nama <i>Februari Ai Promo</i>, yang berarti Bulan februari yang penuh cinta.
                        <br><br>
                        <i>Green Bamboo Terrace</i> February AI Promo adalah februari berbagi cinta dengan memberikan  Promo kemudahan cara bayar melalui cara bayar KPR dengan Down Payment cukup 5%, dan dapat dicicil 3x bayar. Tak cukup sampai disitu, untuk promo <i>Februari Ai</i> ini <i>Green Bamboo Terrace</i> juga memberikan Free BPHTB untuk cara bayar KPR.<br><br>
                        Dan Khusus di bulan ini, apabila transaksi pembelian unit <i>Green Bamboo Terrace</i> selain Free BPHTB untuk cara bayar KPR, akan medapatkan free 1 Unit AC Mitsubishi, Dispenser dan water filter Toclas, 2 buah unit Toren air, dan 1 buah LED TV43’ untuk semua cara bayar.
                        <br><br>
                        Down Payment 5% yang dapat dicicil 3x ini benar-benar sangat memudahkan calon pembeli unit di <i>Green bamboo Terrace</i>. Karena untuk memiliki unit type Momiji dengan LT 72 ; LB 73 dengan 2 Kamar, cukup Down Payment 50 Jutaan saja, atau dapat dicicil 3x sebesar 16 jutaan saja, dan langsung bisa akad dengan Bank untuk fasilitas KPR. Sedang untuk unit rumah sendiri di <i>Green Bamboo Terrace</i> sudah siap untuk langsung dihuni.
                        <br><br>
                        Jadi, jangan sampai ketinggalan untuk Februari Ai Promo ini, segera hubungi kami, atau anda bisa langsung datang ke Site Project kami di <i>weekdays</i> atau saat Open House di setiap <i>weekend</i>, Sales Consultant kami siap memberikan pelayanan terbaik dan mengajak anda untuk <i>Home Tour</i>, serta memberikan promo terbaik yang anda hanya bisa dapatkan di Bulan Februari ini.
                        <br><br>
                        <i>Green Bamboo Terrace</i>…. Pokoknya Love melulu……
                        </p>
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