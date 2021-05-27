<?php 

class News_model extends CI_Model{
    public function getNews(){
        return $this->db->get('news')->result_array();
    }
}