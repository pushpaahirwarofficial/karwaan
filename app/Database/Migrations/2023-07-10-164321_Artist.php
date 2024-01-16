<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Artist extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'ar_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'unsigned' => true,
                'auto_increment' => true
            ),
            'ar_name' => array(
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ),
            'ar_designation' => array(
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ),
            'ar_about' => array(
                'type'       => 'VARCHAR',
                'constraint' => '2500',
            ),
            'ar_discription' => array(
                'type'       => 'VARCHAR',
                'constraint' => '5500',
            ),
            'ar_group' => array(
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ),
            'ar_fb' => array(
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ),
            'ar_twitter' => array(
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ),
            'ar_insta' => array(
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ),
            'ar_linkedin' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'ar_email' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'ar_priority' => array(
                'type'       => 'INT',
                'constraint' => '1',
            ),
            'ar_date' => array(
                'type'       => 'TIMESTAMP',
                //'constraint' => '250',
            ),
            'ar_img' => array(
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ),
        ));
       $this->forge->addKey('ar_id', true);
        $this->forge->createTable('tbl_artist');
    }

    public function down()
    {
        //
    }
}
