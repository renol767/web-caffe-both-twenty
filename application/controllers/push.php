<?php
defined('BASEPATH') or exit('No direct script access allowed');

class push extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //check session user id (jika belum login, dikembalikan ke login
        if (empty($this->session->userdata('id'))) {
            redirect('user/login');
        }

        //memanggil model
        $this->load->model('push_model');
    }

    public function index()
    {
        //mengarahkan ke function read
        $this->read();
    }

    public function read()
    {
        //memanggil function read pada push model
        //function read berfungsi mengambil/read data dari table push di database
        $data_push = $this->push_model->read();

        //mengirim data ke view
        $output = array(
            //memanggil view
            'theme_page' => 'push_read',
            'judul' => 'PUSH NOTIFICATION',

            //data push dikirim ke view
            'data_push' => $data_push
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function insert()
    {
        //mengirim data ke view
        $output = array(
            //memanggil view
            'theme_page' => 'push_insert',
            'judul' => 'Push Notification',
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function insert_submit()
    {
        //menangkap data input dari view
        $nama = $this->input->post('nama');

        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            'nama' => $nama,
        );

        //memanggil function insert pada pesanan model
        //function insert berfungsi menyimpan/create data ke table pesanan di database
        $data_push = $this->push_model->insert($input);

        //mengembalikan halaman ke function read
        redirect('push/read');
    }

    public function update()
    {
        //menangkap id data yg dipilih dari view (parameter get)
        $id = $this->uri->segment(3);

        //function read berfungsi mengambil 1 data dari table push sesuai id yg dipilih
        $data_push_single = $this->push_model->read_single($id);

        //mengirim data ke view
        $output = array(
            'theme_page' => 'push_update',
            'judul' => 'Ubah push',

            //mengirim data push yang dipilih ke view
            'data_push_single' => $data_push_single,
        );

        //memanggil file view
        $this->load->view('theme/index', $output);
    }

    public function update_submit()
    {
        //menangkap id data yg dipilih dari view
        $id = $this->uri->segment(3);

        //menangkap data input dari view
        $nama = $this->input->post('nama');

        //mengirim data ke model
        $input = array(
            //format : nama field/kolom table => data input dari view
            'nama' => $nama,
        );

        //memanggil function insert pada pesanan model
        //function insert berfungsi menyimpan/create data ke table pesanan di database
        $data_push = $this->push_model->update($input, $id);

        //mengembalikan halaman ke function read
        redirect('push/read');
    }

    public function delete()
    {
        //menangkap id data yg dipilih dari view
        $id = $this->uri->segment(3);

        //memanggil function delete pada pesanan model
        $data_push = $this->push_model->delete($id);

        //mengembalikan halaman ke function read
        redirect('push/read');
    }


    public function export()
    {
        //function read berfungsi mengambil/read data dari table pesanan di database
        $data_pesanan = $this->push_model->read();

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

        //looping data pesanan (mengisi data ke excel)
        foreach ($data_pesanan as $data) {

            //mengisi data ke excel per baris
            $excel->getActiveSheet()->setCellValue('A' . $baris, $data['id']);
            $excel->getActiveSheet()->setCellValue('B' . $baris, $data['nama']);


            //increment baris untuk data selanjutnya
            $baris++;
        }

        //nama file excel
        $filename = 'export_data_pesanan.xls';

        //konfigurasi file excel
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        $objWriter->save('php://output');
    }

    public function export2()
    {
        //memanggil function read pada pesanan model
        //function read berfungsi mengambil/read data dari table pesanan di database
        $data_pesanan = $this->pesanan_model->read();

        //mengirim data ke view
        $output = array(
            'judul' => 'Data pesanan',

            //data pesanan dikirim ke view
            'data_pesanan' => $data_pesanan
        );

        //memanggil file view
        $this->load->view('pesanan_export', $output);
    }
}
