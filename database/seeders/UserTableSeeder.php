<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Victor Admin',
            'email' => 'victor.admin@gmail.com',
            'password' => bcrypt('password'),
            'admin' => '1',
            'client' => '1'
        ]);

        User::create([
            'name' => 'Victor Client',
            'email' => 'victor.client@gmail.com',
            'password' => bcrypt('password'),
            'admin' => '0',
            'client' => '1'
        ]);
    }
}
