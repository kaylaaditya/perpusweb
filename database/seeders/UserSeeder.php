<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
            'nama_lengkap'      => 'Pak Administrator',
            'username'  => 'admin',
            'user_type'      => 'admin',
            'password' => bcrypt('123'),
            'email' => 'admin@perpus.web',
        ]);

    }
}
