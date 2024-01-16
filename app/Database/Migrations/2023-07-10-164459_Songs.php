<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Songs extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'a_id ' => array(
                'type' => 'INT',
                'constraint' => '30',
                'unsigned' => true,
                'auto_increment' => true
            ),
            'a_name' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'a_group' => array(
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ),
            'a_audio' => array(
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ),
            'a_priority' => array(
                'type'       => 'INT',
                'constraint' => '20',
            ),
            'a_artist' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'a_discrip' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'a_status' => array(
                'type'       => 'INT',
                'constraint' => '1',
            ),
    ));
    $this->forge->addKey('a_id', true);
    $this->forge->createTable('tbl_songs');
    }

    public function down()
    {
        //
    }
}
