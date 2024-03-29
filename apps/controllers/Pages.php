<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

	function __construct()
	{
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
		$this->layouts->add_include('assets/css/home-ori.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', false);

		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css', false);
		//	$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		//	$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js', false);
		$this->layouts->add_include('assets/js/slide.js');
		$this->layouts->add_include('assets/js/navbar.js');

		$data['title'] = 'Perumahan Mewah Ready Stock DP Ringan di Tajur Bogor | Green Bamboo Terrace';
		$data['description'] = 'Cari perumahan mewah di Bogor? Tersedia rumah ready stock di Tajur Bogor, DP ringan, nyaman & strategis! Cocok untuk hunian & investasi properti! Booking sekarang!';
		$data['keywords'] = 'bamboo terrace bogor, perumahan green bamboo tajur';
		$data['canonical'] = 'https://www.bambootajur.com';
		$this->layouts->view('pages/index', $data);
	}

	public function concept()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('assets/css/responsive.css', true, 'async');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css', false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css', false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic', false);

		$this->layouts->add_include('assets/js/navbar.js');

		$data['title'] = 'Konsep Desain Rumah Jepang | DP Murah | Green Bamboo Terrace';
		$data['description'] = "Desain konsep rumah jepang dengan arsitektur jepang yang estetik, minimalis, modern, fungsional  menjadi sumber inspirasi dan ciri khas bangunan dari Green Bamboo Terrace.";
		$data['keywords'] = 'rumah minimalis modern , rumah nyaman di tajur bogor, rumah minimalis 2 lantai';
		$data['url'] = 'https://www.bambootajur.com/desain-rumah';
		$data['canonical'] = 'https://www.bambootajur.com/desain-rumah';
		$this->layouts->view('pages/concept', $data);
	}

	public function homes()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('assets/css/responsive.css', true, 'async');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css', false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css', false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic', false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css', false);

		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js', false);
		$this->layouts->add_include('assets/js/navbar.js');

		$data['title'] = 'Perumahan Elit Minimalis 2 Lantai di Tajur Bogor | Green Bamboo Terrace ';
		$data['description'] = 'Green Bamboo Terrace memiliki tipe rumah elit minimalis 2 lantai yang modern dan eksklusif. Berlokasi di Tajur Bogor yang asri & nyaman, cocok untuk Anda & Keluarga.';
		$data['keywords'] = 'cluster bamboo tajur, rumah bamboo tajur, properti bambootajur, rumah di jual, harga rumah';
		$data['url'] = 'https://www.bambootajur.com/tipe-rumah';
		$data['canonical'] = 'https://www.bambootajur.com/tipe-rumah';
		$this->layouts->view('pages/home', $data);
	}

	public function homes_akane()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('assets/css/responsive.css', true, 'async');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css', false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css', false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic', false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css', false);

		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js', false);
		$this->layouts->add_include('assets/js/navbar.js');

		$data['title'] = 'Akane - Rumah Mewah 2 Lantai | Tipe 95 | Green Bamboo Terrace';
		$data['description'] = 'Tipe akane adalah tipe rumah mewah 2 lantai tipe 95 dengan 3 kamar tidur. Pesan & miliki perumahan eksklusif di Bogor dengan material premium standar Jepang.';
		$data['keywords'] = 'cluster bamboo tajur, rumah bamboo tajur, properti bambootajur, rumah di jual, harga rumah';
		$data['url'] = 'https://www.bambootajur.com/tipe-rumah/akane';
		$data['canonical'] = 'https://www.bambootajur.com/tipe-rumah/akane';


		$this->layouts->view('pages/home/akane', $data);
	}

	public function homes_momiji()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('assets/css/responsive.css', true, 'async');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css', false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css', false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic', false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css', false);

		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js', false);
		$this->layouts->add_include('assets/js/navbar.js');

		$data['title'] = 'Momiji - Rumah Modern 2 Lantai | Tipe 73 | Green Bamboo Terrace';
		$data['description'] = 'Tipe Momiji bisa menjadi pilihan tepat jika Anda sedang mencari rumah modern 2 lantai tipe 73 dengan 2 kamar tidur di Bogor kota. Ayo pesan dan booking sekarang!';
		$data['keywords'] = 'cluster bamboo tajur, rumah bamboo tajur, properti bambootajur, rumah di jual, harga rumah';
		$data['url'] = 'https://www.bambootajur.com/tipe-rumah/momiji';
		$data['canonical'] = 'https://www.bambootajur.com/tipe-rumah/momiji';


		$this->layouts->view('pages/home/momiji', $data);
	}
	public function homes_newphase()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', false);
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/js/navbar.js');

		$data['title'] = 'New Phase - Rumah Mewah Minimalis 2 Lantai | Green Bamboo Terrace';
		$data['description'] = 'Green Bamboo Terrace menawarkan fase 2 yaitu rumah minimalis 2 lantai dengan design & layout baru. Booking & dapatkan rumah dengan lokasi strategis di Bogor!';
		$data['keywords'] = 'cluster bamboo tajur, rumah bamboo tajur, properti bambootajur, rumah di jual, harga rumah';
		$data['url'] = 'https://www.bambootajur.com/tipe-rumah/new-phase';
		$data['canonical'] = 'https://www.bambootajur.com/tipe-rumah/new-phase';


		$this->layouts->view('pages/home/newphase', $data);
	}


	public function facilities()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/fullcarousel.css', true, 'async');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('assets/css/responsive.css', true, 'async');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css', false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css', false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic', false);

		$data['title'] = 'Fasilitas Perumahan Green Bamboo Terrace | Tajur Bogor';
		$data['description'] = 'Green Bamboo Terrace menyediakan perumahan dekat pintu Tol Jagorawi & Bocimi dengan lingkungan sejuk & asri di Bogor. Cek fasilitas perumahan mewah ini di sini!';
		$data['keywords'] = 'fasilitas publik, fasilitas perumahan, perumahan di tajur bogor, Green Bamboo Terrace';
		$data['url'] = 'https://www.bambootajur.com/fasilitas-perumahan';
		$data['canonical'] = 'https://www.bambootajur.com/fasilitas-perumahan';

		$this->layouts->view('pages/facilities', $data);
	}

	public function latestnews()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/fullcarousel.css', true, 'async');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css', true, 'async');
		$this->layouts->add_include('assets/css/responsive.css', true, 'async');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css', false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css', false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic', false);

		$data['title'] = 'Berita, Promo, Info Green Bamboo Terrace | Tajur Bogor';
		$data['description'] = 'Dapatkan informasi berita mengenai harga rumah, cicilan, promo dan info lainnya mengenai perumahan Green Bamboo Terrace di sini. Kunjungi websitenya sekarang juga!';
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
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css', false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css', false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic', false);

		// $data['title'] = 'News - Green Bamboo Terrace';
		// $data['description'] = 'Hunian eco-living terbaik di area Bogor dengan harga terjangkau. Tanpa perantara, fasilitas lengkap, desain terkini dari jepang, dengan konsep rumah pintar. Dekat ke banyak fasilitas, kurang dari setengah jam dari stasiun bogor, sangat dekat dengan tol bogor dan ciawi';
		// $data['keywords'] = 'smart home system, eco living, konsep hijau, rumah pintar, bamboo tajur, bambootajur, bambutajur, real estate, ramah lingkungan, investasi properti, investasi rumah, green bamboo terrace, properti bogor, properti tajur, beli rumah di bogor, beli rumah mewah terjangkau, properti dekat rumah sakit, perumahan dekat tol, klaster dekat taman bermain, hunian dekat pt unitex, perumahan dekat tol bogor, perumahan dekat tol ciawi, rumah sejuk, rumah strategis, perumahan strategis, perumahan menengah keatas, perumahan 1 miliar, rumah dengan harga dibawah 2 miliar, perumahan desain minimalis, perumahan paling aman';


		$data['url'] = 'https://www.bambootajur.com/berita-dan-promo';

		$currentURI = $this->uri->segment(2);

		switch ($currentURI) {
			case '':
				$data['title'] = 'Rumah Ready Stock di Bogor Timur - Tajur';

				$data['description'] = 'Mencari rumah ready stock di Bogor yang sesuai dengan keinginan terkadang gampang - gampang susah. Terlebih jika Anda menginginkan bangunan yang berkualitas.';

				$data['keywords'] = 'Green Bamboo Terrace, properti di Bogor, investasi properti, lokasi strategis, properti tajur bogor, Tol Jagorawi, Tol Bocimi, hunian eksklusif, hunian nyaman, perumahan di bogor, kota bogor.';
				break;
			case 'apa-sih-kriteria-rumah-sehat':
				$data['title'] = 'Apa sih kriteria rumah sehat?';

				$data['description'] = 'Di tengah wabah virus corona yang terjadi di Indonesia, membuat kita akan melakukan cara apapun untuk bisa terhindari dan terinfeksi COVID-19 tersebut. Salah satu cara sederhana adalah melakukan social distancing, #dirumahaja dan juga menjaga kebersihan sehingga menciptakan rumah sehat dan bebas dari penyakit.';

				$data['keywords'] = 'Green Bamboo Terrace, properti di Bogor, investasi properti, lokasi strategis, properti tajur bogor, Tol Jagorawi, Tol Bocimi, hunian eksklusif, hunian nyaman, perumahan di bogor, kota bogor.';
				break;
			case 'keputusan-terbaik-saat-pandemik-berkepanjangan':
				$data['title'] = 'Green Bamboo Terrace, Keputusan Terbaik Saat Pandemik Berkepanjangan.';

				$data['description'] = 'Beli rumah saat pandemi mungkin jadi pilihan sulit bagi sebagian orang, mengingat banyak hal yang perlu dipertimbangkan selama krisis Covid-19. Pandemi Covid-19 membuat masyarakat ingin memiliki rumah dan tinggal di klaster yang tak terinfeksi.';

				$data['keywords'] = 'Green Bamboo Terrace, properti di Bogor, investasi properti, lokasi strategis, properti tajur bogor, Tol Jagorawi, Tol Bocimi, hunian eksklusif, hunian nyaman, perumahan di bogor, kota bogor.';
				break;
			case 'special-rate-kpr-di-green-bamboo-terrace-mulai-dari-33':
				$data['title'] = 'Special Rate KPR di Green Bamboo Terrace Mulai dari 3,3%';

				$data['description'] = 'Impian punya properti INSENTIF PPN HINGGA 100% pasti bisa terwujud di Green Bamboo Terrace. Ingin mengetahui lebih detail produk rumah dengan Program INSENTIF PPN HINGGA 100% plus hadiah banyak lainnya.';

				$data['keywords'] = 'Green Bamboo Terrace, properti di Bogor, investasi properti, lokasi strategis, properti tajur bogor, Tol Jagorawi, Tol Bocimi, hunian eksklusif, hunian nyaman, perumahan di bogor, kota bogor.';
				break;
			case 'bulan-juli-buanyaaak-hadiahnya':
				$data['title'] = 'Bulan Juli, Buanyaaak Hadiahnya… !';

				$data['description'] = 'Impian punya properti INSENTIF PPN HINGGA 100% pasti bisa terwujud di Green Bamboo Terrace. Ingin mengetahui lebih detail produk rumah dengan Program INSENTIF PPN HINGGA 100% plus hadiah banyak lainnya.';

				$data['keywords'] = 'Green Bamboo Terrace, properti di Bogor, investasi properti, lokasi strategis, properti tajur bogor, Tol Jagorawi, Tol Bocimi, hunian eksklusif, hunian nyaman, perumahan di bogor, kota bogor.';
				break;
			case 'free-ppn-hingga-100-persen-hanya-di-green-bamboo-terrace':
				$data['title'] = 'Free PPN Hingga 100%, Hanya di perumahan Green Bamboo Terrace';

				$data['description'] = 'Impian punya properti INSENTIF PPN HINGGA 100% pasti bisa terwujud di Green Bamboo Terrace. Ingin mengetahui lebih detail produk rumah dengan Program INSENTIF PPN HINGGA 100% plus hadiah banyak lainnya.';

				$data['keywords'] = 'Green Bamboo Terrace, properti di Bogor, investasi properti, lokasi strategis, properti tajur bogor, Tol Jagorawi, Tol Bocimi, hunian eksklusif, hunian nyaman, perumahan di bogor, kota bogor.';
				break;
			case 'green-bamboo-terrace-perumahan-siap-huni-di-kota-bogor':
				$data['title'] = 'Green Bamboo Terrace, Perumahan Siap Huni di Kota Bogor';

				$data['description'] = 'Akses yang mudah membuat properti di Bogor menjadi semakin menjanjikan. Salah satunya Green Bamboo Terrace yang memiliki lokasi strategis di Tajur Kota Bogor.';

				$data['keywords'] = 'Green Bamboo Terrace, properti di Bogor, investasi properti, lokasi strategis, properti tajur bogor, Tol Jagorawi, Tol Bocimi, hunian eksklusif, hunian nyaman, perumahan di bogor, kota bogor.';
				break;
			case 'tips-sederhana-rumah-sehat-bebas-penyakit':
				$data['title'] = 'Tips Sederhana Menciptakan Rumah yang lebih Sehat dan Bebas Penyakit';

				$data['description'] = 'Seperti tidak seorangpun yang memprediksi bahwa kehidupan dunia saat ini porak-poranda oleh pandemik Covid-19, juga tak seorangpun yang bisa memprediksi kapan semuanya ini akan berakhir. Yang bisa saat ini kita lakukan tetap menjaga protokol kesehatan serta tetap bekerja untuk dapat memenuhi kebutuhan hidup yang tak dapat ditunda ini.';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'get-privilege-deals':
				$data['title'] = 'Get Privilege Deals, NUP Phase 2 Sekarang !';

				$data['description'] = 'Memenuhi permintaan dari customer-customer kami, maka Green Bamboo Terrace mulai memperkenalkan Phase 2, di mana customer sudah bisa melakukan NUP untuk mendapatkan privilege memilih unit terlebih dahulu dibandingkan orang lain. ';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'pembangunan-sarana-olahraga':
				$data['title'] = 'Pembangunan Sarana Olahraga dan Taman Kota di Sekitar Kawasan Perumahan Green Bamboo Terrace';

				$data['description'] = 'hadirnya fasilitas olahraga dan taman yang berada persis di depan perumahan Green Bamboo Terrace ini, maka semakin lengkap pula lah fasilitas pendukung yang ada di sekitar perumahan Green Bamboo Terrace ini.';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'visualisasi-eksterior-rumah':
				$data['title'] = 'Visualisasi Eksterior Rumah Bisa Sangat Tergantung Kepada Desain Interiornya';

				$data['description'] = 'Desain interior adalah merencanakan, menata, dan merancang ruang-ruang interior dalam bangunan. Tatanan yang dapat memenuhi kebutuhan dasar kita akan sarana untuk bernaung dan berlindung, menentukan langkah sekaligus mengatur bentuk aktivitas kita, memelihara aspirasi dan mengekspresikan ide-ide yang menyertai segala tindakan kita, memengaruhi penampilan, perasaan dan juga kepribadian kita.';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'sekarang-saatnya':
				$data['title'] = 'Sekaranglah Saatnya…!';

				$data['description'] = 'Tidak ada waktu yang tidak tepat membeli rumah dan tidak ada istilah terlalu muda atau terlalu tua. Keputusan membeli rumah adalah keputusan jangka panjang, bahkan naik atau turunnya harga properti tidak menjadi masalah.';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'beli-rumah-gratis-biaya-kpr-dan-pajak':
				$data['title'] = 'Beli Rumah Gratis Biaya KPR & Pajak';

				$data['description'] = 'Beli rumah semakin mudah, mungkinkah? Jawabannya tentu sangat mungkin. Dengan catatan Anda teliti memilih developer serta cermat memperhatikan pembiayaan untuk hunian yang akan Anda beli nantinya, maka Anda akan semakin mudah membeli rumah dengan penghematan biaya yang banyak.';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'berteduhlah-di-bawah-pohon-besar-dan-benar':
				$data['title'] = 'Berteduhlah di Bawah Pohon Besar dan Benar';

				$data['description'] = 'Jika kamu berteduh, lakukanlah di bawah pohon besar';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'kenapa-harus-punya-rumah-di-bogor':
				$data['title'] = 'Kenapa Harus Punya Rumah Di Bogor';

				$data['description'] = 'Bogor merupakan kawasan penyangga Jakarta yang banyak diincar calon pembeli rumah';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'sedang-merencanakan-membeli-rumah-baru-berikut-biaya-tambahan-yang-harus-kamu-cermati':
				$data['title'] = 'Sedang Merencanakan Membeli Rumah Baru? Berikut Biaya Tambahan Yang Harus kamu Cermati';

				$data['description'] = 'Jika Kamu tengah bersiap untuk membeli rumah, sebaiknya siapkan dana lebih di luar harga rumah yang Kamu incar. Pasalnya, ada beberapa biaya lain yang akan timbul dari proses jual beli tersebut. Beberapa di antaranya termasuk Biaya KPR apabila Kamu membeli dengan cara bayar KPR, biaya notaris, hingga pajak yang harus dikeluarkan oleh baik penjual maupun pembeli.';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'tahun-baru-semangat-baru-harapan-juga-baru':
				$data['title'] = 'Tahun Baru, Semangat Baru, Harapan juga Baru';

				$data['description'] = 'Tahun 2020 berakhir dan kita songsong tahun baru 2021. Ada banyak pelajaran yang telah diraih pada 2020. Ada banyak keberhasilan dan kegagalan pada 2020. Semua itu adalah berkah dan telah terjadi semuanya.';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'selamat-tinggal-2020-selamat-datang-2021':
				$data['title'] = 'Selamat Tinggal 2020, Selamat Datang 2021';

				$data['description'] = 'Tidak terasa kita sudah memasuki penghujung akhir tahun 2020 dan tinggal beberapa hari lagi menuju detik-detik pergantian tahun 2021.';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'benarkah-akhir-tahun-adalah-waktu-yang-tepat-membeli-rumah':
				$data['title'] = 'Benarkah Akhir Tahun Adalah Waktu Yang Tepat Membeli Rumah?';

				$data['description'] = 'Harga rumah selalu meningkat. Itu sebabnya, menunda kepemilikan rumah saat ini hanya membuat Anda harus menyediakan uang lebih banyak untuk beli rumah di masa depan. Bahkan di saat pandemic seperti saat ini pun, harga rumah tidak pernah turun akan tetapi malah naik harganya.';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'last-offers-2020-promo-akhir-tahun-2020-dari-green-bamboo-terrace':
				$data['title'] = 'Last Offers 2020 – Promo Akhir Tahun 2020 dari Green Bamboo Terrace';

				$data['description'] = '2020  akan berakhir sebentar lagi. Sebagian besar masyarakat masih berjuang menghadapi imbas lemahnya sektor ekonomi dan finansial akibat pandemik yang sekarang sudah memasuki bulan ke 9 yang menyerang berbagai sector di negara kita';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'november-promo-dp-0-dan-dp-5-langsung-huni-rumahnya':
				$data['title'] = 'November Promo - DP 0% dan DP 5% Langsung Huni Rumahnya!';

				$data['description'] = 'Green Bamboo Terrace mengadakan promo “November Promo – Dp 0% dan 5% langsung huni rumahnya” pada bulan November ini';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'momijigari-festival-2020-open-house':
				$data['title'] = 'Momijigari Festival 2020, Very Special Open House di Pertengahan Oktober 2020';

				$data['description'] = 'Tanggal 17-18 Oktober kemarin, Green Bamboo Terrace mengadakan acara yang diberi tajuk “MOMIJIGARI FESTIVAL 2020, Special Open House”';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'momijigari-festival':
				$data['title'] = 'Momijigari Festival 2020 Special Open House';

				$data['description'] = 'Kamu bisa bertanya apapun dan langsung dapat melihat rumah yang sudah jadi dan siap huni di Green Bamboo Terrace.';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'semangat':
				$data['title'] = 'Semangat!!';

				$data['description'] = 'Kamu seharusnya tidak menyerah terhadap apapun yang terjadi padamu. Maksudku, kamu seharusnya menggunakan apapun yang terjadi padamu sebagai alat untuk naik, bukan turun.';

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
				$data['title'] = 'Hanami Festival | Berita dan Promo | Green Bamboo Terrace';

				$data['description'] = 'Setelah sukses dengan acara Momijigari yang dilakukan di penghujung Oktober 2019 yang telah lalu, kini Green Bamboo Terrace mengadakan sebuah event Customer Gathering yang diberi nama Hanami Festival.';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'dibangun-dulu-baru-dijual':
				$data['title'] = 'Dibangun Dulu, Baru Dijual | Berita dan Promo | Green Bamboo Terrace';

				$data['description'] = 'Baru-baru ini kita mendengar peristiwa yang cukup memilukan hati, di mana hampir 7 ribu orang yang mendambakan rumah pertama nya harus menelan pil pahit atas kenyataan bahwa mereka ditipu oleh pengembang perumahan';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'kunjungan-dari-sumitomo-mitsui-banking-corporation-japan':
				$data['title'] = 'Kunjungan Dari Sumitomo Mitsui Banking Corporation Japan | Berita dan Promo | Green Bamboo Terrace';

				$data['description'] = 'Hari Kamis, 13 Februari 2020, Green Bamboo Terrace kedatangan tamu istimewa dari SMBC Group Japan';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'february-ai-promo':
				$data['title'] = 'February AI Promo | Berita dan Promo | Green Bamboo Terrace';

				$data['description'] = 'Green Bamboo Terrace February AI Promo adalah februari berbagi cinta dengan memberikan  Promo kemudahan cara bayar melalui cara bayar KPR dengan Down Payment cukup 5%';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'penandatanganan-ajb-dan-balik-nama-unit-di-green-bamboo-terrace':
				$data['title'] = 'Penandatanganan AJB dan Balik Nama Unit | Berita dan Promo | Green Bamboo Terrace';

				$data['description'] = 'AJB adalah akta otentik yang dibuat oleh PPAT untuk peralihan hak atas tanah dan bangunan';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'berburu-promo-green-bamboo-terrace-bogor-di-awal-tahun-2020':
				$data['title'] = 'Berburu Promo Green Bamboo Terrace | Berita dan Promo | Green Bamboo Terrace';

				$data['description'] = 'Pada pameran di Mall Boxies 123 ini, Green Bamboo Terrace Hadir kembali dengan PROMO CRAZY OFFER yaitu Promo KPR dengan DP 5% dan 10% yang dapat dicicil 3x';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'year-end-promo-crazy-offer':
				$data['title'] = 'Year End Promo | Berita dan Promo | Green Bamboo Terrace';

				$data['description'] = 'Green Bamboo Terrace menghadirkan Year End Promo dengan memberikan promo pembelian rumah dengan DP 5% dan 10% yang dapat dicicil hingga 5x, free BPHTB, dll';

				$data['keywords'] = 'Green Bamboo Terrace, promo KPR, Promo Green Bamboo Terrace, lokasi strategis, promo properti, promo perumahan, KPR rumah bogor, perumahan di bogor, Year End Promo, tol Jagorawi, tol Bocim, investasi perumahan';
				break;
			case 'momijigari-festival-oktober':
				$data['title'] = 'Momijigari Festival | Berita dan Promo | Green Bamboo Terrace';

				$data['description'] = 'Green Bamboo Terrace mengadakan acara Momijigari Festival dengan berbagai promo properti yang menarik, seperti KPR DP 5%, Diskon KPR 5%, dll';

				$data['keywords'] = 'Green Bamboo Terrace, Momijigari Festival, tipe rumah momiji, promo properti, promo perumahan, diskon kpr, promo kpr, lokasi strategis, events Green Bamboo Terrace, Customer Gathering';
				break;
			case 'serah-terima-unit-phase-1':
				$data['title'] = 'Serah Terima Unit Phase 1 | Berita dan Promo | Green Bamboo Terrace';

				$data['description'] = 'Green Bamboo Terrace melakukan proses serah terima unit Phase 1. PT KBJ menepati janji bahwa mulai September 2019, pembeli sudah bisa menerima kunci unit.';

				$data['keywords'] = 'Green Bamboo Terrace, PT KBJ, perumahan Green Bamboo Terrace, perumahan di Bogor, properti bogor, proses serah terima, serah terima unit,  Marketing Gallery, unit rumah, lokasi strategis, lingkungan nyaman';
				break;
			case 'customer-gathering-event-get-special-discount-and-gift':
				$data['title'] = 'Customer Gathering Event | Berita dan Promo | Green Bamboo Terrace';

				$data['description'] = 'Green Bamboo Terrace menyelenggarakan acara Customer Gathering event bertema Festival Momijigari. Acara ini memberikan berbagai diskon spesial untuk customer.';

				$data['keywords'] = 'Green Bamboo Terrace,  Customer Gathering event , diskon spesial, tipe rumah momiji, events Green Bamboo Terrace, customer gathering, promo perumahan, diskon KPR, promo KPR';
				break;
			case 'penandatanganan-kerjasama-dengan-bank-mandiri-dan-bank-bni-syariah':
				$data['title'] = 'Kerjasama dengan Bank | Berita dan Promo | Green Bamboo Terrace';

				$data['description'] = 'Pertengahan Juni 2019, Green Bamboo Terrace melakukan penandatanganan kerjasama dengan Bank Mandiri dan Bank BNI Syariah untuk Kredit Pemilikan Rumah (KPR)';

				$data['keywords'] = 'Green Bamboo Terrace, Bank Mandiri, Bank BNI Syariah, KPR Bank Mandiri, KPR Bank Bni Syariah, promo DP, promo KPR, jual beli rumah, program KPR, hunian modern, hunian eksklusif';
				break;
			case 'moda-transportasi-dan-akses-semakin-lengkap-properti-di-bogor-semakin-menjanjikan':
				$data['title'] = 'Properti di Bogor Menjanjikan | Berita dan Promo | Green Bamboo Terrace';

				$data['description'] = 'Akses yang mudah membuat properti di Bogor menjadi semakin menjanjikan. Salah satunya Green Bamboo Terrace yang memiliki lokasi strategis di Tajur Kota Bogor.';

				$data['keywords'] = 'Green Bamboo Terrace, properti di Bogor, investasi properti, lokasi strategis, properti tajur bogor, Tol Jagorawi, Tol Bocimi, hunian eksklusif, hunian nyaman, perumahan di bogor, kota bogor.';
				break;
			case 'green-bamboo-terrace-perumahan-siap-huni-di-kota-bogor':
				$data['title'] = 'Green Bamboo Terrace, Perumahan Siap Huni di Kota Bogor';

				$data['description'] = 'Akses yang mudah membuat properti di Bogor menjadi semakin menjanjikan. Salah satunya Green Bamboo Terrace yang memiliki lokasi strategis di Tajur Kota Bogor.';

				$data['keywords'] = 'Green Bamboo Terrace, properti di Bogor, investasi properti, lokasi strategis, properti tajur bogor, Tol Jagorawi, Tol Bocimi, hunian eksklusif, hunian nyaman, perumahan di bogor, kota bogor.';
				break;
			case 'tips-memaksimalkan-fungsi-ruang-dalam-rumah':
				$data['title'] = 'Tips Memaksimalkan Fungsi Ruang dalam Rumah';

				$data['description'] = 'Seringkali kita bingung untuk menempatkan furniture atau perabot di dalam rumah supaya rumah yang tidak terlalu besar bisa terlihat tetap luas dan fungsional. Berikut ini adalah beberapa tips untuk menciptakan fungsi ruang yang maksimal sehingga rumah tetap nyaman untuk ditempati.';

				$data['keywords'] = 'Green Bamboo Terrace, properti di Bogor, investasi properti, lokasi strategis, properti tajur bogor, Tol Jagorawi, Tol Bocimi, hunian eksklusif, hunian nyaman, perumahan di bogor, kota bogor.';
				break;
			case 'rumah-murah-di-tajur-bogor':
				$data['title'] = 'Rumah Murah di Tajur Bogor';

				$data['description'] = 'Banyak rumah murah di Tajur Bogor. Tapi seringkali harga yang murah tersebut tidak sejalan dengan kualitas bangunan dari rumah yang akan Anda beli.';

				$data['keywords'] = 'Green Bamboo Terrace, properti di Bogor, investasi properti, lokasi strategis, properti tajur bogor, Tol Jagorawi, Tol Bocimi, hunian eksklusif, hunian nyaman, perumahan di bogor, kota bogor.';
				break;
			case 'rumah-ready-stock-di-bogor-timur-tajur':
				$data['title'] = 'Rumah Ready Stock di Bogor Timur - Tajur';

				$data['description'] = 'Mencari rumah ready stock di Bogor yang sesuai dengan keinginan terkadang gampang - gampang susah. Terlebih jika Anda menginginkan bangunan yang berkualitas.';

				$data['keywords'] = 'Green Bamboo Terrace, properti di Bogor, investasi properti, lokasi strategis, properti tajur bogor, Tol Jagorawi, Tol Bocimi, hunian eksklusif, hunian nyaman, perumahan di bogor, kota bogor.';
				break;
			case 'rumah-mewah-di-bogor-kota':
					$data['title'] = 'Rumah Mewah di Bogor Kota';
						
					$data['description'] = 'Mencari rumah ready stock di Bogor yang sesuai dengan keinginan terkadang gampang - gampang susah. Terlebih jika Anda menginginkan bangunan yang berkualitas.';
					
					$data['keywords'] = 'Green Bamboo Terrace, properti di Bogor, investasi properti, lokasi strategis, properti tajur bogor, Tol Jagorawi, Tol Bocimi, hunian eksklusif, hunian nyaman, perumahan di bogor, kota bogor.';
				break;
		}
		$data['canonical'] = 'https://www.bambootajur.com/berita-dan-promo';

		$this->layouts->view('pages/news/' . $news_page, $data);
	}

	public function disclaimer()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('assets/css/responsive.css', true, 'async');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css', false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css', false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic', false);

		$data['title'] = 'Disclaimer | Info Produk, Gambar, Konten | Green Bamboo Terrace';
		$data['description'] = 'Seluruh informasi yang ditampilkan di dalam website ini, baik gambar serta konten bukan tanggung jawab developer.';
		$data['keywords'] = 'Disclaimer, informasi produk, informasi gambar, konten produk';
		$data['url'] = 'https://www.bambootajur.com/disclaimer';
		$data['canonical'] = 'https://www.bambootajur.com/disclaimer';

		$this->layouts->view('pages/disclaimer', $data);
	}

	public function privacy()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('assets/css/responsive.css', true, 'async');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css', false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css', false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic', false);

		$data['title'] = 'Privacy Policy - Green Bamboo Terrace';
		$data['description'] = 'Green bamboo terrace mengumpulkan informasi untuk tujuan analisis. Kami tidak memperjualbelikan informasi pribadi dan kami akan mengambil langkah-langkah yang wajar untuk menjamin keamanan data diri Anda.';
		$data['keywords'] = 'smart home system, eco living, konsep hijau, rumah pintar, bamboo tajur, bambootajur, bambutajur, real estate, ramah lingkungan, investasi properti, investasi rumah, green bamboo terrace, hak privasi, privacy policy, kebijakan privasi, keamanan website, perlindungan konten, keamanan informasi';
		$data['url'] = 'https://www.bambootajur.com/privacy-policy';
		$data['canonical'] = 'https://www.bambootajur.com/privacy-policy';

		$this->layouts->view('pages/privacy', $data);
	}

	public function contact()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('assets/css/responsive.css', true, 'async');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css', false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css', false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic', false);

		$data['title'] = 'Contact Us Now | Perumahan di Pusat Kota Bogor | Green Bamboo Terrace';
		$data['description'] = 'Green Bamboo Terrace merupakan perumahan yang terletak di pusat kota Bogor dan dekat dengan stasiun. Harga murah mulai dari Rp 1 Miliar. Booking sekarang juga!';
		$data['keywords'] = 'Perumahan Bamboo Tajur, perumahan dekat kebun raya bogor, perumahan di tajur bogor';
		$data['url'] = 'https://www.bambootajur.com/contact';
		$data['canonical'] = 'https://www.bambootajur.com/contact';

		$this->layouts->view('pages/contact', $data);
	}

	public function promo()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('assets/css/responsive.css', true, 'async');
		$this->layouts->add_include( 'assets/css/promo.css', true, '1.0.2');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css', false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css', false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic', false);

		$data['title'] = 'Promo - Green Bamboo Terrace';
		$data['description'] = 'Promo';
		$data['keywords'] = 'Promo';

		$this->layouts->view('pages/promo', $data, 'blank');
	}

	public function notfound()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('assets/css/responsive.css', true, 'async');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css', false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css', false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic', false);

		$data['title'] = 'Page Not Found - Green Bamboo Terrace';
		$data['description'] = 'Page Not Found';
		$data['keywords'] = 'Page Not Found';

		$this->output->set_status_header('404');

		$this->layouts->view('pages/notfound', $data);
	}

	public function submit()
	{
		$data = array(
			'full_name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone_number' => $this->input->post('number'),
			'created_at' => date('Y-m-d H:i:s'),
			'status' => 1, //send
			'type' => 'phone_number'
		);

		// 		if(!empty($data)){
		if (!empty($data)) {
			$this->receipt_mail($data);
			$datas['save'] = true;
		}
		// 		}else{
		// 			$datas['save'] = false;
		// 		}

		echo json_encode($datas);
	}

	public function submitcontact()
	{
		$data = array(
			'full_name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone_number' => $this->input->post('number'),
			'created_at' => date('Y-m-d H:i:s'),
			'status' => 1, //send
			'type' => 'contact',
			'message' => $this->input->post('message')
		);

		// 		if(!empty($data)){
		if (!empty($data)) {
			$datas['save'] = true;
			$this->receipt_mail($data);
		}
		// 		}else{
		// 			$datas['save'] = false;
		// 		}

		echo json_encode($datas);
	}

	protected function sendMail($data)
	{
		$this->load->library('PHPMailerAutoload');
		$subject = 'Alert Kontak Bamboo Tajur';
		$message = '<h3>Inquiry From : </h3><br /><br />Nama : ' . $data['full_name']
			. '<br /><br /> No Hp : ' . $data['phone_number']
			. '<br /><br /> Email : ' . $data['email']
			. (!empty($data['message']) ? '<br /><br /> Pesan : ' . $data['message'] . " <br /><br /> Thanks!" : null . " <br /><br /> Thanks!") . '';
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
		if (!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: <br />' . $mail->ErrorInfo;
		} else {
			$mail->send();
			// echo 'Message has been sent';
		}
	}

	protected function receipt_mail($data)
	{
		$this->sendMail($data);
		// 		foreach ($this->mail_list() as $row)
		// 		{
		// 	        $this->sendMail($data,$row);
		// 		}
	}

	protected function mail_list()
	{
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
