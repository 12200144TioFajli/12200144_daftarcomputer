<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengguna extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT', 'constraint' => 4,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama' => [
                'type'           => 'VARCHAR', 'constraint' => 50,
                'null'           => false
            ],
            'password' => [
                'type'           => 'VARCHAR', 'constraint' => 32,
                'null'           => false
            ]
            ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pengguna');

    }

    public function down()
    {
        $this->forge->dropTable('pengguna');
    }
}
