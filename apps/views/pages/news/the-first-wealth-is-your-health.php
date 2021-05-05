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
            <li><a href="<?php echo base_url ('news/new-normal-new-house-new-you'); ?>">
                The First Wealth is Your Health
                </a></li>
        </ul>
    </div>
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <?php include 'sidebar-news.php' ?>
        
        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
                <h1 class="news__page-title">Informasi dan Promo</h1>
                <h3 class="news-title">THE FIRST WEALTH IS YOUR HEALTH</h3>
                <p class="news-date text-italic text-muted">Jumat, 19 Juni 2020</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="row section-news">
                    <div class="col-12 col-md-12">
                        <div class="row">
                            <div class="offset-md-3 col-md-6">
                                <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/jun/wealth.png" alt="KPR Perumahan Green Bamboo Terrace">
                            </div>
                        </div>
                        
                        <div class="mb-4 febpromo-p">

                            <p class="indent-2em">
                                <b>Mens Sana in Corpore Sano</b> ialah pepatah latin yang memiliki arti  “Jiwa dan Pikiran yang sehat ada di dalam tubuh yang sehat”. Dan bila kondisi kesehatan fisik dan mental saling mendukung, maka produktivitas pun bisa semakin tinggi. 
                            </p>
                            <p class="indent-2em">
                                Semboyan tersebut merupakan karya sastra seorang pujangga Romawi, Decimus Iunius Juvenalis, pada karya bertajuk Satire X, sekitar abad kedua Masehi. Bagaimana semboyan tersebut bisa terkenal hingga sekarang, hal tersebut tak lepas dari peran John Hulley asal Inggris yang menggunakan semboyan klasik itu sebagai motto untuk Klub Atletik Liverpool pada 1861.
                            </p>
                            <p class="indent-2em">
                                Berbicara mengenai kesehatan jiwa dan pikiran, pemilihan lingkungan tempat tinggal yang tepat memiliki faktor yang sangat kuat dalam memberikan pengaruh sedari awal terhadap kesehatan jiwa, pikiran dan tubuh. Anda tentu bisa membayangkan apa yang terjadi apabila bangun tidur Anda langsung dihadapkan dengan udara yang sesak karena lingkungan yang padat, polusi udara dan polusi suara yang sangat menusuk hidung dan telinga. Air yang terasa lengket di badan sehingga rasanya hari dimulai sudah menyesakkan dada. Belum lagi tempat tinggal Anda harus segera direnovasi karena apabila hujan, kebocoran atap terjadi di hampir semua sudut rumah Anda, dan rasanya tidak ada sirkulasi udara yang memadai. Tentu semuanya membuat pikiran dan “mood” Anda tidak baik semenjak pagi hari. Dan pikiran yang menyesakkan tersebut pastilah mempengaruhi kesehatan tubuh Anda dan produktivitas Anda juga.
                            </p>
                            <p class="indent-2em">
                                Dari pemaparan di atas bisa kita simpulkan bahwa berinvestasi terhadap tempat tinggal memberikan dampak yang besar terhadap investasi kesehatan Anda juga. Maka pemilihan tempat tinggal yang tepat, adalah syarat mutlak untuk mendapatkan pikiran yang sehat, yang juga memberi pengaruh besar terhadap jiwa dan tubuh yang sehat.
                            </p>
                            <p class="indent-2em">
                                Kota Bogor yang memiliki jarak tidak jauh dan terletak di selatan DKI Jakarta yang terhubung dengan Tol Jagorawi, adalah sebuah kota yang banyak dijadikan sebagai kota peristirahatan ataupun tempat tinggal. Kota Bogor dulunya diberi julukan <i>Buitenzorg</i> yang berarti <i>Kota Tanpa Rasa Risau</i> oleh pemerintah kolonial Belanda karena kekaguman dengan betapa menenangkan dan menyejukkan nya suasana Kota Bogor. 
                            </p>
                            <p class="indent-2em">
                                Tidak jauh dari Ibukota sebagai pusat pemerintahan dan pusat bisnis, udara yang relatif lebih bersih dan sejuk, serta air yang lebih bersih, serta suasana kota yang masih asri dengan pepohonan rimbun yang masih banyak terlihat di hampir semua sudut Kota Bogor adalah salah satu alasan mengapa perumahan <i>Green Bamboo Terrace</i> dipilih untuk dibangun di Kota Bogor.
                            </p>
                            <p class="indent-2em">
                                <i>Green Bamboo Terrace</i>  adalah sebuah hunian Exclusive dan Private yang telah siap huni, yang terletak di Jl. Raya Tajur Kota Bogor. Sebuah daerah yang terkenal akan pusat niaga dan memiliki akses yang sangat dekat dengan Tol Jagorawi dan Tol Bocimi. Juga banyak dan lengkapnya fasilitas umum yang telah tersedia di sekitar Jl. Raya Tajur adalah sebuah nilai tambah bagi keberadaan Perumahan <i>Green Bamboo Terrace</i> yang berlokasi di Jl. Raya Tajur – Bogor.
                            </p>
                            <p class="indent-2em">
                                <i>Green Bamboo Terrace</i> dengan Tagline <i>A Taste Of Japanese Perfection</i> adalah sebuah perumahan yang dibangun oleh PT. Kebun Bambu Jakarta sebagai Developer yang terafiliasi dengan <i>Bamboo Field</i> di Jepang. Saat ini telah terbangun 38 unit rumah yang sudah siap huni dari total hanya 106 unit di luasan area 1,7 HA.
                            </p>
                            <p class="indent-2em">
                                Ada banyak hal yang membedakan perumahan <i>Green Bamboo Terrace</i> dengan perumahan lainnya dan juga menjadikan Green Bamboo Terace memiliki keunggulan-keunggulan yang tidak dapat Anda dapatkan di perumahan lainnya. Terutama dari segi struktur dan penggunaan material dengan kualitas terbaik berstandar Jepang. 
                            </p>
                            <p class="indent-2em">
                                Tujuan dari penggunaan material terbaik ini adalah mengurangi rasa khawatir dari biaya <i>maintenance</i> yang harus Anda keluarkan yang jumlahnya bisa sangat membebani Anda dan juga bisa terjadi dalam waktu yang tidak lama setelah Anda membeli rumah.
                            </p>
                            <p class="indent-2em">
                                Berikut adalah beberapa keunggulan dari penggunaan material terbaik yang digunakan di <i>Green Bamboo Terrace</i> yang tidak mungkin Anda dapatkan di perumahan lainnya, yaitu ;
                            </p>

                            <div>
                                <ol class="ml-5">
                                    <li class="pl-3 pb-1">Struktur Terbaik:
                                        <ul>
                                            <li>Menggunakan Pihak ke 3 sebagai konsultan untuk menghitung struktur dan kekuatan bangunan. Penggunaan kualitas beton K300 dan pengunaan bata merah adalah bentuk komitmen <i>Green Bamboo Terrace</i> dalam memberikan kualitas terbaik untuk sebuah hunian.
                                            </li>
                                            <li><p class="mb-0">Tahan Gempa</p>
                                                Rata-rata perumahan di Jabodetabek hanya sanggup menahan goncangan dari gempa bumi hanya di kisaran 4SR-5SR (SR= Scala Richter), sedang di <i>Green Bamboo Terrace</i> dengan kualitas dan material struktur terbaik diprediksi sanggup untuk menahan gempa bumi yang lebih besar. Struktur dari sebuah rumah juga memegang peranan yang sangat penting.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pl-3 pb-1">Material Terbaik :
                                        <ul>
                                            <li><p class="mb-0" style="font-weight: bold;">Pintu dari Daiken</p>
                                                Pintu Daiken terbuat dari engineered wood, yang telah didesain sedemikian rupa sehingga lebih tahan lama, tidak dimakan rayap, tidak memuai dan mengkerut oleh pengaruh cuaca, dan juga telah terbukti kualitasnya sehingga banyak dipakai di apartemen-apartemen bagus dan mahal di Indonesia. Pemasangan Pintu Daiken juga dilakukan oleh Pihak Daiken sendiri untuk memastikan kualitas dan kepresisian nya.
                                            </li>
                                            <li><p class="mb-0" style="font-weight: bold;">Aluminium Frame YKK</p>
                                                <p class="mb-0">YKK adalah merk almunium frame No. 1 di Jepang. YKK sangat teruji dan disukai karena lebih presisi. Karena kepresisian nya tidak ada keluhan kasus kebocoran/rembes dari frame YKK saat terpasang di unit rumah/unit apartemen. 
                                                Khusus untuk <i>Green Bamboo Terrace</i> dipilihkan YKK seri Fility 70, yang secara khusus dibuat di pabrik YKK di Tangerang, yang lebih cocok dengan iklim Indonesia yang beriklim sub-tropis.</p>
                                                <p class="mb-0">
                                                    Frame YKK ini juga terbukti mampu menahan tekanan angin dan meredam bising dari Luar.
                                                </p>
                                                <p class="mb-0">
                                                    Tingkat Presisi frame YKK yang sangat tinggi mengharuskan pemasangan Frame YKK ini hanya boleh dilakukan oleh pihak YKK sendiri. Sehingga struktur bangunan untuk pemasangan frame tidak boleh ada yang melenceng ataupun kurang presisi, karena Frame YKK sendiri sudah dirakit secara utuh dari pabrik YKK sehingga harus terpasang secara utuh dan presisi pula. (bangunan yang harus mengikuti bentuk frame, bukan sebaliknya)
                                                </p>
                                                <p class="mb-0">
                                                    Frame YKK ini juga telah terbukti kualitasnya sehingga banyak dipakai di Apartemen-apartemen bagus dan mahal di Indonesia.
                                                </p>
                                            </li>
                                            <li>
                                                <p class="mb-0" style="font-weight: bold;">Kaca Asahi Glass dari Asahimas</p>
                                                <p class="mb-0">
                                                    Serupa dengan Frame YKK, Asahi Glass juga merk kaca No. 1 di Jepang. Yang kualitasnya juga sudah sangat teruji. Perpaduan Frame Kaca dari YKK dan Kaca Asahi Glass dari Asahimas adalah sebuah perpaduan terbaik untuk sebuah hunian. Perpaduan ini pun dilakukan di banyak apartemen mewah di Indonesia. 
                                                </p>
                                                <p class="mb-0">
                                                    Kelebihan Asahi Glass juga mampu meredam suara dan panas dari luar, sehingga unit rumah lebih senyap yang menjadikan rumah lebih nyaman.
                                                </p>
                                            </li>
                                            <li>
                                                <p class="mb-0" style="font-weight: bold;">Atap Anti Bocor</p>
                                                <p class="mb-0">
                                                    Atap unit rumah di <i>Green Bamboo Terrace</i> menggunakan Cor Dak Beton dengan Sika Waterproof yang memiliki komponen mortar berbahan dasar semen yang kedap air. Sehingga <i>Green Bamboo Terrace</i> memberikan garansi kebocoran selama 5 tahun untuk atap.  Dan tidak hanya itu, bagian bawah atap diberikan insulasi Alumunium foil dan glasswool yang meredam panas sehingga menjadikan ruangan tetap sejuk.
                                                </p>
                                            </li>
                                            <li>
                                                <p class="mb-0" style="font-weight: bold;">Dispencer dan Water Filter Toclas</p>
                                                <p class="mb-0">
                                                    Merk Toclas yang dulunya dikenal sebagai Yamaha Water Purifier, adalah sebuah merk yang sangat kuat dan telah lama berkecimpung di dunia water purifier. Filter membrane yang berukuran 0.1 Micron, menghasilkan air siap minum yang menghilangkan bau, karat, kotoran, dan menyaring bakteri hingga 99,99%. Sehingga air lebih sehat untuk dikonsumsi. 
                                                </p>
                                            </li>
                                        </ul>
                                    </li>
                                </ol>
                            </div>

                            <p class="indent-2em">
                                Penggunaan material-material premium dengan kualitas terbaik tersebut tentunya membuat Anda jauh dari rasa khawatir, yang pada akhirnya membuat pikiran dan jiwa Anda lebih tenang yang memberikan dampak pada kesehatan yang lebih baik. Pemilihan lokasi rumah, spesifikasi bangunan rumah, serta suasana dan fasilitas yang baik adalah juga sebuah investasi kesehatan untuk Anda dan orang yang Anda sayangi. 
                            </p>
                            <p class="indent-2em" style="font-weight:bold">
                                Mari hidup lebih baik dan memulai hidup baru di <i>Green Bamboo Terrace</i>. Karena Kesehatan adalah sebuah kekayaan yang paling berharga dan terutama.
                            </p>
                            <p class="indent-2em">
                                Segera kunjungi rumah contoh dan unit siap huni kami dan hubungi Sales Consultant kami untuk informasi lebih lanjut.
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
    $('#' + id + ' ul').slideToggle();
    $('#' + id + ' i').toggleClass('fa-chevron-up').toggleClass('fa-chevron-down');
    $('#' + id + ' .inactive ul').css('display', 'block');
}
</script>