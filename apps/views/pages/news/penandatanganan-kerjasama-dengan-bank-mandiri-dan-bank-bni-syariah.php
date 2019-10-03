<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>
<nav id="navbar" class="">
    <div class="nav-wrapper">
        <!-- Navbar Logo -->
        <div class="logo">
            <!-- Logo Placeholder for Inlustration -->
            <a href="<?= base_url();?>">
                <img src="<?= base_url();?>assets/images/logo.png" class="img-responsive p-10" />
            </a>
        </div>

        <!-- Navbar Links -->
        <ul id="menu">
            <li><a href="<?= base_url();?>">Home</a></li>
            <li><a href="<?= site_url(['the-concept'])?>">The Concept</a></li>
            <li><a href="<?= site_url(['the-homes'])?>" class="dropdown-toggle" data-toggle="dropdown">The
                    Homes&nbsp;<span><i class="fas fa-caret-down"></i></span></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= site_url(['the-homes'])?>#akane-tab">Tipe
                        Akane</a>
                    <a class="dropdown-item" href="<?= site_url(['the-homes'])?>#momiji-tab">Tipe
                        Momiji</a>

                </div>
            </li>
            <li><a href="<?= site_url(['the-facilities'])?>">The Facilities</a></li>
            <li><a href="<?= site_url(['news/penandatanganan-kerjasama-dengan-bank-mandiri-dan-bank-bni-syariah'])?>"
                    class="active">News</a></li>
            <li><a href="<?= site_url(['disclaimer'])?>">Disclaimer</a></li>
            <li><a href="<?= site_url(['contact'])?>">Contact</a></li>
        </ul>
    </div>
</nav>

<!-- Menu Icon -->
<div class="menuIcon">
    <span class="icon-menu icon-bars"></span>
    <span class="icon-menu icon-bars overlay"></span>
</div>

<div class="overlay-menu">
    <div class="logo2">
        <!-- Logo Placeholder for Inlustration -->
        <a href="<?= base_url();?>pages/index">
            <img src="<?= base_url();?>assets/images/logo.png" class="img-responsive p-10" />
        </a>
    </div>
    <ul id="menu" class="menu-mobile">
        <li><a href="<?= site_url(['the-concept'])?>">The Concept</a></li>
        <li><a href="<?= site_url(['the-homes'])?>" class="dropdown-toggle" data-toggle="dropdown">The
                Homes&nbsp;<span><i class="fas fa-caret-down"></i></span></a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?= site_url(['the-homes'])?>#akane-tab">Tipe Akane</a>
                <a class="dropdown-item" href="<?= site_url(['the-homes'])?>#momiji-tab">Tipe Momiji</a>
            </div>
        </li>
        <li><a href="<?= site_url(['the-facilities'])?>">The Facilities</a></li>
        <li><a href="<?= site_url(['news/moda-transportasi-dan-akses-semakin-lengkap-properti-di-bogor-semakin-menjanjikan'])?>"
                class="active">News</a></li>
        <li><a href="<?= site_url(['disclaimer'])?>">Disclaimer</a></li>
        <li><a href="<?= site_url(['contact'])?>">Contact</a></li>
    </ul>
</div>


<div style="color: #000;background-color:#fff;text-align:left;padding: 120px 5% 20px 5%;text-align: justify;">
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <div class="col-md-3" id="newsSidebar">

            <div class="news-sidebar" id="recent">
                <div class="d-flex flex-row">
                    <p class="py-2 m-0 h5 font-weight-bold">Recent</p>
                    <button type="button" class="close p-2" aria-label="Close" onClick="showNews('recent')">
                        <i class="fas fa-chevron-up"></i>
                    </button>
                </div>
                <ul class="list-unstyled pl-3">
                    <a
                        href="<?php echo base_url ('pages/news/moda-transportasi-dan-akses-semakin-lengkap-properti-di-bogor-semakin-menjanjikan.php'); ?>">
                        <li class="py-1">Moda Transportasi dan Akses Semakin Lengkap, Properti di Bogor
                            Semakin
                            Menjanjikan.
                        </li>
                    </a>
                    <a
                        href="<?php echo base_url ('pages/news/penandatanganan-kerjasama-dengan-bank-mandiri-dan-bank-bni-syariah.php'); ?>">
                        <li class="py-1 news-item-active">Penandatanganan Kerjasama dengan Bank Mandiri dan Bank BNI
                            Syariah</li>
                    </a>
                    <a href="#">
                        <li class="py-1">Ribuan Rumah di Bogor Selatan Terdampak Doubel Track Kereta
                            Bogor-Yogyakarta</li>
                    </a>
                </ul>
            </div>

            <div class="news-sidebar inactive" id="aug_19">
                <div class="d-flex flex-row">
                    <p class="text-muted py-2 m-0 h5 font-weight-bold">August 2019</p>
                    <button type="button" class="close p-2" aria-label="Close" onClick="showNews('aug_19')">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <ul class="list-unstyled pl-3">
                    <a href="#">
                        <li class="py-1 news-item-active">Akses Kian Bagus, Properti Bogor Makin Menjanjikan
                        </li>
                    </a>
                    <a href="#">
                        <li class="py-1">Tren Perumahan: Hunian Kompak, Rumah Tapak Rasa Apartemen</li>
                    </a>
                    <a href="#">
                        <li class="py-1">Ribuan Rumah di Bogor Selatan Terdampak Doubel Track Kereta
                            Bogor-Yogyakarta</li>
                    </a>
                </ul>
            </div>

            <div class="news-sidebar inactive" id="jul_19">
                <div class="d-flex flex-row">
                    <p class="text-muted py-2 m-0 h5 font-weight-bold">July 2019</p>
                    <button type="button" class="close p-2" aria-label="Close" onClick="showNews('jul_19')">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
            </div>

            <div class="news-sidebar inactive" id="jun_19">
                <div class="d-flex flex-row">
                    <p class="text-muted py-2 m-0 h5 font-weight-bold">June 2019</p>
                    <button type="button" class="close p-2" aria-label="Close" onClick="showNews('jun_19')">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
            </div>

        </div> <!-- END NEWS SIDE BAR -->

        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
                <h3 class="news-title">Penandatanganan Kerjasama dengan Bank Mandiri dan Bank BNI Syariah</h3>
                <p class="news-date text-italic text-muted">Senin, 23 september 2019</p>

                <div class="news-image text-center">
                    <div class="d-inline-block text-center">
                        <img src="<?= base_url();?>assets/images/news/news-mandiri.jpg" class="px-2" alt="">
                        <small class="d-block">Dengan Bank Mandiri.</small>
                    </div>
                    <div class="d-inline-block text-center">
                        <img src="<?= base_url();?>assets/images/news/news-bni.jpg" class="px-2" alt="">
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
            <p class="font-italic pt-3">
                <a class="news-src"
                    href="https://www.rumah.com/berita-properti/2018/6/172507/akses-kian-bagus-properti-bogor-makin-menjanjikan">
                    https://www.rumah.com/berita-properti/2018/6/172507/akses-kian-bagus-properti-bogor-makin-menjanjikan
                </a>
            </p>
        </div>
    </div>
</div>

<!-- FOOTER -->

<div style="color: #000;background-color:#fff;text-align:center;text-align: justify;">
    <div class="row bg-footer no-margin">

        <div class="col-md-3 f-first">
            <div class="detail-footer">
                <p class="header-footer">Marketing Gallery</p>
                Jalan Raya Tajur No.30, Tajur - Kota Bogor 16141<br>
                Jawa Barat, Indonesia<br>
                Phone <a href="tel:08111403280">0811 1403 280</a><br>
                Phone <a href="tel:02518574255">0251-8574 255</a><br>
                Email <a href="mailto:bambootajur@gmail.com">bambootajur@gmail.com</a><br>
            </div>
        </div>

        <div class="col-md-3">
            <div class="detail-footer">
                <p class="header-footer">Show Unit</p>
                Jalan Unitex, Tajur - Kota Bogor 16141<br>
                Jawa Barat, Indonesia<br>
                Phone <a href="tel:08111403280">0811 1403 280</a><br>
                Email <a href="mailto:bambootajur@gmail.com">bambootajur@gmail.com</a><br>
            </div>
        </div>

        <div class="col-md-3 ml-auto f-first">
            <div class="img-footer f-first">
                <p class="m-nol header-footer no-margin">Development by</p>
                <img src="<?= base_url();?>assets/images/vendor/kbj.png" class="img-kbj" />
            </div>
            <a href="/privacy-policy" class="footer-link-item">Privacy Policy</a>
        </div>
        <!-- <div class="col-md-3 f-first">
            <div class="img-footer">
                <p class="header-footer">Marketing by</p>
                <img src="</?= base_url();?>assets/images/vendor/shinmichi.png" class="img-shinmichi" />
            </div>
        </div> -->

        <!-- icon -->

        <div class="col-sm-12 txt-center f-fav">
            <a href="https://www.facebook.com/GreenBambooTerrace" target="_blank"><i
                    class="fab fa-facebook-square"></i></a>
            <a href="https://twitter.com/BambooTajur" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/bambootajur.official/" target="_blank"><i
                    class="fab fa-instagram"></i></a>
        </div>

    </div>
</div>

<!-- copyright -->
<div style="color: #fff;background-color:#088770;text-align:center;text-align: justify;">
    <div class="col-sm-12 txt-center f-cop">
        &copy; Copyright <?php echo date(Y) ?>. All Rights Reserved
    </div>
</div>

<!-- return to top -->
<!-- <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a> -->
<a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.."
    class="floating-whatsapp" target="_blank">
    <div class="f-whatsapp"> </div>
    <p class="floating-teks">0811 1403 280</p>
</a>

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