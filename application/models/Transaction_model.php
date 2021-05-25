<?php

class Transaction_model extends CI_Model{
    public function getTransaction($id = null){
        if ($id == null){
            return $this->db->from('transaction')
            ->join('food', 'food.id=transaction.food_id')
            ->get()->result();
        }else{
            return $this->db->from('transaction')
            ->join('food', 'food.id=transaction.food_id')
            ->where(['uid' => $id])->get()->result();
        }
    }

    public function createTransaction($data){
        $this->db->insert('transaction', $data);
        return $this->db->affected_rows();
    }
}