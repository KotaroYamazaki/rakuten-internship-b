<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tag')->insert([
            [
                'tag_name' => 'PHP'
            ],
            [
                'tag_name' => 'Ruby'    
            ],
            [
                'tag_name' => 'Elixir'
            ],
            [
                'tag_name' => 'Rust'    
            ],
            [
                'tag_name' => 'Crystal'    
            ],
            [
                'tag_name' => 'Nim'    
            ],
            [
                'tag_name' => 'elm'    
            ],
            [
                'tag_name' => 'Laravel'    
            ],
            [
                'tag_name' => 'MySQL'    
            ],
            [
                'tag_name' => 'DynamoDB'    
            ]
        ]);
    }
}
