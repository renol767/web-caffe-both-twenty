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
}