<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $DBGroup          = 'WebProgramming';
    protected $table            = 'pengguna';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'password'];

    /**
     * method untuk cek login dari table pengguna
     * berdasarkan nama dan password
     * @var String $user
     * @var string pass
     */
    public function cekLogin($user, $pass){
        return $this->where('nama', $user)
                    ->where('password', md5($pass) )->first();
    }
}
