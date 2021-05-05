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
            <li><a href="<?php echo base_url ('news/get-privilege-deals'); ?>">
            Get Privilege Deals, NUP Phase 2 Sekarang !
                </a></li>
        </ul>
    </div>
    <div class="row">
        <!-- NEWS SIDE BAR -->
        <?php include 'sidebar-news.php' ?>
        
        <div class="col-md-9" id="newsContent">
            <div class="pl-3">
                <h1 class="news__page-title">Informasi dan Promo</h1>
                <h3 class="news-title">Get Privilege Deals, NUP Phase 2 Sekarang !</h3>
                <p class="news-date text-italic text-muted">Rabu, 5 Mei 2021</p>
            </div>
            <div class="pl-3 pt-3 news-content">

                <div class="section-news"> 
                    <div class="mb-4 row justify-content-center">
                        <div class="col-md-8">
                            <picture>
                                <source srcset="<?= base_url();?>assets/images/news/2021/may/get-privilege.webp" type="image/webp">
                                <img class="img-fluid" src="<?= base_url();?>assets/images/news/2021/may/get-privilege.jpg" alt="eli Rumah Gratis Biaya KPR & Pajak">
                            </picture>    
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <p class="indent-2em">Memenuhi permintaan dari customer-customer kami, maka <i>Green Bamboo Terrace</i> mulai memperkenalkan Phase 2, di mana customer sudah bisa melakukan NUP untuk mendapatkan <i>privilege</i> memilih unit terlebih dahulu dibandingkan orang lain. </p> 
              
                    <div style="font-size:18px; font-weight:bold" class="mb-2"> Apa Yang Baru Dari Phase 2 ?</div>
                    <ul style="margin-left:25px">
                        <li><strong>New Façade Design</strong><br>
                            <p  class="indent-2em"> Untuk Phase 2 ini <i>Green Bamboo Terrace</i> memperkenalkan Unit <i>New Momiji</i> dan <i>New Akane</i> dengan design fasad baru dan juga dengan layout ruangan yang baru. Dengan design layout baru ini setiap unit baik Unit <i>New Momiji</i> dan <i>New Akane</i> memiliki kamar utama yang lebih besar dan memiliki 1 kamar tambahan di lantai bawah. Ini untuk memenuhi permintaan customer yang ingin memiliki unit dengan 1 kamar di lantai bawah dan memiliki <i>Master Bedroom</i>.</p>
                            <div class="row align-items-center justify-content-center">
                                <div class="col-md-5">
                                    <picture>
                                        <source srcset="<?= base_url();?>assets/images/news/2021/may/design1.webp" type="image/webp">
                                        <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/2021/may/design1.jpg" alt="Phase 2 Design 1">
                                    </picture>    
                                </div>
                                <div class="col-md-5">
                                    <picture>
                                        <source srcset="<?= base_url();?>assets/images/news/2021/may/design2.webp" type="image/webp">
                                        <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/2021/may/design2.jpg" alt="Phase 2 Design 2 ">
                                    </picture>    
                                </div>
                            </div> 
                        </li>
                        <li>
                            <strong>Memiliki Genkan (玄関)*</strong><br>
                            <p class="indent-2em"><strong><i>Genkan</i> (玄関)</strong> adalah area pintu masuk bergaya tradisional untuk rumah, apartemen, atau suatu bangunan lainnya—yang terdiri dari kombinasi dari teras dan keset.[1] Pada umumnya terletak langsung di depan pintu masuk. Fungsi utama dari genkan adalah sebagai area melepas sepatu sebelum memasuki ruangan utama di dalam rumah atau suatu bangunan lainnya</p>
                            <p class="indent-2em">Fungsi sekunder dari <i>genkan</i> ialah menjadi tempat untuk kunjungan sementara tanpa masuk kedalam rumah.[2] Bila di negara barat para pengantar pizza akan berdiri di serambi depan rumah dan melakukan transaksi di sana, maka di Jepang hal serupa akan dilakukan di halaman genkan .[3]</p>
                            <p class="indent-2em">Genkan pada umumnya dibangun lebih rendah dari muka tanah sehingga dapat menampung tanah atau kotoran yang terbawa dari luar. Ketinggian dasar genkan ke muka tanah bervariasi dari sangat rendah (5–10 cm) hingga seukuran lutut. <i>Genkan</i> di apartemen biasanya jauh lebih kecil dari yang umumnya terpasang di rumah-rumah, dan mungkin tidak memiliki perbedaan ketinggian dengan muka lantai di sekitarnya; dan untuk dianggap genkan, mungkin cukup dengan membedakan bahan bangunan antara <i>genkan</i> dan lantai.</p>
                            <p class="indent-2em">Setelah seseorang melepas sepatunya, dia harus menghindari kakinya untuk tidak melangkah atau menyentuh permukaan genkan (三和土 <i>tataki</i>) baik dalam keadaan menggunakan kaus kaki atau dalam keadaan kaki telanjang, supaya kotoran di genkan tidak terbawa masuk ke rumah.[2] Ketika berada di dalam rumah, biasanya akan menggunakan <i>uwabaki</i> (上履き) (上履き): yaitu sandal atau sepatu khusus di dalam ruangan.</p>
                            <p class="indent-2em">Sekolah-sekolah dan pemandian umum (銭湯 <i>sento</i>) memiliki rak sepatu besar (下駄箱, <i>getabako</i>) dengan kotak untuk masing-masing sepatu. Di rumah pribadi, <i>getabako</i> mungkin tidak ada, dan sepatu biasanya menghadap pintu sehingga mereka dapat digunakan dengan mudah ketika akan meninggalkan rumah.</p>
                            <p class="indent-2em">(Sumber : Wikipedia Bahasa Indonesia)</p>
                            <p class="indent-2em">Beradaptasi dengan pandemik yang sedang mewabah saat ini, <i>Green Bamboo Terrace</i> beradaptasi untuk design unit phase 2. Di mana fungsi adanya <i>Genkan</i> ini adalah untuk memberikan ruang pembatas dari orang yang berasal dari rumah yang hendak masuk ke dalam rumah.  Fungsi Ruangan (Genkan) ini digunakan agar orang yang berasal dari luar dan hendak masuk ke dalam rumah, dapat melepas alas kakinya terlebih dahulu, dan membersihkan dirinya terlebih dahulu sebelum masuk ke dalam rumah. Tindakan <i>preventif</i> untuk membawa dan menyebarkan virus/bakteri yang terbawa dari luar rumah ke dalam rumah.</p>
                            
                        </li>
                        <li>
                        <strong>Lokasi Phase 2 Berada ditengah-tengah <i>Green Bamboo Terrace</i>.</strong>
                             <div class="row align-items-center justify-content-center">
                                <div class="col-md-12 pt-3" style="text-align:center">
                                    <picture>
                                        <source srcset="<?= base_url();?>assets/images/news/2021/may/phase2-map.webp" type="image/webp">
                                        <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/2021/may/phase2-map.jpg" alt="Phase 2 Locasi">
                                    </picture>    
                                </div>
                                
                            </div> 
                            <p class="indent-2em" style="font-size:14px">  Ditandai dengan berwarna merah di atas, phase 2 berada di tengah-tengah perumahan <i>Green Bamboo Terrace</i>, dan customer masih memiliki kesempatan untuk memilih type yang menghadap arah yang diinginkan antara Utara atau Selatan. Dan juga masih dapat memilih untuk unit yang berada di hook.</p>
                        </li>
                    </ul>
                </div> 

                <div class="">
                    <div style="font-size:18px; "><strong>Mengapa Harus memilih unit rumah di <i>Green Bamboo Terrace</i>?</strong></div>
                    <p class="indent-2em">Berikut adalah beberapa keunggulan dari penggunaan material terbaik yang digunakan di <i>Green Bamboo Terrace</i> yang tidak mungkin Anda dapatkan di perumahan lainnya, yaitu ;</p>
                    <ol style="margin-left:25px" class="list-number">
                        <li><div><strong>Struktur Terbaik:</strong></div>
                            <ul style="margin-left:25px">
                                <li>Menggunakan Pihak ke 3 sebagai konsultan untuk menghitung struktur dan kekuatan bangunan. Kualitas beton dan penggunaan bata merah adalah bentuk komitmen <i>Green Bamboo Terrace</i> dalam memberikan kualitas terbaik untuk sebuah hunian</li>
                                <li>Tahan Gempa<br>
                                    Rata-rata perumahan di Jabodetabek hanya sanggup menahan guncangan dari gempa bumi hanya di kisaran 4SR-5SR (SR= Scala Richter), sedang di <i>Green Bamboo Terrace</i> dengan kualitas struktur terbaik diprediksi sanggup untuk menahan gempa bumi yang lebih besar. Struktur dari sebuah rumah juga memegang peranan yang sangat penting.</li>
                            </ul>

                        </li>
                        <li><div><strong>Material Terbaik :</strong></div>
                            <ul style="margin-left:25px">
                                <li> Pintu dari Daiken <br>
                                    <p>Pintu Daiken terbuat dari engineered wood, yang telah didesain sedemikian rupa sehingga lebih tahan lama, tidak dimakan rayap, tidak memuai dan mengkerut oleh pengaruh cuaca, dan juga telah terbukti kualitasnya sehingga banyak dipakai di Apartemen-apartemen bagus dan mahal di Indonesia. Pemasangan Pintu Daiken juga dilakukan oleh Pihak Daiken sendiri untuk memastikan kualitas dan kepresisian nya.</p></li>
                                <li>Aluminium Frame YKK<br>
                                    <p>YKK adalah merk aluminium frame No. 1 di Jepang. YKK sangat teruji dan disukai karena lebih presisi. Karena kepresisian nya tidak ada keluhan kasus kebocoran/rembes dari frame YKK saat terpasang di unit rumah/unit apartemen. </p>
                                    <p>Khusus untuk<i>Green Bamboo Terrace</i> dipilihkan YKK seri Fility 70, yang secara khusus dibuat di pabrik YKK di Tangerang, yang lebih cocok dengan iklim Indonesia yang beriklim sub-tropis.</p>
                                    <p>Frame YKK ini juga terbukti mampu menahan tekanan angin dan meredam bising dari luar.</p>
                                    <p>Tingkat Presisi frame YKK yang sangat tinggi mengharuskan pemasangan Frame YKK ini hanya boleh dilakukan oleh pihak YKK sendiri. Sehingga struktur bangunan untuk pemasangan frame tidak boleh ada yang melenceng ataupun kurang presisi, karena Frame YKK sendiri sudah dirakit secara utuh dari pabrik YKK sehingga harus terpasang secara utuh dan presisi. (bangunan yang harus mengikuti bentuk frame, bukan sebaliknya)</p>
                                    <p>Frame YKK ini juga telah terbukti kualitasnya sehingga banyak dipakai di Apartemen-apartemen bagus dan mahal di Indonesia.</p></li>
                                <li>Kaca Asahi Glass dari Asahimas<br>
                                <p>Serupa dengan Frame YKK, Asahi Glass juga merk kaca No. 1 di Jepang. Yang kualitasnya juga sudah sangat teruji. Perpaduan Frame Kaca dari YKK dan Kaca Asahi Glass dari Asahimas adalah sebuah perpaduan terbaik untuk sebuah hunian. Perpaduan ini pun dilakukan di banyak apartemen mewah di Indonesia. </p>
                                <p>Kelebihan Asahi Glass juga mampu meredam suara dan panas dari luar, sehingga unit rumah lebih senyap yang menjadikan rumah lebih nyaman.</p></li>
                                <li>Dispencer dan Water Filter Toclas<br>
                                <p>Merk Toclas yang dulunya dikenal sebagai Yamaha Water Purifier, adalah sebuah merek yang sangat kuat dan telah lama berkecimpung di dunia water purifier. Filter membrane yang berukuran 0.1 Micron, menghasilkan air siap minum yang menghilangkan bau, karat, kotoran, dan menyaring bakteri hingga 99,99%. Sehingga air lebih enak dan lebih sehat untuk dikonsumsi. </p></li>
                            </ul> 
                            <p class="indent-2em">Dengan konsep rumah modern minimalis yang lebih exclusive dan private yang siap huni juga memiliki fasilitas yang sangat lengkap. </p>
                            Fasilitas yang tersedia di perumahan <i>Green Bamboo Terrace</i> adalah :
                            <ul style="margin-left:25px">
                                <li>Club House</li>
                                <li>Children Pool</li>
                                <li>Garden with kids playground (taman)</li>
                                <li>Mushola</li>
                                <li>Security dan CCTV 24 Jam</li>
                                <li>Jaringan Listrik bawah Tanah</li>
                                <li>PDAM, (Line Telepon dan Line Internet belum tersedia hanya disiapkan jalur saja)</li>
                                <li>Lebar jalan utama 11 Meter dan lebar jalan rumah 8 meter.</li> 
                            </ul>
                        </li>
                        <li><div><strong>Lokasi yang strategis dan memiliki Fasilitas lengkap di dekat Perumahan <i>Green Bamboo Terrace</i></strong></div>
                        <div class="row align-items-center justify-content-center">
                                <div class="col-md-12 pt-3" style="text-align:center">
                                    <picture>
                                        <source srcset="<?= base_url();?>assets/images/news/2021/may/phase2-facility.webp" type="image/webp">
                                        <img class="img-fluid mb-4" src="<?= base_url();?>assets/images/news/2021/may/phase2-facility.jpg" alt="Phase 2 Locasi">
                                    </picture>    
                                </div>
                                
                            </div> 
                        </li>
                    </ol>
                   <p class="indent-2em">
                   <i>Green Bamboo Terrace</i> dari developer Jepang memberikan hunian yang terbaik untuk anda dan keluarga, dengan standar bahan material premium dan bergaransi yang kami gunakan.
                   </p>
                   <strong>
                   <p class="pb-2">TUNGGU APALAGI?! </p>
                   <p class="pb-2">SEKARANGLAH SAATNYA!!! <br> GREEN BAMBOO TERRACE – PHASE 2 </p>
                   <p class="pb-2">STARTING 1,3M - 1,8M <br>Adapting to a New Normal</p>
                   <p class="pb-2">Catat Tanggalnya <br> Dibuka Pendaftaran NUP mulai 1 Mei 2021, biaya NUP 5 juta<br>
                   Siapa Cepat Dia Dapat!!!!                   </p>
                    <strong>
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
