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
            'name' => 'Mizanur Rahman',
            'email' => 'mizanur@gmail.com',
            'password' => bcrypt('mizanur'),
            'verified' => 1,
        ]);
    }
}
