<?php

use Illuminate\Database\Seeder;

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
            'name' => 'phanvan91',
            'email' => 'phanvan91@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
