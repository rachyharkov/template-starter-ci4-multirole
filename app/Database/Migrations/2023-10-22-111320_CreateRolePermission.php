<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRolePermission extends Migration
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
            'role_id' => [
                'type' => 'INT', 
                'constraint' => 11, 
                'unsigned' => true
            ],
            'link_map_id' => [
                'type' => 'INT', 
                'constraint' => 11, 
                'unsigned' => true
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('role_id', 'roles', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('link_map_id', 'link_maps', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('role_permissions');
    }

    public function down()
    {
        $this->forge->dropTable('role_permissions');
    }
}
