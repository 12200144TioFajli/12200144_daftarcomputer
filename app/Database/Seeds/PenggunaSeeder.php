<?php

namespace App\Database\Seeds;

use App\Models\PenggunaModel;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
        public function run()
    {
        $data = [
            [ 
                'nama'            => 'admin',
                'password'        => md5('12345')
            ],
            [
                'nama'            => 'Tio Fajli',
                'password'        => md5('12200144')
            ],
            [
                'nama'            => 'Dini Sapika',
                'password'        => md5('12200120')
            ],
            [
                'nama'            => 'Wan Riski Maulana',
                'password'        => md5('12200060')
            ],
            [
                'nama'            => 'Irna Relia Wati',
                'password'        => md5('12200472')
            ],
            [
                'nama'            => 'Alponsius Popo Densi',
                'password'        => md5('12200551')
            ],

        ];
        $p = new PenggunaModel();
        $p->insertBatch($data);

    }
}
