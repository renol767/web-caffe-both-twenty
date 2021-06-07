<?php 

class News_modelAPI extends CI_Model{
    public function getNews(){
        return $this->db->get('news')->result_array();
    }
}