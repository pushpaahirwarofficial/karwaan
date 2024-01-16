<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Gallery extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'gl_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => true,
                'auto_increment' => true
            ),
            'gl_name' => array(
                'type'       => 'VARCHAR',
                'constraint' => '40',
            ),
            'gl_type' => array(
                'type'       => 'INT',
                'constraint' => '1',
            ),
            'gl_img' => array(
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ),
            'gl_priority' => array(
                'type'       => 'INT',
                'constraint' => '1',
            ),
            'gl_alt' => array(
                'type'       => 'VARCHAR',
                'constraint' => '12',
            ),
            'gl_createdate' => array(
                'type'       => 'TIMESTAMP',
                //'constraint' => '100',
            ),
    ));
    $this->forge->addKey('gl_id', true);
    $this->forge->createTable('tbl_gallery');
    }

    public function down()
    {
        //
    }
}
