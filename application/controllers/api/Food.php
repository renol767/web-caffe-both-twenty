<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Food extends REST_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Food_model', 'food');
    }

    public function index_get(){
        $id = $this->get('id');

        if($id === null){
            $food = $this->food->getFood();
        }else{
            $food = $this->food->getFood($id);
        }

        if ($food){
            $this->response($food, REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'id food not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}