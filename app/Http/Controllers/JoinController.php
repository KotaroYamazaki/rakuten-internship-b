<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class JoinController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function requests(Request $request, $user_id)
    {
        try {
            $request_list = DB::table('projects')
                                ->where('admin_user_id', $user_id)
                                ->join('user_project', 'projects.project_id', '=', 'user_project.project_id')
                                ->where('state', 'applied')
                                ->join('users', 'user_project.user_id', 'users.user_id')
                                ->get();
            return response($request_list, 200);
        } catch (Exception $e) {
            return response($e, 500);
        }
    }
    public function store(Request $request)
    {
        if (!$request->has(['user_id', 'project_id', 'state'])) {
            return Response::json(['message' => 'wrong parameter!', 'request' => $request], 400);
        }
        //
        try {
            DB::table('user_project')->insert([
                'user_id' => $request->user_id,
                'project_id' => $request->project_id,
                'state' => $request->state
            ]);
            //return response('success!', 200)->header('Content-Type', 'text/plain');
            return Response::json(['message' => 'success!'], 200);
        } catch (QueryException $ex) {
            //return response('なんども押さないで', 400)->header('Content-Type', 'text/plain');
            return Response::json(['message' => 'なんども押さないで'], 400);
        } catch (Exception $e) {
            return Response::json(['message' => $e], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_project_id)
    {
        //
        try {
            DB::table('user_project')
                ->where('user_project_id', $user_project_id)
                ->update(['state' => 'approved']);
            return response('success!', 200);
        } catch (Exception $e) {
            return response($e, 500);
        }
    }
    
    public function reject(Request $request, $user_project_id)
    {
        //
        try {
            DB::table('user_project')
                ->where('user_project_id', $user_project_id)
                ->update(['state' => 'rejected']);
            return response('success!', 200);
        } catch (Exception $e) {
            return response($e, 500);
        }
    }
}
