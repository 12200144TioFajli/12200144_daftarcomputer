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
                'nama_merek'  => 'Asus Zenbook 13 OLED-UX325',
                'warna'       => 'Pine Grey & Lilac Mist',
                'ram'         => '16GB LPDDR4X on board',
                'processor'   => 'Intel® Core™ i7-1165G7 ',
                'storage'     => '512GB M.2 NVMe™ PCIe® 3.0 SSD',
                'harga'       => 'Rp 19.299.000'
            ],
            [
                'nama_merek'   => 'MSI GS76 Stealth 11UH',
                'warna'       => 'Core Black',
                'ram'         => '32GB DDR4 3200MHZ',
                'processor'   => 'Intel® Core™ i9 generasi ke-11',
                'storage'     => '2TB NVMe PCIe SSD',
                'harga'       => 'Rp 53.999.000'
            ],
            [
                'nama_merek'  => 'OMEN by HP Gaming Laptop 16-c0099AX',
                'warna'       => 'Mica silver cover and base, mica silver aluminum keyboard frame',
                'ram'         => '16 GB DDR4-3200 MHz RAM (2 x 8 GB)',
                'processor'   => 'AMD Ryzen™ 9',
                'storage'     => '512 GB PCIe® NVMe™ TLC M.2 SSD',
                'harga'       => 'Rp 24.999.000'
            ],
        ];
            $p = new ComputerModel();
            $p->insertBatch($data);
    }
}
