<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pesanan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //check session user id (jika belum login, dikembalikan ke login
        if (empty($this->session->userdata('id'))) {
            redirect('user/login');
        }

        //memanggil model
        $this->load->model('pesanan_model');
    }

    public function index()
    {
        //mengarahkan ke function read
        $this->read();
    }

    public function read()
    {
        //memanggil function read pada pesanan model
        //function read berfungsi mengambil/read data dari table pesanan di database
        $data_pesanan = $this->pesanan_model->read();

        //mengirim data ke view
        $output = array(
            //memanggil view
            'theme_page' => 'pesanan_read',
            'judul' => 'DATA PESANAN',

            //data pesanan dikirim ke view
            'data_pesanan' => $data_pesanan
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }



    public function update()
    {
        //menangkap id data yg dipilih dari view (parameter get)
        $id = $this->uri->segment(3);
        $data_pesanan_single = $this->pesanan_model->read_single($id);

        //mengirim data ke view
        $data = array(

            //mengirim data yang dipilih ke view
            'data_pesanan_single' => $data_pesanan_single,
        );

        $data = [
            'status' => 'Sudah DiBayar'

        ];

        $this->db->update('transaction', $data, ['tr_id' => $id]);
        //mengembalikan halaman ke function read
        redirect('pesanan/read');
    }

    public function delete()
    {
        //menangkap id data yg dipilih dari view
        $id = $this->uri->segment(3);

        //memanggil function delete pada pesanan model
        $data_pesanan = $this->pesanan_model->delete($id);

        //mengembalikan halaman ke function read
        redirect('pesanan/read');
    }
}
