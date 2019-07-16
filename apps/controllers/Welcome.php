<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/slide.css');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js',false);
		$this->layouts->add_include('assets/js/slide.js');
		$this->layouts->add_include('assets/js/navbar.js');

		$this->layouts->view('welcome_message');
	}
}
