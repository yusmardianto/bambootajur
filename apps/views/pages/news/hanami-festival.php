<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>

<style>
    .indent-2em {
        text-indent: 2em;
    }
    .mar-news_wrapper {
        max-height: 210px;
        overflow: hidden;
    }
    @media only screen and (max-width: 1024px) {
        .mar-news_wrapper {
        max-height: 153px;
        }
    }
    @media only screen and (max-width: 768px) {
        .mar-news_wrapper {
        max-height: 110px;
        }
    }
    @media only screen and (max-width: 415px) {
        .mar-news_wrapper {
        max-height: 76px;
        }
    }
    @media only screen and (max-width: 320px) {
        .mar-news_wrapper {
        max-height: 63px;
        }
    }
</style>

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
                <li class="py-1 news-item-active">
                    <a href="<?php echo base_url ('news/hanami-festival'); ?>">
                    Hanami Festival
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/dibangun-dulu-baru-dijual'); ?>">
                    Dibangun dulu, Baru dijual…
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
                <h1 class="news__page-title">Informasi dan Promo</h1>
                <h3 class="news-title">HANAMI FESTIVAL</h3>
                <p class="news-date text-italic text-muted">Senin, 16 Maret 2020</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="row section-news">
                    <div class="col-12 col-md-12">
                        <div class="mb-4 febpromo-p">
                            <div class="text-center">
                                <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/home/promo-hanami.png" alt="Hanami Festival">
                            </div>

                            <p class="indent-2em"><b>It’s Festival Time…</b></p>

                            <p class="indent-2em">
                                Setelah sukses dengan acara <b>Momijigari</b> yang dilakukan di penghujung Oktober 2019 yang telah lalu, kini <i>Green Bamboo Terrace</i> mengadakan sebuah event Customer Gathering yang diberi nama <b>Hanami Festival</b>.
                            </p>

                            <p class="indent-2em">
                                <b>Hanami Festival</b> atau yang dikenal juga dengan istilah <b>Cherry Blossom Festival</b> akan dihelat pada tanggal <b>25 Maret 2020</b> nanti, yang mengambil tempat di Club House yang menjadi salah satu fasilitas yang dimiliki oleh perumahan <i>Green Bamboo Terrace</i>. 
                            </p>

                            <p class="indent-2em">
                                <b>Hanami</b> berasal dari <i>hana wo miru</i> yang berarti melihat bunga atau ohanami. Inilah tradisi Jepang dalam menikmati keindahan bunga, khususnya bunga sakura. Selain itu, Hanami juga bisa diartikan sebagai piknik dengan menggelar tikar untuk pesta makan-makan di bawah pohon sakura. Biasanya Hanami dilakukan saat musim semi telah tiba, selepas musim dingin / musim salju di Jepang.
                            </p>

                            <p class="indent-2em">
                                Dikisahkan pula bahwa Raja Saga di era Jepang dahulu gemar menyelenggarakan pesta Hanami di taman <b>Shinsenen</b> di Kyoto. Para bangsawan pun menikmati Hanami di berbagai istana mereka, dan para petani di masa itu melakukannya dengan mendaki gunung terdekat di awal musim semi untuk menikmati bunga sakura yang tumbuh di sana sambil tidak lupa membawa bekal untuk makan siang. Hingga kini Hanami menjadi kebiasaan yang mengakar di seluruh masyarakat Jepang dan telah diterima sebagai salah satu kekhasan bangsanya.
                            </p>

                            <p class="indent-2em">
                                Hanami Festival yang diadakan di perumahan <i>Green Bamboo Terrace</i> adalah sebuah Thematic Customer Gathering yang rutin diadakan sebagai bentuk apresiasi dan juga perkenalan kepada customer-customer <i>Green Bamboo Terrace</i>. Kali ini mengambil tema Hanami yang bertepatan juga musim semi di beberapa kawasan di Jepang.
                            </p>

                            <p class="indent-2em">
                                Pada acara Hanami festival yang akan diselenggarakan 25 Maret nanti, <i>Green Bamboo Terrace</i> juga memberikan banyak sekali <i>special gift</i> dan juga special <i>payment terms</i>. Special payment terms, akan diberlakukan di acara Hanami Festival nanti adalah cara bayar <i>Hardcash</i> yang dapat dicicil 6x tanpa dikenakan bunga.dan untuk cara bayar KPR, cukup dengan <i>Down Payment 5%</i> yang juga dapat dicicil sebanyak 3x. 
                            </p>

                            <p class="indent-2em">
                                Kemudian untuk <i>Special Gift</i> yang akan didapatkan khusus di acara <i>Hanami Festival</i> nanti adalah Iphone 11 untuk transaksi Booking di hari H, juga selain itu mendapatkan 1 unit AC Mitsubishi dengan daya 1 PK, 1 buah Dispenser dan water filter Toclas, 2 Buah Water Tank, dan 1 buah water heater, juga Free BPHTB untuk cara bayar KPR.
                            </p>

                        </div>
                        
                        <div class="form-row mb-4 mar-news_wrapper">
                            <div class="col-7">
                                <img class="img-fluid" style="width: 100%" src="<?= base_url();?>assets/images/news/mar/hanami-festival-1.png" alt="Hanami Festival in Japan">
                            </div>
                            <div class="col-5">
                                <img class=" img-fluid" src="<?= base_url();?>assets/images/news/mar/hanami-festival-2.png" alt="Hanami Festival in Japan 2">
                            </div>
                        </div>

                        <p class="indent-2em">
                            Untuk menambah semarak acara <i>Hanami Festival</i> ini, juga disediakan Photobooth dengan pakaian tradisional Jepang yaitu Yukata, dengan latar belakang bunga Sakura yang indah. Pengunjung di acara ini juga dimanjakan dengan berbagai kuliner khas Jepang yang akan menambah keseruan acara <i>Hanami Festival</i> nanti yang diadakan di salah satu fasilitas perumahan <i>Green Bamboo Terrace</i> yaitu Club House <i>Green Bamboo Terrace</i>.
                        </p>

                        <div class="text-center">
                            <div class="row">
                                <div class="offset-sm-2 col-sm-8">
                                    <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/mar/hanami-festival-3.png" alt="Hanami Festival">
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 feb-promo-p">
                            <p class="indent-2em">
                            Kami mengundang seluruh bapak dan ibu yang sedang mencari rumah, baik untuk investasi maupun untuk tempat tinggal, serta seluruh customer kami yang sudah membeli unit di <i>Green Bamboo Terrace</i> untuk datang, melihat, berpartisipasi, dan memeriahkan acara yang sangat unik ini,yang bertempat di Clubhouse perumahan <i>Green Bamboo Terrace</i>. Serta menangkan banyak hadiah-hadiah special, cara bayar special, di acara Hanami Festival Customer Gathering ini.
                            </p>
                            <p class="indent-2em">
                                Sampai Jumpa di tanggal 25 Maret 2020 di <i>Green Bamboo Terrace</i>..
                            </p>
                        </div>
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
    $('#' + id + ' ul').toggle();
    $('#' + id + ' i').toggleClass('fa-chevron-up').toggleClass('fa-chevron-down');
    $('#' + id + ' .inactive ul').css('display', 'block');
}
</script>