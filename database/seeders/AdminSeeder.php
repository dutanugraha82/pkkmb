<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@pkkmb.ubpkarawang.ac.id',
            'password' => Hash::make('12345678'),
            'role' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'superadmin',
            'email' => 'superadmin@pkkmb.ubpkarawang.ac.id',
            'password' => Hash::make('Buana2020'),
            'role' => '2',
        ]);
    }
}
