<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>        
<div class="bgimg-3">
    <div class="card-content2">
        <div class="jumbotron__category2 ">
            <h6 class="head-title txt-center">DISCLAIMER</h6>
        </div>
        <!-- <div class="jumbotron__title txt-center">
            <h1>Rumah Tinggal dengan Konsep Hijau dan Nyaman</h1>
        </div> -->
        <div class="jumbotron__content txt-center">
            <p>
                Gambar, ukuran, bentuk yang tertera dalam brosur maupun website adalah merupakan informasi umum terkait produk. Gambar, ukuran, bentuk dapat berubah sewaktu-waktu, perubahan dalam brosur dan website bersifat tidak mengikat dan bukan merupakan tanggung jawab developer untuk menginformasikannnya.
            </p>
            <!-- <a class="btn  btn-primary" href="about-us" target="_self">MORE ABOUT US</a> -->
        </div>
    </div>
</div>
  
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
            <li><a href="<?= site_url(['the-homes'])?>" class="dropdown-toggle"  data-toggle="dropdown">The Homes&nbsp;<span><i class="fas fa-caret-down"></i></span></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" data-slider="#akane" href="<?= site_url(['the-homes'])?>#demo" >Tipe Akane</a>
                    <a class="dropdown-item" data-slider="#momiji" href="<?= site_url(['the-homes'])?>#demo">Tipe Momiji</a>
                    
                </div>
            </li>
            <li><a href="<?= site_url(['the-facilities'])?>">The Facilities</a></li>
            <li><a href="<?= site_url(['news'])?>">News</a></li>
            <li><a href="<?= site_url(['disclaimer'])?>" class="active">Disclaimer</a></li>
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
        <li><a href="<?= site_url(['the-homes'])?>" class="dropdown-toggle"  data-toggle="dropdown">The Homes&nbsp;<span><i class="fas fa-caret-down"></i></span></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" data-slider="#akane" href="<?= site_url(['the-homes'])?>#demo" >Tipe Akane</a>
                    <a class="dropdown-item" data-slider="#momiji" href="<?= site_url(['the-homes'])?>#demo">Tipe Momiji</a>
                    
                </div>
            </li>
        <li><a href="<?= site_url(['the-facilities'])?>">The Facilities</a></li>
        <li><a href="<?= site_url(['news'])?>">News</a></li>
        <li><a href="<?= site_url(['disclaimer'])?>" class="active">Disclaimer</a></li>
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

<!-- SMOOTH SCROLL FUCNTION JQUERY DROPDOWN -->
<script>

$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
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
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

  
</script>


<script>
$('.dropdown-item').on('click', function(){
 $('.carousel-item').removeClass('active');
 var itemSlider = $(this).data('slider');
 $(itemSlider).addClass('active');
 console.log(itemSlider);
})

</script>