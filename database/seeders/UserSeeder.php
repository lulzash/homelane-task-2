<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::firstOrCreate([
            'email' => 'admin@neosoft.com',
        ], [
            'name' => 'Admin',
            'password' => Hash::make('password'),
        ]);

        $admin->assignRole('admin');
    }
}
