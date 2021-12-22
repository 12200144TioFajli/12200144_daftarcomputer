<?php 
namespace App\Controllers;



class SelamatDatang extends BaseController {
    
    public function hal_awal(){
        return 'hello saya belajar CI4';
    }

    public function beranda_login(){
        return view('halaman/login', [
            'vd' => $this->session->getFlashdata('validator'),
            'email' => $this->session->get('email'),
            'sandi' => $this->session->get('sandi'),
            'error' => $this->session->getFlashdata('error'),
            'title' => 'Login akun'    
        ]);
    }
    
    public function daftar_member(){
        return view('/halaman/daftar_member');
    }

    public function hal_beranda(){
        return view('halaman/beranda', [
            'email' => $this->session->get('email'),
            'sandi' => $this->session->get('sandi')
        ]);
    }
}