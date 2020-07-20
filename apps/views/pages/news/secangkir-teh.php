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
            <li><a href="<?php echo base_url ('news/secangkir-teh'); ?>">
                    Secangkir Teh dan Semangkuk Nasi di Rumah Selalu Lebih Enak Daripada Jamuan di Tempat Lain
                </a></li>
        </ul>
    </div>
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <?php include 'sidebar-news.php' ?>
        
        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
                <h1 class="news__page-title">Informasi dan Promo</h1>
                <h3 class="news-title">Secangkir Teh dan Semangkuk Nasi di Rumah Selalu Lebih Enak Daripada Jamuan di Tempat Lain</h3>
                <p class="news-date text-italic text-muted">Senin, 20 Juli 2020</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="row section-news">
                    <div class="col-12 col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/secangkir_teh.png" alt="Secangkir Teh dan Semangkuk Nasi di Rumah Selalu Lebih Enak Daripada Jamuan di Tempat Lain">
                            </div>
                        </div>
                        <div class="mb-4 febpromo-p">
                            <p class="indent-2em">
                            Pepatah yang berasal dari Jepang di atas memiliki arti bahwa rumah adalah tempat
                            ternyaman dan tempat yang selalu menerima kita untuk kembali dengan tangan terbuka tak
                            peduli apapun yang terjadi.
                            </p>
                            <p style="text-align: center; font-size: 72px; font-weight:bold">
                                快適
                            </p>
                            <p style="text-align: center;">
                                Kaiteki = Kenyamanan
                            </p>
                            <p class="indent-2em">
                            Di <i>Green Bamboo Terrace</i>, kami percaya bahwa kenyamanan adalah sebuah
                            keniscayaan yang mutlak harus dimiliki dari sebuah rumah tempat tinggal. Maka dengan
                            pemikiran itu, kami membangun perumahan <i>Green Bamboo Terrace</i> seperti membangun rumah
                            sendiri.
                            </p>
                            <p class="indent-2em">
                            Kesibukan di kantor atau kesemrawutan lalu lintas memang bisa menjadi hari yang
                            melelahkan. Sudah sewajarnya jika ingin segera beristirahat dan sampai di rumah. Faktor
                            kenyamanan tinggal di dalam rumah memang menjadi hal penting. Maka dari itu, punya rumah
                            dengan lokasi yang strategis, bebas dari segala kekhawatiran memang sudah seharusnya untuk
                            diwujudkan.
                            </p>
                            <p class="indent-2em">
                            <i>Green Bamboo Terrace</i> mencoba untuk mewujudkan impian Anda akan hunian paling
                            nyaman dengan menerapkan beberapa cara berikut ini:
                            </p>
                            <div>
                                <ol class="ml-5">
                                    <li class="pl-3 pb-1">
                                    <span style="font-weight: bold">
                                        Pemilihan Material
                                    </span> 
                                        <p>
                                            Perumahan <i>Green Bamboo Terrace</i> menggunakan material premium berstandar
                                            Jepang. Dimulai dari penggunaan pintu merk Daiken yang anti rayap dan tahan
                                            terhadap segala jenis cuaca, Frame Alumunium YKK dan kaca Asahiglass dari
                                            Asahimas yang merupakan merk no 1 di Jepang, Struktur bangunan dengan dinding
                                            dari bata merah dan mutu beton K300. Yang mengurangi rasa khawatir dan
                                            membantu penghuni <i>Green Bamboo Terrace</i> hidup lebih nyaman dan aman.
                                        </p>
                                    </li>
                                    <li class="pl-3 pb-1">
                                    <span style="font-weight: bold">
                                    Pencahayaan yang tidak biasa
                                    </span>
                                        <p>
                                        di <i>Green Bamboo Terrace</i> mengadopsi design dengan <i>Cross Ventilation</i> sehingga
                                        ruangan terasa sejuk, dan ruangan yang terang dengan banyaknya cahaya matahari
                                        yang masuk, sehingga juga menghemat energi pencahayaan melalui listrik.
                                        Penggunaan kaca Asahiglass dari Asahimas berperan penting untuk mengurangi
                                        panas nya sinar matahari yang masuk, sehingga ruangan tetap terasa sejuk.
                                        </p>
                                    </li>
                                    <li class="pl-3 pb-1">
                                    <span style="font-weight: bold">
                                    Lingkungan yang Exclusive dan Private
                                    </span>
                                        <p>
                                        <i>Green Bamboo Terrace</i> berkonsep sistem cluster dengan One Gate System.
                                        Dibangun di atas lahan seluas 1,7 Ha dan hanya memiliki total 106 Unit saja. Juga
                                        jarak yang berkisar ±100 meter dari Jalan Raya Tajur, membuat perumahan Green
                                        Bamboo Terrace terasa sangat Exclusive dan Private sekali. Membuat penghuni
                                        perumahan <i>Green Bamboo Terrace</i> merasa sangat Aman dan Nyaman.
                                        </p>
                                    </li>
                                    <li class="pl-3 pb-1">
                                    <span style="font-weight: bold">
                                    Lokasi yang premium dan strategis
                                    </span>
                                        <p>
                                        Lokasi <i>Green Bamboo Terrace</i> berada tepat di tengah-tengah pusat Niaga Kota
                                        Bogor yaitu Tajur Bogor. Di lokasi ini, segala fasilitas pendukung untuk sebuah
                                        perumahan telah berdiri lengkap yakni: Rumah Sakit, Sekolah tingkat dasar hingga
                                        perguruan tinggi, Pusat perbelanjaan, dan dekat sekali dengan Tol Bocimi dan Tol
                                        Jagorawi yang berjarak hanya ± 7 Menit saja.
                                        </p>
                                    </li>
                                </ol>
                            </div>

                            <p class="indent-2em" style="font-weight:bold">
                            Lalu hal apa yang bisa Anda lakukan agar rumah terasa lebih nyaman?
                            </p>
                            <p class="indent-2em">
                            Berikut ini tips yang bisa Anda lakukan untuk membuat rumah nyaman!
                            </p>
                            <div>
                                <ol class="ml-5">
                                    <li class="pl-3 pb-1">
                                    <span style="font-weight: bold">
                                    Rumah yang Bersih
                                    </span>
                                        <p>
                                        Poin pertama agar rumah terasa nyaman adalah kebersihan. Rumah yang bersih
                                        tidak hanya membuat Anda betah, tetapi juga baik untuk menjaga kesehataan Anda
                                        dan seluruh penghuni rumah. Sehingga jagalah kebersihan rumah mulai di setiap
                                        bagian rumah Anda.
                                        Jangan biarkan debu menempel pada perabotan rumah berhari-hari. Segera
                                        bersihkan. Lalu jangan biarkan sampah menumpuk di dalam rumah karena bisa
                                        menjadi sumber penyakit dan tempat yang disukai oleh tikus dan serangga.
                                        </p>
                                    </li>
                                    <li class="pl-3 pb-1">
                                    <span style="font-weight: bold">
                                    Dekorasi Ruangan
                                    </span>
                                        <p>
                                        Dekorasi ruangan sangat mendukung kenyamanan suatu rumah. Lakukan dekorasi
                                        interior rumah Anda dengan konsep yang Anda sukai sehingga Anda merasa
                                        menyatu dengan suasana yang ada di dalam rumah Anda sendiri.
                                        Misalnya, Anda bisa memasang foto orang-orang yang Anda cintai di dalam
                                        bingkai yang menarik, atau menghias dinding dengan <i>wallpaper</i> berwarna dan
                                        bermotif favorit Anda, atau bisa juga Anda memilih furnitur unik dan
                                        menempatkan vas bunga di sudut ruangan.
                                        </p>
                                    </li>
                                    <li class="pl-3 pb-1">
                                    <span style="font-weight: bold">
                                    Berikan Aroma Terapi
                                    </span>
                                        <p>
                                        Kehadiran aroma terapi di dalam rumah dapat membuat tubuh Anda lebih rileks
                                        dan pikiran lebih tenang. Tidak harus dengan produk wewangian atau lilin aroma
                                        terapi, karena Anda bisa menggunakan bunga-bunga segar yang Anda sukai
                                        aromanya. Tempatkan bunga tersebut di ruangan-ruangan, seperti kamar tidur,
                                        kamar mandi, dan ruang tamu.
                                        </p>
                                    </li>
                                </ol>
                            </div>
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