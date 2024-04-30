<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'João Victor',
            'email' => 'joao@gmail.com',
            'password' => bcrypt('1234'), // Use a função bcrypt para criptografar a senha
        ]);
    }
}
