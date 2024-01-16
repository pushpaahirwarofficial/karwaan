<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Reply extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'reply_id   ' => array(
                'type' => 'INT',
                'constraint' => '10',
                'unsigned' => true,
                'auto_increment' => true
            ),
            'comment_id   ' => array(
                'type' => 'INT',
                'constraint' => '10',
                'unsigned' => true,
            ),
            'user_id   ' => array(
                'type' => 'INT',
                'constraint' => '10',
                'unsigned' => true,
            ),
            'user_name' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'blog_id   ' => array(
                'type' => 'INT',
                'constraint' => '10',
                'unsigned' => true,
            ),
            'blog_title' => array(
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ),
            'reply' => array(
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
    $this->forge->addKey('reply_id', true);
    $this->forge->createTable('tbl_reply');
    }

    public function down()
    {
        //
    }
}
