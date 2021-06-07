<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class News extends REST_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('News_modelAPI', 'news');
    }

    public function index_get(){
        $news = $this->news->getNews();
        if ($news) {
            $this->response($news, REST_Controller::HTTP_OK);
        } else{
            $this->response([
                'status' => false,
                'message' => 'news not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }

    }
}