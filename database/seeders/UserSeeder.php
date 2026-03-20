<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Santiago Fernandes',
                'username' => 'tiago',
                'email' => 'tiagofichasf@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('password')

            ],
            [
                'name' => 'Vendedor Fernandes',
                'username' => 'vende',
                'email' => 'tiagospp4@gmail.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('password')

            ],
            [
                'name' => 'user Fernandes',
                'username' => 'usuario',
                'email' => 'tiagosppq@gmail.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('password')

            ]
        ]);
    }
}
