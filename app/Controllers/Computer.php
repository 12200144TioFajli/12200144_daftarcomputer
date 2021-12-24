<?php
namespace App\Controllers;

use App\Models\ComputerModel;
use Config\Services;

class Computer extends BaseController{

    public function cekComputer(){
        $nama = $this->request->getPost('nama_merk');
        $warna = $this->request->getPost('warna');
        $ram = $this->request->getPost('ram');
        $processor = $this->request->getPost('processor');
        $harga = $this->request->getPost('harga');

        $v = $this->validate([
            'nama'      => 'required',
            'warna'     => 'required',
            'ram'       => 'required',
            'processor' => 'required',
            'harga'     => 'required'       
        ], [
            'nama'=>[
                'required' => 'Nama merek tidak boleh kosong',
            ],
            'warna'=> [
                'required' => 'Warna tidak boleh kosong'
            ],            
            'ram'=> [
                'required' => 'Ram tidak boleh kosong'
            ],            
            'processor'=> [
                'required' => 'Processor tidak boleh kosong'
            ],       
            'harga'=> [
                'required' => 'Harga tidak boleh kosong'
            ],
        ]);

        $this->session->set('nama_merek', $nama);
        $this->session->set('warna', $warna);
        $this->session->set('ram', $ram);
        $this->session->set('processor', $processor);
        $this->session->set('harga', $harga);

        if( $v == false ){
            $this->session->setFlashdata('validator', $this->validator);
            return redirect()->to('/computer');
        }else{

            $vl = (new ComputerModel())->cekComputer($nama, $warna, $ram, $processor, $harga);
            
            if($vl == null){
                return redirect()->to('/computer')->with(' error', 'Data tidak valid');
            }else{ 
                $this->session->set('sudahMasuk', true); 
                return redirect()->to('/computer-list');
            }
        }
    }

    public function beranda(){

    }
}