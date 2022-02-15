<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'label' => 'Admin',
            'description' => 'Admin description',
        ]);
        Role::create([
            'name' => 'manager',
            'label' => 'Manager',
            'description' => 'Manager description',
        ]);
        Role::create([
            'name' => 'customer',
            'label' => 'Customer',
            'description' => 'Customer description',
        ]);
    }
}
