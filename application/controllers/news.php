<?php
defined('BASEPATH') or exit('No direct script access allowed');

class news extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //check session user id (jika belum login, dikembalikan ke login
        if (empty($this->session->userdata('id'))) {
            redirect('user/login');
        }

        //memanggil model
        $this->load->model('News_model');
    }

    public function index()
    {
        //mengarahkan ke function read
        $this->read();
    }

    public function read()
    {
        //memanggil function read p
        //function read berfungsi mengambil/read data dari table di database
        $data_news = $this->News_model->read();

        //mengirim data ke view
        $output = array(
            //memanggil view
            'theme_page' => 'news_read',
            'judul' => 'NEWS',

            //data dikirim ke view
            'data_news' => $data_news
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function insert()
    {
        //mengirim data ke view
        $output = array(
            //memanggil view
            'theme_page' => 'news_insert',
            'judul' => 'TAMBAH NEWS',
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function insert_submit()
    {
        //menangkap data input dari view



        $title = $this->input->post('title');
        $description = $this->input->post('description');
        $picture = $_FILES['picture'];
        if ($picture = '') {
        } else {
            $config['upload_path']    = './gambar/';
            $config['allowed_types']        = 'gif|jpg|png|PNG';
            $config['max_size']             = 10000; // 1MB
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('picture')) {
                echo "gagal tambah";
            } else {
                $picture = $this->upload->data('file_name');
            }

            //mengirim data ke model
            $input = array(
                //format : nama field/kolom table => data input dari view
                'title' => $title,
                'description' => $description,
                'picture' => $picture,
            );


            //memanggil function insert pada daftarmenu model
            //function insert berfungsi menyimpan/create data ke table daftarmenu di database
            $data_news = $this->News_model->insert($input);

            //mengembalikan halaman ke function read
            redirect('news/read');
        }
    }

    public function update()
    {
        //menangkap id data yg dipilih dari view (parameter get)
        $id = $this->uri->segment(3);

        //function read berfungsi mengambil 1 data dari table sesuai id yg dipilih
        $data_news_single = $this->News_model->read_single($id);

        //mengirim data ke view
        $output = array(
            'theme_page' => 'news_update',
            'judul' => 'EDIT NEWS',

            //mengirim data yang dipilih ke view
            'data_news_single' => $data_news_single,
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function update_submit()
    {
        //menangkap id data yg dipilih dari view
        $id = $this->uri->segment(3);

        //menangkap data input dari view
        $title = $this->input->post('title');
        $description = $this->input->post('description');

        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            'title' => $title,
            'description' => $description,

        );

        //memanggil function insert pada  model
        //function insert berfungsi menyimpan/create data ke table di database
        $this->News_model->update($input, $id);

        //mengembalikan halaman ke function read
        redirect('news/read');
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->News_model->delete($where, 'food');
        redirect('news/read');
    }
}
