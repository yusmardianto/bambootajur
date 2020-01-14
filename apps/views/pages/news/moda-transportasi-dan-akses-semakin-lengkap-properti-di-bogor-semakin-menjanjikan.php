<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    include('layouts/main.php');
?>

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
                <li class="py-1">
                    <a href="<?php echo base_url ('news'); ?>">
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
                  <li class="py-1 news-item-active">
                    Moda Transportasi dan Akses Semakin Lengkap, Properti di Bogor Semakin Menjanjikan.
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
                <h3 class="news-title">Moda Transportasi dan Akses Semakin Lengkap, Properti di Bogor Semakin
                    Menjanjikan.</h3>
                <p class="news-date text-italic text-muted">1 Oktober 2019</p>

                <div class="text-center">
                    <div class="d-inline-block">
                        <img src="<?= base_url();?>assets/images/news/news-tol-bocimi.jpg" class="news-image px-2"
                            alt="news-image">
                        <small class="d-block">Tol Bocimi (Bogor-Ciawi-Sukabumi).</small>
                    </div>
                    <div class="d-inline-block">
                        <img src="<?= base_url();?>assets/images/news/news-stasiun-lrt.jpg" class="news-image px-2"
                            alt="news-iamge-2">
                        <small class="d-block">Stasiun LRT Sentul.</small>
                    </div>
                </div>

            </div>
            <div class="pt-3 news-content">
                <p>Seperti kawasan penyangga Jakarta lainnya, Bogor terus berkembang menjadi area investasi properti
                    yang prospektif. Hal ini tercermin dari pertumbuhan hunian—baik tapak maupun vertikal—yang
                    dikembangkan, selain pusat perbelanjaan dan hiburan. </p>
                <p>Bogor juga disokong oleh sektor transportasi yang baik, misalnya KRL Jabotabek jurusan Bogor
                    –Jakarta Kota guna mengangkut warga Bogor yang bekerja di Ibukota. Hal ini senada berdasarkan
                    demografinya, kelompok usia yang menjadi pemukim baru di Bogor rata-rata merupakan kaum produktif.
                    Kawasan ini juga menyimpan potensi besar lewat gencarnya pembangunan infrastruktur dengan rencana
                    jaringan jalan Bogor Outer Ring Road (BORR), Bogor Inner Ring Road (BIRR), hingga jalan Poros Tengah
                    Timur (jalur Puncak Dua).</p>
                <p>Yang terbaru, jalan Tol Bogor-Ciawi – Sukabumi (Bocimi) per 08 Juni efektif beroperasi untuk seksi 1
                    ruas Ciawi – Cigombong. Jalan tol seksi 1 sepanjang 15,3 kilometer itu diyakini mampu memangkas
                    waktu tempuh hingga 1,5 jam atau mengurai kemacetan sampai 20%.</p>
                <p>Penyelesaian akan dilanjutkan dari Cigombong sampai Cibadak dan ditargetkan selesai pada 2019.
                    Sedangkan untuk sampai Sukabumi Timur akan selesai tahun 2020. Beroperasinya tol dari Ciawi sampai
                    Cigombong saja diperkirakan sudah mengurangi kemacetan yang signifikan.</p>
                <p class="pb-4">Sementara dari rencana tiga seksi tahapan pembangunan BORR, dua di antaranya kini telah
                    rampung.
                    Begitupula dengan pembangunan infrastruktur kereta ringan (light rail transit/LRT) rute Bogor –
                    Cawang yang digadang-gadang bakal bikin properti di kawasan Bogor meroket.</p>

                <h4 class="news-title">Perumahan Green Bamboo Terrace. </h4>
                <p>Kemudahan Akses Dari dan menuju Bogor, juga berdampak kepada meningkatnya permintaan terhadap
                    perumahan di Kota Bogor. </p>
                <p>Trend ini ditangkap dengan baik oleh PT. Kebun Bambu Jakarta, sebagai salah satu Developer Perumahan
                    untuk membangun dan mengembangkan Perumahan <strong>Green Bamboo Terrace</strong> yang berlokasi di
                    Tajur Kota Bogor,
                    yang dapat menempuh hanya dalam 7 menit saja ke Tol Jagorawi dan Tol Bocimi.</p>
                <p>Green Bamboo Terrace Bogor adalah sebuah standar baru untuk hunian tinggal yang Nyaman, Aman, dan
                    Asri yang terletak di Kota Bogor. Dengan Tagline <strong>A Taste Of Japanese Perfection</strong>,
                    Green Bamboo
                    Terrace Bogor menawarkan sebuah hunian yang sangat Exclusive dan Private yang berada di salah satu
                    pusat bisnis dan niaga di Kota Bogor.</p>

                <div class="text-center py-2">
                    <img src="<?= base_url();?>assets/images/news/news-1.jpg" class="w-75" alt="news-1">
                </div>

                <p>Saat Ini, Green Bamboo Terrace Bogor Ditawarkan dengan 2 pilihan unit yang bisa anda pilih sesuai
                    dengan kebutuhan anda. Yaitu:
                </p>
                <ul class="list-unstyled">
                    <li><strong>Type Akane</strong> dengan Luas bangunan 95,5 M dilengkapi dengan 3 Kamar Tidur, dan
                    </li>
                    <li><strong>Type Momiji</strong> dengan Luas Bangunan 73 M yang dilengkapi dengan 2 Kamar Tidur.
                    </li>
                </ul>
                <p>Green Bamboo Terrace Bogor terletak di Kawasan seluas 1,7 Ha dan memiliki jumlah unit yang sangat
                    terbatas yaitu hanya 106 unit, menjadikan Green Bamboo Terrace Bogor sangat exclusive dan private.
                </p>

                <div class="text-center py-2">
                    <img src="<?= base_url();?>assets/images/news/news-2.jpg" class="w-75" alt="news-2">
                </div>

                <p>Phase 1 yang mulai dipasarkan semenjak 1 Mei 2019, yang terdiri dari 38 Unit, telah hampir sepenuhnya
                    rampung dibangun. Dan di akhir September ini, Unit rumah Di Green Bamboo Terrace sudah mulai diserah
                    terimakan kepada para pembeli unit di Green Bamboo Terrace Bogor. </p>
                <p>Perumahan Green Bamboo Terrace juga dibangun menggunakan banyak sekali material-material terbaik di
                    kelasnya. Penggunaan Frame YKK dan Kaca Asahimas, Daun pintu dari Daiken, handle pintu Dekson,
                    sanitary dari Toto, lantai Homogenous Tile dengan merk Alice, dan juga di setiap unit disediakan
                    Dispenser dan water filter dari Toclas, 1 unit AC Mitsubishi, Ground Water Tank dan Torren sebagai
                    sebuah standar.</p>
                <p>Green Bamboo Terrace Bogor siap huni mulai September 2019 dan ditawarkan dengan harga Rp. 1,1
                    Milyar, dan juga menawarkan cara bayar Cash, cicilan ke developer dan juga KPR.</p>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->

<div style="color: #000;background-color:#fff;text-align:center;text-align: justify;">
    <div class="row bg-footer no-margin">

        <div class="col-md-3 f-first">
            <div class="detail-footer">
                <p class="header-footer">Marketing Gallery</p>
                Jalan Raya Tajur No.30, Tajur - Kota Bogor 16141<br>
                Jawa Barat, Indonesia<br>
                Phone <a href="tel:08111403280">0811 1403 280</a><br>
                Phone <a href="tel:02518574255">0251-8574 255</a><br>
                Email <a href="mailto:bambootajur@gmail.com">bambootajur@gmail.com</a><br>
            </div>
        </div>

        <div class="col-md-3">
            <div class="detail-footer">
                <p class="header-footer">Show Unit</p>
                Jalan Unitex, Tajur - Kota Bogor 16141<br>
                Jawa Barat, Indonesia<br>
                Phone <a href="tel:08111403280">0811 1403 280</a><br>
                Email <a href="mailto:bambootajur@gmail.com">bambootajur@gmail.com</a><br>
            </div>
        </div>

        <div class="col-md-3 ml-auto f-first">
            <div class="img-footer f-first">
                <p class="m-nol header-footer no-margin">Development by</p>
                <img src="<?= base_url();?>assets/images/vendor/kbj.png" class="img-kbj" alt="kbj-img" />
            </div>
            <a href="/privacy-policy" class="footer-link-item">Privacy Policy</a>
        </div>
        <!-- <div class="col-md-3 f-first">
            <div class="img-footer">
                <p class="header-footer">Marketing by</p>
                <img src="</?= base_url();?>assets/images/vendor/shinmichi.png" class="img-shinmichi" />
            </div>
        </div> -->

        <!-- icon -->

        <div class="col-sm-12 txt-center f-fav">
            <a href="https://www.facebook.com/GreenBambooTerrace" target="_blank" rel="noopener noreferrer" aria-label="Click here to visit our facebook account"><i
                    class="fab fa-facebook-square"></i></a>
            <a href="https://twitter.com/BambooTajur" target="_blank" rel="noopener noreferrer" aria-label="Click here to visit our twitter account"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/bambootajur.official/" target="_blank" rel="noopener noreferrer" aria-label="Click here to visit our instagram account"><i
                    class="fab fa-instagram"></i></a>
        </div>

    </div>
</div>

<!-- copyright -->
<div style="color: #fff;background-color:#088770;text-align:center;text-align: justify;">
    <div class="col-sm-12 txt-center f-cop">
        &copy; Copyright <?php echo date(Y) ?>. All Rights Reserved
    </div>
</div>

<!-- return to top -->
<!-- <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a> -->
<!-- <a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.."
    class="floating-whatsapp" target="_blank" rel="noopener noreferrer">
    <div class="f-whatsapp"> </div>
    <p class="floating-teks">0811 1403 280</p>
</a> -->

<input type="checkbox" id="messenger" class="icon-checkbox">

<div class="msgr-container">
    <div class="messenger">
        <div class="hero2"></div>
        <div class="scrollable">
            <header class="header hero">
                <label for="messenger" class="home-btn-float-2" style="display:none;">
                    <div id="closeMenu" >X</div>
                </label>
                <p>Hi, we're</p>
                <h1>Green Bamboo Terrace</h1>
                <p>Silakan isi form di bawah ini untuk mendapatkan informasi lebih lanjut</p>
            </header>
            <!--<div class="card-nup">
                <p class="pri">Contact Us Now</p>
                <p class="data">Silahkan isi data informasi di bawah ini atau langsung hubungi kami di: </p>
                <p class="data">
                  <a href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.." class="whatsapp-phone">
                    <img src="<?= base_url();?>assets/images/New_CTA_Button_2.png" alt="whatsapp-icon" />                  </a>
                </p>
                <p class="data">Kami siap menghubungi Anda.</p>
            </div>-->
            <div>
            <form class="form-style" id="bamboo-contact" name="bamboo-contact" method="POST">
                <div style="text-align:left; font-size:12px">
                <label for="InputName">Nama</label>
                </div>
                <div class="form-group">
                    <input type="text" name="name" class="form-control contact-popup-custom" id="InputName"
                        placeholder="Nama Lengkap" required>
                </div>
                <div style="text-align:left; font-size:12px">
                <label for="InputEmail">Alamat Email</label>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control contact-popup-custom" id="InputEmail" aria-describedby="emailHelp"
                        placeholder="Email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div style="text-align:left; font-size:12px">
                <label for="InputPhone">No.Telepon</label>
                </div>
                <div class="form-group">
                    <input type="text" name="number" class="form-control contact-popup-custom" id="InputPhone"
                        placeholder="No. Telepon" maxlength="13" required>
                </div>
                <div class="w-100 txt-center" style="margin-top: 20px">
                    <button type="submit" class="btn btn-primary" id="submit"
                        data-loading-text="Loading...">Kirim</button>
                </div>
                <!-- <ul class="ul-wa">
                    <li class="li-wa"><a
                            href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.."
                            class="phone"><img
                                src="<?= base_url();?>assets/images/icon/whatsapp.png" class="w-30" alt="whatsapp-icon" />0811 1403 280</a></li>
                    <li class="li-wa"><a
                            href="https://api.whatsapp.com/send?phone=628111403280&text=Halo%20Marketing%20Gallery%20Saya%20Mau%20Menanyakan%20.."><img
                                src="<?= base_url();?>assets/images/icon/whatsapp.png" class="w-30" alt="whatsapp-icon" /></a></li>
                </ul> -->
            </form>
            </div>
        </div>
        <footer class="footer">&copy; PT. KEBUN BAMBU JAKARTA <br>All Rights Reserved
        </footer>

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
    $('#' + id + ' ul').toggle();
    $('#' + id + ' i').toggleClass('fa-chevron-up').toggleClass('fa-chevron-down');
    $('#' + id + ' .inactive ul').css('display', 'block');
}
</script>

<script type="text/javascript">
function isMobile() {
    return (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino|android|ipad|playbook|silk/i
        .test(navigator.userAgent || navigator.vendor || window.opera) ||
        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
        .test((navigator.userAgent || navigator.vendor || window.opera).substr(0, 4)))
}

function checkboxEvent() {
    if (document.getElementById('messenger').checked) {
        $('.menuIcon').attr('style', 'display:none');
    } else {
        $('.menuIcon').attr('style', 'display:false');
    }
}

$(document).ready(function() {
    if (isMobile()) {
        $('#messenger').removeAttr("checked");
        $('#messenger').attr("onclick", 'checkboxEvent()');
    } else {
        // $('#messenger').attr("checked", "false");
    };

    $('#bamboo-contact').on('submit', function(e) {
        e.preventDefault();
        var form = $('#bamboo-contact');
        $.ajax({
            url: '<?= site_url(['submit-contact'])?>',
            data: form.serialize(),
            type: 'POST',
            dataType: 'json',
            beforeSend: function(event) {
                $("#submit").html("<i class='fa fa-spinner fa-spin'> </i> wait");
            },
            success: function(data) {
                if (data.save == true) {
                    $("#submit").html("Kirim");
                    alert('Terimakasih, Kontak anda sudah disimpan.');
                    location.reload();
                } else {
                    $("#submit").html("Kirim");
                    alert('Terimakasih, Kontak anda sudah disimpan.');
                    location.reload();
                }
            }
        });
    });
});
</script>