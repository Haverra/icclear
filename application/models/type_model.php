<?php

class Type_model extends CI_Model {

    // +----------------------------------------------------------
    // | TV Shop
    // +----------------------------------------------------------
    // | KHK - 2 TI - 201x-201x
    // +----------------------------------------------------------
    // | User model
    // |
    // +----------------------------------------------------------
    // | K. Vangeel
    // +----------------------------------------------------------

    function __construct()
    {
        parent::__construct();
    }
    
        function getAlleAansprekingen()
    {
        $query = $this->db->get('icclear_aanspreking');
        return $query->result();
    }
    
    function getAlleBetalingStatussen()
    {
        $query = $this->db->get('icclear_betalingStatus');
        return $query->result();
    }
    
    function getAlleConferentieStatussen()
    {
        $query = $this->db->get('icclear_conferentieStatus');
        return $query->result();
    }
    
    function getAlleGeslachten()
    {
        $query = $this->db->get('icclear_geslacht');
        return $query->result();
    }
    
    function getAlleSprekervoorstelStatussen()
    {
        $query = $this->db->get('icclear_sprekersvoorstelStatus');
        return $query->result();
    }
    
    function getAlleGebruikerTypes()
    {
        $query = $this->db->get('icclear_gebruikerType');
        return $query->result();
    }
    
    function getAlleAdresTypes()
    {
        $query = $this->db->get('icclear_adresType');
        return $query->result();
    }
    
    function insertAanspreking($aanspreking)
    {
        $this->db->insert('icclear_aanspreking', $aanspreking);
        return $this->db->insert_id();
    }
    
    function updateAanspreking($aanspreking)
    {
        $this->db->where('id', $aanspreking->id);
        $this->db->update('icclear_aanspreking', $aanspreking);
    }
    
    function deleteAanspreking($id)
    {
        $this->load->model('bestellijn_model');
        if ($this->bestellijn_model->countLijnenProduct($id) == 0) {
            $this->db->where('id', $id);
            $this->db->delete('bier_product');
            return 1;
        } else {
            return 0;
        }
    }
}