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
                <a href="<?php echo base_url ('news/kpr-fiesta-di-green-bamboo-terrace'); ?>">
            KPR FIESTA di Green Bamboo Terrace
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
                <h3 class="news-title">KPR FIESTA di Green Bamboo Terrace</h3>
                <p class="news-date text-italic text-muted">Selasa, 19 Mei 2020</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="row section-news">
                    <div class="col-12 col-md-12">
                        <div class="row">
                            <div class="offset-md-1 col-md-10">
                                <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/may/kpr-fiesta.jpg" alt="KPR Perumahan Green Bamboo Terrace">
                            </div>
                        </div>
                        
                        <div class="mb-4 febpromo-p">

                            <p class="indent-2em">Ada dua alasan utama mengapa orang menunda pembelian rumah; Uang dan Waktu. Jika masalahnya uang, maka KPR bisa jadi jalan keluar. Tapi, bagi orang yang sudah memiliki cukup uang, menunda membeli rumah justru bisa menimbulkan kerugian finansial di masa depan. </p>
                            <p class="indent-2em"><i>Green Bamboo Terrace</i> adalah sebuah perumahan yang terletak di Kota Bogor, yang berlokasi tepat di Jl. Raya Tajur, sebuah area yang banyak dijadikan tempat tinggal dan juga salah satu pusat Niaga di Kota Bogor. Dan <i>Green Bamboo Terrace</i> adalah sebuah perumahan yang sudah siap huni, sehingga bagi orang yang ingin membeli rumah tanpa harus khawatir rumahnya dibangun atau tidak, maka <i>Green Bamboo Terrace</i> adalah jawaban yang paling tepat. </p>

                            <div>
                                <p class="indent-2em">Ada beberapa alasan mengapa Anda harus membeli rumah sekarang;</p>
                                <ul class="ml-5">
                                    <li class="ml-3 pl-3 pb-3"><b>Harga makin tinggi</b> <br>
                                    Salah satu alasan investasi properti sangat diminati adalah harga properti tidak pernah mengalami penurunan. Malah, harga properti bisa dikerek naik 30% hingga 40% dalam hitungan tahun. Dengan menunda KPR, harga rumah bisa tidak lagi terjangkau oleh penghasilan karena cicilan semakin tinggi.
                                    </li>
                                    <li class="ml-3 pl-3 pb-3"><b>DP tidak terjangkau</b> <br>
                                    Jika harga rumah semakin tinggi, sudah pasti dana yang harus disiapkan untuk DP alias uang muka bertambah tinggi. 
                                    </li>
                                    <li class="ml-3 pl-3"><b>Perumahan makin jauh dari pusat kota</b> <br>
                                    Pertumbuhan penduduk berimbas pada tingginya permintaan rumah. Hal inilah yang mengakibatkan lahan perumahan makin terbatas. Karena alasan ketersediaan lahan, pengembang pun memilih membangun perumahan di daerah yang jauh dari pusat kota.
                                    </li>
                                </ul>
                            </div>

                            <p class="indent-2em">
                                Bulan Mei 2020 ini kembali <i>Green Bamboo Terrace</i> menggandeng Bank BRI sebagai Partner KPR untuk mengadakan <b>Bulan KPR FIESTA</b>. Yaitu program kemudahan yang diberikan oleh <i>Green Bamboo Terrace</i> dan BRI untuk fasilitas KPR dalam pembelian unit rumah di <i>Green Bamboo Terrace</i> dengan metode pembayaran KPR. 
                            </p>
                            <p class="indent-2em">
                                Program KPR FIESTA yang dimaksud adalah Program kemudahan <i>Down Payment 5%</i>. dan DP 5% tersebut juga bisa dicicil sebanyak 3x. juga Bank BRI sebagai partner KPR di <i>Green Bamboo Terrace</i> memberikan special rate untuk program ini, yakni; 
                            </p>

                            <ul class="ml-5">
                                <li><b>Program umum</b>
                                    <ol class="ml-4">
                                        <li>7.15% fixed 1tahun, minimal jangka waktu 5 tahun</li>
                                        <li>7.6% fixed 2 tahun, minimal jangka waktu 7 tahun</li>
                                        <li>8.25% fixed 3 tahun, minimal jangka waktu 7 tahun</li>
                                        <li>8.75% fixed 5 tahun, minimal jangka waktu 10 tahun</li>
                                    </ol>
                                </li>
                            </ul>

                            <ul class="ml-5">
                                <li><b>Program KPR BRI (KPR ASN/TNI dan Polri (payroll di BRI))</b> <br>
                                Free administrasi dan provisi
                                    <ol class="ml-4">
                                        <li>6.5% fixed 3 tahun, minimal jangka waktu 10 tahun</li>
                                        <li>7% fixed 4 tahun, minimal jangka waktu 15 tahun</li>
                                    </ol>
                                </li>
                            </ul>

                            <p class="indent-2em">
                                KPR ini memiliki keunggulan pada proses yang cepat, biaya kredit ringan, dan uang muka terjangkau. Kelebihan KPR BRI adalah memiliki masa tenor panjang hingga 20 tahun. Hal ini tentu menjadi pilihan yang menarik bagi nasabah agar bisa lebih fleksibel untuk mengatur cicilan per bulan. 
                            </p>
                            <p class="indent-2em">
                                Bukan hanya itu, KPR BRI juga menerapkan biaya kredit yang ringan sehingga tidak membebani konsumen. Selain itu, nasabah KPR BRI juga akan mendapatkan asuransi. Hal ini akan lebih menjamin dalam proses pemilikan rumah yang Anda lakukan. 
                            </p>
                            <p class="indent-2em">
                                Proses KPR BRI pun cepat. Anda hanya perlu menyiapkan dokumen persyaratan KPR dan kemudian nantinya dalam hitungan hari akan diketahui apakah pengajuan KPR Anda disetujui atau tidak. 
                            </p>

                            <div class="row">
                                <div class="offset-md-3 col-md-6">
                                    <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/may/kpr-fiesta-2.jpg" alt="KPR Perumahan Green Bamboo Terrace">
                                </div>
                            </div>

                            <p class="indent-2em">
                                Tak cukup sampai di situ, promo Bulan KPR FIESTA ini juga memberikan <b>Free BPHTB</b>, dan juga masih banyak hadiah lainnya yang bisa Anda dapatkan bila membeli rumah dengan program KPR DP 5% di <i>Green Bamboo Terrace</i> ini. 
                            </p>
                            <p class="indent-2em">
                                Mau tahu lebih detail lagi mengenai promo KPR FIESTA. KPR FIESTA ini? Segera hubungi kami, atau Anda bisa langsung datang ke Site Project kami di <i>weekdays</i> atau saat Open House di setiap <i>weekend</i>. Sales Consultant kami siap memberikan pelayanan terbaik dan mengajak Anda untuk <i>Home Tour</i>, serta memberikan promo terbaik yang Anda hanya bisa dapatkan di Bulan KPR FIESTA Mei 2020 ini.
                            </p>
                            <p class="indent-2em">
                                Sampai bertemu di <i>Green Bamboo Terrace</i>…
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