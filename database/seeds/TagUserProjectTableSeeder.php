<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagUserProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tag_user_project')->insert([
            [
                'tag_id' => 1,
                'target_id' => 1,
                'target_type' => 'user_id'
            ]
        ]);
    }
}
