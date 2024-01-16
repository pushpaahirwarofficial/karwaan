<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Event extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'n_id' => array(
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
                'type'       => 'DATE',
                //'constraint' => '10',
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
    $this->forge->addKey('n_id', true);
    $this->forge->createTable('tbl_event');
    }

    public function down()
    {
        //
    }
}
