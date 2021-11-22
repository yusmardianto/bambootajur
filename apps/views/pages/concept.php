<?php
defined('BASEPATH') or exit('No direct script access allowed');

include('layouts/main.php');
?>
<div class="bgimg-1">
  <div class="white-card-float">
    <div class="title-section-line">
      <div class="mr-md-4">
        <div class="jumbotron__category">
          <h1 class="head-title">KESEMPURNAAN RUMAH KONSEP JEPANG</h1>
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
      Green Bamboo Terrace dibangun dengan konsep "A Taste of Japanese Perfection". Jepang merupakan negara yang terkenal dengan kedisiplinan, ketelitian, dan kesempurnaan dalam menciptakan suatu produk tanpa meninggalkan tradisi sehingga dapat menghasilkan produk yang unik, fungsional, serta tahan lama. Dengan konsep ini, PT Kebun Bambu Jakarta ingin menyuguhkan kesempurnaan pada setiap bangunan yang kami bangun di perumahan Green Bamboo Terrace.
    </p>

  </div>
</div>
<div class="container">
  <div style="margin: 20px 0;">
    <ul class="breadcrumbdesign">
      <li><?php echo '<a href="' . base_url() . '">Beranda</a>' ?></li>
      <li><a href="#">Konsep</a></li>

    </ul>
  </div>
  <div style="margin: 40px 0;">
    <p class="the-concept-desc">
      Green Bamboo Terrace Bogor adalah sebuah masterpiece dan standar baru untuk hunian tinggal yang nyaman, aman, dan asri yang terletak di Kota Bogor. Green Bamboo Terrace dikembangkan oleh PT. Kebun Bambu Jakarta yaitu developer Jepang yang sudah ada di Indonesia sejak tahun 2014, dan juga terafiliasi dengan Bamboo Field Japan. Pada project Green Bamboo Terrace ini, PT Kebun Bambu Jakarta yang dibantu oleh Bamboo Field berkomitmen untuk menciptakan tempat tinggal berkualitas tinggi dengan harga yang terjangkau.
    </p>
    <p class="the-concept-desc">
      Green Bamboo Terrace Bogor merupakan sebuah hunian eksklusif di Kota Bogor, karena Green Bamboo Terrace Bogor terletak di daerah Tajur yang merupakan salah satu pusat bisnis dan niaga di Kota Bogor.
    </p>
    <p class="the-concept-tagline">
      “Green Bamboo Terrace Bogor dibangun dengan hati seperti kami membangun untuk rumah sendiri.”
    </p>
  </div>

  <div class="the-concept-showcase">
    <div class="row mx-0">
      <div class="col-6 col-md-4 px-2 text-center">
        <picture>
          <source srcset="<?php echo base_url(); ?>assets/images/concept/the-concept-showcase-1.webp" type="image/webp">
          <img class="img-fluid h-100" src="<?php echo base_url(); ?>assets/images/concept/the-concept-showcase-1.png" alt="Rumah 2 Lantai di Bogor">
        </picture>
      </div>
      <div class="col-6 col-md-3 px-2 text-center">
        <picture>
          <source srcset="<?php echo base_url(); ?>assets/images/concept/the-concept-showcase-2.webp" type="image/webp">
          <img class="img-fluid h-100" src="<?php echo base_url(); ?>assets/images/concept/the-concept-showcase-2.png" alt="Rumah Minimalis Modern">
        </picture>
      </div>
      <div class="col-12 col-md-5 px-2 text-center">
        <picture>
          <source srcset="<?php echo base_url(); ?>assets/images/concept/the-concept-showcase-3.webp" type="image/webp">
          <img class="img-fluid pt-3 pb-3 pt-md-0" src="<?php echo base_url(); ?>assets/images/concept/the-concept-showcase-3.png" alt="Rumah Minimalis Modern">
        </picture>
        <div class="row mx-0">
          <div class="col-6 pl-0 pr-2">
            <picture>
              <source srcset="<?php echo base_url(); ?>assets/images/concept/the-concept-showcase-4.webp" type="image/webp">
              <img class="img-fluid h-100" src="<?php echo base_url(); ?>assets/images/concept/the-concept-showcase-4.png" alt="Rumah Minimalis Modern">
            </picture>
          </div>
          <div class="col-6 pr-0 pl-2">
            <picture>
              <source srcset="<?php echo base_url(); ?>assets/images/concept/the-concept-showcase-5.webp" type="image/webp">
              <img class="img-fluid h-100" src="<?php echo base_url(); ?>assets/images/concept/the-concept-showcase-5.png" alt="Rumah Minimalis Modern">
            </picture>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <div style="color: #000;background-color:#fff;text-align:center;padding:50px 5%;text-align: justify;">
    <div class="static-img">
        <img src="<? php // echo base_url();
                  ?>assets/images/concept/static.png" alt="concept-img" class="img-responsive">
    </div>
</div> -->

<!-- FORM -->
<div style="color: #000;background-color:#fff;text-align:center;padding: 10px 5% 50px 5%;text-align: justify;">
  <form class="" id="contact">
    <div class="jumbotron__title txt-center">
    <h2 class="mb-4 form-label">Contact Us Now</h2>
      <!-- <h1 class="form-label2">Only Rp 10,000,000 - Limited Units</h1> -->
      <p class="data1" style="margin-bottom:5px;">Silahkan isi data informasi di bawah ini atau langsung hubungi kami di: </p>
      <p class="data1" style="margin-bottom:5px;">
        <a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.." class="whatsapp-phone" rel="nofollow">
          <picture>
            <source srcset="<?= base_url(); ?>assets/images/icon/whatsapp.webp" type="image/webp">
            <img src="<?= base_url(); ?>assets/images/icon/whatsapp.png" class="w-15" alt="whatsapp-icon" />0811 1403 280
          </picture>
        </a>
      </p>
      <p class="data1">Kami siap menghubungi Anda.</p>
    </div>
    <div class=" text-left">
      <small class="text-danger font-weight-bold">* Wajib diisi</small>
    </div>    
    <div style="text-align:left; font-size:12px">
      <label for="nameInput">Nama <span class="text-danger">*</span></label>
    </div>
    <div class="form-group">
      <input type="text" name="name" class="form-control" id="nameInput" placeholder="Nama Lengkap" required title="Gunakan Huruf dan min 3 huruf">
    </div>
    <div style="text-align:left; font-size:12px">
      <label for="phoneInput">No. Telepon <span class="text-danger">*</span></label>
    </div>
    <div class="form-group">
      <input type="text" name="number" class="form-control" id="phoneInput" placeholder="No. Telepon" maxlength="13" required title="Gunakan hanya angka dan lebih dari 10">
    </div>
    <div style="text-align:left; font-size:12px">
      <label for="emailInput">Alamat Email <span class="text-danger">(opsional)</span></label>
    </div>
    <div class="form-group">
      <input type="email" name="email" class="form-control" id="emailInput" aria-describedby="emailHelp" placeholder="Email" required>
      <small id="emailHelp" class="form-text text-muted txt-left pl-5px">We'll never share your email with anyone else.</small>
    </div>
    <div style="text-align:left; font-size:12px">
      <label for="pesanInput">Isi Pesan <span class="text-danger">(opsional)</span></label>
    </div>
    <div class="form-group">
      <textarea class="form-control" name="message" id="pesanInput" rows="3" placeholder="Pesan" required></textarea>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary" id="get-now" disabled>Kirim</button>
    </div>
  </form>
</div>

<!-- return to top -->
<!-- <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a> -->
<!-- <a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.." rel="noopener noreferrer" class="floating-whatsapp" target="_blank">
        <div class="f-whatsapp"> </div>
        <p class="floating-teks">0811 1403 280</p>
    </a> -->

<script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
  $(window).scroll(function(){$(this).scrollTop()>=50?$('#return-to-top').fadeIn(100):$('#return-to-top').fadeOut(0);}),$('#return-to-top').click(function(){$('body,html').animate({scrollTop:0},{duration:750});});
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
function lockScroll(){$("body").hasClass("lock-scroll")?$("body").removeClass("lock-scroll"):$("body").addClass("lock-scroll")}
</script>

<script type="text/javascript">
$(function(){
  function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test( $email );
  }
  $("#contact").on('keyup', function(){
    var nameInput = $("#nameInput").val();
    var phoneInput = $("#phoneInput").val();
    var inputEmail = $("#emailInput").val();
    if(nameInput.length >= 3 && (phoneInput.length >= 10 && phoneInput.match(/^\d+$/))){
      if (inputEmail.length > 0) {
        if(validateEmail(inputEmail)) {
          $("#get-now").attr('disabled', false);
        } else {
          $("#get-now").attr('disabled', true);
        }
      } else {
        $("#get-now").attr('disabled', false);
      }
    } else {
      $("#get-now").attr('disabled', true);
    }
  })


  $('#contact').on('submit', function(e) {
    e.preventDefault();
    var form = $('#contact');
    $.ajax({
      url: '<?= site_url(['email-the-concept']) ?>',
      data: form.serialize(),
      type: 'POST',
      dataType: "text",
      cache: false,
      beforeSend: function(event) {
        $("#get-now").html("<i class='fa fa-spinner fa-spin'> </i> wait");
      },
      success: function(data) {
        if (data == 'sukses') {
          $("#get-now").html("Book Now!");
          window.dataLayer = window.dataLayer || [];
          window.dataLayer.push({
            'event': 'floatingContactForm'
          });
          alert('Terimakasih telah menghubungi kami.');
          location.reload();
        } else {
          $("#get-now").html("Book Now!");
          alert('Terimakasih telah menghubungi kami.');
          location.reload();
        }
      }
    });
  });
})
</script>
<script type="text/javascript">
  var prevScrollpos = window.pageYOffset;
  window.onScroll = function() {
    var currentScrollpos = window.pageYOffset;
    if (prevScrollpos > currentScrollpos) {
      document.getElementById("navbar").style.top = "0";
    } else {
      document.getElementById("navbar").style.top = "-100px";
    }
    prevScrollpos = currentScrollpos;
  }
</script>


<!-- SMOOTH SCROLL FUCNTION JQUERY DROPDOWN -->
<script>
 $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(t){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);(e=e.length?e:$("[name="+this.hash.slice(1)+"]")).length&&(t.preventDefault(),$("html, body").animate({scrollTop:e.offset().top},1e3,function(){var t=$(e);if(t.focus(),t.is(":focus"))return!1;t.attr("tabindex","-1"),t.focus()}))}});
</script>


<script>
$(".dropdown-item").on("click",function(){$(".carousel-item").removeClass("active");var a=$(this).data("slider");$(a).addClass("active"),console.log(a)});
</script>