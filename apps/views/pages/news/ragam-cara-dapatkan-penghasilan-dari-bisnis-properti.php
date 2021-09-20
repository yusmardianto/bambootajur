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
    .section-title{
      font-size: 18px;
      font-weight: bold;
      text-decoration: underline;
      text-align: center;
    }
    .list-alpha-bracket{
      list-style-type: none;
    }
    .list-alpha-bracket li:before {
      content: "(" counter(section, lower-alpha) ") ";
      position: absolute;
      left: -25px;
    }
    .list-alpha-bracket li { 
      counter-increment: section;
      position: relative;
    }
</style>

<div style="color: #000;background-color:#fff;text-align:left;padding: 120px 5% 20px 5%;text-align: justify;">
    <div style="margin: 20px 0;">
        <ul class="breadcrumbdesign">
            <li><?php echo '<a href="'.base_url().'">Beranda</a>' ?></li>
            <li><a href="<?= site_url(['berita-dan-promo'])?>">Berita</a></li>
            <li><a href="<?php echo base_url ('berita-dan-promo/ragam-cara-dapatkan-penghasilan-dari-bisnis-properti'); ?>">
            Ragam Cara Dapatkan Penghasilan Dari Bisnis Properti
            </a></li>
        </ul>
    </div>
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <?php include 'sidebar-news.php' ?>
        
        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
                <h1 class="news__page-title">Informasi dan Promo</h1>
                <h3 class="news-title">Ragam Cara Dapatkan Penghasilan Dari Bisnis Properti</h3>
                <p class="news-date text-italic text-muted">Senin, 20 September 2021</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="section-news"> 
                    <div class="row justify-content-center">
                        <div class="col-md-10" style="text-align:center">
                          <picture>
                              <source srcset="<?= base_url();?>assets/images/news/2021/sept/ragam-cara-penghasilan.webp" type="image/webp">
                              <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/2021/sept/ragam-cara-penghasilan.jpg" alt="Uang ekstra di masa pandemi">
                          </picture>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <p class="indent-2em">Sekarang, banyak orang mulai menyadari betapa menguntungkannya berkecimpung di bisnis properti. Tetapi, ada satu hal yang tidak banyak diketahui orang bahwa ternyata banyak cara mendapatkan keuntungan di industri ini. Berikut adalah beberapa ide usaha bisnis properti yang menjanjikan.</p>

                    <h4 class="font-weight-bold">Investor Properti</h4>

                    <p class="indent-2em">Salah satu properti bisnis properti yang “klasik” dan berprospek bagus adalah dengan menjadi investor properti. Dengan memiliki properti sendiri, kemudian menyewakannya, kamu bisa mendapatkan keuntungan dengan dua cara:</p>
                    <ul class="pl-5">
                      <li>Dari <i>cash flow</i> yang akan kamu dapatkan dari hasil sewa tiap bulan</li>
                      <li>Dari meningkatnya ekuitas properti kamu dari waktu ke waktu. </li>
                    </ul>
                    <p class="indent-2em">Keuntungannya akan didapatkan dengan cara menjual properti tersebut. Di antara keduanya, menjadi investor properti sangat berpotensi karena dapat menghasilkan <i>cash flow</i> dan, tentunya, memiliki aset investasi.</p>
                    <p class="indent-2em">Ide usaha ini bisa menjadi pekerjaan sampingan jika kamu menggunakan jasa perusahaan manajemen properti untuk mengurusi properti rental kamu sehari-hari. Selain itu, kamu juga bisa menjalankan bisnis properti di rumah, meskipun kebanyakan dari pebisnis di usaha ini mempunyai kantor sendiri agar bisa nyaman bekerja.</p>

                    <h4 class="font-weight-bold">Flip Properti</h4>
                    <p class="indent-2em">Di Indonesia, mungkin istilah flip properti belum begitu populer. Tapi di Amerika Serikat, bisnis ini cukup populer karena sempat dipopulerkan melalui beberapa acara di televisi.</p>
                    <p class="indent-2em"><i>Flipper</i>, pegiat bisnis ini, akan membeli rumah yang <i>overcredit</i> dan dijual cepat dengan harga murah, lalu merenovasinya menjadi jauh lebih bagus, lalu menjualnya dengan harga yang fantastis.</p>
                    <p class="indent-2em">Jika modal kamu terbatas, kamu bisa membeli rumah yang dijual murah, tanpa perbaikan, lalu menjualnya kembali dengan harga yang lebih tinggi tapi tetap di bawah harga pasar.</p>
                    <p class="indent-2em">Menjalankan bisnis properti tidak menawarkan keuntungan <i>cash flow</i> layaknya menyewakan properti tersebut tapi, dari penjualan dari properti flip sangat menjanjikan selama kamu mampu mengimbangi agen properti yang lebih kompeten dalam hal analisis pangsa pasar.</p>
                    <p class="indent-2em">Flip properti banyak dijalankan oleh kontraktor umum akan membeli dan melakukan flip beberapa rumah dalam setahun untuk mendapatkan penghasilan tambahan. Ada pula beberapa investor properti yang berkecimpung di bisnis ini. Namun demikian, tidak menutup kemungkinan jika kamu ingin menjadi spesialis dari flip properti itu sendiri.</p>

                    <h4 class="font-weight-bold">Pengelola Properti</h4>
                    <p class="indent-2em">Ada kesalahpahaman yang cukup umum dijumpai di masyarakat awam: Kamu harus memiliki properti sendiri untuk mendapatkan keuntungan di bisnis ini. Jika kamu ingin berkecimpung di industri ini tanpa memiliki properti, kamu bisa mencoba mengelola properti.</p>
                    <p class="indent-2em">Seorang manajer properti akan mengatur masalah pemeliharaan atau bisa bekerja sama dengan pemilik properti untuk mengatur <i>upkeep</i> properti yang disewakan. Biasanya keuntungannya berupa bagi hasil sewa atau cukup melakukan pembayaran biasa.</p>
                    <p class="indent-2em">Meskipun kamu juga bisa mengelola bisnis ini dari rumah, sebaiknya kamu memiliki kantor sendiri karena kamu akan membutuhkan ruang untuk menyimpan inventaris seperti cat, <i>drywall</i>, perkakas, dan kebutuhan pemeliharaan lainnya yang akan dibutuhkan.</p>

                    <h4 class="font-weight-bold"><i>Bird dogs</i></h4>
                    <p class="indent-2em">Investor properti harus menentukan prospek properti yang baik sebelum memulai bisnisnya. Kebutuhan ini akhirnya melahirkan jenis profesi di dunia bisnis properti yang disebut dengan <i>bird dog</i>.</p>
                    <p class="indent-2em">Apa itu <i>bird dog</i>? <i>Bird dog</i> adalah istilah untuk menggambarkan orang yang bekerja untuk mencari properti yang memiliki potensi investasi yang baik.</p>
                    <p class="indent-2em">Seorang <i>bird dog</i> akan mencari penjual properti atau properti itu sendiri dengan maksud menawarkan prospek ini ke investor properti dengan bayaran berupa presentase hasil penjualan atau uang untuk membayar jasa mereka. Karena inilah <i>bird dog</i> bisa disebut sebagai intelegen investor properti.</p>
                    <p class="indent-2em">Istilah <i>bird dog</i> ini umumnya dikaitkan dengan pencarian properti untuk <i>flip</i>, tapi sering juga digunakan dalam konteks mengidentifikasi nilai properti atau sewa rumah.</p>
                    <p class="indent-2em">Profesi ini disebut <i>bird dog</i> karena pekerjaannya serupa seperti anjing pemburu yang dapat menunjukkan lokasi burung sehingga pemburu dapat membidiknya dengan tepat.</p>
        
                    <h4 class="font-weight-bold">Fotografer Properti</h4>
                    <p class="indent-2em">Tidak semua usaha yang dijalankan dalam bisnis properti harus berhubungan langsung dengan properti tersebut. Beberapa di antaranya seperti fotografer akan membantu pemasaran dari properti yang diiklankan.</p>
                    <p class="indent-2em">Fotografer properti akan memotret rumah yang akan dijual atau disewa investor properti dan memajangnya di website sebagai strategi penjualan.</p>
                    <p class="indent-2em">Menjadi seorang fotografer properti, jam kerja kamu nantinya akan disibukkan dengan mengunjungi banyak properti yang akan diambil gambarnya. Rumah yang besar tentunya membutuhkan foto dan waktu yang lebih banyak.</p>
                    <p class="indent-2em">Banyak fotografer properti memilih untuk bekerja di rumah karena pekerjaan yang sesungguhnya dilakukan di lokasi pemotretan.</p>

                    <h4 class="font-weight-bold"><u>Agen Properti</u></h4>
                    <p class="indent-2em">Tidak seperti  <i>bird dog</i> atau <i>flipper</i> yang cenderung baru, profesi agen properti merupakan profesi yang cukup sering dijumpai di bisnis ini sejak pasar properti modern ada. </p>
                    <p class="indent-2em">Bahkan saat ini, kamu bisa memulainya dengan nyaris tanpa modal. Cukup dengan bersedia membantu penjualan unit rumah di Green Bamboo Terrace Bogor, kamu bisa mendapatkan komisi penjualan 1% dengan cepat. </p>
                    <p class="indent-2em">Cukup hubungi : <b>Telp/wa ke 0817 3456 20</b> dan kamu akan dibantu untuk info lebih detailnya. </p>
                    <p class="indent-2em">Dan yang paling tidak kalah penting adalah <b>Mulai dari Sekarang</b></p>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>

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
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://www.bambootajur.com/berita-dan-promo/apa-kata-mereka-mengenai-tinggal-di-green-bamboo-terrace"
  },
  "headline": "Apa Kata Mereka Mengenai Tinggal di Green Bamboo Terrace",
  "description": "Testimoni dari penghuni Green Bamboo Terrace",
  "image": "https://www.bambootajur.com/assets/images/news/apakatamereka.png",  
  "author": {
    "@type": "Organization",
    "name": "Green Bamboo Terrace"
  },  
  "publisher": {
    "@type": "Organization",
    "name": "Kebun Bambu Jakarta",
    "logo": {
      "@type": "ImageObject",
      "url": "https://www.bambootajur.com/assets/images/vendor/kbj.png"
    }
  },
  "datePublished": "2020-07-03",
  "dateModified": "2020-07-03"
}
</script>
