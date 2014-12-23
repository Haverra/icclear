<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Type extends CI_Controller {
    
 public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');        
        $this->config->item('base_url');        
    }
       public function beheer() {
        $this->load->model('type_model');
        $data['aansprekingen'] = $this->type_model->getAlleAansprekingen();
        $data['betalingStatussen'] = $this->type_model->getAlleBetalingStatussen();
        $data['conferentieStatussen'] = $this->type_model->getAlleConferentieStatussen();
        $data['gelachten'] = $this->type_model->getAlleGeslachten();
        $data['sprekervoorstelStatussen'] = $this->type_model->getAlleSprekersvoorstelStatussen();
        $data['gebruikerTypes'] = $this->type_model->getAlleGebruikerTypes();
        $data['adresTypes'] = $this->type_model->getAlleAdresTypes();
        $data['title'] = 'Home';
        $partials = array('header' => 'main_header',
            'content' => 'beheertypes');
        $this->template->load('main_master', $partials, $data);
    }    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */