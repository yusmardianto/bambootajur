<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>

<style>
    .indent-2em {
        text-indent: 2em;
    }
</style>

<div style="color: #000;background-color:#fff;text-align:left;padding: 120px 5% 20px 5%;text-align: justify;">
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <div class="col-md-3" id="newsSidebar">

            <div class="news-sidebar" id="recent">
                <div class="d-flex flex-row">
                    <p class="py-2 m-0 h5 font-weight-bold">Recent</p>
                    <button type="button" class="close opacity-1 p-2" aria-label="Close" onClick="showNews('recent')">
                        <i class="fas fa-chevron-up"></i>
                    </button>
                </div>
                <ul class="list-unstyled pl-3">
                <li class="py-1 news-item-active">
                    <a href="<?php echo base_url ('news/beli-rumah-di-green-bamboo-terrace-dengan-cara-kpr'); ?>">
                    Beli Rumah Di Green Bamboo Terrace Dengan Cara KPR
                    </a>
                </li>
                <li class="py">
                    <a href="<?php echo base_url ('news/membangun-impian-bersama-green-bamboo-terrace'); ?>">
                    Membangun Impian Bersama Green Bamboo Terrace
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/fasilitas-lengkap-di-green-bamboo-terrace'); ?>">
                    Fasilitas Lengkap di Green Bamboo Terrace
                    </a>
                </li>
                <!-- <li class="py-1">
                    <a href="<?php echo base_url ('news/hanami-festival'); ?>">
                    Hanami Festival
                    </a>
                </li> -->
                <li class="py-1">
                    <a href="<?php echo base_url ('news/dibangun-dulu-baru-dijual'); ?>">
                    Dibangun dulu, Baru dijual…
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/kunjungan-dari-sumitomo-mitsui-banking-corporation-japan'); ?>">
                    Kunjungan Dari Sumitomo Mitsui Banking Corporation Japan
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/february-ai-promo'); ?>">
                    February AI Promo
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/penandatanganan-ajb-dan-balik-nama-unit-di-green-bamboo-terrace'); ?>">
                    Penandatanganan AJB dan Balik Nama Unit di Green Bamboo Terrace
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/berburu-promo-green-bamboo-terrace-bogor-di-awal-tahun-2020'); ?>">
                    Berburu Promo Green Bamboo Terrace Bogor di Awal tahun 2020
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/year-end-promo-crazy-offer'); ?>">
                    Year End Promo - Crazy Offer
                    </a>
                </li>
                <li class="py-1">
                    <a href="<?php echo base_url ('news/momijigari-festival-oktober'); ?>">
                    Momijigari Festival 26-27 Oktober, Keriuhan di Penghujung Bulan Oktober
                    </a>
                </li>
                  <li class="py-1">
                    <a href="<?php echo base_url ('news/serah-terima-unit-phase-1'); ?>">
                    Serah Terima Unit Phase 1
                    </a>
                  </li>
                  <li class="py-1">
                    <a href="<?php echo base_url ('news/customer-gathering-event-get-special-discount-and-gift'); ?>">
                      Customer Gathering Event: Get Special Discount and Gift
                    </a>
                  </li>
                    <li class="py-1">
                    <a href="<?php echo base_url ('news/penandatanganan-kerjasama-dengan-bank-mandiri-dan-bank-bni-syariah'); ?>">
                    Penandatanganan Kerjasama dengan Bank Mandiri dan Bank BNI Syariah
                    </a>
                  </li>
                  <li class="py-1">
                    <a href="<?php echo base_url ('news/moda-transportasi-dan-akses-semakin-lengkap-properti-di-bogor-semakin-menjanjikan'); ?>">
                    Moda Transportasi dan Akses Semakin Lengkap, Properti di Bogor Semakin Menjanjikan.
                    </a>
                  </li>
                </ul>
            </div>

            <div class="news-sidebar inactive" id="aug_19">
                <div class="d-flex flex-row">
                    <p class="text-muted py-2 m-0 h5 font-weight-bold">August 2019</p>
                    <button type="button" class="close opacity-1 p-2" aria-label="Close" onClick="showNews('aug_19')">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <ul class="list-unstyled pl-3">
                </ul>
            </div>

            <div class="news-sidebar inactive" id="jul_19">
                <div class="d-flex flex-row">
                    <p class="text-muted py-2 m-0 h5 font-weight-bold">July 2019</p>
                    <button type="button" class="close opacity-1 p-2" aria-label="Close" onClick="showNews('jul_19')">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
            </div>

            <div class="news-sidebar inactive" id="jun_19">
                <div class="d-flex flex-row">
                    <p class="text-muted py-2 m-0 h5 font-weight-bold">June 2019</p>
                    <button type="button" class="close opacity-1 p-2" aria-label="Close" onClick="showNews('jun_19')">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
            </div>

        </div> <!-- END NEWS SIDE BAR -->

        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
              <h3 class="news-title">Beli Rumah Di Green Bamboo Terrace Dengan Cara KPR</h3>
              <p class="news-date text-italic text-muted">Senin, 20 April 2020</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="row section-news">
                    <div class="col-12 col-md-12">
                        <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/apr/kpr.jpg" alt="KPR Perumahan Green Bamboo Terrace">
                        
                        <div class="mb-4 febpromo-p">
                            
                            <p class="indent-2em">Tingginya kebutuhan akan tempat tinggal membuat para developer semakin agresif mengembangkan properti. Semakin lama Anda menunda rencana investasi rumah, semakin sulit Anda menemukan lahan perumahan dengan lokasi strategis dengan harga yang terjangkau. Harga rumah yang terus melambung menjadikan rumah sebagai salah satu bentuk investasi yang sangat menjanjikan. Selain untuk investasi pribadi, rumah juga menjadi investasi bagi keluarga Anda nantinya. </p>
                            <p class="indent-2em">Rumah memang akan selalu menjadi kebutuhan dan impian setiap manusia. Sebagai salah satu bagian dari kebutuhan hidup manusia, rumah atau tempat tinggal ini pastinya akan diprioritaskan untuk dimiliki. Namun sayangnya harga rumah yang semakin tahun semakin tinggi harganya membuat tidak semua orang mampu memiliki rumah seperti yang diinginkan.</p>
                            <p class="indent-2em">Pembelian secara kontan memang seringkali menyulitkan banyak orang, karena seseorang mengharuskan dirinya untuk menyediakan uang dengan jumlah yang besar. Tapi bila Anda saat ini memang benar-benar ingin memiliki rumah idaman, maka sekarang ada cara efektif untuk itu.</p>
                            <p class="indent-2em"><i>Green Bamboo Terrace</i> menyediakan beragam metode pembiayaan rumah yang bisa Anda pilih. Setiap metode memiliki kelebihan dan kekurangan masing-masing. Meskipun harus menyiapkan dana lebih besar di awal, membeli rumah secara tunai memungkinkan Anda bergerak lebih leluasa karena sertifikat kepemilikan langsung Anda miliki.</p>
                            <p class="indent-2em">Sedangkan dengan KPR, memungkinkan Anda menggunakan sisa dana yang dimiliki untuk keperluan investasi lainnya. Apalagi, saat ini <i>Green Bamboo Terrace</i> telah bekerja sama dengan beberapa bank yang bisa memberikan keringanan DP 5% saja dan free BPHTB.</p>
                            <p class="indent-2em">Jadi ada cara yang mudah untuk memiliki rumah di <i>Green Bamboo Terrace</i> bukan? Yaitu dengan membeli rumah secara kredit melalui KPR (Kredit Kepemilikan Rumah). Dengan membeli rumah secara kredit melalui KPR ini, maka Anda hanya perlu mengangsur atau mencicil rumah yang Anda idamkan tersebut tiap bulannya tentunya dengan jumlah uang yang tidak seberapa jika dibandingkan membeli secara tunai.</p>
                            <p class="indent-2em">Saat ini <i>Green Bamboo Terrace</i> telah bekerja sama dengan beberapa bank untuk kemudahan KPR dalam pembelian rumah di <i>Green Bamboo Terrace</i>. Bank yang telah melakukan MOU perjanjian Kerjasama KPR dengan <i>Green Bamboo Terrace</i> adalah Bank JTrust, Bank Mandiri, Bank BRI, Bank BNI Syariah, Bank Panin, dan Bank Mandiri Syariah. Jadi Anda bisa memilih bank yang Anda percaya untuk melakukan pembelian rumah di <i>Green Bamboo Terrace</i>. </p>
                            <p class="indent-2em">Masing-masing bank tersebut memiliki promo KPR yang berbeda-beda, jadi tinggal tanyakan saja kepada sales in-house kami untuk memberikan rekomendasi terbaik untuk KPR Anda.</p>
                            <p class="indent-2em">Beberapa persyaratan KPR yang harus Anda lengkapi untuk pengajuan ini antara lain fotokopi rekening koran semua tabungan, surat keterangan bekerja, slip gaji 3 bulan terakhir, menjadi pegawai tetap minimal 2 tahun, fotokopi KTP, KK, Surat Nikah, dan lain-lain tergantung masing-masing bank. Sedangkan waktu dalam pengajuan KPR rumah ini sendiri umumnya akan memakan waktu yang cukup lama yaitu 1 bulan.</p>
                            <p class="indent-2em">Dalam waktu satu bulan tersebut, pihak bank biasanya akan melakukan proses survei. Survei ini akan meliputi pantauan ke tempat di mana Anda bekerja, pengecekan ke BI (Bank Indonesia) untuk memastikan Anda dan istri Anda (jika sudah berkeluarga) tidak termasuk dalam blacklist terkait catatan kredit yang mungkin pernah dilakukan sebelumnya dan juga proses wawancara terkait kondisi keuangan Anda.</p>
                            <p class="indent-2em">Satu hal yang perlu diperhatikan dalam proses pengajuan ini adalah kemampuan finansial Anda di mata bank. Umumnya bank akan mensyaratkan cicilan maksimal adalah 30% gaji, ada juga yang membolehkan 40% gaji, ada yang bisa digabung antara penghasilan Anda dengan istri, ada yang hanya mensyaratkan gaji suami saja.</p>
                            <p class="indent-2em">Harga rumah, uang muka, besar cicilan, lama angsuran dan besaran gaji memang akan saling memengaruhi satu dengan lainnya dalam proses pengajuan KPR ini. Maka bila salah satu komponen tadi ada yang dikurangi maka yang lainnya harus lebih tinggi.</p>
                            <p class="indent-2em">Seperti misalnya jika cicilan kredit KPR per bulan ingin diturunkan, maka uang muka harus ditambah, atau jika tidak, lama cicilan diperpanjang. Dari sini Anda memang diharuskan berpikir lebih untuk menentukan pembelian rumah secara kredit ini.</p>
                            <p class="indent-2em">Segera Wujudkan Mimpi Memiliki Rumah di <i>Green Bamboo Terrace</i>.. sampai Jumpa…</p>

                        </div>

                        <!-- <div class="mb-4">
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
                        </div> -->

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