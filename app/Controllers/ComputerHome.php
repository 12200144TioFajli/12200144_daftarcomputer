<?php 
namespace App\Controllers;



class ComputerHome extends BaseController {

    public function beranda_computer(){
        return view('/halaman/dashboard', [
            'nama_merk'   => $this->session->get('nama_merk'),
            'warna'       => $this->session->get('warna'),
            'ram'         => $this->session->get('ram'),
            'processor'   => $this->session->get('processor'),
            'harga'       => $this->session->get('harga'),
          
        ]);
    }

    public function hal_computer($data = []){

        return view('/halaman/computer', [
            'vd'    => $this->session->getFlashdata('validator'),            
            'error' => $this->session->getFlashdata('error'),
            'data'  => $data,
            'nama_merk'   => $this->session->get('nama'),
            'warna'       => $this->session->get('warna'),
            'ram'         => $this->session->get('ram'),
            'processor'   => $this->session->get('processor'),
            'harga'       => $this->session->get('harga')
        ]);
    }

    public function review(){

        return view('/halaman/riview');
    }

    public function review2(){

        return view('/halaman/riview2');
    }

    public function review3(){

        return view('/halaman/riview3');
    }
}
}