<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Slider extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'sld_id ' => array(
                'type' => 'INT',
                'constraint' => '10',
                'unsigned' => true,
                'auto_increment' => true
            ),
            'sld_imagelink' => array(
                'type'       => 'VARCHAR',
                'constraint' => '500',
            ),
            'sld_title' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'sld_image' => array(
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ),
            'sld_alt' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'sld_priority' => array(
                'type'       => 'INT',
                'constraint' => '1',
            ),
            'sld_status' => array(
                'type'       => 'INT',
                'constraint' => '1',
            ),
    ));
    $this->forge->addKey('sld_id ', true);
    $this->forge->createTable('tbl_slider');
    }

    public function down()
    {
        //
    }
}
