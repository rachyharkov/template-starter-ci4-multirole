<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MenuSubs extends Migration
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
                'unsigned' => true
            ],
            'name' => [
                'type' => 'VARCHAR', 
                'constraint' => 255
            ],
            'position' => [
                'type' => 'INT', 
                'constraint' => 11, 
                'unsigned' => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('menu_id', 'menus', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('menu_subs');
    }

    public function down()
    {
        $this->forge->dropTable('menu_subs');
    }
}
