<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProdukComputer extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT', 'contraint' => 10,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama_merek' => [
                'type'           => 'VARCHAR', 'contraint' => 50,
                'null'           => false
            ],
            'warna' => [
                'type'           => 'VARCHAR', 'contraint' => 30,
                'null'           => false
            ],
            'spesifikasi' => [
                'type'           => 'VARCHAR', 'contraint' =>100,
                'null'           => false
            ],
            'stok' => [
                'type'           => 'VARCHAR', 'contraint' => 15,
                'null'           => true
            ],
            'harga' => [
                'type'           => 'VARCHAR', 'contraint' => 15,
                'null'           => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('ProdukComputer');

    }

    public function down()
    {
        $this->forge->dropTable('ProdukComputer');
    }
}
