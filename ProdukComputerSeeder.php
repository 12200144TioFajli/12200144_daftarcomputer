<?php

namespace App\Database\Seeds;

use App\Models\ComputerModel;
use CodeIgniter\Database\Seeder;

class ListComputerSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [   
                'nama_merk'   => 'Asus',
                'warna'       => 'silver',
                'ram'         => '4 GB',
                'processor'   => 'Intel 3',
                'harga'       => 'RP 6.000.000'
            ],
            [
                'nama_merk'   => 'Acer',
                'warna'       => 'Black',
                'ram'         => '8 GB',
                'processor'   => 'Intel 9',
                'harga'       => 'RP 12.000.000'
            ],
            [
                'nama_merk'   => 'HP',
                'warna'       => 'silver',
                'ram'         => '4 gb',
                'processor'   => 'Intel 5',
                'harga'       => 'RP 8.000.000'
            ],
        ];
            $p = new ComputerModel();
            $p ->insertBatch($data);
    }
}
