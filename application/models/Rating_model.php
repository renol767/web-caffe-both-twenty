<?php

class Rating_model extends CI_Model{

    public function getRating(){
        return $this->db->from('food_rate')->get()->result();
    }

    public function createRating($data){
        $this->db->insert('food_rate', $data);
        return $this->db->affected_rows();
    }
}