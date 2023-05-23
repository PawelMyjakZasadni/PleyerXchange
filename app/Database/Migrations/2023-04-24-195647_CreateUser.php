<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'login' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ]
            ,
        ]);

        $this->forge->addKey('id');

        $this->forge->createTable('users');
    }

    public function down()
    {
        //USUWANIE TABELI - rollback
        $this->forge->dropTable('users');
    }
}
