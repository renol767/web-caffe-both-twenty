<?php 

class Food_model extends CI_Model{
    public function getFood($id = null){
        if ($id == null){
            return $this->db->get('food')->result_array();
        }else{
            return $this->db->get_where('food', ['id' => $id])->result_array();
        }
    }
    public function createFood($data){
        $this->db->insert('food', $data);
        return $this->db->affected_rows();
    }
    public function updateFood($data, $id){
        $this->db->update('food', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}