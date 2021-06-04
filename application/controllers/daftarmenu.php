<?php
defined('BASEPATH') or exit('No direct script access allowed');

class daftarmenu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //check session user id (jika belum login, dikembalikan ke login
        if (empty($this->session->userdata('id'))) {
            redirect('user/login');
        }

        //memanggil model
        $this->load->model('daftarmenu_model');
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
        $data_daftarmenu = $this->daftarmenu_model->read();

        //mengirim data ke view
        $output = array(
            //memanggil view
            'theme_page' => 'daftarmenu_read',
            'judul' => 'DAFTAR MENU',

            //data dikirim ke view
            'data_daftarmenu' => $data_daftarmenu
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function insert()
    {
        //mengirim data ke view
        $output = array(
            //memanggil view
            'theme_page' => 'daftarmenu_insert',
            'judul' => 'TAMBAH DAFTAR MENU',
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function insert_submit()
    {
        //menangkap data input dari view



        $name = $this->input->post('name');
        $description = $this->input->post('description');
        $ingredients = $this->input->post('ingredients');
        $price = $this->input->post('price');
        $picturePath = $_FILES['picturePath'];
        if ($picturePath = '') {
        } else {
            $config['upload_path']    = './gambar/';
            $config['allowed_types']        = 'gif|jpg|png|PNG';
            $config['max_size']             = 10000; // 1MB
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('picturePath')) {
                echo "gagal tambah";
            } else {
                $picturePath = $this->upload->data('file_name');
            }

            //mengirim data ke model
            $input = array(
                //format : nama field/kolom table => data input dari view
                'name' => $name,
                'description' => $description,
                'ingredients' => $ingredients,
                'price' => $price,
                'rate' => 0,
                'picturePath' => $picturePath,
            );


            //memanggil function insert pada daftarmenu model
            //function insert berfungsi menyimpan/create data ke table daftarmenu di database
            $data_daftarmenu = $this->daftarmenu_model->insert($input);

            //mengembalikan halaman ke function read
            redirect('daftarmenu/read');
        }
    }

    public function update()
    {
        //menangkap id data yg dipilih dari view (parameter get)
        $id = $this->uri->segment(3);

        //function read berfungsi mengambil 1 data dari table sesuai id yg dipilih
        $data_daftarmenu_single = $this->daftarmenu_model->read_single($id);

        //mengirim data ke view
        $output = array(
            'theme_page' => 'daftarmenu_update',
            'judul' => 'EDIT DAFTAR MENU',

            //mengirim data yang dipilih ke view
            'data_daftarmenu_single' => $data_daftarmenu_single,
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function update_submit()
    {
        //menangkap id data yg dipilih dari view
        $id = $this->uri->segment(3);

        //menangkap data input dari view
        $name = $this->input->post('name');
        $description = $this->input->post('description');
        $ingredients = $this->input->post('ingredients');
        $price = $this->input->post('price');


            //mengirim data ke model
            $input = array(
                //format : nama field/kolom table => data input dari view
                'name' => $name,
                'description' => $description,
                'ingredients' => $ingredients,
                'price' => $price,
                'rate' => 0
            );

            //memanggil function insert pada  model
            //function insert berfungsi menyimpan/create data ke table di database
            $this->daftarmenu_model->update($input, $id);

            //mengembalikan halaman ke function read
            redirect('daftarmenu/read');
        
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->daftarmenu_model->delete($where, 'food');
        redirect('daftarmenu/read');
    }
}
