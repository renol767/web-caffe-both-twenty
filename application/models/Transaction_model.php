<?php

class Transaction_model extends CI_Model{
    public function getTransaction($id = null){
        if ($id == null){
            return $this->db->get('transaction')->result_array();
        }else{
            return $this->db->get_where('transaction', ['uid' => $id])->result_array();
        }
    }
}