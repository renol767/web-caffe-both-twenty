<?php 

class Food_model extends CI_Model{
    public function getFood(){
        return $this->db->query('SELECT food.id, name, description, ingredients, price, ROUND(AVG(COALESCE(food_rate.rates, 0)),1) as rate, picturePath FROM food LEFT OUTER JOIN food_rate ON food.id=food_rate.food_id GROUP BY food.id')->result_array();
        
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