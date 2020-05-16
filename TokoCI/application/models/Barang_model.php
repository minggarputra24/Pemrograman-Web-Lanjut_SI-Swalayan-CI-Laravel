<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    // public function getAllbarang(){
    //    return $this->db->get('barang')->result_array();
    // }

   
   public function getBarang($kdbarang = null){
       if ($kdbarang === null) {

           return $this->db->get('barang')->result_array();

       } else {

           return $this->db->get_where('barang', ['kdbarang' => $kdbarang])->result_array();

       }
   }

    // public function getbarangByID($kdbarang){

    //     return $this->db->get_where('barang',['kdbarang'=>$kdbarang])->row_array();

    // }

    public function createBarang($data){

        $this->db->insert('barang', $data);

        return $this->db->affected_rows();
    }

   public function cariDataBarang(){

       $keyword=$this->input->post('keyword');
       $this->db->like('namabarang',$keyword);
       
       return $this->db->get('barang')->result_array();
   }

    public function deleteBarang($kdbarang){

        $this->db->delete('barang', ['kdbarang' => $kdbarang]);
        return $this->db->affected_rows();
    }

    public function updateBarang($data, $kdbarang){

        $this->db->update('barang', $data, ['kdbarang' => $kdbarang]);
        return $this->db->affected_rows();
        // return $this->db->put()->result_array();
    }

}

/* End of file Controllername.php */

?>