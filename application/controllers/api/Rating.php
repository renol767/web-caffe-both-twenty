<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Rating extends REST_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rating_model', 'rating');
    }

    public function index_get(){
        $rating = $this->rating->getRating();

        if ($rating){
            $this->response($rating, REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'id food not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_post(){
        $data = [
            'food_id' => $this->post('food_id'),
            'rates' => $this->post('rates'),
        ];

        if($this->rating->createRating($data) > 0){
            $this->response(['status' => true,'message' => 'transaction has been created'], REST_Controller::HTTP_CREATED);
        } else{
            $this->response([
                'status' => true,
                'message' => 'Failed create data'
            ], REST_Controller::HTTP_BAD_REQUEST); 
        }

    }
}