<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Promo extends REST_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Promo_model', 'promo');
    }

    public function index_get(){
        $promo = $this->promo->getPromo();
        if ($promo) {
            $this->response($promo, REST_Controller::HTTP_OK);
        } else{
            $this->response([
                'status' => false,
                'message' => 'uid not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }

    }
}