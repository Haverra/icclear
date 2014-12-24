<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Aanspreking extends CI_Controller {
    
 public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');        
        $this->config->item('base_url');        
    }
       public function beheer() {        
        $data['title'] = 'Aansprekingen beheren';
        $partials = array('header' => 'main_header',
            'content' => 'aanspreking/beheer');
        $this->template->load('main_master', $partials, $data);
    }
    public function overzicht(){
        $this->load->model('aanspreking_model');
        $data['aansprekingen'] = $this->aanspreking_model->getAll();
        $this->load->view('aanspreking/overzicht',$data);
    }
    public function delete(){
         $id = $this->input->get('id');
            
            $this->load->model('aanspreking_model');
            echo $this->aanspreking_model->delete($id);
    }
    public function update(){
        $aanspreking->id = $this->input->get('id');
        $aanspreking->naam = $this->input->get('naam');
        $this->load->model('aanspreking_model');
        if ($aanspreking->id == 0){
            $this->aanspreking_model->insert($aanspreking);
        }else {
            $this->aanspreking_model->update($aanspreking);
        }
        
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */