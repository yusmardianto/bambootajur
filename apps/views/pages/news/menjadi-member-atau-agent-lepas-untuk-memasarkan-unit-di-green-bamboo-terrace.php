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
    .section-title{
      font-size: 18px;
      font-weight: bold;
      text-decoration: underline;
      text-align: center;
    }
    .list-alpha-bracket{
      list-style-type: none;
    }
    .list-alpha-bracket li:before {
      content: "(" counter(section, lower-alpha) ") ";
      position: absolute;
      left: -25px;
    }
    .list-alpha-bracket li { 
      counter-increment: section;
      position: relative;
    }
</style>

<div style="color: #000;background-color:#fff;text-align:left;padding: 120px 5% 20px 5%;text-align: justify;">
    <div style="margin: 20px 0;">
        <ul class="breadcrumbdesign">
            <li><?php echo '<a href="'.base_url().'">Beranda</a>' ?></li>
            <li><a href="<?= site_url(['berita-dan-promo'])?>">Berita</a></li>
            <li><a href="<?php echo base_url ('berita-dan-promo/menjadi-member-atau-agent-lepas-untuk-memasarkan-unit-di-green-bamboo-terrace'); ?>">
            Menjadi Member atau Agent Lepas untuk memasarkan unit di Green Bamboo Terrace
            </a></li>
        </ul>
    </div>
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <?php include 'sidebar-news.php' ?>
        
        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
                <h1 class="news__page-title">Informasi dan Promo</h1>
                <h3 class="news-title">Menjadi Member atau Agent Lepas untuk memasarkan unit di Green Bamboo Terrace</h3>
                <p class="news-date text-italic text-muted">Jumat, 3 September 2021</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="section-news"> 
                    <div class="row justify-content-center">
                        <div class="col-md-10" style="text-align:center">
                          <picture>
                              <source srcset="<?= base_url();?>assets/images/news/2021/sept/komisi-agen.webp" type="image/webp">
                              <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/2021/sept/komisi-agen.jpg" alt="Uang ekstra di masa pandemi">
                          </picture>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <p class="indent-2em">Tidak bisa dipungkiri, saat pandemi menyerang banyak orang yang kesulitan mendapatkan penghasilan atau bahkan tidak bisa sama sekali mendapatkan penghasilan. Kondisi serba susah seperti ini membuat banyak orang kehilangan pekerjaan.</p>
                    <p class="indent-2em">Bertahan di tengah kondisi seperti ini, mencari penghasilan tambahan merupakan cara terbaik agar keuangan tetap terjaga di masa pandemi. Dengan tambahan pemasukan bulanan maka kita bisa mendapat surplus pendapatan yang bisa digunakan untuk menabung maupun investasi.</p>
                    <p class="indent-2em">Untuk itu, kamu bisa mencoba membantu kami untuk memasarkan unit rumah di Green Bamboo Terrace. Apalagi unit perumahan di Green Bamboo Terrace ada yang sudah siap huni, dengan legalitas surat-surat yang sudah pecah dan clear.</p>
                    <p class="indent-2em">Komisi yang kamu dapatkan pun lumayan banget lho.. sebesar 1% dari harga rumah. Dan kamu juga akan dibantu oleh sales In-house untuk bisa <em>Dealing</em> dengan <em>potential buyer</em> kamu.</p>
                    <p class="indent-2em">Nah, kalau kamu tertarik untuk menambah penghasilan dengan menjadi member / agent lepas maka kamu bisa baca-baca ketentuan dan persyaratan berikut ini;</p>

                    <p class="indent-2em"><strong><u>Profil Agent Member</u></strong></p>
                    <ol class="ml-5">
                      <li>Berusia 18 Tahun – 60 Tahun</li>
                      <li>Sehat secara jasmani.</li>
                      <li>Bukan sales in-house di developer manapun.</li>
                      <li>Memiliki passion di bidang penjualan.</li>
                      <li>Pengalaman dan Pendidikan bukan syarat mutlak, karena akan dibantu oleh sales in-house</li>
                      <li>Memiliki sikap dan mental sebagai entrepreneur.</li>
                      <li>
                        Latar belakang Agent Member:
                        <ul class="ml-4" style="list-style-type: disc;">
                          <li>Mahasiswa</li>
                          <li>Karyawan Freelance </li>
                          <li>Karyawan tetap di perusahaan lain</li>
                          <li>Karyawan yang bekerja sebagai tenaga pemasar di produk lain seperti;
                            <ul class="ml-4" style="list-style-type:circle;">
                              <li>Sales otomotif (mobil dan motor)</li>
                              <li>Sales perbankan dan asuransi</li>
                              <li>Sales produk-produk lainnya di luar property</li>
                            </ul>
                          </li>
                          <li>Ibu Rumah Tangga</li>
                          <li>Driver ojek & mobil aplikasi berbasis online</li>
                          <li>Pensiunan</li>
                        </ul>
                      </li>
                    </ol>

                    <h4 class="section-title">TUGAS, KEWAJIBAN, DAN HAK AGENT MEMBER</h4>
                    <ol class="ml-5">
                      <li>Agen Member melakukan pemasaran Unit dan tunduk pada ketentuan-ketentuan yang ditentukan oleh Developer.</li>
                      <li>Agen Member tidak diperkenankan bertindak untuk dan seolah-olah mewakili atau mengatasnamakan karyawan atau badan hukum Developer.</li>
                      <li>Agen Member berkewajiban menjelaskan kepada customer mengenai Unit secara menyeluruh dan jelas sebagaimana yang ditentukan oleh Developer.</li>
                      <li>Agen Member tidak diperkenankan untuk memberikan janji-janji dan/atau syarat-syarat dalam bentuk apapun kepada customer di luar dari persetujuan tertulis dari Developer.</li>
                      <li>Agent Member diperbolehkan untuk mengikuti pameran apabila ditunjuk oleh Marketing manager, dengan mengikuti peraturan yang sama dengan sales in-house. </li>
                      <li>Agen Member berkewajiban untuk mendampingi customer dalam melengkapi pengisian <em>Booking Form</em> beserta dokumen-dokumen persyaratannya. Pengisian harus dilakukan di kantor Developer.</li>
                      <li>Agen Member berkewajiban membantu segala permasalahan dan keluhan yang berhubungan dengan pemasaran dan penjualan Unit.</li>
                      <li>Agen Member menyatakan sepakat dan wajib menyediakan semua informasi yang diminta oleh Developer yang berkaitan dengan pemasaran dan penjualan Unit pada waktu yang ditentukan oleh Developer, termasuk tetapi tidak terbatas pada laporan-laporan berkala kepada Developer mengenai status dan perkembangan dari kegiatan dan pemasaran unit rumah.</li>
                      <li>Agen Member tidak diperkenankan untuk menerima pembayaran dalam bentuk apapun atas pemesanan Unit dari customer. </li>
                      <li>Bukti pembayaran yang sah atas Unit, adalah yang dikeluarkan serta telah ditandatangani oleh bagian keuangan Developer, bukti tersebut dapat diproses setelah dana masuk ke rekening Developer. </li>
                      <li>Agent Member wajib untuk <em>me-maintain</em> dan mengingatkan jatuh tempo pembayaran customer atas pembelian unit di Green Bamboo Terrace.</li>
                      <li>Developer tidak bertanggung jawab apabila ada hal-hal yang tidak sesuai dengan ketentuan-ketentuan yang sudah ditetapkan, dan atas ketidaksesuaian tersebut menjadi tanggung jawab sepenuhnya dari Agen Member.</li>
                    </ol>

                    <h4 class="section-title">PROMOSI</h4>
                    <ol class="ml-5">
                      <li>Apabila Agen Member hendak membuat materi promosi sendiri, maka Agen Member harus terlebih dahulu mendapat persetujuan dari Developer, termasuk namun tidak terbatas untuk kegiatan promosi pemasangan iklan, pemasangan pamflet, penyebaran brosur, pembuatan kartu nama, dan lain-lainnya.</li>
                      <li>Agen Member tidak diperkenankan melakukan pemasaran dengan cara-cara yang dapat berpotensi menimbulkan kerugian dalam bentuk apapun, pencemaran nama baik dan/atau yang tidak sesuai dengan ketentuan peraturan perundang-undangan yang berlaku.</li>
                    </ol>

                    <h4 class="section-title">KOMISI</h4>
                    <ol class="ml-5">
                      <li>Developer akan memberikan Biaya Komisi kepada Agen Member dengan perhitungan yang ditentukan oleh Developer dari waktu ke waktu. </li>
                      <li>Biaya Komisi akan dibayarkan oleh Developer kepada Agen Member dengan persyaratan sebagai berikut:
                        <ol class="list-alpha-bracket ml-4">
                          <li>
                            Biaya Komisi dikenakan Pajak Penghasilan ("<b>PPh</b>"), sesuai dengan ketentuan peraturan perundang-undangan yang berlaku; dan
                          </li>
                          <li>
                            Sesuai dengan Skema Pembayaran Komisi.
                          </li>
                        </ol>
                      </li>
                      <li>Skema Pembayaran Komisi Agen Member
                        <ol class="list-alpha-bracket ml-4">
                          <li>
                            Besaran Komisi adalah 1% dari harga unit cash dan atau harga unit basic price untuk metode pembayaran lain setelah dikurangi PPN 10%.
                          </li>
                          <li>
                            Komisi sebesar 1% diberikan setelah customer melakukan pembayaran DP 1 untuk cara bayar Cash dan Bertahap atau setelah akad kredit dengan bank untuk cara bayar KPR
                          </li>
                        </ol>
                      </li>
                    </ol>

                    <p>Untuk mengetahui informasi lebih lanjut, kamu dapat menghubungi : telp/wa 0817345620</p>
                </div>
            </div>
              <br>
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
