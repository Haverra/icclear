<?php

class Geslacht_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
        function getAll()
    {
        $query = $this->db->get('icclear_geslacht');
        return $query->result();
    }    
    
    function insert($geslacht)
    {
        $this->db->insert('icclear_geslacht', $geslacht);
        return $this->db->insert_id();
    }
    
    function update($geslacht)
    {
        $this->db->where('id', $geslacht->id);
        $this->db->update('icclear_geslacht', $geslacht);
    }
    
    function delete($id)
    {
        $this->load->model('gebruiker_model');
        if ($this->gebruiker_model->countGebruikersGeslacht($id) == 0) {
            $this->db->where('id', $id);
            $this->db->delete('icclear_geslacht');
            return 1;
        } else {
            return 0;
        }
    }
}