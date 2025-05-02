<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class userDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@pawon.com',
            'password' => Hash::make('adminpawon2025'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
