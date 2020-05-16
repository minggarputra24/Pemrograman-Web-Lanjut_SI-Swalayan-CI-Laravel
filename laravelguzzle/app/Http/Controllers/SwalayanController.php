<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Guzzle\Exception\RequestException;

class SwalayanController extends Controller
{

    public function dashboard()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://localhost/Toko/TokoCI/api/barang', [
            'query' => []
        ]);

        $result['brg']= json_decode($response->getBody(), true);
        
        $response = $client->request('GET', 'http://localhost/Toko/TokoCI/api/penjualan', [
            'query' => []
        ]);

        $result['jual']= json_decode($response->getBody(), true);

        $response = $client->request('GET', 'http://localhost/Toko/TokoCI/api/kasir', [
            'query' => []
        ]);

        $result['kasir']= json_decode($response->getBody(), true);

        return view('dashboard', ['data' => $result]);
        // return view('dashboard');
    }

	public function kasir()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://localhost/Toko/TokoCI/api/kasir', [
            'query' => []
        ]);

        $result = json_decode($response->getBody(), true);

        // return $result['data'];
        return view('kasir', ['kasir' => $result['data']]);
    }

    public function barang()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://localhost/Toko/TokoCI/api/barang', [
            'query' => []
        ]);

        $result = json_decode($response->getBody(), true);

        // return $result['data'];
        return view('barang', ['barang' => $result['data']]);
    }

    public function penjualan()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://localhost/Toko/TokoCI/api/penjualan', [
            'query' => []
        ]);

        $result = json_decode($response->getBody(), true);

        // return $result['data'];
        return view('penjualan', ['penjualan' => $result['data']]);
    }

    public function penjualanAdd()
    {
        $client = new Client();

        $response = $client->request('GET', 'http://localhost/Toko/TokoCI/api/barang', [
            'query' => []
        ]);

        $result['brg'] = json_decode($response->getBody(), true);

        $response = $client->request('GET', 'http://localhost/Toko/TokoCI/api/kasir', [
            'query' => []
        ]);

        $result['kas'] = json_decode($response->getBody(), true);


        // return ['data' => $result];
        return view('penjualanAdd', ['data' => $result]);
    }

    public function PenjualanSave(Request $request)
    {
        $client = new Client();
        $data = [
            "tanggal" => $request->tanggal,
            "kdbarang" => $request->kdbarang,
            "kdkasir" => $request->kdkasir,
            "jumlahbeli" => $request->jumlahbeli

        ];
        // $this->db->where('id_trans', $this->input->post('id_trans'));
        // $this->db->update('transaksi', $data);

        $response = $client->request('POST', 'http://localhost/Toko/TokoCI/api/penjualan', [
            'form_params' => $data
        ]);

        return redirect('/swalayan/penjualan');
    }

    public function penjualanEdit($kdpenjualan)
    {
        $client = new Client();
        $response = $client->request('GET', 'http://localhost/Toko/TokoCI/api/penjualan', [
            'query' => [
                'kdpenjualan' => $kdpenjualan
            ]
        ]);

        $result['jual'] = json_decode($response->getBody(), true);

        $response = $client->request('GET', 'http://localhost/Toko/TokoCI/api/barang', [
            'query' => []
        ]);

        $result['brg'] = json_decode($response->getBody(), true);

        $response = $client->request('GET', 'http://localhost/Toko/TokoCI/api/kasir', [
            'query' => []
        ]);

        $result['kas'] = json_decode($response->getBody(), true);
        // var_dump($result);

        return view('penjualanEdit', ['data' => $result]);
        

        // return ['data' => $result];
        // return view('transaksiEdit', ['transaksi' => $result]);
    }

    public function penjualanUpdate(Request $request)
    {
        $client = new Client();
        $data = [
            "kdpenjualan" => $request->kdpenjualan,
            "kdbarang" => $request->kdbarang,
            "kdkasir" => $request->kdkasir,
            "jumlahbeli" => $request->jumlahbeli,
            "tanggal" => $request->tanggal
        ];
        // $this->db->where('id_trans', $this->input->post('id_trans'));
        // $this->db->update('transaksi', $data);

        $response = $client->request('PUT', 'http://localhost/Toko/TokoCI/api/penjualan', [
            'form_params' => $data
        ]);

        return redirect('/swalayan/penjualan');
    }

    public function penjualanDelete(Request $request)
    {
        $client = new Client();
        $response = $client->request('DELETE', 'http://localhost/Toko/TokoCI/api/penjualan', [
            'form_params' => [
                'kdpenjualan' => $request->kdpenjualan
            ]
        ]);

        return redirect('/swalayan/penjualan');
    }

}
