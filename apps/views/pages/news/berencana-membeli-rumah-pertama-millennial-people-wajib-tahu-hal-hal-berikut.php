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
    .fs-18{
      font-size: 18px;
    }
</style>

<div style="color: #000;background-color:#fff;text-align:left;padding: 120px 5% 20px 5%;text-align: justify;">
<div style="margin: 20px 0;">
        <ul class="breadcrumbdesign">
            <li><?php echo '<a href="'.base_url().'">Beranda</a>' ?></li>
            <li><a href="<?= site_url(['berita-dan-promo'])?>">Berita</a></li>
            <li>
                <a href="<?php echo base_url ('berita-dan-promo/berencana-membeli-rumah-pertama-millennial-people-wajib-tahu-hal-hal-berikut'); ?>">
                Berencana Membeli Rumah Pertama? Millennial people wajib tahu hal-hal berikut!!
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
                <h3 class="news-title">Berencana Membeli Rumah Pertama? Millennial people wajib tahu hal-hal berikut!!</h3>
                <p class="news-date text-italic text-muted">Rabu, 06 Oktober 2021</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="section-news">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                          <picture>
                            <source srcset="<?= base_url();?>assets/images/news/2021/okt/illustrasi-milenial.webp" type="image/webp"/>
                            <img class="mb-4 img-fluid" src="<?= base_url();?>assets/images/news/2021/okt/illustrasi-milenial.jpg" alt="Berencana Membeli Rumah Pertama? Millennial people wajib tahu hal-hal berikut!!">
                          </picture>
                        </div>
                    </div>
                    <div>
                      <p class="indent-2em">Buat kalian pasangan muda yang berencana untuk membeli rumah pertama, kalian pasti merasa gugup dan bingung apa aja sih hal-hal yang perlu diperhatikan supaya gak salah pilih dan persiapan apa saja yang dibutuhkan sebelum membeli rumah.</p>
                      <p class="indent-2em">Membeli rumah itu merupakan hal yang besar dan terbilang berat, apalagi jika pengalaman ini menjadi pengalaman yang pertama buat kamu. </p>
                      <p class="indent-2em">Dalam proses membeli rumah pun ada banyak sekali langkah dan persyaratan yang harus dilakukan dan dipenuhi. Belum lagi harga rumah yang mahal, tentunya kamu gak mau kan sampai salah beli dan merugi, atau tidak mampu membayar cicilan di tengah jalan. </p>
                      <p class="indent-2em">Nah buat memudahkan kamu, kami sudah mengumpulkan beberapa tips-tips dalam membeli rumah. Yuk, disimak!!</p>

                      <h3 class="fs-18"><strong><i>Pilih Rumah yang Tepat</i></strong></h3>
                      <p class="indent-2em">Banyak aspek yang perlu kamu pertimbangkan dalam memilih rumah, mulai dari luas lahan, luas bangunan, jumlah kamar tidur, jumlah lantai, dan yang paling penting lokasi dan fasilitas, baik di dalam maupun di sekitar lingkungan perumahannya. </p>
                      <p>Berikut ini beberapa hal yang harus dipertimbangkan ketika membeli rumah:</p>
                      <ol class="pl-3">
                        <li>Ketersediaan fasilitas pendidikan</li>
                        <li>Ketahui tingkat kriminalitas lingkungannya</li>
                        <li>Ketahui fasilitas kesehatan, tempat belanja, dan fasilitas umum lainnya yang kamu perlukan</li>
                        <li>Kenali tingkat kemacetan, polusi suara dan keramaian lingkungannya</li>
                      </ol>
                      <p class="indent-2em">Setelah menentukan rumah yang kamu inginkan, selanjutnya hal yang perlu dipersiapkan adalah cara bayar dan biaya-biaya yang timbul saat proses pembelian rumah. Perlu kamu ketahui bahwa umumnya ada tiga cara pembayaran yang disediakan oleh developer, yaitu cara bayar kontan/cash, cicilan bertahap ke developer dan cicilan menggunakan fasilitas KPR dari Bank.</p>
                      <p class="indent-2em">Untuk tips cara bayar yang akan kami jelaskan kali ini adalah tips jika membeli rumah menggunakan fasilitas KPR karena cara bayar tersebut adalah cara bayar yang paling cocok dengan kaum milenial supaya bisa tetap membeli rumah dengan DP murah dan cicilan dengan jangka waktu yang panjang sehingga tidak menyulitkan dan bisa disesuaikan dengan kemampuan finansial saat ini.</p>

                      <h3 class="fs-18"><strong><i>Pilih Pembayaran KPR yang Sesuai</i></strong></h3>
                      <p class="indent-2em">Kredit Pembelian Rumah (KPR) merupakan cara membeli rumah yang paling banyak dipilih masyarakat, dan kini sistem KPR yang ditawarkan Bank pun semakin beragam dan memudahkan customer yang akan membeli rumah, mulai dari promo DP murah, tenor yang panjang, rate bunga KPR yang bagus, dan lain sebagainya. </p>
                      <p>Memilih skema cicilan KPR yang tepat bagi kamu menjadi hal yang memerlukan pertimbangan matang. Berikut ini adalah hal-hal yang harus kamu perhatikan ketika memilih pinjaman KPR:</p>
                      <ol class="pl-3">
                        <li>
                          Bandingkan uang muka/DP yang harus dibayarkan. 
                          <p>Saat ini Bank menyediakan KPR dengan DP murah, bisa dari 5%, 10% bahkan sampai 0%. Tapi kamu juga harus perhatikan syarat-syaratnya, apakah kamu termasuk dalam kategori customer yang bisa membeli rumah dengan DP yang murah atau tidak.</p>
                        </li>
                        <li>
                          Bandingkan angsuran KPR antar bank. 
                          <p>Setiap Bank memiliki kebijakan yang berbeda-beda dalam hal rate suku bunga. Jadi kamu harus membandingkan rate suku bunga di beberapa Bank karena hal tersebut mempengaruhi besar kecilnya angka cicilan. Selain itu, jangka waktu pinjaman/tenor yang disediakan Bank untuk para customer juga semakin beragam. Kita sebagai kaum milenial memiliki keuntungan jika membeli rumah menggunakan KPR karena tenornya yang bisa sampai 20 tahun atau bahkan 25 tahun.</p>
                        </li>
                        <li>
                          Cari tahu mengenai kebijakan bank ketika ada perubahan suku bunga.
                          <p>Pada Bank Konvensional, biasanya terdapat masa fix suku bunga yang diberikan di awal masa cicilan, yaitu sekitar 3-5 tahun pertama dengan bunga yang rendah. Namun, setelah lewat dari masa fix tersebut, suku bunga akan mengikuti suku Bunga dari Bank Indonesia, yang berarti bahwa nominal cicilan yang kamu bayarkan akan bertambah. Nah informasi mengenai perubahan suku bunga tersebut harus kamu cari tahu jelas-jelas supaya kamu tahu seberapa besar nominal cicilan kamu akan naik.</p>
                          <p>Berbeda dengan Bank Konvensional, di beberapa Bank Syariah terdapat kebijakan yang menyediakan KPR dengan suku bunga fix selama jangka waktu/ tenor pinjaman, sehingga nominal cicilan kamu akan tetap/sama sejak awal sampai akhir masa cicilan. Tetapi biasanya, rate suku bunga Bank Syariah lebih besar/tinggi dibandingkan dengan rate suku bunga Bank Konvensional saat masa fix. </p>
                        </li>
                        <li>
                          Ketahui kebijakan, syarat, dan penalti jika KPR lunas sebelum waktunya
                          <p>Jika membeli rumah dengan cara bayar menggunakan fasilitas KPR dan saat di tengah tenor ingin melunasi sisa cicilannya, kamu harus cari tahu mengenai kebijakan Bank tersebut, apakah ada penalty yang dikenakan atau tidak, dan berapa besarannya. </p>
                        </li>
                        <li>
                          Ketahui total biaya KPR 
                          <p>Jika kamu ingin membeli rumah menggunakan fasilitas KPR dan KPR kamu disetujui, kamu harus membayar sejumlah uang di luar Uang Muka. Apa saja sih biaya tersebut? Biaya tersebut di antaranya adalah biaya untuk appraisal (jika rumah second/bukan rekanan Bank), biaya administrasi dan provisi, pajak pembeli, biaya pengikatan akad, biaya notaris, dll. Biasanya total besaran biaya tersebut adalah sekitar 10-11% dari harga rumah.</p>
                        </li>
                        <li>
                          Ketahui syarat kredit dan dokumen yang harus disediakan
                          <p>Ketika akan mengajukan fasilitas KPR ke Bank, kamu akan dimintakan sejumlah dokumen sebagai persyaratan dalam pengajuan kredit, di antaranya adalah rekening koran tabungan kamu 3-6 bulan terakhir, surat keterangan kerja dari perusahaan, data diri, slip gaji dan lain sebagainya. Tetapi sebelum masuk ke proses tersebut, status kamu akan terlebih dahulu dicek di Bank Indonesia. Status yang dimaksud di sini adalah status/riwayat pinjaman kamu. Kalau kamu ada cicilan/pinjaman di bank lain, kamu harus pastikan bahwa tidak ada history menunggak dalam jangka waktu satu tahun terakhir supaya proses pengajuan KPR kamu bisa berlanjut ke tahap selanjutnya.</p>
                        </li>
                      </ol>
                      <p class="indent-2em">
                      Dari seluruh tips-tips membeli rumah KPR di atas, salah satu yang cukup penting adalah memperhatikan rate bunga. Jangan terpaku pada bunga ringan di tahun-tahun awal cicilan karena itu adalah promo cicilan. Pastikan kamu memperhitungkan dengan benar kemampuan keuangan kamu dengan suku bunga <i>floating</i> yang harus dibayarkan ketika promo cicilan selesai.
                      </p>
                      <p class="indent-2em">
                      Jika melihat dari hal-hal di atas, <strong>Green Bamboo Terrace</strong> merupakan pilihan rumah yang paling tepat untuk millennial people yang berencana membeli rumah pertama. Kenapa begitu? Karena <strong>Green Bamboo Terrace</strong> adalah perumahan yang berada di lokasi strategis di tengah kota Bogor, yang memiliki fasilitas lengkap di sekitarnya baik fasilitas kesehatan, pendidikan maupun pusat perbelanjaan yang bahkan bisa ditempuh hanya dengan berjalan kaki. Selain itu, lokasinya yang berada di kota Bogor menjadi salah satu nilai plus dari perumahan ini karena Bogor masih terkenal dengan kualitas udara dan air yang bersih sehingga tinggal di Bogor akan terasa lebih nyaman. <strong>Green Bamboo Terrace</strong> juga dibangun oleh developer Jepang, sehingga kualitas material, struktur dan desain yang digunakan sudah berstandar Jepang dan menjadikan bangunannya lebih kokoh dan tahan lama.
                      </p>
                      <p class="indent-2em">Pada bulan ini kami juga memberikan promo khusus, yaitu free pajak BPHTB/pajak pembeli, free biaya notaris dan KPR. Sehingga buat kamu yang mau membeli rumah di <strong>Green Bamboo Terrace</strong> tidak perlu khawatir dengan nominal biaya-biaya fantastis seperti yang dijelaskan di atas, karena dengan cukup membayar DP sebesar 5% dan bisa dicicil 3x, kamu sudah bisa mendapatkan rumah dua lantai dengan design modern berstandar Jepang yang berada di tengah Kota Bogor. Ditambah dengan program free Ppn yang diberikan pemerintah untuk rumah ready stock, kamu akan semakin bisa untung jika membeli rumah sekarang. Kalau kamu beli rumah sekarang, total biaya yang bisa kamu safe bisa sampai Rp. 300juta-an lohhh!!! Jadi buat Millennial People, buruan datang sekarang untuk bisa lihat rumahnya secara langsung. <strong>Hubungi 08111 403 280 untuk informasi lebih lanjutnya yaa..</strong></p>
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