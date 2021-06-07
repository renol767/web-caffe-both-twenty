<?php

class Transaction_model extends CI_Model{
    public function getTransaction($id = null){
        if ($id == null){
            return $this->db->from('transaction')->join('food', 'transaction.food_id=food.id')
            ->where(['uid' => $id])->get('transaction.id')->result();
        }else{
            return $this->db->from('transaction')->join('food', 'transaction.food_id=food.id')
            ->where(['uid' => $id])->get()->result();
        }
    }

    public function createTransaction($data){
        $this->db->insert('transaction', $data);
        return $this->db->affected_rows();
    }

    public function updateTransaction($data, $id){
        $this->db->update('transaction', $data, ['tr_id' => $id]);
        return $this->db->affected_rows();
    }
}