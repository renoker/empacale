<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'      => "Rodolfo Ramirez",
            'email'     => "rodolfoulises.ramirez@gmail.com",
            'password'  => bcrypt("1234567890"),
            'phone'     => "5586789485",
        ]);
    }
}
