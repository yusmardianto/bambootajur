<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>
<nav id="navbar" class="">
    <div class="nav-wrapper">
        <!-- Navbar Logo -->
        <div class="logo">
            <!-- Logo Placeholder for Inlustration -->
            <a href="<?= base_url();?>pages/index">
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
            <li><a href="<?= site_url(['the-facilities'])?>" class="active">The Facilities</a></li>
            <li><a href="<?= site_url(['news/penandatanganan-kerjasama-dengan-bank-mandiri-dan-bank-bni-syariah'])?>">News</a></li>
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
        <li><a href="<?= base_url();?>">Home</a></li>
        <li><a href="<?= site_url(['the-concept'])?>">The Concept</a></li>
        <li><a href="<?= site_url(['the-homes'])?>" class="dropdown-toggle" data-toggle="dropdown">The
                Homes&nbsp;<span><i class="fas fa-caret-down"></i></span></a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?= site_url(['the-homes'])?>#akane-tab">Tipe Akane</a>
                <a class="dropdown-item" href="<?= site_url(['the-homes'])?>#momiji-tab">Tipe Momiji</a>

            </div>
        </li>
        <li><a href="<?= site_url(['the-facilities'])?>" class="active">The Facilities</a></li>
        <li><a href="<?= site_url(['news/penandatanganan-kerjasama-dengan-bank-mandiri-dan-bank-bni-syariah'])?>">News</a></li>
        <li><a href="<?= site_url(['disclaimer'])?>">Disclaimer</a></li>
        <li><a href="<?= site_url(['contact'])?>">Contact</a></li>
    </ul>
</div>

<!-- /*======================================================
                    HEADER SLIDE 1
======================================================*/ -->

<div class="bgimg-4">
    <div class="white-card-float">
        <div class="title-section-line">
            <div class="mr-md-4">
                <div class="jumbotron__category">
                    <h6 class="head-title">THE FACILITIES</h6>
                </div>
            </div>
            <div>
                <hr>
            </div>
        </div>
        <div class="jumbotron__category9">
            <h3 class="head-title">Fasilitas publik dan penghuni</h3>
        </div>
        <p class="text-justify m-0">
            Semua penghuni Green Bamboo Terrace Bogor dapat menggunakan fasilitas terbaik yang sudah kami sediakan,
            tidak hanya fasilitas publik tapi kami juga memperhatikan penuh setiap fasilitas pribadi setiap penghuni.
        </p>
    </div>
</div>

<!-- MINI DESCRIPTION -->

<div class="minidesc pr-5 pl-5">
    <div class="row">
        <div class="col-md-3">
            <h3 class="minidesc-headline pt-5">FASILITAS PUBLIK</h3>
        </div>
        <div class="col-md-9 orange-line">
            <hr />
        </div>
    </div>

    <div class="row">

        <div class="col-md-6 col-sm-12 p-3">
            <div class="d-flex flex-md-row flex-xs-column">
                <div class="text-center p-2">
                    <img src="<?= base_url();?>assets/images/icon/park.png" />
                </div>
                <div>
                    <h3 class="font-weight-bold pt-3">Taman & Area Bermain Anak</h3>
                    <p class="text-justify pt-2">Di dalam Perumahan tersedia juga taman dan area bermain anak, sehingga
                        membuat
                        hunian
                        menjadi lebih asri dan anak-anak dapat menikmati fasilitas bermain anak di Green Bamboo Terrace
                        Bogor.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-12 p-3">
            <div class="d-flex flex-md-row flex-xs-column">
                <div class="text-center p-2">
                    <img src="<?= base_url();?>assets/images/icon/mosque.png" />
                </div>
                <div>
                    <h3 class="font-weight-bold pt-3">Mushola</h3>
                    <p class="text-justify pt-2">Tak lupa kami menyediakan Mushola untuk memudahkan penghuni kami dalam
                        beribadah.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-12 p-3">
            <div class="d-flex flex-md-row flex-xs-column">
                <div class="text-center p-2">
                    <img src="<?= base_url();?>assets/images/icon/chair.png" />
                </div>
                <div>
                    <h3 class="font-weight-bold pt-3">Club House</h3>
                    <p class="text-justify pt-2">Dengan adanya ClubHouse yang berada di dalam perumahan Green Bamboo
                        Terrace Bogor
                        membuat Anda dan keluarga dapat menikmati hidup yang lebih nyaman. Fasilitas yang tersedia di
                        ClubHouse
                        adalah
                        Kolam renang anak, ruang membaca, dan ruang serbaguna yang dapat dimanfaatkan sebagai ruang
                        pertemuan warga
                        atau
                        ruang untuk menerima tamu.</p>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-12 p-3">
            <div class="d-flex flex-md-row flex-xs-column">
                <div class="text-center p-2">
                    <img src="<?= base_url();?>assets/images/icon/home.png" />
                </div>
                <div>
                    <h3 class="font-weight-bold pt-3">Security & CCTV</h3>
                    <p class="text-justify pt-2">Keamanan menjadi perhatian kami, sehingga dapat menjamin rasa nyaman
                        dan aman
                        bagi
                        setiap penghuni di Green Bamboo Terrace Bogor.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MINI DESCRIPTION END -->


<!-- INFO MASTER PLAN -->

<div style="color: #000;background-color:#fff;text-align:center;padding:0 5% 70px 5%;text-align: justify;">
    <div>
        <img src="<?= base_url();?>assets/images/detail/bambootajur-master-plan.png" class="w-100"
            alt="bambootajur master plan">
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


<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- <script src="assets/js/slide.js"></script> -->
<script src="<?= base_url();?>assets/js/navbar.js"></script>
<script src="<?= base_url();?>assets/js/fullcarousel.js"></script>
<!-- <script src="assets/js/floating.js"></script> -->

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


<script>
$('.dropdown-item').on('click', function() {
    $('.carousel-item').removeClass('active');
    var itemSlider = $(this).data('slider');
    $(itemSlider).addClass('active');
    console.log(itemSlider);
})
</script>
