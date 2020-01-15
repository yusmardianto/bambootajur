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

<!-- return to top -->
<!-- <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a> -->
<!-- <a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.." rel="noopener noreferrer" class="floating-whatsapp" target="_blank">
        <div class="f-whatsapp"> </div>
        <p class="floating-teks">0811 1403 280</p>
    </a> -->

    <input type="checkbox" id="messenger" class="icon-checkbox">

<div class="msgr-container">
    <div class="messenger">
        <div class="hero2"></div>
        <div class="scrollable">
            <header class="header hero">
                <label for="messenger" class="home-btn-float-2" style="display:none;">
                    <div id="closeMenu" >X</div>
                </label>
                <p>Hi, we're</p>
                <h1>Green Bamboo Terrace</h1>
                <p>Silakan isi form di bawah ini untuk mendapatkan informasi lebih lanjut</p>
            </header>
            <!--<div class="card-nup">
                <p class="pri">Contact Us Now</p>
                <p class="data">Silahkan isi data informasi di bawah ini atau langsung hubungi kami di: </p>
                <p class="data">
                  <a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.." class="whatsapp-phone">
                    <img src="<?= base_url();?>assets/images/New_CTA_Button_2.png" class="w-15" alt="whatsapp-icon" /></a>
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
                    window.dataLayer = window.dataLayer || [];
                    window.dataLayer.push({
                        'event': 'floatingContactForm'
                    });
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