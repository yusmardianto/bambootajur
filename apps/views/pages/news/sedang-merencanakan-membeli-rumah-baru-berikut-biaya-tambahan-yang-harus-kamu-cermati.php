<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>

<style>
    .indent-2em {
        text-indent: 2em;
    }
    .pl-2em {
        padding-left: 2em;
    }
</style>

<div style="color: #000;background-color:#fff;text-align:left;padding: 120px 5% 20px 5%;text-align: justify;">
<div style="margin: 20px 0;">
        <ul class="breadcrumbdesign">
            <li><?php echo '<a href="'.base_url().'">Beranda</a>' ?></li>
            <li><a href="<?= site_url(['berita-dan-promo'])?>">Berita</a></li>
            <li>
                <a href="<?php echo base_url ('berita-dan-promo/sedang-merencanakan-membeli-rumah-baru-berikut-biaya-tambahan-yang-harus-kamu-cermati'); ?>">
                Sedang Merencanakan Membeli Rumah Baru? Berikut Biaya Tambahan Yang Harus kamu Cermati
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
                <h3 class="news-title">Sedang Merencanakan Membeli Rumah Baru? Berikut Biaya Tambahan Yang Harus kamu Cermati</h3>
                <p class="news-date text-italic text-muted">Rabu, 20 Januari 2021</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="section-news">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <picture>
                            <source srcset="<?= base_url();?>assets/images/news/2021/jan/best-decision-2021.webp" type="image/webp"/>
                            <img class="mb-4 img-fluid" src="<?= base_url();?>assets/images/news/2021/jan/best-decision-2021.jpg" alt="Awali Keputusan Terbaik 2021">
                            </picture>
                        </div>
                    </div>
                    <div class="">
                        <p class="indent-2em">Jika Kamu tengah bersiap untuk membeli rumah, sebaiknya siapkan dana lebih di luar harga rumah yang Kamu incar. Pasalnya, ada beberapa biaya lain yang akan timbul dari proses jual beli tersebut. Beberapa di antaranya termasuk Biaya KPR apabila Kamu membeli dengan cara bayar KPR, biaya notaris, hingga pajak yang harus dikeluarkan oleh baik penjual maupun pembeli.</p>
                        <p class="indent-2em">Biaya-Biaya ini harus dibayar lunas terlebih dahulu sebelum Kamu bisa membuat AJB atau Akta Jual Beli. AJB ini nantinya digunakan untuk mengurus Sertifikat Hak Milik yang menjadi bukti kuat bahwa Kamu sekarang adalah pemilik sah dari properti tersebut. </p>
                        <p class="indent-2em">Biaya jual beli rumah yang dikenakan kepada penjual dan pembeli tentu berbeda. Untuk mengetahui lebih lengkap tentang apa saja biaya yang harus dikeluarkan serta perhitungannya, berikut ini ulasan lengkapnya.</p>
                        <ol class="ml-5">
                            <li>
                              <b>PPN (Pajak Pertambahan Nilai) </b>
                              <p>Biaya proses jual beli rumah yang harus diperhatikan berikutnya adalah biaya PPN. Besaran umum Pajak Pertambahan Nilai (PPN) besarnya adalah 10% dari nilai transaksi.</p>
                              <p>Minimal nilai transaksi yang dipungut di atas Rp 36 juta.</p>
                              <p>PPN hanya dikenakan satu kali saat membeli properti, baik dari <i>developer</i> maupun perorangan. Di samping itu pajak ini juga dikenakan terhadap pembangunan rumah yang dilakukan secara sendiri oleh orang pribadi atau badan.</p>
                              <p>Ada beberapa Developer yang tidak memasukkan PPN 10% ke dalam harga jual rumah, sehingga Kamu harus benar-benar bertanya mengenai harga jual yang ditawarkan sudah termasuk PPN 10% atau belum.</p>
                            </li>
                            <li>
                              <b>Biaya KPR</b>
                              <p>Untuk Kamu yang membeli rumah secara KPR, tentu ada biaya KPR yang biasanya tidak termasuk dalam Harga Jual Rumah tersebut. Berbeda halnya jika Kamu membeli rumah dengan cara tunai yang tidak akan menimbulkan biaya seperti jika membayar dengan cara kredit atau KPR. Apabila pendanaan yang Kamu lakukan dengan cara KPR, akan timbul biaya tambahan seperti biaya provisi, administrasi, Asuransi dan lainnya yang besar biayanya berkisar 4% sampai 5% dari total pinjaman (<i>plafon</i>) yang disetujui. Untuk biaya KPR sepenuhnya akan menjadi tanggung jawab dari pihak pembeli</p>
                            </li>
                            <li>
                              <b>Biaya BPHTB</b>
                              <p>BPHTB adalah pajak yang dikenakan untuk perolehan hak atas tanah dan atau bangunan yang akan ditanggung oleh pembeli properti.</p>
                              <p>Pajak ini perlu dibayarkan ketika peralihan hak atau penandatanganan akta jual beli di notaris/PPAT. Sejak tahun 2011, seluruh pengelolaan pajak ini dilakukan oleh pemerintah daerah.</p>
                              <p>Berikut adalah cara penghitungannya:</p>
                              <p class="text-center">
                                  <b>BPHTB = (Nilai transaksi – Nilai Perolehan Objek Pajak Tidak Kena Pajak*) x 5 %</b>
                              </p>
                              <p><i>* NPOPTKP di tiap daerah tergantung kebijakan pemerintahan setempat (Khusus untuk Kota Bogor, ada Pengurang sebesar Rp. 60.000.000,-).</i></p>
                            </li>
                            <li>
                              <b>Biaya AJB</b>
                              <p>Perlu diketahui terlebih dahulu dalam PP No.37 tahun 1998 pasal 2 ayat 1, disebutkan bahwa Akta Jual Beli (AJB) dibuat oleh PPAT (Pejabat Pembuat Akta Tanah) bukan notaris ataupun BPN.</p>
                              <p>Biaya yang harus dibayarkan biasanya sekitar 1% dari nilai transaksi, namun angka ini masih bisa ditawar.</p>
                              <p>Pembayarannya pun ditanggung oleh pembeli atau sesuai dengan kesepakatan.</p>
                              <p>Bisa juga biaya ini ditanggung oleh kedua belah pihak.</p>
                              <p>Sebelum mengurus AJB, Anda harus melakukan pemeriksaan sertifikat, pembayaran PBB, melunasi PPh, BPHTB terlebih dahulu.</p>
                            </li>
                            <li>
                              <b>Biaya Balik Nama</b>
                              <p>Biaya Balik Nama (BBN) dikenakan kepada pihak pembeli saat proses balik nama sertifikat properti dari penjual kepada pihak pembeli.</p>
                              <p>Untuk jual beli properti melalui developer, maka BBN diurus oleh developer dan konsumen tinggal membayarnya. Namun, jika properti dibeli dari perseorangan, biaya BBN ini diurus sendiri oleh pembeli.</p>
                              <p>Besarnya BBN di setiap daerah berbeda-beda, namun rata-rata sekitar 2 % dari nilai transaksi.</p>
                              <p>Berikut adalah cara penghitungannya:</p>
                              <p class="text-center">
                                  <b>BBN = 2 % x Nilai Transaksi</b>
                              </p>
                            </li>
                            <li>
                                <b>Biaya Notaris</b>
                                <p>Pejabat Pembuat Akta Tanah (PPAT) atau yang dikenal sebagai notaris, memiliki peran penting dalam transaksi jual beli properti.</p>
                                <p>Hal ini disebabkan notaris adalah satu-satunya pihak yang berwenang menentukan keabsahan dari proses jual beli.</p>
                                <p class="mb-0">Berikut rincian yang harus dibayarkan kepada notaris:</p>
                                <ul class="pl-4 mb-2" style="list-style-type: disc;">
                                    <li>Biaya cek sertifikat: Rp100 ribu</li>
                                    <li>Biaya SK: Rp1 juta</li>
                                    <li>Biaya validasi pajak: Rp200 ribu</li>
                                    <li>Biaya AJB: Rp2,4 juta</li>
                                    <li>Biaya BBN: Rp750 ribu</li>
                                    <li>Biaya Surat Kuasa Hak Membebankan hak Tanggungan: Rp250 ribu</li>
                                    <li>Biaya Akta Pemberian Hak Tanggungan: Rp1,2 juta</li>
                                </ul>
                                <p class="mb-0">Apabila dijumlahkan, biaya yang harus dikeluarkan untuk membayar notaris bisa mencapai Rp 5 juta.</p>
                                <p class="mb-0">Angka tersebut tidaklah pasti karena ada saja notaris yang mematok harga di bawah atau di atas kisaran tersebut.</p>
                                <p>Tidak hanya itu, ada pula notaris yang ingin dibayar dengan perhitungan 0,5 – 1% dari nilai transaksi.</p>
                            </li>
                        </ol>
                        <p class="indent-2em">Itulah tadi uraian singkat beserta simulasi perhitungan pajak jual beli rumah yang harus disiapkan baik oleh penjual maupun pembeli. Setelah pajak-pajak di atas lunas, barulah pembeli dapat mengatur pembuatan AJB atau akta jual beli sebagai bukti bahwa transaksi jual beli rumah tersebut telah sah. </p>
                        <p class="indent-2em">Atau untuk memudahkanmu, biasanya kamu harus menyiapkan dana sebesar 5%-6% untuk surat-surat dan legalitas yang diterangkan di atas dari harga beli yang sudah termasuk PPN10%.</p>
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