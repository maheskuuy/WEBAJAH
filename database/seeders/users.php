<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        users::factory(4)->create();
        Users::factory()->create([
            'username' => 'warga',
            'role' => 'warga',
            'email' => 'warga@gmail.com',
            'password' => bcrypt('Warga123'),
        ]);
        users::factory()->create([
            'username' => 'admin',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('Admin123'),
        ]);
    }
}