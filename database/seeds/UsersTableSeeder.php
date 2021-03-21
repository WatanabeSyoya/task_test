<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'www',
            'email' => 'ttt@gmail.com',
            'password' => Hash::make('password123'),
            ],
            [
            'name' => 'aaa',
            'email' => 'tttt@gmail.com',
            'password' => Hash::make('password123'),
            ]
        ]);
    }
}
