<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search_index()
    {
        return view('search');
    }
    
    /**
     * select user data in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function users_data_requests(Request $request, $tag_id)
    {
        try {
            $request_list = DB::table('users')
                                ->join('tag_user_project', 'users.user_id', '=', 'tag_user_project.target_id')
                                ->where('tag_id', '$tag_id')
                                ->value('user_id', 'name')
                                ->get();
            return response($request_list, 200);
        } catch (Exception $e) {
            return response($e, 500);
        }
    }
    
        /**
     * select project data in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function projects_data_requests(Request $request, $tag_id)
    {
        try {
            $project_data = DB::table('projects')
                                ->join('tag_user_project', 'projects.project_id', '=', 'tag_user_project.target_id')
                                ->where('tag_id', '$tag_id')
                                ->value('project_id', 'name')
                                ->get();
            return view('search', $project_data);
        } catch (Exception $e) {
            return response($e, 500);
        }
    }
}
