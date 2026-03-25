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
        DB::table('user')->insert([
            [
            'name' => 'Santiago Fernandes',
            'username' => 'Devti Fernandes',
            'email' => 'tiagospp4@gmail.com',
            'role' => 'admin',
            'status' => 'active',
            'password' => bcrypt('password')
        ],
            [
            'name' => 'Vendedor vendor Fernandes',
            'username' => 'Devti Vendor',
            'email' => 'tiagofichasf@gmail.com',
            'role' => 'vendor',
            'status' => 'active',
            'password' => bcrypt('password')
        ],
            [
            'name' => 'Cliente Fernandes',
            'username' => 'Devti Cliente',
            'email' => 'tiagosppq@gmail.com',
            'role' => 'user',
            'status' => 'active',
            'password' => bcrypt('password')
        ]
        ]);
    }
}
