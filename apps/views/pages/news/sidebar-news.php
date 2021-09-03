<?php
    function active($current_page){
        $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
        $url = end($url_array); 
        if($current_page == $url){
            echo 'news-item-active'; 
        }
    } 
?>

<div class="col-md-3" id="newsSidebar">
    <div class="news-sidebar" id="recent">
        <div class="d-flex flex-row" onClick="showNews('recent')">
            <p class="py-2 m-0 h5 font-weight-bold">Recent</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close">
                <i class="fas fa-chevron-up"></i>
            </button>
        </div>
        <ul class="list-unstyled pl-3">
            <li class="py-1 <?php active('menjadi-member-atau-agent-lepas-untuk-memasarkan-unit-di-green-bamboo-terrace'); active('news') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/menjadi-member-atau-agent-lepas-untuk-memasarkan-unit-di-green-bamboo-terrace'); ?>">
                Menjadi Member atau Agent Lepas untuk memasarkan unit di Green Bamboo Terrace
                </a>
            </li>
            <li class="py-1 <?php active('apa-sih-kriteria-rumah-sehat'); active('news') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/apa-sih-kriteria-rumah-sehat'); ?>">
                Apa sih kriteria rumah sehat?
                </a>
            </li>
            <li class="py-1 <?php active('keputusan-terbaik-saat-pandemik-berkepanjangan'); active('news') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/keputusan-terbaik-saat-pandemik-berkepanjangan'); ?>">
                Green Bamboo Terrace, Keputusan Terbaik Saat Pandemik Berkepanjangan.
                </a>
            </li>
            <li class="py-1 <?php active('special-rate-kpr-di-green-bamboo-terrace-mulai-dari-33'); active('news') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/special-rate-kpr-di-green-bamboo-terrace-mulai-dari-33'); ?>">
                Special Rate KPR di Green Bamboo Terrace Mulai dari 3,3%
                </a>
            </li>
            <li class="py-1 <?php active('bulan-juli-buanyaaak-hadiahnya'); active('news') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/bulan-juli-buanyaaak-hadiahnya'); ?>">
                Bulan Juli, Buanyaaak Hadiahnya… !
                </a>
            </li>
            <li class="py-1 <?php active('free-ppn-hingga-100-persen-hanya-di-green-bamboo-terrace'); active('news') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/free-ppn-hingga-100-persen-hanya-di-green-bamboo-terrace'); ?>">
                Free PPN Hingga 100%, Hanya di perumahan Green Bamboo Terrace
                </a>
            </li>
            <li class="py-1 <?php active('green-bamboo-terrace-perumahan-siap-huni-di-kota-bogor'); active('news') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/green-bamboo-terrace-perumahan-siap-huni-di-kota-bogor'); ?>">
                Green Bamboo Terrace Perumahan Siap Huni Di Kota Bogor
                </a>
            </li>
            <li class="py-1 <?php active('tips-sederhana-rumah-sehat-bebas-penyakit'); ?>">
                <a href="<?php echo base_url ('berita-dan-promo/tips-sederhana-rumah-sehat-bebas-penyakit'); ?>">
                Tips Sederhana Menciptakan Rumah yang lebih Sehat dan Bebas Penyakit
                </a>
            </li>
            <li class="py-1 <?php active('get-privilege-deals');  ?>">
                <a href="<?php echo base_url ('berita-dan-promo/get-privilege-deals'); ?>">
                Get Privilege Deals, NUP Phase 2 Sekarang !
                </a>
            </li>
            <li class="py-1 <?php active('pembangunan-sarana-olahraga');   ?>">
                <a href="<?php echo base_url ('berita-dan-promo/pembangunan-sarana-olahraga'); ?>">
                Pembangunan Sarana Olahraga dan Taman Kota di Sekitar Kawasan Perumahan Green Bamboo Terrace
                </a>
            </li>
             <!-- <li class="py-1 <?php active('visualisasi-eksterior-rumah'); ?>">
                <a href="<?php echo base_url ('berita-dan-promo/visualisasi-eksterior-rumah'); ?>">
                Visualisasi Eksterior Rumah Bisa Sangat Tergantung Kepada Desain Interiornya
                </a>
            </li>
             <li class="py-1 <?php active('sekarang-saatnya'); ?>">
                <a href="<?php echo base_url ('berita-dan-promo/sekarang-saatnya'); ?>">
                Sekaranglah Saatnya…!
                </a>
            </li>
           <li class="py-1 <?php active('beli-rumah-gratis-biaya-kpr-dan-pajak'); ?>">
                <a href="<?php echo base_url ('berita-dan-promo/beli-rumah-gratis-biaya-kpr-dan-pajak'); ?>">
                Beli Rumah Gratis Biaya KPR & Pajak
                </a>
            </li>
            <li class="py-1 <?php active('berteduhlah-di-bawah-pohon-besar-dan-benar'); ?>">
                <a href="<?php echo base_url ('berita-dan-promo/berteduhlah-di-bawah-pohon-besar-dan-benar'); ?>">
                Berteduhlah di Bawah Pohon Besar dan Benar
                </a>
            </li>
            <li class="py-1 <?php active('kenapa-harus-punya-rumah-di-bogor') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/kenapa-harus-punya-rumah-di-bogor'); ?>">
                Kenapa Harus Punya Rumah Di Bogor
                </a>
            </li>
            <li class="py-1 <?php active('sedang-merencanakan-membeli-rumah-baru-berikut-biaya-tambahan-yang-harus-kamu-cermati') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/sedang-merencanakan-membeli-rumah-baru-berikut-biaya-tambahan-yang-harus-kamu-cermati'); ?>">
                Sedang Merencanakan Membeli Rumah Baru? Berikut Biaya Tambahan Yang Harus kamu Cermati
                </a>
            </li>
            <li class="py-1 <?php active('tahun-baru-semangat-baru-harapan-juga-baru'); ?>">
                <a href="<?php echo base_url ('berita-dan-promo/tahun-baru-semangat-baru-harapan-juga-baru'); ?>">
                Tahun Baru, Semangat Baru, Harapan juga Baru
                </a>
            </li>
            <li class="py-1 <?php active('selamat-tinggal-2020-selamat-datang-2021');  ?>">
                <a href="<?php echo base_url ('berita-dan-promo/selamat-tinggal-2020-selamat-datang-2021'); ?>">
                Selamat Tinggal 2020, Selamat Datang 2021
                </a>
            </li>
            <li class="py-1 <?php active('benarkah-akhir-tahun-adalah-waktu-yang-tepat-membeli-rumah'); ?>">
                <a href="<?php echo base_url ('berita-dan-promo/benarkah-akhir-tahun-adalah-waktu-yang-tepat-membeli-rumah'); ?>">
                Benarkah Akhir Tahun Adalah Waktu Yang Tepat Membeli Rumah?
                </a> -->
            </li>
        </ul>
    </div>
    <div class="news-sidebar inactive" id="aug_21">
        <div class="d-flex flex-row" onClick="showNews('aug_21')">
            <p class="text-muted py-2 m-0 h5 font-weight-bold">Aug 2021</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close" >
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
        <ul class="list-unstyled pl-3">
            <li class="py-1 <?php active('keputusan-terbaik-saat-pandemik-berkepanjangan'); ?>">
                <a href="<?php echo base_url ('berita-dan-promo/keputusan-terbaik-saat-pandemik-berkepanjangan'); ?>">
                Green Bamboo Terrace, Keputusan Terbaik Saat Pandemik Berkepanjangan.
                </a>
            </li> 
        </ul>
    </div>
    <div class="news-sidebar inactive" id="jun_21">
        <div class="d-flex flex-row" onClick="showNews('jun_21')">
            <p class="text-muted py-2 m-0 h5 font-weight-bold">Jun 2021</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close" >
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
        <ul class="list-unstyled pl-3">
            <li class="py-1 <?php active('free-ppn-hingga-100-persen-hanya-di-green-bamboo-terrace'); ?>">
                <a href="<?php echo base_url ('berita-dan-promo/free-ppn-hingga-100-persen-hanya-di-green-bamboo-terrace'); ?>">
                Free PPN Hingga 100%, Hanya di perumahan Green Bamboo Terrace
                </a>
            </li>
            <li class="py-1 <?php active('green-bamboo-terrace-perumahan-siap-huni-di-kota-bogor'); ?>">
                <a href="<?php echo base_url ('berita-dan-promo/green-bamboo-terrace-perumahan-siap-huni-di-kota-bogor'); ?>">
                Green Bamboo Terrace Perumahan Siap Huni Di Kota Bogor
                </a>
            </li>
        </ul>
    </div>
    <div class="news-sidebar inactive" id="apr_21">
        <div class="d-flex flex-row" onClick="showNews('apr_21')">
            <p class="text-muted py-2 m-0 h5 font-weight-bold">Apr 2021</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close" >
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
        <ul class="list-unstyled pl-3">
            <li class="py-1 <?php active('pembangunan-sarana-olahraga');   ?>">
                <a href="<?php echo base_url ('news/pembangunan-sarana-olahraga'); ?>">
                Pembangunan Sarana Olahraga dan Taman Kota di Sekitar Kawasan Perumahan Green Bamboo Terrace
                </a>
            </li>
            <li class="py-1 <?php active('visualisasi-eksterior-rumah'); ?>">
                <a href="<?php echo base_url ('news/visualisasi-eksterior-rumah'); ?>">
                Visualisasi Eksterior Rumah Bisa Sangat Tergantung Kepada Desain Interiornya
                </a>
            </li>
            
        </ul>
    </div>
    <div class="news-sidebar inactive" id="mar_21">
        
        <div class="d-flex flex-row" onClick="showNews('mar_21')">
            <p class="text-muted py-2 m-0 h5 font-weight-bold">Mar 2021</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close" >
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
        <ul class="list-unstyled pl-3">
             <li class="py-1 <?php active('sekarang-saatnya'); ?>">
                <a href="<?php echo base_url ('berita-dan-promo/sekarang-saatnya'); ?>">
                Sekaranglah Saatnya…!
                </a>
            </li>
            <li class="py-1 <?php active('beli-rumah-gratis-biaya-kpr-dan-pajak');  ?>">
                <a href="<?php echo base_url ('berita-dan-promo/beli-rumah-gratis-biaya-kpr-dan-pajak'); ?>">
                Beli Rumah Gratis Biaya KPR & Pajak
                </a>
            </li> 
            
        </ul>
    </div>
    <div class="news-sidebar inactive" id="feb_21">
        <div class="d-flex flex-row" onClick="showNews('feb_21')">
            <p class="text-muted py-2 m-0 h5 font-weight-bold">Feb 2021</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close" >
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
        <ul class="list-unstyled pl-3">
            <li class="py-1 <?php active('berteduhlah-di-bawah-pohon-besar-dan-benar') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/berteduhlah-di-bawah-pohon-besar-dan-benar'); ?>">
                Berteduhlah di Bawah Pohon Besar dan Benar
                </a>
            </li>
            <li class="py-1 <?php active('kenapa-harus-punya-rumah-di-bogor') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/kenapa-harus-punya-rumah-di-bogor'); ?>">
                Kenapa Harus Punya Rumah Di Bogor
                </a>
            </li>
        </ul>
    </div>

    <div class="news-sidebar inactive" id="jan_21">
        <div class="d-flex flex-row" onClick="showNews('jan_21')">
            <p class="text-muted py-2 m-0 h5 font-weight-bold">Jan 2021</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close" >
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
        <ul class="list-unstyled pl-3">
            <li class="py-1 <?php active('sedang-merencanakan-membeli-rumah-baru-berikut-biaya-tambahan-yang-harus-kamu-cermati'); active('news') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/sedang-merencanakan-membeli-rumah-baru-berikut-biaya-tambahan-yang-harus-kamu-cermati'); ?>">
                Sedang Merencanakan Membeli Rumah Baru? Berikut Biaya Tambahan Yang Harus kamu Cermati
                </a>
            </li>
            <li class="py-1 <?php active('tahun-baru-semangat-baru-harapan-juga-baru'); active('news') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/tahun-baru-semangat-baru-harapan-juga-baru'); ?>">
                Tahun Baru, Semangat Baru, Harapan juga Baru
                </a>
            </li>
        </ul>
    </div>

    <div class="news-sidebar inactive" id="dec_20">
        <div class="d-flex flex-row" onClick="showNews('dec_20')">
            <p class="text-muted py-2 m-0 h5 font-weight-bold">Dec 2020</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close" >
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
        <ul class="list-unstyled pl-3">
            <li class="py-1 <?php active('selamat-tinggal-2020-selamat-datang-2021'); active('news') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/selamat-tinggal-2020-selamat-datang-2021'); ?>">
                Selamat Tinggal 2020, Selamat Datang 2021
                </a>
            </li>
            <li class="py-1 <?php active('benarkah-akhir-tahun-adalah-waktu-yang-tepat-membeli-rumah'); ?>">
                <a href="<?php echo base_url ('berita-dan-promo/benarkah-akhir-tahun-adalah-waktu-yang-tepat-membeli-rumah'); ?>">
                Benarkah Akhir Tahun Adalah Waktu Yang Tepat Membeli Rumah?
                </a>
            </li>
        </ul>
    </div>

    <div class="news-sidebar inactive" id="nov_20">
        <div class="d-flex flex-row" onClick="showNews('nov_20')">
            <p class="text-muted py-2 m-0 h5 font-weight-bold">Nov 2020</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close" >
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
        <ul class="list-unstyled pl-3">
            <li class="py-1 <?php active('last-offers-2020-promo-akhir-tahun-2020-dari-green-bamboo-terrace') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/last-offers-2020-promo-akhir-tahun-2020-dari-green-bamboo-terrace'); ?>">
                Last Offers 2020 – Promo Akhir Tahun 2020 dari Green Bamboo Terrace
                </a>
            </li>
            <li class="py-1 <?php active('november-promo-dp-0-dan-dp-5-langsung-huni-rumahnya');?>">
                <a href="<?php echo base_url ('berita-dan-promo/november-promo-dp-0-dan-dp-5-langsung-huni-rumahnya'); ?>">
                November Promo - DP 0% dan DP 5% Langsung Huni Rumahnya!
                </a>
            </li>
        </ul>
    </div>

    <div class="news-sidebar inactive" id="okt_20">
        <div class="d-flex flex-row" onClick="showNews('okt_20')">
            <p class="text-muted py-2 m-0 h5 font-weight-bold">Okt 2020</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close" >
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
        <ul class="list-unstyled pl-3">
            <li class="py-1 <?php active('momijigari-festival-2020-open-house') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/momijigari-festival-2020-open-house'); ?>">
                Momijigari Festival 2020, Very Special Open House di Pertengahan Oktober 2020
                </a>
            </li>
            <li class="py-1 <?php active('momijigari-festival') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/momijigari-festival'); ?>">
                Momijigari Festival 2020 Special Open House
                </a>
            </li>
        </ul>
    </div>
    
    <div class="news-sidebar inactive" id="sep_20">
        <div class="d-flex flex-row" onClick="showNews('sep_20')">
            <p class="text-muted py-2 m-0 h5 font-weight-bold">Sep 2020</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close" >
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
        <ul class="list-unstyled pl-3">
             <li class="py-1 <?php active('semangat') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/semangat'); ?>">
                Semangat!!
                </a>
            </li>
             <li class="py-1 <?php active('membuat-pilihan-yang-bijaksana') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/membuat-pilihan-yang-bijaksana'); ?>">
                Membuat Pilihan Yang Bijaksana
                </a>
            </li>  
        </ul>
    </div>

    <div class="news-sidebar inactive" id="aug_20">
        <div class="d-flex flex-row" onClick="showNews('aug_20')">
            <p class="text-muted py-2 m-0 h5 font-weight-bold">Aug 2020</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close" >
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
        <ul class="list-unstyled pl-3">
            <li class="py-1 <?php active('mengapa-rumah-masih-menjadi-primadona-untuk-tempat-tinggal-dan-instrument-investasi-bagi-orang-indonesia') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/mengapa-rumah-masih-menjadi-primadona-untuk-tempat-tinggal-dan-instrument-investasi-bagi-orang-indonesia'); ?>">
                Mengapa rumah masih menjadi primadona untuk tempat tinggal dan instrument investasi bagi orang Indonesia?
                </a>
            </li>   
        </ul>
    </div>

    <div class="news-sidebar inactive" id="jul_20">
        <div class="d-flex flex-row" onClick="showNews('jul_20')">
            <p class="text-muted py-2 m-0 h5 font-weight-bold">Juli 2020</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close" >
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
        <ul class="list-unstyled pl-3">
            <li class="py-1 <?php active('insane-offer-promo-merdeka') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/insane-offer-promo-merdeka'); ?>">
                    Insane Offer - Promo Merdeka!
                </a>
            </li>
            <li class="py-1 <?php active('secangkir-teh') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/secangkir-teh'); ?>">
                    Secangkir Teh dan Semangkuk Nasi di Rumah Selalu Lebih Enak Daripada Jamuan di Tempat Lain
                </a>
            </li>
            <li class="py-1 <?php active('apa-kata-mereka-mengenai-tinggal-di-green-bamboo-terrace') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/apa-kata-mereka-mengenai-tinggal-di-green-bamboo-terrace'); ?>">
                    Apa Kata Mereka Mengenai Tinggal di Green Bamboo Terrace
                </a>
            </li>        
        </ul>
    </div>

    <div class="news-sidebar inactive" id="jun_20">
        <div class="d-flex flex-row" onClick="showNews('jun_20')">
            <p class="text-muted py-2 m-0 h5 font-weight-bold">Juni 2020</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close" >
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
        <ul class="list-unstyled pl-3">
            <li class="py-1 <?php active('the-first-wealth-is-your-health') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/the-first-wealth-is-your-health'); ?>">
                    The First Wealth is Your Health
                </a>
            </li>
            <li class="py-1 <?php active('new-normal-new-house-new-you') ?> ">
                <a href="<?php echo base_url ('berita-dan-promo/new-normal-new-house-new-you'); ?>">
                    New Normal, New House, New You
                </a>
            </li>        
        </ul>
    </div>

    <div class="news-sidebar inactive" id="may_20">
        <div class="d-flex flex-row" onClick="showNews('may_20')">
            <p class="text-muted py-2 m-0 h5 font-weight-bold">Mei 2020</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close" >
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
        <ul class="list-unstyled pl-3">
            <li class="py-1 <?php active('kpr-fiesta-di-green-bamboo-terrace') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/kpr-fiesta-di-green-bamboo-terrace'); ?>">
                KPR FIESTA di Green Bamboo Terrace
                </a>
            </li>
            <li class="py-1 <?php active('perawatan-dan-quality-control-berjalan-terus') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/perawatan-dan-quality-control-berjalan-terus'); ?>">
                Perawatan dan Quality Control Berjalan Terus
                </a>
            </li>
        </ul>
    </div>

    <div class="news-sidebar inactive" id="apr_20">
        <div class="d-flex flex-row" onClick="showNews('apr_20')">
            <p class="text-muted py-2 m-0 h5 font-weight-bold">April 2020</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close" >
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
        <ul class="list-unstyled pl-3">
            <li class="py-1 <?php active('beli-rumah-di-green-bamboo-terrace-dengan-cara-kpr') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/beli-rumah-di-green-bamboo-terrace-dengan-cara-kpr'); ?>">
                Beli Rumah Di Green Bamboo Terrace Dengan Cara KPR
                </a>
            </li>
            <li class="py-1 <?php active('membangun-impian-bersama-green-bamboo-terrace') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/membangun-impian-bersama-green-bamboo-terrace'); ?>">
                Membangun Impian Bersama Green Bamboo Terrace
                </a>
            </li>
        </ul>
    </div>

    <div class="news-sidebar inactive" id="mar_20">
        <div class="d-flex flex-row" onClick="showNews('mar_20')">
            <p class="text-muted py-2 m-0 h5 font-weight-bold">Maret 2020</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close">
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
        <ul class="list-unstyled pl-3">
            <li class="py-1 <?php active('fasilitas-lengkap-di-green-bamboo-terrace') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/fasilitas-lengkap-di-green-bamboo-terrace'); ?>">
                Fasilitas Lengkap di Green Bamboo Terrace
                </a>
            </li>
            <li class="py-1 <?php active('dibangun-dulu-baru-dijual') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/dibangun-dulu-baru-dijual'); ?>">
                Dibangun dulu, Baru dijual…
                </a>
            </li>
        </ul>
    </div>

    <div class="news-sidebar inactive" id="feb_20">
        <div class="d-flex flex-row" onClick="showNews('feb_20')">
            <p class="text-muted py-2 m-0 h5 font-weight-bold">Februari 2020</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close">
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
        <ul class="list-unstyled pl-3">
            <li class="py-1 <?php active('kunjungan-dari-sumitomo-mitsui-banking-corporation-japan') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/kunjungan-dari-sumitomo-mitsui-banking-corporation-japan'); ?>">
                Kunjungan Dari Sumitomo Mitsui Banking Corporation Japan
                </a>
            </li>
            <li class="py-1 <?php active('february-ai-promo') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/february-ai-promo'); ?>">
                February AI Promo
                </a>
            </li>
        </ul>
    </div>

    <div class="news-sidebar inactive" id="jan_20">
        <div class="d-flex flex-row" onClick="showNews('jan_20')">
            <p class="text-muted py-2 m-0 h5 font-weight-bold">Januari 2020</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close">
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
        <ul class="list-unstyled pl-3">
            <li class="py-1 <?php active('penandatanganan-ajb-dan-balik-nama-unit-di-green-bamboo-terrace') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/penandatanganan-ajb-dan-balik-nama-unit-di-green-bamboo-terrace'); ?>">
                Penandatanganan AJB dan Balik Nama Unit di Green Bamboo Terrace
                </a>
            </li>
            <li class="py-1 <?php active('berburu-promo-green-bamboo-terrace-bogor-di-awal-tahun-2020') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/berburu-promo-green-bamboo-terrace-bogor-di-awal-tahun-2020'); ?>">
                Berburu Promo Green Bamboo Terrace Bogor di Awal tahun 2020
                </a>
            </li>
        </ul>
    </div>

    <div class="news-sidebar --no-news inactive" id="des_20">
        <div class="d-flex flex-row" onClick="showNews('des_20')">
            <p class="text-muted py-2 m-0 h5 font-weight-bold">Desember 2019</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close">
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
    </div>

    <div class="news-sidebar --no-news inactive" id="nov_20">
        <div class="d-flex flex-row" onClick="showNews('nov_20')">
            <p class="text-muted py-2 m-0 h5 font-weight-bold">November 2019</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close">
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
    </div>

    <div class="news-sidebar inactive" id="okt_19">
        <div class="d-flex flex-row" onClick="showNews('okt_19')">
            <p class="text-muted py-2 m-0 h5 font-weight-bold">Oktober 2019</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close">
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
        <ul class="list-unstyled pl-3">
            
            <li class="py-1 <?php active('year-end-promo-crazy-offer') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/year-end-promo-crazy-offer'); ?>">
                Year End Promo - Crazy Offer
                </a>
            </li>
            <li class="py-1 <?php active('momijigari-festival-oktober') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/momijigari-festival-oktober'); ?>">
                Momijigari Festival 26-27 Oktober, Keriuhan di Penghujung Bulan Oktober
                </a>
            </li>
            <li class="py-1 <?php active('serah-terima-unit-phase-1') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/serah-terima-unit-phase-1'); ?>">
                Serah Terima Unit Phase 1
                </a>
            </li>
            <li class="py-1 <?php active('customer-gathering-event-get-special-discount-and-gift') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/customer-gathering-event-get-special-discount-and-gift'); ?>">
                Customer Gathering Event: Get Special Discount and Gift
                </a>
            </li>
            <li class="py-1 <?php active('penandatanganan-kerjasama-dengan-bank-mandiri-dan-bank-bni-syariah') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/penandatanganan-kerjasama-dengan-bank-mandiri-dan-bank-bni-syariah'); ?>">
                Penandatanganan Kerjasama dengan Bank Mandiri dan Bank BNI Syariah
                </a>
            </li>
            <li class="py-1 <?php active('moda-transportasi-dan-akses-semakin-lengkap-properti-di-bogor-semakin-menjanjikan') ?>">
                <a href="<?php echo base_url ('berita-dan-promo/moda-transportasi-dan-akses-semakin-lengkap-properti-di-bogor-semakin-menjanjikan') ?>">
                Moda Transportasi dan Akses Semakin Lengkap, Properti di Bogor Semakin Menjanjikan.
                </a>
            </li>
        </ul>
    </div>
</div>