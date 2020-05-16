<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  class Register_model extends CI_Model  {  
//    public function insertuser($data)  
//    {  
//     return $this->db->insert('user', $data);  
//    }  
//    public function verifyemail($key)  
//    {  
//     $data = array('status' => 1);  
//       $this->db->where('md5(email)', $key);  
//       return $this->db->update('user', $data);  
//    }

    public function registrasiUser(){
    $data=[
        "namauser" => $this->input->post('namauser', true),
        "username" => $this->input->post('username', true),
       
        "password" => $this->input->post('password',true),
        // "password" => $this->input->post('pswd',true),
        "level" => 'user',
        "status" => 'pasif'
    ];
    // $query = "INSERT INTO user(nama_user, jenis_kelamin, email,password) VALUES('$name', '$username', '$password', 'user')";
    $this->db->insert('user', $data);
    }

    public function getAllUser(){
        $query=$this->db->query("SELECT namauser, username,  status FROM user WHERE level='user'");
        // $query=$this->db->get('transaksi')->get('penonton')->get("");
        return $query->result_array();
    }
 }
?> 