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
            <i>Green Bamboo Terrace</i>, Perumahan Siap Huni di Kota Bogor
                </a></li>
        </ul>
    </div>
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <?php include 'sidebar-news.php' ?>
        
        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
                <h1 class="news__page-title">Informasi dan Promo</h1>
                <h3 class="news-title"><i>Green Bamboo Terrace</i>, Perumahan Siap Huni di Kota Bogor</h3>
                <p class="news-date text-italic text-muted">Senin, 7 Juni 2021</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="section-news"> 
                    <div class="row justify-content-center">
                        <div class="col-md-10" style="text-align:center">
                            <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/2021/juni/banner.png" alt="Green Bamboo Terrace, Perumahan Siap Huni di Kota Bogor"> 
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                        <p class="indent-2em">Memiliki rumah di Bogor merupakan suatu aset dengan nilai yang tinggi. Rumah di Bogor punya banyak keunggulan. Bahkan rumah di Bogor memiliki kelebihan yang tidak bisa Anda dapatkan di kota besar yang tentu saja harga rumahnya lebih tinggi seperti di Jakarta. Kelebihan memiliki rumah di Bogor dapat Anda nikmati baik sebagai tempat tinggal atau hunian, maupun jika Anda memperlakukannya sebagai aset investasi properti.</p>
                        <p class="indent-2em">Dengan memiliki rumah di Bogor, Anda mendapatkan kelebihan di semua aspek, dari segi lokasi, fasilitas, dan nilai properti. Bogor termasuk salah satu kota yang memiliki lokasi cukup dekat ke ibu kota, sama halnya seperti Depok, Bekasi dan Tangerang. Dari Bogor, Anda memerlukan waktu tempuh 47 menit saja menuju Jakarta via Tol Jagorawi.</p>
                        <p class="indent-2em">Oleh karena alasan itu, memiliki rumah di Bogor dapat menjadi opsi alternatif bagi Anda yang bekerja atau memiliki bisnis di Jakarta namun lebih memilih membeli hunian dengan harga yang lebih terjangkau. Tak heran tentunya jika harga rumah di Bogor lebih rendah jika dibandingkan dengan harga rumah di Jakarta.</p>
                        <p class="indent-2em">Jakarta sebagai kota terbesar dan paling berkembang di Indonesia memiliki angka kenaikan harga properti yang amat tinggi. Dengan akses yang kini mudah dan cepat ke Jakarta, Anda pun dapat menjangkau berbagai fasilitas yang ada di ibu kota dengan mudah meski tinggal di Bogor.</p>
                        <p class="indent-2em">Selain dekat dengan Jakarta, Bogor juga dekat ke Tangerang. Anda dapat mencapai kawasan Serpong dan BSD City dengan cepat. Memiliki rumah di Bogor, Anda dapat menikmati lingkungan yang masih lebih asri dibandingkan dengan kota-kota sekitarnya seperti Jakarta, Bekasi dan Depok.</p>
                        <p class="indent-2em">Ruang terbuka hijau di Bogor masih luas, salah satu yang terkenal adalah Kebun Raya Bogor. Dengan lingkungan yang masih memiliki banyak ruang hijau ini, ada banyak kelebihan yang dapat dinikmati. Anda dan keluarga tinggal di lingkungan dengan udara yang lebih menyehatkan dan segar dengan sedikitnya polusi. Dekat dengan banyak lingkungan hijau, artinya dekat pula ke berbagai tempat wisata alam yang menyegarkan.</p>
                        <p class="indent-2em">Dengan memiliki rumah di Bogor, Anda dapat dengan mudah mengakses berbagai destinasi rekreasi yang indah alami. Kota Bogor merupakan salah satu kota yang paling berkembang di Indonesia.  Memiliki rumah di Bogor, Anda mendapatkan pengalaman hunian di kota besar. Terdapat berbagai fasilitas umum dan fasilitas sosial.</p>
                        <p class="indent-2em">Di Bogor, Anda tidak akan kesulitan memenuhi kebutuhan dan menikmati beragam hiburan. Fasilitas yang tersedia di Kota Hujan ini meliputi pusat pendidikan, fasilitas kesehatan, dan area perbelanjaan.</p>
                        
                        <p class="indent-2em">Berikut beberapa di antaranya :</p>
                        <ul class="ml-5">
                            <li>Botani Square</li>
                            <li>Lippo Plaza Bogor</li>
                            <li>Bogor Indah Plaza</li>
                            <li>BTW Mall</li>
                            <li>Cibinong City Mall</li>
                            <li>Institut Pertanian Bogor (IPB)</li>
                            <li>Universitas Pakuan</li>
                            <li>Universitas Ibn Khaldun</li>
                            <li>Universitas Djuanda (UNIDA)</li>
                            <li>Universitas Nusa Bangsa (UNB)</li>
                            <li>RS Karya Bhakti Pratiwi</li>
                            <li>RS Bogor Medical Center</li>
                            <li>RS Pertamedika Sentul City Bogor</li>
                            <li>RS Marzoeki Mahdi</li>
                            <li>RS PMI Bogor</li>
                        </ul>

                        <p class="indent-2em">Selain itu, di Bogor banyak destinasi wisata alam yang menyenangkan seperti Kebun Raya Bogor, JungleLand, Taman Wisata Matahari, dan Kuntum Farmfield. Dengan beragam keistimewaan Bogor ini, tak heran jika banyak orang mengincar perumahan di Bogor.</p>
                        <p class="indent-2em">Salah satu perumahan yang bisa Anda jadikan pilihan adalah perumahan <i>Green Bamboo Terrace</i>. Sebuah perumahan yang terletak di Kotamadya Bogor ini menawarkan perumahan yang sudah siap huni atau <i>ready stock</i>.</p>
                        <p class="indent-2em"><i>Green Bamboo Terrace</i> adalah perumahan yang siap huni yang berlokasi di Tajur, Kota Bogor. Yang menawarkan hunian yang exclusive dan private bagi para pembeli yang mendambakan perumahan yang telah siap huni, juga memiliki kualitas dengan standar perumahan di Jepang.</p>
                        <p class="indent-2em">Bahkan kini, <i>Green Bamboo Terrace</i> juga sedang menawarkan <i>Phase 2</i> untuk memberikan pilihan terbaik bagi para pencari rumah, dengan mengadaptasi seluruh permintaan customer-customer yang telah datang, melihat dan membeli unit perumahan di <i>Green Bamboo Terrace</i>.</p>
                        
                        <p class="indent-2em"><b>Apa Yang Baru Dari Phase 2 ?</b></p>
                        <p class="indent-2em">- New Façade Design</p>
                        <p class="indent-2em">Untuk Phase 2 ini <i>Green Bamboo Terrace</i> memperkenalkan Unit <i>New Momiji</i> dan  <i>New Akane</i> dengan design fasad baru dan juga dengan layout ruangan yang baru. Dengan design layout baru ini setiap unit baik Unit <i>New Momiji</i> dan <i>New Akane</i> memiliki kamar utama yang lebih besar dan memiliki 1 kamar tambahan di lantai bawah. Ini untuk memenuhi permintaan customer yang ingin memiliki unit dengan 1 kamar di lantai bawah dan memiliki <i>Master Bedroom</i>.</p>

                        <p class="indent-2em">- Memiliki <i>Genkan</i> (玄関)*</p>
                        <p class="indent-2em"><i>Genkan</i> (玄関) adalah area pintu masuk bergaya tradisional untuk rumah, apartemen, atau suatu bangunan lainnya—yang terdiri dari kombinasi dari teras dan keset.[1] Pada umumnya terletak langsung di depan pintu masuk. Fungsi utama dari <i>genkan</i> adalah sebagai area melepas sepatu sebelum memasuki ruangan utama di dalam rumah atau suatu bangunan lainnya.</p>
                        <p class="indent-2em">Fungsi sekunder dari <i>genkan</i> ialah menjadi tempat untuk kunjungan sementara tanpa masuk ke dalam rumah.[2] Bila di negara barat para pengantar pizza akan berdiri di serambi depan rumah dan melakukan transaksi di sana, maka di Jepang hal serupa akan dilakukan di halaman <i>genkan</i> .[3]</p>
                        <p class="indent-2em"><i>Genkan</i> pada umumnya dibangun lebih rendah dari muka tanah sehingga dapat menampung tanah atau kotoran yang terbawa dari luar. Ketinggian dasar <i>genkan</i> ke muka tanah bervariasi dari sangat rendah (5–10 cm) hingga seukuran lutut. <i>Genkan</i> di apartemen biasanya jauh lebih kecil dari yang umumnya terpasang di rumah-rumah, dan mungkin tidak memiliki perbedaan ketinggian dengan muka lantai di sekitarnya; dan untuk dianggap <i>genkan</i>, mungkin cukup dengan membedakan bahan bangunan antara <i>genkan</i> dan lantai.</p>
                        <p class="indent-2em">Setelah seseorang melepas sepatunya, dia harus menghindari kakinya untuk tidak melangkah atau menyentuh permukaan <i>genkan</i> (三和土 tataki) baik dalam keadaan menggunakan kaus kaki atau dalam keadaan kaki telanjang, supaya kotoran di <i>genkan</i> tidak terbawa masuk ke rumah.[2] Ketika berada di dalam rumah, biasanya akan menggunakan uwabaki (上履き) (上履き): yaitu sandal atau sepatu khusus di dalam ruangan.</p>
                        <p class="indent-2em">Sekolah-sekolah dan pemandian umum (銭湯 sento) memiliki rak sepatu besar (下駄箱, getabako) dengan kotak untuk masing-masing sepatu. Di rumah pribadi, getabako mungkin tidak ada, dan sepatu biasanya menghadap pintu sehingga mereka dapat digunakan dengan mudah ketika akan meninggalkan rumah.</p>
                        <p class="indent-2em">(Sumber : Wikipedia Bahasa Indonesia)</p>

                        <p class="indent-2em">Beradaptasi dengan pandemik yang sedang mewabah saat ini, <i>Green Bamboo Terrace</i> beradaptasi untuk design unit phase 2. Di mana fungsi adanya <i>Genkan</i> ini adalah untuk memberikan ruang pembatas dari orang yang berasal dari rumah yang hendak masuk ke dalam rumah.  Fungsi Ruangan (<i>Genkan</i>) ini digunakan agar orang yang berasal dari luar dan hendak masuk ke dalam rumah, dapat melepas alas kakinya terlebih dahulu, dan membersihkan dirinya terlebih dahulu sebelum masuk ke dalam rumah. Tindakan <i>preventif</i> untuk membawa dan menyebarkan virus/bakteri yang terbawa dari luar rumah ke dalam rumah.</p>
                        
                        <p><b>Juga menggunakan Struktur dan Material Terbaik</b></p>
                        <p>1. Struktur Terbaik:</p>
                        <ul class="ml-5">
                            <li>Menggunakan Pihak ke 3 sebagai konsultan untuk menghitung struktur dan kekuatan bangunan. Penggunaan kualitas beton K300 dan penggunaan bata merah adalah bentuk komitmen <i>Green Bamboo Terrace</i> dalam memberikan kualitas terbaik untuk sebuah hunian.</li>
                            <li>Tahan Gempa. Rata-rata perumahan di Jabodetabek hanya sanggup menahan guncangan dari gempa bumi hanya di kisaran 4SR-5SR (SR= Scala Richter), sedang di <i>Green Bamboo Terrace</i> dengan kualitas dan material struktur terbaik diprediksi sanggup untuk menahan gempa bumi yang lebih besar. Struktur dari sebuah rumah juga memegang peranan yang sangat penting.</li>
                        </ul>
                        <p>2. Material Terbaik :</p>
                        <ul class="ml-5">
                            <li><b>Pintu dari Daiken</b>
                            <br>Pintu Daiken terbuat dari engineered wood, yang telah didesain sedemikian rupa sehingga lebih tahan lama, tidak dimakan rayap, tidak memuai dan mengkerut oleh pengaruh cuaca, dan juga telah terbukti kualitasnya sehingga banyak dipakai di Apartemen-apartemen bagus dan mahal di Indonesia. Pemasangan Pintu Daiken juga dilakukan oleh Pihak Daiken sendiri untuk memastikan kualitas dan kepresisian nya.</li>
                            <li><b>Aluminium Frame YKK</b>
                            <br>YKK adalah merk aluminium frame No. 1 di Jepang. YKK sangat teruji dan disukai karena lebih presisi. Karena kepresisian nya tidak ada keluhan kasus kebocoran/rembes dari frame YKK saat terpasang di unit rumah/unit apartemen. Khusus untuk <i>Green Bamboo Terrace</i> dipilihkan YKK seri Fility 70, yang secara khusus dibuat di pabrik YKK di Tangerang, yang lebih cocok dengan iklim Indonesia yang beriklim sub-tropis. Frame YKK ini juga terbukti mampu menahan tekanan angin dan meredam bising dari Luar. Tingkat Presisi frame YKK yang sangat tinggi mengharuskan pemasangan Frame YKK ini hanya boleh dilakukan oleh pihak YKK sendiri. Sehingga struktur bangunan untuk pemasangan frame tidak boleh ada yang melenceng ataupun kurang presisi, karena Frame YKK sendiri sudah dirakit secara utuh dari pabrik YKK sehingga harus terpasang secara utuh dan presisi pula. (bangunan yang harus mengikuti bentuk frame, bukan sebaliknya) Frame YKK ini juga telah terbukti kualitasnya sehingga banyak dipakai di Apartemen-apartemen bagus dan mahal di Indonesia.</li>
                            <li><b>Kaca Asahi Glass dari Asahimas</b>
                            <br>Serupa dengan Frame YKK, Asahi Glass juga merk kaca No. 1 di Jepang. Yang kualitasnya juga sudah sangat teruji. Perpaduan Frame Kaca dari YKK dan Kaca Asahi Glass dari Asahimas adalah sebuah perpaduan terbaik untuk sebuah hunian. Perpaduan ini pun dilakukan di banyak apartemen mewah di Indonesia. Kelebihan Asahi Glass juga mampu meredam suara dan panas dari luar, sehingga unit rumah lebih senyap yang menjadikan rumah lebih nyaman. ruangan tetap sejuk.</li>
                            <li><b>Dispenser dan Water Filter Toclas</b>
                            <br>Merk Toclas yang dulunya dikenal sebagai Yamaha Water Purifier, adalah sebuah merek yang sangat kuat dan telah lama berkecimpung di dunia water purifier. Filter membrane yang berukuran 0.1 Micron, menghasilkan air siap minum yang menghilangkan bau, karat, kotoran, dan menyaring bakteri hingga 99,99%. Sehingga air lebih enak dan lebih sehat untuk dikonsumsi.</li>
                        </ul>

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
