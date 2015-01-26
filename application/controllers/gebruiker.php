<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('session');
        $this->config->item('base_url');
        $this->load->library('Authex');
        $this->load->library('email');
    }

    public function login() {
        $email = $this->input->post('gebruikersnaam');
        $password = $this->input->post('password');
        $this->load->model('gebruiker_model');
        if (!isset($gebruikersnaam) && $password) {
            
        } else {
            $user = $this->gebruiker_model->login($email, $password);
            if (is_null($user)) {
                $data['title'] = 'Aanmelden';
                $partials = array('header' => 'main_header', 'content' => 'login');
            } else {
                $data['title'] = 'Aanmelden';
                $data['naam'] =$user->gebruikersnaam;
                $partials = array('header' => 'main_header', 'content' => 'login');
            }
        }

        $this->template->load('main_master', $partials, $data);
    }

    public function logout() {
        
    }

    public function register() {
        
    }

    public function forgetpassword() {
        $email = $this->input->post('email');
    }

}
