<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user_project')->insert([
            [
                'user_id' => 1,
                'project_id' => 2,
                'state' => "applied"
            ],
            [
                'user_id' => 1,
                'project_id' => 3,
                'state' => "applied"
            ],
            [
                'user_id' => 2,
                'project_id' => 5,
                'state' => "applied"
            ],
            [
                'user_id' => 3,
                'project_id' => 5,
                'state' => "applied"
            ],
            [
                'user_id' => 4,
                'project_id' => 5,
                'state' => "applied"
            ],
            [
                'user_id' => 5,
                'project_id' => 2,
                'state' => "applied"
            ]
        ]);
    }
}
