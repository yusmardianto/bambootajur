<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>

<div class="container">
<div class="row">
  <div class="col-md-5">
      <div class="cardbox">
          <div class="row">
              <div class="col-md-3">
                  <h4 class="ml-4 mt-4 pt-3">LOKASI</h4>
              </div>
              <div class="col-md-9">
                  <hr class="mt-5">
              </div>
          </div>
          <div class="container pt-3 pl-4">
          <p style="font-size: 13.8px;text-align:justify;">Green Bamboo Terrace memiliki lokasi strategis yang sangat mudah untuk diakses. Berlokasi di tengah kota, dengan lingkungan yang asri dan tenang, Anda dapat dengan mudah mencapai Tol Jagorawi serta Tol Bocimi. Green Bamboo Terrace juga berada di kawasan niaga kota Bogor sehingga Anda dapat dengan mudah menemukan berbagai fasilitas seperti sekolah, kampus ternama, rumah sakit, pusat perbelanjaan, serta tempat rekreasi.</p>
          </div>
    </div>
  </div>
  <div class="col-md-7">
  <div class="w-100" style="color: #000;background-color:#fff;text-align:center;margin-top:5em;text-align: justify;">
        <div class="map-loc">
            <div class="txt-center mb-30">
                <img src="<?= base_url();?>assets/images/detail/bambootajur-peta-lokasi.jpg" class="news-style" alt="Lokasi Perumahan Green Bamboo Terrace Bogor" />
            </div>
        </div>
    </div>
  </div>
</div>
</div>



<!-- MAPS -->
<div style="color: #000;background-color:#fff;text-align:center;text-align: justify;">
<iframe title="gmap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15852.379084447002!2d106.8299138!3d-6.6351515!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf84d525b47a8d1d1!2sGreen+Bamboo+Terrace!5e0!3m2!1sen!2sid!4v1564987446337!5m2!1sen!2sid" width="100%" height="450" margin-top="20" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<!-- FORM -->
<div style="color: #000;background-color:#fff;text-align:center;padding: 10px 5% 50px 5%;text-align: justify;">
<form class="form-style" id="contact">
   <div class="jumbotron__title txt-center">
                <h1 class="form-label1">Contact Us Now</h1>
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
    <input type="email" class="form-control" name="email" id="emailInput" aria-describedby="emailHelp" placeholder="Email" required>
    <small id="emailHelp" class="form-text text-muted txt-left pl-5px">We'll never share your email with anyone else.</small>
    </div>
    <div style="text-align:left; font-size:12px">
      <label for="phoneInput">Nomor Telepon</label>
    </div>
    <div class="form-group">
        <input type="text" name="number" class="form-control" id="phoneInput" placeholder="No. Telepon" required>
    </div>
    <div style="text-align:left; font-size:12px">
      <label for="pesanInput">Isi Pesan</label>
    </div>
    <div class="form-group">
        <textarea class="form-control" id="pesanInput" name="message" rows="3" placeholder="Pesan" required></textarea>
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
        url: '<?= site_url(['email-contact-us'])?>',
        data: form.serialize(),
        type: 'POST',
        dataType: "text",  
        cache:false,
        beforeSend : function(event){
          $("#get-now").html("<i class='fa fa-spinner fa-spin'> </i> wait");
        },
        success: function(data) {
          if(data == 'sukses'){
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
