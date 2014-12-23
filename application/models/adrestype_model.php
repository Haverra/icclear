<?php

class Adrestype_model extends CI_Model {

      function __construct()
    {
        parent::__construct();
    }
    
        function getAlle()
    {
        $query = $this->db->get('icclear_adresType');
        return $query->result();
    }    
    
    function insert($adresType)
    {
        $this->db->insert('icclear_adresType', $adresType);
        return $this->db->insert_id();
    }
    
    function update($adresType)
    {
        $this->db->where('id', $adresType->id);
        $this->db->update('icclear_adresType', $adresType);
    }
    
    function delete($id)
    {
        $this->load->model('gebruiker_model');
        if ($this->gebruiker_model->countGebruikersAdresType($id) == 0) {
            $this->db->where('id', $id);
            $this->db->delete('icclear_adresType');
            return 1;
        } else {
            return 0;
        }
    }
}