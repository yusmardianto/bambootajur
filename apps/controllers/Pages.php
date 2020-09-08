<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __construct() {
	    parent::__construct();
	    $controllers = $this->uri->segment(1);
	    if (strtolower($controllers) == 'pages') {
	    	redirect('/'); 
	    }
	}

	public function index()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'defer');
		$this->layouts->add_include('assets/css/slide.css');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
	//	$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
	//	$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js',false);
		$this->layouts->add_include('assets/js/slide.js');
		$this->layouts->add_include('assets/js/navbar.js');

		$data['title'] = 'Perumahan Green Bamboo Tajur | Green Bamboo Terrace';
		$data['description'] = 'Perumahan Green Bamboo Tajur menawarkan rumah minimalis modern dengan material rumah terbaik berstandard Jepang. DP hanya 50 jutaan dan bisa dicicil.';
		$data['keywords'] = 'bamboo terrace bogor, perumahan green bamboo tajur';

		$this->layouts->view('pages/index', $data);
	}

	public function concept()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('assets/css/responsive.css', true, 'async');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$this->layouts->add_include('assets/js/navbar.js');

		$data['title'] = 'Rumah Minimalis Modern dan Nyaman | Green Bamboo Terrace';
		$data['description'] = "Rumah minimalis modern 2 lantai kini menjadi idaman keluarga muda. Segera booking dan dapatkan rumah impian Anda di wilayah Tajur Bogor sekarang juga!";
		$data['keywords'] = 'rumah minimalis modern , rumah nyaman di tajur bogor, rumah minimalis 2 lantai';

		$this->layouts->view('pages/concept', $data);
	}

	public function homes()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('assets/css/responsive.css', true, 'async');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css',false);
		
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js',false);
		$this->layouts->add_include('assets/js/navbar.js');

		$data['title'] = 'Tipe Rumah Bamboo Tajur| Cluster, Properti | Green Bamboo Terrace';
		$data['description'] = 'Tersedia dua tipe rumah bamboo tajur, yaitu akane dan momiji dengan unit terbatas. Booking sekarang juga!';
		$data['keywords'] = 'cluster bamboo tajur, rumah bamboo tajur, properti bambootajur, rumah di jual, harga rumah';

		$this->layouts->view('pages/home', $data);
	}

	public function homes_akane()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('assets/css/responsive.css', true, 'async');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css',false);
		
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js',false);
		$this->layouts->add_include('assets/js/navbar.js');

		$data['title'] = 'Tipe Rumah Bamboo Tajur| Cluster, Properti | Green Bamboo Terrace';
		$data['description'] = 'Tersedia dua tipe rumah bamboo tajur, yaitu akane dan momiji dengan unit terbatas. Booking sekarang juga!';
		$data['keywords'] = 'cluster bamboo tajur, rumah bamboo tajur, properti bambootajur, rumah di jual, harga rumah';

		$this->layouts->view('pages/home/akane', $data);
	}

	public function homes_momiji()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('assets/css/responsive.css', true, 'async');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css',false);
		
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js',false);
		$this->layouts->add_include('assets/js/navbar.js');

		$data['title'] = 'Tipe Rumah Bamboo Tajur| Cluster, Properti | Green Bamboo Terrace';
		$data['description'] = 'Tersedia dua tipe rumah bamboo tajur, yaitu akane dan momiji dengan unit terbatas. Booking sekarang juga!';
		$data['keywords'] = 'cluster bamboo tajur, rumah bamboo tajur, properti bambootajur, rumah di jual, harga rumah';

		$this->layouts->view('pages/home/momiji', $data);
	}

	public function facilities()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/fullcarousel.css', true, 'async');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('assets/css/responsive.css', true, 'async');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$data['title'] = 'Fasilitas Publik Perumahan Tajur Bogor | Green Bamboo Terrace';
		$data['description'] = 'Perumahan Green Bamboo Terrace di Tajur Bogor punya beberapa fasilitas publik, seperti taman dan area bermain anak, musholla, dan club house.';
		$data['keywords'] = 'fasilitas publik, fasilitas perumahan, perumahan di tajur bogor, Green Bamboo Terrace';

		$this->layouts->view('pages/facilities', $data);
	}

	public function latestnews () {
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/fullcarousel.css', true, 'async');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css', true, 'async');
		$this->layouts->add_include('assets/css/responsive.css', true, 'async');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);
		
		$data['title'] = 'Info Terbaru dan Promo Rumah Green Bamboo Terrace | News & Events | Green Bamboo Terrace';
		$data['description'] = 'Lihat informasi dan promo terbaru di perumahan Green Bamboo Terrace. Terdapat berbagai promo, diskon, dan penawaran menarik setiap bulannya.';
		$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, Mall Boxies 123, pameran properti,  promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, pameran perumahan.';
		

		$this->layouts->view('pages/news/latest-news', $data);
	}

	public function news($news_page)
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/fullcarousel.css', true, 'async');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css', true, 'async');
		$this->layouts->add_include('assets/css/responsive.css', true, 'async');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		// $data['title'] = 'News - Green Bamboo Terrace';
		// $data['description'] = 'Hunian eco-living terbaik di area Bogor dengan harga terjangkau. Tanpa perantara, fasilitas lengkap, desain terkini dari jepang, dengan konsep rumah pintar. Dekat ke banyak fasilitas, kurang dari setengah jam dari stasiun bogor, sangat dekat dengan tol bogor dan ciawi';
		// $data['keywords'] = 'smart home system, eco living, konsep hijau, rumah pintar, bamboo tajur, bambootajur, bambutajur, real estate, ramah lingkungan, investasi properti, investasi rumah, green bamboo terrace, properti bogor, properti tajur, beli rumah di bogor, beli rumah mewah terjangkau, properti dekat rumah sakit, perumahan dekat tol, klaster dekat taman bermain, hunian dekat pt unitex, perumahan dekat tol bogor, perumahan dekat tol ciawi, rumah sejuk, rumah strategis, perumahan strategis, perumahan menengah keatas, perumahan 1 miliar, rumah dengan harga dibawah 2 miliar, perumahan desain minimalis, perumahan paling aman';

		$currentURI = $this->uri->segment(2);

		switch ($currentURI) { 
			case '':
				$data['title'] = 'Membuat Pilihan Yang Bijaksana | Bamboo Terrace';
				
				$data['description'] = 'Setelah hampir 4 bulan lamanya, sebagian masyarakat Indonesia berada dalam situasi yang tidak biasa, sebagai imbas pandemi Covid-19. Sebagian masyarakat bekerja dari rumah (work from home), tidak sedikit juga pekerja yang dirumahkan (atau di-PHK), dan cukup banyak pekerja informal yang merosot bahkan nirpenghasilan. Catatan pemerintah, sebanyak 3 juta orang di-PHK dari kantornya.';
				
				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
			break;
				case 'membuat-pilihan-yang-bijaksana':
					$data['title'] = 'Membuat Pilihan Yang Bijaksana | Bamboo Terrace';
					
					$data['description'] = 'Setelah hampir 4 bulan lamanya, sebagian masyarakat Indonesia berada dalam situasi yang tidak biasa, sebagai imbas pandemi Covid-19. Sebagian masyarakat bekerja dari rumah (work from home), tidak sedikit juga pekerja yang dirumahkan (atau di-PHK), dan cukup banyak pekerja informal yang merosot bahkan nirpenghasilan. Catatan pemerintah, sebanyak 3 juta orang di-PHK dari kantornya.';
					
					$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'mengapa-rumah-masih-menjadi-primadona-untuk-tempat-tinggal-dan-instrument-investasi-bagi-orang-indonesia':
					$data['title'] = 'Mengapa rumah masih menjadi primadona untuk tempat tinggal dan instrument investasi bagi orang Indonesia? | Bamboo Terrace';
					
					$data['description'] = 'Orang Indonesia sangat tahu bahwa berinvestasi property terutama rumah, akan membutuhkan waktu menunggu yang tidak sebentar untuk dapat menikmati Capital Gain dari hasil investasinya. Akan tetapi, tetap saja rumah menjadi pilihan utama untuk berinvestasi karena dianggap lebih aman dan sangat minim resiko.';
					
					$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'insane-offer-promo-merdeka':
					$data['title'] = 'Insane Offer - Promo Merdeka!';
					
					$data['description'] = 'Green Bamboo Terrace memberikan promo luar biasa di bulan Agustus 2020 ini. Promo bernama Insane Offer - Promo Merdeka ini memberikan penawaran yang tak bisa ditolak oleh kamu yang sedang mencari rumah untuk tempat tinggal';
					
					$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'secangkir-teh':
					$data['title'] = 'Secangkir Teh dan Semangkuk Nasi di Rumah Selalu Lebih Enak Daripada Jamuan di Tempat Lain';
					
					$data['description'] = 'Istilah "New Normal" pertama kali digunakan oleh Roger McNamee, "seorang investor teknologi," yang mengulas dalam sebuah artikel oleh Polly LaBarre berjudul "The New Normal" di majalah Fast Company pada tanggal 30 April 2003.';
					
					$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'apa-kata-mereka-mengenai-tinggal-di-green-bamboo-terrace':
					$data['title'] = 'Apa Kata Mereka Menganai Tinggal di Green Bamboo Terrace';
					
					$data['description'] = 'Rasakan kenyamanan hunian di Green Bamboo Terrace. Berikut ini adalah beberapa testimoni dari masyarakat yang telah menghuni perumahan Green Bamboo Terrace.';
					
					$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'the-first-wealth-is-your-health':
					$data['title'] = 'The First Wealth is Your Health';
					
					$data['description'] = 'Hunian dan lingkungan yang sehat adalah salah satu faktor wajib untuk memilih hunian bagi keluarga Anda. Green Bamboo Terrace menawarkan hunian sehat bagi Anda di Tajur, Bogor';
					
					$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'new-normal-new-house-new-you':
					$data['title'] = 'New Normal, New House, New You';
					
					$data['description'] = 'Dapatkan hunian baru dengan lingkungan sehat dari Green Bamboo Terrace untuk keluarga Anda saat new normal. Kunjungi website bambootajur.com sekarang juga';
					
					$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'kpr-fiesta-di-green-bamboo-terrace':
					$data['title'] = 'KPR FIESTA di Green Bamboo Terrace';
					
					$data['description'] = 'Ada dua alasan utama mengapa orang menunda pembelian rumah; Uang dan Waktu. Jika masalahnya uang, maka KPR bisa jadi jalan keluar. Tapi, bagi orang yang sudah memiliki cukup uang, menunda membeli rumah justru bisa menimbulkan kerugian finansial di masa depan. ';
					
					$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'perawatan-dan-quality-control-berjalan-terus':
					$data['title'] = 'Perawatan dan Quality Control Berjalan Terus';
					
					$data['description'] = 'Sebagai sebuah perumahan yang siap huni, dengan sebuah standar baru untuk kualitas hunian yang berlokasi di Bogor, Green Bamboo Terrace haruslah tetap menjaga kualitas dan standar mutu bangunan, fasilitas serta lingkungan.';
					
					$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'beli-rumah-di-green-bamboo-terrace-dengan-cara-kpr':
					$data['title'] = 'Beli Rumah Di Green Bamboo Terrace Dengan Cara KPR';
					
					$data['description'] = 'Tingginya kebutuhan akan tempat tinggal membuat para developer semakin agresif mengembangkan properti. Semakin lama Anda menunda rencana investasi rumah, semakin sulit Anda menemukan lahan perumahan dengan lokasi strategis dengan harga yang terjangkau.';
					
					$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'membangun-impian-bersama-green-bamboo-terrace':
					$data['title'] = 'Membangun Impian Bersama Green Bamboo Terrace';
					
					$data['description'] = 'Memiliki investasi untuk kesejahteraan hidup di masa depan adalah hal yang perlu dipertimbangkan, terutama berinvestasi di bidang properti';
					
					$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'fasilitas-lengkap-di-green-bamboo-terrace':
					$data['title'] = 'Fasilitas Lengkap di Green Bamboo Terrace';
					
					$data['description'] = 'rumah modern minimalis yang lebih exclusive dan private yang siap huni juga memiliki fasilitas yang sangat lengkap';
					
					$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'hanami-festival':
					$data['title'] = 'Hanami Festival | News | Green Bamboo Terrace';
					
					$data['description'] = 'Setelah sukses dengan acara Momijigari yang dilakukan di penghujung Oktober 2019 yang telah lalu, kini Green Bamboo Terrace mengadakan sebuah event Customer Gathering yang diberi nama Hanami Festival.';
					
					$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'dibangun-dulu-baru-dijual':
					$data['title'] = 'Dibangun Dulu, Baru Dijual | News | Green Bamboo Terrace';
					
					$data['description'] = 'Baru-baru ini kita mendengar peristiwa yang cukup memilukan hati, di mana hampir 7 ribu orang yang mendambakan rumah pertama nya harus menelan pil pahit atas kenyataan bahwa mereka ditipu oleh pengembang perumahan';
					
					$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'kunjungan-dari-sumitomo-mitsui-banking-corporation-japan':
					$data['title'] = 'Kunjungan Dari Sumitomo Mitsui Banking Corporation Japan | News | Green Bamboo Terrace';
					
					$data['description'] = 'Hari Kamis, 13 Februari 2020, Green Bamboo Terrace kedatangan tamu istimewa dari SMBC Group Japan';
					
					$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'february-ai-promo':
					$data['title'] = 'February AI Promo | News | Green Bamboo Terrace';
					
					$data['description'] = 'Green Bamboo Terrace February AI Promo adalah februari berbagi cinta dengan memberikan  Promo kemudahan cara bayar melalui cara bayar KPR dengan Down Payment cukup 5%';
					
					$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'penandatanganan-ajb-dan-balik-nama-unit-di-green-bamboo-terrace':
					$data['title'] = 'Penandatanganan AJB dan Balik Nama Unit | News | Green Bamboo Terrace';
					
					$data['description'] = 'AJB adalah akta otentik yang dibuat oleh PPAT untuk peralihan hak atas tanah dan bangunan';
					
					$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'berburu-promo-green-bamboo-terrace-bogor-di-awal-tahun-2020':
					$data['title'] = 'Berburu Promo Green Bamboo Terrace | News | Green Bamboo Terrace';
					
					$data['description'] = 'Pada pameran di Mall Boxies 123 ini, Green Bamboo Terrace Hadir kembali dengan PROMO CRAZY OFFER yaitu Promo KPR dengan DP 5% dan 10% yang dapat dicicil 3x';
					
					$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'year-end-promo-crazy-offer':
					$data['title'] = 'Year End Promo | News | Green Bamboo Terrace';
					
					$data['description'] = 'Green Bamboo Terrace menghadirkan Year End Promo dengan memberikan promo pembelian rumah dengan DP 5% dan 10% yang dapat dicicil hingga 5x, free BPHTB, dll';
					
					$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'momijigari-festival-oktober':
					$data['title'] = 'Momijigari Festival | News | Green Bamboo Terrace';
					
					$data['description'] = 'Green Bamboo Terrace mengadakan acara Momijigari Festival dengan berbagai promo properti yang menarik, seperti KPR DP 5%, Diskon KPR 5%, dll';
					
					$data['keywords'] = 'Green Bamboo Terrace, Momijigari Festival, tipe rumah momiji, promo properti, promo perumahan, diskon kpr, promo kpr, lokasi strategis, events Green Bamboo Terrace, Customer Gathering';
				break;
			case 'serah-terima-unit-phase-1':
					$data['title'] = 'Serah Terima Unit Phase 1 | News | Green Bamboo Terrace';
					
					$data['description'] = 'Green Bamboo Terrace melakukan proses serah terima unit Phase 1. PT KBJ menepati janji bahwa mulai September 2019, pembeli sudah bisa menerima kunci unit.';
					
					$data['keywords'] = 'Green Bamboo Terrace, PT KBJ, perumahan Green Bamboo Terrace, perumahan di Bogor, properti bogor, proses serah terima, serah terima unit,  Marketing Gallery, unit rumah, lokasi strategis, lingkungan nyaman';
				break;
			case 'customer-gathering-event-get-special-discount-and-gift':
					$data['title'] = 'Customer Gathering Event | News | Green Bamboo Terrace';
					
					$data['description'] = 'Green Bamboo Terrace menyelenggarakan acara Customer Gathering event bertema Festival Momijigari. Acara ini memberikan berbagai diskon spesial untuk customer.';
					
					$data['keywords'] = 'Green Bamboo Terrace,  Customer Gathering event , diskon spesial, tipe rumah momiji, events Green Bamboo Terrace, customer gathering, promo perumahan, diskon KPR, promo KPR';
				break;
			case 'penandatanganan-kerjasama-dengan-bank-mandiri-dan-bank-bni-syariah':
					$data['title'] = 'Kerjasama dengan Bank | News | Green Bamboo Terrace';
					
					$data['description'] = 'Pertengahan Juni 2019, Green Bamboo Terrace melakukan penandatanganan kerjasama dengan Bank Mandiri dan Bank BNI Syariah untuk Kredit Pemilikan Rumah (KPR)';
					
					$data['keywords'] = 'Green Bamboo Terrace, Bank Mandiri, Bank BNI Syariah, KPR Bank Mandiri, KPR Bank Bni Syariah, promo DP, promo KPR, jual beli rumah, program KPR, hunian modern, hunian eksklusif';
				break;
			case 'moda-transportasi-dan-akses-semakin-lengkap-properti-di-bogor-semakin-menjanjikan':
					$data['title'] = 'Properti di Bogor Menjanjikan | News | Green Bamboo Terrace';
					
					$data['description'] = 'Akses yang mudah membuat properti di Bogor menjadi semakin menjanjikan. Salah satunya Green Bamboo Terrace yang memiliki lokasi strategis di Tajur Kota Bogor.';
					
					$data['keywords'] = 'Green Bamboo Terrace, properti di Bogor, investasi properti, lokasi strategis, properti tajur bogor, Tol Jagorawi, Tol Bocimi, hunian eksklusif, hunian nyaman, perumahan di bogor, kota bogor.';
				break;
				
		}

		$this->layouts->view('pages/news/'.$news_page, $data);
	}

	public function disclaimer()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('assets/css/responsive.css', true, 'async');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$data['title'] = 'Disclaimer | Info Produk, Gambar, Konten | Green Bamboo Terrace';
		$data['description'] = 'Seluruh informasi yang ditampilkan di dalam website ini, baik gambar serta konten bukan tanggung jawab developer.';
		$data['keywords'] = 'Disclaimer, informasi produk, informasi gambar, konten produk';

		$this->layouts->view('pages/disclaimer', $data);
	}

	public function privacy()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('assets/css/responsive.css', true, 'async');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$data['title'] = 'Privacy Policy - Green Bamboo Terrace';
		$data['description'] = 'Green bamboo terrace mengumpulkan informasi untuk tujuan analisis. Kami tidak memperjualbelikan informasi pribadi dan kami akan mengambil langkah-langkah yang wajar untuk menjamin keamanan data diri Anda.';
		$data['keywords'] = 'smart home system, eco living, konsep hijau, rumah pintar, bamboo tajur, bambootajur, bambutajur, real estate, ramah lingkungan, investasi properti, investasi rumah, green bamboo terrace, hak privasi, privacy policy, kebijakan privasi, keamanan website, perlindungan konten, keamanan informasi';

		$this->layouts->view('pages/privacy', $data);
	}

	public function contact()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('assets/css/responsive.css', true, 'async');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$data['title'] = 'Lokasi Perumahan Bamboo Tajur | Green Bamboo Terrace';
		$data['description'] = 'Untuk informasi kontak dan lokasi sales penjualan perumahan Bamboo Tajur, silakan mengisi form di sini atau menghubungi nomor whatsapp yang tertera.';
		$data['keywords'] = 'Perumahan Bamboo Tajur, perumahan dekat kebun raya bogor, perumahan di tajur bogor';

		$this->layouts->view('pages/contact', $data);
	}

	public function notfound() {
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('assets/css/responsive.css', true, 'async');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$data['title'] = 'Page Not Found - Green Bamboo Terrace';
		$data['description'] = 'Page Not Found';
		$data['keywords'] = 'Page Not Found';

		$this->output->set_status_header('404');

		$this->layouts->view('pages/notfound', $data);
	}

	public function submit(){
		$data = array(
			'full_name'=>$this->input->post('name'),
		    'email'=>$this->input->post('email'),
		    'phone_number'=>$this->input->post('number'),
		    'created_at'=>date('Y-m-d H:i:s'),
		    'status'=>1,//send
		    'type'=>'phone_number'
		);

// 		if(!empty($data)){
        if(!empty($data)){
			$this->receipt_mail($data);
		   	$datas['save'] = true;
        }
// 		}else{
// 			$datas['save'] = false;
// 		}

		echo json_encode($datas);
	}

	public function submitcontact(){
		$data = array(
			'full_name'=>$this->input->post('name'),
		    'email'=>$this->input->post('email'),
		    'phone_number'=>$this->input->post('number'),
		    'created_at'=>date('Y-m-d H:i:s'),
		    'status'=>1,//send
		    'type'=>'contact',
		    'message'=>$this->input->post('message')
		);

// 		if(!empty($data)){
        if(!empty($data)){
		   $datas['save'] = true;
		   $this->receipt_mail($data);
        }
// 		}else{
// 			$datas['save'] = false;
// 		}

		echo json_encode($datas);
	}

	protected function sendMail($data){
		$this->load->library('PHPMailerAutoload');
		$subject = 'Alert Kontak Bamboo Tajur';
		$message = '<h3>Inquiry From : </h3><br /><br />Nama : '.$data['full_name']
					.'<br /><br /> No Hp : '.$data['phone_number']
					.'<br /><br /> Email : '.$data['email']
					.(!empty($data['message'])? '<br /><br /> Pesan : '. $data['message']." <br /><br /> Thanks!" : null." <br /><br /> Thanks!").'';
		$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
			<title>' . html_escape($subject) . '</title>
			<style type="text/css">
				body {
					font-family: Arial, Verdana, Helvetica, sans-serif;
					font-size: 16px;
				}
			</style>
		</head>
		<body>
		' . $message . '
		</body>
		</html>';

		$mail = new PHPMailer();
        $mail->SMTPDebug = 2;
// 		$mail->IsSMTP(); // we are going to use SMTP
		$mail->SMTPAuth   = true; // enabled SMTP authentication
		$mail->SMTPSecure = "tls";  // prefix for secure protocol to connect to the server
		$mail->Host       = "mail.bambootajur.com";      // setting GMail as our SMTP server
		$mail->Port       = 587;                   // SMTP port to connect to GMail
		$mail->Username   = "inquiry@bambootajur.com";  // user email address
		$mail->Password   = "bamb00tajur30";            // password in GMail

		$mail->isHTML(true);
		$mail->SetFrom('inquiry@bambootajur.com', 'No-Reply Bamboo');  //Who is sending the email
		$mail->Subject    = $subject;
		$mail->Body      = $body;
// 		$destino = "".$email['email']."";
		$destino = "bambootajur@gmail.com";
// 		$mail->AddAddress($destino, $email['nama']);
		$mail->AddAddress($destino, 'Bamboo Tajur');
		//$mail->addCC('dicky.hilman@shinmichi.co.id');
		//$mail->addCC('mafid.akbar@shinmichi.co.id');
		if(!$mail->send()) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: <br />' . $mail->ErrorInfo;
		} else {
			$mail->send();
		    // echo 'Message has been sent';
		}
	}

	protected function receipt_mail($data){
		$this->sendMail($data);
// 		foreach ($this->mail_list() as $row)
// 		{
// 	        $this->sendMail($data,$row);
// 		}
	}

	protected function mail_list(){
		$data = array(
			     array(
			         'email' => 'bambootajur@gmail.com',
			         'nama' => 'Bamboo Tajur',
			     ),
			     array(
			         'email' => 'dicky.hilman@shinmichi.co.id',
			         'nama' => 'dicky hilman',
			     ),
			     array(
			         'email' => 'mafid.akbar@shinmichi.co.id',
			         'nama' => 'mafid akbar',
			     ),
			);
		return $data;
	}

}