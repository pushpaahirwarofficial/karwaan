<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Plays extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '10',
                'unsigned' => true,
                'auto_increment' => true
            ),
            'play' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'play_type' => array(
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ),
            'director' => array(
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ),
    ));
    $this->forge->addKey('id', true);
    $this->forge->createTable('tbl_plays');
    }

    public function down()
    {
        //
    }
}
