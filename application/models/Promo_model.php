<?php 

class Promo_model extends CI_Model{
    public function getPromo(){
        return $this->db->get('promo')->result_array();
    }
}