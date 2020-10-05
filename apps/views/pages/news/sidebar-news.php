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
            <li class="py-1 <?php active('momijigari-festival') ?> <?php active('news') ?>">
                <a href="<?php echo base_url ('news/momijigari-festival'); ?>">
                Momijigari Festival 2020 Special Open House
                </a>
            </li>
            <li class="py-1 <?php active('semangat') ?>">
                <a href="<?php echo base_url ('news/semangat'); ?>">
                Semangat!!
                </a>
            </li>
            <li class="py-1 <?php active('membuat-pilihan-yang-bijaksana') ?>">
                <a href="<?php echo base_url ('news/membuat-pilihan-yang-bijaksana'); ?>">
                Membuat Pilihan Yang Bijaksana
                </a>
            </li>
            <li class="py-1 <?php active('mengapa-rumah-masih-menjadi-primadona-untuk-tempat-tinggal-dan-instrument-investasi-bagi-orang-indonesia') ?>  ">
                <a href="<?php echo base_url ('news/mengapa-rumah-masih-menjadi-primadona-untuk-tempat-tinggal-dan-instrument-investasi-bagi-orang-indonesia'); ?>">
                Mengapa rumah masih menjadi primadona untuk tempat tinggal dan instrument investasi bagi orang Indonesia?
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
            <li class="py-1 <?php active('momijigari-festival') ?> <?php active('news') ?>">
                <a href="<?php echo base_url ('news/momijigari-festival'); ?>">
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
                <a href="<?php echo base_url ('news/semangat'); ?>">
                Semangat!!
                </a>
            </li>
             <li class="py-1 <?php active('membuat-pilihan-yang-bijaksana') ?>">
                <a href="<?php echo base_url ('news/membuat-pilihan-yang-bijaksana'); ?>">
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
                <a href="<?php echo base_url ('news/mengapa-rumah-masih-menjadi-primadona-untuk-tempat-tinggal-dan-instrument-investasi-bagi-orang-indonesia'); ?>">
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
                <a href="<?php echo base_url ('news/insane-offer-promo-merdeka'); ?>">
                    Insane Offer - Promo Merdeka!
                </a>
            </li>
            <li class="py-1 <?php active('secangkir-teh') ?>">
                <a href="<?php echo base_url ('news/secangkir-teh'); ?>">
                    Secangkir Teh dan Semangkuk Nasi di Rumah Selalu Lebih Enak Daripada Jamuan di Tempat Lain
                </a>
            </li>
            <li class="py-1 <?php active('apa-kata-mereka-mengenai-tinggal-di-green-bamboo-terrace') ?>">
                <a href="<?php echo base_url ('news/apa-kata-mereka-mengenai-tinggal-di-green-bamboo-terrace'); ?>">
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
                <a href="<?php echo base_url ('news/the-first-wealth-is-your-health'); ?>">
                    The First Wealth is Your Health
                </a>
            </li>
            <li class="py-1 <?php active('new-normal-new-house-new-you') ?> ">
                <a href="<?php echo base_url ('news/new-normal-new-house-new-you'); ?>">
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
                <a href="<?php echo base_url ('news/kpr-fiesta-di-green-bamboo-terrace'); ?>">
                KPR FIESTA di Green Bamboo Terrace
                </a>
            </li>
            <li class="py-1 <?php active('perawatan-dan-quality-control-berjalan-terus') ?>">
                <a href="<?php echo base_url ('news/perawatan-dan-quality-control-berjalan-terus'); ?>">
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
                <a href="<?php echo base_url ('news/beli-rumah-di-green-bamboo-terrace-dengan-cara-kpr'); ?>">
                Beli Rumah Di Green Bamboo Terrace Dengan Cara KPR
                </a>
            </li>
            <li class="py-1 <?php active('membangun-impian-bersama-green-bamboo-terrace') ?>">
                <a href="<?php echo base_url ('news/membangun-impian-bersama-green-bamboo-terrace'); ?>">
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
                <a href="<?php echo base_url ('news/fasilitas-lengkap-di-green-bamboo-terrace'); ?>">
                Fasilitas Lengkap di Green Bamboo Terrace
                </a>
            </li>
            <li class="py-1 <?php active('dibangun-dulu-baru-dijual') ?>">
                <a href="<?php echo base_url ('news/dibangun-dulu-baru-dijual'); ?>">
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
                <a href="<?php echo base_url ('news/kunjungan-dari-sumitomo-mitsui-banking-corporation-japan'); ?>">
                Kunjungan Dari Sumitomo Mitsui Banking Corporation Japan
                </a>
            </li>
            <li class="py-1 <?php active('february-ai-promo') ?>">
                <a href="<?php echo base_url ('news/february-ai-promo'); ?>">
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
                <a href="<?php echo base_url ('news/penandatanganan-ajb-dan-balik-nama-unit-di-green-bamboo-terrace'); ?>">
                Penandatanganan AJB dan Balik Nama Unit di Green Bamboo Terrace
                </a>
            </li>
            <li class="py-1 <?php active('berburu-promo-green-bamboo-terrace-bogor-di-awal-tahun-2020') ?>">
                <a href="<?php echo base_url ('news/berburu-promo-green-bamboo-terrace-bogor-di-awal-tahun-2020'); ?>">
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

    <div class="news-sidebar inactive" id="okt_20">
        <div class="d-flex flex-row" onClick="showNews('okt_20')">
            <p class="text-muted py-2 m-0 h5 font-weight-bold">Oktober 2019</p>
            <button type="button" class="close opacity-1 p-2" aria-label="Close">
                <i class="fas fa-chevron-down"></i>
            </button>
        </div>
        <ul class="list-unstyled pl-3">
            
            <li class="py-1 <?php active('year-end-promo-crazy-offer') ?>">
                <a href="<?php echo base_url ('news/year-end-promo-crazy-offer'); ?>">
                Year End Promo - Crazy Offer
                </a>
            </li>
            <li class="py-1 <?php active('momijigari-festival-oktober') ?>">
                <a href="<?php echo base_url ('news/momijigari-festival-oktober'); ?>">
                Momijigari Festival 26-27 Oktober, Keriuhan di Penghujung Bulan Oktober
                </a>
            </li>
            <li class="py-1 <?php active('serah-terima-unit-phase-1') ?>">
                <a href="<?php echo base_url ('news/serah-terima-unit-phase-1'); ?>">
                Serah Terima Unit Phase 1
                </a>
            </li>
            <li class="py-1 <?php active('customer-gathering-event-get-special-discount-and-gift') ?>">
                <a href="<?php echo base_url ('news/customer-gathering-event-get-special-discount-and-gift'); ?>">
                Customer Gathering Event: Get Special Discount and Gift
                </a>
            </li>
            <li class="py-1 <?php active('penandatanganan-kerjasama-dengan-bank-mandiri-dan-bank-bni-syariah') ?>">
                <a href="<?php echo base_url ('news/penandatanganan-kerjasama-dengan-bank-mandiri-dan-bank-bni-syariah'); ?>">
                Penandatanganan Kerjasama dengan Bank Mandiri dan Bank BNI Syariah
                </a>
            </li>
            <li class="py-1 <?php active('moda-transportasi-dan-akses-semakin-lengkap-properti-di-bogor-semakin-menjanjikan') ?>">
                <a href="<?php echo base_url ('news/moda-transportasi-dan-akses-semakin-lengkap-properti-di-bogor-semakin-menjanjikan') ?>">
                Moda Transportasi dan Akses Semakin Lengkap, Properti di Bogor Semakin Menjanjikan.
                </a>
            </li>
        </ul>
    </div>
</div>