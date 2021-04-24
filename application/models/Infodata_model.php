<?php 

class Infodata_model extends CI_Model{
    public function getUser($id = null){
        if ($id === null){
            return $this->db->get('user_information')->result_array();
        }else{
            return $this->db->get_where('user_information', ['uid' => $id])->result_array();
        }
    }

    public function createUser($data){
        $this->db->insert('user_information', $data);
        return $this->db->affected_rows();
    }

    public function updateUser($data, $id){
        $this->db->update('user_information', $data, ['uid' => $id]);
        return $this->db->affected_rows();
    }
}