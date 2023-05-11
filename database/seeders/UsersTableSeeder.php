<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //admin
        DB::table('users')->insert([
        [
            'name' => 'kaled admin',
            'username' => 'admin',
            'email' => 'kaledadmin@gmail.com',
            'password' => Hash::make('admin'),
            'role' => 'admin',
            'status' => 'active',
        ],
        //vendor
        [
            'name' => 'kaled vendor',
            'username' => 'vendor',
            'email' => 'kaledvendor@gmail.com',
            'password' => Hash::make('vendor'),
            'role' => 'vendor',
            'status' => 'active',
        ],
        //user  or costumer
        [
            'name' => 'kaled user',
            'username' => 'user',
            'email' => 'kaleduser@gmail.com',
            'password' => Hash::make('user'),
            'role' => 'user',
            'status' => 'active',
        ],
            
        ]);

    }
}
