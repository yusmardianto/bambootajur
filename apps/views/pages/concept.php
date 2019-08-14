<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    $pages = "Concept";
    $title = "The Concept - Green Bamboo Terrace";
    $keywords = "smart home system, eco living, konsep hijau, rumah pintar, bamboo tajur, bambootajur, bambutajur, real estate, ramah lingkungan, investasi properti, investasi rumah, green bamboo terrace, properti bogor, properti tajur, beli rumah di bogor, beli rumah mewah terjangkau, properti dekat rumah sakit, perumahan dekat tol, klaster dekat taman bermain, hunian dekat pt unitex, perumahan dekat tol bogor, perumahan dekat tol ciawi, kualitas hidup tinggi, menambah kualitas hidup, hidup mewah harga rendah, nouceau riche, rumah milenial, rumah generasi muda, perumahan milenial";
    $description = "Rumah dengan konsep hijau dan nyaman dilengkapi dengan berbagai fasilitas untuk meningkatkan standar hidupmu. Cluster hunian seluas 1.7 hektar yang berada di wilayah kota Tajur-Bogor dengan harga terjangkau";

    include('layouts/main.php');
?>        
<div class="bgimg-1">
    
    <div class="card-content">
        <div class="jumbotron__category">
            <h6 class="head-title">THE CONCEPT</h6>
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
      
<div style="color: #000;background-color:#fff;text-align:center;padding:50px 5%;text-align: justify;">
    
    <!-- CAROUSEL -->

    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url();?>assets/images/concept/concept.png" alt="concept A" width="1100" height="400">
                <div class="carousel-caption">
                  <!-- <h3>Type A</h3>
                  <p>We had such a great time in LA!</p> -->
                </div>   
            </div>
            <div class="carousel-item">
                <img src="<?= base_url();?>assets/images/concept/concept1.png" alt="concept B" width="1100" height="400">
                <div class="carousel-caption">
                    <!-- <h3>Type B</h3>
                    <p>Thank you, Chicago!</p> -->
                </div>   
            </div>
            <div class="carousel-item">
                <img src="<?= base_url();?>assets/images/concept/concept2.png" alt="concept C" width="1100" height="400">
                <div class="carousel-caption">
                    <!-- <h3>Type C</h3>
                    <p>We love the Big Apple!</p> -->
                </div>   
            </div>
            <div class="carousel-item">
                <img src="<?= base_url();?>assets/images/concept/concept3.png" alt="concept D" width="1100" height="400">
                <div class="carousel-caption">
                    <!-- <h3>Type D</h3>
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

    <!-- MAPS -->
    <div style="color: #000;background-color:#fff;text-align:center;text-align: justify;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15852.379084447002!2d106.8299138!3d-6.6351515!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf84d525b47a8d1d1!2sGreen+Bamboo+Terrace!5e0!3m2!1sen!2sid!4v1564987446337!5m2!1sen!2sid" width="100%" height="450" margin-top="20" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <!-- FORM -->
    <div style="color: #000;background-color:#fff;text-align:center;padding: 10px 5% 50px 5%;text-align: justify;">
        <form class="form-style" id="contact">
            <div class="jumbotron__title txt-center">
                <h1 class="form-label1">Book Now!</h1>
                <h1 class="form-label2">Only Rp 10,000,000 ??? Limited Units</h1>
            </div>
            <div class="form-group">
                <input type="text" name="name" class="form-control" id="nameInput" aria-describedby="nameHelp" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group">
            <input type="email" name="email" class="form-control" id="emailInput" aria-describedby="emailHelp" placeholder="Email" required>
            <small id="emailHelp" class="form-text text-muted txt-left pl-5px">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <input type="text" name="number" class="form-control" id="phoneInput" aria-describedby="phoneHelp" placeholder="No. Telepon" maxlength="13" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" id="pesanInput" rows="3" placeholder="Pesan" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary" id="get-now">Book Now!</button>
        </form>
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
      

<!-- /*======================================================
                            NAVBAR
======================================================*/ -->

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
            <li><a href="<?= site_url(['the-concept'])?>" class="active">The Concept</a></li>
            <li><a href="<?= site_url(['the-homes'])?>">The Homes</a></li>
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
        <a href="<?= base_url();?>">
            <img src="<?= base_url();?>assets/images/logo.png" class="img-responsive p-10"/>
        </a>
    </div>
    <ul id="menu" class="menu-mobile">
        <li><a href="<?= base_url();?>">Home</a></li>
        <li><a href="<?= site_url(['the-concept'])?>" class="active">The Concept</a></li>
        <li><a href="<?= site_url(['the-homes'])?>">The Homes</a></li>
        <li><a href="<?= site_url(['the-facilities'])?>">The Facilities</a></li>
        <li><a href="<?= site_url(['news'])?>">News</a></li>
        <li><a href="<?= site_url(['disclaimer'])?>">Disclaimer</a></li>
        <li><a href="<?= site_url(['contact'])?>">Contact</a></li>
    </ul>
</div>

<!-- return to top -->
<!-- <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a> -->
    <a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.." class="floating-whatsapp" target="_blank">
        <div class="f-whatsapp"> </div>
        <p class="floating-teks">0811 1403 280</p>
    </a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- <script src="assets/js/slide.js"></script> -->
<script src="<?= base_url();?>assets/js/navbar.js"></script>
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
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMSIJLct0nu9ftabXf81gZ_OR4AyNh3yI&amp;callback=initMap"></script>
<script type="text/javascript">
    function initMap() {
  var lokasi = [
    ['Lokasi Cluster', -6.635233, 106.829893, 4],
    ['Marketing Gallery', -6.638601, 106.832341, 5]
  ];

          var latlong = { lat: -6.635970, lng: 106.8310000 };
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: latlong
          });

          var marker = new google.maps.Marker({
      position: {lat: lokasi[0][1], lng: lokasi[0][2]},
      map: map,
      title: lokasi[0][0],
      label: lokasi[0][0],
          });

      var marker2 = new google.maps.Marker({
        position: {lat: lokasi[1][1], lng: lokasi[1][2]},
            map: map,
        title: lokasi[1][0],
        label: lokasi[1][0],
          });
    }
</script>

<script type="text/javascript">
$('#contact').on('submit', function(e){
    e.preventDefault();
    var form = $('#contact');
    $.ajax({
        url: '<?= site_url(['submit-contact'])?>',
        data: form.serialize(),
        type: 'POST',
        dataType : 'json',
        beforeSend : function(event){
          $("#get-now").html("<i class='fa fa-spinner fa-spin'> </i> wait");
        },
        success: function(data) {
          if(data.save == true){
            $("#get-now").html("Book Now!");
            alert('Terimakasih telah menghubungi kami.');
            location.reload();
          }else{
            $("#get-now").html("Book Now!");
            alert('Terimakasih telah menghubungi kami.');
            location.reload();
          }
        }
    });
});
</script>
<script type="text/javascript">
var prevScrollpos = window.pageYOffset;
window.onScroll = function () {
    var currentScrollpos = window.pageYOffset;
    if(prevScrollpos > currentScrollpos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-100px";
    }
    prevScrollpos = currentScrollpos;
}

</script>