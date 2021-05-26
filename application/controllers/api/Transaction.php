<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Transaction extends REST_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transaction_model', 'transaction');
    }

    public function index_get(){
        $id = $this->get('uid');

        if($id === null){
            $transaction = $this->transaction->getTransaction();
        }else{
            $transaction = $this->transaction->getTransaction($id);
        }

        if ($transaction){
            $this->response($transaction, REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'id food not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_post(){
        $data = [
            'uid' => $this->post('uid'),
            'food_id' => $this->post('food_id'),
            'quantity' => $this->post('quantity'),
            'total' => $this->post('total'),
            'status' => $this->post('status')
        ];

        if($this->transaction->createTransaction($data)> 0 ){
            $this->response(['status' => true,'message' => 'transaction has been created'], REST_Controller::HTTP_CREATED);
        }else{
            $this->response([
                'status' => true,
                'message' => 'Failed create data'
            ], REST_Controller::HTTP_BAD_REQUEST); 
        }
    }
}