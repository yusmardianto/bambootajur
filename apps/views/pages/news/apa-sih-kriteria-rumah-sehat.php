<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>

<style>
    sup{
      top: -.5em !important;
    }
    .indent-2em {
        text-indent: 2em;
    }
    .pl-2em {
        padding-left: 2em;
    }
    .list-number-brackets,
    .list-alphabet-brackets{
      counter-reset: list;
    }
    .list-number-brackets li,
    .list-alphabet-brackets li{
      list-style: none;
    }
    .list-number-brackets li:before{
      content: counter(list) ") ";
      counter-increment: list;
    }
    .list-alphabet-brackets li:before{
      content: counter(list, lower-alpha) ") ";
      counter-increment: list;
    }
</style>

<div style="color: #000;background-color:#fff;text-align:left;padding: 120px 5% 20px 5%;text-align: justify;">
<div style="margin: 20px 0;">
        <ul class="breadcrumbdesign">
            <li><?php echo '<a href="'.base_url().'">Beranda</a>' ?></li>
            <li><a href="<?= site_url(['berita-dan-promo'])?>">Berita</a></li>
            <li>
                <a href="<?php echo base_url ('berita-dan-promo/selamat-tinggal-2020-selamat-datang-2021'); ?>">
                Apa sih kriteria rumah sehat?
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
                <h3 class="news-title">Apa sih kriteria rumah sehat?</h3>
                <p class="news-date text-italic text-muted">Jumat, 20 Agustus 2021</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="section-news">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                          <picture>
                            <source srcset="<?= base_url();?>assets/images/news/2021/aug/rumah-sehat-bawa-kebahagiaan.webp" type="image/webp"/>
                            <img class="mb-4 img-fluid" src="<?= base_url();?>assets/images/news/dec/rumah-sehat-bawa-kebahagiaan.jpg" alt="Apa Sih Kriteria Rumah Sehat">
                          </picture>
                        </div>
                    </div>
                    <div class="">
                        <p class="indent-2em">Di tengah wabah virus corona yang terjadi di Indonesia, membuat kita akan melakukan cara apapun untuk bisa terhindari dan terinfeksi COVID-19 tersebut. Salah satu cara sederhana adalah melakukan social distancing, #dirumahaja dan juga menjaga kebersihan sehingga menciptakan rumah sehat dan bebas dari penyakit.</p>
                        <p class="indent-2em"><em>Tapi, bagaimana cara untuk hunian Anda masuk kategori rumah sehat? </em></p>
                        <p class="indent-2em">Persyaratan kesehatan rumah tinggal telah ditentukan oleh Keputusan Menteri Kesehatan RI Nomor: 829/Menkes/SK/VII/1999. Sebaiknya, untuk menentukan sehat tidaknya tempat tinggalmu, bisa melihat dari daftar persyaratan berikut ini.</p>
                        <ol class="ml-3">
                          <li class="mb-3">
                            <b>Bahan Bangunan</b>
                            <ol class="ml-3" type="a">
                              <li>Tidak terbuat dari <a href="https://artikel.rumah123.com/daftar-harga-bahan-bangunan-terbaru-2019-jangan-sampai-tertipu-50768">bahan bangunan</a> yang dapat melepaskan zat-zat yang dapat membahayakan kesehatan, antara lain sebagai berikut:
                                <ol class="list-number-brackets ml-3">
                                  <li>Debu Total tidak lebih dari 150 µg m<sup>3</sup></li>
                                  <li>Asbes bebas tidak melebihi 0,5 fiber/m<sup>3</sup>/4jam</li>
                                  <li>Timah hitam tidak melebihi 300 mg/kg.</li>
                                </ol>
                              </li>
                              <li>Tidak terbuat dari bahan yang dapat menjadi tumbuh dan berkembangnya mikroorganisme  patogen.</li>
                            </ol>
                          </li>
                          <li class="mb-3">
                            <b>Komponen dan penataaan ruang rumah</b>
                            <p>Komponen rumah harus memenuhi persyaratan fisik dan biologis sebagai berikut:</p>
                            <ol class="ml-3" type="a">
                              <li>Lantai kedap air dan mudah dibersihkan</li>
                              <li>Dinding:
                                <ol class="list-number-brackets ml-3">
                                  <li>Di ruang tidur, ruang keluarga dilengkapi dengan sarana ventilasi untuk pengaturan sirkulasi udara</li>
                                  <li>Di kamar mandi dan tempat cuci harus kedap air dan mudah dibersihkan</li>
                                </ol>
                              </li>
                              <li>Langit-langit harus mudah dibersihkan dan tidak rawan kecelakaan</li>
                              <li>Bumbung rumah yang memiliki tinggi 10 meter atau lebih harus dilengkapi dengan penangkal petir</li>
                              <li>Ruang di dalam rumah harus ditata agar berfungsi sebagai ruang tamu, ruang keluarga, ruang makan, ruang tidur, ruang dapur, ruang mandi dan ruang bermain anak</li>
                              <li>Ruang dapur harus dilengkapi dengan sarana pembuangan asap.</li>
                            </ol>
                          </li>
                          <li class="mb-3">
                            <b>Pencahayaan</b>
                            <p>Pencahayaan alam dan/atau buatan yang langsung maupun tidak langsung dapat menerangi seluruh ruangan minimal intensitasnya 60 lux, dan tidak menyilaukan.</p>
                          </li>
                          <li class="mb-3">
                            <b>Kualitas Udara</b>
                            <p>Kualitas udara di dalam rumah tidak melebihi ketentuan sebagai berikut:</p>
                            <ol class="list-alphabet-brackets" type="a">
                              <li>Suhu udara nyaman berkisar 18°C sampai dengan 30°C</li>
                              <li>Kelembaban udara berkisar antara 40% sampai 70%</li>
                              <li>Konsentrasi gas SO<sup>2</sup> tidak melebihi 0,10 ppm/24 jam</li>
                              <li>Pertukaran udara ("air exchange rate") 5 kaki kubik per menit per penghuni</li>
                              <li>Konsentrasi gas CO tidak melebihi 100 ppm/8 jam</li>
                              <li>Konsentrasi gas formaldehid tidak melebihi 120 mg/m<sup>3</sup></li>
                            </ol>
                          </li>
                          <li class="mb-3">
                            <b>Ventilasi</b>
                            <p>Luas penghawaan atau ventilasi alamiah yang permanen minimal 10% dari luas lantai.</p>
                          </li>
                          <li class="mb-3">
                            <b>Binatang Penular Penyakit</b>
                            <p>Tidak ada tikus bersarang di dalam rumah.</p>
                          </li>
                          <li class="mb-3">
                            <b>Air</b>
                            <ol class="list-alphabet-brackets" type="a">
                              <li>Tersedia sarana air bersih dengan kapasitas minimal 60 liter/hari/orang</li>
                              <li>Kualitas air harus memenuhi persyaratan kesehatan air bersih dan/atau air minum sesuai dengan peraturan perundang-undangan yang berlaku.</li>
                            </ol>
                          </li>
                          <li class="mb-3">
                            <b>Tersedianya sarana penyimpanan makanan yang aman</b>
                          </li>
                          <li class="mb-3">
                            <b>Limbah</b>
                            <ol class="list-alphabet-brackets" type="a">
                              <li>Limbah cair yang berasal dari rumah tidak mencemari sumber air, tidak menimbulkan bau, dan tidak mencemari permukaan bumi</li>
                              <li>Limbah padat harus dikelola agar tidak menimbulkan bau, pencemaran terhadap permukaan tanah.</li>
                            </ol>
                          </li>
                          <li class="mb-3">
                            <b>Kepadatan hunian ruang tidur</b>
                            <p>Luas ruang tidur minimal 8m<sup>2</sup> dan tidak dianjurkan digunakan lebih dari dua orang tidur dalam satu ruang tidur, kecuali anak di bawah umur 5 tahun.</p>
                          </li>
                        </ol>
                        <p class="indent-2em">Itu dia 10 kriteria rumah sehat menurut Kemenkes. Bagaimana? Apakah hunianmu masuk persyaratan? Jika ya, pertahankan terus untuk menjadikan rumah sehat. Jika belum, segera lakukan upaya agar hunianmu menjadi hunian yang sehat untuk setiap anggota keluarga.</p>
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