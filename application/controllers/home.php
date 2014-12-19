<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $data['title'] = 'Home';
        $partials = array('header' => 'main_header',
            'content' => 'home');
        $this->template->load('main_master', $partials, $data);
    }

    public function login() {
        $data['title'] = 'Aanmelden';


        $partials = array('header' => 'main_header', 'content' => 'login');
        $this->template->load('main_master', $partials, $data);
    }

        public function register() {
         $data['title'] = 'Registreren';


        $partials = array('header' => 'main_header', 'content' => 'register');
        $this->template->load('main_master', $partials, $data);
    }
    
    public function forgetpassword() {
        $data['title'] = 'Recover password';


        $partials = array('header' => 'main_header', 'content' => 'passwordRecovery');
        $this->template->load('main_master', $partials, $data);
    }
    
        public function sendmail($to, $from, $subject, $message) {
        $this->email->to($to);
        $this->email->from($from);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */