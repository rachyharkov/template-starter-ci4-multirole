<?php

namespace App\Database\Seeds;

use App\Models\Role;
use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $model = new Role();

        $roles = ['Administrator', 'User'];

        foreach ($roles as $role) {
            $data = [
                'name' => $role
            ];

            $model->insert($data);
        }
    }
}
