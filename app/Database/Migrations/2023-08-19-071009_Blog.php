<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Blog extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'blog_id' => array(
                'type' => 'INT',
                'constraint' => '10',
                'unsigned' => true,
                'auto_increment' => true
            ),
            'blog_title' => array(
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ),
            'blog_desc' => array(
                'type'       => 'VARCHAR',
                'constraint' => '2500',
            ),
            'blog_date' => array(
                'type'       => 'DATE',
                //'constraint' => '10',
            ),
            'blog_twitter' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'blog_fb' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'blog_img' => array(
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ),
            'blog_priority' => array(
                'type'       => 'INT',
                'constraint' => '10',
            ),
    ));
    $this->forge->addKey('blog_id', true);
    $this->forge->createTable('tbl_blog');
    }

    public function down()
    {
        //
    }
}
