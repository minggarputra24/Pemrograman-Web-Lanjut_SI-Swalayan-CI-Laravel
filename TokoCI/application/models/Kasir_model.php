<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kasir_model extends CI_Model
{

    public function getAllKasir()
    {

        //atau bisa juga menggunakan code berikut
        return $this->db->get('kasir')->result_array();
    }

    public function createKasir($data){
		$this->db->insert('kasir', $data);
		return $this->db->affected_rows();
	}

    public function hapusdatakasir($kdkasir)
    {
        $this->db->where('kdkasir', $kdkasir);
        $this->db->delete('kasir');
    }

    public function ubahdatakasir()
    {
        $data = [
            "namakasir" => $this->input->post('namakasir', true),
            "alamat" => $this->input->post('alamat', true),
            "telepon" => $this->input->post('telepon', true),
        ];
        $this->db->where('kdkasir', $this->input->post('kdkasir'));
        $this->db->update('kasir', $data);
    }

    // public function selectKasir()
    // {
    //     $query = $this->db->get('kasir');
    //     return $query->result_array();
    // }

    public function getKasirByID($kdkasir)
    {
        return $this->db->get_where('kasir', ['kdkasir' => $kdkasir])->row_array();
    }

    public function getKasir($kdkasir = null)
    {
        if ($kdkasir === null) {
            return $this->db->get('kasir')->result_array();
        } else {
            return $this->db->get_where('kasir', ['kdkasir' => $kdkasir])->result_array();
        }
    }
public function deleteKasir($kdkasir)
    {
        $this->db->delete('kasir', ['kdkasir' => $kdkasir]);
        return $this->db->affected_rows();
    }
 public function updateKasir($data, $kdkasir){
        $this->db->update('kasir', $data, ['kdkasir' => $kdkasir]);
        return $this->db->affected_rows();
    }
}

/* End of file dosen_model.php */
