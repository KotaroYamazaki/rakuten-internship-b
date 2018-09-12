<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@shizuoka.ac.jp',
            'password' => 'password',
            'introduction' => str_random(120),
            'github_url' => 'https://github.com/'.str_random(10)
        ]);
    }
}
