<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function project_index(Request $req)
    {
        $project = DB::table('projects')->where('project_id', $req->id)->get()->first();

        $project->tags = DB::table('tag')
            ->leftjoin('tag_user_project', 'tag.tag_id', '=', 'tag_user_project.tag_id')
            ->where([['target_id', $req->id], ['target_type', 'project_id']])
            ->get();
            
        $users = DB::table('users')
            ->leftjoin('user_project', 'user_project.user_id', '=', 'users.user_id')
            ->where([
                ['project_id', $req->id],
                ['user_project.state', 'approved'],
            ])
            ->orWhere('users.user_id', $project->admin_user_id)
            ->select('users.*')
            ->get();
        
        $project->admin = $users->firstWhere('user_id', $project->admin_user_id);
        $project->users = $users->reject(function ($user) use ($project) {
          return (int) $user->user_id === (int) $project->admin_user_id;
        });
        
        $data['project'] = $project;
                            
        return view('projects.index', $data);
    }
}