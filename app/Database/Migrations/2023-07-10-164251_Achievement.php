<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Achievement extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'achieve_id' => array(
                'type' => 'INT',
                'constraint' => 50,
                'unsigned' => true,
                'auto_increment' => true
            ),
            'achieve_name' => array(
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ),
            'achieve_img' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'achieve_priority' => array(
                'type'       => 'INT',
                'constraint' => '20',
            ),
            'achieve_alt' => array(
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ),
            'achieve_type' => array(
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ),
        ));
       $this->forge->addKey('achieve_id ', true);
        $this->forge->createTable('tbl_achievement');
    }

    public function down()
    {
        //
    }
}
