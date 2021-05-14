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
        //memanggil function read pada provinsi model
        //function read berfungsi mengambil/read data dari table provinsi di database
        $data_pelanggan = $this->pelanggan_model->read();

        //mengirim data ke view
        $output = array(
            //memanggil view
            'theme_page' => 'pelanggan_read',
            'judul' => 'DATA PELANGGAN',

            //data provinsi dikirim ke view
            'data_pelanggan' => $data_pelanggan
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function insert()
    {
        //mengirim data ke view
        $output = array(
            //memanggil view
            'theme_page' => 'pelanggan_insert',
            'judul' => 'Tambah Pelanggan',
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function update()
    {
        //menangkap id data yg dipilih dari view (parameter get)
        $id = $this->uri->segment(3);

        //function read berfungsi mengambil 1 data dari table provinsi sesuai id yg dipilih
        $data_pelanggan_single = $this->pelanggan_model->read_single($id);

        //mengirim data ke view
        $output = array(
            'theme_page' => 'pelanggan_update',
            'judul' => 'Ubah Pelanggan',

            //mengirim data provinsi yang dipilih ke view
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
        $numberwhatsapp = $this->input->post('numberwhatsapp');

        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            'first_name' => $nama,
            'email' => $email,
            'address' => $address,
            'numberwhatsapp' => $numberwhatsapp,
        );

        //memanggil function insert pada provinsi model
        //function insert berfungsi menyimpan/create data ke table provinsi di database
        $data_provinsi = $this->pelanggan_model->update($input, $id);

        //mengembalikan halaman ke function read
        redirect('pelanggan/read');
    }

    public function delete($id)
    {
        $where = array('uid' => $id);
        $this->pelanggan_model->delete($where, 'user_information');
        redirect('pelanggan/read');
    }


    public function export()
    {
        //function read berfungsi mengambil/read data dari table provinsi di database
        $data_pelanggan = $this->pelanggan_model->read();

        //load library excel
        $this->load->library('excel');
        $excel = $this->excel;

        //judul sheet excel
        $excel->setActiveSheetIndex(0)->setTitle('Export Data');

        //header table
        $excel->getActiveSheet()->setCellValue('A1', 'ID');
        $excel->getActiveSheet()->setCellValue('B1', 'Nama');

        //baris awal data dimulai baris 2 (baris 1 digunakan header)
        $baris = 2;

        //looping data provinsi (mengisi data ke excel)
        foreach ($data_pelanggan as $data) {

            //mengisi data ke excel per baris
            $excel->getActiveSheet()->setCellValue('A' . $baris, $data['id']);
            $excel->getActiveSheet()->setCellValue('B' . $baris, $data['nama']);


            //increment baris untuk data selanjutnya
            $baris++;
        }

        //nama file excel
        $filename = 'export_data_pelanggan.xls';

        //konfigurasi file excel
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        $objWriter->save('php://output');
    }

    public function export2()
    {
        //memanggil function read pada provinsi model
        //function read berfungsi mengambil/read data dari table provinsi di database
        $data_pelanggan = $this->pelanggan_model->read();

        //mengirim data ke view
        $output = array(
            'judul' => 'Data Pelanggan',

            //data provinsi dikirim ke view
            'data_pelanggan' => $data_pelanggan
        );

        //memanggil file view
        $this->load->view('pelanggan_export', $output);
    }
}
