<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    $pages = "The Homes";
    $title = "The Homes - Green Bamboo Terrace";
    $keywords = "smart home system, eco living, konsep hijau, rumah pintar, bamboo tajur, bambootajur, bambutajur, real estate, ramah lingkungan, investasi properti, investasi rumah, green bamboo terrace, properti bogor, properti tajur, beli rumah di bogor, beli rumah mewah terjangkau, properti dekat rumah sakit, perumahan dekat tol, klaster dekat taman bermain, hunian dekat pt unitex, perumahan dekat tol bogor, perumahan dekat tol ciawi, rumah sejuk, rumah strategis, perumahan strategis, perumahan menengah keatas, perumahan 1 miliar, rumah dengan harga dibawah 2 miliar, perumahan desain minimalis, perumahan paling aman";
    $description = "Hunian eco-living terbaik di area Bogor dengan harga terjangkau. Tanpa perantara, fasilitas lengkap, desain terkini dari jepang, dengan konsep rumah pintar. Dekat ke banyak fasilitas, kurang dari setengah jam dari stasiun bogor, sangat dekat dengan tol bogor dan ciawi";

    include('layouts/main.php');
?>        
<nav id="navbar" class="">
    <div class="nav-wrapper">
        <!-- Navbar Logo -->
        <div class="logo">
            <!-- Logo Placeholder for Inlustration -->
            <a href="<?= base_url();?>">
                <img src="<?= base_url();?>assets/images/logo.png" class="img-responsive p-10"/>
            </a>
        </div>
      
        <!-- Navbar Links -->
        <ul id="menu">
            <li><a href="<?= base_url();?>">Home</a></li>
            <li><a href="<?= site_url(['the-concept'])?>">The Concept</a></li>
            <li><a href="<?= site_url(['the-homes'])?>" class="active">The Homes</a></li>
            <li><a href="<?= site_url(['the-facilities'])?>">The Facilities</a></li>
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
        <li><a href="<?= site_url(['the-homes'])?>" class="active">The Homes</a></li>
        <li><a href="<?= site_url(['the-facilities'])?>">The Facilities</a></li>
        <li><a href="<?= site_url(['news'])?>">News</a></li>
        <li><a href="<?= site_url(['disclaimer'])?>">Disclaimer</a></li>
        <li><a href="<?= site_url(['contact'])?>">Contact</a></li>
    </ul>
</div>

<div class="bgimg-2">
    
    <div class="card-content">
        <div class="jumbotron__category">
            <h6 class="head-title">THE HOMES</h6>
        </div>
        <div class="jumbotron__title">
            <h1>Rumah Tinggal dengan Konsep Hijau dan Nyaman</h1>
        </div>
        <div class="jumbotron__content">
            <p>
                Green Bamboo terrace adalah sebuah cluster hunian seluas 1.7 ha yang hijau dan nyaman berlokasi di wilayah Kota Tajur-Bogor.
                <br><br>
                Rumah Tinggal Keluarga yang Harmonis akan menciptakan fondasi dan filosofi yang utuh seperti halnya tanaman bambu yang menjadi konsep utama dari perumahan Green Bamboo Terace.
            </p>
            <!-- <a class="btn  btn-primary" href="about-us" target="_self">MORE ABOUT US</a> -->
        </div>
    </div>

</div>
<div style="color: #000;background-color:#fff;text-align:center;padding: 50px 5% 10px 5%;text-align: justify;">
    
        <!-- CAROUSEL -->

        <div id="demo" class="carousel slide w-100 col-sm-12" data-ride="carousel">
            <ul class="carousel-indicators carousel-indicators-custom">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url();?>assets/images/detail/bambootajur-tipe-akane(new).png" alt="Type Akane" width="1100" height="400">
                    <div class="carousel-caption">
                      <!-- <h3>Type A</h3>
                      <p>We had such a great time in LA!</p> -->
                    </div>   
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url();?>assets/images/detail/bambootajur-tipe-fuji(new).png" alt="Type Fuji" width="1100" height="400">
                    <div class="carousel-caption">
                        <!-- <h3>Type B</h3>
                        <p>Thank you, Chicago!</p> -->
                    </div>   
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url();?>assets/images/detail/bambootajur-tipe-momiji(new).png" alt="Type Momiji" width="1100" height="400">
                    <div class="carousel-caption">
                        <!-- <h3>Type C</h3>
                        <p>We love the Big Apple!</p> -->
                    </div>   
                </div>
            </div>

            <a class="carousel-control-prev prev-custom" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next next-custom" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <!-- INFO SPEK -->
<!-- <<<<<<< HEAD
 -->
        <div class="container">
            <div class="row justify-content-center">
                    <div class="col-sm-6">
                    <table class="table table-bordered" style="margin: 30px 0;">
                        <tr>
                            <th width="30%">Spesifikasi</th>
                            <th>Keterangan</th>
                        </tr>
                        <tr>
                            <td>Pondasi</td>
                            <td>Strauss pile & beton bertulang,?? pondasi batu kali</td>
                        </tr>
                        <tr>
                            <td>Dinding</td>
                            <td>Pasangan bata merah dan mortar</td>
                        </tr>
                        <tr>
                            <td>Facade</td>
                            <td>Batu hias paras jogja, ornament dan grillwood</td>
                        </tr>
                        <tr>
                            <td>Finishing cat</td>
                            <td>Kansai weathershield (exterior) & Kansai paint (interior)</td>
                        </tr>
                        <tr>
                            <td>Finishing lantai</td>
                            <td>
                            -	Carport (ceramic tile Sandi Mas 40 x40) <br />
                            -	Keramik dalam rumah HomogeneousTile Double Layer Alice 60 x 60
                            </td>
                        </tr>
                        <tr>
                            <td>Ruang Mandi/Toilet</td>
                            <td>Lantai & dinding (ceramic tile roman)</td>
                        </tr>
                        <tr>
                            <td>Struktur atas</td>
                            <td>Beton K300</td>
                        </tr>
                        <tr>
                            <td>Atap</td>
                            <td>Dak beton, waterproof sika dan system insulasi</td>
                        </tr>
                        <tr>
                            <td>Plafond</td>
                            <td>Interior (gypsum Jaya board/Yoshino board)</td>
                        </tr>
                        <tr>
                            <td>Tangki air</td>
                            <td>Ground water tank & roof tank Penguin</td>
                        </tr>
                        <tr>
                            <td>Pompa air</td>
                            <td>Shimizu</td>
                        </tr>
                        <tr>
                            <td>Septictank</td>
                            <td>Bio tank</td>
                        </tr>
                        <tr>
                            <td>Supply air</td>
                            <td>PDAM</td>
                        </tr>
                        <tr>
                            <td>Listrik</td>
                            <td>Jaringan listrik bawah tanah</td>
                        </tr>
                    </table>
                </div>
                <div class="col-sm-6">
                    <table class="table table-bordered" style="margin: 30px 0;">
                        <tr>
                            <th width="30%">Spesifikasi</th>
                            <th>Keterangan</th>
                        </tr>
                        <tr>
                            <td>Kusen pintu dan jendela</td>
                            <td><img src="/assets/images/the-homes/ykk.png" alt="ykk"></td>
                        </tr>
                        <tr>
                            <td>Pintu</td>
                            <td><img src="/assets/images/the-homes/daiken.png" alt="daiken"></td>
                        </tr>
                        <tr>
                            <td>Sanitary</td>
                            <td><img src="/assets/images/the-homes/toto.png" alt="toto"></td>
                        </tr>
                        <tr>
                            <td>Listrik</td>
                            <td>2200VA</td>
                        </tr>
                        <tr>
                            <td>AC</td>
                            <td><img src="/assets/images/the-homes/mitsubishi.png" alt="mitsubishi"></td>
                        </tr>
                        <tr>
                            <td>Saklar dan Power Outlet</td>
                            <td><img src="/assets/images/the-homes/panasonic.png" alt="panasonic"></td>
                        </tr>
                        <tr>
                            <td>Instalasi air panas</td>
                            <td>Pipa westpex</td>
                        </tr>
                        <tr>
                            <td>Filter air</td>
                            <td><img src="/assets/images/the-homes/toclas.png" alt="toclas"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- <div class="spek-home">
            <div class="txt-center">
=======
        <div class="spek-home row">
            <div class="col-sm-6">
            <div class="txt-center ">
>>>>>>> dev
                <img src="<?= base_url();?>assets/images/detail/spek-a1.png" class="img-spek-a1" />
            </div>
</div>
<div class="col-sm-6">

            <div class="txt-center ">
                <img src="<?= base_url();?>assets/images/detail/spek-a2.png" class="img-spek-a2" />
            </div>
<<<<<<< HEAD
        </div> -->
<!-- =======

>>>>>>> dev -->

    </div>

    <!-- FULL CAROUSEL -->
    <div style="color: #000;background-color:#fff;text-align:center;text-align: justify;">
            <div id="demo" class="carousel carousel-full slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
    
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= base_url();?>assets/images/room.jpg" alt="Type A" width="1100" height="400">
                            <div class="carousel-caption">
                              <!-- <h3>Type A</h3>
                              <p>We had such a great time in LA!</p> -->
                            </div>   
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url();?>assets/images/slide2.jpg" alt="Type B" width="1100" height="400">
                            <div class="carousel-caption">
                                <!-- <h3>Type B</h3>
                                <p>Thank you, Chicago!</p> -->
                            </div>   
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url();?>assets/images/slide3.jpg" alt="Type C" width="1100" height="400">
                            <div class="carousel-caption">
                                <!-- <h3>Type C</h3>
                                <p>We love the Big Apple!</p> -->
                            </div>   
                        </div>
                    </div>
    
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
    </div>

    <!-- INFO SPEK 2 -->

    <div style="color: #000;background-color:#fff;text-align:center;padding: 50px 5% 10px 5%;text-align: justify;">
        <div class="">
                    <div class="txt-center">
                        <img src="<?= base_url();?>assets/images/detail/toclas.png" class="w-100" />
                    </div>
                    <!-- <div class="txt-center">
                        <img src="../assets/images/detail/toclas1.png" class="w-100" />
                    </div> -->
                </div>
    </div>

    <!-- MASTER PLAN -->
    <div style="color: #000;background-color:#fff;text-align:center;text-align: justify;">
        <div class="mt-50 txt-right">
            <img src="<?= base_url();?>assets/images/background/site-plan.jpg" class="w-100" />
        </div>
    </div>

    <!-- FOOTER -->

<div style="color: #000;background-color:#fff;text-align:center;text-align: justify;">
    <div class="row bg-footer no-margin">

        <div class="col-md-3 f-first">
            <div class="detail-footer">
                <p class="header-footer">Marketing Gallery</p>
                Jalan Raya Tajur No.30, Tajur ??? Kota Bogor 16141<br>
                Jawa Barat, Indonesia<br>
                Phone <a href="tel:08111403280">0811 1403 280</a><br>
                Phone <a href="tel:02518574255">0251-8574 255</a><br>
                Email <a href="mailto:bambootajur@gmail.com">bambootajur@gmail.com</a><br>
            </div>
        </div>

        <div class="col-md-3">
            <div class="detail-footer">
                <p class="header-footer">Show Unit</p>
                Jalan Unitex, Tajur ??? Kota Bogor 16141<br>
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
            &copy; Copyright 2018. All Rights Reserved
        </div>
    </div>

    <!-- return to top -->
<!-- <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a> -->
<a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.." class="floating-whatsapp" target="_blank">
        <div class="f-whatsapp"> </div>
        <p class="floating-teks">0811 1403 280</p>
    </a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="<?= base_url();?>assets/js/navbar.js"></script>

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
    var header = $("nav");
    
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