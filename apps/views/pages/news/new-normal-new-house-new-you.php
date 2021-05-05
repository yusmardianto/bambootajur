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
                New Normal, New House, New You
                </a></li>
        </ul>
    </div>
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <?php include 'sidebar-news.php' ?>
        
        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
                <h1 class="news__page-title">Informasi dan Promo</h1>
                <h3 class="news-title">New Normal, New House, New You</h3>
                <p class="news-date text-italic text-muted">Kamis, 4 Juni 2020</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="row section-news">
                    <div class="col-12 col-md-12">
                        <div class="row">
                            <div class="offset-md-3 col-md-6">
                                <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/jun/new-normal-1.jpg" alt="KPR Perumahan Green Bamboo Terrace">
                            </div>
                        </div>
                        
                        <div class="mb-4 febpromo-p">

                            <p class="indent-2em">Istilah 'New Normal' pertama kali digunakan oleh Roger McNamee, "seorang investor teknologi," yang mengulas dalam sebuah artikel oleh Polly LaBarre berjudul "The New Normal" di majalah Fast Company pada tanggal 30 April 2003. Menurut Roger McNamee, yang menciptakan istilah, 'New Normal' atau Normal Baru adalah suatu waktu di mana kemungkinan besar Anda bersedia bermain dengan aturan baru untuk jangka panjang. Dalam 'New Normal' atau Normal Baru, lebih penting untuk melakukan hal-hal yang benar daripada menyerah pada tirani urgensi.</p>

                            <p class="indent-2em">Menurut Wikipedia bahwa 'New Normal' adalah istilah dalam bisnis dan ekonomi yang mengacu pada kondisi keuangan setelah krisis keuangan 2007-2008 dan setelah resesi global 2008-2012. Istilah ini muncul dari konteks mengingatkan kepercayaan para ekonom dan pembuat kebijakan bahwa ekonomi industri akan kembali ke cara terbaru mereka setelah krisis keuangan 2007-2008. Istilah 'New Normal' sejak saat itu telah digunakan dalam berbagai konteks lain untuk menyiratkan bahwa sesuatu yang sebelumnya tidak normal telah menjadi biasa.</p>

                            <div>
                                <p class="indent-2em">Apa itu NEW NORMAL di masa sekarang ini?</p>
                                <ol class="ml-5">
                                    <li class="pl-3 pb-1">New Normal adalah kebijakan membuka kembali aktivitas ekonomi, sosial dan kegiatan publik secara terbatas dengan menggunakan standar kesehatan yang sebelumnya tidak ada sebelum pandemi.</li>
                                    <li class="pl-3 pb-1">New Normal adalah upaya menyelamatkan hidup warga dan menjaga agar negara tetap bisa berdaya menjalankan fungsinya.</li>
                                    <li class="pl-3 pb-1">New Normal adalah tahapan baru setelah kebijakan stay at home atau work from home atau pembatasan sosial diberlakukan untuk mencegah penyebaran massif wabah virus corona. </li>
                                    <li class="pl-3 pb-1">New Normal utamanya agar warga yang memerlukan aktivitas luar rumah dapat bekerja dengan menggunakan standar kesehatan yang ditetapkan. Jadi bukan sekedar bebas bergerombol atau keluyuran.</li>
                                    <li class="pl-3 pb-1">New Normal diberlakukan karena tidak mungkin warga terus menerus bersembunyi di rumah tanpa kepastian. Tidak mungkin seluruh aktivitas ekonomi berhenti tanpa kepastian yang menyebabkan kebangkrutan total, PHK massal dan kekacauan sosial. </li>
                                    <li class="pl-3 pb-1">New Normal ditujukan agar negara tetap mampu menjalankan fungsi-fungsinya sesuai konstitusi. Harap diingat bahwa pemasukan negara berasal dari pajak dan penerimaan negara lainnya. Jika aktivitas ekonomi terus berhenti total maka negara tidak punya pemasukan, akibatnya negara juga tidak bisa mengurus rakyatnya.</li>
                                    <li class="pl-3 pb-1">New Normal diberlakukan dengan kesadaran penuh bahwa wabah masih ada di sekitar kita. Untuk itu aktivitas ekonomi/publik diperbolehkan dengan syarat menggunakan protokol kesehatan yang telah ditetapkan.</li>
                                    <li class="pl-3 pb-1">New Normal diberlakukan untuk mengantisipasi dampak sosial ekonomi akibat wabah virus covid-19 ini yang bisa berakibat kehancuran ekonomi yang tak tertahankan. Kebangkrutan korporasi selanjutnya ekonomi akan membawa efek domino kebangkrutan negara!</li>
                                    <li class="pl-3 pb-1">Jika Anda tidak setuju dengan New Normal, silakan tetap tinggal di rumah. Sebab banyak orang tetap harus keluar rumah untuk bisa menghidupi keluarganya. Tidak semua orang bisa bertahan selama berbulan-bulan apalagi bertahun-tahun dan tetap bisa menghidupi keluarganya.</li>
                                    <li class="pl-3 pb-1">Untuk memastikan New Normal bisa berjalan baik maka pemerintah harus melakukan upaya yang sistematis, terkoordinasi dan konsisten dalam melakukan pengawasan publik dan law enforcement. Di dalamnya juga termasuk memperbesar kapasitas sektor kesehatan kita untuk mengantisipasi lonjakan penderita Covid-19. </li>
                                    <li class="pl-3 pb-1">Pemerintah pusat dan daerah harus bersinergi untuk memastikan pemeriksaan kesehatan yang massif, tersedianya sarana perawatan dan peralatan medis, melindungi mereka yang paling rentan melalui penyiapan pengamanan sosial yang tepat sasaran dan perlindungan kesehatan.</li>
                                </ol>
                            </div>

                            <p class="indent-2em">New Normal bisa disederhanakan sebagai sebuah “Kesempatan Kedua”, mengapa? Karena di masa New Normal ini kita bisa memulai aktivitas “hampir” seperti biasa hanya saja dengan mengikuti aturan protokol kesehatan yang aturannya sudah dikeluarkan oleh pemerintah. Ada banyak pemikiran, impian, serta aktivitas yang harus kita tahan selama masa Pembatasan Sosial Berskala Besar (PSBB) yang diberlakukan oleh pemerintah kita. Yang bertujuan untuk mengurangi/memutus mata rantai penyebaran Virus Covid-19 yang mendunia. Oleh karenanya, berlakunya New Normal kali ini terasa sangat istimewa di mana kita mulai dapat kembali beraktivitas dan mengejar impian kita yang sempat tertunda.</p>
                            <p class="indent-2em">Salah satu yang menjadi impian orang banyak adalah memiliki rumah yang layak untuk ditinggali bersama keluarga. Memiliki rumah impian, dengan fasilitas serta lingkungan yang lengkap juga sehat, berlokasi di dekat pusat niaga, serta tidak jauh dari Ibukota Jakarta dengan akses yang mudah dan lengkap, merupakan idaman bagi banyak orang. </p>
                            <p class="indent-2em">Perumahan <i>Green Bamboo Terrace</i> menawarkan sebuah hunian yang sudah siap huni, yang memiliki keunggulan-keunggulan seperti yang disebutkan di atas. Bahkan, memiliki Keistimewaan yang lebih dibandingkan dengan perumahan-perumahan lainnya. Apa saja keunggulan dari <i>Green Bamboo Terrace</i> tersebut;</p>
                            
                            <div class="row mb-4">
                                <div class="offset-md-1 col-md-5">
                                    <img class="img-fluid mb-4 mb-sm-0" src="<?= base_url();?>assets/images/news/jun/new-normal-2.jpg" alt="">
                                </div>
                                <div class="col-md-5">
                                    <img class="img-fluid" src="<?= base_url();?>assets/images/news/jun/new-normal-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="offset-md-1 col-md-5">
                                    <img class="img-fluid mb-4 mb-sm-0" src="<?= base_url();?>assets/images/news/jun/new-normal-4.jpg" alt="">
                                </div>
                                <div class="col-md-5">
                                    <img class="img-fluid" src="<?= base_url();?>assets/images/news/jun/new-normal-5.jpg" alt="">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="offset-md-3 col-md-6">
                                    <img class="img-fluid" src="<?= base_url();?>assets/images/news/jun/new-normal-6.jpg" alt="">
                                </div>
                            </div>

                            <p class="indent-2em">Jadi. Apa lagi yang harus anda pertimbangkan? Kesempatan seperti <i>“New Normal”</i> seperti sekarang ini, haruslah Anda manfaatkan sebaik-baiknya, untuk mengejar impian-impian Anda, serta memiliki rumah baru yang siap huni, adalah <i>kesempatan terbaik untuk Normal yang baru, serta anda yang baru.</i></p>
                            <p class="indent-2em"><b>New Normal, New house, New You.</b></p>
                            <p class="indent-2em">Untuk info lebih lanjut, Anda dapat menghubungi kami di 08111 403 280 atau dapat langsung melihat rumah contoh serta rumah yang sudah siap huni, langsung datang saja ke lokasi project <i>Green Bamboo Terrace</i> di Jl. Raya Tajur Bogor – Komp. Unitex, Bogor-Jawa Barat.</p>
                            <p class="indent-2em"><i>Sampai Jumpa di Green Bamboo Terrace!</i></p>
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
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://www.bambootajur.com/news/new-normal-new-house-new-you"
  },
  "headline": "New Normal, New House, New You",
  "description": "Perumahan Green Bamboo Terrace menawarkan hunian yang sehat dan aman bagi keluarga Anda",
  "image": "https://www.bambootajur.com/assets/images/news/jun/new-normal-1.jpg",  
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
  "datePublished": "2020-06-04",
  "dateModified": "2020-06-04"
}
</script>
