<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ComputerModel;
use Config\Services;


class ComputerController extends BaseController
{
    public function index()
    {
        return view('halaman/computer/table', [
            'DB' => (new ComputerModel())->get()->getResult(),
            'error' => $this->session->getflashdata('error')
        ]);
    }

    public function form($data = []){
        return view('halaman/computer/form', [
            'vd' => $this->session->getFlashdata('validator'),
            'error' => $this->session->getFlashdata('error'),
            'data' => $data
        ]);

    }   

    private function validasi(){
        return $this->validate(
            [
                'nama'      => 'required',
                'warna'           => 'required',
                'ram'     => 'required',
                'processor'            => 'required',
                'harga'           => 'required'
            ],
            [
                'nama'      => [ 'required' => 'Nama merek harus diisikan'],
                'warna'           => [ 'required' => 'Warna harus diisikan'],
                'ram'     => [ 'required' => 'Ram harus diisikan'],
                'processor'            => [ 'required'  => 'Processor harus diisikan'],   
                'harga'           => [ 'required'  => 'Harga harus diisikan']          
            ]
        );
    }

    public function simpan(){
        $data = [
            $nama      = $this->request->getPost('nama_merk'),
            $warna     = $this->request->getPost('warna'),
            $ram       = $this->request->getPost('ram'),
            $processor = $this->request->getPost('processor'),
            $harga = $this->request->getPost('harga'),
            
            
        ];

        if( $this->validasi() ){
            $r = (new ComputerModel())->insert($data);
            if($r == false){
                return redirect()->to('/computer')->with('error', 'Data gagal disimpan');
            }else{
                return redirect()->to('/computer-list');
            }
        }else{
            return redirect()->to('/computer')->with('validator', $this->validator);
        }
    }
    
    public function edit($id){
        $data = (new ComputerModel())->where('id', $id)->first();

        if($data == null){
            return redirect()->to('/computer-list')->with('error', 'Computer tidak ditemukan');
        }else{
            return $this->form($data);
        }
    }

    private function validasiPatch(){
        return $this->validate(
            [
                'nama'      => 'required',
                'warna'     => 'required',
                'ram'       => 'required',
                'processor' => 'required',
                'harga'     => 'required'         
            ],
            [
                'nama'      => [ 'required' => 'Nama merek harus diisikan'],
                'warna'     => [ 'required' => 'Warna harus diisikan'],
                'ram'       => [ 'required' => 'Ram harus diisikan'],
                'processor' => [ 'required'  => 'Processor harus diisikan'],   
                'harga'     => [ 'required'  => 'Harga harus diisikan']          
            ]
        );
    }

    public function patch(){
        $id = $this->request->getPost('id');
        $data = [
            $nama = $this->request->getPost('nama_merk'),
            $warna = $this->request->getPost('warna'),
            $ram = $this->request->getPost('ram'),
            $processor = $this->request->getPost('processor'),
            $harga = $this->request->getPost('harga'),
        ];

        if( $this->request->getPost('nama') != '' ){
            $data['nama'] = ($this->request->getPost('nama') );
        }

        if( $this->validasiPatch() ){ 
            $r = (new ComputerModel())->update($id, $data);
            if($r == true){
                return redirect()->to('/computer-list');
            }else{
                return redirect()->to('/computer/'. $id)->with('error', 'Data gagal update');
            }
        }else{
            return redirect()->to('/computer/',$id)->with('validator', $this->validator);
        }
        
    }

    public function delete(){
        $id = $this->request->getPost('id');
        $r = (new ComputerModel())->delete($id);

        $rd = redirect()->to('/computer-list');
        if($r == false){
            $rd->with('error', 'computer gagal dihapus');
        }
        return $rd;
    }
}   
