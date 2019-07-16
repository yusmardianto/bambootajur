<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/slide.css');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('assets/css/custom.css');
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js',false);
		$this->layouts->add_include('assets/js/slide.js');
		$this->layouts->add_include('assets/js/navbar.js');

		$this->layouts->view('pages/index');
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

		$data['title'] = 'The Concept | Green Bamboo Terrace';
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

		$data['title'] = 'The Homes | Green Bamboo Terrace';
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

		$data['title'] = 'The Facilities | Green Bamboo Terrace';
		$this->layouts->view('pages/facilities', $data);
	}

	public function news()
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

		$data['title'] = 'News | Green Bamboo Terrace';
		$this->layouts->view('pages/news', $data);
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

		$data['title'] = 'Disclaimer | Green Bamboo Terrace';
		$this->layouts->view('pages/disclaimer', $data);
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

		$data['title'] = 'Contact | Green Bamboo Terrace';
		$this->layouts->view('pages/contact', $data);
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
