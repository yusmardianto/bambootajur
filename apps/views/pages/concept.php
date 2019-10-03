<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>
<div class="bgimg-1">

    <div class="white-card-float">
      <div class="title-section-line">
        <div class="mr-md-4">
          <div class="jumbotron__category">
              <h6 class="head-title">THE CONCEPT</h6>
          </div>
        </div>
        <div>
          <hr>
        </div>
      </div>
        <div class="jumbotron__category9">
            <h3 class="head-title">A Taste Of Japanese Perfection</h3>
        </div>
        <p class="text-justify m-0">
          Green Bamboo Terrace Bogor adalah sebuah Masterpiece dari PT. Kebun Bambu Jakarta yang merupakan Developer Jepang yang sudah ada di Indonesia sejak tahun 2015, dan juga terafiliasi dengan Bamboo Field Japan.
        </p>

    </div>
</div>
<div style="margin: 40px 0;">
  <p class="the-concept-desc">
    Green Bamboo Terrace Bogor adalah sebuah standar baru untuk hunian tinggal yang Nyaman, Aman, dan Asri yang terletak di Kota Bogor. Green Bamboo Terrace Bogor merupakan sebuah hunian eksklusif di Kota Bogor, karena Green Bamboo Terrace Bogor terletak di daerah Tajur yang merupakan salah satu pusat bisnis dan niaga di Kota Bogor.
  </p>
  <p class="the-concept-tagline">
    “Green Bamboo Terrace Bogor dibangun dengan hati seperti kami membangun untuk rumah sendiri.”
  </p>
</div>

<div class="the-concept-showcase">
  <div class="row mx-0">
    <div class="col-6 col-md-4 px-2 text-center">
      <img class="img-fluid h-100" src="<?php echo base_url(); ?>assets/images/concept/the-concept-showcase-1.png" alt="Showcase">
    </div>
    <div class="col-6 col-md-3 px-2 text-center">
      <img class="img-fluid h-100" src="<?php echo base_url(); ?>assets/images/concept/the-concept-showcase-2.png" alt="Showcase">
    </div>
    <div class="col-12 col-md-5 px-2 text-center">
      <img class="img-fluid pt-3 pb-3 pt-md-0" src="<?php echo base_url(); ?>assets/images/concept/the-concept-showcase-3.png" alt="Showcase">
      <div class="row mx-0">
        <div class="col-6 pl-0 pr-2">
          <img class="img-fluid h-100" src="<?php echo base_url(); ?>assets/images/concept/the-concept-showcase-4.png" alt="Showcase">
        </div>
        <div class="col-6 pr-0 pl-2">
          <img class="img-fluid h-100" src="<?php echo base_url(); ?>assets/images/concept/the-concept-showcase-5.png" alt="Showcase">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <div style="color: #000;background-color:#fff;text-align:center;padding:50px 5%;text-align: justify;">
    <div class="static-img">
        <img src="<?php// echo base_url();?>assets/images/concept/static.png" alt="concept-img" class="img-responsive">
    </div>
</div> -->

    <!-- FORM -->
    <div style="color: #000;background-color:#fff;text-align:center;padding: 10px 5% 50px 5%;text-align: justify;">
        <form class="form-style" id="contact">
            <div class="jumbotron__title txt-center">
                <h1 class="form-label1">Book Now!</h1>
                <h1 class="form-label2">Only Rp 10,000,000 - Limited Units</h1>
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
            <li><a href="<?= site_url(['the-homes'])?>" class="dropdown-toggle"  data-toggle="dropdown">The Homes&nbsp;<span><i class="fas fa-caret-down"></i></span></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" data-slider="#akane" href="<?= site_url(['the-homes'])?>#demo" >Tipe Akane</a>
                    <a class="dropdown-item" data-slider="#momiji" href="<?= site_url(['the-homes'])?>#demo">Tipe Momiji</a>

                </div>
            </li>
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
        <li><a href="<?= site_url(['the-homes'])?>" class="dropdown-toggle"  data-toggle="dropdown">The Homes&nbsp;<span><i class="fas fa-caret-down"></i></span></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" data-slider="#akane" href="<?= site_url(['the-homes'])?>#demo" >Tipe Akane</a>
                    <a class="dropdown-item" data-slider="#momiji" href="<?= site_url(['the-homes'])?>#demo">Tipe Momiji</a>

                </div>
            </li>
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
