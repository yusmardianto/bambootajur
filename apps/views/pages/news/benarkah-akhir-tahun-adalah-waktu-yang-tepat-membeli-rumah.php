<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>

<style>
    .indent-2em {
        text-indent: 2em;
    }
</style>

<div style="color: #000;background-color:#fff;text-align:left;padding: 120px 5% 20px 5%;text-align: justify;">
<div style="margin: 20px 0;">
        <ul class="breadcrumbdesign">
            <li><?php echo '<a href="'.base_url().'">Beranda</a>' ?></li>
            <li><a href="<?= site_url(['news'])?>">Berita</a></li>
            <li>
                <a href="<?php echo base_url ('news/benarkah-akhir-tahun-adalah-waktu-yang-tepat-membeli-rumah'); ?>">
                Benarkah Akhir Tahun Adalah Waktu Yang Tepat Membeli Rumah?
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
                <h3 class="news-title">Benarkah Akhir Tahun Adalah Waktu Yang Tepat Membeli Rumah?</h3>
                <p class="news-date text-italic text-muted">Jumat, 4 Desember 2020</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="row section-news">
                    <div class="col-12 col-md-12">
                        <picture>
                          <source srcset="<?= base_url();?>assets/images/news/dec/last-offer-dec-2020.webp" type="image/webp"/>
                          <img class="mb-4 d-block mx-auto" src="<?= base_url();?>assets/images/news/dec/last-offer-dec-2020.jpg" style="max-width: 400px;" alt="Last Offer 2020 Promo Akhir Tahun">
                        </picture>
                        <p class="mb-4 indent-2em">
                        Harga rumah selalu meningkat. Itu sebabnya, menunda kepemilikan rumah saat ini hanya membuat Anda harus menyediakan uang lebih banyak untuk beli rumah di masa depan. Bahkan di saat <em>pandemic</em> seperti saat ini pun, harga rumah tidak pernah turun akan tetapi malah naik harganya.  
                        </p>
                        <p class="mb-4 indent-2em">
                        Kebutuhan akan tempat tinggal tak bisa terelakkan, dan menjadi salah satu kebutuhan primer manusia setelah <em>Sandang, Pangan, yaitu Papan (tempat tinggal)</em>. 
                        </p>
                        <p class="mb-4 indent-2em">
                        Akhir Tahun 2020 ini adalah waktu yang paling tepat bagi Anda untuk mencari properti, utamanya rumah tinggal. Dikarenakan hampir semua developer berlomba-lomba memberikan promo terbaik dengan promo akhir tahunnya. Mulai dari kemudahan cara bayar, hingga discount yang sangat besar. 
                        </p>
                        <p class="mb-4 indent-2em">
                        <em>Green Bamboo Terrace</em> yaitu perumahan yang sudah siap huni yang terletak di kawasan Tajur Kota Bogor juga memberikan promo yang tidak biasa yang diberi nama “<em>Last Offers Promo</em>”. 
                        </p>
                        <p class="mb-4 indent-2em">
                        Promo “Last Offers” ini adalah promo terbaik dan terlengkap yang diberikan oleh Green Bamboo Terrace. Mulai dari kemudahan uang muka hingga diskon ratusan juta, bahkan masih mendapatkan banyak bonus juga. Bonus yang diberikan yaitu 1 unit AC Mitsubishi 1 PK, 1 Unit Dispenser Merk Toclas, 1 Filter air Merk Toclas, 2 unit Torren air, dan Canopy yang kesemuanya telah terpasang saat serah terima unit rumah nantinya.
                        </p>
                        <p class="mb-4 indent-2em">
                        Sedang untuk kemudahan cara bayar Green Bamboo Terrace juga memiliki cara bayar HardCash, Instalment 6x dan 12x bayar, serta KPR dengan DP 0% dan DP 5% yang dapat dicicil 3X serta Free BPHTB untuk cara bayar KPR. 
                        </p>
                        <p class="mb-4 indent-2em">
                        Untuk cara bayar KPR, <em>Green Bamboo Terrace</em> telah bekerja sama dengan Bank-Bank terkemuka di Indonesia yaitu : Bank BRI, Bank Mandiri, Bank Mandiri Syariah, Bank BNI Syariah, Bank Panin, dan Jtrust Bank. Yang masing-masing memiliki penawaran-penawaran terbaik yang dapat dipilih oleh pembeli unit di <em>Green Bamboo Terrace</em>.
                        </p>

                        <picture>
                          <source srcset="<?= base_url();?>assets/images/news/dec/house-benefit.webp" type="image/webp"/>
                          <img class="mb-4 img-fluid" src="<?= base_url();?>assets/images/news/dec/house-benefit.jpg" alt="What does house can give you?">
                        </picture>

                        <p class="mb-4 indent-2em">
                        Di <em>Green Bamboo Terrace</em>, kami membangun rumah bukan hanya sekedar bangunan tempat tinggal saja, tapi kami juga memberikan sebuah lingkungan yang Aman, Nyaman, Private dan Exclusive, juga rasa premium yang didapatkan dari penggunaan material-material terbaik berstandar Jepang, serta lokasi yang berada di tengah-tengah lokasi niaga di Kota Bogor.
                        </p>
                        <p class="mb-4 indent-2em">
                        Mari kunjungi lokasi perumahan kami di Jl. Raya Tajur (Samping Unitex) Kota Bogor, atau dapat menghubungi kami di <a href="tel:+628111403280" style="text-decoration:none; color: black;">0811 1403 280</a>.
                        </p>
                        <p style="font-size: 24px; font-weight: bold;" class="mb-4">Jangan Lewatkan Penawaran Terbaik ini!!
                        </p>
                    </div>
                </div>
                

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
    $('#' + id + ' ul').slideToggle();
    $('#' + id + ' i').toggleClass('fa-chevron-up').toggleClass('fa-chevron-down');
    $('#' + id + ' .inactive ul').css('display', 'block');
}
</script>