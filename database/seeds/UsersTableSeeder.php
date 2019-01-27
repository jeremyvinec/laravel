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
            'name'=>'Paul',
            'email'=>'paulghz@gmail.com',
            'password'=>bcrypt('aaaaaaaaaaa')
        ]);
        DB::table('users')->insert([
            'name'=>'Pierre',
            'email'=>'pierre@gmail.com',
            'password'=>bcrypt('aaaaaaaaaaa')
        ]);
        DB::table('users')->insert([
            'name'=>'Jack',
            'email'=>'jack@gmail.com',
            'password'=>bcrypt('aaaaaaaaaaa')
        ]);
    }
}
