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
                <a href="<?php echo base_url ('news/last-offers-2020-promo-akhir-tahun-2020-dari-green-bamboo-terrace'); ?>">
                Last Offers 2020 – Promo Akhir Tahun 2020 dari Green Bamboo Terrace
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
                <h3 class="news-title">Last Offers 2020 – Promo Akhir Tahun 2020 dari Green Bamboo Terrace</h3>
                <p class="news-date text-italic text-muted">Jumat, 20 November 2020</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="row section-news">
                    <div class="col-12 col-md-12">
                        <picture>
                          <source srcset="<?= base_url();?>assets/images/news/nov/last-offer-2020.webp" type="image/webp"/>
                          <img class="w-100 mb-4" src="<?= base_url();?>assets/images/news/nov/last-offer-2020.jpg" alt="Last Offer 2020 Promo Akhir Tahun">
                        </picture>
                        <p class="mb-4 indent-2em">
                        2020  akan berakhir sebentar lagi. Sebagian besar masyarakat masih berjuang menghadapi imbas lemahnya sektor ekonomi dan finansial akibat pandemik yang sekarang sudah memasuki bulan ke 9 yang menyerang berbagai sector di negara kita. 
                        </p>
                        <p class="mb-4 indent-2em">
                        Lalu bagaimana dengan aktivitas membeli rumah? 
                        </p>
                        <p class="mb-4 indent-2em">
                        Kendati membeli rumah saat ini bukan kegiatan populer, namun tak ada salahnya dicoba. Bahkan, membeli rumah pada saat seperti sekarang ini, banyak keuntungannya. Para pengembang berlomba menggelar promosi akhir tahun dalam bentuk kemudahan pembayaran uang muka, atau potongan harga.
                        </p>
                        <p class="mb-4 indent-2em">
                        Menurut <em>Marketing Manager</em> perumahan <em>Green Bamboo Terrace</em>, Hotris F Siahaan promosi akhir tahun dalam bentuk kemudahan pembayaran uang muka, atau potongan harga juga berlaku untuk perumahan yang sudah siap huni di Kota Bogor ini. 
                        </p>
                        <p class="mb-4 indent-2em">
                        "Kami mulai menawarkan promosi ini sejak awal November hingga akhir Desember 2020" ujar Hotris. 
                        </p>
                        <p class="mb-4 indent-2em">
                        "Kami menawarkan uang muka mulai hanya 59 jutaan yang dapat dicicil 3x atau bahkan bisa tanpa uang muka yang diberikan oleh <em>Bank Syariah Mandiri</em> sebagai mitra KPR kami. Program tanpa uang muka ini hanya diberikan untuk PNS, Peg. BUMN dan Dokter, bahkan kami juga membebaskan biaya BPHTB untuk cara bayar KPR", Tambahnya. 
                        </p>
                        <p class="mb-4 indent-2em">
                        Saat Ini <em>Green Bamboo Terrace</em> menawarkan perumahan yang sudah siap huni yang terdiri dari 2 Type, Yaitu : <em>Type Momiji</em> dengan 2 kamar, dan <em>Type Akane</em> dengan 3 kamar. 
                        </p>
                        <p style="font-weight: bold; font-size: 24px;">Diskon ratusan juta rupiah</p>
                        <p class="mb-4 indent-2em">
                        Dari Kedua type perumahan di <em>Green Bamboo Terrace</em>, yaitu <em>Momiji</em> dan <em>Akane</em>, saat ini Type Momiji hanya tersisa 2 unit lagi saja. Sedangkan untuk unit Akane masih tersedia pilihan-pilihan untuk customer yang ingin memilih luasan tertentu dan nomor rumah tertentu sesuai dengan kebutuhan dan preferensi masing-masing customer. 
                        </p>
                        <p class="mb-4 indent-2em">
                        "Khusus untuk Type Akane, kami memberikan discount dengan cara bayar KPR hingga <strong>150 juta</strong> dan Hardcash hingga <strong>200 juta</strong>," ujar Hotris. “Hal ini dilakukan untuk memberi kemudahan bagi para customer kami untuk mendapatkan rumah siap huni yang menggunakan kualitas material premium berstandar Jepang.” Sambungnya. 
                        </p>
                        <p class="mb-4 indent-2em">
                        Selain Itu, Untuk promo Last Offers ini, Green Bamboo Terrace juga memberikan bonus tambahan yaitu 1 unit AC Mitsubishi 1 PK, 1 Unit Dispenser Merk Toclas, 1 Filter air Merk Toclas, 2 unit Torren air, dan Canopy yang kesemuanya telah terpasang saat serah terima unit rumah nantinya.
                        </p>
                        <p class="mb-4 indent-2em">
                        Promo “Last Offers” ini adalah promo terbaik dan terlengkap yang diberikan oleh Green Bamboo Terrace. Mulai dari kemudahan uang muka hingga diskon ratusan juta, bahkan masih mendapatkan banyak bonus juga.
                        </p>
                        <p class="mb-4 indent-2em">
                        Mari kunjungi lokasi perumahan kami di Jl. Raya Tajur (Samping Unitex) Kota Bogor, atau dapat menghubungi kami di <a href="tel:+628111403280" style="text-decoration:none; color: black;">0811 1403 280</a>, dan jangan lewatkan promo dan kesempatan terbaik ini.
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