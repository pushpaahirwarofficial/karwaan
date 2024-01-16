<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contact extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'contact_id' => array(
                'type' => 'INT',
                'constraint' => '30',
                'unsigned' => true,
                'auto_increment' => true
            ),
            'c_name' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'c_email' => array(
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ),
            'c_phone' => array(
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ),
            'c_subject' => array(
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ),
            'c_msg' => array(
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ),
            'c_time' => array(
                'type'       => 'TIMESTAMP',
                //'constraint' => '150',
            ),
    ));
    $this->forge->addKey('contact_id', true);
    $this->forge->createTable('tbl_contact');
    }

    public function down()
    {
        //
    }
}
