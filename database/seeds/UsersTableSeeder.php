<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            [
                'name' => 'test',
                'email' => 'vxsRtuOgqi@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => str_random(120),
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'ryo',
                'email' => 'ryo@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Ryo and I like Electric Bass',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'takahiro',
                'email' => 'takahiro@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Takahiro and I like Mountain Climbing',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'takato',
                'email' => 'takato@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Takato and I like Comedy',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'kotaro',
                'email' => 'kotaro@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Kotaro and I like Basketball',
                'github_url' => 'https://github.com/'.str_random(10)
            ]
        ]);
    }
}
