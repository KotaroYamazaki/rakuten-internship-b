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
            'name' => str_random(10).' project',
            'admin_user_id' => '1',
            'is_private' => false,
            'introduction' => str_random(200)
        ]);
    }
}
