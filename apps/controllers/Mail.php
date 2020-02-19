<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {

  public function float(){
    $this->load->library('mailer');

    $data['name'] = $this->input->post('name');
    $data['email'] = $this->input->post('email');
    $data['number'] = $this->input->post('number');
    $data['subjek'] = 'Float Dashboard';
    $data['pesan'] = 'Float Dashboard';

    $data['body'] = $this->load->view('email/float', array('data'=>$data), true); // Ambil isi file content.php dan masukan ke variabel $content

    $send = $this->mailer->send($data); // Panggil fungsi send yang ada di librari Mailer

    if ($send['status'] == 'Sukses') {
      return 'sukses';
    } else {
      return 'gagal';
    }
  }

  public function contact_us(){
    $this->load->library('mailer');

    $data['name'] = $this->input->post('name');
    $data['email'] = $this->input->post('email');
    $data['number'] = $this->input->post('number');
    $data['subjek'] = 'Contact Us';
    $data['pesan'] = $this->input->post('message');

    $data['body'] = $this->load->view('email/contact_us', array('data'=>$data), true); // Ambil isi file content.php dan masukan ke variabel $content

    $send = $this->mailer->send($data); // Panggil fungsi send yang ada di librari Mailer

    if ($send['status'] == 'Sukses') {
      return 'sukses';
    } else {
      return 'gagal';
    }
  }

  public function concept(){
    $this->load->library('mailer');

    $data['name'] = $this->input->post('name');
    $data['email'] = $this->input->post('email');
    $data['number'] = $this->input->post('number');
    $data['subjek'] = 'The Concept';
    $data['pesan'] = $this->input->post('message');

    $data['body'] = $this->load->view('email/concept', array('data'=>$data), true); // Ambil isi file content.php dan masukan ke variabel $content

    $send = $this->mailer->send($data); // Panggil fungsi send yang ada di librari Mailer

    if ($send['status'] == 'Sukses') {
      return 'sukses';
    } else {
      return 'gagal';
    }
  }

}






