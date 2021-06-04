<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pelanggan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //check session user id (jika belum login, dikembalikan ke login
        if (empty($this->session->userdata('id'))) {
            redirect('user/login');
        }

        //memanggil model
        $this->load->model('pelanggan_model');
    }

    public function index()
    {
        //mengarahkan ke function read
        $this->read();
    }

    public function read()
    {
        //memanggil function read pada  model
        //function read berfungsi mengambil/read data dari table di database
        $data_pelanggan = $this->pelanggan_model->read();

        //mengirim data ke view
        $output = array(
            //memanggil view
            'theme_page' => 'pelanggan_read',
            'judul' => 'DATA PELANGGAN',

            //data  dikirim ke view
            'data_pelanggan' => $data_pelanggan
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }


    public function update()
    {
        //menangkap id data yg dipilih dari view (parameter get)
        $id = $this->uri->segment(3);

        //function read berfungsi mengambil 1 data dari table sesuai id yg dipilih
        $data_pelanggan_single = $this->pelanggan_model->read_single($id);

        //mengirim data ke view
        $output = array(
            'theme_page' => 'pelanggan_update',
            'judul' => 'EDIT PELANGGAN',

            //mengirim data yang dipilih ke view
            'data_pelanggan_single' => $data_pelanggan_single,
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function update_submit()
    {
        //menangkap id data yg dipilih dari view
        $id = $this->uri->segment(3);

        //menangkap data input dari view
        $nama = $this->input->post('first_name');
        $email = $this->input->post('email');
        $address = $this->input->post('address');
        $numberphone = $this->input->post('numberphone');
        $numberwhatsapp = $this->input->post('numberwhatsapp');

        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            'first_name' => $nama,
            'email' => $email,
            'address' => $address,
            'numberphone' => $numberphone,
            'numberwhatsapp' => $numberwhatsapp,
        );

        //memanggil function insert pada  model
        //function insert berfungsi menyimpan/create data ke table di database
        $data_pelanggan = $this->pelanggan_model->update($input, $id);

        //mengembalikan halaman ke function read
        redirect('pelanggan/read');
    }

    public function delete($id)
    {
        $where = array('uid' => $id);
        $this->pelanggan_model->delete($where, 'user_information');
        redirect('pelanggan/read');
    }
}
