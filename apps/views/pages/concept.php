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
<div class="container">
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
        <img class="img-fluid h-100" src="<?php echo base_url(); ?>assets/images/concept/the-concept-showcase-1.png" alt="Rumah 2 Lantai di Bogor">
      </div>
      <div class="col-6 col-md-3 px-2 text-center">
        <img class="img-fluid h-100" src="<?php echo base_url(); ?>assets/images/concept/the-concept-showcase-2.png" alt="Garasi Depan Rumah Minimalis">
      </div>
      <div class="col-12 col-md-5 px-2 text-center">
        <img class="img-fluid pt-3 pb-3 pt-md-0" src="<?php echo base_url(); ?>assets/images/concept/the-concept-showcase-3.png" alt="Tampak Depan Rumah Minimalis">
        <div class="row mx-0">
          <div class="col-6 pl-0 pr-2">
            <img class="img-fluid h-100" src="<?php echo base_url(); ?>assets/images/concept/the-concept-showcase-4.png" alt="Interior Rumah Bergaya Jepang">
          </div>
          <div class="col-6 pr-0 pl-2">
            <img class="img-fluid h-100" src="<?php echo base_url(); ?>assets/images/concept/the-concept-showcase-5.png" alt="Desain Dapur dan Ruang Tamu Minimalis">
          </div>
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
                <h1 class="form-label">Contact Us Now</h1>
                <!-- <h1 class="form-label2">Only Rp 10,000,000 - Limited Units</h1> -->
                <p class="data1" style="margin-bottom:5px;">Silahkan isi data informasi di bawah ini atau langsung hubungi kami di: </p>
                <p class="data1" style="margin-bottom:5px;">
                  <a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.." class="whatsapp-phone">
                    <img src="<?= base_url();?>assets/images/icon/whatsapp.png" class="w-15" alt="whatsapp-icon" />0811 1403 280
                  </a>
                </p>
                <p class="data1">Kami siap menghubungi Anda.</p>
            </div>
            <div style="text-align:left; font-size:12px">
                <label for="nameInput">Nama</label>
                </div>
            <div class="form-group">
                <input type="text" name="name" class="form-control" id="nameInput" placeholder="Nama Lengkap" required>
            </div>
            <div style="text-align:left; font-size:12px">
                <label for="emailInput">Alamat Email</label>
            </div>
            <div class="form-group">
            <input type="email" name="email" class="form-control" id="emailInput" aria-describedby="emailHelp" placeholder="Email" required>
            <small id="emailHelp" class="form-text text-muted txt-left pl-5px">We'll never share your email with anyone else.</small>
            </div>
            <div style="text-align:left; font-size:12px">
                <label for="phoneInput">No. Telepon</label>
            </div>
            <div class="form-group">
                <input type="text" name="number" class="form-control" id="phoneInput" placeholder="No. Telepon" maxlength="13" required>
            </div>
            <div style="text-align:left; font-size:12px">
                <label for="pesanInput">Isi Pesan</label>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" id="pesanInput" rows="3" placeholder="Pesan" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary" id="get-now">Kirim</button>
        </form>
    </div>

<!-- return to top -->
<!-- <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a> -->
    <!-- <a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.." rel="noopener noreferrer" class="floating-whatsapp" target="_blank">
        <div class="f-whatsapp"> </div>
        <p class="floating-teks">0811 1403 280</p>
    </a> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
    // $(function() {
    // var header = $("#navbar");

    // $(window).scroll(function() {
    //     var scroll = $(window).scrollTop();
    //     if (scroll >= 50) {
    //         header.addClass("scrolled");
    //     } else {
    //         header.removeClass("scrolled");
    //     }
    // });
    // });

    // $(function() {
    // var header = $(".menuIcon");

    // $(window).scroll(function() {
    //     var scroll = $(window).scrollTop();
    //     if (scroll >= 50) {
    //         header.addClass("scrolled-icon");
    //     } else {
    //         header.removeClass("scrolled-icon");
    //     }
    // });
    // });
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
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'floatingContactForm'
            });
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
