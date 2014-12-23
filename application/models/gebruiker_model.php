<?php

class Gebruiker_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
        function getAccount($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('icclear_gebruiker');
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return null;
        }
    }
    
    function countGebruikersAanspreking($Id) {
        
        $this->db->where('aansprekingId', $Id);
        $this->db->from('icclear_gebruiker');
        return $this->db->count_all_results();
    }
    
    function countGebruikersAdresType($Id) {
        
        $this->db->where('adresTypeId', $Id);
        $this->db->from('icclear_gebruiker');
        return $this->db->count_all_results();
    }
    
    function countGebruikersGeslacht($Id) {
        
        $this->db->where('geslachtId', $Id);
        $this->db->from('icclear_gebruiker');
        return $this->db->count_all_results();
    }
    
}