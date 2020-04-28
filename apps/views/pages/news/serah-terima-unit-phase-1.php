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
                    <a href="<?php echo base_url ('news/beli-rumah-di-green-bamboo-terrace-dengan-cara-kpr'); ?>">
                    Beli Rumah Di Green Bamboo Terrace Dengan Cara KPR
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/membangun-impian-bersama-green-bamboo-terrace'); ?>">
                    Membangun Impian Bersama Green Bamboo Terrace
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/fasilitas-lengkap-di-green-bamboo-terrace'); ?>">
                    Fasilitas Lengkap di Green Bamboo Terrace
                    </a>
                </li>
                <!-- <li class="py-1">
                    <a href="<?php echo base_url ('news/hanami-festival'); ?>">
                    Hanami Festival
                    </a>
                </li> -->
                <li class="py-1">
                    <a href="<?php echo base_url ('news/dibangun-dulu-baru-dijual'); ?>">
                    Dibangun dulu, Baru dijual…
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/kunjungan-dari-sumitomo-mitsui-banking-corporation-japan'); ?>">
                    Kunjungan Dari Sumitomo Mitsui Banking Corporation Japan
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/february-ai-promo'); ?>">
                    February AI Promo
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/penandatanganan-ajb-dan-balik-nama-unit-di-green-bamboo-terrace'); ?>">
                    Penandatanganan AJB dan Balik Nama Unit di Green Bamboo Terrace
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/berburu-promo-green-bamboo-terrace-bogor-di-awal-tahun-2020'); ?>">
                    Berburu Promo Green Bamboo Terrace Bogor di Awal tahun 2020
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/year-end-promo-crazy-offer'); ?>">
                    Year End Promo - Crazy Offer
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/momijigari-festival-oktober'); ?>">
                    Momijigari Festival 26-27 Oktober, Keriuhan di Penghujung Bulan Oktober
                    </a>
                </li>
                  <li class="py-1 news-item-active">
                    Serah Terima Unit Phase 1
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

            <div class="news-sidebar --no-news inactive" id="aug_19">
                <div class="d-flex flex-row">
                    <p class="text-muted py-2 m-0 h5 font-weight-bold">August 2019</p>
                    <button type="button" class="close opacity-1 p-2" aria-label="Close" onClick="showNews('aug_19')">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <ul class="list-unstyled pl-3">
                </ul>
            </div>

            <div class="news-sidebar --no-news inactive" id="jul_19">
                <div class="d-flex flex-row">
                    <p class="text-muted py-2 m-0 h5 font-weight-bold">July 2019</p>
                    <button type="button" class="close opacity-1 p-2" aria-label="Close" onClick="showNews('jul_19')">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
            </div>

            <div class="news-sidebar --no-news inactive" id="jun_19">
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
              <h3 class="news-title">Serah Terima Unit Phase 1</h3>
              <p class="news-date text-italic text-muted">21 Oktober 2019</p>
			      </div>
            <div class="pl-3 pt-3 news-content">
              <div class="d-inline-block text-center mb-4">
                <img class="img-fluid" src="<?= base_url();?>assets/images/news/serah-terima-unit-phase-1-1.jpg" alt="Serah Terima Unit Rumah">
                <small class="d-block">
                  Serah Terima Unit Phase 1
                </small>
              </div>
              <p>
                Oktober 2019, Bogor – Green Bamboo Terrace
              </p>
              <p>
                Bertempat di Marketing Gallery Green Bamboo Terrace Tajur-Bogor, telah dimulai serah terima unit Phase 1 perumahan Green Bamboo Terrace. Proses serah terima ini dimulai dengan mengundang customer yang sudah lunas terlebih dahulu, kemudian disusul oleh customer yang sudah membayar 20% dari total harga rumah dan PPJB sudah dilakukan.
              </p>
              <p>
                Setelah melewati serangkaian checklist pemeriksaan oleh Developer, kemudian checklist pemeriksaan oleh customer. Akhirnya serah terima unit dapat dilakukan. Unit awal yang serah terima adalah unit di Blok F unit No.20,No.21,No17 dan No.22. Dan segera menyusul unit-unit yang lain, yang akan dimulai di bulan November 2019.
              </p>
              <p>
                Serah terima unit di Perumahan Green Bamboo Terrace ini  menandakan bukti ditepatinya janji dari pihak PT. KBJ sebagai Developer  bahwa mulai bulan September 2019, pembeli sudah bisa menerima kunci unit yang dimiliki untuk segera dihuni.
              </p>
				      <p>
                “Memang sesuai dengan motto nya yakni komitmen dan kualitas, PT. KBJ selalu menepati janjinya dan mempersembahkan kualitas properti terbaik untuk para konsumen,” ungkap Direktur PT KBJ T.Ivan Mukmin dalam pernyataan resminya, sabtu (21/10/2019). Unit di Green Bamboo Terrace  masih tersedia , sehingga kesempatan untuk para pembeli yang memiliki rumah  dengan harga rendah dan kualitas baik masih terbuka.” Tambahnya.
              </p>
              <p>
                Ibu Trina, sebagai salah satu penghuni di Green Bamboo Terrace mengaku sangat puas dengan kualitas rumah yang di serah terimakan, serta detail-detail penggunaan bahan material yang bagus juga mendapatkan apresiasi dari Ibu Trina, tak lup lokasi yang sangat strategis dan lingkungan yang sangat nyaman membuatnya jatuh hati pada perumahan Green Bamboo Terrace.
              </p>
              <p>
                Green Bamboo Terrace adalah sebuah masterpiece dari PT. KBJ sebagai developer Jepang yang mulai menancapkan kukunya di property utamanya perumahan di kota bogor. Phase 1 perumahan Green Bamboo Terrace  ini terdiri dari 38 unit yang seluruhnya segera siap diserahterimakan dan dihuni. Dari total 106 unit nantinya.
              </p>
            </div>
        </div>
    </div>
</div>

<!-- return to top -->
<!-- <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a> -->
<!-- <a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.."
    class="floating-whatsapp" target="_blank" rel="noopener noreferrer">
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