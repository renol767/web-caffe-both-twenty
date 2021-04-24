<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Infodata extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Infodata_model', 'user');
    }
    public function index_get(){
        $id = $this->get('uid');

        if ($id === null){
            $user = $this->user->getUser();
        } else{
            $user = $this->user->getUser($id);
        }
        
        if ($user) {
            $this->response($user, REST_Controller::HTTP_OK);
        } else{
            $this->response([
                'status' => false,
                'message' => 'uid not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_post(){
        $data = [
            'uid' => $this->post('uid'),
            'first_name' => $this->post('first_name'),
            'last_name' => $this->post('last_name'),
            'email' => $this->post('email'),
            'address' => $this->post('address'),
            'numberphone' => $this->post('numberphone'),
            'numberwhatsapp' => $this->post('numberwhatsapp')
        ];

        if ($this->user->createUser($data) > 0){
            $this->response([
                'status' => true,
                'message' => 'user has been created'
            ], REST_Controller::HTTP_CREATED);
        }else{
            $this->response([
                'status' => true,
                'message' => 'Failed create data'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put(){

        $id = $this->put('uid');
        $data = [
            'uid' => $this->put('uid'),
            'first_name' => $this->put('first_name'),
            'last_name' => $this->put('last_name'),
            'email' => $this->put('email'),
            'address' => $this->put('address'),
            'numberphone' => $this->put('numberphone'),
            'numberwhatsapp' => $this->put('numberwhatsapp')
        ];

        if ($this->user->updateUser($data, $id) > 0){
            $this->response([
                'status' => true,
                'message' => 'user has been updated'
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status' => true,
                'message' => 'Failed update data'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}