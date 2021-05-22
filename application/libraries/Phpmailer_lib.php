<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



class Phpmailer_lib{

    public  function __construct(){
      log_message('Debug','Mailer class is Loaded');
    }


    public function load(){

      require_once APPPATH.'third_party/mailer/src/Exception.php';
      require_once APPPATH.'third_party/mailer/src/PHPMailer.php';
      require_once APPPATH.'third_party/mailer/src/SMTP.php';

      $mail = new PHPMailer();  //PHPMailer

      return $mail;
    }

}

?>