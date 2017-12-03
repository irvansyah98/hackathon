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
        $result = DB::table('users')->insert([
            'fullname' => 'Admin',
            'email' => 'admin@bangjas.com',
            'password' => \Hash::make('sandiaman'),
            'photo' => '',
            'city' => '',
            'address' => '',
            'no_telp' => '',
            'role' => 'admin',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);

        $result = DB::table('users')->insert([
            'fullname' => 'Member',
            'email' => 'member@bangjas.com',
            'password' => \Hash::make('sandiaman'),
            'photo' => '',
            'city' => '',
            'address' => '',
            'no_telp' => '',
            'role' => 'member',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}
