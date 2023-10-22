<?php

namespace App\Database\Seeds;

use App\Models\User;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = new User();

        $data = [
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'ngademin@nganu.com',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'roles' => [1]
        ];

        $model->insert($data);
    }
}
