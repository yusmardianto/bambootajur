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
          <p style="text-justify">Lokasi Green Bamboo Terrace Bogor juga sangat strategis sehingga mudah sekali mencapai Tol Jagorawi dan Tol Bocimi. Dan terletak juga di Kawasan niaga kota bogor, dan dikelilingi fasilitas-fasilitas yang super lengkap seperti: Sekolah, Kampus Ternama, Rumah Sakit, Pusat-pusat perbelanjaan, dan tempat rekreasi.</p>
          </div>
    </div>
  </div>
  <div class="col-md-7">
  <div class="w-100" style="color: #000;background-color:#fff;text-align:center;margin-top:5em;text-align: justify;">
        <div class="map-loc">
            <div class="txt-center mb-30">
                <img src="<?= base_url();?>assets/images/detail/bambootajur-peta-lokasi.jpg" class="news-style" alt="news-style" />
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
                <img src="<?= base_url();?>assets/images/vendor/kbj.png" class="img-kbj" alt="kbj-img" />
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
    <a href="https://www.facebook.com/GreenBambooTerrace" rel="noopener noreferrer" aria-label="Click here to visit our facebook account" target="_blank"><i class="fab fa-facebook-square"></i></a>
    <a href="https://twitter.com/BambooTajur" rel="noopener noreferrer" aria-label="Click here to visit our twitter account" target="_blank"><i class="fab fa-twitter"></i></a>
    <a href="https://www.instagram.com/bambootajur.official/" rel="noopener noreferrer" aria-label="Click here to visit our instagram account" target="_blank"><i class="fab fa-instagram"></i></a>
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
<!-- <a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.." rel="noopener noreferrer" class="floating-whatsapp" target="_blank">
        <div class="f-whatsapp"> </div>
        <p class="floating-teks">0811 1403 280</p>
    </a> -->

    <input type="checkbox" id="messenger" class="icon-checkbox">

<div class="msgr-container">
    <div class="messenger">
        <div class="hero"></div>
        <div class="hero2"></div>
        <div class="scrollable">
            <header class="header">
                <p>Hi, we're</p>
                <h1>Green Bamboo Terrace</h1>
            </header>
            <!--<div class="card-nup">
                <p class="pri">Contact Us Now</p>
                <p class="data">Silahkan isi data informasi di bawah ini atau langsung hubungi kami di: </p>
                <p class="data">
                  <a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.." class="whatsapp-phone">
                    <img src="<?= base_url();?>assets/images/New_CTA_Button_2.png" alt="whatsapp-icon" /></a>
                </p>
                <p class="data">Kami siap menghubungi Anda.</p>
            </div>-->
            <div>
              <form class="form-style" id="bamboo-contact" name="bamboo-contact" method="POST">
                  <div style="text-align:left; font-size:12px">
                  <label for="InputName">Nama</label>
                  </div>
                  <div class="form-group">
                      <input type="text" name="name" class="form-control contact-popup-custom" id="InputName"
                          placeholder="Nama Lengkap" required>
                  </div>
                  <div style="text-align:left; font-size:12px">
                  <label for="InputEmail">Alamat Email</label>
                  </div>
                  <div class="form-group">
                      <input type="email" name="email" class="form-control contact-popup-custom" id="InputEmail" aria-describedby="emailHelp"
                          placeholder="Email" required>
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                          else.</small>
                  </div>
                  <div style="text-align:left; font-size:12px">
                  <label for="InputPhone">No.Telepon</label>
                  </div>
                  <div class="form-group">
                      <input type="text" name="number" class="form-control contact-popup-custom" id="InputPhone"
                          placeholder="No. Telepon" maxlength="13" required>
                  </div>
                  <div class="w-100 txt-center" style="margin-top: 20px">
                      <button type="submit" class="btn btn-primary" id="submit"
                          data-loading-text="Loading...">Kirim</button>
                  </div>
                  <!-- <ul class="ul-wa">
                      <li class="li-wa"><a
                              href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.."
                              class="phone"><img
                                  src="<?= base_url();?>assets/images/icon/whatsapp.png" class="w-30" alt="whatsapp-icon" />0811 1403 280</a></li>
                      <li class="li-wa"><a
                              href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.."><img
                                  src="<?= base_url();?>assets/images/icon/whatsapp.png" class="w-30" alt="whatsapp-icon" /></a></li>
                  </ul> -->
              </form>
            </div>
        </div>
        <footer class="footer">&copy; PT. KEBUN BAMBU JAKARTA <br>All Rights Reserved
        </footer>

    </div>
</div>


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

<script type="text/javascript">
function isMobile() {
    return (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino|android|ipad|playbook|silk/i
        .test(navigator.userAgent || navigator.vendor || window.opera) ||
        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
        .test((navigator.userAgent || navigator.vendor || window.opera).substr(0, 4)))
}

function checkboxEvent() {
    if (document.getElementById('messenger').checked) {
        $('.menuIcon').attr('style', 'display:none');
    } else {
        $('.menuIcon').attr('style', 'display:false');
    }
}

$(document).ready(function() {
    if (isMobile()) {
        $('#messenger').removeAttr("checked");
        $('#messenger').attr("onclick", 'checkboxEvent()');
    } else {
        // $('#messenger').attr("checked", "false");
    };

    $('#bamboo-contact').on('submit', function(e) {
        e.preventDefault();
        var form = $('#bamboo-contact');
        $.ajax({
            url: '<?= site_url(['submit-contact'])?>',
            data: form.serialize(),
            type: 'POST',
            dataType: 'json',
            beforeSend: function(event) {
                $("#submit").html("<i class='fa fa-spinner fa-spin'> </i> wait");
            },
            success: function(data) {
                if (data.save == true) {
                    $("#submit").html("Kirim");
                    alert('Terimakasih, Kontak anda sudah disimpan.');
                    location.reload();
                } else {
                    $("#submit").html("Kirim");
                    alert('Terimakasih, Kontak anda sudah disimpan.');
                    location.reload();
                }
            }
        });
    });
});
</script>
