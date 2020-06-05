<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>

<style>
    .indent-2em {
        text-indent: 2em;
    }
    .custom-list {
        padding-left: 3em;
    }
    .custom-list li {
        margin-bottom: 15px;
    }
    .custom-list ul {
        padding-left: 2em;
    }
</style>

<div style="color: #000;background-color:#fff;text-align:left;padding: 120px 5% 20px 5%;text-align: justify;">
    <div style="margin: 20px 0;">
        <ul class="breadcrumbdesign">
            <li><?php echo '<a href="'.base_url().'">Beranda</a>' ?></li>
            <li><a href="<?= site_url(['news'])?>">Berita</a></li>
            <li>
                <a href="<?php echo base_url ('news/perawatan-dan-quality-control-berjalan-terus'); ?>">
                Perawatan dan Quality Control Berjalan Terus
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
                <h3 class="news-title">Perawatan dan Quality Control Berjalan Terus</h3>
                <p class="news-date text-italic text-muted">Selasa, 5 Mei 2020</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="row section-news">
                    <div class="col-12 col-md-12">
                        <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/may/perawatan-1.jpg" alt="KPR Perumahan Green Bamboo Terrace">
                        
                        <div class="mb-4 febpromo-p">

                            <p class="indent-2em">Sebagai sebuah perumahan yang siap huni, dengan sebuah standar baru untuk kualitas hunian yang berlokasi di Bogor, <i>Green Bamboo Terrace</i> haruslah tetap menjaga kualitas dan standar mutu bangunan, fasilitas serta lingkungan yang ada di perumahan <i>Green Bamboo Terrace</i>.</p>
                            <p class="indent-2em">Untuk <i>Green Bamboo Terrace</i> sendiri dalam upaya menjaga kualitas dan standar mutu diatas, dilakukan secara berkala oleh Team <i>Quality Control</i> 2x dalam seminggu. Pemeriksaan dilakukan dengan cara yang sangat teliti, dan dilakukan pemeriksaan ke setiap unit rumah yang sudah dibangun. </p>
                            <p class="indent-2em">
                            Adapun poin-poin yang diperiksa setiap minggu nya adalah:
                            <ol class="custom-list">
                                <li>Mutu & Kualitas, dan Kebersihan unit rumah. <br>
                                Di bagian ini, Team <i>Quality Control</i> akan memeriksa dengan seksama setiap ruangan yang ada di dalam unit rumah. Memastikan tidak ada retak-retak rambut, tidak ada cat dinding yang mengelupas atau kotor, tidak ada <i>Homogenous Tile</i> yang retak maupun pecah, tidak ada kebocoran atap maupun kebocoran instalasi air, tidak ada jendela ataupun pintu, serta penunjang lain di dalam rumah yang <i>malfungsi</i>.</li>
                                <li>Memeriksa Jaringan Listrik. <br>
                                Di <i>Green Bamboo Terrace</i>, instalasi listrik yang terpasang sudah menggunakan jaringan listrik bawah tanah. sehingga kelengkapan listrik kawasan juga dilakukan pemeriksaan seperti lampu jalan, kabel, dan <i>switch</i>. Diganti dan diperbaiki jika ada masalah. Hal ini penting untuk memastikan tidak ada gangguan listrik yang dapat menyebabkan banyak masalah dan mengakibatkan aktivitas lumpuh.
                                    <div class="row">
                                        <div class="offset-md-2 col-md-8">
                                            <img class="img-fluid mt-2" src="<?= base_url();?>assets/images/news/may/perawatan-2.jpg" alt="KPR Perumahan Green Bamboo Terrace">
                                        </div>
                                    </div>
                                
                                </li>
                                <li>Perawatan Tanaman dan Pekarangan. <br>
                                Untuk Perawatan Tanaman dan Pekarangan sebenarnya dilakukan oleh <i>Tim Gardener</i> setiap hari. Akan tetapi untuk pemotongan rumput biasanya dilakukan 2 minggu sekali atau apabila dibutuhkan. Khusus untuk Perawatan Tanaman dan Pekarangan memiliki tujuan yang lebih besar lagi yaitu;
                                    <ul class="mt-2">
                                        <li>Lingkungan akan menjadi lebih sehat dan nyaman</li>
                                        <li>Terhindar dari penyakit yang akan ditimbulkan oleh sampah dan kotoran</li>
                                        <li>Lebih tenang dalam menjalankan aktifitas sehari-hari</li>
                                        <li>Udara yang dihasilkan pun akan lebih sejuk</li>
                                    </ul>
                                </li>
                            </ol>
                            </p>
                            <p class="indent-2em">Pentingnya <i>Quality Control</i> tetap berjalan walaupun di masa sulit seperti sekarang adalah untuk memastikan investasi customer untuk pembelian property di <i>Green Bamboo Terrace</i> tetap mendapatkan yang terbaik, sesuai dengan moto dari <i>Green Bamboo Terrace</i> yaitu memberikan hunian terbaik dengan standar baru hunian yang nyaman dan asri, dengan kualitas dan standar Jepang seperti tagline dari <i>Green Bamboo Terrace</i> yakni <i>A Taste Of Japanese Perfection</i>. </p>
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