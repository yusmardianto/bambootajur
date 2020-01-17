<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>

<div style="color: #000;background-color:#fff;text-align:left;padding: 120px 5% 20px 5%;text-align: justify;">
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <div class="col-md-3" id="newsSidebar">

            <div class="news-sidebar" id="recent">
                <div class="d-flex flex-row">
                    <p class="py-2 m-0 h5 font-weight-bold">Recent</p>
                    <button type="button" class="close opacity-1 p-2" aria-label="Close" onClick="showNews('recent')">
                        <i class="fas fa-chevron-up"></i>
                    </button>
                </div>
                <ul class="list-unstyled pl-3">
                <li class="py-1">
                    <a href="<?php echo base_url ('news'); ?>">
                    Year End Promo - Crazy Offer
                    </a>
                </li>
                <li class="py-1  news-item-active">
                    <a href="<?php echo base_url ('news/momijigari-festival-oktober'); ?>">
                    Momijigari Festival 26-27 Oktober, Keriuhan di Penghujung Bulan Oktober
                    </a>
                </li>
                  <li class="py-1">
                    <a href="<?php echo base_url ('news/serah-terima-unit-phase-1'); ?>">
                    Serah Terima Unit Phase 1
                    </a>
                  </li>
                  <li class="py-1">
                    <a href="<?php echo base_url ('news/customer-gathering-event-get-special-discount-and-gift'); ?>">
                      Customer Gathering Event: Get Special Discount and Gift
                    </a>
                  </li>
				          <li class="py-1">
                    <a href="<?php echo base_url ('news/penandatanganan-kerjasama-dengan-bank-mandiri-dan-bank-bni-syariah'); ?>">
                    Penandatanganan Kerjasama dengan Bank Mandiri dan Bank BNI Syariah
                    </a>
                  </li>
                  <li class="py-1">
                    <a href="<?php echo base_url ('news/moda-transportasi-dan-akses-semakin-lengkap-properti-di-bogor-semakin-menjanjikan'); ?>">
                    Moda Transportasi dan Akses Semakin Lengkap, Properti di Bogor Semakin Menjanjikan.
                    </a>
                  </li>
                </ul>
            </div>

            <div class="news-sidebar inactive" id="aug_19">
                <div class="d-flex flex-row">
                    <p class="text-muted py-2 m-0 h5 font-weight-bold">August 2019</p>
                    <button type="button" class="close opacity-1 p-2" aria-label="Close" onClick="showNews('aug_19')">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <ul class="list-unstyled pl-3">
                </ul>
            </div>

            <div class="news-sidebar inactive" id="jul_19">
                <div class="d-flex flex-row">
                    <p class="text-muted py-2 m-0 h5 font-weight-bold">July 2019</p>
                    <button type="button" class="close opacity-1 p-2" aria-label="Close" onClick="showNews('jul_19')">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
            </div>

            <div class="news-sidebar inactive" id="jun_19">
                <div class="d-flex flex-row">
                    <p class="text-muted py-2 m-0 h5 font-weight-bold">June 2019</p>
                    <button type="button" class="close opacity-1 p-2" aria-label="Close" onClick="showNews('jun_19')">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
            </div>

        </div> <!-- END NEWS SIDE BAR -->

        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
              <h3 class="news-title">Momijigari Festival 26-27 Oktober, Keriuhan di Penghujung Bulan Oktober</h3>
              <p class="news-date text-italic text-muted">26 - 27 Oktober 2019</p>
			      </div>
            <div class="pl-3 pt-3 news-content">
              <p>
                Tanggal 26-27 Oktober yang lalu, Green bamboo Terrace mengadakan acara yang diberi tajuk “MOMIJIGARI FESTIVAL” yang memiliki arti memandang bunga Momiji. Ini adalah salah satu kebiasaan warga di beberapa kota di Jepang, saat musim gugur tiba menjelang musim salju. Dimana keluarga pergi piknik bersama dan memandangi kumpulan bunga momiji yang berguguran. Terinspirasi kebiasaan tersebut, Green Bamboo Terrace juga mengadakan acara Momijigari yang juga kebetulan nama salah satu type rumah nya adalah Type Momiji.
              </p>
              <p>
                Acara yang dihelat mulai dari jam 09.00 hingga pukul 18.00 tersebut, lebih kepada konsep acara Customer Gathering. Dimana customer yang datang, akan diajak melihat rumah contoh, dan berkeliling di seluruh Site Projects, kemudian akan diajak untuk menikmati hidangan khas Jepang di Club House Green Bamboo Terrace, serta makanan dan minuman lainnya. Ada hal yang juga tak kalah menarik adalah disediakannya PhotoBooth dengan latar belakang gunung Fuji dan bunga Momiji, dan customer yang datang dapat berfoto menggunakan Yukata.
              </p>
              <p>
                Antusiasme pada acara Momijigari Festival  ditunjukkan dengan banyaknya calon customer  yang hadir pada saat acara berlangsung. Selama 2 hari sabtu dan minggu tersebut. Hujan deras tak menyurutkan semangat  para customer  ini datang baik karena undangan dari team sales maupun mereka yang kebetulan melewati proyek.
              </p>
              <p>
                Pada acara Momijigari Festival tersebut, Green Bamboo Terrace menawarkan aneka promo. Promo tersebut antara lain, KPR DP 5%, Discount KPR 5%, serta hadiah 1 buah Android TV 43’ untuk customer yang booking di acara tersebut, Cash Bertahap harga 12x yang ditarik menjadi 24x, Cash Keras yang bisa dibayarkan selama 6x. dan paling penting adalah Rumah yang ditawarkan di Green Bamboo Terrace sudah Ready Stock.
              </p>
              <p>
                Sampai bertemu di events Green Bamboo Terrace lainnya!
              </p>
              <div class="row">
                <div class="col-12 col-sm-6 mb-3">
                  <img class="img-fluid" src="<?= base_url();?>assets/images/news/momijigari-festival-20191.jpg" alt="Momijigari Festival">
                </div>
                <div class="col-12 col-sm-6 mb-3">
                  <img class="img-fluid" src="<?= base_url();?>assets/images/news/momijigari-festival-20192.jpg" alt="Momijigari Festival">
                </div>
                <div class="col-12 col-sm-6 mb-3">
                  <img class="img-fluid" src="<?= base_url();?>assets/images/news/momijigari-festival-20193.jpg" alt="Momijigari Festival">
                </div>
                <div class="col-12 col-sm-6 mb-3">
                  <img class="img-fluid" src="<?= base_url();?>assets/images/news/momijigari-festival-20194.jpg" alt="Momijigari Festival">
                </div>
                <div class="col-12 col-sm-6 mb-3">
                  <img class="img-fluid" src="<?= base_url();?>assets/images/news/momijigari-festival-20195.jpg" alt="Momijigari Festival">
                </div>
                <div class="col-12 col-sm-6 mb-3">
                  <img class="img-fluid" src="<?= base_url();?>assets/images/news/momijigari-festival-20196.jpg" alt="Momijigari Festival">
                </div>
              </div>
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