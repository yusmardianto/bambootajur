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
                <a href="<?php echo base_url ('berita-dan-promo/berteduhlah-di-bawah-pohon-besar-dan-benar'); ?>">
                Kenapa Harus Punya Rumah Di Bogor
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
                <h3 class="news-title">Berteduhlah di Bawah Pohon Besar dan Benar</h3>
                <p class="news-date text-italic text-muted">Jumat, 19 Februari 2021</p>
            </div>
            <div class="pl-3 pt-3 news-content">
                <div class="section-news">

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <picture>
                            <source srcset="<?= base_url();?>assets/images/news/2021/feb/berteduhlah-1.webp" type="image/webp"/>
                            <img class="mb-3 img-fluid" src="<?= base_url();?>assets/images/news/2021/feb/berteduhlah-1.jpg" alt="Sesuatu yang besar tidak akan lahir dari zona yang nyaman">
                            </picture>
                            <div class="mb-4">
                                <p class="mb-0">寄 ら ば 大樹 の 陰</p>
                                <p class="mb-0">Yoraba taiju no kage</p>
                                <p class="mb-0">“Jika kamu berteduh, lakukanlah di bawah pohon besar.”</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <p class="indent-2em">Setiap hari, kita menghadapi situasi yang mengharuskan kita mengambil keputusan. Dari yang kecil dan remeh seperti makan siang di mana hingga yang penting dan akan berdampak besar dalam kehidupan kita, keputusan menerima tawaran kerja atau kapan waktu ideal untuk melamar kekasih. Untuk sekian banyak keputusan yang harus diambil setiap hari itu, selalu ada beberapa pertimbangan yang perlu dipikirkan. Memang, ada kalanya kita bisa memutuskan dengan cepat, tanpa pertimbangan rumit. Tapi kerap kali, bahkan untuk memutuskan makan siang di mana pun, kita memerlukan lebih dari satu pertimbangan sebelum akhirnya memutuskan akan makan siang di mana hari itu. Apalagi bila keputusan yang akan dibuat menyangkut hal-hal yang akan berpengaruh besar bagi kehidupan kita.</p>
                        <p class="indent-2em">Ada begitu banyak elemen dan konsekuensi dari berbagai keputusan besar yang perlu kita pertimbangkan dan membuat kita semakin bingung dan ragu untuk mengambil keputusan. Akibatnya, kita kerap mengulur waktu, padahal penguluran waktu itu justru membuat kita makin sulit memutuskan. Pertimbangan dan analisa tentu saja kita butuhkan, juga berbagai prediksi tentang apa yang akan terjadi setelah keputusan dibuat. Tapi bukankah hidup sejatinya sulit diprediksi dan bisa bergulir di luar kuasa kita? Apa yang perlu kita perhatikan saat dihadapkan dengan pilihan hidup?</p>
                        <p class="indent-2em">Membeli rumah hampir sama rumitnya dengan mencari pasangan hidup karena akan menjadi milik kita selamanya. Memilih rumah yang baik akan cukup menyita energi karena kita harus hati-hati untuk menghindari salah langkah dan kecewa di kemudian hari. Memilih rumah di perumahan misalnya, bisa menjadi satu alternatif untuk kamu yang kebetulan sedang mencari rumah.</p>
                        <p class="indent-2em">Rumah di perumahan otomatis akan memberikan kamu banyak keuntungan misalnya tetangga baru dan pengalaman baru hidup bersama dengan komunitas besar. Saat ini banyak pengembang yang membangun perumahan. Mulai dari pengembang kecil yang membangun sepuluh hingga dua puluh rumah, hingga pengembang kelas kakap yang sanggup membangun ratusan rumah dengan berbagai bentuk dan ukuran.</p>

                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <picture>
                            <source srcset="<?= base_url();?>assets/images/news/2021/feb/berteduhlah-2.webp" type="image/webp"/>
                            <img class="mb-4 img-fluid" src="<?= base_url();?>assets/images/news/2021/feb/berteduhlah-2.jpg" alt="What does a house can give you">
                            </picture>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h4>Green Bamboo Terrace</h4>

                        <p class="indent-2em"><i>Green Bamboo Terrace</i> adalah sebuah perumahan siap huni yang berlokasi di Kota Bogor. Layaknya sebuah pohon besar yang baik untuk berlindung, <i>Green Bamboo Terrace</i> menggunakan material-material terbaik berstandar Jepang yang membuat kamu yakin bahwa rumah adalah tempat berlindung terbaik. Dan bukan hanya sebagai bangunan tempat berlindung, <i>Green Bamboo Terrace</i> adalah tempatmu untuk beristirahat, memulihkan tubuh dari rasa lelah setelah bekerja dan memberikan kenyamanan bagi mereka yang tinggal. </p>
                        <p class="indent-2em">Berikut adalah beberapa keunggulan dari penggunaan material terbaik yang digunakan di <i>Green Bamboo Terrace</i> yang tidak mungkin Anda dapatkan di perumahan lainnya, yaitu ;</p>

                        <ol class="pl-5">
                            <li>Struktur Terbaik:
                                <ul class="pl-4">
                                    <li>Menggunakan Pihak ke 3 sebagai konsultan untuk menghitung struktur dan kekuatan bangunan. Penggunaan kualitas beton K300 dan penggunaan bata merah adalah bentuk komitmen <i>Green Bamboo Terrace</i> dalam memberikan kualitas terbaik untuk sebuah hunian.</li>
                                    <li>Tahan GempaRata-rata perumahan di Jabodetabek hanya sanggup menahan goncangan dari gempa bumi hanya di kisaran 4SR-5SR (SR= Scala Richter), sedangkan di <i>Green Bamboo Terrace</i> diprediksi sanggup untuk menahan gempa bumi yang lebih besar. Pembangunan rumah yang memisahkan proses pembuatan struktur dengan dinding/finishing dan kualitas struktur memegang peranan yang sangat penting dalam ketahanan sebuah rumah terhadap gempa.</li>
                                </ul>
                            </li>
                            <li>Material Terbaik:
                                <ul class="pl-4">
                                    <li>
                                        <b>Pintu merk Daiken</b>
                                        <p class="mb-0">Pintu Daiken terbuat dari engineered wood, yang telah didesain sedemikian rupa sehingga lebih tahan lama, tidak dimakan rayap, tidak memuai dan mengkerut oleh pengaruh cuaca, dan juga telah terbukti kualitasnya sehingga banyak dipakai di Apartemen-apartemen bagus dan mahal di Indonesia. Pemasangan Pintu Daiken juga dilakukan oleh Pihak Daiken sendiri untuk memastikan kualitas dan kepresisian nya.</p>
                                    </li>
                                    <li>
                                        <b>Aluminium Frame YKK</b>
                                        <p class="mb-0">YKK adalah merk aluminium frame No. 1 di Jepang. YKK sangat teruji dan disukai karena lebih presisi. Karena kepresisian nya tidak ada keluhan kasus kebocoran/rembes dari frame YKK saat terpasang di unit rumah/unit apartemen.</p>
                                        <p class="mb-0">Khusus untuk <i>Green Bamboo Terrace</i> dipilihkan YKK seri Fility 70, yang secara khusus dibuat di pabrik YKK di Tangerang, yang lebih cocok dengan iklim Indonesia yang beriklim sub-tropis.</p>
                                        <p class="mb-0">Frame YKK ini juga terbukti mampu menahan tekanan angin dan meredam bising dari Luar.</p>
                                        <p class="mb-0">Tingkat Presisi frame YKK yang sangat tinggi mengharuskan pemasangan Frame YKK ini hanya boleh dilakukan oleh pihak YKK sendiri. Sehingga struktur bangunan untuk pemasangan frame tidak boleh ada yang melenceng ataupun kurang presisi, karena Frame YKK sendiri sudah dirakit secara utuh dari pabrik YKK sehingga harus terpasang secara utuh dan presisi pula. (Bangunan yang harus mengikuti bentuk frame, bukan sebaliknya). Frame YKK ini juga telah terbukti kualitasnya sehingga banyak dipakai di Apartemen-apartemen bagus dan mahal di Indonesia.</p>
                                    </li>
                                    <li>
                                        <b>Kaca Asahi Glass dari Asahimas</b>
                                        <p class="mb-0">Serupa dengan Frame YKK, Asahi Glass juga merk kaca No. 1 di Jepang, yang kualitasnya juga sudah sangat teruji. Perpaduan Frame Kaca dari YKK dan Kaca Asahi Glass dari Asahimas adalah sebuah perpaduan terbaik untuk sebuah hunian. Perpaduan ini pun dilakukan di banyak apartemen mewah di Indonesia.</p>
                                        <p class="mb-0">Kelebihan Asahi Glass juga mampu meredam suara dan panas dari luar, sehingga unit rumah lebih senyap, sejuk dan nyaman untuk ditinggali.</p>
                                    </li>
                                    <li>
                                        <b>Atap Anti Bocor</b>
                                        <p class="mb-0">Atap unit rumah di <i>Green Bamboo Terrace</i> menggunakan Cor Dak Semen yang dilapisi dengan Sika Waterproof yang memiliki komponen mortar berbahan dasar semen yang kedap air. Sehingga <i>Green Bamboo Terrace</i> memberikan garansi kebocoran untuk atap.  Dan tidak hanya itu, bagian bawah atap diberikan insulasi Aluminium foil dan glasswool yang meredam panas sehingga menjadikan ruangan tetap sejuk meskipun dengan atap dak beton.</p>
                                    </li>
                                    <li>
                                        <b>Dispenser dan Water Filter Toclas</b>
                                        <p class="mb-0">Merk Toclas yang dulunya dikenal sebagai Yamaha Water Purifier, adalah sebuah merk yang sangat kuat dan telah lama berkecimpung di dunia water purifier. Filter membrane yang berukuran 0.1 Micron, menghasilkan air siap minum yang menghilangkan bau, karat, kotoran, dan menyaring bakteri hingga 99,99%. Sehingga air lebih enak dan lebih sehat untuk dikonsumsi. </p>
                                    </li>
                                </ul>

                            </li>
                        </ol>

                        <p class="indent-2em">Penggunaan material-material premium dengan kualitas terbaik tersebut tentunya membuat Anda terbebas dari rasa khawatir, yang pada akhirnya membuat pikiran dan jiwa Anda lebih tenang dan memberikan dampak pada kesehatan yang lebih baik. Pemilihan lokasi rumah, spesifikasi bangunan rumah, serta suasana dan fasilitas yang baik adalah juga sebuah investasi kesehatan untuk Anda dan orang yang Anda sayangi. </p>
                        <p class="indent-2em">Yang juga tak kalah menarik adalah, saat ini <i>Green Bamboo Terrace</i> memberikan  Promo kemudahan cara bayar melalui cara bayar KPR dengan Down Payment cukup 5%, dan dapat dicicil 3x bayar. Tak cukup sampai di situ, untuk cara bayar KPR, <i>Green Bamboo Terrace</i> juga memberikan Free BPHTB.</p>
                        <p class="indent-2em">Dan khusus di bulan ini, apabila transaksi pembelian unit <i>Green Bamboo Terrace</i> selain Free BPHTB untuk cara bayar KPR, akan mendapatkan free 1 Unit AC Mitsubishi, Dispenser dan water filter Toclas, 2 buah unit Toren air, dan 1 buah water Heater dan Carport Canopy.</p>
                        <p class="indent-2em">Saat ini kami juga melayani <i>Virtual Home Tour</i>, yaitu Anda bisa melihat sekeliling perumahan unit di <i>Green Bamboo Terrace</i> serta setiap ruangan melalui platform : Whatsapp Video Call, Live IG, Live Youtube, atau ingin dikirimkan video home tour maupun link youtube nya. </p>
                        <p class="indent-2em font-weight-bold">Seperti sebuah pohon yang besar dan sangat berguna, <i>Green Bamboo Terrace</i> adalah pilihan yang paling tepat untuk Anda miliki sebagai rumah impian Anda bersama keluarga yang Anda sayangi.</p>
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