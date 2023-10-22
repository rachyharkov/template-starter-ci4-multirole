<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLinkMap extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT', 
                'constraint' => 11, 
                'unsigned' => true, 
                'auto_increment' => true
            ],
            'menu_id' => [
                'type' => 'INT', 
                'constraint' => 11, 
                'unsigned' => true,
                'null' => true
            ],
            'menu_sub_id' => [
                'type' => 'INT', 
                'constraint' => 11, 
                'unsigned' => true,
                'null' => true
            ],
            'controller' => [
                'type' => 'VARCHAR', 
                'constraint' => 255
            ],
            'method' => [
                'type' => 'VARCHAR', 
                'constraint' => 255
            ]
        ]);

        $this->forge->addKey('id', true);        
        $this->forge->addForeignKey('menu_id', 'menus', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('menu_sub_id', 'menu_subs', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('link_maps');
    }

    public function down()
    {
        $this->forge->dropTable('link_maps');
    }
}
