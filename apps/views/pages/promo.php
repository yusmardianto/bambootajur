<div>
    <div class="upper-content">
        <picture>
            <source media="(min-width: 576px)" srcset="<?= base_url() ?>assets/images/promo/main-visual.webp" type="image/webp">
            <source media="(min-width: 576px)" srcset="<?= base_url() ?>assets/images/promo/main-visual.jpg">
            <source srcset="<?= base_url() ?>assets/images/promo/main-visual-sm.webp" type="image/webp">
            <img src="<?= base_url() ?>assets/images/promo/main-visual-sm.jpg" alt="banner" class="img-fluid w-100" width="600" height="200">
        </picture>
        <button type="button" class="btn-arrow">
            <img src="<?= base_url() ?>assets/images/promo/arrow.png" alt="" class="scroll-arrow animated bounce">
        </button>
    </div>
    <div class="upper-banner">
        <div class="container h-100 position-relative">
            <!-- Popup -->
            <div class="promo-popup-wa" id="promo-popup-wa">
                <!-- content -->
                <header class="promo-popup-wa-header">
                    <div class="home-btn-float-2">
                        <div class="promo-popup-wa-close" id="promo-popup-wa-close">X</div>
                    </div>
                    <p>Hi, we're</p>
                    <h3>Green Bamboo Terrace</h3>
                    <p class="pb-2">Silakan isi form di bawah ini sebelum melanjutkan chat whatsapp dengan kami</p>
                </header>
                <div class="promo-popup-wa-body">
                    <form class="text-left" id="bamboo-contact" name="bamboo-contact" method="POST">
                        <div class=" text-left">
                            <small class="text-danger font-weight-bold">* Wajib diisi</small>
                        </div>
                        <div style="text-align:left; font-size:12px">
                            <label>Nama <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-group">
                            <input id="inputNameChat" type="text" name="name" class="form-control contact-popup-custom" pattern="[a-zA-Z][a-zA-Z ]{2,}" title="Gunakan Huruf dan min 3 huruf" placeholder="Nama Lengkap" required>
                        </div>
                        <div style="text-align:left; font-size:12px">
                            <label>No.Telepon <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-group">
                            <input id="inputPhoneChat" type="tel" name="number" class="form-control contact-popup-custom" placeholder="No. Telepon" maxlength="13" pattern="[0-9]{10,}" title="Gunakan hanya angka dan lebih dari 10" required>
                        </div>
                        <div class="w-100 txt-center" style="margin-top: 20px">
                            <button type="submit" class="btn btn-primary w-auto" id="submit" data-loading-text="Loading..." disabled>Chat With Us</button>
                        </div>
                    </form>
                </div>
                <footer class="promo-popup-wa-footer">
                    © PT. KEBUN BAMBU JAKARTA <br>All Rights Reserved
                </footer>
                <!-- content -->
            </div>
            <!-- Popup -->
            <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between w-100 h-100">
                <div class="upper-banner__text">Hubungi Kami Untuk Mendapatkan <br>Pricelist & Brosur Green Bamboo Terrace</div>
                <button class="btn-banner btn-promo-popup-wa" id="btn-promo-popup-wa">
                    <picture>
                        <source srcset="<?= base_url() ?>assets/images/promo/wa-gbt.webp" type="image/webp">
                        <img src="<?= base_url() ?>assets/images/promo/wa-gbt.png" class="img-fluid" alt="whatsapp">
                    </picture>
                </button>
            </div>
        </div>
    </div>
    <div class="center-section" id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdaeU85nrsRjecyLiQkOVP88WLpu9hP_zehZw2KpevtpX2usg/viewform?embedded=true" width="100%" height="100%" class="gform">Memuat…</iframe>
                </div>
                <div class="col-md-6">
                    <div class="card-slider">
                        <div id="banner-top-page" class="carousel slide" data-ride="carousel" data-interval="7000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <picture>
                                        <source srcset="<?= base_url() ?>assets/images/promo/fasad.webp" type="image/webp">
                                        <img src="<?= base_url() ?>assets/images/promo/fasad.jpg" class="img-fluid" alt="" width="266" height="187">
                                    </picture>
                                    <h4 class="carousel-title">Green Bamboo Terrace mempunyai dua unit tipe rumah.</h4>
                                    <div class="carousel-subtitle">
                                        Tipe Akane | 3 kamar tidur <br>
                                        Tipe Momiji | 2 kamar tidur
                                    </div>
                                    <p class="carousel-text">
                                        Cicilan mulai dari 8 Juta-an, dengan cara pembelian:
                                    <ul>
                                        <li>1. Cash Keras</li>
                                        <li>2. Installment / Cicilan Developer</li>
                                        <li>3. KPR Konvensional & Syari'ah</li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="carousel-item">
                                    <picture>
                                        <source srcset="<?= base_url() ?>assets/images/promo/denah-akane.webp" type="image/webp">
                                        <img src="<?= base_url() ?>assets/images/promo/denah-akane.jpg" class="img-fluid" alt="">
                                    </picture>
                                    <h4 class="carousel-title">Denah Bangunan Type Akane</h4>
                                    <div class="carousel-subtitle">Harga mulai 1M</div>
                                    <p class="carousel-text">Tipe Akane adalah rumah minimalis modern 2 lantai tipe 95 dengan 3 kamar tidur, dilengkapi dengan berbagai material premium dengan standar kualitas Jepang, seperti material HomogeneousTile Double Layer Alice yang digunakan sebagai penutup lantai sehingga membuat setiap injakan kaki Anda terasa nyaman dan sejuk.</p>
                                </div>
                                <div class="carousel-item">
                                    <picture>
                                        <source srcset="<?= base_url() ?>assets/images/promo/denahmomiji.webp" type="image/webp">
                                        <img src="<?= base_url() ?>assets/images/promo/denahmomiji.jpg" class="img-fluid" alt="">
                                    </picture>
                                    <h4 class="carousel-title">Denah Bangunan Type Momiji</h4>
                                    <div class="carousel-subtitle">Harga mulai 1M</div>
                                    <p class="carousel-text">Tipe Momiji adalah rumah minimalis modern 2 lantai tipe 73 dengan 2 kamar tidur yang dapat digabung menjadi satu sehingga menjadi satu kamar tidur yang luas layaknya kamar hotel berbintang 5. Rumah ini juga tahan terhadap gempa karena menggunakan pondasi Strauss pile & beton bertulang pondasi batu kali. Dindingnya pun dibuat menggunakan bata merah dan mortar sehingga tidak akan mudah roboh saat diguncang gempa.</p>
                                </div>
                            </div>
                            <ol class="bottom-indicators carousel-indicators">
                                <li data-target="#banner-top-page" data-slide-to="0" class="active"></li>
                                <li data-target="#banner-top-page" data-slide-to="1"></li>
                                <li data-target="#banner-top-page" data-slide-to="2"></li>
                            </ol>
                        </div>
                    </div>
                    <div class="banner-fasilitas">
                        <picture>
                            <source srcset="<?= base_url() ?>assets/images/promo/banner-fasilitas.webp" type="image/webp">
                            <img src="<?= base_url() ?>assets/images/promo/banner-fasilitas.jpg" class="img-fluid" alt="" width="510" height="180">
                        </picture>
                        <div class="banner-fasilitas__gallery">
                            <div class="row">
                                <div class="col-3">
                                    <a href="<?php echo base_url(); ?>assets/images/background/bambootajur-facility-club-house-20190226.jpg" data-toggle="lightbox" data-gallery="promo_gallery">
                                        <picture>
                                            <source srcset="<?php echo base_url(); ?>assets/images/promo/fasilitas1.webp" type="image/webp">
                                            <img src="<?php echo base_url(); ?>assets/images/promo/fasilitas1.jpg" class="img-fluid" alt="" width="95" height="75">
                                        </picture>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="<?php echo base_url(); ?>assets/images/facilities/IMG_1825.jpg" data-toggle="lightbox" data-gallery="promo_gallery">
                                        <picture>
                                            <source srcset="<?php echo base_url(); ?>assets/images/promo/fasilitas2.webp" type="image/webp">
                                            <img src="<?php echo base_url(); ?>assets/images/promo/fasilitas2.jpg" class="img-fluid" alt="" width="95" height="75">
                                        </picture>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="<?php echo base_url(); ?>assets/images/facilities/IMG_1838.jpg" data-toggle="lightbox" data-gallery="promo_gallery">
                                        <picture>
                                            <source srcset="<?php echo base_url(); ?>assets/images/promo/fasilitas3.webp" type="image/webp">
                                            <img src="<?php echo base_url(); ?>assets/images/promo/fasilitas3.jpg" class="img-fluid" alt="" width="95" height="75">
                                        </picture>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <a href="<?php echo base_url(); ?>assets/images/facilities/IMG_829102.jpg" data-toggle="lightbox" data-gallery="promo_gallery">
                                        <picture>
                                            <source srcset="<?php echo base_url(); ?>assets/images/promo/fasilitas4.webp" type="image/webp">
                                            <img src="<?php echo base_url(); ?>assets/images/promo/fasilitas4.jpg" class="img-fluid" alt="" width="95" height="75">
                                        </picture>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-4 col-lg">
                    <a href="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-1.png" data-toggle="lightbox" data-gallery="promo_gallery">
                        <picture>
                            <source srcset="<?php echo base_url(); ?>assets/images/promo/interior-1.webp" type="image/webp">
                            <img src="<?php echo base_url(); ?>assets/images/promo/interior-1.jpg" class="img-fluid" alt="" width="150" height="150">
                        </picture>
                    </a>
                </div>
                <div class="col-4 col-lg">
                    <a href="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-6.png" data-toggle="lightbox" data-gallery="promo_gallery">
                        <picture>
                            <source srcset="<?php echo base_url(); ?>assets/images/promo/interior-2.webp" type="image/webp">
                            <img src="<?php echo base_url(); ?>assets/images/promo/interior-2.jpg" class="img-fluid" alt="" width="150" height="150">
                        </picture>
                    </a>
                </div>
                <div class="col-4 col-lg">
                    <a href="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-3.png" data-toggle="lightbox" data-gallery="promo_gallery">
                        <picture>
                            <source srcset="<?php echo base_url(); ?>assets/images/promo/interior-3.webp" type="image/webp">
                            <img src="<?php echo base_url(); ?>assets/images/promo/interior-3.jpg" class="img-fluid" alt="" width="150" height="150">
                        </picture>
                    </a>
                </div>
                <div class="col-4 col-lg">
                    <a href="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-4.png" data-toggle="lightbox" data-gallery="akane_gallery">
                        <picture>
                            <source srcset="<?php echo base_url(); ?>assets/images/promo/interior-4.webp" type="image/webp">
                            <img src="<?php echo base_url(); ?>assets/images/promo/interior-4.jpg" class="img-fluid" alt="" width="150" height="150">
                        </picture>
                    </a>
                </div>
                <div class="col-4 col-lg">
                    <a href="<?php echo base_url(); ?>assets/images/the-homes/akane-interior-5.png" data-toggle="lightbox" data-gallery="akane_gallery">
                        <picture>
                            <source srcset="<?php echo base_url(); ?>assets/images/promo/interior-5.webp" type="image/webp">
                            <img src="<?php echo base_url(); ?>assets/images/promo/interior-5.jpg" class="img-fluid" alt="" width="150" height="150">
                        </picture>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="banner banner-bottom" id="banner-bottom">
        <div class="container position-relative">
            <!-- Popup -->
            <div class="promo-popup-wa" id="promo-popup-wa-2">
                <!-- content -->
                <header class="promo-popup-wa-header">
                    <div class="home-btn-float-2">
                        <div class="promo-popup-wa-close" id="promo-popup-wa-close-2">X</div>
                    </div>
                    <p>Hi, we're</p>
                    <h3>Green Bamboo Terrace</h3>
                    <p class="pb-2">Silakan isi form di bawah ini sebelum melanjutkan chat whatsapp dengan kami</p>
                </header>
                <div class="promo-popup-wa-body">
                    <form class="text-left" id="bamboo-contact-two" name="bamboo-contact" method="POST">
                        <div class=" text-left">
                            <small class="text-danger font-weight-bold">* Wajib diisi</small>
                        </div>
                        <div style="text-align:left; font-size:12px">
                            <label>Nama <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-group">
                            <input id="inputNameChat-two" type="text" name="name" class="form-control contact-popup-custom" pattern="[a-zA-Z][a-zA-Z ]{2,}" title="Gunakan Huruf dan min 3 huruf" placeholder="Nama Lengkap" required>
                        </div>
                        <div style="text-align:left; font-size:12px">
                            <label>No.Telepon <span class="text-danger">*</span></label>
                        </div>
                        <div class="form-group">
                            <input id="inputPhoneChat-two" type="tel" name="number" class="form-control contact-popup-custom" placeholder="No. Telepon" maxlength="13" pattern="[0-9]{10,}" title="Gunakan hanya angka dan lebih dari 10" required>
                        </div>
                        <div class="w-100 txt-center" style="margin-top: 20px">
                            <button type="submit" class="btn btn-primary w-auto" id="submit-two" data-loading-text="Loading..." disabled>Chat With Us</button>
                        </div>
                    </form>
                </div>
                <footer class="promo-popup-wa-footer">
                    © PT. KEBUN BAMBU JAKARTA <br>All Rights Reserved
                </footer>
                <!-- content -->
            </div>
            <!-- Popup -->
            <div class="d-flex align-items-center">
                <img src="<?php echo base_url(); ?>assets/images/promo/whatsapp-gradient.png" class="img-fluid img-icon">
                <div class="d-flex align-items-center justify-content-between w-100">
                    <p class="banner-text">Dapatkan Pricelist & Brosur <br />Green Bamboo Terrace via Whatsapp</p>
                    <button class="btn-banner btn-promo-popup-wa" id="btn-promo-popup-wa-2">
                        <picture>
                            <source srcset="<?= base_url() ?>assets/images/promo/wa-gbt.webp" type="image/webp">
                            <img src="<?= base_url() ?>assets/images/promo/wa-gbt.png" class="img-fluid" alt="whatsapp">
                        </picture>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-promo">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 order-12 order-md-1">
                    <iframe src="https://maps.google.com/maps?q=green%20bamboo%20terrace&t=&z=11&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="min-height: 500px;" allowfullscreen="" loading="lazy" class="footer-map"></iframe>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-12">
                    <h4 class="footer-promo-title">Lokasi Strategis</h4>
                    <div class="footer-promo-item">
                        <div class="footer-item-icon">
                            <img src="<?php echo base_url(); ?>assets/images/promo/highway.svg" alt="" width="32" height="30">
                        </div>
                        <p class="mb-0">Akses Pintu Tol Jagorawi dan Tol Bocimi</p>
                    </div>
                    <div class="footer-promo-item">
                        <div class="footer-item-icon">
                            <img src="<?php echo base_url(); ?>assets/images/promo/train.svg" alt="" width="36" height="24">
                        </div>
                        <p class="mb-0">Dekat dengan Stasiun Bogor</p>
                    </div>
                    <div class="footer-promo-item">
                        <div class="footer-item-icon">
                            <img src="<?php echo base_url(); ?>assets/images/promo/shopping-bag.svg" alt="" width="23" height="30">
                        </div>
                        <p class="mb-0">Dekat dengan Mall Boxies Bogor</p>
                    </div>

                    <div class="footer-contact-wrapper mb-1 mb-md-0">
                        <div class="d-flex align-items-center mb-2">
                            <div class="marker-icon">
                                <img src="<?php echo base_url(); ?>assets/images/promo/pin.svg" alt="" width="16" height="24">
                            </div>
                            <div class="footer-contact-title">GREEN BAMBOO TERRACE</div>
                        </div>
                        <h4 class="font-weight-bold">Marketing Gallery</h4>
                        <p>Jalan Raya Tajur No.30, Tajur - Kota Bogor 16141 <br />
                            Jawa Barat, Indonesia</p>
                        <hr class="footer-contact-separator">
                        <div class="footer-contact-info">
                            Phone : 0811 1403 280 | Phone : 0251-8574 255 <br>
                            Email : bambootajur@gmail.com</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center my-4">
                    © Copyright 2022. All Rights Reserved | Green Bamboo Terrace, Development by Kebun Bambu Jakarta
                </div>
            </div>
        </div>
    </div>
</div>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script async="" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
<script defer>
    $("#btn-promo-popup-wa").click(function() {
        $("#promo-popup-wa").show();
    });
    $("#promo-popup-wa-close").click(function() {
        $("#promo-popup-wa").hide();
    });

    $("#btn-promo-popup-wa-2").click(function() {
        $("#promo-popup-wa-2").show();
    });
    $("#promo-popup-wa-close-2").click(function() {
        $("#promo-popup-wa-2").hide();
    });

    $(document).ready(function() {

        $("#bamboo-contact").on('keyup', function() {
            var inputName = $("#inputNameChat").val();
            var inputPhone = $("#inputPhoneChat").val();
            if (inputName.length >= 3 && (inputPhone.length >= 10 && inputPhone.match(/^\d+$/))) {
                $("#submit").attr('disabled', false);
            } else {
                $("#submit").attr('disabled', true);
            }
        });

        $('#bamboo-contact').on('submit', function(e) {
            e.preventDefault();
            var form = $('#bamboo-contact');
            $.ajax({
                url: '<?= site_url(['email-wa']) ?>',
                data: form.serialize(),
                type: 'POST',
                dataType: "text",
                cache: false,
                beforeSend: function(event) {
                    $("#submit").html("<i class='fa fa-spinner fa-spin'> </i> wait");
                },
                success: function(data) {
                    if (data == 'sukses') {
                        $("#submit").html("Kirim");
                        window.dataLayer = window.dataLayer || [];
                        window.dataLayer.push({
                            'event': 'floatingContactForm'
                        });
                        openInNewTab("https://api.whatsapp.com/send?phone=628111403280&text=Hai%20Green%20Bamboo%20Terrace%2C%20saya%20ingin%20minta%20eBrosur%20%26%20Pricelist.%20Terima%20kasih.");
                        location.reload();
                    } else {
                        $("#submit").html("Kirim");
                        openInNewTab("https://api.whatsapp.com/send?phone=628111403280&text=Hai%20Green%20Bamboo%20Terrace%2C%20saya%20ingin%20minta%20eBrosur%20%26%20Pricelist.%20Terima%20kasih.");
                        location.reload();
                    }
                }
            });
        });

        $("#bamboo-contact-two").on('keyup', function() {
            var inputName = $("#inputNameChat-two").val();
            var inputPhone = $("#inputPhoneChat-two").val();
            if (inputName.length >= 3 && (inputPhone.length >= 10 && inputPhone.match(/^\d+$/))) {
                $("#submit-two").attr('disabled', false);
            } else {
                $("#submit-two").attr('disabled', true);
            }
        });

        $('#bamboo-contact-two').on('submit', function(e) {
            e.preventDefault();
            var form = $('#bamboo-contact-two');
            $.ajax({
                url: '<?= site_url(['email-wa']) ?>',
                data: form.serialize(),
                type: 'POST',
                dataType: "text",
                cache: false,
                beforeSend: function(event) {
                    $("#submit-two").html("<i class='fa fa-spinner fa-spin'> </i> wait");
                },
                success: function(data) {
                    if (data == 'sukses') {
                        $("#submit-two").html("Kirim");
                        window.dataLayer = window.dataLayer || [];
                        window.dataLayer.push({
                            'event': 'floatingContactForm'
                        });
                        openInNewTab("https://api.whatsapp.com/send?phone=628111403280&text=Hai%20Green%20Bamboo%20Terrace%2C%20saya%20ingin%20minta%20eBrosur%20%26%20Pricelist.%20Terima%20kasih.");
                        location.reload();
                    } else {
                        $("#submit-two").html("Kirim");
                        openInNewTab("https://api.whatsapp.com/send?phone=628111403280&text=Hai%20Green%20Bamboo%20Terrace%2C%20saya%20ingin%20minta%20eBrosur%20%26%20Pricelist.%20Terima%20kasih.");
                        location.reload();
                    }
                }
            });
        });

        function openInNewTab(href) {
            Object.assign(document.createElement('a'), {
                target: '_blank',
                href: href,
            }).click();
        }
    });


    $(document).on("click", '[data-toggle="lightbox"]', function(t) {
        t.preventDefault(), $(this).ekkoLightbox()
    });
    $(".btn-arrow").click(function() {
        $('html, body').animate({
            scrollTop: $("#content").offset().top
        }, 1000);
    });
    let wWidth = window.innerWidth;
    if (wWidth < 575) {
        $('.upper-banner, .banner-bottom').on('click', function() {
            window.location.href = 'https://api.whatsapp.com/send?phone=628111403280&text=Hai%20Green%20Bamboo%20Terrace%2C%20saya%20ingin%20minta%20eBrosur%20%26%20Pricelist.%20Terima%20kasih.';
        });
    }
</script>