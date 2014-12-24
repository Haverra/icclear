<?php

class Aanspreking_model extends CI_Model {

      function __construct()
    {
        parent::__construct();
    }
    
        function getAll()
    {
        $query = $this->db->get('icclear_aanspreking');
        return $query->result();
    }    
    
    function insert($aanspreking)
    {
        $this->db->insert('icclear_aanspreking', $aanspreking);
        return $this->db->insert_id();
    }
    
    function update($aanspreking)
    {
        $this->db->where('id', $aanspreking->id);
        $this->db->update('icclear_aanspreking', $aanspreking);
    }
    
    function delete($id)
    {
        $this->load->model('gebruiker_model');
        if ($this->gebruiker_model->countGebruikersAanspreking($id) == 0) {
            $this->db->where('id', $id);
            $this->db->delete('icclear_aanspreking');
            return 1;
        } else {
            return 0;
        }
    }
}