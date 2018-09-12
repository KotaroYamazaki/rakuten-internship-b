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
                'project_id' => 1,
                'state' => "applied"
            ]
        ]);
    }
}
