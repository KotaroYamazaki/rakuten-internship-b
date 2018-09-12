<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('projects')->insert([
            [
                'name' => 'test project',
                'admin_user_id' => '1',
                'is_private' => false,
                'introduction' => str_random(200)
            ],
            [
                'name' => "ryo's project",
                'admin_user_id' => '2',
                'is_private' => false,
                'introduction' => str_random(200)
            ],
            [
                'name' => "takahiro's project",
                'admin_user_id' => '3',
                'is_private' => false,
                'introduction' => str_random(200)
            ],
            [
                'name' => "takato's project",
                'admin_user_id' => '4',
                'is_private' => false,
                'introduction' => str_random(200)
            ],
            [
                'name' => "kotaro's project",
                'admin_user_id' => '5',
                'is_private' => false,
                'introduction' => str_random(200)
            ],
        ]);
    }
}
