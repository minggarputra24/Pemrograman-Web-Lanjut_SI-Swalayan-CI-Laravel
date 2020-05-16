<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penjualanuser_model extends CI_Model
{

    public function getAllPenjualan()
    {

        //atau bisa juga menggunakan code berikut
        $this->db->select('*');
        $this->db->from('penjualan n');
        $this->db->join('barang m', 'm.kdbarang = n.kdbarang');
        $this->db->join('kasir d', 'd.kdkasir= n.kdkasir');

        $query = $this->db->get();
        return $query->result_array();

        //return $this->db->get('nilai')->result_array();
    }
    public function getPenjualanByID($kdpenjualan)
    {
        return $this->db->get_where('penjualan', ['kdpenjualan' => $kdpenjualan])->row_array();
    }
    public function tambahdatapenjualan()
    {
        $data = [
            "kdkasir" => $this->input->post('kdkasir', true), // ini sama dengan htmlspecialchars($_POST['nama])
            "kdbarang" => $this->input->post('kdbarang', true),
            "tanggal" => $this->input->post('tanggal', true),
            "jumlahbeli" => $this->input->post('jumlahbeli', true)
        ];
        // $this->db->insert('Table', $object);
        $this->db->insert('penjualan',$data);
    }
    public function cariDataPenjualan()
    {
        $keyword = $this->input->post('keyword');
        $this->db->distinct();
        $this->db->select('d.namakasir, m.nama, mk.matakuliah, n.nilai, n.id_nilai');
        $this->db->from('nilai n');
        $this->db->join('mahasiswa m', 'm.id_mahasiswa = n.id_mahasiswa');
        $this->db->join('dosen d', 'd.id_dosen= n.id_dosen');
        $this->db->join('matakuliah mk', 'mk.id_matakuliah = n.id_matakuliah');

        $this->db->like('n.nilai', $keyword);
        $this->db->or_like('d.nama_dosen', $keyword);
        $this->db->or_like('m.nama', $keyword);
        $this->db->or_like('mk.matakuliah', $keyword);
        return $this->db->get('nilai')->result_array();
    }
    public function hapusdatapenjualan($kdpenjualan)
    {
        $this->db->where('kdpenjualan', $kdpenjualan);
        $this->db->delete('penjualan');
    }
    public function ubahdatapenjualan()
    {
        $data = [
            "kdkasir" => $this->input->post('kdkasir', true),
            "kdbarang" => $this->input->post('kdbarang', true),
            "jumlahbeli" => $this->input->post('jumlahbeli', true)
        ];
        $this->db->where('kdpenjualan', $this->input->post('kdpenjualan'));
        $this->db->update('penjualan', $data);
    }

    public function selectKasir()
    {
        $query = $this->db->get('kasir');
        return $query->result_array();
    }

    public function selectBarang()
    {
        $query = $this->db->get('barang');
        return $query->result_array();
    }

    // public function selectMatakuliah()
    // {
    //     $query = $this->db->get('matakuliah');
    //     return $query->result_array();
    // }
}

/* End of file ModelName.php */
