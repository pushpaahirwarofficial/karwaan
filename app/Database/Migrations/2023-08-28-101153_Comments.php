<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Comments extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'comment_id' => array(
                'type' => 'INT',
                'constraint' => '10',
                'unsigned' => true,
                'auto_increment' => true
            ),
            'user_id' => array(
                'type' => 'INT',
                'constraint' => '10',
                'unsigned' => true,
            ),
            'user_name' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'blog_id' => array(
                'type' => 'INT',
                'constraint' => '10',
                'unsigned' => true,
            ),
            'blog_title' => array(
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ),
            'comment' => array(
                'type'       => 'VARCHAR',
                'constraint' => '2500',
            ),
            'date' => array(
                'type'       => 'Date',
            ),
            'priority' => array(
                'type'       => 'INT',
                'constraint' => '10',
            ),
    ));
    $this->forge->addKey('comment_id', true);
    $this->forge->createTable('tbl_comment');
    }

    public function down()
    {
        //
    }
}
