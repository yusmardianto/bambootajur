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
            <li><a href="<?php echo base_url ('berita-dan-promo/tips-sederhana-rumah-sehat-bebas-penyakit'); ?>">
            Tips Sederhana Menciptakan Rumah yang lebih Sehat dan Bebas Penyakit
                </a></li>
        </ul>
    </div>
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <?php include 'sidebar-news.php' ?>
        
        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
                <h1 class="news__page-title">Informasi dan Promo</h1>
                <h3 class="news-title">Tips Sederhana Menciptakan Rumah yang lebih Sehat dan Bebas Penyakit</h3>
                <p class="news-date text-italic text-muted">Rabu, 19 Mei 2021</p>
            </div>
            <div class="pl-3 pt-3 news-content">

                <div class="section-news"> 
                    <div class="mb-4 row justify-content-center">
                        <div class="col-md-8">
                            <picture>
                                <source srcset="<?= base_url();?>assets/images/news/2021/may/rumah-sehat.webp" type="image/webp">
                                <img class="img-fluid" src="<?= base_url();?>assets/images/news/2021/may/rumah-sehat.jpg" alt="eli Rumah Gratis Biaya KPR & Pajak">
                            </picture>    
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <p class="indent-2em"><strong>Tidak ada yang tahu apa yang akan terjadi di masa depan. </strong></p>
                    <p class="indent-2em">Seperti tidak seorangpun yang memprediksi bahwa kehidupan dunia saat ini porak-poranda oleh pandemik Covid-19, juga tak seorangpun yang bisa memprediksi kapan semuanya ini akan berakhir. Yang bisa saat ini kita lakukan tetap menjaga protokol kesehatan serta tetap bekerja untuk dapat memenuhi kebutuhan hidup yang tak dapat ditunda ini.</p> 
              
                    <p class="indent-2em">Di tengah wabah virus corona yang terjadi di Indonesia, membuat kita akan melakukan cara apapun untuk bisa terhindari dan terinfeksi COVID-19 tersebut. Salah satu cara sederhana adalah melakukan social distancing, #dirumahaja dan juga menjaga kebersihan sehingga menciptakan rumah sehat dan bebas dari penyakit.</p>
                    <p class="indent-2em">Tapi, bagaimana cara untuk hunian Anda masuk kategori rumah sehat? </p>
                    <p class="indent-2em">Berikut tips sederhana yang bisa dilakukan untuk mewujudkan rumah sehat untuk keluarga di tengah merebaknya wabah virus corona saat ini.</p>
 
                    <ul style="margin-left:25px">
                        <li class=""><strong>Pastikan rumah bebas debu</strong><br> 
                            <div class="row align-items-center justify-content-center mb-4 pt-3">
                                <div class="col-md-8">
                                    <picture>
                                        <source srcset="<?= base_url();?>assets/images/news/2021/may/rumah-sehat2.webp" type="image/webp">
                                        <img class="img-fluid" src="<?= base_url();?>assets/images/news/2021/may/rumah-sehat2.jpg" alt="eli Rumah Gratis Biaya KPR & Pajak">
                                    </picture>    
                                </div>
                            </div> 
                            <p  class="indent-2em"> Membersihkan rumah sudah menjadi hal yang wajib dilakukan. Mulai dari menyapu lantai, baik menggunakan sapu ataupun vacuum cleaner untuk membersihkan rumah dari debu-debu. Selain lantai, bersihkan juga furniture, kaca rumah hingga alat elektronik rumah tangga dari debu-debu yang menempel.</p>
                        </li>
                        <li>
                            <strong>Menggunakan cairan antiseptik ketika membersihkan rumah</strong><br>
                            <div class="row align-items-center justify-content-center mb-4 pt-3">
                                <div class="col-md-8">
                                    <picture>
                                        <source srcset="<?= base_url();?>assets/images/news/2021/may/rumah-sehat3.webp" type="image/webp">
                                        <img class="img-fluid" src="<?= base_url();?>assets/images/news/2021/may/rumah-sehat3.jpg" alt="eli Rumah Gratis Biaya KPR & Pajak">
                                    </picture>    
                                </div>
                            </div> 
                            <p class="indent-2em">Tidak cukup hanya membersihkan debu dengan menyapu, namun akan lebih bersih jika rumah juga dipel dengan menggunakan cairan antiseptik. Selain menghilangkan debu, kuman-kuman yang masih menempel pun akan hilang sehingga rumah menjadi lebih bersih.</p>
                          
                        </li>
                        <li><strong>Selalu cuci tangan setelah beraktivitas</strong>
                            <div class="row align-items-center justify-content-center mb-4 pt-3">
                                <div class="col-md-8">
                                    <picture>
                                        <source srcset="<?= base_url();?>assets/images/news/2021/may/rumah-sehat4.webp" type="image/webp">
                                        <img class="img-fluid" src="<?= base_url();?>assets/images/news/2021/may/rumah-sehat4.jpg" alt="eli Rumah Gratis Biaya KPR & Pajak">
                                    </picture>    
                                </div>
                            </div> 
                            <p class="indent-2em"> Saat wabah virus corona kini semakin meluas penyebarannya, maka kita dianjurkan untuk menjaga kebersihan salah satunya adalah rajin mencuci tangan. Meskipun berada di rumah untuk melakukan social distancing, tentu Anda akan melakukan aktivitas-aktivitas yang akan membuat tangan Anda kotor. Mulai dari WFH (bekerja dari rumah), memasak, main game, apalagi ketika Anda harus keluar ke pasar untuk belanja kebutuhan.</p>
                            <p class="indent-2em">Siapkan sabun cuci tangan atau hand sanitizer di bagian depan, sehingga setiap ingin masuk ke dalam cuci tangan terlebih dahulu.</p>
                        </li>
                        
                        <li><strong>Jaga Kelembaban Kain agar tetap Kering</strong>
                            <div class="row align-items-center justify-content-center mb-4 pt-3">
                                <div class="col-md-8">
                                    <picture>
                                        <source srcset="<?= base_url();?>assets/images/news/2021/may/rumah-sehat5.webp" type="image/webp">
                                        <img class="img-fluid" src="<?= base_url();?>assets/images/news/2021/may/rumah-sehat5.jpg" alt="eli Rumah Gratis Biaya KPR & Pajak">
                                    </picture>    
                                </div>
                            </div> 
                            <p class="indent-2em">Ketika musim panas, ini akan menyebabkan tingkat kelembaban menjadi tinggi meskipun sudah ada ventilasi udara. Jika dibiarkan akan timbul jamur, kutu, kecoa, kuman, hingga virus yang ini akan mempengaruhi kesehatan penghuni rumah. Gangguan kesehatan yang biasa terjadi mulai dari hidung tersumbat, iritasi mata, alergi, dan masalah kesehatan lainnya.</p>
                            <p class="indent-2em">Khususnya beberapa alat rumah tangga, seperti kain akan mudah bau dan berjamur. Maka pastikan untuk Anda menjaga kelembaban kain-kain tetap kering.</p>
                        </li>

                        <li><strong>Jangan Menumpuk Sampah</strong>
                            <div class="row align-items-center justify-content-center mb-4 pt-3">
                                <div class="col-md-8">
                                    <picture>
                                        <source srcset="<?= base_url();?>assets/images/news/2021/may/rumah-sehat6.webp" type="image/webp">
                                        <img class="img-fluid" src="<?= base_url();?>assets/images/news/2021/may/rumah-sehat6.jpg" alt="eli Rumah Gratis Biaya KPR & Pajak">
                                    </picture>    
                                </div>
                            </div> 
                            <p class="indent-2em"> Bakteri, kuman dan berbagai hal buruk yang nantinya akan membuat rumah tidak sehat dan bersih sebagian besar berasal dari sampah. Jika Anda ingin rumah menjadi sehat dan bersih, maka jangan biarkan sampah rumah tangga menumpuk di dalam rumah.</p>
                            <p class="indent-2em">Kosongkan semua tempat sampah yang ada di rumah secara rutin, minimal satu sampai dua kali dalam sehari. Jika memang petugas sampah hanya datang dua kali dalam seminggu, maka paling tidak buang seluruh sampah ke tempat sampah di luar rumah sehingga rumah tetap bersih dan jauh dari sumber penyakit.</p>
                        </li>

                        <li><strong>Buat Taman di Rumah</strong>
                            <div class="row align-items-center justify-content-center mb-4 pt-3">
                                <div class="col-md-8">
                                    <picture>
                                        <source srcset="<?= base_url();?>assets/images/news/2021/may/rumah-sehat7.webp" type="image/webp">
                                        <img class="img-fluid" src="<?= base_url();?>assets/images/news/2021/may/rumah-sehat7.jpg" alt="eli Rumah Gratis Biaya KPR & Pajak">
                                    </picture>    
                                </div>
                            </div> 
                            <p class="indent-2em">Menjadi rumah sehat, maka cara lainnya adalah membuat taman indoor dengan tanaman secukupnya. Adanya taman ini akan membantu mengendalikan sirkulasi udara, temperatur, dan juga kelembaban udara. Tidak hanya itu, taman bisa membantu memberikan efek relaksasi dan penghilang stress yang baik untuk kesehatan mental dan psikologis.</p>
                            <p class="indent-2em">Namun, jika luas rumah Anda terbatas, solusinya bisa menyediakan beberapa tanaman dalam pot plastik atau menggunakan tanaman gantung atau biasa disebut taman vertikal bisa jadi alternatif.</p>
                            <p class="indent-2em">Itulah beberapa cara sederhana yang bisa dilakukan untuk membuat rumah menjadi sehat dan terbebas dari berbagai penyakit termasuk virus corona yang kini menjadi wabah yang menimbulkan banyak korban jiwa.</p>
                        </li>
                    </ul>
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
