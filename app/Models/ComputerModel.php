<?php

namespace App\Models;

use CodeIgniter\Model;

class ComputerModel extends Model
{
    protected $DBGroup              = 'WebProgramming';
    protected $table                = 'ProdukComputer';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType           = 'array';
    protected $protectFields        = true;
    protected $allowedFields        = ['nama_merek', 'warna', 'ram', 'storage', 'processor', 'harga'];

      /**
     * method untuk cek computer dari table daftar computer 
     * berdasarkan nama,warna,ram,processor,harga
     * @var String $nama
     * @var String $warna
     * @var String $ram
     * @var String $storage
     * @var String $processer
     * @var string $harga
     *
     */
    public function cekComputer($nama, $warna, $ram, $storage, $processor,  $harga)
    {
        return $this->where('nama_merk', $nama)
                    ->where('warna', $warna)
                    ->where('ram', $ram)
                    ->where('processor', $processor)
                    ->where('storage', $storage)
                    ->where('harga', $harga);
    }

}
