<?php

class User_model extends CI_Model {

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
}