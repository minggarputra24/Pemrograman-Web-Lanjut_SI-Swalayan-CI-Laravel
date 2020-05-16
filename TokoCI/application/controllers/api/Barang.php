<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

use Restserver\Libraries\REST_Controller;

class Barang extends REST_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Barang_model', 'barang');
    }

    public function index_get(){
        
        $kdbarang = $this->get('kdbarang');
        
        if ($kdbarang === null) {
            $barang = $this->barang->getBarang();
        } else {
            $barang = $this->barang->getBarang($kdbarang);
        }

        if ($barang) {
            $this->response([
                'status' => true,
                'data' => $barang
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Kode Barang Tidak Ditemukan!'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete(){
        
        $kdbarang = $this->delete('kdbarang');

        if ($kdbarang === null) {
            $this->response([
                'status' => false,
                'message' => 'Kode Barang Belum Dipilih!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->barang->deleteBarang($kdbarang) > 0) {
                $this->response([
                    'status' => true,
                    'kdbarang' => $kdbarang,
                    'message' => 'Barang Berhasil Dihapus.'
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'Kode Barang Tidak Ditemukan!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post(){
        $data = [
            'namabarang' => $this->post('namabarang'),
            'hargabarang' => $this->post('hargabarang'),
            'stok' => $this->post('stok')
        ];

        if ($this->barang->createBarang($data) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data Barang Berhasil Ditambahkan'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data Barang Gagal Ditambahkan!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $kdbarang = $this->put('kdbarang');
        $data = [
            'namabarang' => $this->put('namabarang'),
            'hargabarang' => $this->put('hargabarang'),
            'stok' => $this->put('stok')
        ];

        if ($this->barang->updateBarang($data, $kdbarang) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data Barang Berhasil Diubah'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Gagal Mengubah Data Barang!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}

/* End of file Controllername.php */
