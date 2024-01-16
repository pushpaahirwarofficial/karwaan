<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Testimonial extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'te_id  ' => array(
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => true,
                'auto_increment' => true
            ),
            'te_name' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'te_rating' => array(
                'type'       => 'INT',
                'constraint' => '10',
            ),
            'te_discrip' => array(
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ),
            'te_img' => array(
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ),
            'te_title' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'te_designation' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'te_priority' => array(
                'type'       => 'INT',
                'constraint' => '10',
            ),
    ));
    $this->forge->addKey('te_id ', true);
    $this->forge->createTable('tbl_testimonial');
    }

    public function down()
    {
        //
    }
}
