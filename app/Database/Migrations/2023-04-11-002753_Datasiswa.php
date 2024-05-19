<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Datapenduduk extends Migration
{
    public function up()
    {
        $data = [
            'id' => [
                'type'  => 'INT',
                'auto_increment' => true
            ],

            'nisn' => [
                'type' => 'VARCHAR',
                'constraint' => 32
            ],

            'nama_siswa' => [
                'type' => 'VARCHAR',
                'constraint' => 32
            ],
            'jenis_kelamin' => [
                'type' => 'VARCHAR',
                'constraint' => 64
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => true
            ],
            'kelas' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => true
            ]
        ];

        $this->forge->addField($data);
        $this->forge->addKey('id', true);
        $this->forge->createTable('datasiswa');
    }

    public function down()
    {
        $this->forge->dropTable('datasiswa');
    }
}
