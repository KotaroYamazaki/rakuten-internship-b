<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $req)
    {
        $user = DB::table('users')->where('user_id', $req->id)->first();      
        $data['user_id'] = $req->id;
        $data['user_name'] = $user->name;
        return view('users.profile', $data);
    }
    public function getProject(Request $req){
        $project_name = DB::table('projects')
                    ->leftjoin('user_project', 'projects.project_id', '=', 'user_project.project_id')
                    ->where('user_id', $req->id)
                    ->value('name');
        return $project_name;
    }
    
    public function getTag(Request $req){
        $tag_name = DB::table('tag')
                ->leftjoin('tag_user_project', 'tag.tag_id', '=', 'tag_user_project.tag_id')
                ->where('target_id', $req->id)
                ->value('tag_name');
        return $tag_name;
    }
    
}