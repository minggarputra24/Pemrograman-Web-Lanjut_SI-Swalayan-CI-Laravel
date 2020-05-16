<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

use Restserver\Libraries\REST_Controller;


class Kasir extends REST_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Kasir_model', 'kasir');
    }
    
    public function index_get(){
        $kdkasir = $this->get('kdkasir');

        if ($kdkasir === null) {
            $kasir = $this->kasir->getKasir();
        } else {
            $kasir = $this->kasir->getKasir($kdkasir);
        }

        if ($kasir) {
            $this->response([
                'status' => true,
                'data' => $kasir
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Kode Kasir Tidak Ditemukan'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete(){

        $kdkasir = $this->delete('kdkasir');

        if ($kdkasir === null) {
            $this->response([
                'status' => false,
                'message' => 'Kode Kasir Belum Ditetapkan!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->kasir->deleteKasir($kdkasir) > 0) {
                //ok
                $this->response([
                    'status' => true,
                    'kdbarang' => $kdkasir,
                    'message' => 'Data Kasir Berhasil Dihapus.'
                ], REST_Controller::HTTP_OK);
            } else {
                //id not found
                $this->response([
                    'status' => false,
                    'message' => 'Kode Kasir Tidak Ditemukan!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post(){

        $data = [
            'namakasir' => $this->post('namakasir'),
            'alamat' => $this->post('alamat'),
            'telepon' => $this->post('telepon'),
        ];

        if ($this->kasir->createKasir($data) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data Kasir Berhasil Ditambahkan'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data Kasir Gagal Ditambahkan!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put(){
        $kdkasir = $this->put('kdkasir');
        $data = [
            'namakasir' => $this->put('namakasir'),
            'alamat' => $this->put('alamat'),
            'telepon' => $this->put('telepon')
        ];

        if ($this->kasir->updateKasir($data, $kdkasir) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data Kasir Berhasil Diubah'
            ], REST_Controller::HTTP_OK);
        } else {
            //id not found
            $this->response([
                'status' => false,
                'message' => 'Data Kasir Gagal Diubah!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}

/* End of file Controllername.php */
