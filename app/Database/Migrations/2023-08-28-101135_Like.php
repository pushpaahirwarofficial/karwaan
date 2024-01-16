<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Like extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'like_id' => array(
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
            'blog_id' => array(
                'type' => 'INT',
                'constraint' => '10',
                'unsigned' => true,
            ),
            'blog_title' => array(
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ),
            'likes' => array(
                'type'       => 'INT',
                'constraint' => '15',
            ),
            'dislikes' => array(
                'type'       => 'INT',
                'constraint' => '15',
            ),
            'priority' => array(
                'type'       => 'INT',
                'constraint' => '10',
            ),
    ));
    $this->forge->addKey('like_id', true);
    $this->forge->createTable('tbl_like');
    }

    public function down()
    {
        //
    }
}
