<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AdminLogin extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'al_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => true,
                'auto_increment' => true
            ),
            'al_username' => array(
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ),
            'al_email' => array(
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ),
            'al_password' => array(
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ),
            'al_status' => array(
                'type'       => 'INT',
                'constraint' => '1',
            ),
        ));
       $this->forge->addKey('al_id', true);
        $this->forge->createTable('tbl_adminlogin');
    }

    public function down()
    {
        //
    }
}
