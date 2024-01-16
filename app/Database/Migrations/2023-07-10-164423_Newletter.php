<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Newletter extends Migration
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
            'email' => array(
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ),
            'isRead' => array(
                'type'       => 'INT',
                'constraint' => '11',
            ),
            'createdate' => array(
                'type'       => 'TIMESTAMP',
                //'constraint' => '200',
            ),
    ));
    $this->forge->addKey('id', true);
    $this->forge->createTable('tbl_newsletter');
    }

    public function down()
    {
        //
    }
}
