<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;
use Config\Services;

class PenggunaController extends BaseController
{
    public function index()
    {
        return view('halaman/pengguna/table', [
            'DB' => (new PenggunaModel())->get()->getResult(),
            'error' => $this->session->getFlashdata('error')
        ]);
    }

    public function form($data = []){
        return view('halaman/pengguna/form', [
            'vd'    => $this->session->getFlashdata('validator'),
            'error' => $this->session->getFlashdata('error'),
            'data'  => $data
        ]);

    }

    private function validasi(){
        return $this->validate(
            [
                'nama'      => 'required',
                'password'  => 'required|min_length[6]',
                'password2' => 'required|min_length[6]|matches[password]'
            ],
            [
                'nama'      => [ 'required' => 'Nama Pengguna harus diisikan'],
                'password'  => [
                    'required'   => 'Kata sandi harus diisikan',
                    'min_length' => 'Minimal karakter 6 huruf'
                ],
                'password2' => [
                    'required'   => 'Ulangi kata sandi harus diisikan',
                    'min_length' => 'Minimal karakter 6 huruf',
                    'matches'    => 'Ulangi sandi tidak sama isinya dengan kata sandi'
                ]

            ]
        );
    }

    public function simpan(){
        $data = [
            'nama'     => $this->request->getPost('nama'),
            'password' => md5($this->request->getPost('password')),
        ];

        if( $this->validasi() ){
            $r = (new PenggunaModel())->insert($data);
            if($r == false){
                return redirect()->to('/pengguna')->with('error', 'Data pengguna gagal disimpan');
            }else{
                return redirect()->to('/pengguna-list');
            }
        }else{
            return redirect()->to('/pengguna')->with('validator', $this->validator);
        }
    }
    
    public function edit($id){
        $data = (new PenggunaModel())->where('id', $id)->first();

        if($data == null){
            return redirect()->to('/pengguna-list')->with('error', 'Pengguna tidak ditemukan');
        }else{
            return $this->form($data);
        }
    }

    private function validasiPatch(){
        return $this->validate(
            [
                'nama'      => 'required',
            ],
            [
                'nama'      => [ 'required' => 'Nama Pengguna harus diisikan'],
            ]
        );
    }

    public function patch(){
        $id = $this->request->getPost('id');
        $data = [
            'nama' => $this->request->getPost('nama'),
        ];

        if( $this->request->getPost('password') != '' ){
            $data['password'] = md5( $this->request->getPost('password') );
        }

        if( $this->validasiPatch() ){ 
            $r = (new PenggunaModel())->update($id, $data);
            if($r == true){
                return redirect()->to('/pengguna-list');
            }else{
                return redirect()->to('/pengguna/'. $id)->with('error', 'Data gagal update');
            }
        }else{
            return redirect()->to('/pengguna/',$id)->with('validator', $this->validator);
        }
        
    }

    public function delete(){
        $id = $this->request->getPost('id');
        $r = (new PenggunaModel())->delete($id);

        $rd = redirect()->to('/pengguna-list');
        if($r == false){
            $rd->with('error', 'Pengguna gagal dihapus');
        }
        return $rd;
    }
}