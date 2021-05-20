<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pelanggan_model extends CI_Model
{

    //function read berfungsi mengambil/read data dari table pelanngan di database
    public function read()
    {

        //sql read
        $this->db->select('*');
        $this->db->from('user_information');
        $query = $this->db->get();

        //$query->result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();
    }

    //function read berfungsi mengambil/read data dari table pelanggan di database
    public function read_single($id)
    {

        //sql read
        $this->db->select('*');
        $this->db->from('user_information');

        //$id = uid data yang dikirim dari controller (sebagai filter data yang dipilih)
        //filter data sesuai id yang dikirim dari controller
        $this->db->where('uid', $id);

        $query = $this->db->get();

        //query->row_array = mengirim data ke controller dalam bentuk 1 data
        return $query->row_array();
    }

    //function update berfungsi merubah data ke table pelanggan di database
    public function update($input, $id)
    {
        //$id = uid data yang dikirim dari controller (sebagai filter data yang diubah)
        //filter data sesuai id yang dikirim dari controller
        $this->db->where('uid', $id);

        //$input = data yang dikirim dari controller
        return $this->db->update('user_information', $input);
    }

    //function delete berfungsi menghapus data dari table pelanggan di database
    public function delete($where, $table)
    {
        //$id = iid data yang dikirim dari controller (sebagai filter data yang dihapus)
        $this->db->where($where);
        $this->db->delete('user_information');
    }
}
