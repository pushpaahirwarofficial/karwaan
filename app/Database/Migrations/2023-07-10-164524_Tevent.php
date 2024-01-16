<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tevent extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'tevent_id   ' => array(
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => true,
                'auto_increment' => true
            ),
            'type' => array(
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ),
            'playdate' => array(
                'type'       => 'VARCHAR',
                'constraint' => '25',
            ),
            'writer' => array(
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ),
            'director' => array(
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ),
            'music' => array(
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ),
            'actors' => array(
                'type'       => 'VARCHAR',
                'constraint' => '1500',
            ),
            'youtube_links' => array(
                'type'       => 'VARCHAR',
                'constraint' => '1500',
            ),
            'images' => array(
                'type'       => 'VARCHAR',
                'constraint' => '500',
            ),
            'createdate' => array(
                'type'       => 'TIMESTAMP',
                'constraint' => '500',
            ),
    ));
    $this->forge->addKey('tevent_id  ', true);
    $this->forge->createTable('tbl_tevent');
    }

    public function down()
    {
        //
    }
}
