<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'position' => 'analyst',
            'age' => '24',
            'address' => 'banguntapan',
            'email' => 'admin@kawankoding.id',
            'password' => bcrypt('12345678'),
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User',
            'position' => 'dev',
            'age' => '24',
            'address' => 'banguntapan',
            'email' => 'user@kawankoding.id',
            'password' => bcrypt('12345678'),
        ]);

        $user->assignRole('user');
    }
}
