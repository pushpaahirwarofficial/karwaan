<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Youtube extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'n_id   ' => array(
                'type' => 'INT',
                'constraint' => '10',
                'unsigned' => true,
                'auto_increment' => true
            ),
            'n_title' => array(
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ),
            'n_desc' => array(
                'type'       => 'VARCHAR',
                'constraint' => '2500',
            ),
            'n_date' => array(
                'type'       => 'Date',
                //'constraint' => '150',
            ),
            'n_twitter' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'n_fb' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'n_img' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'n_priority' => array(
                'type'       => 'INT',
                'constraint' => '10',
            ),
    ));
    $this->forge->addKey('tevent_id  ', true);
    $this->forge->createTable('tbl_youtube');
    }

    public function down()
    {
        //
    }
}
