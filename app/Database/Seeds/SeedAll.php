<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeedAll extends Seeder
{
    public function run()
    {
        $this->call('RoleSeeder');
        $this->call('MenuSeeder');
        $this->call('UserSeeder');
    }
}
