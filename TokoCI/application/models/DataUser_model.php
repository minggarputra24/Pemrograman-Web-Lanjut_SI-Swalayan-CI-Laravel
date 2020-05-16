<?php

defined('BASEPATH') or exit('No direct script access allowed');

class DataUser_model extends CI_Model
{

    public function getAlluser()
    {
        //atau bisa juga menggunakan code berikut
        return $this->db->get('user')->result_array();
    }

    // public function tambahdatakasir()
    // {
    //     $data = [
    //         "namakasir" => $this->input->post('namakasir', true),
    //         "alamat" => $this->input->post('alamat', true),
    //         "telepon" => $this->input->post('telepon', true),
    //     ];
    //     // $this->db->insert('Table', $object);
    //     $this->db->insert('kasir', $data);
    // }

    public function getuserByID($id){
        return $this->db->get_where('user',['id'=> $id])->row_array();
    }

    public function hapusdatauser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function ubahdataUser($id) {
        $data=[
            "namauser" => $this->input->post('namauser',true),
            // "jenis_kelamin" => $this->input->post('jenis_kelamin',true),
            "status" => $this->input->post('status',true)
        ];
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }
}

/* End of file dosen_model.php */
