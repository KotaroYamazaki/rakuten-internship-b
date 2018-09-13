<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_index(Request $req)
    {
        $data['projects'] = DB::table('projects')
            ->leftjoin('user_project', 'projects.project_id', '=', 'user_project.project_id')
            ->where('user_project.user_id', $req->id)
            ->orWhere('projects.admin_user_id', $req->id)
            ->select('projects.*')
            ->distinct()
            ->get();

        // それぞれのプロジェクトの該当するタグを取得して、
        // プロジェクトに挿入する
        $projectIds = $data['projects']->pluck('project_id')->unique();
        $projectTags = DB::table('tag')
            ->join('tag_user_project', 'tag.tag_id', '=', 'tag_user_project.tag_id')
            ->whereIn('tag_user_project.target_id', $projectIds)
            ->where('tag_user_project.target_type', 'project_id')
            ->get()->mapToGroups(function ($tup) {
                return [$tup->target_id => $tup];
            });
        
        foreach ($data['projects'] as &$project) {
            $project->tags = $projectTags[$project->project_id] ?? [];
        }
            
                        
        $data['tags'] = DB::table('tag')
            ->leftjoin('tag_user_project', 'tag.tag_id', '=', 'tag_user_project.tag_id')
            ->where([['target_id', $req->id], ['target_type', 'user_id']])
            ->get();
        $data['user'] = DB::table('users')->where('user_id', $req->id)->first();      
        // $data['user_id'] = $req->id;
        // $data['user_name'] = $user->name;
        // $data['introduction'] = $user->introduction;
        
        
        return view('users.profile', $data);
    }
}



