<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css', true, 'async');
		$this->layouts->add_include('assets/css/slide.css', true, 'async');
		$this->layouts->add_include('assets/css/home.css', true, 'async');
		$this->layouts->add_include('assets/css/bootstrap.min.css',true, 'defer');
		$this->layouts->add_include('assets/css/custom.css', true, 'async');
		$this->layouts->add_include('assets/css/all.css',true, 'defer');
		$this->layouts->add_include('assets/css/normalize.min.css',true, 'defer');
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false, 'defer');

		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js',false, 'defer');
		$this->layouts->add_include('assets/js/slide.js', true, 'defer');
		$this->layouts->add_include('assets/js/navbar.js', true, 'defer');

		$data['title'] = 'Green Bamboo Terrace';
		$data['description'] = 'Perumahan dengan konsep hijau atau eco living di area Tajur Bogor, Jawa Barat. Dengan fasilitas yang lengkap, kualitas hidup yang tinggi, serta harga yang terjangkau. Dilengkapi dengan smart home system dan security 24 jam';
		$data['keywords'] = 'smart home system, eco living, konsep hijau, rumah pintar, bamboo tajur, bambootajur, bambutajur, real estate, ramah lingkungan, investasi properti, investasi rumah, green bamboo terrace, properti bogor, properti tajur, beli rumah di bogor, beli rumah mewah terjangkau, properti dekat rumah sakit, perumahan dekat tol, klaster dekat taman bermain, hunian dekat pt unitex, perumahan dekat tol bogor, perumahan dekat tol ciawi, perumahan 2020, perumahan 2020-an, perumahan siap huni bogor, rumah siap huni tajur';

		$this->layouts->view('pages/index', $data);
	}

	public function concept()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css');
		$this->layouts->add_include('assets/css/responsive.css');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$data['title'] = 'The Concept - Green Bamboo Terrace';
		$data['description'] = 'Green Bamboo Terrace - Hunian eksklusif dengan konsep nyaman, aman, dan asri di Bogor yang merupakan sebuah Masterpiece dari Developer Jepang. GBT terletak di Kawasan seluas 1,7 Ha dan memiliki jumlah unit yang terbatas. Segera pesan sekarang.';
		$data['keywords'] = 'smart home system, eco living, konsep hijau, rumah pintar, bamboo tajur, bambootajur, bambutajur, real estate, ramah lingkungan, investasi properti, investasi rumah, green bamboo terrace, properti bogor, properti tajur, beli rumah di bogor, beli rumah mewah terjangkau, properti dekat rumah sakit, perumahan dekat tol, klaster dekat taman bermain, hunian dekat pt unitex, perumahan dekat tol bogor, perumahan dekat tol ciawi, kualitas hidup tinggi, menambah kualitas hidup, hidup mewah harga rendah, rumah milenial, rumah generasi muda, perumahan milenial';

		$this->layouts->view('pages/concept', $data);
	}

	public function homes()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css');
		$this->layouts->add_include('assets/css/responsive.css');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$data['title'] = 'The Homes - Green Bamboo Terrace';
		$data['description'] = 'Kami menawarkan pilihan unit yang sangat exclusive dan private.Type Akane dengan Luas bangunan 95,5 M dilengkapi dengan 3 Kamar Tidur, dan Type Momiji dengan Luas Bangunan 73 M yang dilengkapi dengan 2 Kamar Tidur.';
		$data['keywords'] = 'smart home system, eco living, konsep hijau, rumah pintar, bamboo tajur, bambootajur, bambutajur, real estate, ramah lingkungan, investasi properti, investasi rumah, green bamboo terrace, properti bogor, properti tajur, beli rumah di bogor, beli rumah mewah terjangkau, properti dekat rumah sakit, perumahan dekat tol, klaster dekat taman bermain, hunian dekat pt unitex, perumahan dekat tol bocimi, perumahan dekat tol jagorawi, rumah sejuk, rumah strategis, perumahan strategis, perumahan menengah keatas, perumahan 1 miliar, rumah dengan harga dibawah 2 miliar, perumahan desain minimalis, perumahan paling aman';

		$this->layouts->view('pages/home', $data);
	}

	public function facilities()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css');
		$this->layouts->add_include('assets/css/responsive.css');
		$this->layouts->add_include('assets/css/fullcarousel.css');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$data['title'] = 'The Facilities - Green Bamboo Terrace';
		$data['description'] = 'Green Bamboo Terrace, konsep hunian mewah dengan harga terjangkau, dilengkapi fasilitas taman bermain, mushola, ClubHouse, kolam renang anak, ruang membaca, dan ruang serbaguna. Keamanan terjamin dengan security dan CCTV 24/7';
		$data['keywords'] = 'smart home system, eco living, konsep hijau, rumah pintar, bamboo tajur, bambootajur, bambutajur, real estate, ramah lingkungan, investasi properti, investasi rumah, green bamboo terrace, properti bogor, properti tajur, beli rumah di bogor, beli rumah mewah terjangkau, properti dekat rumah sakit, perumahan dekat tol, klaster dekat taman bermain, hunian dekat pt unitex, perumahan dekat tol bogor, perumahan dekat tol ciawi, kolam renang, musholla, tempat bermain, desain jepang, security 24 jam, pengamanan ketat, penjaga keamanan 24 jam, security cctv, kamera pengawas, desain kayu modern';

		$this->layouts->view('pages/facilities', $data);
	}

	public function latestnews () {
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css');
		$this->layouts->add_include('assets/css/responsive.css');
		$this->layouts->add_include('assets/css/fullcarousel.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$data['title'] = 'News - Green Bamboo Terrace';
		$data['description'] = 'Hunian eco-living terbaik di area Bogor dengan harga terjangkau. Tanpa perantara, fasilitas lengkap, desain terkini dari jepang, dengan konsep rumah pintar. Dekat ke banyak fasilitas, kurang dari setengah jam dari stasiun bogor, sangat dekat dengan tol bogor dan ciawi';
		$data['keywords'] = 'smart home system, eco living, konsep hijau, rumah pintar, bamboo tajur, bambootajur, bambutajur, real estate, ramah lingkungan, investasi properti, investasi rumah, green bamboo terrace, properti bogor, properti tajur, beli rumah di bogor, beli rumah mewah terjangkau, properti dekat rumah sakit, perumahan dekat tol, klaster dekat taman bermain, hunian dekat pt unitex, perumahan dekat tol bogor, perumahan dekat tol ciawi, rumah sejuk, rumah strategis, perumahan strategis, perumahan menengah keatas, perumahan 1 miliar, rumah dengan harga dibawah 2 miliar, perumahan desain minimalis, perumahan paling aman';

		$this->layouts->view('pages/news/latest-news', $data);
	}

	public function news($news_page)
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css');
		$this->layouts->add_include('assets/css/responsive.css');
		$this->layouts->add_include('assets/css/fullcarousel.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$data['title'] = 'News - Green Bamboo Terrace';
		$data['description'] = 'Hunian eco-living terbaik di area Bogor dengan harga terjangkau. Tanpa perantara, fasilitas lengkap, desain terkini dari jepang, dengan konsep rumah pintar. Dekat ke banyak fasilitas, kurang dari setengah jam dari stasiun bogor, sangat dekat dengan tol bogor dan ciawi';
		$data['keywords'] = 'smart home system, eco living, konsep hijau, rumah pintar, bamboo tajur, bambootajur, bambutajur, real estate, ramah lingkungan, investasi properti, investasi rumah, green bamboo terrace, properti bogor, properti tajur, beli rumah di bogor, beli rumah mewah terjangkau, properti dekat rumah sakit, perumahan dekat tol, klaster dekat taman bermain, hunian dekat pt unitex, perumahan dekat tol bogor, perumahan dekat tol ciawi, rumah sejuk, rumah strategis, perumahan strategis, perumahan menengah keatas, perumahan 1 miliar, rumah dengan harga dibawah 2 miliar, perumahan desain minimalis, perumahan paling aman';

		$this->layouts->view('pages/news/'.$news_page, $data);
	}

	public function disclaimer()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css');
		$this->layouts->add_include('assets/css/responsive.css');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$data['title'] = 'Disclaimer - Green Bamboo Terrace';
		$data['description'] = 'Dapatkan info terkini mengenai perkembangan pembangunan cluster bambootajur. Hubungi agen kami dan dapatkan promo serta tawaran menarik. Interior dan eksterios yang menggunakan teknologi langsung dari Jepang dengan brand ternama.';
		$data['keywords'] = 'smart home system, eco living, konsep hijau, rumah pintar, bamboo tajur, bambootajur, bambutajur, real estate, ramah lingkungan, investasi properti, investasi rumah, green bamboo terrace, properti bogor, properti tajur, beli rumah di bogor, beli rumah mewah terjangkau, properti dekat rumah sakit, perumahan dekat tol, klaster dekat taman bermain, hunian dekat pt unitex, perumahan dekat tol bogor, perumahan dekat tol ciawi, claster siap huni, klaster siap huni, fasilitas lengkap, rumah pintar canggih';

		$this->layouts->view('pages/disclaimer', $data);
	}

	public function privacy()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css');
		$this->layouts->add_include('assets/css/responsive.css');
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
		$this->layouts->add_include('assets/css/style.css');
		$this->layouts->add_include('assets/css/responsive.css');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$data['title'] = 'Contact - Green Bamboo Terrace';
		$data['description'] = 'Klaster Elegan Green Bamboo Terrace. Hubungi Agen properti BambooTajur terdekat di tajur, kota Bogor. Dengan mudah akses Tol Jagorawi dan Tol Bocimi. Dikelilingi fasilitas-fasilitas yang super lengkap seperti: Sekolah, Kampus Ternama, Rumah Sakit, Pusat-pusat perbelanjaan, dan tempat rekreasi.';
		$data['keywords'] = 'smart home system, eco living, konsep hijau, rumah pintar, bamboo tajur, bambootajur, bambutajur, real estate, ramah lingkungan, investasi properti, investasi rumah, green bamboo terrace, properti bogor, properti tajur, beli rumah di bogor, beli rumah mewah terjangkau, properti dekat rumah sakit, perumahan dekat tol, klaster dekat taman bermain, hunian dekat pt unitex, perumahan dekat tol bogor, perumahan dekat tol ciawi, perumahan mewah terjangkau';

		$this->layouts->view('pages/contact', $data);
	}

	public function notfound() {
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css');
		$this->layouts->add_include('assets/css/responsive.css');
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
