<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@example.com',
            'isAdmin' => '1',
            'title'     => 'Mr',
            'password' => Hash::make('admin'),
        ]);
    }
}
