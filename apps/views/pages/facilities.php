<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    $pages = "Facilities";
    $title = "The Facilities - Green Bamboo Terrace";
    $keywords = "smart home system, eco living, konsep hijau, rumah pintar, bamboo tajur, bambootajur, bambutajur, real estate, ramah lingkungan, investasi properti, investasi rumah, green bamboo terrace, properti bogor, properti tajur, beli rumah di bogor, beli rumah mewah terjangkau, properti dekat rumah sakit, perumahan dekat tol, klaster dekat taman bermain, hunian dekat pt unitex, perumahan dekat tol bogor, perumahan dekat tol ciawi, kolam renang, musholla, tempat bermain, desain jepang, security 24 jam, pengamanan ketat, penjaga keamanan 24 jam, security cctv, kamera pengawas, desain kayu modern";
    $description = "Perumahan Green Bamboo Terrace, konsep hunian mewah dengan harga terjangkau, dilengkapi fasilitas taman bermain, mushollah, kolam renang, club house, keamanan 24/7, dan dekat ke dua gerbang tol: Bogor dan Ciawi.";

    include('layouts/main.php');
?>        
<nav id="navbar" class="">
    <div class="nav-wrapper">
        <!-- Navbar Logo -->
        <div class="logo">
            <!-- Logo Placeholder for Inlustration -->
            <a href="<?= base_url();?>pages/index">
                <img src="<?= base_url();?>assets/images/logo.png" class="img-responsive p-10"/>
            </a>
        </div>
      
        <!-- Navbar Links -->
        <ul id="menu">
            <li><a href="<?= base_url();?>">Home</a></li>
            <li><a href="<?= site_url(['the-concept'])?>">The Concept</a></li>
            <li><a href="<?= site_url(['the-homes'])?>">The Homes</a></li>
            <li><a href="<?= site_url(['the-facilities'])?>" class="active">The Facilities</a></li>
            <li><a href="<?= site_url(['news'])?>">News</a></li>
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
            <img src="<?= base_url();?>assets/images/logo.png" class="img-responsive p-10"/>
        </a>
    </div>
    <ul id="menu" class="menu-mobile">
        <li><a href="<?= base_url();?>">Home</a></li>
        <li><a href="<?= site_url(['the-concept'])?>">The Concept</a></li>
        <li><a href="<?= site_url(['the-homes'])?>">The Homes</a></li>
        <li><a href="<?= site_url(['the-facilities'])?>" class="active">The Facilities</a></li>
        <li><a href="<?= site_url(['news'])?>">News</a></li>
        <li><a href="<?= site_url(['disclaimer'])?>">Disclaimer</a></li>
        <li><a href="<?= site_url(['contact'])?>">Contact</a></li>
    </ul>
</div>

<!-- /*======================================================
                    HEADER SLIDE 1
======================================================*/ -->

<div style="color: #000;background-color:#fff;text-align:center;text-align: justify;">
    <!-- CAROUSEL -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url();?>assets/images/background/bambootajur-facility-club-house-20190226.jpg" data-color="lightblue" alt="First Image">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url();?>assets/images/background/bambootajur-facility-club-house-2-20190226.jpg" data-color="firebrick" alt="Second Image">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url();?>assets/images/background/bambootajur-facility-club-house-3-20190226.jpg" data-color="firebrick" alt="Second Image">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url();?>assets/images/background/park.jpg" data-color="violet" alt="Third Image">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url();?>assets/images/background/bambootajur-facility-mushola-20190226.jpg" data-color="violet" alt="Third Image">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?= base_url();?>assets/images/background/bambootajur-facility-mushola-2-20190226.jpg" data-color="violet" alt="Third Image">
          </div>
        </div>
        <!-- Controls -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
      </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>
      </div>
</div>
    
<!-- MINI DESCRIPTION -->

        <div class="minidesc pr-5 pl-5">
            <h2 class="text-center pt-5">THE FACILITIES</h2>
            <div class="row">
                <div class="col-md-3 p-5">
                    <div class="text-center">
                    <img src="<?= base_url();?>assets/images/icon/park.png"/>
                    </div>
                    <h3 class="text-center pt-3">Taman & Area<br/> Bermain Anak</h3>
                    <p class="text-justify pt-3">Di dalam Perumahan tersedia juga taman dan area bermain anak, sehingga membuat hunian menjadi lebih asri dan anak-anak dapat menikmati fasilitas bermain anak di Green Bamboo Terrace Bogor.</p>
                </div>
                <div class="col-md-3 p-5">
                <div class="text-center">
                    <img src="<?= base_url();?>assets/images/icon/chair.png"/>
                    </div>
                    <h3 class="text-center pt-3">Club House</h3>
                    <p class="text-justify pt-5">Dengan adanya ClubHouse yang berada di dalam perumahan Green Bamboo Terrace Bogor membuat Anda dan keluarga dapat menikmati hidup yang lebih nyaman. Fasilitas yang tersedia di ClubHouse adalah Kolam renang anak, ruang membaca, dan ruang serbaguna yang dapat dimanfaatkan sebagai ruang pertemuan warga atau ruang untuk menerima tamu.</p>
                </div>
                <div class="col-md-3 p-5">
                <div class="text-center">
                    <img src="<?= base_url();?>assets/images/icon/mosque.png"/>
                    </div>
                    <h3 class="text-center pt-3">Mushola</h3>
                    <p class="text-justify pt-5">Tak lupa kami menyediakan Mushola untuk memudahkan penghuni kami dalam beribadah.</p>
                </div>
                <div class="col-md-3 p-5">
                <div class="text-center">
                    <img src="<?= base_url();?>assets/images/icon/home.png"/>
                    </div>
                    <h3 class="text-center pt-3">Security & CCTV</h3>
                    <p class="text-justify pt-5">Keamanan menjadi perhatian kami, sehingga dapat menjamin rasa nyaman dan aman bagi setiap penghuni di Green Bamboo Terrace Bogor.</p>
                </div>
            </div>
        </div>



<!-- MINI DESCRIPTION END -->


<!-- INFO SPEK 2 -->

<div style="color: #000;background-color:#fff;text-align:center;padding: 50px 5% 0px 5%;text-align: justify;">
    <div class="">
            <div class="txt-center mb-50">
                    <img src="<?= base_url();?>assets/images/concept/concept.png" class="w-80p" />
                </div>
                <div class="txt-center mb-30">
                    <img src="<?= base_url();?>assets/images/detail/toclas.png" class="w-100" />
                </div>
                <!-- <div class="txt-center">
                    <img src="../assets/images/detail/toclas1.png" class="w-100" />
                </div> -->
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
                <a href="https://www.facebook.com/GreenBambooTerrace" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="https://twitter.com/BambooTajur" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/bambootajur.official/" target="_blank"><i class="fab fa-instagram"></i></a>
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
<a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.." class="floating-whatsapp" target="_blank">
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
        if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(100);    // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(0);   // Else fade out the arrow
        }
    });
    $('#return-to-top').click(function() {      // When arrow is clicked
        $('body,html').animate({
            scrollTop : 0                       // Scroll to top of body
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
            }
        else {
            $('body').addClass('lock-scroll');
        }
    }
</script>