<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Heri Setyawan',
            'position' => 'Hardware Engineering',
            'age' => '23',
            'address' => 'Jakarta Selatan',
            'email' => 'herisetyawan311@gmail.com',
            'password' => ' ',
        ]);
    }
}
