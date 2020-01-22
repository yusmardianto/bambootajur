<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css');
		$this->layouts->add_include('assets/css/slide.css');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js',false);
		$this->layouts->add_include('assets/js/slide.js');
		$this->layouts->add_include('assets/js/navbar.js');

		$data['title'] = 'Hunian Nyaman, Aman, dan Asri  | Green Bamboo Terrace';
		$data['description'] = 'Hunian nyaman, aman, dan asri di Bogor, dekat pintu Tol Jagorawi dan Tol Bocimi, dengan material terbaik standard Jepang. DP hanya 50 jutaan dan bisa dicicil.';
		$data['keywords'] = 'Hunian nyaman, hunian eksklusif, Kota Bogor, Green Bamboo Terrace, lokasi strategis, Tajur, hunian dekat tol, tajur, DP rumah, fasilitas rumah, hunian aman, smart home system, eco living, konsep hijau, rumah pintar, bamboo tajur, bambootajur, bambutajur, real estate, ramah lingkungan, investasi properti, investasi rumah, green bamboo terrace, properti bogor, properti tajur, beli rumah di bogor, beli rumah mewah terjangkau, properti dekat rumah sakit, perumahan dekat tol, klaster dekat taman bermain, hunian dekat pt unitex, perumahan dekat tol bogor, perumahan dekat tol ciawi, perumahan 2020, perumahan 2020-an, perumahan siap huni bogor, rumah siap huni tajur, KPR rumah bogor';

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

		$data['title'] = 'The Concept - Green Bamboo Terrace';
		$data['description'] = 'Hunian eksklusif berkonsep nyaman, aman, dan asri di Bogor, Masterpiece dari Developer Jepang, dibangun dengan hati seperti kami membangun untuk rumah sendiri.';
		$data['keywords'] = 'smart home system, eco living, konsep hijau, rumah pintar, bamboo tajur, bambootajur, bambutajur, real estate, ramah lingkungan, investasi properti, investasi rumah, green bamboo terrace, properti bogor, properti tajur, beli rumah di bogor, beli rumah mewah terjangkau, properti dekat rumah sakit, perumahan dekat tol, klaster dekat taman bermain, hunian dekat pt unitex, perumahan dekat tol bogor, perumahan dekat tol ciawi, kualitas hidup tinggi, menambah kualitas hidup, hidup mewah harga rendah, rumah milenial, rumah generasi muda, perumahan milenial';

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

		$this->layouts->add_include('assets/js/navbar.js');

		$data['title'] = 'Tipe Hunian | Green Bamboo Terrace';
		$data['description'] = 'Miliki hunian exclusive dan private mulai dari Rp. 1 M-an di Bogor. Type Akane, 3 Kamar Tidur dengan LB 95,5 M dan Type Momiji, 2 Kamar Tidur dengan LB 73 M.';
		$data['keywords'] = 'Green Bamboo Terrace, perumahan, perumahan eksklusif, properti Indonesia, hunian eksklusif, perumahan strategis, kota bogor, tipe akane, unit rumah, rumah 1M, hunian 2 kamar, hunian 3 kamar, properti tajur, properti dekat tol bocimi, properti dekat tol jagorawi, real estate, investasi rumah';

		$this->layouts->view('pages/home', $data);
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

		$data['title'] = 'Fasilitas Hunian Lengkap | Green Bamboo Terrace';
		$data['description'] = 'Green Bamboo Terrace menyediakan fasilitas terbaik seperti taman bermain anak, kolam renang anak, ruang membaca, ruang serbaguna, mushola, security & CCTV 24/7';
		$data['keywords'] = 'Green Bamboo Terrace, Fasilitas publik, fasilitas pribadi, fasilitas perumahan, clubHouse, taman bermain anak, mushola, security, CCTV, kolam renang anak, ruang membaca, ruang serbaguna, security 24 jam, real estate, ramah lingkungan, rumah dekat tol bogor, perumahan tol bocimi, perumahan tol jagorawi';

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

		$data['title'] = 'News - Green Bamboo Terrace';
		$data['description'] = 'Hunian eco-living terbaik di area Bogor dengan harga terjangkau. Tanpa perantara, fasilitas lengkap, desain terkini dari jepang, dengan konsep rumah pintar. Dekat ke banyak fasilitas, kurang dari setengah jam dari stasiun bogor, sangat dekat dengan tol bogor dan ciawi';
		$data['keywords'] = 'smart home system, eco living, konsep hijau, rumah pintar, bamboo tajur, bambootajur, bambutajur, real estate, ramah lingkungan, investasi properti, investasi rumah, green bamboo terrace, properti bogor, properti tajur, beli rumah di bogor, beli rumah mewah terjangkau, properti dekat rumah sakit, perumahan dekat tol, klaster dekat taman bermain, hunian dekat pt unitex, perumahan dekat tol bogor, perumahan dekat tol ciawi, rumah sejuk, rumah strategis, perumahan strategis, perumahan menengah keatas, perumahan 1 miliar, rumah dengan harga dibawah 2 miliar, perumahan desain minimalis, perumahan paling aman';

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

		$data['title'] = 'News - Green Bamboo Terrace';
		$data['description'] = 'Hunian eco-living terbaik di area Bogor dengan harga terjangkau. Tanpa perantara, fasilitas lengkap, desain terkini dari jepang, dengan konsep rumah pintar. Dekat ke banyak fasilitas, kurang dari setengah jam dari stasiun bogor, sangat dekat dengan tol bogor dan ciawi';
		$data['keywords'] = 'smart home system, eco living, konsep hijau, rumah pintar, bamboo tajur, bambootajur, bambutajur, real estate, ramah lingkungan, investasi properti, investasi rumah, green bamboo terrace, properti bogor, properti tajur, beli rumah di bogor, beli rumah mewah terjangkau, properti dekat rumah sakit, perumahan dekat tol, klaster dekat taman bermain, hunian dekat pt unitex, perumahan dekat tol bogor, perumahan dekat tol ciawi, rumah sejuk, rumah strategis, perumahan strategis, perumahan menengah keatas, perumahan 1 miliar, rumah dengan harga dibawah 2 miliar, perumahan desain minimalis, perumahan paling aman';

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

		$data['title'] = 'Disclaimer | Green Bamboo Terrace';
		$data['description'] = 'Informasi produk terkait gambar, ukuran, dan bentuk yang terdapat di website Green Bamboo Terrace merupakan info umum dan dapat berubah sewaktu-waktu.';
		$data['keywords'] = 'Green Bamboo Terrace, disclaimer, informasi umum, informasi produk, pemberitahuan,informasi layanan';

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

		$data['title'] = 'Hubungi Kami | Green Bamboo Terrace';
		$data['description'] = 'Jika Anda memiliki pertanyaan seputar layanan atau unit rumah di Green Bamboo Terrace, silakan hubungi kami melalui kontak yang sudah tersedia.';
		$data['keywords'] = 'Hubungi kami, Kontak Green Bamboo Terrace, Hubungi Green Bamboo Terrace, Kontak Sales, Show unit, Marketing gallery, lokasi strategis, fasilitas lengkap, hunian dekat tol, perumahan tol jagorawi, perumahan tol bocimi';

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