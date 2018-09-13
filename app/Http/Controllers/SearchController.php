<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    
    /**
     * select user data in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchUsersProjectsByTag(Request $request)
    {
        $id = $request->id;
        
        // ちなみに、同時に一つのキーワードでしか検索出来ない
        if (is_numeric($id)) {
            $tagUserProjects = DB::table('tag_user_project')
                ->where('tag_id', $id)
                ->get();
        } else {
            $tagUserProjects = DB::table('tag_user_project')
                ->join('tag', 'tag.tag_id', '=', 'tag_user_project.tag_id')
                ->where('tag.tag_name', $id)
                ->get();
        }
        
        $userIds = $tagUserProjects->where('target_type', 'user_id')->pluck('target_id');
        $projectIds = $tagUserProjects->where('target_type', 'project_id')->pluck('target_id');
        
        $users = DB::table('users')
            ->whereIn('user_id', $userIds)
            ->get();
            
        $projects = DB::table('projects')
            ->whereIn('project_id', $projectIds)
            ->get();
        
        return view('search', compact('users', 'projects'));
    }
}
