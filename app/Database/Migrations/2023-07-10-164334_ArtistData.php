<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ArtistData extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => true,
                'auto_increment' => true
            ),
            'artist_id' => array(
                'type'       => 'INT',
                'constraint' => '11',
            ),
            'image_video' => array(
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ),
            'type' => array(
                'type'       => 'INT',
                'constraint' => '1',
            ),
            'status' => array(
                'type'       => 'INT',
                'constraint' => '1',
            ),
    ));
    $this->forge->addKey('id', true);
    $this->forge->createTable('tbl_artistdata');
    }

    public function down()
    {
        //
    }
}
