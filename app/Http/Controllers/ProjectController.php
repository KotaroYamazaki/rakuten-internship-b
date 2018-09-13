<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

//ProjectController
class ProjectController extends Controller
{
    public function project_index(Request $req)
    {
        $project = DB::table('projects')->where('project_id', $req->id)->get()->first();
        $data['tags'] = DB::table('tag')
                        ->leftjoin('tag_user_project', 'tag.tag_id', '=', 'tag_user_project.tag_id')
                        ->where([['target_id', $req->id], ['target_type', 'user_id']])
                        ->get();
        
        
        //$data['project_member'] = DB::table;
        $data['project_id'] = $req->id;
        $data['project_name'] = $project->name;
        $data['project_members'] = DB::table('user_project')
                            ->select('user_id')
                            ->where([['project_id', $req->id], ['state','approve']])
                            ->get();
                            
        return view('projects.index', $data);
    }
}