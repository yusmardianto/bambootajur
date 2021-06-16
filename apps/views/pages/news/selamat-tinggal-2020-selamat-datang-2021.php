<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>

<style>
    .indent-2em {
        text-indent: 2em;
    }
    .pl-2em {
        padding-left: 2em;
    }
</style>

<div style="color: #000;background-color:#fff;text-align:left;padding: 120px 5% 20px 5%;text-align: justify;">
<div style="margin: 20px 0;">
        <ul class="breadcrumbdesign">
            <li><?php echo '<a href="'.base_url().'">Beranda</a>' ?></li>
            <li><a href="<?= site_url(['berita-dan-promo'])?>">Berita</a></li>
            <li>
                <a href="<?php echo base_url ('berita-dan-promo/selamat-tinggal-2020-selamat-datang-2021'); ?>">
                Selamat Tinggal 2020, Selamat Datang 2021
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
                <h3 class="news-title">Selamat Tinggal 2020, Selamat Datang 2021</h3>
                <p class="news-date text-italic text-muted">Jumat, 18 Desember 2020</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="section-news">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <picture>
                            <source srcset="<?= base_url();?>assets/images/news/dec/selamat-tinggal.webp" type="image/webp"/>
                            <img class="mb-4 img-fluid" src="<?= base_url();?>assets/images/news/dec/selamat-tinggal.jpg" alt="Selamat Natal dan Tahun Baru">
                            </picture>
                        </div>
                    </div>
                    <div class="">
                        <p class="indent-2em">Tidak terasa kita sudah memasuki penghujung akhir tahun 2020 dan tinggal beberapa hari lagi menuju detik-detik pergantian tahun 2021. Lantas, hal-hal apa sajakah yang sudah kita lakukan di tahun 2020 ini? Adakah harapan-harapan kita yang belum tercapai di tahun ini?</p>
                        <p class="indent-2em">Dan, apa harapan kita di tahun yang baru nanti? Setiap berganti tahun berarti umur kita pun juga berkurang. Suka, duka, canda, dan tawa seakan menjadi tinta yang mewarnai langkah perjalanan kita. Selain itu, juga ada musibah yang terjadi di tahun 2020 di seluruh dunia yang juga banyak membawa kesedihan bagi sebagian besar kita dan juga membuat perubahan yang signifikan dalam kehidupan kita.</p>
                        <p class="indent-2em">Kesedihan ini membawa pelajaran berarti bagi kita, dan membuat kita tetap terjaga dan menghargai harapan-harapan baru dan baik di masa yang akan datang. Walaupun di tahun 2020 ini kita lalui dengan terseok-seok, tapi kita juga memiliki harapan yang pasti untuk kehidupan dan masa depan yang lebih baik. </p>
                        <p class="indent-2em">Kami segenap Manajemen dan Staf perumahan <i>Green Bamboo Terrace</i>, turut berdoa untuk kehidupan yang lebih baik di masa yang akan datang, seraya tak lupa juga mengucapkan <i>Selamat Hari Natal 2020</i> untuk yang merayakannya, serta Selamat <i>Tahun Baru 2021</i>, dan <i>Selamat Berlibur bagi Anda semua</i>.</p>
                        <p class="pl-2em"><i>Masa depan yang lebih baik sungguh ada ... <br>
                        Sampai bertemu dengan penuh kebahagiaan di Tahun 2021.</i></p>
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