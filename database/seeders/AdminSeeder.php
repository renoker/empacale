<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name'              => "9db",
            'username'          => "9db",
            'profile_picture'   => 'no_picture.jpg',
            'password'          => "oA92jQV2Xye",
        ]);
    }
}
