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
            <li><a href="<?= site_url(['berita-dan-promo'])?>">Berita</a></li>
            <li><a href="<?php echo base_url ('berita-dan-promo/beli-rumah-gratis-biaya-kpr-dan-pajak'); ?>">
            Beli Rumah Gratis Biaya KPR & Pajak
                </a></li>
        </ul>
    </div>
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <?php include 'sidebar-news.php' ?>
        
        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
                <h1 class="news__page-title">Informasi dan Promo</h1>
                <h3 class="news-title">Beli Rumah Gratis Biaya KPR & Pajak</h3>
                <p class="news-date text-italic text-muted">Rabu, 3 Maret 2021</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="section-news"> 
                    <div class="row justify-content-center">
                        <div class="col-md-10" style="text-align:center">
                            <picture>
                                <source srcset="<?= base_url();?>assets/images/news/2021/mar/freebiaya.webp" type="image/webp">
                                <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/2021/mar/freebiaya.jpg" alt="eli Rumah Gratis Biaya KPR & Pajak">
                            </picture>    
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                        <p class="indent-2em">Beli rumah semakin mudah, mungkinkah? Jawabannya tentu sangat mungkin. Dengan catatan Anda teliti memilih developer serta cermat memperhatikan pembiayaan untuk hunian yang akan Anda beli nantinya, maka Anda akan semakin mudah membeli rumah dengan penghematan biaya yang banyak.</p>
                        <p class="indent-2em">Maret 2021, Green Bamboo Terrace melihat bahwa kebutuhan masyarakat akan hunian ternyata semakin meningkat. Meski saat ini kebutuhan akan hunian masih berada pada segmen dijadikan sebagai tempat tinggal akibat para investor masih menunggu redanya pandemic yang mendera seluruh belahan dunia, tetap saja pasar properti masih menjadi incaran berbagai kalangan konsumen.</p>
                        <p class="indent-2em">Sebagai jawaban atas kurva permintaan pasar terhadap hunian, perumahan  Green Bamboo Terrace pun memberikan penawaran “Promo Gratis Biaya-Biaya” yang termasuk di dalamnya gratis biaya KPR, Biaya Notaris, Biaya AJB, Biaya Balik Nama, Peningkatan Hak Milik, serta pajak-pajak yang timbul dalam pembelian setiap unit rumah. </p>
                        <p class="indent-2em">Adapun proyek Green Bamboo Terrace adalah perumahan yang siap huni yang berlokasi di Tajur, Kota Bogor. Yang menawarkan hunian yang exclusive dan private bagi para pembeli yang mendambakan perumahan yang telah siap huni, juga memiliki kualitas dengan standar perumahan di Jepang.</p>
                        <p class="indent-2em">Penawaran terbaik berupa “Promo Gratis Biaya-Biaya”  ini merupakan salah satu cara yang diberikan perumahan  Green Bamboo Terrace agar masyarakat semakin mudah dalam memiliki hunian. Pembebasan biaya Pajak, Notaris, dan Biaya KPR  ini sendiri sangat menguntungkan karena ketika dikalkulasikan, maka Anda akan menghemat biaya KPR mulai dari 150 Jutaan sampai 200 Jutaan Rupiah.</p>
                        <p class="indent-2em">Bagi Anda yang sedang mencari hunian sebagai tempat tinggal maupun alternatif untuk berinvestasi, promo spektakuler ini hanya akan diberlakukan bagi konsumen yang melakukan pemesanan unit hunian sampai akhir bulan Maret 2021. Artinya, jika Anda ingin menikmati keuntungan dalam mencicil rumah sesuai kemampuan serta menghemat banyak biaya dengan adanya Gratis biaya KPR serta pajak, maka inilah saat yang tepat. Jangan tunda lagi, karena jika program penawaran sudah lewat, biaya KPR serta Pajak pun akan kembali diberlakukan sesuai luas hunian yang dibeli.</p>
                        <p class="indent-2em">“Promo Gratis Biaya-Biaya” ini juga merupakan salah satu kebijakan perumahan Green Bamboo Terrace dalam mendukung masyarakat untuk lebih cepat dan mudah dalam memiliki hunian. Ini akan menjadi angin sejuk bagi para pencari rumah. Artinya, jangan tunda lagi, segera kunjungi seluruh Rumah siap huni di Green Bamboo Terrace, dan tentukan unit mana yang sesuai dengan kebutuhan Anda. </p>
                        <p class="indent-2em">Tunggu apa lagi, jangan sampai bulan Maret 2021 terlewatkan untuk menikmati penawaran gratis biaya-biaya  yang akan membuat Anda hemat sangat banyak. Info lebih lanjut: <a href="https://www.bambootajur.com/contact"> Kontak </a >- <a href="https://wa.me/628111403280">0811 1403 280</a> </p>
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
