<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pesanan_model extends CI_Model
{

    //function read berfungsi mengambil/read data dari table  di database
    public function read()
    {

        //sql read
        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->join('food', 'food.id = transaction.food_id');
        $query = $this->db->get();

        //$query->result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();
    }

    //function read berfungsi mengambil/read data dari table  di database
    public function read_single($id)
    {

        //sql read
        $this->db->select('*');
        $this->db->from('transaction');

        //$id = id data yang dikirim dari controller (sebagai filter data yang dipilih)
        //filter data sesuai id yang dikirim dari controller
        $this->db->where('id', $id);

        $query = $this->db->get();

        //query->row_array = mengirim data ke controller dalam bentuk 1 data
        return $query->row_array();
    }

    //function update berfungsi merubah data ke table di database
    public function update($input, $id)
    {
        //$id = id data yang dikirim dari controller (sebagai filter data yang diubah)
        //filter data sesuai id yang dikirim dari controller
        $this->db->where('id', $id);

        //$input = data yang dikirim dari controller
        return $this->db->update('transaction', $input);
    }

    //function delete berfungsi menghapus data dari table di database
    public function delete($id)
    {
        //$id = id data yang dikirim dari controller (sebagai filter data yang dihapus)
        $this->db->where('id', $id);
        return $this->db->delete('transaction');
    }
}
