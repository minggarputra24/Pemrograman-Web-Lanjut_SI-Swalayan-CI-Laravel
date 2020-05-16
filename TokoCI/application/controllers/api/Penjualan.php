<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

use Restserver\Libraries\REST_Controller;

class Penjualan extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penjualan_model', 'penjualan');
    }

    public function index_get(){

        $kdpenjualan = $this->get('kdpenjualan');

        if ($kdpenjualan === null) {
            $penjualan = $this->penjualan->getPenjualan();
        } else {
            $penjualan = $this->penjualan->getPenjualan($kdpenjualan);
        }

        if ($penjualan) {
            $this->response([
                'status' => true,
                'data' => $penjualan
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Kode Penjualan Tidak Ditemukan!'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $kdpenjualan = $this->delete('kdpenjualan');

        if ($kdpenjualan === null) {
            $this->response([
                'status' => false,
                'message' => 'Kode Penjualan Belum Ditetapkan!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->penjualan->deletePenjualan($kdpenjualan) > 0) {
                $this->response([
                    'status' => true,
                    'kdpenjualan' => $kdpenjualan,
                    'message' => 'Data Penjualan Berhasil Dihapus.'
                ], REST_Controller::HTTP_OK);
            } else {
                //id not found
                $this->response([
                    'status' => false,
                    'message' => 'Kode Penjualan Tidak Ditemukan!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post(){

        // $kdbarang = $this->get('kdbarang');
        
        // $total=[
        //     'kdbarang' => $this->post('kdbarang'),
        //     'totalharga' => $this->post(('harga')*('jumlahbeli')) 
        // ];

        // $data = [
        //     'kdkasir' => $this->post('kdkasir'),
        //     'kdbarang' => $this->post('kdbarang'),
        //     'tanggal' => $this->post('tanggal'),
        //     'jumlahbeli' => $this->post('jumlahbeli'),
        //     'totalharga' => $this->post($total)
        // ];
        $data = [
            'kdkasir' => $this->post('kdkasir'),
            'kdbarang' => $this->post('kdbarang'),
            'tanggal' => $this->post('tanggal'),
            'jumlahbeli' => $this->post('jumlahbeli'),
        ];

        if ($this->penjualan->createPenjualan($data) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data Penjualan Berhasil Ditambahkan'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data Penjualan Gagal Ditambahkan!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $kdpenjualan = $this->put('kdpenjualan');
        // $kdbarang = $this->put('kdbarag');

        // $data = [
        //     'tanggal' => $this->put('tanggal'),
        //     'kdbarang' => $this->put('kdbarang'),
        //     'kdkasir' => $this->put('kdkasir'),
        //     'jumlahbeli' => $this->put('jumlahbeli'),
        //     'totalHarga' => $this->post('totalHarga')
        // ];

        $data = [
            'tanggal' => $this->put('tanggal'),
            'kdbarang' => $this->put('kdbarang'),
            'kdkasir' => $this->put('kdkasir'),
            'jumlahbeli' => $this->put('jumlahbeli'),
        ];

        if ($this->penjualan->updatePenjualan($data, $kdpenjualan) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data Penjualan Berhasil Diubah'
            ], REST_Controller::HTTP_OK);
        } else {
            //id not found
            $this->response([
                'status' => false,
                'message' => 'Data Penjualan Gagal Diubah!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}

/* End of file Controllername.php */
