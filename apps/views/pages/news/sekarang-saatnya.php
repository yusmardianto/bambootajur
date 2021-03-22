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
            <li><a href="<?php echo base_url ('news/beli-rumah-gratis-biaya-kpr-dan-pajak'); ?>">
           Sekarang Saatnya
                </a></li>
        </ul>
    </div>
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <?php include 'sidebar-news.php' ?>
        
        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
                <h1 class="news__page-title">Informasi dan Promo</h1>
                <h3 class="news-title">Sekaranglah Saatnya…!</h3>
                <p class="news-date text-italic text-muted">Senin, 22 Maret 2021</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="section-news"> 
                    <div class="row justify-content-center">
                        <div class="col-md-10" style="text-align:center">
                            <picture>
                                <source srcset="<?= base_url();?>assets/images/news/2021/mar/sekarang-saatnya.webp" type="image/webp">
                                <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/2021/mar/sekarang-saatnya.jpg" alt="eli Rumah Gratis Biaya KPR & Pajak">
                            </picture>    
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                        <p class="indent-2em">Tidak ada waktu yang tidak tepat membeli rumah dan tidak ada istilah terlalu muda atau terlalu tua. Keputusan membeli rumah adalah keputusan jangka panjang, bahkan naik atau turunnya harga properti tidak menjadi masalah. Ketika sudah menemukan lokasi yang tepat, lakukanlah riset sebelum membeli. Hal yang harus diperhatikan adalah jangan pernah memilih atau membeli karena apa yang dikatakan orang.</p>
                        <p class="indent-2em">Jika siap membeli, maka belilah hari ini.</p>
                        <p class="indent-2em">“ Pemerintah resmi mengumumkan pemberian insentif fiskal berupa pembebasan pajak pertambahan nilai (PPN) untuk rumah dengan harga jual hingga Rp 5 miliar. Kebijakan ini diklasifikasikan dalam dua skema.</p>
                        <p class="indent-2em">Pertama, diskon 100% alias bebas PPN untuk harga jual rumah tapak dan rumah susun paling tinggi Rp 2 miliar. Kedua, diskon 50% PPN untuk harga jual rumah tapak dan rumah susun lebih dari Rp 2 miliar hingga Rp 5 miliar.</p>
                        <p class="indent-2em">Ketentuan tersebut tertuang dalam Peraturan Menteri Keuangan (PMK) Nomor 21/PMK/010/2021 yang mulai berlaku pada Senin (1/3) hari ini. Beleid tersebut berlaku hingga 31 Agustus 2021.</p>
                        <p class="indent-2em">Menteri Keuangan Sri Mulyani Indrawati mengatakan, tujuan pemerintah memberikan insentif tersebut untuk meningkatkan daya beli masyarakat ekonomi kelas menengah. Sebab, selama pandemi tahun lalu cenderung tertahan.” </p>
                        <p class="text-right">Sumber : Kontan, 1 Maret 2021.</p>
                        <div class="row justify-content-center">
                        <div class="col-md-10" style="text-align:center">
                        <picture>
                            <source type="image/webp" srcset="<?= base_url();?>assets/images/home/freebiaya.webp"> 
                            <img src="<?= base_url();?>assets/images/home/freebiaya.jpg" alt="Free all biaya " loading="lazy" style="max-width:100%">
                            </picture>
                            <br><br>
                        </div>
                    </div> 
                        <p class="indent-2em">Bagi Anda yang sedang mencari hunian sebagai tempat tinggal maupun alternatif untuk berinvestasi, bulan Maret ini adalah saat terbaik untuk membeli. Terutama di Green Bamboo Terrace yang memberikan promo spektakuler hanya bagi konsumen yang melakukan pemesanan unit hunian sampai akhir bulan Maret 2021. Artinya, jika Anda ingin menikmati keuntungan dalam mencicil rumah sesuai kemampuan serta menghemat banyak biaya dengan adanya Gratis biaya KPR serta pajak, maka inilah saat yang tepat. Jangan tunda lagi, karena jika program penawaran sudah lewat, biaya KPR serta Pajak pun akan kembali diberlakukan sesuai luas hunian yang dibeli.</p> 
                        <p class="indent-2em news-title">Can’t get any better from this…!</p> 
                        <p class="indent-2em">Green Bamboo Terrace adalah perumahan yang siap huni yang berlokasi di Tajur, Kota Bogor. Yang menawarkan hunian yang exclusive dan private bagi para pembeli yang mendambakan perumahan yang telah siap huni, juga memiliki kualitas dengan standar perumahan di Jepang.</p> 
                        <p class="indent-2em">Penawaran terbaik berupa “Promo Gratis Biaya-Biaya” ini merupakan salah satu cara yang diberikan perumahan  Green Bamboo Terrace agar masyarakat semakin mudah dalam memiliki hunian. Pembebasan biaya Pajak, Notaris, dan Biaya KPR ini sendiri sangat menguntungkan karena ketika dikalkulasikan, maka Anda akan menghemat biaya KPR mulai dari 150 Jutaan sampai 200 Jutaan Rupiah.</p> 
                        <p class="indent-2em">Tunggu apa lagi, jangan sampai bulan Maret 2021 terlewatkan untuk menikmati penawaran gratis biaya-biaya  yang akan membuat Anda hemat sangat banyak. Info dan detail lebih lanjut dapat menghubungi kami di  0811 1403 280</p> 

                    </div>
                </div>
                <br>
            </div>
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
    "@id": "https://www.bambootajur.com/news/apa-kata-mereka-mengenai-tinggal-di-green-bamboo-terrace"
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
