<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Crud extends Migration
{
    public function up()
    {
        $field = 
        [
            "id" => [
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => TRUE,
                'unsigned' => true
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'nim' => [
                'type' => 'VARCHAR',
                'constraint' => 13
            ],
            'alamat' => [
                'type' => 'TEXT'
            ]
        ];

        $this->forge->addField($field);
        $this->forge->addKey('id',true);
        $this->forge->createTable('crud', true);
    }

    public function down()
    {
        $this->forge->dropTable('crud', true);
    }
}
