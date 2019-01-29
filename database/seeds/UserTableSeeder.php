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
        $users = [
            [
                'first_name' => 'admin',
                'last_name' => 'admin',
                'email' => 'admin@example.com',
                'isAdmin' => '1',
                'title'     => 'Mr',
                'password' => Hash::make('admin'),
            ],
            [
                'first_name' => 'aaa',
                'last_name' => 'aaaa',
                'email' => 'user@example.com',
                'isAdmin' => '0',
                'title'     => 'Mr',
                'password' => Hash::make('user'),
            ]
        ];
        foreach ($users as $user){
            DB::table('users')->insert($user);
        }


    }
}
