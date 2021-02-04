<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>

<style>
    .indent-2em {
        text-indent: 2em;
    }
    .pl-2em {
        padding-left: 2em;
    }
</style>

<div style="color: #000;background-color:#fff;text-align:left;padding: 120px 5% 20px 5%;text-align: justify;">
<div style="margin: 20px 0;">
        <ul class="breadcrumbdesign">
            <li><?php echo '<a href="'.base_url().'">Beranda</a>' ?></li>
            <li><a href="<?= site_url(['news'])?>">Berita</a></li>
            <li>
                <a href="<?php echo base_url ('news/kenapa-harus-punya-rumah-di-bogor'); ?>">
                Kenapa Harus Punya Rumah Di Bogor
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
                <h3 class="news-title">Kenapa Harus Punya Rumah Di Bogor</h3>
                <p class="news-date text-italic text-muted">Kamis, 4 Februari 2021</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="section-news">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <picture>
                            <source srcset="<?= base_url();?>assets/images/news/2021/feb/kenapa-harus.webp" type="image/webp"/>
                            <img class="mb-4 img-fluid" src="<?= base_url();?>assets/images/news/2021/feb/kenapa-harus.jpg" alt="Awali Keputusan Terbaik 2021">
                            </picture>
                        </div>
                    </div>
                    <div class="">
                        <p class="indent-2em">Bogor merupakan kawasan penyangga Jakarta yang banyak diincar calon pembeli rumah. Banyaknya pencari hunian yang mencari rumah di kawasan Bogor disebabkan daerah ini memiliki akses jalan yang bagus dan ragam infrastruktur yang memadai sehingga dapat mempermudah aksesibilitas warganya untuk beraktivitas contohnya seperti bekerja ke Jakarta. </p>
                        <p class="indent-2em">Kawasan Bogor sangat cocok untuk dijadikan lokasi tempat tinggal, daerah ini memiliki banyak kelebihan jika dibandingkan kawasan penyangga lainnya. Seperti udaranya yang masih sejuk, asri, kualitas air yang bersih hingga lokasinya yang berdekatan dengan Jakarta.  </p>
                        <p class="indent-2em">Berikut beberapa alasan mengapa Kota Bogor banyak dipilih menjadi tempat tinggal:</p>

                        <div class="mt-3 pl-md-3 ml-md-3">
                            <ol class="ml-3" type="1">
                                <li class="font-weight-bold">
                                    <b>Biaya Hidup Cukup Murah</b>
                                    <div class="font-weight-normal">
                                        <p class="indent-2em">Meskipun masih termasuk dalam wilayah Jabodetabek (Jakarta-Bogor-Depok-Tangerang-Bekasi) yang merupakan kawasan metropolitan Jakarta, biaya hidup di Kota Bogor masih tergolong cukup murah.</p>
                                        <p class="indent-2em">Jika dibandingkan dengan Jakarta, gaya hidup di Bogor tidak mendorong orang untuk menjadi konsumtif.</p>
                                        <p class="indent-2em">Contohnya saja dilihat dari tingkat kemacetan Jakarta, ketika malas terjebak macet biasanya lebih memilih melipir terlebih dahulu ke kafe.</p>
                                        <p class="indent-2em">Namun, untuk persoalan biaya hidup, hal ini kembali lagi kepada masing-masing orang. Apakah memilih gaya hidup yang konsumtif atau hemat.</p>
                                    </div>
                                </li>
                                <li class="font-weight-bold">
                                    <b>Harga Properti Cukup Terjangkau</b>
                                    <div class="font-weight-normal">
                                        <p class="indent-2em">Salah satu alasan utama kenapa Bogor masih layak dijadikan tempat tinggal oleh pendatang baru adalah karena harga properti di Bogor yang cukup terjangkau.</p>
                                        <p class="indent-2em">Misalnya saja tanah di Bogor, harga pasarannya masih cukup terjangkau, khususnya di daerah pinggiran.</p>
                                        <p class="indent-2em">Bukan rahasia lagi kalau harga properti di Jakarta sudah sangat melambung tinggi dan sudah nyaris sulit dibeli.</p>
                                        <p class="indent-2em">Oleh karena itu, kalau kamu ingin tinggal di kawasan Jabodetabek, Bogor adalah pilihan kota yang tepat.</p>
                                    </div>
                                </li>
                                <li class="font-weight-bold">
                                    <b>Akses Mudah</b>
                                    <div class="font-weight-normal">
                                        <p class="indent-2em">Bogor adalah salah satu kota di Jabodetabek yang letaknya dekat dengan Jakarta, kurang lebih sekitar 53,5 km atau satu jam menggunakan KRL.</p>
                                        <p class="indent-2em">Selain menggunakan KRL, kamu juga bisa dengan mudah menggunakan kendaraan pribadi ke Jakarta atau kawasan Central Business District (CBD) seperti Depok, Cibubur, Tangerang, atau Bekasi.</p>
                                        <p class="indent-2em">Kemudahan akses Kota Bogor kini juga didukung dengan banyaknya pengembangan hunian berkonsep transit oriented atau mengoptimalkan daerah transit.</p>
                                    </div>
                                </li>
                                <li class="font-weight-bold">
                                    <b>Lingkungannya Asri dan Nyaman</b>
                                    <div class="font-weight-normal">
                                        <p class="indent-2em">Mirip seperti Kota Bandung, Bogor terletak di dataran tinggi dan diapit oleh dua buah gunung, yakni Gunung Salak dan Gunung Gede.</p>
                                        <p class="indent-2em">Maka tak heran jika udara di kota ini terasa sangat sejuk dan nyaman, sehingga sangat cocok untuk kamu yang tidak suka suasana panas.</p>
                                        <p class="indent-2em">Selain itu, Bogor juga dijuluki sebagai Kota Hujan. Julukan tersebut diambil karena kota ini memang sering diguyur hujan dibandingkan dengan daerah lainnya.</p>
                                    </div>
                                </li>
                                <li class="font-weight-bold">
                                    <b>Infrastruktur Lengkap dan Rapi</b>
                                    <div class="font-weight-normal">
                                        <p class="indent-2em">Termasuk sebagai kawasan Jabodetabek, Bogor sudah memiliki infrastruktur yang memadai dan maju.</p>
                                        <p class="indent-2em">Bisa dibilang, tinggal di Bogor sebenarnya tidak berbeda jauh dengan tinggal di Jakarta jika berbicara soal infrastruktur.</p>
                                        <p class="indent-2em">Fasilitas umumnya juga sudah sangat lengkap seperti pendidikan, kesehatan, pusat perbelanjaan, dan sebagainya.</p>
                                    </div>
                                </li>
                                <li class="font-weight-bold">
                                    <b>Lebih Aman dari Banjir</b>
                                    <div class="font-weight-normal">
                                        <p class="indent-2em">Masyarakat Jakarta pasti sudah paham adanya banjir tahunan yang kerap terjadi, bahkan diselingi banjir besar setiap 5 tahun.</p>
                                        <p class="indent-2em">Beda halnya dengan Bogor, letaknya yang berada di dataran tinggi membuatnya lebih aman dari ancaman banjir.</p>
                                        <p class="indent-2em">Tak hanya itu, penduduk Bogor juga tidak sepadat Jakarta.</p>
                                        <p class="indent-2em">Artinya, masalah sampah pun tidak sebesar Jakarta.</p>
                                    </div>
                                </li>
                                <li class="font-weight-bold">
                                    <b>Potensi Wilayah Terus Berkembang</b>
                                    <div class="font-weight-normal">
                                        <p class="indent-2em">Untuk kamu yang ingin investasi di bidang properti, Kota Bogor adalah pilihan yang tepat karena potensi wilayahnya yang terus berkembang.</p>
                                        <p class="indent-2em">Tidak menutup kemungkinan jika harga tanah atau rumah di Bogor akan melambung tinggi di masa-masa mendatang.</p>
                                        <p class="indent-2em">Tak hanya itu saja, tempat wisata di Bogor pun terbilang sangat banyak dan menarik untuk dikunjungi.</p>
                                        <p class="indent-2em">Tingginya kebutuhan akan tempat tinggal, dan Kota Bogor banyak dipilih menjadi tempat tinggal, membuat para developer semakin agresif mengembangkan properti di Kota Bogor. Yang artinya semakin lama Anda menunda rencana investasi rumah, semakin sulit Anda menemukan lahan perumahan dengan lokasi strategis dengan harga yang terjangkau. Harga rumah yang terus melambung menjadikan rumah sebagai salah satu bentuk investasi yang sangat menjanjikan. Selain untuk investasi pribadi, rumah juga menjadi investasi bagi keluarga Anda nantinya. Amankan investasi tersebut sedini mungkin bersama <i>Green Bamboo Terrace</i>.</p>
                                        <p class="indent-2em"><i>Green Bamboo Terrace</i> dari developer Jepang memberikan hunian yang terbaik untuk Anda dan keluarga, dengan standar bahan material premium dan bergaransi yang kami gunakan.</p>
                                        <p class="indent-2em font-weight-bold">Dengan konsep rumah  modern minimalis yang lebih exclusive dan private yang siap huni juga memiliki fasilitas yang sangat lengkap. </p>
                                        <p class="indent-2em">Fasilitas yang tersedia di perumahan <i>Green Bamboo Terrace</i> adalah :</p>
                                        <ul class="ml-5 pl-3 mb-3">
                                            <li>Club House</li>
                                            <li>Children Pool</li>
                                            <li>Garden with kids playground (taman)</li>
                                            <li>Mushola</li>
                                            <li>Security dan CCTV 24 Jam</li>
                                            <li>Jaringan Listrik bawah Tanah</li>
                                            <li>PDAM, (Line Telepon dan Line Internet belum tersedia hanya disiapkan jalur saja)</li>
                                            <li>Lebar jalan utama 11 Meter dan lebar jalan rumah 8 meter.</li>
                                        </ul>
                                        <p class="indent-2em">Mari  datang dan kunjungi show unit kami Senin – Minggu pukul 09.00-17.00, atau juga dapat menghubungi kami di <a href="tel:628111403280">0811 1403 280</a>.</p>
                                    </div>
                                </li>
                            </ol>
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
    $('#' + id + ' ul').slideToggle();
    $('#' + id + ' i').toggleClass('fa-chevron-up').toggleClass('fa-chevron-down');
    $('#' + id + ' .inactive ul').css('display', 'block');
}
</script>