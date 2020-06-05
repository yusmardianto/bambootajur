<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>

<div style="color: #000;background-color:#fff;text-align:left;padding: 120px 5% 20px 5%;text-align: justify;">
<div style="margin: 20px 0;">
        <ul class="breadcrumbdesign">
            <li><?php echo '<a href="'.base_url().'">Beranda</a>' ?></li>
            <li><a href="<?= site_url(['news'])?>">Berita</a></li>
            <li>
                <a href="<?php echo base_url ('news/penandatanganan-ajb-dan-balik-nama-unit-di-green-bamboo-terrace'); ?>">
                Penandatanganan AJB dan Balik Nama Unit di Green Bamboo Terrace
                </a>
            </li>
        </ul>
    </div>
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <?php include 'sidebar-news.php' ?>

        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
                <h1 class="news__page-title">Informasi dan Promo</h1>
                <h3 class="news-title">Penandatanganan AJB dan Balik Nama Unit di Green Bamboo Terrace</h3>
                <p class="news-date text-italic text-muted">Rabu, 12 Februari 2020</p>
            </div>
            <div class="pl-3 pt-3 news-content">
              <p class="mb-4">
                <i>AJB adalah akta otentik yang dibuat oleh PPAT untuk peralihan hak atas tanah dan bangunan. Pembuatan AJB sudah diatur sedemikian rupa melalui Peraturan Kepala Badan Pertanahan Nasional (Perkaban) No. 08 Tahun 2012 Tentang Pendaftaran Tanah, sehingga PPAT tinggal mengikuti format-format baku yang sudah disediakan. Pembuatan AJB dilakukan setelah seluruh pajak-pajak yang timbul karena jual beli sudah dibayarkan oleh para pihak sesuai dengan kewajibannya masing-masing.<br>
                Langkah selanjutnya adalah mengajukan pendaftaran peralihan hak ke kantor pertanahan setempat atau yang lazim dikenal dengan istilah balik nama. Dengan selesainya balik nama sertifikat maka hak yang melekat pada tanah dan bangunan sudah berpindah dari penjual kepada pembeli. </i>
              </p>
              <p class="mb-4">
                Tepat pada hari senin, tanggal 27 Januari 2020 Pemilik unit di <i>Green Bamboo Terrace</i> secara bertahap mulai melakukan AJB dan Balik Nama, dimulai dari pemilik unit awal di <i>Green Bamboo Terrace</i> yang telah serah terima unit dan lunas sepenuhnya.
              </p>
              <p class="mb-4">
                <i>Green Bamboo Terrace</i> melakukan kerjasama dengan Kantor Notaris & PPAT Ny. Natalia Lini Handayani, SH untuk proses AJB dengan para customer tersebut. Penandatanganan Akta Jual Beli serta Balik Nama tersebut  sendiri dimulai pukul 11.00 yang di agendakan untuk 3 customer di hari itu. Bertindak sebagai perwakilan Developer adalah Bapak T. Ivan Mukmin sebagai Direktur PT. Kebun Bambu Jakarta. Dan prosesi AJB tersebut juga dihadiri langsung oleh pemilik unit tanpa diwakilkan.
              </p>

              <div class="row section-news">
                <div class="col-6 col-md-6 mb-4">
                  <img class="img-responsive" src="<?= base_url();?>assets/images/news/feb/feb1.png" alt="">
                </div>
                <div class="col-6 col-md-6 mb-4">
                    <img class="img-responsive" src="<?= base_url();?>assets/images/news/feb/feb2.png" alt="">
                </div>
                <div class="col-6 col-md-6 mb-4">
                    <img class="img-responsive" src="<?= base_url();?>assets/images/news/feb/feb3.png" alt="">
                </div>
                <div class="col-6 col-md-6 mb-4">
                    <img class="img-responsive" src="<?= base_url();?>assets/images/news/feb/feb4.png" alt="">
                </div>
              </div>

              <p class="mt-4">
              Dengan adanya prosesi AJB dan Balik Nama ini, semakin menegaskan bahwa seluruh unit di <i>Green Bamboo Terrace</i> telah pecah sertifikat, dan seluruh legalitas yang diperlukan untuk sebuah perumahan telah dipenuhi. Sehingga, membuat seluruh pemilik unit dan calon pemilik unit rumah di <i>Green Bamboo Terrace</i> lebih yakin dan percaya untuk keamanan investasi property nya. Dan sekali lagi membuktikan, komitmen PT. Kebun Bambu Jakarta untuk menghadirkan sebuah perumahan dengan kualitas material terbaik dan aman secara legalitas, seperti di <i>Green Bamboo Terrace</i>.
              </p>
              <p class="mt-4">
              Nah, tunggu apalagi, mau rumah yang siap huni, legalitas aman, dan berada di pusat kota Bogor? <i>Green Bamboo Terrace</i> adalah jawaban terbaik untuk memenuhi kebutuhan property anda.
              </p>
              <p class="mt-4">
              Sampai jumpa di News dan Event berikutnya…!
              </p>
              <br>
            </div>
        </div>
    </div>
</div>

<!-- return to top -->
<!-- <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a> -->
<!-- <a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.." rel="noopener noreferrer"
    class="floating-whatsapp" target="_blank">
    <div class="f-whatsapp"> </div>
    <p class="floating-teks">0811 1403 280</p>
</a> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="<?= base_url();?>assets/js/navbar.js"></script>

<script>
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(100); // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(0); // Else fade out the arrow
    }
});
$('#return-to-top').click(function() { // When arrow is clicked
    $('body,html').animate({
        scrollTop: 0 // Scroll to top of body
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
    } else {
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
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
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
                        $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                });
            }
        }
    });
</script>

<!-- SHOW NEWS SIDEBAR -->
<script>
$('.dropdown-item').on('click', function() {
    $('.carousel-item').removeClass('active');
    var itemSlider = $(this).data('slider');
    $(itemSlider).addClass('active');
    console.log(itemSlider);
})
</script>

<script>
function showNews(id) {
    $('#' + id + ' ul').toggle();
    $('#' + id + ' i').toggleClass('fa-chevron-up').toggleClass('fa-chevron-down');
    $('#' + id + ' .inactive ul').css('display', 'block');
}
</script>