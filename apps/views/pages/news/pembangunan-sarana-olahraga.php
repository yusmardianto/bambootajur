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
            <li><a href="<?php echo base_url ('news/pembangunan-sarana-olahraga'); ?>">
            Pembangunan Sarana Olahraga dan Taman Kota di Sekitar Kawasan Perumahan Green Bamboo Terrace
                </a></li>
        </ul>
    </div>
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <?php include 'sidebar-news.php' ?>
        
        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
                <h1 class="news__page-title">Informasi dan Promo</h1>
                <h3 class="news-title">Pembangunan Sarana Olahraga dan Taman Kota di Sekitar Kawasan Perumahan Green Bamboo Terrace</h3>
                <p class="news-date text-italic text-muted">Selasa, 20 April 2021</p>
            </div>
            <div class="pl-3 pt-3 news-content">

                <div class="section-news"> 
                    <div class="mb-4 row justify-content-center">
                        <div class="col-md-8">
                            <picture>
                                <source srcset="<?= base_url();?>assets/images/news/2021/apr/pembangunan-1.webp" type="image/webp">
                                <img class="img-fluid" src="<?= base_url();?>assets/images/news/2021/apr/pembangunan-1.jpg" alt="eli Rumah Gratis Biaya KPR & Pajak">
                            </picture>    
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <p class="indent-2em">Selasa 6 April 2021, tepatnya di depan Perumahan <i>Green Bamboo Terrace</i>, Kelurahan Sindangrasa, Kecamatan Bogor Timur. Wakil Wali Kota Bogor Dedie A. Rachim bersama Wakil Ketua DPRD Kota Bogor Jenal Mutaqin meninjau lokasi lahan yang akan dijadikan sarana olahraga dan taman kota.</p>
                    <p class="indent-2em">Sebelumnya, lahan seluas 1.800 meter persegi ini merupakan lahan milik PT. Unitex, namun diperbolehkan untuk dipinjam pakai untuk kepentingan warga sekitar seperti dijadikan taman bermain, olahraga, dan lahan penghijauan atau pertanian.</p>
                </div>
                
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-5">
                        <picture>
                            <source srcset="<?= base_url();?>assets/images/news/2021/apr/pembangunan-2.webp" type="image/webp">
                            <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/2021/apr/pembangunan-2.jpg" alt="eli Rumah Gratis Biaya KPR & Pajak">
                        </picture>    
                    </div>
                    <div class="col-md-5">
                        <picture>
                            <source srcset="<?= base_url();?>assets/images/news/2021/apr/pembangunan-3.webp" type="image/webp">
                            <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/2021/apr/pembangunan-3.jpg" alt="eli Rumah Gratis Biaya KPR & Pajak">
                        </picture>    
                    </div>
                </div>

                <div class="">
                    <p class="indent-2em">Wakil Wali Kota Bogor Dedie A. Rachim mengatakan, pada prinsipnya Pemerintah Kota (Pemkot) Bogor mendukung dan akan mengusahakan lahan tersebut bisa menjadi milik Pemkot Bogor, karena ke depan jika sudah milik pemkot tentu bisa dianggarkan untuk membangun fasilitas yang dibutuhkan warga.</p>
                    <p class="indent-2em">Di tempat yang sama, Wakil Ketua DPRD Kota Bogor Jenal Mutaqin mengaku, selama kebutuhan bersifat kepentingan umum dan positif tentu DPRD akan mendorong dan mensupport apa yang diprogramkan oleh pemerintah.</p>
                    <p class="indent-2em">Jenal pun mengapresiasi warga di Sindangrasa yang telah melakukan gerakan swadaya. Menurutnya, ini sangat luar biasa dari lahan yang tidak terawat sebelumnya, berkat swadaya bisa dipergunakan pinjam pakai dan dimanfaatkan.</p>
                    <p class="indent-2em">Sementara, tokoh masyarakat Ki Narto menambahkan, ide dan gagasan dari warga mewujudkan sarana olahraga dan taman Kota. “Sarana olahraga ini agar anak-anak memiliki tempat khusus berolahraga. Saat ini kami secara swadaya untuk mewujudkannya, diharapkan nanti ada bantuan dari berbagai pihak, terutama Pemkot Bogor dan DPRD Kota Bogor,” harapnya.</p>
                    <p class="indent-2em">Dengan hadirnya fasilitas olahraga dan taman yang berada persis di depan perumahan <i>Green Bamboo Terrace</i> ini, maka semakin lengkap pula lah fasilitas pendukung yang ada di sekitar perumahan <i>Green Bamboo Terrace</i> ini. </p>
                </div>

                <!-- <div class="mb-4">
                        <p class="indent-2em">Desain interior adalah merencanakan, menata, dan merancang ruang-ruang interior dalam bangunan. Tatanan yang dapat memenuhi kebutuhan dasar kita akan sarana untuk bernaung dan berlindung, menentukan langkah sekaligus mengatur bentuk aktivitas kita, memelihara aspirasi dan mengekspresikan ide-ide yang menyertai segala tindakan kita, memengaruhi penampilan, perasaan dan juga kepribadian kita.</p>
                        <p class="indent-2em">Visualisasi fasad yang sempurna, adalah hal yang sangat didambakan setiap pemilik rumah. Dalam beberapa situasi, tampilan luar terutama bagian depan tersebut justru menjadi hal yang paling banyak mendapat perhatian. Akibatnya, penataan bagian dalam seolah hanya menjadi faktor sekunder saja, alias nomor dua. Padahal jika ditanya mana yang lebih penting, eksterior atau interior, jawabannya adalah dua-duanya.</p>
                        <p class="indent-2em"><strong>Bagaimana kita menilai apakah suatu desain itu baik atau buruk?</strong></p>
                        <p class="indent-2em">Sebuah desain dianggap baik atau buruk menurut pendapat perancangnya (desainer), kliennya atau orang lain dan tentunya pengguna desain tersebut (end user). Satu dua alasan diringkas seperti berikut:</p>
                        <ul class="ml-5">
                            <li>Desain dianggap bagus sebab telah memenuhi fungsinya dengan baik.</li>
                            <li>Sebuah desain dianggap bagus sebab berbiaya murah, ekonomis, efisien, dan tahan lama.</li>
                            <li>Satu desain dianggap bagus sebab tampak indah secara estetis, dan,</li>
                            <li>Sebuah desain dianggap bagus sebab dapat menimbulkan kembali perasaan dan ingatan akan suatu waktu dan tempat, membawa arti.</li>
 
                        </ul>
                        <p class="indent-2em">Kadang-kadang, kita menilai suatu desain sebagai bagus karena kita berpendapat desain tersebut mengikuti model desain yang sedang populer, sedang menjadi tren atau karena dapat menimbulkan impresi pada orang lain, seperti dapat mengangkat status kita.</p>
                        <div class="row justify-content-center">
                            <div class="col-md-10" style="text-align:center">
                                <picture>
                                    <source srcset="<?= base_url();?>assets/images/news/2021/apr/interior.webp" type="image/webp">
                                    <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/2021/apr/interior.jpg" alt="eli Rumah Gratis Biaya KPR & Pajak">
                                </picture>    
                            </div>
                        </div>
                        <p class="indent-2em">Beberapa desain dianggap bagus juga karena dianggap mudah dimengerti dan diterima oleh umum. Sedangkan yang lain baru dapat dihargai oleh sekelompok orang tertentu saja. Desain yang sukses biasanya dapat menyampaikan lebih dari satu pesan sehingga dapat menarik perhatian orang banyak.</p>
                        <p class="indent-2em">Desain interior sangatlah penting untuk menciptakan suasana ruangan yang tidak hanya indah dilihat, namun juga nyaman digunakan sehingga siapapun yang ada di dalamnya akan merasa betah dan ingin berlama-lama di dalamnya.</p>
                        <p class="indent-2em">Walau sebuah ruangan tersebut memiliki ukuran yang luas, namun jika penataan interior di dalamnya tidaklah bagus maka ruangan tersebut akan terlihat biasa saja bahkan akan terasa sempit. Untuk itu dibutuhkan desain interior untuk menghasilkan ruangan yang indah dan nyaman.</p>
                        <p class="indent-2em" style="text-decoration:underline"><strong>Berikut 5 tips mendesain rumah minimalis agar terlihat elegan dan cozy :</strong></div>

                        <ol class="ml-5">
                            <li><strong>Pikirkan dulu fungsinya</strong><br>Peralihan ke desain interior rumah minimalis harus dilakukan dengan mempertimbangkan fungsi. Agar membuat penghuninya merasa tenang dan nyaman, ruangan harus bersifat fungsional. </li>
                            <li><strong>Buat tempat penyimpanan</strong><br>Konsep desain interior rumah minimalis tidak membuat ruangan berantakan. Buatlah tempat penyimpanan barang yang sederhana, misalnya tempat meletakkan barang di meja dapur, meja makan, atau dekat pintu masuk.<br>Cara terbaik untuk membuat desain interior minimalis yang menarik adalah dengan menggabungkan dekorasi dan fungsi.</li>
                            <li><strong>Teliti dalam memilih warna</strong><br>Banyak warna yang digabungkan dalam ruangan justru menciptakan kekacauan visual, Bunda. Pilihlah skema warna dengan aksen warna selain putih. Namun, kalau kita memilih warna palet, kita harus berkomitmen dengan warna itu di setiap ruangan.</li>
                            <li><strong>Sisakan ruang kosong</strong><br>Dalam interior minimalis, ruang kosong adalah bagian dari desain. Dinding bersih atau sudut-sudut yang kosong membuat ruangan terasa luas dan terang.<br>Meski kosong, bukan berarti hambar atau tidak ada apapun. Dibandingkan menggantung hiasan di dinding, cobalah bermain dengan warna cat yang bisa membuat tampilan lantai indah.</li>
                            <li><strong>Gabungkan tekstur berbeda</strong><br>Memadukan berbagai tekstur bisa menjadi cara untuk membangun tampilan visual yang enggak bikin bosan. Dalam waktu yang sama, ruangan tetap terlihat minimalis.</li>
                        </ol>
                        <p class="indent-2em">Fakta bahwa kita lebih sering menghabiskan waktu di dalam ruangan, menjadi alasan tidak terbantahkan pentingnya desain interior. Sebuah seni dan sains dalam penataan ruang yang akan memberikan banyak sekali keuntungan dan manfaat bagi kesehatan tubuh dan mental.</p>
                        <p class="indent-2em">Desain interior yang sempurna akan memberikan Anda kenyamanan, ketenangan, dan juga keamanan yang Anda butuhkan saat berada di dalam ruangan tersebut. Dan oleh sebab itu pula, untuk mendapatkan manfaat desain interior secara maksimal, ia haruslah memenuhi 3 tujuan dari sains interior itu sendiri, yaitu memperbaiki fungsi, estetika, dan juga aspek psikologis.</p>
                    </div>
                </div> -->

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
