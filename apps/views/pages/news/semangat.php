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
            <li><a href="<?php echo base_url ('berita-dan-promo/semangat'); ?>">
            Semangat!!
                </a></li>
        </ul>
    </div>
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <?php include 'sidebar-news.php' ?>
        
        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
                <h1 class="news__page-title">Informasi dan Promo</h1>
                <h3 class="news-title">Semangat!!</h3>
                <p class="news-date text-italic text-muted">Jumat, 18 September 2020</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="row section-news">
                    <div class="col-md-12">
                        <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/sept/semangat.png" alt="semangat">
                    </div>
                </div>
                <div class="mb-4">
                    <p class="indent-2em" style="font-weight: bolder;">
                        あなたは何が起こっても、あきらめるべきではありません。 私は、あなたが降
                        <b>
                            りてくるのではなく昇るための道具としてあなたに何が起こってもそれを使うべきです.
                        </b>
                        
                    </p>
                     <p class="indent-2em">
                         <b><i>
                             Anata wa nani ga okotte mo, akiramerubekide wa arimasen. Watashi wa, anata ga orite kuru node wa naku noboru tame no dōgu to shite anata ni nani ga okotte mo sore o tsukaubekidesu.
                         </i></b>
                        </p>
                      <p class="indent-2em">
                          <b>Artinya : Kamu seharusnya tidak menyerah terhadap apapun yang terjadi padamu. Maksudku, kamu seharusnya menggunakan apapun yang terjadi padamu sebagai alat untuk naik, bukan turun.</b>
                      </p>
                        <p class="indent-2em">Tahun 2020 seluruh dunia diguncang oleh sebuah virus yang sangat mematikan. Di seluruh kota dan negara, semua orang merasa cemas bagaimana dan apa yang akan terjadi dengan masa depan. </p>
                        <p class="indent-2em">Hingga kini, seluruh aktivitas kita masih saja dibatasi, dan bahkan istilah <i>New Normal</i> pun menjadi bagian dari keseharian kita. <i>New Normal</i>  menuntut banyak perubahan gaya hidup dari kita saat ini. Di mana kita harus terbiasa menggunakan masker, menjaga jarak dengan orang lain, dan dituntut untuk lebih sering mencuci tangan. </p>
                        <p class="indent-2em">Dilema sedang dihadapi juga oleh semua Pemerintah, pengusaha, dan seluruh lapisan masyarakat. Belum ada satu orang pun yang pernah memiliki pengalaman untuk menghadapi situasi seperti ini. Sehingga berbagai macam cara dilakukan untuk dapat bertahan di kondisi pandemik <i>Virus Corona</i> saat ini. </p>
                        <p class="indent-2em">Di satu sisi bila terlalu memperhatikan kesehatan dengan seluruh protokol kesehatan yang ketat, maka sektor ekonomi yang ambruk dan bisa membuat persoalan baru. Di sisi lain bila ekonomi terlalu diperhatikan, maka sektor kesehatan yang akan semakin terperosok dalam.</p>
                        <p class="indent-2em">Akan tetapi, saat ini kita semua harus bersatu padu dan bergandengan tangan dalam menyikapi ketidakpastian keadaan seperti sekarang. Kita semua harus mampu bertahan. Dan bahkan, hanya bertahan saja tidaklah cukup lagi, kita harus mampu bertahan dan juga keluar sebagai pemenang.</p>
                        <p class="indent-2em">Karena apabila hanya bertahan saja, ada jutaan orang yang siap menggantikan kita, di semua sektor dan lini usaha.</p>
                        <p class="indent-2em">Untuk itu, perumahan <i>Green Bamboo Terrace</i> ikut mendoakan dan memberikan semangat untuk kebaikan kita semua. </p>
                        <p class="indent-2em" style="font-size:18px;">
                            <b>
                                “Semangat..!! kita pasti mampu melewati badai ini, dan jadi pemenang!”
                            </b>
                        </p>
                </div>
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
    "@id": "https://www.bambootajur.com/berita-dan-promo/semangat"
  },
  "headline": "Semangat",
  "description": "Kamu seharusnya tidak menyerah terhadap apapun yang terjadi padamu.",
  "image": "https://www.bambootajur.com/assets/images/news/semangat.png",  
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
