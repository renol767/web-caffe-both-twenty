<?php
defined('BASEPATH') or exit('No direct script access allowed');

class daftarmenu_model extends CI_Model
{

    //function read berfungsi mengambil/read data dari table provinsi di database
    public function read()
    {

        //sql read
        $this->db->select('*');
        $this->db->from('food');
        $query = $this->db->get();

        //$query->result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();
    }

    //function read berfungsi mengambil/read data dari table provinsi di database
    public function read_single($id)
    {

        //sql read
        $this->db->select('*');
        $this->db->from('food');

        //$id = id data yang dikirim dari controller (sebagai filter data yang dipilih)
        //filter data sesuai id yang dikirim dari controller
        $this->db->where('id', $id);

        $query = $this->db->get();

        //query->row_array = mengirim data ke controller dalam bentuk 1 data
        return $query->row_array();
    }

    //function insert berfungsi menyimpan/create data ke table  di database
    public function insert($input)
    {
        //$input = data yang dikirim dari controller
        return $this->db->insert('food', $input);
    }

    //function update berfungsi merubah data ke table  di database
    public function update($input, $id)
    {
        //$id = id data yang dikirim dari controller (sebagai filter data yang diubah)
        //filter data sesuai id yang dikirim dari controller
        $this->db->where('id', $id);

        //$input = data yang dikirim dari controller
        return $this->db->update('food', $input);
    }

    //function delete berfungsi menghapus data dari table daftarmenu di database
    public function delete($where, $table)
    {
        //$id = id data yang dikirim dari controller (sebagai filter data yang dihapus)
        $this->db->where($where);
        $this->db->delete('food');
    }
}
