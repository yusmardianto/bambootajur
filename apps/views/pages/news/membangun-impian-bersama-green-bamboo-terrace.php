<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>

<style>
    .indent-2em {
        text-indent: 2em;
    }
    .membangun__list {
        padding-left: 2em;
        font-weight: bold
    }
    .membangun__list > li {
        margin-bottom: 1em;
    }
    .membangun__list > li > .list__bold {
        margin-bottom: .3em;
    }
    .membangun__list > li > p {
        font-weight: normal;
    }
    @media only screen and (max-width: 768px) {
        .membangun__list {
        padding-left: 0;
        }
    }
</style>

<div style="color: #000;background-color:#fff;text-align:left;padding: 120px 5% 20px 5%;text-align: justify;">
<div style="margin: 20px 0;">
        <ul class="breadcrumbdesign">
            <li><?php echo '<a href="'.base_url().'">Beranda</a>' ?></li>
            <li><a href="<?= site_url(['news'])?>">Berita</a></li>
            <li>
                <a href="<?php echo base_url ('news/membangun-impian-bersama-green-bamboo-terrace'); ?>">
                Membangun Impian Bersama Green Bamboo Terrace
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
                <h3 class="news-title">Membangun Impian Bersama Green Bamboo Terrace</h3>
                <p class="news-date text-italic text-muted">Kamis, 2 April 2020</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="row section-news">
                    <div class="col-12 col-md-12">
                        <div class="mb-4 febpromo-p">
                            
                            <div>
                                <p class="indent-2em">Memiliki investasi untuk kesejahteraan hidup di masa depan adalah hal yang perlu dipertimbangkan, terutama berinvestasi di bidang properti. Investasi properti seperti rumah dapat memberikan keuntungan jangka panjang, karena rumah tidak akan pernah mengalami inflasi atau penurunan harga. Justru harga rumah kian meningkat setiap tahunnya, dikarenakan kebutuhan masyarakat yang semakin tinggi.</p>
                            </div>

                        </div>

                        <div class="row mb-4">
                            <div class="offset-md-2 col-md-8">
                                <img class="img-fluid" src="<?= base_url();?>assets/images/news/apr/membangun-impian.jpg" alt="Perumahan Green Bamboo Terrace">
                            </div>
                        </div>

                        <div class="mb-4">
                            <p class="indent-2em">
                            Berikut beberapa hal yang perlu Anda pertimbangkan sebelum memulai berinvestasi di sektor property terutama rumah.
                            </p>

                            <div style="padding-left: 2em">
                                <ol class="membangun__list ml-3" style="">
                                    <li><div class="list__bold">Lokasi</div>
                                        <p>
                                        Lokasi yang strategis adalah hal yang paling penting dalam berinvestasi properti seperti rumah dan tanah. Semakin strategis lokasi tersebut maka akan semakin tinggi pula harganya. Yang perlu diperhatikan adalah kemudahan akses, fasilitas pendukung dan tingkat keramaian. Rumah yang lokasinya berada di pusat kota tentu akan memiliki harga yang lebih tinggi. Sementara tanah yang lokasinya memiliki potensi untuk dilirik para investor atau pengembang dirasa lebih menguntungkan, karena akan memberikan nilai jual tanah yang cukup tinggi. <br>
                                        Lokasi <i>Green Bamboo Terrace</i> berada tepat di tengah-tengah pusat Niaga Kota Bogor yaitu Tajur Bogor. Di lokasi ini, segala fasilitas pendukung untuk sebuah perumahan telang berdiri lengkap yakni: Rumah Sakit, Sekolah tingkat dasar hingga perguruan tinggi, Pusat perbelanjaan, dan dekat sekali dengan Tol Bocimi dan Tol Jagorawi yang berjarak hanya &plusmn; 7 Menit saja.
                                        </p>
                                    </li>
                                    <li><div class="list__bold">Legalitas Kepemilikan</div>
                                        <p>
                                        Selain rumah yang sudah siap untuk dihuni, setiap unit rumah di <i>Green Bamboo Terrace</i> memiliki legalitas yang lengkap seperti IMB dan Sertifikat setiap unit yang sudah pecah. Ini memberikan jaminan keamanan bagi setiap penghuni maupun investor yang memiliki unit di <i>Green Bamboo Terrace</i>.
                                        </p>  
                                    </li>
                                    <li><div class="list__bold">Tunai atau KPR?</div>
                                        <p>
                                        Saat ini, <i>Green Bamboo Terrace</i> menyediakan beragam metode pembiayaan rumah yang bisa Anda pilih. Setiap metode memiliki kelebihan dan kekurangan masing-masing. Meskipun harus menyiapkan dana lebih besar di awal, membeli rumah secara tunai memungkinkan Anda bergerak lebih leluasa karena sertifikat kepemilikan langsung Anda miliki. <br>
                                        Sedangkan dengan KPR, memungkinkan Anda menggunakan sisa dana yang dimiliki untuk keperluan investasi lainnya. Apalagi, saat ini <i>Green Bamboo Terrace</i> telah bekerja sama dengan beberapa Bank yang bisa memberikan keringanan DP 5% saja.
                                        </p>
                                    </li>
                                    <li><div class="list__bold">Amankan investasi masa depan</div>
                                        <p>
                                        Tingginya kebutuhan akan tempat tinggal membuat para developer semakin agresif mengembangkan properti. Semakin lama Anda menunda rencana investasi rumah, semakin sulit Anda menemukan lahan perumahan dengan lokasi strategis dengan harga yang terjangkau. Harga rumah yang terus melambung menjadikan rumah sebagai salah satu bentuk investasi yang sangat menjanjikan. Selain untuk investasi pribadi, rumah juga menjadi investasi bagi keluarga Anda nantinya. Amankan investasi tersebut sedini mungkin Bersama <i>Green Bamboo Terrace</i>.
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