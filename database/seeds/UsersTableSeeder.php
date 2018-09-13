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
                'name' => 'Jobs',
                'email' => 'vxsRtuOgqi@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'こんにちは！Elon Muskです。プリファード・ネットワークス(PFN)で技術顧問してます！得意な言語はCOBOLです。趣味はハッキングです。よろしく！',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'ryo',
                'email' => 'ryo@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'プログラミングで年収３億/投資/仮想通貨/資産運用/興味ある方DMください。自由に稼ぐ。今日も焼肉',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'takahiro',
                'email' => 'takahiro@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Takahiro and I like Mountain Climbing.私はかわいい女の子が好きです。いつでもDMください。',
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
            ],
            [
                'name' => 'yossy',
                'email' => 'yossy@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Yossy and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'teppy',
                'email' => 'teppy@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Teppy and I like snow',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'pedro',
                'email' => 'pedro@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Pedro',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'rew',
                'email' => 'rew@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Rew',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'sakata',
                'email' => 'sakata@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Sakata',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'yoshihama',
                'email' => 'yoshihama@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Yoshihama',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'rakuten',
                'email' => 'rakuten@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Rakuten',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'daigo',
                'email' => 'daigo@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is daigo',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'nobu',
                'email' => 'nobu@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Nobu and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'kuroda',
                'email' => 'kuroda@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is kuroda',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'kukcy',
                'email' => 'kukcy@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Kucky',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'gopher',
                'email' => 'gopher@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Gopher and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'kappy',
                'email' => 'kappy@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Kappy and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'reo',
                'email' => 'reo@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Reo and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'sinatra',
                'email' => 'sinatra@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Sinatra',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'pencil',
                'email' => 'pencil@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Pencil',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'yasuda',
                'email' => 'yasuda@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Yasuda and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'falcon',
                'email' => 'falcon@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Falcon',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'yui',
                'email' => 'yui@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Yui',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'World of King',
                'email' => 'King@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is King and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'ageage',
                'email' => 'ageage@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Ageage and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'hogehoge',
                'email' => 'hogehoge@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Hogehoge and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'internMan',
                'email' => 'InternMan@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is InternMan and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'Jobs',
                'email' => 'Jobs@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Jobs and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'bill',
                'email' => 'bill@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Bill and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'mark',
                'email' => 'mark@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Mark and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'oppy',
                'email' => 'oppy@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is oppy and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'choppy',
                'email' => 'choppy@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Choppy and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'sippy',
                'email' => 'sippy@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is sippy and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'chappy',
                'email' => 'chappy@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Chappy and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'woppy',
                'email' => 'woppy@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Woppy and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'mappy',
                'email' => 'mappy@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Mappy and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'quppy',
                'email' => 'quppy@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Quppy and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'loppy',
                'email' => 'loppy@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Loppy and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'jeppy',
                'email' => 'jeppy@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Jeppy and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'vippy',
                'email' => 'vippy@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Vippy and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'yappy',
                'email' => 'yappy@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Yappy and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'happy',
                'email' => 'happy@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Happy and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'fappy',
                'email' => 'fappy@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Fappy and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
            [
                'name' => 'eppy',
                'email' => 'eppy@shizuoka.ac.jp',
                'password' => Hash::make('password'),
                'introduction' => 'Hi my name is Eppy and I like tennis',
                'github_url' => 'https://github.com/'.str_random(10)
            ],
        ]);
    }
}
