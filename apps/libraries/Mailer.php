<?php defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer {
    protected $_ci;
    protected $email = 'bambootajur@gmail.com'; // Isikan dengan email pengirim
    protected $username = 'bambootajur@gmail.com'; // Isikan dengan nama pengirim
    protected $password = 'kebunbambu2015.'; // Isikan dengan password email pengirim
    protected $name = 'Bamboo Tajur System';

    public function __construct(){
        $this->_ci = &get_instance(); // Set variabel _ci dengan Fungsi2-fungsi dari Codeigniter
        require_once(APPPATH.'third_party/phpmailer/Exception.php');
        require_once(APPPATH.'third_party/phpmailer/PHPMailer.php');
        require_once(APPPATH.'third_party/phpmailer/SMTP.php');
    }

    public function send($data){
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = $this->username; // Email Pengirim
        $mail->Password = $this->password; // Isikan dengan Password email pengirim
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'TLS';
        $mail->CharSet  = 'UTF-8';
        $mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging
        $mail->setFrom($this->email, $this->name);
        $mail->addReplyTo($this->email, $this->name);
        
        $mail->addAddress('bambootajur@gmail.com', 'Bamboo Tajur Admin');
        $mail->isHTML(true); // Aktifkan jika isi emailnya berupa html
        $mail->Subject = $data['subjek'];
        $mail->Body = $data['body'];
        
        $send = $mail->send();
        if($send){ // Jika Email berhasil dikirim
            $response = array('status'=>'Sukses', 'message'=>'Email berhasil dikirim');
        }else{ // Jika Email Gagal dikirim
            $response = array('status'=>'Gagal', 'message'=>'Email gagal dikirim');
        }
        return $response;
    }
}